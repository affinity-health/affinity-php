<?php
namespace Affinity;
final class CatalogResource{
public readonly CatalogItemsResource $items;
public readonly CatalogPrescribingOptionsResource $prescribingOptions;
public readonly CatalogSellingPricesResource $sellingPrices;
public readonly CatalogShippingOptionsResource $shippingOptions;
public function __construct(private SdkContext $context){$this->items=new CatalogItemsResource($context);$this->prescribingOptions=new CatalogPrescribingOptionsResource($context);$this->sellingPrices=new CatalogSellingPricesResource($context);$this->shippingOptions=new CatalogShippingOptionsResource($context);}
}
