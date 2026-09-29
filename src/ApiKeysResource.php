<?php
namespace Affinity;
final class ApiKeysResource{
public function __construct(private SdkContext $context){}
/** @param array{allowedIps?: list<string>|null, expiresAt?: string|null|null, name: string, scopes?: list<string>|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(array $params, array $options = []): \Affinity\Types\CreatePlatformPracticeApiKeyResponse{
$result=$this->context->call('createPlatformPracticeApiKey',[],$params,$options);
return \Affinity\Types\CreatePlatformPracticeApiKeyResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function getAccess(array $options = []): \Affinity\Types\GetApiAccessResponse{
$result=$this->context->call('getApiAccess',[],[],$options);
return \Affinity\Types\GetApiAccessResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
