<?php
namespace Affinity;
final class OrdersTestSimulationResource{
public function __construct(private SdkContext $context){}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $orderId, array $options = []): \Affinity\Types\GetOrderTestSimulationResponse{
$result=$this->context->call('getOrderTestSimulation',[$orderId],[],$options);
return \Affinity\Types\GetOrderTestSimulationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{mode: string, scenario: string, action?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $orderId, array $params, array $options = []): \Affinity\Types\UpdateOrderTestSimulationResponse{
$result=$this->context->call('updateOrderTestSimulation',[$orderId],$params,$options);
return \Affinity\Types\UpdateOrderTestSimulationResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
