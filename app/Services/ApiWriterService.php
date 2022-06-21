<?php

namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;


class ApiWriterService
{
    // fetch writers on subject base
    public function fetchWriters($subject)
    {
        $url = env('API_URL') . 'writers/fetch?subject=' . $subject;
        $response = Http::get($url);
        $response = $response->json();
        // dd($response);

        if ($response['error']) {
            return false;
        }

        return $response['writers'];
    }

    // fetch writers which are not in our database
    public function apiWriters()
    {
        $url = env('API_URL') . 'writers';
        $response = Http::withOptions(['verify' => false])->post($url);
        $response = $response->json();
        if (!$response['error']) {
            foreach ($response['writers'] as $writer) {
                User::updateOrCreate(
                    [
                        'api_user_id' => $writer['id']
                    ],
                    $writer + ['api_user_id' => $writer['id'], 'type' => 'api']
                );
            }
            return true;
        }

        return false;
    }
}
