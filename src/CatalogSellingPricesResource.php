<?php
namespace Affinity;
final class CatalogSellingPricesResource{
public function __construct(private SdkContext $context){}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $catalogItemId, array $options = []): \Affinity\Types\PlatformPublicApiSellingPricesReadSellingPriceResponse{
$result=$this->context->call('platform.public-api.selling-prices.readSellingPrice',[$catalogItemId],[],$options);
return \Affinity\Types\PlatformPublicApiSellingPricesReadSellingPriceResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
