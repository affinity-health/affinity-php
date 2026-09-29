<?php
namespace Affinity;
final class WebhooksEndpointsResource{
public function __construct(private SdkContext $context){}
/** @param array{endingBefore?: string, limit?: int, startingAfter?: string} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListWebhookEndpointsResponse{
$result=$this->context->call('listWebhookEndpoints',[],$params,$options);
return \Affinity\Types\ListWebhookEndpointsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListWebhookEndpointsResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listWebhookEndpoints',[],$params,$options) as $item)yield \Affinity\Types\ListWebhookEndpointsResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** @param array{practiceIds?: list<string>, description?: string, payloadStyle?: string, subscribedEvents?: list<string>, url: string} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(array $params, array $options = []): \Affinity\Types\CreateWebhookEndpointResponse{
$result=$this->context->call('createWebhookEndpoint',[],$params,$options);
return \Affinity\Types\CreateWebhookEndpointResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{practiceIds?: list<string>, description?: string, payloadStyle?: string, status?: string, subscribedEvents?: list<string>, url?: string} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function update(string $endpointId, array $params = [], array $options = []): \Affinity\Types\UpdateWebhookEndpointResponse{
$result=$this->context->call('updateWebhookEndpoint',[$endpointId],$params,$options);
return \Affinity\Types\UpdateWebhookEndpointResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function delete(string $endpointId, array $options = []): \Affinity\Types\DeleteWebhookEndpointResponse{
$result=$this->context->call('deleteWebhookEndpoint',[$endpointId],[],$options);
return \Affinity\Types\DeleteWebhookEndpointResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function rotateSecret(string $endpointId, array $options = []): \Affinity\Types\RotateWebhookEndpointSecretResponse{
$result=$this->context->call('rotateWebhookEndpointSecret',[$endpointId],[],$options);
return \Affinity\Types\RotateWebhookEndpointSecretResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function test(string $endpointId, array $options = []): \Affinity\Types\TestWebhookEndpointResponse{
$result=$this->context->call('testWebhookEndpoint',[$endpointId],[],$options);
return \Affinity\Types\TestWebhookEndpointResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
