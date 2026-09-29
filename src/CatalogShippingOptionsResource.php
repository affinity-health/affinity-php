<?php
namespace Affinity;
final class CatalogShippingOptionsResource{
public function __construct(private SdkContext $context){}
/** @param array{destinationState: string, destinationType?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(string $catalogItemId, array $params, array $options = []): array{
$result=$this->context->call('listShippingOptions',[$catalogItemId],$params,$options);
return $result;}
}
