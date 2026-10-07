<?php
namespace Affinity;
final class CatalogPresentationPricesResource{
public function __construct(private SdkContext $context){}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $catalogItemId, array $options = []): \Affinity\Types\PlatformPublicApiSellingPricesReadPresentationPriceResponse{
$result=$this->context->call('platform.public-api.selling-prices.readPresentationPrice',[$catalogItemId],[],$options);
return \Affinity\Types\PlatformPublicApiSellingPricesReadPresentationPriceResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
