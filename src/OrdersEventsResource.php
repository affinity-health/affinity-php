<?php
namespace Affinity;
final class OrdersEventsResource{
public function __construct(private SdkContext $context){}
/** @param array{endingBefore?: string|null, limit?: int, startingAfter?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(string $orderId, array $params = [], array $options = []): \Affinity\Types\ListOrderEventsResponse{
$result=$this->context->call('listOrderEvents',[$orderId],$params,$options);
return \Affinity\Types\ListOrderEventsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListOrderEventsResponseDataItem> */
public function iterate(string $orderId, array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listOrderEvents',[$orderId],$params,$options) as $item)yield \Affinity\Types\ListOrderEventsResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
}
