<?php
/**
 * Root automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Starwars;

use PSX\Schema\Attribute\Description;

#[Description('')]
class Root implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $films = null;
    #[Description('')]
    protected ?string $people = null;
    #[Description('')]
    protected ?string $planets = null;
    #[Description('')]
    protected ?string $species = null;
    #[Description('')]
    protected ?string $starships = null;
    #[Description('')]
    protected ?string $vehicles = null;
    public function setFilms(?string $films) : void
    {
        $this->films = $films;
    }
    public function getFilms() : ?string
    {
        return $this->films;
    }
    public function setPeople(?string $people) : void
    {
        $this->people = $people;
    }
    public function getPeople() : ?string
    {
        return $this->people;
    }
    public function setPlanets(?string $planets) : void
    {
        $this->planets = $planets;
    }
    public function getPlanets() : ?string
    {
        return $this->planets;
    }
    public function setSpecies(?string $species) : void
    {
        $this->species = $species;
    }
    public function getSpecies() : ?string
    {
        return $this->species;
    }
    public function setStarships(?string $starships) : void
    {
        $this->starships = $starships;
    }
    public function getStarships() : ?string
    {
        return $this->starships;
    }
    public function setVehicles(?string $vehicles) : void
    {
        $this->vehicles = $vehicles;
    }
    public function getVehicles() : ?string
    {
        return $this->vehicles;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('films', $this->films);
        $record->put('people', $this->people);
        $record->put('planets', $this->planets);
        $record->put('species', $this->species);
        $record->put('starships', $this->starships);
        $record->put('vehicles', $this->vehicles);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}