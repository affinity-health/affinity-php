<?php
namespace Affinity;
final class PracticesResource{
public function __construct(private SdkContext $context){}
/** @param array{search?: string|null, endingBefore?: string|null, limit?: int, startingAfter?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListPracticesResponse{
$result=$this->context->call('listPractices',[],$params,$options);
return \Affinity\Types\ListPracticesResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListPracticesResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listPractices',[],$params,$options) as $item)yield \Affinity\Types\ListPracticesResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** @param array{liveEnabled?: bool, address: array{city: string, country?: string|null, line1: string, line2?: string|null|null, postalCode: string, state: string}, attestations: array{authorizedPracticeRelationship: bool, authorizedPhiTransfer: bool, minimumNecessaryPhi: bool, providerDataAccuracy: bool}, complianceContact?: array{email: string, name: string, phone?: string|null|null}|null|null, externalId?: string|null|null, legalName?: string|null|null, metadata?: mixed|null, name: string, prescribers?: list<array{credentials?: string|null|null, licenseStates: list<string>, name: string, npi: string}>|null, primaryContact?: array{email: string, name: string, phone?: string|null|null}|null|null, supportEmail?: string|null|null, supportPhone?: string|null|null, timezone?: string|null|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(array $params, array $options = []): \Affinity\Types\CreatePracticeResponse{
$result=$this->context->call('createPractice',[],$params,$options);
return \Affinity\Types\CreatePracticeResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $practiceId, array $options = []): \Affinity\Types\GetPracticeResponse{
$result=$this->context->call('getPractice',[$practiceId],[],$options);
return \Affinity\Types\GetPracticeResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{liveEnabled?: bool, address?: array{city: string, country?: string|null, line1: string, line2?: string|null|null, postalCode: string, state: string}|null, attestations?: array{authorizedPracticeRelationship: bool, authorizedPhiTransfer: bool, minimumNecessaryPhi: bool, providerDataAccuracy: bool}|null, complianceContact?: array{email: string, name: string, phone?: string|null|null}|null|null, externalId?: string|null|null, legalName?: string|null|null, metadata?: mixed|null, name?: string|null, prescribers?: list<array{credentials?: string|null|null, licenseStates: list<string>, name: string, npi: string}>|null, primaryContact?: array{email: string, name: string, phone?: string|null|null}|null|null, supportEmail?: string|null|null, supportPhone?: string|null|null, timezone?: string|null|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $practiceId, array $params = [], array $options = []): \Affinity\Types\UpdatePracticeResponse{
$result=$this->context->call('updatePractice',[$practiceId],$params,$options);
return \Affinity\Types\UpdatePracticeResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
