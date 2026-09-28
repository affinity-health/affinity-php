<?php

namespace Affinity\Types;

enum CreatePlatformPracticeApiKeyResponseApiKeyScopesItem: string
{
    case CatalogRead = "catalog:read";
    case SellingPricesRead = "selling_prices:read";
    case SellingPricesWrite = "selling_prices:write";
    case CatalogPricingRead = "catalog_pricing:read";
    case CatalogPricingWrite = "catalog_pricing:write";
    case FormulationDefaultsRead = "formulation_defaults:read";
    case FormulationDefaultsWrite = "formulation_defaults:write";
    case PracticesRead = "practices:read";
    case PracticesWrite = "practices:write";
    case ServiceKeysWrite = "service_keys:write";
    case LocationsRead = "locations:read";
    case LocationsWrite = "locations:write";
    case OrdersRead = "orders:read";
    case OrdersWrite = "orders:write";
    case OrdersSign = "orders:sign";
    case PatientsRead = "patients:read";
    case PatientsWrite = "patients:write";
    case TeamRead = "team:read";
    case TeamWrite = "team:write";
    case HostedSessionsWrite = "hosted_sessions:write";
    case WebhooksRead = "webhooks:read";
    case WebhooksWrite = "webhooks:write";
}
