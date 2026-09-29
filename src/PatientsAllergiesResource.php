<?php
namespace Affinity;
final class PatientsAllergiesResource{
public function __construct(private SdkContext $context){}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $patientId, array $options = []): \Affinity\Types\GetPatientAllergiesResponse{
$result=$this->context->call('getPatientAllergies',[$patientId],[],$options);
return \Affinity\Types\GetPatientAllergiesResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{allergies: list<array{category: string, code?: string|null|null, codeSystem?: string|null|null|null, reactions: list<array{code?: string|null|null, codeSystem?: string|null|null, display: string}>, severity?: string|null|null|null, source: string, substance: string, type: string|null, verificationStatus: string}>, reviewStatus: string} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function replace(string $patientId, array $params, array $options = []): \Affinity\Types\ReplacePatientAllergiesResponse{
$result=$this->context->call('replacePatientAllergies',[$patientId],$params,$options);
return \Affinity\Types\ReplacePatientAllergiesResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
