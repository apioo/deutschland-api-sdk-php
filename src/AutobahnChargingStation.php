<?php
/**
 * AutobahnChargingStation automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;


class AutobahnChargingStation implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $id = null;
    protected ?string $title = null;
    /**
     * @var array<string>|null
     */
    protected ?array $description = null;
    protected ?AutobahnCoordinate $coordinate = null;
    public function setId(?string $id) : void
    {
        $this->id = $id;
    }
    public function getId() : ?string
    {
        return $this->id;
    }
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    public function getTitle() : ?string
    {
        return $this->title;
    }
    /**
     * @param array<string>|null $description
     */
    public function setDescription(?array $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return array<string>|null
     */
    public function getDescription() : ?array
    {
        return $this->description;
    }
    public function setCoordinate(?AutobahnCoordinate $coordinate) : void
    {
        $this->coordinate = $coordinate;
    }
    public function getCoordinate() : ?AutobahnCoordinate
    {
        return $this->coordinate;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('title', $this->title);
        $record->put('description', $this->description);
        $record->put('coordinate', $this->coordinate);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
