<?php
/**
 * Film automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Starwars;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('A Film is a single film.')]
class Film implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?string $title = null;
    #[Key('episode_id')]
    #[Description('')]
    protected ?int $episodeId = null;
    #[Key('opening_crawl')]
    #[Description('')]
    protected ?string $openingCrawl = null;
    #[Description('')]
    protected ?string $director = null;
    #[Description('')]
    protected ?string $producer = null;
    #[Key('release_date')]
    #[Description('')]
    protected ?\PSX\DateTime\LocalDate $releaseDate = null;
    /**
     * @var array<string>|null
     */
    #[Description('')]
    protected ?array $species = null;
    /**
     * @var array<string>|null
     */
    #[Description('')]
    protected ?array $starships = null;
    /**
     * @var array<string>|null
     */
    #[Description('')]
    protected ?array $vehicles = null;
    /**
     * @var array<string>|null
     */
    #[Description('')]
    protected ?array $characters = null;
    /**
     * @var array<string>|null
     */
    #[Description('')]
    protected ?array $planets = null;
    #[Description('')]
    protected ?string $url = null;
    #[Description('')]
    protected ?\PSX\DateTime\LocalDateTime $created = null;
    #[Description('')]
    protected ?\PSX\DateTime\LocalDateTime $edited = null;
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    public function setEpisodeId(?int $episodeId) : void
    {
        $this->episodeId = $episodeId;
    }
    public function getEpisodeId() : ?int
    {
        return $this->episodeId;
    }
    public function setOpeningCrawl(?string $openingCrawl) : void
    {
        $this->openingCrawl = $openingCrawl;
    }
    public function getOpeningCrawl() : ?string
    {
        return $this->openingCrawl;
    }
    public function setDirector(?string $director) : void
    {
        $this->director = $director;
    }
    public function getDirector() : ?string
    {
        return $this->director;
    }
    public function setProducer(?string $producer) : void
    {
        $this->producer = $producer;
    }
    public function getProducer() : ?string
    {
        return $this->producer;
    }
    public function setReleaseDate(?\PSX\DateTime\LocalDate $releaseDate) : void
    {
        $this->releaseDate = $releaseDate;
    }
    public function getReleaseDate() : ?\PSX\DateTime\LocalDate
    {
        return $this->releaseDate;
    }
    /**
     * @param array<string>|null $species
     */
    public function setSpecies(?array $species) : void
    {
        $this->species = $species;
    }
    /**
     * @return array<string>|null
     */
    public function getSpecies() : ?array
    {
        return $this->species;
    }
    /**
     * @param array<string>|null $starships
     */
    public function setStarships(?array $starships) : void
    {
        $this->starships = $starships;
    }
    /**
     * @return array<string>|null
     */
    public function getStarships() : ?array
    {
        return $this->starships;
    }
    /**
     * @param array<string>|null $vehicles
     */
    public function setVehicles(?array $vehicles) : void
    {
        $this->vehicles = $vehicles;
    }
    /**
     * @return array<string>|null
     */
    public function getVehicles() : ?array
    {
        return $this->vehicles;
    }
    /**
     * @param array<string>|null $characters
     */
    public function setCharacters(?array $characters) : void
    {
        $this->characters = $characters;
    }
    /**
     * @return array<string>|null
     */
    public function getCharacters() : ?array
    {
        return $this->characters;
    }
    /**
     * @param array<string>|null $planets
     */
    public function setPlanets(?array $planets) : void
    {
        $this->planets = $planets;
    }
    /**
     * @return array<string>|null
     */
    public function getPlanets() : ?array
    {
        return $this->planets;
    }
    public function setUrl(?string $url) : void
    {
        $this->url = $url;
    }
    public function getUrl() : ?string
    {
        return $this->url;
    }
    public function setCreated(?\PSX\DateTime\LocalDateTime $created) : void
    {
        $this->created = $created;
    }
    public function getCreated() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->created;
    }
    public function setEdited(?\PSX\DateTime\LocalDateTime $edited) : void
    {
        $this->edited = $edited;
    }
    public function getEdited() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->edited;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('title', $this->title);
        $record->put('episode_id', $this->episodeId);
        $record->put('opening_crawl', $this->openingCrawl);
        $record->put('director', $this->director);
        $record->put('producer', $this->producer);
        $record->put('release_date', $this->releaseDate);
        $record->put('species', $this->species);
        $record->put('starships', $this->starships);
        $record->put('vehicles', $this->vehicles);
        $record->put('characters', $this->characters);
        $record->put('planets', $this->planets);
        $record->put('url', $this->url);
        $record->put('created', $this->created);
        $record->put('edited', $this->edited);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
