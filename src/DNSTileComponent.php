<?php

namespace Quarterloop\DNSTile;

use Livewire\Component;

class DNSTileComponent extends Component
{

    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }


    public function render()
    {

        $dnsStore = DNSStore::make();

        return view('dashboard-dns-tile::tile', [
            'website'         => config('dashboard.tiles.hosting.url'),
            'aRecords'        => $dnsStore->getData()['a'],
            'mxRecords'       => $dnsStore->getData()['mx'],
            'nsRecords'       => $dnsStore->getData()['ns'],
            'lastUpdateTime'  => date('H:i:s', strtotime($dnsStore->getLastUpdateTime())),
            'lastUpdateDate'  => date('d.m.Y', strtotime($dnsStore->getLastUpdateDate())),
        ]);
    }
}
