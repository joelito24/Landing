<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $configMigrations = Config::get('configMigrations.users');

        $this->createRoles($configMigrations);

        $this->insertRoles($configMigrations);

        $this->createStatus();

        $this->insertStatus();

        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('password', 60);

            $table->string('address', 175);
            $table->string('postalcode', 5);
            $table->string('city', 175);
            $table->string('telephone', 15);
            $table->string('province', 175);
            $table->integer('country_id');
            $table->integer('rol')->unsigned();
            $table->integer('status')->unsigned();

            $table->rememberToken();
            $table->timestamps();

            $table->foreign('rol')->references('id')->on('users_roles');
            $table->foreign('status')->references('id')->on('users_status');
        });

        $this->insertUser();

        Schema::create('password_resets', function(Blueprint $table)
        {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
    }

    private function insertUser()
    {
        $users = [
            [
                'name' => 'Thatzad',
                'lastname' => 'Thatzad',
                'email' => 'informacion@thatzad.com',
                'password' => bcrypt('MM6665MM'),
                'rol' => 1,
                'status' => 1,
                'created_at' => date("Y-m-d H:s:i"),
                'address' => 'Marques de Mulhacen 11',
                'postalcode' => '08034',
                'city' => 'Barcelona',
                'telephone' => '936350620',
                'country_id' => 209,
                'province' => 'Barcelona'
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
    }

    private function createRoles()
    {
        Schema::create('users_roles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    private function insertRoles( $configMigrations )
    {
        if (!empty($configMigrations['admin'])) {
            $roles [] = [
                'name' => 'admin',
                'created_at' => date("Y-m-d H:s:i")
            ];
        }

        if (!empty($configMigrations['front'])) {
            $roles [] = [
                'name' => 'user',
                'created_at' => date("Y-m-d H:s:i")
            ];
        }

        foreach ($roles as $rol) {
            DB::table('users_roles')->insert($rol);
        }
    }

    private function createStatus()
    {
        Schema::create('users_status', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    private function insertStatus()
    {
        $roles = [
            ['name' => 'Activo', 'created_at' => date("Y-m-d H:s:i")],
            ['name' => 'Inactivo', 'created_at' => date("Y-m-d H:s:i")],
            ['name' => 'Esperando confirmación', 'created_at' => date("Y-m-d H:s:i")],
            ['name' => 'Eliminado', 'created_at' => date("Y-m-d H:s:i")],
            ['name' => 'Banneado', 'created_at' => date("Y-m-d H:s:i")],
        ];

        foreach ($roles as $rol) {
            DB::table('users_status')->insert($rol);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('users_roles');
        Schema::drop('users_status');
        Schema::drop('password_resets');
    }

}
