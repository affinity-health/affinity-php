<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Exception;

class RetrievePrescribingOptionsResponseCatalogQuantityConstraint extends JsonSerializableType
{
    /**
     * @var (
     *    'fixed'
     *   |'choices'
     *   |'range'
     *   |'unresolved'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed
     *   |RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices
     *   |RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange
     *   |RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'fixed'
     *   |'choices'
     *   |'range'
     *   |'unresolved'
     *   |'_unknown'
     * ),
     *   value: (
     *    RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed
     *   |RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices
     *   |RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange
     *   |RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved
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
     * @param RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed $fixed
     * @return RetrievePrescribingOptionsResponseCatalogQuantityConstraint
     */
    public static function fixed(RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed $fixed): RetrievePrescribingOptionsResponseCatalogQuantityConstraint
    {
        return new RetrievePrescribingOptionsResponseCatalogQuantityConstraint([
            'kind' => 'fixed',
            'value' => $fixed,
        ]);
    }

    /**
     * @param RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices $choices
     * @return RetrievePrescribingOptionsResponseCatalogQuantityConstraint
     */
    public static function choices(RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices $choices): RetrievePrescribingOptionsResponseCatalogQuantityConstraint
    {
        return new RetrievePrescribingOptionsResponseCatalogQuantityConstraint([
            'kind' => 'choices',
            'value' => $choices,
        ]);
    }

    /**
     * @param RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange $range
     * @return RetrievePrescribingOptionsResponseCatalogQuantityConstraint
     */
    public static function range(RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange $range): RetrievePrescribingOptionsResponseCatalogQuantityConstraint
    {
        return new RetrievePrescribingOptionsResponseCatalogQuantityConstraint([
            'kind' => 'range',
            'value' => $range,
        ]);
    }

    /**
     * @param RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved $unresolved
     * @return RetrievePrescribingOptionsResponseCatalogQuantityConstraint
     */
    public static function unresolved(RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved $unresolved): RetrievePrescribingOptionsResponseCatalogQuantityConstraint
    {
        return new RetrievePrescribingOptionsResponseCatalogQuantityConstraint([
            'kind' => 'unresolved',
            'value' => $unresolved,
        ]);
    }

    /**
     * @return bool
     */
    public function isFixed(): bool
    {
        return $this->value instanceof RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed && $this->kind === 'fixed';
    }

    /**
     * @return RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed
     */
    public function asFixed(): RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed
    {
        if (!($this->value instanceof RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed && $this->kind === 'fixed')) {
            throw new Exception(
                "Expected fixed; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isChoices(): bool
    {
        return $this->value instanceof RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices && $this->kind === 'choices';
    }

    /**
     * @return RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices
     */
    public function asChoices(): RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices
    {
        if (!($this->value instanceof RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices && $this->kind === 'choices')) {
            throw new Exception(
                "Expected choices; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRange(): bool
    {
        return $this->value instanceof RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange && $this->kind === 'range';
    }

    /**
     * @return RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange
     */
    public function asRange(): RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange
    {
        if (!($this->value instanceof RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange && $this->kind === 'range')) {
            throw new Exception(
                "Expected range; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnresolved(): bool
    {
        return $this->value instanceof RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved && $this->kind === 'unresolved';
    }

    /**
     * @return RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved
     */
    public function asUnresolved(): RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved
    {
        if (!($this->value instanceof RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved && $this->kind === 'unresolved')) {
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
            case 'fixed':
                $value = $this->asFixed()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'choices':
                $value = $this->asChoices()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'range':
                $value = $this->asRange()->jsonSerialize();
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
            case 'fixed':
                $args['value'] = RetrievePrescribingOptionsResponseCatalogQuantityConstraintFixed::jsonDeserialize($data);
                break;
            case 'choices':
                $args['value'] = RetrievePrescribingOptionsResponseCatalogQuantityConstraintChoices::jsonDeserialize($data);
                break;
            case 'range':
                $args['value'] = RetrievePrescribingOptionsResponseCatalogQuantityConstraintRange::jsonDeserialize($data);
                break;
            case 'unresolved':
                $args['value'] = RetrievePrescribingOptionsResponseCatalogQuantityConstraintUnresolved::jsonDeserialize($data);
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
