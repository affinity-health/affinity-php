<?php
namespace Affinity;
final class LocationsResource{
public function __construct(private SdkContext $context){}
/** @param array{limit?: int, startingAfter?: string|null, endingBefore?: string|null, status?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListPracticeLocationsResponse{
$result=$this->context->call('listPracticeLocations',[],$params,$options);
return \Affinity\Types\ListPracticeLocationsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListPracticeLocationsResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listPracticeLocations',[],$params,$options) as $item)yield \Affinity\Types\ListPracticeLocationsResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** @param array{city?: string|null|null, country?: string|null, line1?: string|null|null, line2?: string|null|null, name: string, phone?: string|null|null, postalCode?: string|null|null, state?: string|null|null, timezone?: string|null|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(array $params, array $options = []): \Affinity\Types\CreatePracticeLocationResponse{
$result=$this->context->call('createPracticeLocation',[],$params,$options);
return \Affinity\Types\CreatePracticeLocationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $locationId, array $options = []): \Affinity\Types\GetPracticeLocationResponse{
$result=$this->context->call('getPracticeLocation',[$locationId],[],$options);
return \Affinity\Types\GetPracticeLocationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{city?: string|null|null, country?: string|null, line1?: string|null|null, line2?: string|null|null, name?: string|null, phone?: string|null|null, postalCode?: string|null|null, state?: string|null|null, timezone?: string|null|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $locationId, array $params = [], array $options = []): \Affinity\Types\UpdatePracticeLocationResponse{
$result=$this->context->call('updatePracticeLocation',[$locationId],$params,$options);
return \Affinity\Types\UpdatePracticeLocationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function archive(string $locationId, array $options = []): \Affinity\Types\ArchivePracticeLocationResponse{
$result=$this->context->call('archivePracticeLocation',[$locationId],[],$options);
return \Affinity\Types\ArchivePracticeLocationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
