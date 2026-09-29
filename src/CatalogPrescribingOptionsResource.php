<?php
namespace Affinity;
final class CatalogPrescribingOptionsResource{
public function __construct(private SdkContext $context){}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $catalogItemId, array $options = []): \Affinity\Types\RetrievePrescribingOptionsResponse{
$result=$this->context->call('retrievePrescribingOptions',[$catalogItemId],[],$options);
return \Affinity\Types\RetrievePrescribingOptionsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
