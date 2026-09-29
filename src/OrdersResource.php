<?php
namespace Affinity;
final class OrdersResource{
public readonly OrdersBatchesResource $batches;
public readonly OrdersEventsResource $events;
public readonly OrdersExceptionsResource $exceptions;
public readonly OrdersPrescriptionsResource $prescriptions;
public readonly OrdersTestSimulationResource $testSimulation;
public function __construct(private SdkContext $context){$this->batches=new OrdersBatchesResource($context);$this->events=new OrdersEventsResource($context);$this->exceptions=new OrdersExceptionsResource($context);$this->prescriptions=new OrdersPrescriptionsResource($context);$this->testSimulation=new OrdersTestSimulationResource($context);}
/** @param array{query?: string|null, externalOrderId?: string|null, createdAfter?: string|null, createdBefore?: string|null, endingBefore?: string|null, limit?: int, orderId?: string|null, patientId?: string|null, patientExternalId?: string|null, sort?: string|null, startingAfter?: string|null, status?: string|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function list(array $params = [], array $options = []): \Affinity\Types\ListOrdersResponse{
$result=$this->context->call('listOrders',[],$params,$options);
return \Affinity\Types\ListOrdersResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @return \Generator<\Affinity\Types\ListOrdersResponseDataItem> */
public function iterate(array $params = [], array $options = []): \Generator {foreach($this->context->iterate('listOrders',[],$params,$options) as $item)yield \Affinity\Types\ListOrdersResponseDataItem::fromJson(json_encode($item,JSON_THROW_ON_ERROR));}
/** @param array{userId?: string|null, prescriber?: array{id?: string|null, npi?: string|null, externalId?: string|null, profile?: array{email?: string|null, phone?: string|null}|null}|null, otcItems?: list<array{catalogItemId: string, quantity: int}>|null, externalOrderId?: string|null, metadata?: mixed|null, patientId?: string|null, patient?: array{address?: array{city: string, line1: string, line2?: string|null|null, postalCode: string, state: string, country?: string|null}|null|null, clinicalProfile?: array{currentMedications: list<string>, heightInches?: float|string|null|null, reviewedAt?: string|null|null, weightPounds?: float|string|null|null}|null, dateOfBirth: string, email?: string|null|null, externalId?: string|null, externalIdentities?: list<array{source: string, value: string}>|null, addresses?: list<array{id?: string|null, address: array{city: string, country?: string|null, line1: string, line2?: string|null|null, postalCode: string, state: string}, label: string, preferredShipping: bool, recipientName: string|null}>|null, encounters?: list<array{notes: string|null, occurredAt: string, providerName: string|null, type: string}>|null, gender?: string|null, locationId?: string|null, metadata?: mixed|null, medicalRecordNumber?: string|null|null, measurements?: list<array{heightCentimeters: float|string|null, recordedAt: string, source: string, weightKilograms: float|string|null}>|null, name: array{first: string, last: string, middle?: string|null|null, preferred?: string|null|null}, phone?: string|null|null, programs?: list<array{endedAt: string|null, name: string, startedAt: string, status: string}>|null}|null, shippingAddressId?: string|null, prescriptions: list<array{externalPrescriptionId?: string|null, clinical?: array{compoundingReason?: array{category?: string|null, context?: string|null}|null, medicationReviewStatus?: string|null, diagnosisReviewStatus?: string|null, currentMedications?: list<string>|null, diagnoses?: list<array{code: string, display: string}>|null, observations?: list<array{display: string, unit: string, value: float|string}>|null}|null, pharmacyId?: string|null, daysSupply: int, dispensing: array{dispenseUponAcceptance?: bool|null, shippingOptionId?: string|null, shippingAmountCents?: int|null, shippingDestinationType?: string|null, pharmacyNotes?: string|null, requestedFillDate?: string|null, substitutionPermitted?: bool|null}, directions: string, medicationId: string, quantity: float|string, quantityUnit: string, refills: int, structuredSig?: array{dose: string, doseUnit: string, duration?: string|null, frequency: string, indication?: string|null, maxDailyUse?: string|null, prn?: bool|null, route: string, titrationSchedule?: string|null}|null}>} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function create(array $params, array $options = []): \Affinity\Types\CreateOrderResponse{
$result=$this->context->call('createOrder',[],$params,$options);
return \Affinity\Types\CreateOrderResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function get(string $orderId, array $options = []): \Affinity\Types\GetOrderResponse{
$result=$this->context->call('getOrder',[$orderId],[],$options);
return \Affinity\Types\GetOrderResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{reason: string} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function cancel(string $orderId, array $params, array $options = []): \Affinity\Types\CancelOrderResponse{
$result=$this->context->call('cancelOrder',[$orderId],$params,$options);
return \Affinity\Types\CancelOrderResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{otcItems?: list<array{catalogItemId: string, quantity: int}>|null, patientId?: string|null, patientExternalId?: string|null, patient?: array{address?: array{city: string, line1: string, line2?: string|null|null, postalCode: string, state: string, country?: string|null}|null|null, clinicalProfile?: array{currentMedications: list<string>, heightInches?: float|string|null|null, reviewedAt?: string|null|null, weightPounds?: float|string|null|null}|null, dateOfBirth: string, email?: string|null|null, externalId?: string|null, externalIdentities?: list<array{source: string, value: string}>|null, addresses?: list<array{id?: string|null, address: array{city: string, country?: string|null, line1: string, line2?: string|null|null, postalCode: string, state: string}, label: string, preferredShipping: bool, recipientName: string|null}>|null, encounters?: list<array{notes: string|null, occurredAt: string, providerName: string|null, type: string}>|null, gender?: string|null, locationId?: string|null, metadata?: mixed|null, medicalRecordNumber?: string|null|null, measurements?: list<array{heightCentimeters: float|string|null, recordedAt: string, source: string, weightKilograms: float|string|null}>|null, name: array{first: string, last: string, middle?: string|null|null, preferred?: string|null|null}, phone?: string|null|null, programs?: list<array{endedAt: string|null, name: string, startedAt: string, status: string}>|null}|null, userId?: string|null, prescriber?: array{id?: string|null, npi?: string|null, externalId?: string|null, profile?: array{email?: string|null, phone?: string|null}|null}|null, shippingAddressId?: string|null, externalOrderId?: string|null, prescriptions: list<array{medicationId: string, externalPrescriptionId?: string|null, preset?: string|null, expectedRevision?: string|null, overrides?: array{sig?: array{format: string, fields: array{dose: string, doseUnit: string, frequency: string, route: string, prn?: bool|null, duration?: string|null, indication?: string|null, maxDailyUse?: string|null, titrationSchedule?: string|null}}|array{format: string, text: string}|array{format: string, templateId: string, templateRevision: string, values: mixed}|null, quantity?: array{value: float, unit: string}|null|null, daysSupply?: int|null|null, refills?: int|null, clinical?: array{compoundingReason?: array{category?: string|null, context?: string|null}|null, medicationReviewStatus?: string|null, diagnosisReviewStatus?: string|null, currentMedications?: list<string>|null, diagnoses?: list<array{code: string, display: string}>|null, observations?: list<array{display: string, unit: string, value: float|string}>|null}|null|null, dispensing?: array{dispenseUponAcceptance?: bool|null, shippingOptionId?: string|null, shippingAmountCents?: int|null, shippingDestinationType?: string|null, pharmacyNotes?: string|null, requestedFillDate?: string|null, substitutionPermitted?: bool|null}|null}|null}>, shipping?: array{selection?: string|null}|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function preview(array $params, array $options = []): \Affinity\Types\PreviewOrderResponse{
$result=$this->context->call('previewOrder',[],$params,$options);
return \Affinity\Types\PreviewOrderResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{userId?: string|null, prescriber?: array{id?: string|null, npi?: string|null, externalId?: string|null, profile?: array{email?: string|null, phone?: string|null}|null}|null, signatureAttestation: bool, expectedRevision?: string|null, expectedVersions?: list<array{prescriptionId: string, version: int}>|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function sign(string $orderId, array $params, array $options = []): \Affinity\Types\SignOrderResponse{
$result=$this->context->call('signOrder',[$orderId],$params,$options);
return \Affinity\Types\SignOrderResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{userId?: string|null, prescriber?: array{id?: string|null, npi?: string|null, externalId?: string|null, profile?: array{email?: string|null, phone?: string|null}|null}|null, signatureAttestation: bool, expectedRevision?: string|null, expectedVersions?: list<array{prescriptionId: string, version: int}>|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function signAndSubmit(string $orderId, array $params, array $options = []): \Affinity\Types\SignAndSubmitOrderResponse{
$result=$this->context->call('signAndSubmitOrder',[$orderId],$params,$options);
return \Affinity\Types\SignAndSubmitOrderResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** 
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function submit(string $orderId, array $options = []): \Affinity\Types\SubmitOrderResponse{
$result=$this->context->call('submitOrder',[$orderId],[],$options);
return \Affinity\Types\SubmitOrderResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
/** @param array{userId?: string|null, prescriber?: array{id?: string|null, npi?: string|null, externalId?: string|null, profile?: array{email?: string|null, phone?: string|null}|null}|null, reason: string, expectedRevision?: string|null, expectedVersions?: list<array{prescriptionId: string, version: int}>|null} $params
 * @param array{practiceId?: string, idempotencyKey?: string, organizationId?: string, actorId?: string, actorType?: string} $options
 */
public function reject(string $orderId, array $params, array $options = []): \Affinity\Types\RejectOrderResponse{
$result=$this->context->call('rejectOrder',[$orderId],$params,$options);
return \Affinity\Types\RejectOrderResponse::fromJson(json_encode($result, JSON_THROW_ON_ERROR));}
}
