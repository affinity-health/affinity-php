<?php
namespace Affinity;
final class WebhooksGrantsResource{
public function __construct(private SdkContext $context){}
/** @param array{limit?: int, startingAfter?: string|null, endingBefore?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListWebhookGrantsResponse{
$result=$this->context->call('listWebhookGrants',[],$params,$options);
return \Affinity\Types\ListWebhookGrantsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListWebhookGrantsResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listWebhookGrants',[],$params,$options) as $item)yield \Affinity\Types\ListWebhookGrantsResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** @param array{scopes: list<string>} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function save(string $platformId, array $params, array $options = []): \Affinity\Types\SaveWebhookGrantResponse{
$result=$this->context->call('saveWebhookGrant',[$platformId],$params,$options);
return \Affinity\Types\SaveWebhookGrantResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function revoke(string $platformId, array $options = []): \Affinity\Types\RevokeWebhookGrantResponse{
$result=$this->context->call('revokeWebhookGrant',[$platformId],[],$options);
return \Affinity\Types\RevokeWebhookGrantResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
