<?php

namespace Quarterloop\DNSTile;

use Spatie\Dashboard\Models\Tile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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

    public function getLastUpdateTime()
    {
        $queryTime = DB::table('dashboard_tiles')->select('updated_at')->where('name', '=', 'dns-info')->get();

        $responseTime = Str::substr($queryTime, 26, 9);

        return $responseTime;
    }

    public function getLastUpdateDate()
    {
        $queryDate = DB::table('dashboard_tiles')->select('updated_at')->where('name', '=', 'dns-info')->get();

        $responseDate = Str::substr($queryDate, 16, 10);

        return $responseDate;
    }
}
