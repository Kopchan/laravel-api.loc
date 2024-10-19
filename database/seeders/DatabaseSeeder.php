<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $userId  = Role::create(['code' => 'user' ])->id;
        $adminId = Role::create(['code' => 'admin'])->id;

        User::create([
            'surname' => 'Евсеев',
            'name' => 'Дмитрий',
            'patronymic' => 'Витальевич',
            'sex' => 1,
            'birthday' => '2005-11-04',
            'login' => 'krofpoi',
            'email' => 'krofpoi@gmail.com',
            'password' => 'krofpoi',
            'role_id' => $userId
        ]);

        User::create([
            'surname' => 'Евсеев 2',
            'name' => 'Дмитрий',
            'patronymic' => 'Витальевич',
            'sex' => 1,
            'birthday' => '2005-11-04',
            'login' => 'krofpoi2',
            'email' => 'krofpoi2@gmail.com',
            'password' => 'krofpoi2',
            'role_id' => $adminId
        ]);
    }
}
