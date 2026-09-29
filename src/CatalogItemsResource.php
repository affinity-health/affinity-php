<?php
namespace Affinity;
final class CatalogItemsResource{
public function __construct(private SdkContext $context){}
/** @param array{view?: string|null, relatedToCatalogItemId?: string|null, catalogKind?: string|null, sort?: string|null, catalogItemId?: string|null, availability?: string|null, pharmacyIds?: string|list<string>|null, dosageForms?: string|list<string>|null, endingBefore?: string|null, hideControlledSubstances?: bool, hideUnpriced?: bool, limit?: int, orgId?: string|null, query?: string|null, requirement?: string|null, routes?: string|list<string>|null, startingAfter?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListCatalogItemsResponse{
$result=$this->context->call('listCatalogItems',[],$params,$options);
return \Affinity\Types\ListCatalogItemsResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListCatalogItemsResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listCatalogItems',[],$params,$options) as $item)yield \Affinity\Types\ListCatalogItemsResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
}
