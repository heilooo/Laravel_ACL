<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Permission $permission): void
    {
      $input=[
          ['name'=>'user.index','description'=>'دیدن اعضا'],
          ['name'=>'user.show','description'=>'دیدن اعضا'],
          ['name'=>'user.create','description'=>'دیدن اعضا'],
          ['name'=>'user.store','description'=>'دیدن اعضا'],
          ['name'=>'user.edit','description'=>'دیدن اعضا'],
          ['name'=>'user.update','description'=>'دیدن اعضا'],
          ['name'=>'user.destroy','description'=>'دیدن اعضا'],
      ];
      $permission->insert($input);
    }
}
