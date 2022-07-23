<?php


namespace App\Service;


use App\Models\NearEarthObject;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class NasaService
{
    public function handle(Carbon $from, Carbon $to): void
    {
        $data = $this->getDataFromNasa($from->format('Y-m-d'), $to->format('Y-m-d'));
        $this->saveData($data['near_earth_objects']);
    }

    private function saveData($data): void
    {
        foreach ($data as $dataInDate) {
            foreach ($dataInDate as $object) {
                NearEarthObject::firstOrCreate([
                    'referenced' => $object['neo_reference_id']
                ],
                    [
                        'referenced' => $object['neo_reference_id'],
                        'name' => $object['name'],
                        'speed' => $object['close_approach_data'][0]['relative_velocity']['kilometers_per_hour'],
                        'is_hazardous' => $object['is_potentially_hazardous_asteroid'],
                        'date' => $object['close_approach_data'][0]['close_approach_date']
                    ]
                );
            }
        }
    }

    private function getDataFromNasa(string $from, string $to)
    {
        return Http::get('https://api.nasa.gov/neo/rest/v1/feed?start_date=' . $from . '&end_date=' . $to . '&api_key=' .
            env('API_KEY'))->json();
    }

}
