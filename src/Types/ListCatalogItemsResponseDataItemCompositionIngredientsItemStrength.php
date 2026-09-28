<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Exception;

class ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength extends JsonSerializableType
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
     *    ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount
     *   |ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio
     *   |ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved
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
     *    ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount
     *   |ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio
     *   |ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved
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
     * @param ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount $amount
     * @return ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength
     */
    public static function amount(ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount $amount): ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength
    {
        return new ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength([
            'kind' => 'amount',
            'value' => $amount,
        ]);
    }

    /**
     * @param ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio $ratio
     * @return ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength
     */
    public static function ratio(ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio $ratio): ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength
    {
        return new ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength([
            'kind' => 'ratio',
            'value' => $ratio,
        ]);
    }

    /**
     * @param ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved $unresolved
     * @return ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength
     */
    public static function unresolved(ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved $unresolved): ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength
    {
        return new ListCatalogItemsResponseDataItemCompositionIngredientsItemStrength([
            'kind' => 'unresolved',
            'value' => $unresolved,
        ]);
    }

    /**
     * @return bool
     */
    public function isAmount(): bool
    {
        return $this->value instanceof ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount && $this->kind === 'amount';
    }

    /**
     * @return ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount
     */
    public function asAmount(): ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount && $this->kind === 'amount')) {
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
        return $this->value instanceof ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio && $this->kind === 'ratio';
    }

    /**
     * @return ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio
     */
    public function asRatio(): ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio && $this->kind === 'ratio')) {
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
        return $this->value instanceof ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved && $this->kind === 'unresolved';
    }

    /**
     * @return ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved
     */
    public function asUnresolved(): ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved && $this->kind === 'unresolved')) {
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
                $args['value'] = ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthAmount::jsonDeserialize($data);
                break;
            case 'ratio':
                $args['value'] = ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthRatio::jsonDeserialize($data);
                break;
            case 'unresolved':
                $args['value'] = ListCatalogItemsResponseDataItemCompositionIngredientsItemStrengthUnresolved::jsonDeserialize($data);
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
