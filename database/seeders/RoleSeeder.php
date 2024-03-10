<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Role $role): void
    {
      $input=[
          ['name'=>'superAdmin','description'=>'مدیر'],
          ['name'=>'customer','description'=>'مشتری'],
      ];
      $role->insert($input);
    }
}
