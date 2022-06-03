<?php

use Illuminate\Database\Seeder;
use App\Models\City;
use \File as op;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = fopen(public_path('/json/municipios.json'),"r");
            $content = fgets($data);
            $json = json_decode($content);

        fclose($data);

    foreach ($json as $key) {
        # code...
        City::create(
            [
                'name' => $key -> NOMBRE,
                'cp'   => $key -> ID
             ]
            );
    }


    }
}
