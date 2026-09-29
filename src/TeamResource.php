<?php
namespace Affinity;
final class TeamResource{
public readonly TeamInvitationsResource $invitations;
public readonly TeamMembersResource $members;
public readonly TeamPrescribersResource $prescribers;
public function __construct(private SdkContext $context){$this->invitations=new TeamInvitationsResource($context);$this->members=new TeamMembersResource($context);$this->prescribers=new TeamPrescribersResource($context);}
/** @param array{externalId: string, email: string, name: string, role: string, roles?: list<string>|null, profileDetails?: array{firstName?: string|null, middleName?: string|null, lastName?: string|null, namePrefix?: string|null, nameSuffix?: string|null, fax?: string|null, specialties?: list<array{code: string, description: string, primary: bool}>|null, addresses?: list<array{purpose: string, line1: string, line2: string, city: string, state: string, postalCode: string, country: string, phone: string, fax: string}>|null, otherNames?: list<array{name: string, credentials: string, type: string}>|null, identifiers?: list<array{identifier: string, issuer: string, state: string, description: string}>|null, endpoints?: list<array{endpoint: string, type: string, description: string, use: string, affiliation: string}>|null, certifications?: list<array{name: string, issuer: string, expiresAt: string}>|null}|null, npi?: string|null, licenses?: list<array{state: string, licenseNumber: string, expiresAt?: string|null|null}>|null, legalName?: string|null|null, displayName?: string|null|null, credentials?: string|null|null, address?: array{city: string, country: string, line1: string, line2?: string|null, postalCode: string, state: string}|null|null, phone?: string|null|null, locationIds?: list<string>|null, identityAttestation: bool} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function register(array $params, array $options = []): \Affinity\Types\RegisterUserResponse{
$result=$this->context->call('registerUser',[],$params,$options);
return \Affinity\Types\RegisterUserResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(array $options = []): \Affinity\Types\GetPracticeTeamResponse{
$result=$this->context->call('getPracticeTeam',[],[],$options);
return \Affinity\Types\GetPracticeTeamResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
