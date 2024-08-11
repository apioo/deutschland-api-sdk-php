<?php
/**
 * BundesratMemberCollection automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;


class BundesratMemberCollection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<BundesratMember>|null
     */
    protected ?array $entries = null;
    /**
     * @param array<BundesratMember>|null $entries
     */
    public function setEntries(?array $entries) : void
    {
        $this->entries = $entries;
    }
    /**
     * @return array<BundesratMember>|null
     */
    public function getEntries() : ?array
    {
        return $this->entries;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('entries', $this->entries);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
