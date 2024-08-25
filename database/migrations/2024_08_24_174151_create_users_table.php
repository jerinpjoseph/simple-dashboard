<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('fk_department')->constrained('departments');
            $table->foreignId('fk_designation')->constrained('designations');
            $table->string('phone_number');
            $table->timestamps();
        });

        DB::table('users')->insert([
            [
                'name' => 'Jerin P J',
                'fk_department' => 2,
                'fk_designation' => 2,
                'phone_number' => '9768563254',
            ],
            [
                'name' => 'Jobin P S',
                'fk_department' => 1,
                'fk_designation' => 1,
                'phone_number' => '9696968585',
            ],
            [
                'name' => 'Sijo P J',
                'fk_department' => 3,
                'fk_designation' => 4,
                'phone_number' => '9685749583',
            ],
            [
                'name' => 'Clisty Johnson',
                'fk_department' => 1,
                'fk_designation' => 1,
                'phone_number' => '9856235147',
            ],
            [
                'name' => 'Angel Jain',
                'fk_department' => 2,
                'fk_designation' => 2,
                'phone_number' => '1234567895',
            ],
            [
                'name' => 'Christy Johnson',
                'fk_department' => 2,
                'fk_designation' => 2,
                'phone_number' => '1234567896',
            ],
            [
                'name' => 'Alwin Davis',
                'fk_department' => 3,
                'fk_designation' => 3,
                'phone_number' => '1234567897',
            ],
            [
                'name' => 'Nikhil Nediyodath',
                'fk_department' => 2,
                'fk_designation' => 2,
                'phone_number' => '9857421325',
            ],
            [
                'name' => 'Fazil A H',
                'fk_department' => 3,
                'fk_designation' => 4,
                'phone_number' => '1234567899',
            ],
            [
                'name' => 'Malavika V D',
                'fk_department' => 3,
                'fk_designation' => 4,
                'phone_number' => '1234567800',
            ],
            [
                'name' => 'Muhsin P S',
                'fk_department' => 2,
                'fk_designation' => 2,
                'phone_number' => '1234567801',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
