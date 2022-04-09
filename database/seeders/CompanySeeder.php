<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'initial' => "MG",
            'description' => "Perusahaan IT terbesar di Indonesia",
            'name' => "PT Mutia Group",
            'address' => "SCBD Tower",
            'province' => "DKI Jakarta",
            'city' => "Jakarta Pusat",
            'postal_code' => 14244,
            'web' => "https://www.mutia-group.com/",
            'email' => "marketing@mutia-group.com",
            'phone' => "0215349822",
            'fax' => "02153499822",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            
        ]);
    }
}
