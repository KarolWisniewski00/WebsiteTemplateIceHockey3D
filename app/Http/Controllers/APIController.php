<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function API()
    {
        $date = date("Y-m-d");
        $counter=0;
        $max=30;

        $response = Http::withHeaders([
            'accept' => 'application/json'
        ])->get('https://statsapi.web.nhl.com/api/v1/teams?expand=team.stats');

        $response_table = Http::withHeaders([
            'accept' => 'application/json'
        ])->get('https://statsapi.web.nhl.com/api/v1/standings');

        $response_maches = Http::withHeaders([
            'accept' => 'application/json'
        ])->get('https://statsapi.web.nhl.com/api/v1/schedule?date='.$date);
        
        do{
            try {
                $response_maches['dates'][0]['games'];
            } catch (\Exception $e) {
                $date = date('Y-m-d', strtotime($date. ' + 1 days'));
                $response_maches = Http::withHeaders([
                    'accept' => 'application/json'
                ])->get('https://statsapi.web.nhl.com/api/v1/schedule?date='.$date);
                $counter++;
                continue;
            }
            break;
        }while($counter < $max);

        return view('index', [
            'teams' => $response['teams'],
            'records' => $response_table['records'],
            'maches' => @$response_maches['dates'][0]['games']
        ]);
    }
}
