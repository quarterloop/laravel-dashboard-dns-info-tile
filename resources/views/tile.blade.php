<x-dashboard-tile :position="$position" refresh-interval="60">
    <div style="height: 100%;">
        <a class="font-small text-dimmed text-xs lowercase tracking-wide tabular-nums absolute top-0 left-0 m-1"
          href="{{ route('fetch-dns') }}">
          <svg viewBox="0 0 18 18" width="18" height="18">
            <path style="fill: rgba(255, 255, 255, 0.5);" d="M 16.8 0 C 16.139 0 15.6 0.537 15.6 1.2 L 15.6 3.979 C 14.105 1.894 11.678 0.6 9 0.6 C 5.457 0.6 2.347 2.863 1.26 6.232 C 1.056 6.864 1.403 7.54 2.033 7.743 C 2.665 7.95 3.341 7.6 3.545 6.972 C 4.309 4.594 6.502 3 9 3 C 10.894 3 12.611 3.921 13.665 5.4 L 12 5.4 C 11.339 5.4 10.8 5.937 10.8 6.6 C 10.8 7.264 11.339 7.8 12 7.8 L 16.8 7.8 C 17.463 7.8 18 7.264 18 6.6 L 18 1.2 C 18 0.537 17.464 0 16.8 0 Z M 15.967 10.26 C 15.333 10.056 14.659 10.404 14.457 11.032 C 13.692 13.407 11.498 15 9 15 C 7.107 15 5.39 14.081 4.335 12.6 L 6 12.6 C 6.663 12.6 7.2 12.064 7.2 11.4 C 7.2 10.737 6.663 10.2 6 10.2 L 1.2 10.2 C 0.539 10.2 0 10.737 0 11.4 L 0 16.8 C 0 17.465 0.539 18 1.2 18 C 1.862 18 2.4 17.465 2.4 16.8 L 2.4 14.022 C 3.896 16.107 6.322 17.4 8.967 17.4 C 12.509 17.4 15.62 15.138 16.707 11.767 C 16.946 11.138 16.597 10.43 15.967 10.26 Z"></path>
          </svg>
        </a>

        <h1 class="font-medium text-dimmed text-sm uppercase tracking-wide tabular-nums text-center">DNS</h1>
        <p class="font-small text-dimmed text-xs lowercase tracking-wide tabular-nums text-center pb-2">{{ $website }}</p>


          <ul class="mt-auto mb-auto">
            <span class="pl-1 font-small text-xs">A-Record</span>
            @foreach($aRecords as $aRecord)
            <li class="pr-1">
              <div class="flex justify-center">
                <span class="pl-1 font-small text-xs ml-auto">{{ $aRecord }}</span>
              </div>
            </li>
            @endforeach
            <span class="pl-1 font-small text-xs">MX-Record</span>
            @foreach($mxRecords as $mxRecord)
            <li class="pr-1">
              <div class="flex justify-center">
                <span class="pl-1 font-small text-xs ml-auto">{{ $mxRecord }}</span>
              </div>
            </li>
            @endforeach
            <span class="pl-1 font-small text-xs">NS-Record</span>
            @foreach($nsRecords as $nsRecord)
            <li class="pr-1">
              <div class="flex justify-center">
                <span class="pl-1 font-small text-xs ml-auto">{{ $nsRecord }}</span>
              </div>
            </li>
            @endforeach
          </ul>

          <p class="text-dimmed lowercase tracking-wide tabular-nums text-center absolute bottom-0 left-0 mr-auto ml-auto mb-5 w-full"
             style="font-size: 12px;">
             {{ $lastUpdateDate }} - {{ $lastUpdateTime }}
          </p>

    </div>
</x-dashboard-tile>
