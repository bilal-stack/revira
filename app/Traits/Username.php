<?php

namespace App\Traits;

use App\Models\User;
use App\Models\Vendor;
use Illuminate\Support\Str;

trait Username
{
    protected function generateUniqueUserUsername($name): string
    {
        // Convert name to lowercase and remove spaces
        $base = Str::slug($name, '_');

        // Try to create a unique username
        $username = $base;
        $counter = 1;

        while (User::where('username', $username)->exists()) {
            $username = $base . '_' . $counter;
            $counter++;
        }

        return $username;
    }

    protected function generateUniqueVendorUsername($name): string
    {
        // Convert name to lowercase and remove spaces
        $base = Str::slug($name, '_');

        // Try to create a unique username
        $username = $base;
        $counter = 1;

        while (Vendor::where('username', $username)->exists()) {
            $username = $base . '_' . $counter;
            $counter++;
        }

        return $username;
    }
}

