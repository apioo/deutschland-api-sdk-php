<?php
/**
 * AutobahnCollection automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;


class AutobahnCollection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    protected ?array $roads = null;
    /**
     * @param array<string>|null $roads
     */
    public function setRoads(?array $roads): void
    {
        $this->roads = $roads;
    }
    /**
     * @return array<string>|null
     */
    public function getRoads(): ?array
    {
        return $this->roads;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('roads', $this->roads);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
