<?php
/**
 * SpeciesCollection automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Starwars;

use PSX\Schema\Attribute\Description;

#[Description('')]
class SpeciesCollection extends Collection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<Species>|null
     */
    #[Description('')]
    protected ?array $results = null;
    /**
     * @param array<Species>|null $results
     */
    public function setResults(?array $results): void
    {
        $this->results = $results;
    }
    /**
     * @return array<Species>|null
     */
    public function getResults(): ?array
    {
        return $this->results;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = parent::toRecord();
        $record->put('results', $this->results);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
