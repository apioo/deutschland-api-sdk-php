<?php
/**
 * SystemAboutLink automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace DeutschlandAPI\SDK;


class SystemAboutLink implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    protected ?string $rel = null;
    protected ?string $href = null;
    public function setRel(?string $rel): void
    {
        $this->rel = $rel;
    }
    public function getRel(): ?string
    {
        return $this->rel;
    }
    public function setHref(?string $href): void
    {
        $this->href = $href;
    }
    public function getHref(): ?string
    {
        return $this->href;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('rel', $this->rel);
        $record->put('href', $this->href);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
