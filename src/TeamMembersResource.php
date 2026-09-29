<?php
namespace Affinity;
final class TeamMembersResource{
public function __construct(private SdkContext $context){}
/** @param array{limit?: int, startingAfter?: string|null, endingBefore?: string|null, search?: string|null, role?: string|null, status?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListPracticeTeamMembersResponse{
$result=$this->context->call('listPracticeTeamMembers',[],$params,$options);
return \Affinity\Types\ListPracticeTeamMembersResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListPracticeTeamMembersResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listPracticeTeamMembers',[],$params,$options) as $item)yield \Affinity\Types\ListPracticeTeamMembersResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $memberId, array $options = []): \Affinity\Types\GetPracticeTeamMemberResponse{
$result=$this->context->call('getPracticeTeamMember',[$memberId],[],$options);
return \Affinity\Types\GetPracticeTeamMemberResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{role?: string|null, roles?: list<string>|null, status?: string|null, locationIds?: list<string>|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $memberId, array $params = [], array $options = []): \Affinity\Types\UpdatePracticeTeamMemberResponse{
$result=$this->context->call('updatePracticeTeamMember',[$memberId],$params,$options);
return \Affinity\Types\UpdatePracticeTeamMemberResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
