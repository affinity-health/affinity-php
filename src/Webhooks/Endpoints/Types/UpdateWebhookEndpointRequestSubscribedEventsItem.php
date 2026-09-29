<?php

namespace Affinity\Webhooks\Endpoints\Types;

enum UpdateWebhookEndpointRequestSubscribedEventsItem: string
{
    case WebhookEndpointTest = "webhook_endpoint.test";
    case CancellationRequested = "cancellation.requested";
    case CancellationSent = "cancellation.sent";
    case CancellationConfirmed = "cancellation.confirmed";
    case CancellationRejected = "cancellation.rejected";
    case CancellationFailed = "cancellation.failed";
    case CancellationTooLate = "cancellation.too_late";
    case OrderCreated = "order.created";
    case OrderUpdated = "order.updated";
    case OrderReviewRequested = "order.review_requested";
    case OrderChangesRequested = "order.changes_requested";
    case OrderSigned = "order.signed";
    case OrderRejected = "order.rejected";
    case OrderSubmitted = "order.submitted";
    case OrderAccepted = "order.accepted";
    case OrderProcessing = "order.processing";
    case OrderShipped = "order.shipped";
    case OrderDelivered = "order.delivered";
    case OrderBlocked = "order.blocked";
    case OrderCancelled = "order.cancelled";
}
