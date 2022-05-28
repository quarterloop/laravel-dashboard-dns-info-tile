<?php

namespace Quarterloop\DNSTile;

use Spatie\Dashboard\Models\Tile;

class DNSStore
{
    private Tile $tile;

    public static function make()
    {
        return new static();
    }

    public function __construct()
    {
        $this->tile = Tile::firstOrCreateForName("dns-info");
    }

    public function setData(array $data): self
    {
        $this->tile->putData('dns-info', $data);

        return $this;
    }

    public function getData(): array
    {
        return$this->tile->getData('dns-info') ?? [];
    }
}
