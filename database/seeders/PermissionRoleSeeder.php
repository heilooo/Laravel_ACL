<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\PermissionRole;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(PermissionRole $permissionRole): void
    {
        $role_id=Role::query()->where('name','superAdmin')->value('id');
        $permissions=Permission::all();
        $input=[];
        foreach ($permissions as $permission) {
            $input[]=['role_id'=>$role_id,'permission_id'=>$permission['id']];
        }
        $permissionRole->insert($input);
    }
}
