<?php
namespace Affinity;
final class WebhooksResource{
public readonly WebhooksEndpointsResource $endpoints;
public readonly WebhooksEventsResource $events;
public readonly WebhooksGrantsResource $grants;
public function __construct(private SdkContext $context){$this->endpoints=new WebhooksEndpointsResource($context);$this->events=new WebhooksEventsResource($context);$this->grants=new WebhooksGrantsResource($context);}
}
