<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Exception;

class ListCatalogItemsResponseDataItemQuantityConstraint extends JsonSerializableType
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
     *    ListCatalogItemsResponseDataItemQuantityConstraintFixed
     *   |ListCatalogItemsResponseDataItemQuantityConstraintChoices
     *   |ListCatalogItemsResponseDataItemQuantityConstraintRange
     *   |ListCatalogItemsResponseDataItemQuantityConstraintUnresolved
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
     *    ListCatalogItemsResponseDataItemQuantityConstraintFixed
     *   |ListCatalogItemsResponseDataItemQuantityConstraintChoices
     *   |ListCatalogItemsResponseDataItemQuantityConstraintRange
     *   |ListCatalogItemsResponseDataItemQuantityConstraintUnresolved
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
     * @param ListCatalogItemsResponseDataItemQuantityConstraintFixed $fixed
     * @return ListCatalogItemsResponseDataItemQuantityConstraint
     */
    public static function fixed(ListCatalogItemsResponseDataItemQuantityConstraintFixed $fixed): ListCatalogItemsResponseDataItemQuantityConstraint
    {
        return new ListCatalogItemsResponseDataItemQuantityConstraint([
            'kind' => 'fixed',
            'value' => $fixed,
        ]);
    }

    /**
     * @param ListCatalogItemsResponseDataItemQuantityConstraintChoices $choices
     * @return ListCatalogItemsResponseDataItemQuantityConstraint
     */
    public static function choices(ListCatalogItemsResponseDataItemQuantityConstraintChoices $choices): ListCatalogItemsResponseDataItemQuantityConstraint
    {
        return new ListCatalogItemsResponseDataItemQuantityConstraint([
            'kind' => 'choices',
            'value' => $choices,
        ]);
    }

    /**
     * @param ListCatalogItemsResponseDataItemQuantityConstraintRange $range
     * @return ListCatalogItemsResponseDataItemQuantityConstraint
     */
    public static function range(ListCatalogItemsResponseDataItemQuantityConstraintRange $range): ListCatalogItemsResponseDataItemQuantityConstraint
    {
        return new ListCatalogItemsResponseDataItemQuantityConstraint([
            'kind' => 'range',
            'value' => $range,
        ]);
    }

    /**
     * @param ListCatalogItemsResponseDataItemQuantityConstraintUnresolved $unresolved
     * @return ListCatalogItemsResponseDataItemQuantityConstraint
     */
    public static function unresolved(ListCatalogItemsResponseDataItemQuantityConstraintUnresolved $unresolved): ListCatalogItemsResponseDataItemQuantityConstraint
    {
        return new ListCatalogItemsResponseDataItemQuantityConstraint([
            'kind' => 'unresolved',
            'value' => $unresolved,
        ]);
    }

    /**
     * @return bool
     */
    public function isFixed(): bool
    {
        return $this->value instanceof ListCatalogItemsResponseDataItemQuantityConstraintFixed && $this->kind === 'fixed';
    }

    /**
     * @return ListCatalogItemsResponseDataItemQuantityConstraintFixed
     */
    public function asFixed(): ListCatalogItemsResponseDataItemQuantityConstraintFixed
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemQuantityConstraintFixed && $this->kind === 'fixed')) {
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
        return $this->value instanceof ListCatalogItemsResponseDataItemQuantityConstraintChoices && $this->kind === 'choices';
    }

    /**
     * @return ListCatalogItemsResponseDataItemQuantityConstraintChoices
     */
    public function asChoices(): ListCatalogItemsResponseDataItemQuantityConstraintChoices
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemQuantityConstraintChoices && $this->kind === 'choices')) {
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
        return $this->value instanceof ListCatalogItemsResponseDataItemQuantityConstraintRange && $this->kind === 'range';
    }

    /**
     * @return ListCatalogItemsResponseDataItemQuantityConstraintRange
     */
    public function asRange(): ListCatalogItemsResponseDataItemQuantityConstraintRange
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemQuantityConstraintRange && $this->kind === 'range')) {
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
        return $this->value instanceof ListCatalogItemsResponseDataItemQuantityConstraintUnresolved && $this->kind === 'unresolved';
    }

    /**
     * @return ListCatalogItemsResponseDataItemQuantityConstraintUnresolved
     */
    public function asUnresolved(): ListCatalogItemsResponseDataItemQuantityConstraintUnresolved
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemQuantityConstraintUnresolved && $this->kind === 'unresolved')) {
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
                $args['value'] = ListCatalogItemsResponseDataItemQuantityConstraintFixed::jsonDeserialize($data);
                break;
            case 'choices':
                $args['value'] = ListCatalogItemsResponseDataItemQuantityConstraintChoices::jsonDeserialize($data);
                break;
            case 'range':
                $args['value'] = ListCatalogItemsResponseDataItemQuantityConstraintRange::jsonDeserialize($data);
                break;
            case 'unresolved':
                $args['value'] = ListCatalogItemsResponseDataItemQuantityConstraintUnresolved::jsonDeserialize($data);
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
