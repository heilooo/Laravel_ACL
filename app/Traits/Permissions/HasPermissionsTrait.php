<?php

namespace App\Traits\Permissions;

use App\Models\Permission;

trait HasPermissionsTrait
{
    public function hasPermission($permission)
    {
        return (bool)$this->permissions->where('name', $permission)->first();
    }

    public function hasPermissionTo($permission)
    {
        return $this->hasPermission($permission) || $this->hasPermissionThroughRole($permission);
    }

    public function hasPermissionThroughRole($permission)
    {
        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) {
                return true;
            }
        }
        return false;
    }


    public function hasRole(...$roles)
    {
        foreach ($roles as $role) {
            if ($this->roles->contains('name', $role)) {
                return true;
            }
        }
        return false;
    }

}
