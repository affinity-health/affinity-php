<?php
namespace Affinity;
final class WebhooksEventsResource{
public function __construct(private SdkContext $context){}
/** @param array{endingBefore?: string|null, limit?: int, status?: string|null, startingAfter?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListWebhookEventsResponse{
$result=$this->context->call('listWebhookEvents',[],$params,$options);
return \Affinity\Types\ListWebhookEventsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListWebhookEventsResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listWebhookEvents',[],$params,$options) as $item)yield \Affinity\Types\ListWebhookEventsResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $eventId, array $options = []): \Affinity\Types\GetWebhookEventResponse{
$result=$this->context->call('getWebhookEvent',[$eventId],[],$options);
return \Affinity\Types\GetWebhookEventResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function replay(string $eventId, array $options = []): \Affinity\Types\ReplayWebhookEventResponse{
$result=$this->context->call('replayWebhookEvent',[$eventId],[],$options);
return \Affinity\Types\ReplayWebhookEventResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
