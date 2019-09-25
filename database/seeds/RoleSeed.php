<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    public function run()
    {
        DB::table((new Role)->getTable())->truncate();

        Role::insert([
            [
                'id'    => 1,
                'title' => 'Administrador (pode criar outros usuários)',
            ],
            [
                'id'    => 2,
                'title' => 'Usuário Simples',
            ],
        ]);
    }
}
