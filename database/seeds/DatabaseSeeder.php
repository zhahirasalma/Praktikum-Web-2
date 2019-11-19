<?php

use Illuminate\Database\Seeder;
use App\FirstModel;
use App\ProdukModel;
use App\PelangganModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(FirstModel::class)->create();
        factory(ProdukModel::class)->create();
        factory(PelangganModel::class)->create();
    }
}
