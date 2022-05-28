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
            'website' => config('dashboard.tiles.hosting.url'),
            
        ]);
    }
}
