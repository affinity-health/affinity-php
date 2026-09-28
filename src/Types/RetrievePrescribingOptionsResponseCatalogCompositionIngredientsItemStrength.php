<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Exception;

class RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength extends JsonSerializableType
{
    /**
     * @var (
     *    'amount'
     *   |'ratio'
     *   |'unresolved'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount
     *   |RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio
     *   |RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'amount'
     *   |'ratio'
     *   |'unresolved'
     *   |'_unknown'
     * ),
     *   value: (
     *    RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount
     *   |RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio
     *   |RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->value = $values['value'];
    }

    /**
     * @param RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount $amount
     * @return RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength
     */
    public static function amount(RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount $amount): RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength
    {
        return new RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength([
            'kind' => 'amount',
            'value' => $amount,
        ]);
    }

    /**
     * @param RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio $ratio
     * @return RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength
     */
    public static function ratio(RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio $ratio): RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength
    {
        return new RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength([
            'kind' => 'ratio',
            'value' => $ratio,
        ]);
    }

    /**
     * @param RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved $unresolved
     * @return RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength
     */
    public static function unresolved(RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved $unresolved): RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength
    {
        return new RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrength([
            'kind' => 'unresolved',
            'value' => $unresolved,
        ]);
    }

    /**
     * @return bool
     */
    public function isAmount(): bool
    {
        return $this->value instanceof RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount && $this->kind === 'amount';
    }

    /**
     * @return RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount
     */
    public function asAmount(): RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount
    {
        if (!($this->value instanceof RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount && $this->kind === 'amount')) {
            throw new Exception(
                "Expected amount; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRatio(): bool
    {
        return $this->value instanceof RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio && $this->kind === 'ratio';
    }

    /**
     * @return RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio
     */
    public function asRatio(): RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio
    {
        if (!($this->value instanceof RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio && $this->kind === 'ratio')) {
            throw new Exception(
                "Expected ratio; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnresolved(): bool
    {
        return $this->value instanceof RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved && $this->kind === 'unresolved';
    }

    /**
     * @return RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved
     */
    public function asUnresolved(): RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved
    {
        if (!($this->value instanceof RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved && $this->kind === 'unresolved')) {
            throw new Exception(
                "Expected unresolved; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['kind'] = $this->kind;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->kind) {
            case 'amount':
                $value = $this->asAmount()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'ratio':
                $value = $this->asRatio()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'unresolved':
                $value = $this->asUnresolved()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (!array_key_exists('kind', $data)) {
            throw new Exception(
                "JSON data is missing property 'kind'",
            );
        }
        $kind = $data['kind'];
        if (!(is_string($kind))) {
            throw new Exception(
                "Expected property 'kind' in JSON data to be string, instead received " . get_debug_type($data['kind']),
            );
        }

        $args['kind'] = $kind;
        switch ($kind) {
            case 'amount':
                $args['value'] = RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthAmount::jsonDeserialize($data);
                break;
            case 'ratio':
                $args['value'] = RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthRatio::jsonDeserialize($data);
                break;
            case 'unresolved':
                $args['value'] = RetrievePrescribingOptionsResponseCatalogCompositionIngredientsItemStrengthUnresolved::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['kind'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
