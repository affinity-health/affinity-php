# Reference
## Locations
<details><summary><code>$client-&gt;locations-&gt;listPracticeLocations($practiceId, $request) -> ?ListPracticeLocationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires locations:read on a practice key or an authorized platform key. Lists active and archived locations by name, with cursor pagination. Use status to filter. Location records are shared between Test and Live for the same practice.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->listPracticeLocations(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new ListPracticeLocationsRequest([
        'startingAfter' => 'loc_01j2y8m6jcc9tt24af5pw9x1bc',
        'endingBefore' => 'loc_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;locations-&gt;createPracticeLocation($practiceId, $request) -> ?CreatePracticeLocationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires locations:write and Idempotency-Key for API keys. Creates an active location with a unique name in this practice. Locations are shared between Test and Live. Use the returned ID for Team location access.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->createPracticeLocation(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new CreatePracticeLocationRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$city:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$country:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$line1:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$line2:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$state:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$timezone:** `?string` — Optional IANA timezone override. Omit to leave unchanged; null clears it. No timezone is inferred when creating a record.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;locations-&gt;getPracticeLocation($practiceId, $locationId) -> ?GetPracticeLocationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires locations:read. Returns one active or archived location in the authorized practice.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->getPracticeLocation(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'loc_01j2y8m6jcc9tt24af5pw9x1bc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locationId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;locations-&gt;updatePracticeLocation($practiceId, $locationId, $request) -> ?UpdatePracticeLocationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires locations:write and Idempotency-Key for API keys. Updates only supplied fields; null clears optional contact and address fields. Archived locations cannot be updated. Changes apply to both Test and Live.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->updatePracticeLocation(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'loc_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdatePracticeLocationRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locationId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$city:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$country:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$line1:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$line2:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$postalCode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$state:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$timezone:** `?string` — Optional IANA timezone override. Omit to leave unchanged; null clears it. No timezone is inferred when creating a record.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;locations-&gt;archivePracticeLocation($practiceId, $locationId, $request) -> ?ArchivePracticeLocationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires locations:write and Idempotency-Key for API keys. Retains the location and historical associations. Archived locations cannot receive new Team assignments. Repeating archive returns the archived location. Changes apply to both Test and Live.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->locations->archivePracticeLocation(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'loc_01j2y8m6jcc9tt24af5pw9x1bc',
    new ArchivePracticeLocationRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$locationId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## API Keys
<details><summary><code>$client-&gt;apiKeys-&gt;createPlatformPracticeApiKey($practiceId, $request) -> ?CreatePlatformPracticeApiKeyResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a practice API key for a connected practice. Requires a platform key with service_keys:write and every requested scope. The practice key uses the platform key's Test or Live mode and cannot outlive it. Requires Idempotency-Key for safe retries; the secret is returned in the encrypted replay response for 24 hours.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->apiKeys->createPlatformPracticeApiKey(
    'practiceId',
    new CreatePlatformPracticeApiKeyRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$allowedIps:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$expiresAt:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$scopes:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;apiKeys-&gt;getApiAccess() -> ?GetApiAccessResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns the subject, mode, and scopes for the API key.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->apiKeys->getApiAccess();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Account
<details><summary><code>$client-&gt;account-&gt;getAccount($request) -> ?GetAccountResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns the platform organization, request livemode, and effective access. API keys report scopes and the service_key role; dashboard sessions report membership permissions. operatingMode describes organization Live access, not the credential's Test/Live mode.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->account->getAccount(
    new GetAccountRequest([
        'orgId' => 'acct_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orgId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Catalog
<details><summary><code>$client-&gt;catalog-&gt;listCatalogItems($request) -> ?ListCatalogItemsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Lists catalog items for the authenticated account and mode. Use view=medications for priced prescription groups with offer counts, pharmacy counts, and strengths; the default view=offers returns individual offers. Use relatedToCatalogItemId to find offers for the same medication and route. When practiceId is supplied, a practice price overrides the platform price and missing overrides inherit the platform price.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->listCatalogItems(
    new ListCatalogItemsRequest([
        'relatedToCatalogItemId' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
        'catalogItemId' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
        'pharmacyIds' => 'pharm_01j2y8m6jcc9tt24af5pw9x1bc',
        'endingBefore' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
        'orgId' => 'acct_01j2y8m6jcc9tt24af5pw9x1bc',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'startingAfter' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$view:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$relatedToCatalogItemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$catalogKind:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$catalogItemId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$availability:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pharmacyIds:** `string|array|null` 
    
</dd>
</dl>

<dl>
<dd>

**$dosageForms:** `string|array|null` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$hideControlledSubstances:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$hideUnpriced:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$orgId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$query:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$requirement:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$routes:** `string|array|null` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;listPharmacies($request) -> ?ListPharmaciesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Lists pharmacies available to the authenticated account, including approved invite-only relationships.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->listPharmacies(
    new ListPharmaciesRequest([
        'endingBefore' => 'pharm_01j2y8m6jcc9tt24af5pw9x1bc',
        'orgId' => 'acct_01j2y8m6jcc9tt24af5pw9x1bc',
        'pharmacyId' => 'pharm_01j2y8m6jcc9tt24af5pw9x1bc',
        'startingAfter' => 'pharm_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$orgId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$pharmacyId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$query:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$shipsToState:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;listShippingOptions($catalogItemId, $request) -> ?array</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns an array of at most 50 reviewed shipping services eligible for a catalog item, destination, and API mode. destinationState must be a USPS state or territory code. Each option has one temperature; pharmacy catalog summaries list all supported temperatures.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->listShippingOptions(
    'cat_01j2y8m6jcc9tt24af5pw9x1bc',
    new ListShippingOptionsRequest([
        'destinationState' => 'destinationState',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$catalogItemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$destinationState:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$destinationType:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;catalog-&gt;retrievePrescribingOptions($catalogItemId, $request) -> ?RetrievePrescribingOptionsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires catalog:read. Returns reviewed SIG presets, guided patterns, quantity constraints and product requirements for a practice and mode. Revisions identify changed defaults. No patient-specific rationale or diagnosis is inferred.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->catalog->retrievePrescribingOptions(
    'cat_01j2y8m6jcc9tt24af5pw9x1bc',
    new RetrievePrescribingOptionsRequest([
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$catalogItemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Orders
<details><summary><code>$client-&gt;orders-&gt;listOrders($request) -> ?ListOrdersResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->listOrders(
    new ListOrdersRequest([
        'endingBefore' => 'ord_01j2y8m6jcc9tt24af5pw9x1bc',
        'orderId' => 'ord_01j2y8m6jcc9tt24af5pw9x1bc',
        'patientId' => 'pat_01j2y8m6jcc9tt24af5pw9x1bc',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'startingAfter' => 'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$query:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalOrderId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$createdAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$createdBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$orderId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientExternalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;createOrder($request) -> ?CreateOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates one unsigned order with 1–20 prescriptions for one patient in one practice. Supply patientId or patient; inline patient creation requires patients:write. Prescriber is optional: select by npi, provider id, or integration-scoped externalId, or leave the draft unassigned until signing. First-use prescriber registration requires team:write. Legacy userId is supported but cannot be combined with prescriber. Idempotency-Key is required.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->createOrder(
    new CreateOrderRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'prescriptions' => [
            new CreateOrderRequestPrescriptionsItem([
                'daysSupply' => 1,
                'dispensing' => new CreateOrderRequestPrescriptionsItemDispensing([]),
                'directions' => 'directions',
                'medicationId' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
                'quantity' => CreateOrderRequestPrescriptionsItemQuantityOne::Infinity->value,
                'quantityUnit' => 'quantityUnit',
                'refills' => 1,
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriber:** `?CreateOrderRequestPrescriber` 
    
</dd>
</dl>

<dl>
<dd>

**$otcItems:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$externalOrderId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$metadata:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$patient:** `?CreateOrderRequestPatient` 
    
</dd>
</dl>

<dl>
<dd>

**$shippingAddressId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriptions:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;getOrder($orderId, $request) -> ?GetOrderResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->getOrder(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new GetOrderRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;cancelOrder($orderId, $request) -> ?CancelOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requests cancellation. HTTP 200 means the request was handled; check cancellation.status for confirmed, pending, partial, or failed. Only confirmed means the entire order is cancelled. Shipment possession makes a fulfillment cancellation too late.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->cancelOrder(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new CancelOrderRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'reason' => 'reason',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;actOnOrderException($orderId, $exceptionId, $request) -> ?ActOnOrderExceptionResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Acknowledge, retry, contact, or resolve an order exception in the credential's Test/Live mode. assign_to_me requires a signed-in dashboard user; API keys receive 400 and may use acknowledge instead. Actor headers do not create a dashboard assignee.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->actOnOrderException(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    'fex_01j2y8m6jcc9tt24af5pw9x1bc',
    new ActOnOrderExceptionRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'action' => ActOnOrderExceptionRequestAction::Acknowledge->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$exceptionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$action:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$note:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;listOrderEvents($orderId, $request) -> ?ListOrderEventsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->listOrderEvents(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new ListOrderEventsRequest([
        'endingBefore' => 'evt_01j2y8m6jcc9tt24af5pw9x1bc',
        'startingAfter' => 'evt_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;getOrderTestSimulation($orderId) -> ?GetOrderTestSimulationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:write. Available only in Test mode.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->getOrderTestSimulation(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;updateOrderTestSimulation($orderId, $request) -> ?UpdateOrderTestSimulationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:write and Idempotency-Key. Configure before submission or queue a valid pharmacy event in manual mode. Events use normal order history and Test webhooks. Live requests are rejected.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->updateOrderTestSimulation(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdateOrderTestSimulationRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'mode' => UpdateOrderTestSimulationRequestMode::Automatic->value,
        'scenario' => UpdateOrderTestSimulationRequestScenario::Successful->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$mode:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$scenario:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$action:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;previewOrder($request) -> ?PreviewOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:write and catalog:read. Supply exactly one of patientId, patientExternalId, or inline patient details. External-ID lookup additionally requires patients:read; inline details require patients:write. Resolves defaults and explicit edits for 1–20 prescriptions. Reuses stored patient details when identifiers match; otherwise previews inline details without creating a patient. Complete previews contain an orders.create input. Does not create records, reserve prices, sign, charge or transmit. No idempotency key is required. Creation and signing recheck current requirements.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->previewOrder(
    new PreviewOrderRequest([
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'prescriptions' => [
            new PreviewOrderRequestPrescriptionsItem([
                'medicationId' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$otcItems:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientExternalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$patient:** `?PreviewOrderRequestPatient` 
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriber:** `?PreviewOrderRequestPrescriber` 
    
</dd>
</dl>

<dl>
<dd>

**$shippingAddressId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalOrderId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriptions:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$shipping:** `?PreviewOrderRequestShipping` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;signOrder($orderId, $request) -> ?SignOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:sign, Idempotency-Key, signatureAttestation, and expectedRevision from the reviewed order. Existing integrations may send expectedVersions instead; supply exactly one. A stale revision returns 409 and requires renewed clinician review. Select prescriber by npi, provider id, or integration-scoped externalId, or inherit the draft's prescriber. First-use registration requires team:write. Actor headers are optional audit metadata with prescriber; legacy userId requires matching clinician actor headers. Signing does not submit to a pharmacy.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->signOrder(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new SignOrderRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'signatureAttestation' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriber:** `?SignOrderRequestPrescriber` 
    
</dd>
</dl>

<dl>
<dd>

**$signatureAttestation:** `bool` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedRevision:** `?string` — Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
    
</dd>
</dl>

<dl>
<dd>

**$expectedVersions:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;signAndSubmitOrder($orderId, $request) -> ?SignAndSubmitOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:sign, Idempotency-Key, signatureAttestation, and expectedRevision from the reviewed order. Existing integrations may send expectedVersions instead; supply exactly one. A stale revision returns 409 and requires renewed clinician review. Select prescriber by npi, provider id, or externalId, or inherit the draft's prescriber. First-use registration requires team:write. Actor headers are optional with prescriber; legacy userId requires matching clinician actor headers. Signs the complete order, then attempts each submission. Signing remains committed if submission fails. Replay the same key after an uncertain response; retry reported submission failures through Submit order with a new key. Submitted means queued, not pharmacy acceptance.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->signAndSubmitOrder(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new SignAndSubmitOrderRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'signatureAttestation' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriber:** `?SignAndSubmitOrderRequestPrescriber` 
    
</dd>
</dl>

<dl>
<dd>

**$signatureAttestation:** `bool` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedRevision:** `?string` — Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
    
</dd>
</dl>

<dl>
<dd>

**$expectedVersions:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;submitOrder($orderId, $request) -> ?SubmitOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:sign and Idempotency-Key. Queues signed prescriptions after rechecking authorization, signature integrity, billing, and fulfillment eligibility. Track pharmacy acceptance through order reads and webhooks. After a partial failure, retry submission with a new idempotency key; already queued prescriptions are not duplicated.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->submitOrder(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new SubmitOrderRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriber:** `?SubmitOrderRequestPrescriber` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;rejectOrder($orderId, $request) -> ?RejectOrderResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:sign and Idempotency-Key. Select a prescriber or inherit the draft's prescriber. Legacy userId requires matching clinician actor headers. Supply expectedRevision from the reviewed order, or expectedVersions for existing integrations. Permanently rejects the complete unsigned order after checking its revision.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->rejectOrder(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new RejectOrderRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'reason' => 'reason',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriber:** `?RejectOrderRequestPrescriber` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedRevision:** `?string` — Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
    
</dd>
</dl>

<dl>
<dd>

**$expectedVersions:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;addOrderPrescription($orderId, $request) -> ?AddOrderPrescriptionResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:write, Idempotency-Key and expectedRevision from the order being edited. Existing integrations may send expectedVersions instead; supply exactly one. Adds a complete prescription to an unsigned Order and returns all new versions. Omitted actor context defaults to the authenticated service account as a system actor. Patient and prescriber attribution stay fixed. Signed orders cannot be amended through this endpoint. Signing and submission require orders:sign through their separate endpoints.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->addOrderPrescription(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    new AddOrderPrescriptionRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'prescription' => new AddOrderPrescriptionRequestPrescription([
            'daysSupply' => 1,
            'dispensing' => new AddOrderPrescriptionRequestPrescriptionDispensing([]),
            'directions' => 'directions',
            'medicationId' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
            'quantity' => AddOrderPrescriptionRequestPrescriptionQuantityOne::Infinity->value,
            'quantityUnit' => 'quantityUnit',
            'refills' => 1,
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$metadata:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedRevision:** `?string` — Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
    
</dd>
</dl>

<dl>
<dd>

**$expectedVersions:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$prescription:** `AddOrderPrescriptionRequestPrescription` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;updateOrderPrescription($orderId, $prescriptionId, $request) -> ?UpdateOrderPrescriptionResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires orders:write, Idempotency-Key and expectedRevision from the order being edited. Existing integrations may send expectedVersions instead; supply exactly one. Replaces one prescription with complete medication instructions and returns all new versions. Omitted actor context defaults to the authenticated service account as a system actor. Patient and prescriber attribution stay fixed. Signed orders cannot be amended through this endpoint. Signing and submission require orders:sign through their separate endpoints.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->updateOrderPrescription(
    'ord_01j2y8m6jcc9tt24af5pw9x1bc',
    'rx_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdateOrderPrescriptionRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'prescription' => new UpdateOrderPrescriptionRequestPrescription([
            'daysSupply' => 1,
            'dispensing' => new UpdateOrderPrescriptionRequestPrescriptionDispensing([]),
            'directions' => 'directions',
            'medicationId' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
            'quantity' => UpdateOrderPrescriptionRequestPrescriptionQuantityOne::Infinity->value,
            'quantityUnit' => 'quantityUnit',
            'refills' => 1,
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$orderId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriptionId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$metadata:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expectedRevision:** `?string` — Opaque revision of the complete order prescription set. Send the revision you reviewed as expectedRevision; never replace it automatically after a conflict.
    
</dd>
</dl>

<dl>
<dd>

**$expectedVersions:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$prescription:** `UpdateOrderPrescriptionRequestPrescription` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;orders-&gt;createOrderBatch($request) -> ?CreateOrderBatchResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates 1–20 orders for distinct patients in one practice, each with 1–20 prescriptions. Each accepts patientId or inline patient details. Orders and newly created patients commit atomically; any failure saves none. Requires orders:write and Idempotency-Key; inline patients also require patients:write. Omitted actor context defaults to the authenticated service account as a system actor. Sign and submit each resulting order separately using orders:sign.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->orders->createOrderBatch(
    new CreateOrderBatchRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'orders' => [
            new CreateOrderBatchRequestOrdersItem([
                'prescriptions' => [
                    new CreateOrderBatchRequestOrdersItemPrescriptionsItem([
                        'daysSupply' => 1,
                        'dispensing' => new CreateOrderBatchRequestOrdersItemPrescriptionsItemDispensing([]),
                        'directions' => 'directions',
                        'medicationId' => 'cat_01j2y8m6jcc9tt24af5pw9x1bc',
                        'quantity' => CreateOrderBatchRequestOrdersItemPrescriptionsItemQuantityOne::Infinity->value,
                        'quantityUnit' => 'quantityUnit',
                        'refills' => 1,
                    ]),
                ],
            ]),
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$userId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriber:** `?CreateOrderBatchRequestPrescriber` 
    
</dd>
</dl>

<dl>
<dd>

**$orders:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Webhooks
<details><summary><code>$client-&gt;webhooks-&gt;listWebhookEndpoints($request) -> ?ListWebhookEndpointsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires webhooks:read. Returns endpoints owned by the key organization, or the organization selected with X-Affinity-Organization-Id. Platform delegation requires a webhook grant in the key's mode.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->listWebhookEndpoints(
    new ListWebhookEndpointsRequest([
        'endingBefore' => 'whe_01j2y8m6jcc9tt24af5pw9x1bc',
        'startingAfter' => 'whe_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;createWebhookEndpoint($request) -> ?CreateWebhookEndpointResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires webhooks:write and Idempotency-Key. Defaults to the API key organization. A platform can select a practice or pharmacy owner with X-Affinity-Organization-Id and an explicit webhook grant. For platform-owned endpoints, practiceIds narrows delivery to selected connected practices. An empty filter receives all otherwise-authorized events.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->createWebhookEndpoint(
    new CreateWebhookEndpointRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'url' => 'url',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceIds:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payloadStyle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$subscribedEvents:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$url:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;deleteWebhookEndpoint($endpointId, $request) -> ?DeleteWebhookEndpointResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->deleteWebhookEndpoint(
    'whe_01j2y8m6jcc9tt24af5pw9x1bc',
    new DeleteWebhookEndpointRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$endpointId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;updateWebhookEndpoint($endpointId, $request) -> ?UpdateWebhookEndpointResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires webhooks:write and Idempotency-Key. Updates an endpoint in the selected organization and mode. Omitted practiceIds preserves the filter; an empty array removes the practice filter. Subscription changes apply to newly generated events.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->updateWebhookEndpoint(
    'whe_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdateWebhookEndpointRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$endpointId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceIds:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$description:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$payloadStyle:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$subscribedEvents:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$url:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;rotateWebhookEndpointSecret($endpointId, $request) -> ?RotateWebhookEndpointSecretResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->rotateWebhookEndpointSecret(
    'whe_01j2y8m6jcc9tt24af5pw9x1bc',
    new RotateWebhookEndpointSecretRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$endpointId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;testWebhookEndpoint($endpointId, $request) -> ?TestWebhookEndpointResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->testWebhookEndpoint(
    'whe_01j2y8m6jcc9tt24af5pw9x1bc',
    new TestWebhookEndpointRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$endpointId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;listWebhookEvents($request) -> ?ListWebhookEventsResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->listWebhookEvents(
    new ListWebhookEventsRequest([
        'endingBefore' => 'evt_01j2y8m6jcc9tt24af5pw9x1bc',
        'startingAfter' => 'evt_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;getWebhookEvent($eventId, $request) -> ?GetWebhookEventResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->getWebhookEvent(
    'evt_01j2y8m6jcc9tt24af5pw9x1bc',
    new GetWebhookEventRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$eventId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;replayWebhookEvent($eventId, $request) -> ?ReplayWebhookEventResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->replayWebhookEvent(
    'evt_01j2y8m6jcc9tt24af5pw9x1bc',
    new ReplayWebhookEventRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$eventId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityOrganizationId:** `?string` — Defaults to the API key organization. A platform may select a practice or pharmacy only with an explicit webhook grant in this mode. This changes the webhook owner, not the caller or event subscriptions.
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;listWebhookGrants($request) -> ?ListWebhookGrantsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires webhooks:read on the owning practice or pharmacy key. Lists platform webhook grants in the key's mode. Platforms cannot list or grant themselves delegated access.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->listWebhookGrants(
    new ListWebhookGrantsRequest([
        'startingAfter' => 'acct_01j2y8m6jcc9tt24af5pw9x1bc',
        'endingBefore' => 'acct_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;saveWebhookGrant($platformId, $request) -> ?SaveWebhookGrantResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires webhooks:write on the owning practice or pharmacy key and Idempotency-Key. Grants or replaces a platform's webhook permissions in this mode. A practice must already be connected to that platform. The grant does not give the platform access to other API resources.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->saveWebhookGrant(
    'acct_01j2y8m6jcc9tt24af5pw9x1bc',
    new SaveWebhookGrantRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'scopes' => [
            SaveWebhookGrantRequestScopesItem::WebhooksRead->value,
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$platformId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$scopes:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;webhooks-&gt;revokeWebhookGrant($platformId, $request) -> ?RevokeWebhookGrantResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires webhooks:write on the owning practice or pharmacy key and Idempotency-Key. Removes platform webhook access in this mode. Existing endpoints remain owned by the practice or pharmacy and continue operating.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->webhooks->revokeWebhookGrant(
    'acct_01j2y8m6jcc9tt24af5pw9x1bc',
    new RevokeWebhookGrantRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$platformId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Team
<details><summary><code>$client-&gt;team-&gt;registerUser($practiceId, $request) -> ?RegisterUserResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:write and Idempotency-Key. Registers a practice member without an invitation. Test requires synthetic .test emails and Affinity Test NPIs. Live requires approved integration and practice access. Identity attestation records the integration's assertion; it does not verify login email or clinical credentials. Existing memberships and verified provider records are preserved. Use the returned user ID for orders and signing.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->registerUser(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new RegisterUserRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'externalId' => 'externalId',
        'email' => 'email',
        'name' => 'name',
        'role' => RegisterUserRequestRole::Administrator->value,
        'identityAttestation' => true,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$roles:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$profileDetails:** `?RegisterUserRequestProfileDetails` 
    
</dd>
</dl>

<dl>
<dd>

**$npi:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$licenses:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$legalName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$displayName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$credentials:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?RegisterUserRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locationIds:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$identityAttestation:** `bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;listPracticeTeamInvitations($practiceId, $request) -> ?ListPracticeTeamInvitationsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:read. Lists practice invitations, including invitations sent in Clinic. Filter by pending, expired, accepted, declined, or revoked status, exact email, or your integration externalId. Only your integration and API key mode can see its external identity and onboarding state. Follow person.nextActions after invitation acceptance.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->listPracticeTeamInvitations(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new ListPracticeTeamInvitationsRequest([
        'startingAfter' => 'invite_01j2y8m6jcc9tt24af5pw9x1bc',
        'endingBefore' => 'invite_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` — Match this integration's external identity in the API key's mode.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;invitePracticeTeamPerson($practiceId, $request) -> ?InvitePracticeTeamPersonResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:write on the practice key or its platform key. Use roles to combine administrator, prescriber, clinical_staff, billing, or developer presets. Ownership uses the protected owner designation. The singular role field remains available for single-role assignments. Creates a real organization invitation and optional prescriber setup. The recipient must accept with their Affinity account. Repeating the same external identity retries pending invitation delivery. Accepted invitations do not change existing access. Team membership is shared between Test and Live; the external identity is mode-scoped. Keys cannot accept invitations. Headless registration and signing use separate endpoints.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->invitePracticeTeamPerson(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new InvitePracticeTeamPersonRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'externalId' => 'externalId',
        'email' => 'email',
        'name' => 'name',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$roles:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$profileDetails:** `?InvitePracticeTeamPersonRequestProfileDetails` 
    
</dd>
</dl>

<dl>
<dd>

**$npi:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$licenses:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$legalName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$displayName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$credentials:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?InvitePracticeTeamPersonRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locationIds:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;getPracticeTeam($practiceId) -> ?GetPracticeTeamResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:read. Returns counts of members, invitations, and prescribers. Use the paginated members, prescribers, and invitations collections for individual records. Team access and clinician credentials are shared between Test and Live.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->getPracticeTeam(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;listPracticeTeamMembers($practiceId, $request) -> ?ListPracticeTeamMembersResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:read. Search the roster by name or email, and filter by role or membership status. Includes members invited in Clinic, location access, and account-specific prescriber connections. Memberships are shared between Test and Live.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->listPracticeTeamMembers(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new ListPracticeTeamMembersRequest([
        'startingAfter' => 'mbr_01j2y8m6jcc9tt24af5pw9x1bc',
        'endingBefore' => 'mbr_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;listPracticeTeamPrescribers($practiceId, $request) -> ?ListPracticeTeamPrescribersResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:read. Filter practice prescribers by name, NPI, state, and practice status. Records include submitted licenses and their IDs. Signing authority also requires an active account connection, Live practice access, and prescription eligibility.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->listPracticeTeamPrescribers(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new ListPracticeTeamPrescribersRequest([
        'startingAfter' => 'prov_01j2y8m6jcc9tt24af5pw9x1bc',
        'endingBefore' => 'prov_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$search:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$npi:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$state:** `?string` — Match a submitted license jurisdiction. This does not establish signing eligibility.
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;getPracticeTeamMember($practiceId, $memberId) -> ?GetPracticeTeamMemberResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:read. Returns current account membership, roles, location access, and prescriber connection. The member ID identifies practice access; it is not the integration user ID used by orders.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->getPracticeTeamMember(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'mbr_01j2y8m6jcc9tt24af5pw9x1bc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$memberId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;updatePracticeTeamMember($practiceId, $memberId, $request) -> ?UpdatePracticeTeamMemberResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:write. Supply role, status, or locationIds; omitted values stay unchanged. A role replaces existing roles. Disable access with status disabled. An empty locationIds array grants all practice locations. Ownership changes require an active practice owner using a personal API key; service keys manage non-owner memberships. The final active owner cannot be removed. Changes apply to both Test and Live. Sign-in email and account security remain account settings.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->updatePracticeTeamMember(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'mbr_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdatePracticeTeamMemberRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$memberId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$role:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$roles:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locationIds:** `?array` — Replace location access. An empty array grants access to all practice locations.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;getPracticeTeamPrescriber($practiceId, $prescriberId) -> ?GetPracticeTeamPrescriberResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:read. Returns the clinical profile and submitted licenses, including license IDs. This is setup information, not a signing authorization.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->getPracticeTeamPrescriber(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'prov_01j2y8m6jcc9tt24af5pw9x1bc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriberId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;updatePracticeTeamPrescriber($practiceId, $prescriberId, $request) -> ?UpdatePracticeTeamPrescriberResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:write. Set practiceStatus to inactive to remove prescribing access in this practice, or active to restore an existing association. This does not create membership or signing authority. Practice status applies to Test and Live. Shared identity and license edits require Affinity support.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->updatePracticeTeamPrescriber(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'prov_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdatePracticeTeamPrescriberRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriberId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$displayName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$legalName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$credentials:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?UpdatePracticeTeamPrescriberRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceStatus:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;createPracticeTeamLicense($practiceId, $prescriberId, $request) -> ?CreatePracticeTeamLicenseResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:write and an active accepted prescriber account connection in this practice. Adds a license. Expiration is optional, but must be in the future when supplied. An exact repeat returns the existing license; update an existing license with PATCH and its license ID. Licenses are shared across practices and Test/Live. Other licenses stay unchanged.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->createPracticeTeamLicense(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'prov_01j2y8m6jcc9tt24af5pw9x1bc',
    new CreatePracticeTeamLicenseRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'state' => 'state',
        'licenseNumber' => 'licenseNumber',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriberId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$state:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$licenseNumber:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$expiresAt:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;updatePracticeTeamLicense($practiceId, $prescriberId, $licenseId, $request) -> ?UpdatePracticeTeamLicenseResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:write and an active accepted prescriber account connection in this practice. Correct the state or license number, or set or clear the optional expiresAt value. A supplied expiration must be in the future. Other licenses stay unchanged. Changes apply across practices and Test/Live.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->updatePracticeTeamLicense(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'prov_01j2y8m6jcc9tt24af5pw9x1bc',
    'lic_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdatePracticeTeamLicenseRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescriberId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$licenseId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$state:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$licenseNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expiresAt:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;getPracticeTeamInvitation($practiceId, $invitationId) -> ?GetPracticeTeamInvitationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:read. Returns invitation status and current onboarding state for your integration. An accepted invitation can still have disabled membership or pending clinical review. Invitation tokens are never returned.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->getPracticeTeamInvitation(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'invite_01j2y8m6jcc9tt24af5pw9x1bc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invitationId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;revokePracticeTeamInvitation($practiceId, $invitationId, $request) -> ?RevokePracticeTeamInvitationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:write. Revokes a pending or expired invitation and its pending prescriber account connection. Repeating the revoke returns the revoked invitation. Accepted invitations return 409; disable the member instead. Retains invitation history.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->revokePracticeTeamInvitation(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'invite_01j2y8m6jcc9tt24af5pw9x1bc',
    new RevokePracticeTeamInvitationRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invitationId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;team-&gt;resendPracticeTeamInvitation($practiceId, $invitationId, $request) -> ?ResendPracticeTeamInvitationResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires team:write. Resends a pending or expired invitation with the same ID, recipient, roles, and locations. The previous link stops working and the new link expires in seven days. Accepted and revoked invitations return 409. A 502 means the invitation was saved but email delivery could not be confirmed; retry this operation.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->team->resendPracticeTeamInvitation(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'invite_01j2y8m6jcc9tt24af5pw9x1bc',
    new ResendPracticeTeamInvitationRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$invitationId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Patients
<details><summary><code>$client-&gt;patients-&gt;listPatientAddresses($practiceId, $patientId, $request) -> ?ListPatientAddressesResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->listPatientAddresses(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    new ListPatientAddressesRequest([
        'startingAfter' => 'addr_01j2y8m6jcc9tt24af5pw9x1bc',
        'endingBefore' => 'addr_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;createPatientAddress($practiceId, $patientId, $request) -> ?CreatePatientAddressResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns the existing active address for a normalized duplicate. The first address becomes the default. API keys require Idempotency-Key.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->createPatientAddress(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    new CreatePatientAddressRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'address' => new CreatePatientAddressRequestAddress([
            'city' => 'city',
            'line1' => 'line1',
            'postalCode' => 'postalCode',
            'state' => 'state',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$address:** `CreatePatientAddressRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$label:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$preferredShipping:** `?bool` 
    
</dd>
</dl>

<dl>
<dd>

**$recipientName:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;archivePatientAddress($practiceId, $patientId, $addressId, $request) -> ?ArchivePatientAddressResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Preserves the address ID and history. Archiving the default selects the oldest remaining active address. Existing orders remain unchanged.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->archivePatientAddress(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    'addr_01j2y8m6jcc9tt24af5pw9x1bc',
    new ArchivePatientAddressRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$addressId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;updatePatientAddress($practiceId, $patientId, $addressId, $request) -> ?UpdatePatientAddressResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->updatePatientAddress(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    'addr_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdatePatientAddressRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$addressId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?UpdatePatientAddressRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$label:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$recipientName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$preferredShipping:** `?bool` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;setDefaultPatientAddress($practiceId, $patientId, $addressId, $request) -> ?SetDefaultPatientAddressResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Changes delivery selection for future drafts, without changing patient clinical location or existing signed orders.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->setDefaultPatientAddress(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    'addr_01j2y8m6jcc9tt24af5pw9x1bc',
    new SetDefaultPatientAddressRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$addressId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;listPatients($practiceId, $request) -> ?ListPatientsResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Lists patients in one practice and mode. Use externalId for an exact match in the calling integration's namespace. Use externalIdentitySource with externalIdentityValue to search an explicit alias. Identity matching is case-sensitive after trimming whitespace. Other filters also apply.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->listPatients(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new ListPatientsRequest([
        'endingBefore' => 'pat_01j2y8m6jcc9tt24af5pw9x1bc',
        'startingAfter' => 'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalIdentitySource:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalIdentityValue:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$gender:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastOrderAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$lastOrderBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$program:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$query:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$sort:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$states:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;createPatient($practiceId, $request) -> ?CreatePatientResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a patient or resolves a matching externalId or external identity within this practice and mode. externalId belongs to the calling integration; externalIdentities holds aliases from other systems. Resolution preserves existing demographics; use PATCH to update them. Conflicting identifiers return 409. Email never merges patients. API keys require Idempotency-Key.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->createPatient(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new CreatePatientRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'dateOfBirth' => 'dateOfBirth',
        'name' => new CreatePatientRequestName([
            'first' => 'first',
            'last' => 'last',
        ]),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?CreatePatientRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$clinicalProfile:** `?CreatePatientRequestClinicalProfile` 
    
</dd>
</dl>

<dl>
<dd>

**$dateOfBirth:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalIdentities:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$addresses:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$encounters:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$gender:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locationId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$metadata:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$medicalRecordNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$measurements:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `CreatePatientRequestName` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$programs:** `?array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;getPatient($practiceId, $patientId, $request) -> ?GetPatientResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns one patient in the authorized practice and mode.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->getPatient(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    new GetPatientRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;deletePatient($practiceId, $patientId, $request) -> ?DeletePatientResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires patients:write and Idempotency-Key for API keys. Permanently deletes a patient with no order history. Any order history returns 409; use Update patient with status archived instead. Available to practice keys and authorized platform keys. Reusing the same idempotency key returns the original deletion result.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->deletePatient(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    new DeletePatientRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;updatePatient($practiceId, $patientId, $request) -> ?UpdatePatientResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates a patient in the current practice and mode. Omitted fields remain unchanged; null clears an optional field. externalId updates the calling integration's identifier. externalIdentities replaces its explicit aliases. Identifiers cannot be reassigned from another patient. API keys require Idempotency-Key.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->updatePatient(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdatePatientRequest([
        'idempotencyKey' => 'Idempotency-Key',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?UpdatePatientRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$clinicalProfile:** `?UpdatePatientRequestClinicalProfile` 
    
</dd>
</dl>

<dl>
<dd>

**$dateOfBirth:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$email:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$externalIdentities:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$addresses:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$encounters:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$gender:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$locationId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$metadata:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$medicalRecordNumber:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$measurements:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?UpdatePatientRequestName` 
    
</dd>
</dl>

<dl>
<dd>

**$programs:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$phone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$status:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;getPatientAllergies($practiceId, $patientId, $request) -> ?GetPatientAllergiesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns the patient's structured allergy entries and review status. A not_reviewed status is not a no-known-allergies assertion and blocks clinical review and signing.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->getPatientAllergies(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    new GetPatientAllergiesRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;patients-&gt;replacePatientAllergies($practiceId, $patientId, $request) -> ?ReplacePatientAllergiesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Replaces the patient's structured allergy record. Sending no_known is the explicit no-known-allergies acknowledgement; recorded requires at least one entry. Idempotency-Key is required.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->patients->replacePatientAllergies(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    'pat_01j2y8m6jcc9tt24af5pw9x1bc',
    new ReplacePatientAllergiesRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'allergies' => [
            new ReplacePatientAllergiesRequestAllergiesItem([
                'category' => ReplacePatientAllergiesRequestAllergiesItemCategory::Drug->value,
                'reactions' => [
                    new ReplacePatientAllergiesRequestAllergiesItemReactionsItem([
                        'display' => 'display',
                    ]),
                ],
                'source' => ReplacePatientAllergiesRequestAllergiesItemSource::Doctor->value,
                'substance' => 'substance',
                'verificationStatus' => ReplacePatientAllergiesRequestAllergiesItemVerificationStatus::Unconfirmed->value,
            ]),
        ],
        'reviewStatus' => ReplacePatientAllergiesRequestReviewStatus::NotReviewed->value,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$patientId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorId:** `?string` — Required for user actors and optional for system actors. Omit both actor headers to use the authenticated service account as a system actor.
    
</dd>
</dl>

<dl>
<dd>

**$affinityActorType:** `?string` — Use user when a person initiated the action and system for autonomous work. Omit both actor headers to default to system.
    
</dd>
</dl>

<dl>
<dd>

**$allergies:** `array` 
    
</dd>
</dl>

<dl>
<dd>

**$reviewStatus:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Practices
<details><summary><code>$client-&gt;practices-&gt;listPractices($request) -> ?ListPracticesResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns the practices that belong to the platform. The default Affinity-Version is 2026-09-28.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->practices->listPractices(
    new ListPracticesRequest([
        'endingBefore' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
        'startingAfter' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$search:** `?string` — Case-insensitive search by practice name or external ID.
    
</dd>
</dl>

<dl>
<dd>

**$endingBefore:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$startingAfter:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;practices-&gt;createPractice($request) -> ?CreatePracticeResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Creates a practice owned by the platform. Set liveEnabled to true to enable Live access at creation with an approved platform and a Live request. Defaults to false. Requires practices:write. Send Idempotency-Key when you retry the same request.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->practices->createPractice(
    new CreatePracticeRequest([
        'address' => new CreatePracticeRequestAddress([
            'city' => 'Los Angeles',
            'country' => 'US',
            'line1' => '100 Practice Way',
            'postalCode' => '90001',
            'state' => 'CA',
        ]),
        'attestations' => new CreatePracticeRequestAttestations([
            'authorizedPracticeRelationship' => true,
            'authorizedPhiTransfer' => true,
            'minimumNecessaryPhi' => true,
            'providerDataAccuracy' => true,
        ]),
        'externalId' => 'practice_123',
        'legalName' => 'Example Medical Group PLLC',
        'metadata' => [
            'key' => "value",
        ],
        'name' => 'Example Medical Group',
        'prescribers' => [
            new CreatePracticeRequestPrescribersItem([
                'credentials' => 'MD',
                'licenseStates' => [
                    'CA',
                ],
                'name' => 'Alex Morgan',
                'npi' => '1234567893',
            ]),
        ],
        'primaryContact' => new CreatePracticeRequestPrimaryContact([
            'email' => 'operations@example-practice.com',
            'name' => 'Jordan Lee',
        ]),
        'supportEmail' => 'support@example-practice.com',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$idempotencyKey:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$liveEnabled:** `?bool` — Enable Live access at creation. Requires an approved platform and a Live request. Defaults to false.
    
</dd>
</dl>

<dl>
<dd>

**$address:** `CreatePracticeRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$attestations:** `CreatePracticeRequestAttestations` 
    
</dd>
</dl>

<dl>
<dd>

**$complianceContact:** `?CreatePracticeRequestComplianceContact` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$legalName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$metadata:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescribers:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$primaryContact:** `?CreatePracticeRequestPrimaryContact` 
    
</dd>
</dl>

<dl>
<dd>

**$supportEmail:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supportPhone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$timezone:** `?string` — Optional IANA timezone override. Omit to leave unchanged; null clears it. No timezone is inferred when creating a record.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;practices-&gt;getPractice($practiceId) -> ?GetPracticeResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Returns one practice that belongs to the platform.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->practices->getPractice(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;practices-&gt;updatePractice($practiceId, $request) -> ?UpdatePracticeResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Updates one practice owned by the platform. Set liveEnabled to true or false to control Live access with an approved platform and a Live request. Affinity Admin decisions take precedence. Requires practices:write. Send Idempotency-Key when you retry the same request.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->practices->updatePractice(
    'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    new UpdatePracticeRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$practiceId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$liveEnabled:** `?bool` — Enable or disable Live access for an owned practice. Requires an approved platform and a Live request. Affinity Admin decisions take precedence.
    
</dd>
</dl>

<dl>
<dd>

**$address:** `?UpdatePracticeRequestAddress` 
    
</dd>
</dl>

<dl>
<dd>

**$attestations:** `?UpdatePracticeRequestAttestations` 
    
</dd>
</dl>

<dl>
<dd>

**$complianceContact:** `?UpdatePracticeRequestComplianceContact` 
    
</dd>
</dl>

<dl>
<dd>

**$externalId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$legalName:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$metadata:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$prescribers:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$primaryContact:** `?UpdatePracticeRequestPrimaryContact` 
    
</dd>
</dl>

<dl>
<dd>

**$supportEmail:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$supportPhone:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$timezone:** `?string` — Optional IANA timezone override. Omit to leave unchanged; null clears it. No timezone is inferred when creating a record.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Platform Pricing
<details><summary><code>$client-&gt;platformPricing-&gt;platformPublicApiSellingPricesReadSellingPrice($catalogItemId, $request) -> ?PlatformPublicApiSellingPricesReadSellingPriceResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires selling_prices:read. Omit practiceId for the platform default, or supply a managed practice. A null amount inherits the next applicable price. Amounts use the catalog pricing basis, in USD cents. purchaseAmountCents is the platform's Affinity purchase price for that same basis. requiresReview indicates changed product pricing terms, not a below-purchase-price discount.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->platformPricing->platformPublicApiSellingPricesReadSellingPrice(
    'cat_01j2y8m6jcc9tt24af5pw9x1bc',
    new PlatformPublicApiSellingPricesReadSellingPriceRequest([
        'practiceId' => 'prac_01j2y8m6jcc9tt24af5pw9x1bc',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$catalogItemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;platformPricing-&gt;platformPublicApiSellingPricesUpdateSellingPrice($catalogItemId, $request) -> ?PlatformPublicApiSellingPricesUpdateSellingPriceResponse</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Requires selling_prices:write. Sets a platform default or managed practice override in the current Test/Live mode. Send baseVersion from Read selling price. Null removes the override. Prices use the catalog pricing basis. Intentional discounts below purchaseAmountCents are allowed; compare these amounts to warn about selling below your Affinity purchase price. This does not change the platform's Affinity purchase price or collect practice payments.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->platformPricing->platformPublicApiSellingPricesUpdateSellingPrice(
    'cat_01j2y8m6jcc9tt24af5pw9x1bc',
    new PlatformPublicApiSellingPricesUpdateSellingPriceRequest([
        'idempotencyKey' => 'Idempotency-Key',
        'baseVersion' => 1,
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$catalogItemId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$practiceId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$amountCents:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$baseVersion:** `int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

