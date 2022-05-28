<?php

namespace Quarterloop\DNSTile\Services;

use Illuminate\Support\Facades\Http;

class DNSAPI
{
  public static function getDNS(string $url): array
  {
      $apiCall = "https://host.io/api/dns/{$url}?token=7122051cc1c6d5";

      $response = Http::get($apiCall)->json();

      return $response;
  }
}
