<?php

namespace Quarterloop\DNSTile\Commands;

use Illuminate\Console\Command;
use Quarterloop\DNSTile\Services\DNSAPI;
use Quarterloop\DNSTile\DNSStore;

class FetchDNSCommand extends Command
{
    protected $signature = 'dashboard:fetch-dns-data';

    protected $description = 'Fetch DNS data';

    public function handle(DNSAPI $dns_api)
    {

        $this->info('Fetching DNS data ...');

        $dns = $dns_api::getDNS(
            config('dashboard.tiles.hosting.url'),
        );

        DNSStore::make()->setData($dns);

        $this->info('Stored data ...');

        $this->info('All done!');
    }
}
