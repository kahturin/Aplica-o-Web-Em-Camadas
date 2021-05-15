<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SeederUsuarioAdmin extends Seeder
{

    public function run()
    {
    	$user = User::create([	'name' => 'Luiz Bono',
    							'email' => 'karina@karina.com',
    							'password' => bcrypt('123456789')]);

    	$role = Role::create(['name' => 'Admin']);

    	$permissions = Permission::pluck('id','id')->all();

		$role->syncPermissions($permissions);

		$user->assignRole([$role->id]);
    }
}
