<?php
namespace Affinity;
final class PatientsResource{
public readonly PatientsAddressesResource $addresses;
public readonly PatientsAllergiesResource $allergies;
public function __construct(private SdkContext $context){$this->addresses=new PatientsAddressesResource($context);$this->allergies=new PatientsAllergiesResource($context);}
/** @param array{endingBefore?: string|null, externalId?: string|null, externalIdentitySource?: string|null, externalIdentityValue?: string|null, gender?: string|null, lastOrderAfter?: string|null, lastOrderBefore?: string|null, limit?: int, program?: string|null, query?: string|null, sort?: string|null, startingAfter?: string|null, states?: string|null, status?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListPatientsResponse{
$result=$this->context->call('listPatients',[],$params,$options);
return \Affinity\Types\ListPatientsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListPatientsResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listPatients',[],$params,$options) as $item)yield \Affinity\Types\ListPatientsResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** @param array{address?: array{city: string, line1: string, line2?: string|null|null, postalCode: string, state: string, country?: string|null}|null|null, clinicalProfile?: array{currentMedications: list<string>, heightInches?: float|string|null|null, reviewedAt?: string|null|null, weightPounds?: float|string|null|null}|null, dateOfBirth: string, email?: string|null|null, externalId?: string|null, externalIdentities?: list<array{source: string, value: string}>|null, addresses?: list<array{id?: string|null, address: array{city: string, country?: string|null, line1: string, line2?: string|null|null, postalCode: string, state: string}, label: string, preferredShipping: bool, recipientName: string|null}>|null, encounters?: list<array{notes: string|null, occurredAt: string, providerName: string|null, type: string}>|null, gender?: string|null, locationId?: string|null, metadata?: mixed|null, medicalRecordNumber?: string|null|null, measurements?: list<array{heightCentimeters: float|string|null, recordedAt: string, source: string, weightKilograms: float|string|null}>|null, name: array{first: string, last: string, middle?: string|null|null, preferred?: string|null|null}, phone?: string|null|null, programs?: list<array{endedAt: string|null, name: string, startedAt: string, status: string}>|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(array $params, array $options = []): \Affinity\Types\CreatePatientResponse{
$result=$this->context->call('createPatient',[],$params,$options);
return \Affinity\Types\CreatePatientResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $patientId, array $options = []): \Affinity\Types\GetPatientResponse{
$result=$this->context->call('getPatient',[$patientId],[],$options);
return \Affinity\Types\GetPatientResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function delete(string $patientId, array $options = []): \Affinity\Types\DeletePatientResponse{
$result=$this->context->call('deletePatient',[$patientId],[],$options);
return \Affinity\Types\DeletePatientResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{address?: array{city: string, line1: string, line2?: string|null|null, postalCode: string, state: string, country?: string|null}|null|null, clinicalProfile?: array{currentMedications?: list<string>|null, heightInches?: float|string|null|null, reviewedAt?: string|null|null, weightPounds?: float|string|null|null}|null, dateOfBirth?: string|null, email?: string|null|null, externalId?: string|null|null, externalIdentities?: list<array{source: string, value: string}>|null, addresses?: list<array{id?: string|null, address: array{city: string, country?: string|null, line1: string, line2?: string|null|null, postalCode: string, state: string}, label: string, preferredShipping: bool, recipientName: string|null}>|null, encounters?: list<array{notes: string|null, occurredAt: string, providerName: string|null, type: string}>|null, gender?: string|null, locationId?: string|null, metadata?: mixed|null, medicalRecordNumber?: string|null|null, measurements?: list<array{heightCentimeters: float|string|null, recordedAt: string, source: string, weightKilograms: float|string|null}>|null, name?: array{first?: string|null, last?: string|null, middle?: string|null|null, preferred?: string|null|null}|null, programs?: list<array{endedAt: string|null, name: string, startedAt: string, status: string}>|null, phone?: string|null|null, status?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $patientId, array $params = [], array $options = []): \Affinity\Types\UpdatePatientResponse{
$result=$this->context->call('updatePatient',[$patientId],$params,$options);
return \Affinity\Types\UpdatePatientResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
