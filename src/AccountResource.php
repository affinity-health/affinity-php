<?php
namespace Affinity;
final class AccountResource{
public function __construct(private SdkContext $context){}
/** @param array{orgId?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(array $params = [], array $options = []): \Affinity\Types\GetAccountResponse{
$result=$this->context->call('getAccount',[],$params,$options);
return \Affinity\Types\GetAccountResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
