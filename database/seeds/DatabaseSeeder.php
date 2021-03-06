<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // Add calls to Seeders here
        $this->call('UsersTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('PermissionTableSeeder');
        $this->call('WeekDaysTableSeeder');
        // $this->call('ProductTypesTableSeeder');

        Model::reguard();
    }
}
