<?php

namespace Affinity\Catalog\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Catalog\Types\ListCatalogItemsRequestView;
use Affinity\Catalog\Types\ListCatalogItemsRequestCatalogKind;
use Affinity\Catalog\Types\ListCatalogItemsRequestSort;
use Affinity\Catalog\Types\ListCatalogItemsRequestAvailability;
use Affinity\Catalog\Types\ListCatalogItemsRequestDosageFormsZero;
use Affinity\Catalog\Types\ListCatalogItemsRequestDosageFormsOneItem;
use Affinity\Catalog\Types\ListCatalogItemsRequestRequirement;
use Affinity\Catalog\Types\ListCatalogItemsRequestRoutesZero;
use Affinity\Catalog\Types\ListCatalogItemsRequestRoutesOneItem;

class ListCatalogItemsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<ListCatalogItemsRequestView> $view
     */
    public ?string $view;

    /**
     * @var ?string $relatedToCatalogItemId
     */
    public ?string $relatedToCatalogItemId;

    /**
     * @var ?value-of<ListCatalogItemsRequestCatalogKind> $catalogKind
     */
    public ?string $catalogKind;

    /**
     * @var ?value-of<ListCatalogItemsRequestSort> $sort
     */
    public ?string $sort;

    /**
     * @var ?string $catalogItemId
     */
    public ?string $catalogItemId;

    /**
     * @var ?value-of<ListCatalogItemsRequestAvailability> $availability
     */
    public ?string $availability;

    /**
     * @var (
     *    string
     *   |array<string>
     * )|null $pharmacyIds
     */
    public string|array|null $pharmacyIds;

    /**
     * @var (
     *    value-of<ListCatalogItemsRequestDosageFormsZero>
     *   |array<value-of<ListCatalogItemsRequestDosageFormsOneItem>>
     * )|null $dosageForms
     */
    public string|array|null $dosageForms;

    /**
     * @var ?string $endingBefore
     */
    public ?string $endingBefore;

    /**
     * @var ?bool $hideControlledSubstances
     */
    public ?bool $hideControlledSubstances;

    /**
     * @var ?bool $hideUnpriced
     */
    public ?bool $hideUnpriced;

    /**
     * @var ?int $limit
     */
    public ?int $limit;

    /**
     * @var ?string $orgId
     */
    public ?string $orgId;

    /**
     * @var ?string $practiceId
     */
    public ?string $practiceId;

    /**
     * @var ?string $query
     */
    public ?string $query;

    /**
     * @var ?value-of<ListCatalogItemsRequestRequirement> $requirement
     */
    public ?string $requirement;

    /**
     * @var (
     *    value-of<ListCatalogItemsRequestRoutesZero>
     *   |array<value-of<ListCatalogItemsRequestRoutesOneItem>>
     * )|null $routes
     */
    public string|array|null $routes;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @param array{
     *   view?: ?value-of<ListCatalogItemsRequestView>,
     *   relatedToCatalogItemId?: ?string,
     *   catalogKind?: ?value-of<ListCatalogItemsRequestCatalogKind>,
     *   sort?: ?value-of<ListCatalogItemsRequestSort>,
     *   catalogItemId?: ?string,
     *   availability?: ?value-of<ListCatalogItemsRequestAvailability>,
     *   pharmacyIds?: (
     *    string
     *   |array<string>
     * )|null,
     *   dosageForms?: (
     *    value-of<ListCatalogItemsRequestDosageFormsZero>
     *   |array<value-of<ListCatalogItemsRequestDosageFormsOneItem>>
     * )|null,
     *   endingBefore?: ?string,
     *   hideControlledSubstances?: ?bool,
     *   hideUnpriced?: ?bool,
     *   limit?: ?int,
     *   orgId?: ?string,
     *   practiceId?: ?string,
     *   query?: ?string,
     *   requirement?: ?value-of<ListCatalogItemsRequestRequirement>,
     *   routes?: (
     *    value-of<ListCatalogItemsRequestRoutesZero>
     *   |array<value-of<ListCatalogItemsRequestRoutesOneItem>>
     * )|null,
     *   startingAfter?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->view = $values['view'] ?? null;
        $this->relatedToCatalogItemId = $values['relatedToCatalogItemId'] ?? null;
        $this->catalogKind = $values['catalogKind'] ?? null;
        $this->sort = $values['sort'] ?? null;
        $this->catalogItemId = $values['catalogItemId'] ?? null;
        $this->availability = $values['availability'] ?? null;
        $this->pharmacyIds = $values['pharmacyIds'] ?? null;
        $this->dosageForms = $values['dosageForms'] ?? null;
        $this->endingBefore = $values['endingBefore'] ?? null;
        $this->hideControlledSubstances = $values['hideControlledSubstances'] ?? null;
        $this->hideUnpriced = $values['hideUnpriced'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->orgId = $values['orgId'] ?? null;
        $this->practiceId = $values['practiceId'] ?? null;
        $this->query = $values['query'] ?? null;
        $this->requirement = $values['requirement'] ?? null;
        $this->routes = $values['routes'] ?? null;
        $this->startingAfter = $values['startingAfter'] ?? null;
    }
}
