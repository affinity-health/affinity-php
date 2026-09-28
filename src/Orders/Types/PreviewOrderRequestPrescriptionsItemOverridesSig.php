<?php

namespace Affinity\Orders\Types;

use Affinity\Core\Json\JsonSerializableType;
use Exception;

class PreviewOrderRequestPrescriptionsItemOverridesSig extends JsonSerializableType
{
    /**
     * @var (
     *    'structured'
     *   |'free_text'
     *   |'template'
     *   |'_unknown'
     * ) $format
     */
    public readonly string $format;

    /**
     * @var (
     *    PreviewOrderRequestPrescriptionsItemOverridesSigStructured
     *   |PreviewOrderRequestPrescriptionsItemOverridesSigFreeText
     *   |PreviewOrderRequestPrescriptionsItemOverridesSigTemplate
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   format: (
     *    'structured'
     *   |'free_text'
     *   |'template'
     *   |'_unknown'
     * ),
     *   value: (
     *    PreviewOrderRequestPrescriptionsItemOverridesSigStructured
     *   |PreviewOrderRequestPrescriptionsItemOverridesSigFreeText
     *   |PreviewOrderRequestPrescriptionsItemOverridesSigTemplate
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->format = $values['format'];
        $this->value = $values['value'];
    }

    /**
     * @param PreviewOrderRequestPrescriptionsItemOverridesSigStructured $structured
     * @return PreviewOrderRequestPrescriptionsItemOverridesSig
     */
    public static function structured(PreviewOrderRequestPrescriptionsItemOverridesSigStructured $structured): PreviewOrderRequestPrescriptionsItemOverridesSig
    {
        return new PreviewOrderRequestPrescriptionsItemOverridesSig([
            'format' => 'structured',
            'value' => $structured,
        ]);
    }

    /**
     * @param PreviewOrderRequestPrescriptionsItemOverridesSigFreeText $freeText
     * @return PreviewOrderRequestPrescriptionsItemOverridesSig
     */
    public static function freeText(PreviewOrderRequestPrescriptionsItemOverridesSigFreeText $freeText): PreviewOrderRequestPrescriptionsItemOverridesSig
    {
        return new PreviewOrderRequestPrescriptionsItemOverridesSig([
            'format' => 'free_text',
            'value' => $freeText,
        ]);
    }

    /**
     * @param PreviewOrderRequestPrescriptionsItemOverridesSigTemplate $template
     * @return PreviewOrderRequestPrescriptionsItemOverridesSig
     */
    public static function template(PreviewOrderRequestPrescriptionsItemOverridesSigTemplate $template): PreviewOrderRequestPrescriptionsItemOverridesSig
    {
        return new PreviewOrderRequestPrescriptionsItemOverridesSig([
            'format' => 'template',
            'value' => $template,
        ]);
    }

    /**
     * @return bool
     */
    public function isStructured(): bool
    {
        return $this->value instanceof PreviewOrderRequestPrescriptionsItemOverridesSigStructured && $this->format === 'structured';
    }

    /**
     * @return PreviewOrderRequestPrescriptionsItemOverridesSigStructured
     */
    public function asStructured(): PreviewOrderRequestPrescriptionsItemOverridesSigStructured
    {
        if (!($this->value instanceof PreviewOrderRequestPrescriptionsItemOverridesSigStructured && $this->format === 'structured')) {
            throw new Exception(
                "Expected structured; got " . $this->format . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFreeText(): bool
    {
        return $this->value instanceof PreviewOrderRequestPrescriptionsItemOverridesSigFreeText && $this->format === 'free_text';
    }

    /**
     * @return PreviewOrderRequestPrescriptionsItemOverridesSigFreeText
     */
    public function asFreeText(): PreviewOrderRequestPrescriptionsItemOverridesSigFreeText
    {
        if (!($this->value instanceof PreviewOrderRequestPrescriptionsItemOverridesSigFreeText && $this->format === 'free_text')) {
            throw new Exception(
                "Expected free_text; got " . $this->format . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTemplate(): bool
    {
        return $this->value instanceof PreviewOrderRequestPrescriptionsItemOverridesSigTemplate && $this->format === 'template';
    }

    /**
     * @return PreviewOrderRequestPrescriptionsItemOverridesSigTemplate
     */
    public function asTemplate(): PreviewOrderRequestPrescriptionsItemOverridesSigTemplate
    {
        if (!($this->value instanceof PreviewOrderRequestPrescriptionsItemOverridesSigTemplate && $this->format === 'template')) {
            throw new Exception(
                "Expected template; got " . $this->format . " with value of type " . get_debug_type($this->value),
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
        $result['format'] = $this->format;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->format) {
            case 'structured':
                $value = $this->asStructured()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'free_text':
                $value = $this->asFreeText()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'template':
                $value = $this->asTemplate()->jsonSerialize();
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
        if (!array_key_exists('format', $data)) {
            throw new Exception(
                "JSON data is missing property 'format'",
            );
        }
        $format = $data['format'];
        if (!(is_string($format))) {
            throw new Exception(
                "Expected property 'format' in JSON data to be string, instead received " . get_debug_type($data['format']),
            );
        }

        $args['format'] = $format;
        switch ($format) {
            case 'structured':
                $args['value'] = PreviewOrderRequestPrescriptionsItemOverridesSigStructured::jsonDeserialize($data);
                break;
            case 'free_text':
                $args['value'] = PreviewOrderRequestPrescriptionsItemOverridesSigFreeText::jsonDeserialize($data);
                break;
            case 'template':
                $args['value'] = PreviewOrderRequestPrescriptionsItemOverridesSigTemplate::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['format'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
