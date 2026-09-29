<?php
require __DIR__ . '/../vendor/autoload.php';
use Affinity\Affinity;use Affinity\AffinityError;function syncPatient($patient) {}

$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-practice-0']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
$patients = $api->patients->list(['limit' => 20]);
$patient = $api->patients->get($patientId);
$items = $api->catalog->items->list(['limit' => 20]);


$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-1']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
$patients = $api->patients->list(['limit' => 20], ['practiceId' => $practiceId]);
$patient = $api->patients->get($patientId, ['practiceId' => $practiceId]);

$api->patients->update(
    $patientId,
    ['email' => 'alex@example.com'],
    ['practiceId' => $practiceId],
);


$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-2']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
$practice = $api->forPractice($practiceId);

$patients = $practice->patients->list(['limit' => 20]);
$items = $practice->catalog->items->list(['limit' => 20]);


$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-3']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
$patient = $practice->patients->create([
    'name' => ['first' => 'Alex', 'last' => 'Example'],
    'dateOfBirth' => '1990-01-01',
]);

$saved = $practice->patients->get($patient->id);
$practice->patients->update($patient->id, ['email' => 'alex@example.com']);
$practice->patients->update($patient->id, ['status' => 'archived']);


$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-4']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
$practice->patients->delete($patientId);


$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-5']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
$order = $api->orders->create(
    ['patientId' => $patientId, 'prescriptions' => $draft->prescriptions],
    ['practiceId' => $practiceId, 'idempotencyKey' => $job->createOrderKey],
);


$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-6']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
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



$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-7']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
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


$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-8']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
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


$api=new Affinity('test',['baseUrl'=>'http://127.0.0.1:5199/php-docs-platform-9']);
$practiceId='prac_a';$patientId='pat_a';$orderId='ord_a';$practice=$api->forPractice($practiceId);
$draft=(object)['prescriptions'=>[]];$job=(object)['createOrderKey'=>'create','signOrderKey'=>'sign','submitOrderKey'=>'submit'];$review=(object)['prescriberId'=>'prov_a','orderRevision'=>'rev_a','signatureAttestation'=>true];
$practices = $api->practices->list(['limit' => 20]);
$selected = $api->practices->get($practiceId);
$endpoints = $api->webhooks->endpoints->list(['limit' => 20]);

