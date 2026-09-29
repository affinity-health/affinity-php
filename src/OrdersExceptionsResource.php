<?php
namespace Affinity;
final class OrdersExceptionsResource{
public function __construct(private SdkContext $context){}
/** @param array{action: string, note?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function act(string $orderId, string $exceptionId, array $params, array $options = []): \Affinity\Types\ActOnOrderExceptionResponse{
$result=$this->context->call('actOnOrderException',[$orderId,$exceptionId],$params,$options);
return \Affinity\Types\ActOnOrderExceptionResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
