p<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
  public function run()
  {
    $role_customer = new Role();
    $role_customer -> name = 'customer';
    $role_customer -> description =' Role for the customer';
    $role_customer-> save();

    $role_admin = new Role();
    $role_admin->name = 'admin';
    $role_admin->description = 'Role for the admin';
    $role_admin->save();

    $role_seller = new Role();
    $role_seller->name = 'seller';
    $role_seller->description = 'Role for the seller';
    $role_seller->save();

  }
}
