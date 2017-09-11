<?php namespace App\Modules\Services\Option;

use App\Modules\Models\Country;
use App\Modules\Services\Service;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class CountryService extends Service
{
    protected $client;
    protected $countries;

    public function __construct(
        Client $client,
        Country $country
    )
    {
        $this->client = $client;
        $this->country = $country;
    }

    /**
     * Get all Session
     *
     * @return Collection
     */
    public function all()
    {
        return $this->country->all();
    }

    public function syncCountries()
    {
        //$res = $this->client->request('GET', 'https://restcountries.eu/rest/v2/all', [
        //'auth' => ['bhojraj.bhatta99@gmail.com', 'signature0*']
        //]);

        $res = $this->client->request('GET', 'https://restcountries.eu/rest/v2/all');

        //echo $res->getStatusCode();
        //echo $res->getHeaderLine('content-type');
        $data = json_decode((string)$res->getBody());

        DB::table('countries')->delete();

        foreach ($data as $dat) {
            $country = [
                'name' => $dat->name,
                'code' => $dat->alpha3Code,
                'flag' => $dat->flag
            ];
            DB::table('countries')->insert($country);
        }
    }

}