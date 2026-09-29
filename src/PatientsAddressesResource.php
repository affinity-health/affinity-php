<?php
namespace Affinity;
final class PatientsAddressesResource{
public function __construct(private SdkContext $context){}
/** @param array{status?: string|null, startingAfter?: string|null, endingBefore?: string|null, limit?: int} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(string $patientId, array $params = [], array $options = []): \Affinity\Types\ListPatientAddressesResponse{
$result=$this->context->call('listPatientAddresses',[$patientId],$params,$options);
return \Affinity\Types\ListPatientAddressesResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListPatientAddressesResponseDataItem> */
public function iterate(string $patientId, array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listPatientAddresses',[$patientId],$params,$options) as $item)yield \Affinity\Types\ListPatientAddressesResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** @param array{address: array{city: string, country?: string|null, line1: string, line2?: string|null|null, postalCode: string, state: string}, label?: string|null, preferredShipping?: bool|null, recipientName?: string|null|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(string $patientId, array $params, array $options = []): \Affinity\Types\CreatePatientAddressResponse{
$result=$this->context->call('createPatientAddress',[$patientId],$params,$options);
return \Affinity\Types\CreatePatientAddressResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{address?: array{city: string, country?: string|null, line1: string, line2?: string|null|null, postalCode: string, state: string}|null, label?: string|null, recipientName?: string|null|null, preferredShipping?: bool|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $patientId, string $addressId, array $params = [], array $options = []): \Affinity\Types\UpdatePatientAddressResponse{
$result=$this->context->call('updatePatientAddress',[$patientId,$addressId],$params,$options);
return \Affinity\Types\UpdatePatientAddressResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function archive(string $patientId, string $addressId, array $options = []): \Affinity\Types\ArchivePatientAddressResponse{
$result=$this->context->call('archivePatientAddress',[$patientId,$addressId],[],$options);
return \Affinity\Types\ArchivePatientAddressResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function setDefault(string $patientId, string $addressId, array $options = []): \Affinity\Types\SetDefaultPatientAddressResponse{
$result=$this->context->call('setDefaultPatientAddress',[$patientId,$addressId],[],$options);
return \Affinity\Types\SetDefaultPatientAddressResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
