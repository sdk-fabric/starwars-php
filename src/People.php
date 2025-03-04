<?php
/**
 * People automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Starwars;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('A People is an individual person or character within the Star Wars universe')]
class People implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('The name of this person.')]
    protected ?string $name = null;
    #[Key('birth_year')]
    #[Description('The birth year of the person, using the in-universe standard of BBY or ABY - Before the Battle of Yavin or After the Battle of Yavin. The Battle of Yavin is a battle that occurs at the end of Star Wars episode IV: A New Hope.')]
    protected ?string $birthYear = null;
    #[Key('eye_color')]
    #[Description('The eye color of this person. Will be "unknown" if not known or "n/a" if the person does not have an eye.')]
    protected ?string $eyeColor = null;
    #[Description('The gender of this person. Either "Male", "Female" or "unknown", "n/a" if the person does not have a gender.')]
    protected ?string $gender = null;
    #[Key('hair_color')]
    #[Description('The hair color of this person. Will be "unknown" if not known or "n/a" if the person does not have hair.')]
    protected ?string $hairColor = null;
    #[Description('The height of the person in centimeters.')]
    protected ?string $height = null;
    #[Description('The mass of the person in kilograms.')]
    protected ?string $mass = null;
    #[Key('skin_color')]
    #[Description('The skin color of this person.')]
    protected ?string $skinColor = null;
    #[Description('The URL of a planet resource, a planet that this person was born on or inhabits.')]
    protected ?string $homeworld = null;
    /**
     * @var array<string>|null
     */
    #[Description('An array of film resource URLs that this person has been in.')]
    protected ?array $films = null;
    /**
     * @var array<string>|null
     */
    #[Description('An array of species resource URLs that this person belongs to.')]
    protected ?array $species = null;
    /**
     * @var array<string>|null
     */
    #[Description('An array of starship resource URLs that this person has piloted.')]
    protected ?array $starships = null;
    /**
     * @var array<string>|null
     */
    #[Description('An array of vehicle resource URLs that this person has piloted.')]
    protected ?array $vehicles = null;
    #[Description('The hypermedia URL of this resource.')]
    protected ?string $url = null;
    #[Description('The ISO 8601 date format of the time that this resource was created.')]
    protected ?\PSX\DateTime\LocalDateTime $created = null;
    #[Description('The ISO 8601 date format of the time that this resource was edited. Search Fields:')]
    protected ?\PSX\DateTime\LocalDateTime $edited = null;
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setBirthYear(?string $birthYear): void
    {
        $this->birthYear = $birthYear;
    }
    public function getBirthYear(): ?string
    {
        return $this->birthYear;
    }
    public function setEyeColor(?string $eyeColor): void
    {
        $this->eyeColor = $eyeColor;
    }
    public function getEyeColor(): ?string
    {
        return $this->eyeColor;
    }
    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }
    public function getGender(): ?string
    {
        return $this->gender;
    }
    public function setHairColor(?string $hairColor): void
    {
        $this->hairColor = $hairColor;
    }
    public function getHairColor(): ?string
    {
        return $this->hairColor;
    }
    public function setHeight(?string $height): void
    {
        $this->height = $height;
    }
    public function getHeight(): ?string
    {
        return $this->height;
    }
    public function setMass(?string $mass): void
    {
        $this->mass = $mass;
    }
    public function getMass(): ?string
    {
        return $this->mass;
    }
    public function setSkinColor(?string $skinColor): void
    {
        $this->skinColor = $skinColor;
    }
    public function getSkinColor(): ?string
    {
        return $this->skinColor;
    }
    public function setHomeworld(?string $homeworld): void
    {
        $this->homeworld = $homeworld;
    }
    public function getHomeworld(): ?string
    {
        return $this->homeworld;
    }
    /**
     * @param array<string>|null $films
     */
    public function setFilms(?array $films): void
    {
        $this->films = $films;
    }
    /**
     * @return array<string>|null
     */
    public function getFilms(): ?array
    {
        return $this->films;
    }
    /**
     * @param array<string>|null $species
     */
    public function setSpecies(?array $species): void
    {
        $this->species = $species;
    }
    /**
     * @return array<string>|null
     */
    public function getSpecies(): ?array
    {
        return $this->species;
    }
    /**
     * @param array<string>|null $starships
     */
    public function setStarships(?array $starships): void
    {
        $this->starships = $starships;
    }
    /**
     * @return array<string>|null
     */
    public function getStarships(): ?array
    {
        return $this->starships;
    }
    /**
     * @param array<string>|null $vehicles
     */
    public function setVehicles(?array $vehicles): void
    {
        $this->vehicles = $vehicles;
    }
    /**
     * @return array<string>|null
     */
    public function getVehicles(): ?array
    {
        return $this->vehicles;
    }
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
    public function getUrl(): ?string
    {
        return $this->url;
    }
    public function setCreated(?\PSX\DateTime\LocalDateTime $created): void
    {
        $this->created = $created;
    }
    public function getCreated(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->created;
    }
    public function setEdited(?\PSX\DateTime\LocalDateTime $edited): void
    {
        $this->edited = $edited;
    }
    public function getEdited(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->edited;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('name', $this->name);
        $record->put('birth_year', $this->birthYear);
        $record->put('eye_color', $this->eyeColor);
        $record->put('gender', $this->gender);
        $record->put('hair_color', $this->hairColor);
        $record->put('height', $this->height);
        $record->put('mass', $this->mass);
        $record->put('skin_color', $this->skinColor);
        $record->put('homeworld', $this->homeworld);
        $record->put('films', $this->films);
        $record->put('species', $this->species);
        $record->put('starships', $this->starships);
        $record->put('vehicles', $this->vehicles);
        $record->put('url', $this->url);
        $record->put('created', $this->created);
        $record->put('edited', $this->edited);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
