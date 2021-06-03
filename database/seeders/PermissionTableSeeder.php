<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'Conference-list',
           'Conference-create',
           'Conference-edit',
           'Conference-delete',
           'Attendee-list',
           'Attendee-create',
           'Attendee-edit',
           'Attendee-delete',
           'Venue-list',
           'Venue-create',
           'Venue-edit',
           'Venue-delete',

        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}