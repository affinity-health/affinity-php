<?php
namespace Affinity;
final class TeamInvitationsResource{
public function __construct(private SdkContext $context){}
/** @param array{externalId: string, email: string, name: string, role?: string|null, roles?: list<string>|null, profileDetails?: array{firstName?: string|null, middleName?: string|null, lastName?: string|null, namePrefix?: string|null, nameSuffix?: string|null, fax?: string|null, specialties?: list<array{code: string, description: string, primary: bool}>|null, addresses?: list<array{purpose: string, line1: string, line2: string, city: string, state: string, postalCode: string, country: string, phone: string, fax: string}>|null, otherNames?: list<array{name: string, credentials: string, type: string}>|null, identifiers?: list<array{identifier: string, issuer: string, state: string, description: string}>|null, endpoints?: list<array{endpoint: string, type: string, description: string, use: string, affiliation: string}>|null, certifications?: list<array{name: string, issuer: string, expiresAt: string}>|null}|null, npi?: string|null, licenses?: list<array{state: string, licenseNumber: string, expiresAt?: string|null|null}>|null, legalName?: string|null|null, displayName?: string|null|null, credentials?: string|null|null, address?: array{city: string, country: string, line1: string, line2?: string|null, postalCode: string, state: string}|null|null, phone?: string|null|null, locationIds?: list<string>|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(array $params, array $options = []): \Affinity\Types\InvitePracticeTeamPersonResponse{
$result=$this->context->call('invitePracticeTeamPerson',[],$params,$options);
return \Affinity\Types\InvitePracticeTeamPersonResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{limit?: int, startingAfter?: string|null, endingBefore?: string|null, status?: string|null, email?: string|null, externalId?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListPracticeTeamInvitationsResponse{
$result=$this->context->call('listPracticeTeamInvitations',[],$params,$options);
return \Affinity\Types\ListPracticeTeamInvitationsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListPracticeTeamInvitationsResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listPracticeTeamInvitations',[],$params,$options) as $item)yield \Affinity\Types\ListPracticeTeamInvitationsResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $invitationId, array $options = []): \Affinity\Types\GetPracticeTeamInvitationResponse{
$result=$this->context->call('getPracticeTeamInvitation',[$invitationId],[],$options);
return \Affinity\Types\GetPracticeTeamInvitationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function revoke(string $invitationId, array $options = []): \Affinity\Types\RevokePracticeTeamInvitationResponse{
$result=$this->context->call('revokePracticeTeamInvitation',[$invitationId],[],$options);
return \Affinity\Types\RevokePracticeTeamInvitationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function resend(string $invitationId, array $options = []): \Affinity\Types\ResendPracticeTeamInvitationResponse{
$result=$this->context->call('resendPracticeTeamInvitation',[$invitationId],[],$options);
return \Affinity\Types\ResendPracticeTeamInvitationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
