<?php
namespace Affinity;
final class TeamPrescribersResource{
public readonly TeamPrescribersLicensesResource $licenses;
public function __construct(private SdkContext $context){$this->licenses=new TeamPrescribersLicensesResource($context);}
/** @param array{limit?: int, startingAfter?: string|null, endingBefore?: string|null, search?: string|null, npi?: string|null, state?: string|null, status?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListPracticeTeamPrescribersResponse{
$result=$this->context->call('listPracticeTeamPrescribers',[],$params,$options);
return \Affinity\Types\ListPracticeTeamPrescribersResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListPracticeTeamPrescribersResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listPracticeTeamPrescribers',[],$params,$options) as $item)yield \Affinity\Types\ListPracticeTeamPrescribersResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $prescriberId, array $options = []): \Affinity\Types\GetPracticeTeamPrescriberResponse{
$result=$this->context->call('getPracticeTeamPrescriber',[$prescriberId],[],$options);
return \Affinity\Types\GetPracticeTeamPrescriberResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{displayName?: string|null, legalName?: string|null, credentials?: string|null|null, phone?: string|null|null, address?: array{city: string, country: string, line1: string, line2?: string|null, postalCode: string, state: string}|null|null, practiceStatus?: string} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $prescriberId, array $params = [], array $options = []): \Affinity\Types\UpdatePracticeTeamPrescriberResponse{
$result=$this->context->call('updatePracticeTeamPrescriber',[$prescriberId],$params,$options);
return \Affinity\Types\UpdatePracticeTeamPrescriberResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
