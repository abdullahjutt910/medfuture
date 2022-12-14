<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'user_management_access',
            ],
            [
                'id' => 2,
                'title' => 'permission_create',
            ],
            [
                'id' => 3,
                'title' => 'permission_edit',
            ],
            [
                'id' => 4,
                'title' => 'permission_show',
            ],
            [
                'id' => 5,
                'title' => 'permission_delete',
            ],
            [
                'id' => 6,
                'title' => 'permission_access',
            ],
            [
                'id' => 7,
                'title' => 'role_create',
            ],
            [
                'id' => 8,
                'title' => 'role_edit',
            ],
            [
                'id' => 9,
                'title' => 'role_show',
            ],
            [
                'id' => 10,
                'title' => 'role_delete',
            ],
            [
                'id' => 11,
                'title' => 'role_access',
            ],
            [
                'id' => 12,
                'title' => 'user_create',
            ],
            [
                'id' => 13,
                'title' => 'user_edit',
            ],
            [
                'id' => 14,
                'title' => 'user_show',
            ],
            [
                'id' => 15,
                'title' => 'user_delete',
            ],
            [
                'id' => 16,
                'title' => 'user_access',
            ],
            [
                'id' => 17,
                'title' => 'candidates_management_access',
            ],
            [
                'id' => 18,
                'title' => 'candidate_create',
            ],
            [
                'id' => 19,
                'title' => 'candidate_edit',
            ],
            [
                'id' => 20,
                'title' => 'candidate_show',
            ],
            [
                'id' => 21,
                'title' => 'candidate_delete',
            ],
            [
                'id' => 22,
                'title' => 'candidate_access',
            ],
            [
                'id' => 23,
                'title' => 'view_candidate_create',
            ],
            [
                'id' => 24,
                'title' => 'view_candidate_edit',
            ],
            [
                'id' => 25,
                'title' => 'view_candidate_show',
            ],
            [
                'id' => 26,
                'title' => 'view_candidate_delete',
            ],
            [
                'id' => 27,
                'title' => 'view_candidate_access',
            ],
            [
                'id' => 28,
                'title' => 'jobs_manangement_access',
            ],
            [
                'id' => 29,
                'title' => 'job_create',
            ],
            [
                'id' => 30,
                'title' => 'job_edit',
            ],
            [
                'id' => 31,
                'title' => 'job_show',
            ],
            [
                'id' => 32,
                'title' => 'job_delete',
            ],
            [
                'id' => 33,
                'title' => 'job_access',
            ],
            [
                'id' => 34,
                'title' => 'question_access',
            ],
            [
                'id' => 35,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
