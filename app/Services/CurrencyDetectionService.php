<?php

namespace App\Services;

use GeoIp2\Database\Reader;
use Illuminate\Http\Request;

class CurrencyDetectionService
{
    public function detectCurrency(Request $request)
    {
        $ip = $request->ip();
        $reader = new Reader(storage_path('app/GeoLite2-Country.mmdb'));

        try {
            $record = $reader->country($ip);
            $countryCode = $record->country->isoCode;

            $currency = $this->getCurrencyFromCountryCode($countryCode);
        } catch (\Exception $e) {
            $currency = 'USD'; // default fallback
        }

        session(['currency' => $currency]);
        return $currency;
    }

    private function getCurrencyFromCountryCode($code)
    {
        $map = [
            'US' => 'USD',
            'PK' => 'PKR',
            'IN' => 'INR',
            'GB' => 'GBP',
            'EU' => 'EUR',
            'AE' => 'AED',
        ];

        return $map[$code] ?? 'USD';
    }
}

