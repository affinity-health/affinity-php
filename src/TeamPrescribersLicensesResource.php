<?php
namespace Affinity;
final class TeamPrescribersLicensesResource{
public function __construct(private SdkContext $context){}
/** @param array{state: string, licenseNumber: string, expiresAt?: string|null|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(string $prescriberId, array $params, array $options = []): \Affinity\Types\CreatePracticeTeamLicenseResponse{
$result=$this->context->call('createPracticeTeamLicense',[$prescriberId],$params,$options);
return \Affinity\Types\CreatePracticeTeamLicenseResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{state?: string|null, licenseNumber?: string|null, expiresAt?: string|null|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $prescriberId, string $licenseId, array $params = [], array $options = []): \Affinity\Types\UpdatePracticeTeamLicenseResponse{
$result=$this->context->call('updatePracticeTeamLicense',[$prescriberId,$licenseId],$params,$options);
return \Affinity\Types\UpdatePracticeTeamLicenseResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
