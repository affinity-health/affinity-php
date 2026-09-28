<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Exception;

class ListCatalogItemsResponseDataItemPricingBasis extends JsonSerializableType
{
    /**
     * @var (
     *    'item'
     *   |'package'
     *   |'unit'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    ListCatalogItemsResponseDataItemPricingBasisItem
     *   |ListCatalogItemsResponseDataItemPricingBasisPackage
     *   |ListCatalogItemsResponseDataItemPricingBasisUnit
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'item'
     *   |'package'
     *   |'unit'
     *   |'_unknown'
     * ),
     *   value: (
     *    ListCatalogItemsResponseDataItemPricingBasisItem
     *   |ListCatalogItemsResponseDataItemPricingBasisPackage
     *   |ListCatalogItemsResponseDataItemPricingBasisUnit
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
     * @param ListCatalogItemsResponseDataItemPricingBasisItem $item
     * @return ListCatalogItemsResponseDataItemPricingBasis
     */
    public static function item(ListCatalogItemsResponseDataItemPricingBasisItem $item): ListCatalogItemsResponseDataItemPricingBasis
    {
        return new ListCatalogItemsResponseDataItemPricingBasis([
            'kind' => 'item',
            'value' => $item,
        ]);
    }

    /**
     * @param ListCatalogItemsResponseDataItemPricingBasisPackage $package
     * @return ListCatalogItemsResponseDataItemPricingBasis
     */
    public static function package(ListCatalogItemsResponseDataItemPricingBasisPackage $package): ListCatalogItemsResponseDataItemPricingBasis
    {
        return new ListCatalogItemsResponseDataItemPricingBasis([
            'kind' => 'package',
            'value' => $package,
        ]);
    }

    /**
     * @param ListCatalogItemsResponseDataItemPricingBasisUnit $unit
     * @return ListCatalogItemsResponseDataItemPricingBasis
     */
    public static function unit(ListCatalogItemsResponseDataItemPricingBasisUnit $unit): ListCatalogItemsResponseDataItemPricingBasis
    {
        return new ListCatalogItemsResponseDataItemPricingBasis([
            'kind' => 'unit',
            'value' => $unit,
        ]);
    }

    /**
     * @return bool
     */
    public function isItem(): bool
    {
        return $this->value instanceof ListCatalogItemsResponseDataItemPricingBasisItem && $this->kind === 'item';
    }

    /**
     * @return ListCatalogItemsResponseDataItemPricingBasisItem
     */
    public function asItem(): ListCatalogItemsResponseDataItemPricingBasisItem
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemPricingBasisItem && $this->kind === 'item')) {
            throw new Exception(
                "Expected item; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPackage(): bool
    {
        return $this->value instanceof ListCatalogItemsResponseDataItemPricingBasisPackage && $this->kind === 'package';
    }

    /**
     * @return ListCatalogItemsResponseDataItemPricingBasisPackage
     */
    public function asPackage(): ListCatalogItemsResponseDataItemPricingBasisPackage
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemPricingBasisPackage && $this->kind === 'package')) {
            throw new Exception(
                "Expected package; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnit(): bool
    {
        return $this->value instanceof ListCatalogItemsResponseDataItemPricingBasisUnit && $this->kind === 'unit';
    }

    /**
     * @return ListCatalogItemsResponseDataItemPricingBasisUnit
     */
    public function asUnit(): ListCatalogItemsResponseDataItemPricingBasisUnit
    {
        if (!($this->value instanceof ListCatalogItemsResponseDataItemPricingBasisUnit && $this->kind === 'unit')) {
            throw new Exception(
                "Expected unit; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'item':
                $value = $this->asItem()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'package':
                $value = $this->asPackage()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'unit':
                $value = $this->asUnit()->jsonSerialize();
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
            case 'item':
                $args['value'] = ListCatalogItemsResponseDataItemPricingBasisItem::jsonDeserialize($data);
                break;
            case 'package':
                $args['value'] = ListCatalogItemsResponseDataItemPricingBasisPackage::jsonDeserialize($data);
                break;
            case 'unit':
                $args['value'] = ListCatalogItemsResponseDataItemPricingBasisUnit::jsonDeserialize($data);
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
