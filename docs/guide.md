# PHP SDK guide

PHP server applications. [Source repository](https://github.com/affinity-health/affinity-php) · [All SDKs](https://docs.affinityrx.com/guides/reference/sdks/)

## Install

Add the repository to `composer.json`, then run `composer require affinity-health/sdk:0.3.0`.

```json
{
  "repositories": [{ "type": "vcs", "url": "https://github.com/affinity-health/affinity-php" }]
}
```

Version 0.3.0 uses the same deployed API contract as TypeScript SDK 1.16.0.

## Connect

Set `AFFINITY_API_KEY` to a Test API key on your server. The key selects Test or Live mode. Keep it out of browser and mobile code.

```php
<?php
use Affinity\Affinity;
use Affinity\AffinityError;

$api = new Affinity(getenv('AFFINITY_API_KEY'));
```

## With a practice key

The key identifies the practice. No practice ID or scoped client is needed.
The resource IDs below come from records in that practice.
Each section is a separate usage example, not one script to concatenate.

```php
$patients = $api->patients->list(['limit' => 20]);
$patient = $api->patients->get($patientId);
$items = $api->catalog->items->list(['limit' => 20]);
```

## With a platform key

Pass the target practice with each practice-scoped request. Keep record data separate from request context and idempotency options.

```php
$patients = $api->patients->list(['limit' => 20], ['practiceId' => $practiceId]);
$patient = $api->patients->get($patientId, ['practiceId' => $practiceId]);

$api->patients->update(
    $patientId,
    ['email' => 'alex@example.com'],
    ['practiceId' => $practiceId],
);
```

## Scope a workflow once

A scoped client remembers the practice for subsequent requests. It is immutable; the original client and other scoped clients stay independent.
A conflicting practice ID produces an error. Scoping never grants access to another practice.

```php
$practice = $api->forPractice($practiceId);

$patients = $practice->patients->list(['limit' => 20]);
$items = $practice->catalog->items->list(['limit' => 20]);
```

The following examples use this scoped client. A practice-key client supports the same calls without the scoping step.

## Create, get, and update a patient

Use synthetic Test data. Routine writes generate a fresh idempotency key per call and preserve it during internal retries.
Supply your own persisted key when retrying across calls or process restarts.

```php
$patient = $practice->patients->create([
    'name' => ['first' => 'Alex', 'last' => 'Example'],
    'dateOfBirth' => '1990-01-01',
]);

$saved = $practice->patients->get($patient->id);
$practice->patients->update($patient->id, ['email' => 'alex@example.com']);
$practice->patients->update($patient->id, ['status' => 'archived']);
```

The SDK maps `archived` to the API’s `inactive` status. Returned records use `inactive`.

Archive patients whose records you need to retain. Permanent deletion is available only for patients without order history. No explicit idempotency key is needed.

```php
$practice->patients->delete($patientId);
```

## Create an order draft

`draft` is your application's prepared prescription data, using catalog and prescribing options from this practice.
An order contains 1–20 complete prescriptions for one patient. This example creates an unsigned draft.
It shows a platform call without a scoped client: practice context and the persisted key belong together in request options.

`job` is your persisted workflow record. Generate and save a unique key for each action before making its first request.

```php
$order = $api->orders->create(
    ['patientId' => $patientId, 'prescriptions' => $draft->prescriptions],
    ['practiceId' => $practiceId, 'idempotencyKey' => $job->createOrderKey],
);
```

## Sign and submit

`review` is your saved clinician review and signing consent for this exact order.
Store the reviewed revision, authorized prescriber ID, and explicit attestation together.
Your API key needs `orders:sign`. Never infer consent or automatically replace a stale revision.

```php
$practice->orders->sign(
    $orderId,
    [
        'prescriber' => ['id' => $review->prescriberId],
        'expectedRevision' => $review->orderRevision,
        'signatureAttestation' => $review->signatureAttestation,
    ],
    ['idempotencyKey' => $job->signOrderKey],
);

$submission = $practice->orders->submit($orderId, [
    'idempotencyKey' => $job->submitOrderKey,
]);

```

Use separate keys for creating, signing, and submitting. After an uncertain response, retry the same action with the same key and unchanged data.
A revision conflict requires renewed clinician review before another signing attempt.

Submission means queued, not accepted by the pharmacy. Inspect the result and track order events or webhooks.
After a reported partial submission failure, retry only the unconfirmed send with a new submission key.

## Read more than one page

The list method returns one page. Pass the last record's ID to request the next page.
The iterator fetches pages as you consume records; it does not load the full collection into memory.
`syncPatient` or its language equivalent represents your application's record handler.

```php
$page = $practice->patients->list(['limit' => 20]);
if ($page->hasMore && count($page->data) > 0) {
    $next = $practice->patients->list([
        'limit' => 20,
        'startingAfter' => $page->data[array_key_last($page->data)]->id,
    ]);
}

foreach ($practice->patients->iterate(['limit' => 100]) as $patient) {
    syncPatient($patient);
}
```

## Handle errors

API failures expose status, code, request ID, retryability, and an optional retry delay in seconds.
Log those fields without logging patient data or credentials. Transport failures remain distinguishable from API responses.

```php
try {
    $practice->patients->get($patientId);
} catch (AffinityError $error) {
    error_log(json_encode([
        'status' => $error->status,
        'code' => $error->errorCode,
        'requestId' => $error->requestId,
        'retryable' => $error->retryable,
        'retryAfter' => $error->retryAfter,
    ]));
}
```

Retryability is a transport hint, not permission to repeat a clinical action with a new key.
Keep the same key and body for an uncertain write. Validation and authorization errors require a corrected request.
See [API errors](https://docs.affinityrx.com/errors/) for recovery guidance.

## Platform directory and webhooks

Use the root platform client to list its practices and webhook endpoints. These calls do not need a target practice or an idempotency key.
The webhook list belongs to the platform itself. Access to another organization's endpoints still requires an explicit grant.

```php
$practices = $api->practices->list(['limit' => 20]);
$selected = $api->practices->get($practiceId);
$endpoints = $api->webhooks->endpoints->list(['limit' => 20]);
```

## More resources

Use the same conventions for addresses, allergies, locations, team members, and nested order resources.
[API reference](https://docs.affinityrx.com/api/) · [Webhooks](https://docs.affinityrx.com/guides/webhooks/)
