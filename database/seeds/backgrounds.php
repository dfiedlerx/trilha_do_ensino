<?php

use App\Models\Background;
use Illuminate\Database\Seeder;

class backgrounds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        for ($i = 1; $i <= 15 ; $i++) {
            array_push($data, [
                'name'     => $i . '.jpg',
            ]);
        }

        Background::insert($data);
    }
}
