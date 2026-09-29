<?php
namespace Affinity;
final class Affinity {private SdkContext $context;public readonly AccountResource $account;
public readonly ApiKeysResource $apiKeys;
public readonly CatalogResource $catalog;
public readonly LocationsResource $locations;
public readonly OrdersResource $orders;
public readonly PatientsResource $patients;
public readonly PharmaciesResource $pharmacies;
public readonly PracticesResource $practices;
public readonly TeamResource $team;
public readonly WebhooksResource $webhooks;public function __construct(string $apiKey,array $configuration=[],?SdkContext $context=null){$this->context=$context??new SdkContext(new SdkTransport($apiKey,$configuration));$this->account=new AccountResource($this->context);$this->apiKeys=new ApiKeysResource($this->context);$this->catalog=new CatalogResource($this->context);$this->locations=new LocationsResource($this->context);$this->orders=new OrdersResource($this->context);$this->patients=new PatientsResource($this->context);$this->pharmacies=new PharmaciesResource($this->context);$this->practices=new PracticesResource($this->context);$this->team=new TeamResource($this->context);$this->webhooks=new WebhooksResource($this->context);}public function forPractice(string $practiceId):self{if(!trim($practiceId))throw new \InvalidArgumentException('practiceId is required');if($this->context->practiceId!==null&&$this->context->practiceId!==$practiceId)throw new \InvalidArgumentException('Conflicting practice ID');return new self('',[],new SdkContext($this->context->transport,$practiceId));}}