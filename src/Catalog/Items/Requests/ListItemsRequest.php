<?php

namespace Affinity\Catalog\Items\Requests;

use Affinity\Core\Json\JsonSerializableType;
use Affinity\Catalog\Items\Types\ListItemsRequestView;
use Affinity\Catalog\Items\Types\ListItemsRequestCatalogKind;
use Affinity\Catalog\Items\Types\ListItemsRequestSort;
use Affinity\Catalog\Items\Types\ListItemsRequestAvailability;
use Affinity\Catalog\Items\Types\ListItemsRequestDosageFormsZero;
use Affinity\Catalog\Items\Types\ListItemsRequestDosageFormsOneItem;
use Affinity\Catalog\Items\Types\ListItemsRequestRequirement;
use Affinity\Catalog\Items\Types\ListItemsRequestRoutesZero;
use Affinity\Catalog\Items\Types\ListItemsRequestRoutesOneItem;

class ListItemsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<ListItemsRequestView> $view
     */
    public ?string $view;

    /**
     * @var ?string $relatedToCatalogItemId
     */
    public ?string $relatedToCatalogItemId;

    /**
     * @var ?value-of<ListItemsRequestCatalogKind> $catalogKind
     */
    public ?string $catalogKind;

    /**
     * @var ?value-of<ListItemsRequestSort> $sort
     */
    public ?string $sort;

    /**
     * @var ?string $catalogItemId
     */
    public ?string $catalogItemId;

    /**
     * @var ?value-of<ListItemsRequestAvailability> $availability
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
     *    value-of<ListItemsRequestDosageFormsZero>
     *   |array<value-of<ListItemsRequestDosageFormsOneItem>>
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
     * @var ?value-of<ListItemsRequestRequirement> $requirement
     */
    public ?string $requirement;

    /**
     * @var (
     *    value-of<ListItemsRequestRoutesZero>
     *   |array<value-of<ListItemsRequestRoutesOneItem>>
     * )|null $routes
     */
    public string|array|null $routes;

    /**
     * @var ?string $startingAfter
     */
    public ?string $startingAfter;

    /**
     * @param array{
     *   view?: ?value-of<ListItemsRequestView>,
     *   relatedToCatalogItemId?: ?string,
     *   catalogKind?: ?value-of<ListItemsRequestCatalogKind>,
     *   sort?: ?value-of<ListItemsRequestSort>,
     *   catalogItemId?: ?string,
     *   availability?: ?value-of<ListItemsRequestAvailability>,
     *   pharmacyIds?: (
     *    string
     *   |array<string>
     * )|null,
     *   dosageForms?: (
     *    value-of<ListItemsRequestDosageFormsZero>
     *   |array<value-of<ListItemsRequestDosageFormsOneItem>>
     * )|null,
     *   endingBefore?: ?string,
     *   hideControlledSubstances?: ?bool,
     *   hideUnpriced?: ?bool,
     *   limit?: ?int,
     *   orgId?: ?string,
     *   practiceId?: ?string,
     *   query?: ?string,
     *   requirement?: ?value-of<ListItemsRequestRequirement>,
     *   routes?: (
     *    value-of<ListItemsRequestRoutesZero>
     *   |array<value-of<ListItemsRequestRoutesOneItem>>
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
