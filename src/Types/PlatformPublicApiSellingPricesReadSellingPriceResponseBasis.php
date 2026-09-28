<?php

namespace Affinity\Types;

use Affinity\Core\Json\JsonSerializableType;
use Exception;

class PlatformPublicApiSellingPricesReadSellingPriceResponseBasis extends JsonSerializableType
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
     *    PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem
     *   |PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage
     *   |PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit
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
     *    PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem
     *   |PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage
     *   |PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit
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
     * @param PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem $item
     * @return PlatformPublicApiSellingPricesReadSellingPriceResponseBasis
     */
    public static function item(PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem $item): PlatformPublicApiSellingPricesReadSellingPriceResponseBasis
    {
        return new PlatformPublicApiSellingPricesReadSellingPriceResponseBasis([
            'kind' => 'item',
            'value' => $item,
        ]);
    }

    /**
     * @param PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage $package
     * @return PlatformPublicApiSellingPricesReadSellingPriceResponseBasis
     */
    public static function package(PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage $package): PlatformPublicApiSellingPricesReadSellingPriceResponseBasis
    {
        return new PlatformPublicApiSellingPricesReadSellingPriceResponseBasis([
            'kind' => 'package',
            'value' => $package,
        ]);
    }

    /**
     * @param PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit $unit
     * @return PlatformPublicApiSellingPricesReadSellingPriceResponseBasis
     */
    public static function unit(PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit $unit): PlatformPublicApiSellingPricesReadSellingPriceResponseBasis
    {
        return new PlatformPublicApiSellingPricesReadSellingPriceResponseBasis([
            'kind' => 'unit',
            'value' => $unit,
        ]);
    }

    /**
     * @return bool
     */
    public function isItem(): bool
    {
        return $this->value instanceof PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem && $this->kind === 'item';
    }

    /**
     * @return PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem
     */
    public function asItem(): PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem
    {
        if (!($this->value instanceof PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem && $this->kind === 'item')) {
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
        return $this->value instanceof PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage && $this->kind === 'package';
    }

    /**
     * @return PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage
     */
    public function asPackage(): PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage
    {
        if (!($this->value instanceof PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage && $this->kind === 'package')) {
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
        return $this->value instanceof PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit && $this->kind === 'unit';
    }

    /**
     * @return PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit
     */
    public function asUnit(): PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit
    {
        if (!($this->value instanceof PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit && $this->kind === 'unit')) {
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
                $args['value'] = PlatformPublicApiSellingPricesReadSellingPriceResponseBasisItem::jsonDeserialize($data);
                break;
            case 'package':
                $args['value'] = PlatformPublicApiSellingPricesReadSellingPriceResponseBasisPackage::jsonDeserialize($data);
                break;
            case 'unit':
                $args['value'] = PlatformPublicApiSellingPricesReadSellingPriceResponseBasisUnit::jsonDeserialize($data);
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
