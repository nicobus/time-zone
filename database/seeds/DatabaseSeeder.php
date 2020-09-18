<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Producto::class, 45)->create();
        factory(App\Reloj::class, 45)->create();
        /* $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class); */
    }
}
