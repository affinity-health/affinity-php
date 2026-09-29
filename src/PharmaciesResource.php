<?php
namespace Affinity;
final class PharmaciesResource{
public function __construct(private SdkContext $context){}
/** @param array{endingBefore?: string|null, limit?: int, orgId?: string|null, pharmacyId?: string|null, query?: string|null, shipsToState?: string|null, startingAfter?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListPharmaciesResponse{
$result=$this->context->call('listPharmacies',[],$params,$options);
return \Affinity\Types\ListPharmaciesResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListPharmaciesResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listPharmacies',[],$params,$options) as $item)yield \Affinity\Types\ListPharmaciesResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
}
