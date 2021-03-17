<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');
            $table->text('app_name')->nullable();
            $table->text('app_description' )->nullable();
            $table->text('tagline')->nullable();
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('zip')->nullable();
            $table->text('country')->nullable();
            $table->text('logo')->nullable();
            $table->text('facebook')->nullable();
            $table->text('twitter')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('youtube')->nullable();
            $table->text('instagram')->nullable();
            $table->text('pinterest')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });

        DB::table('setting')->insertGetId([
            'app_name' => ' Ambulance Service',
            'app_description' => ' Ambulance Service',
            'tagline' => ' Ambulance Service',
            'meta_title' => ' Ambulance Service',
            'meta_description' => ' Ambulance Service',
            'email' => 'user@gmail.com',
            'phone' => '01712013284',
            'address' => 'Office Address : 267/1/A, Lift-6, 60Ft, ksa',
            'zip' => '1216',
            'country' => 'ksa',
            'status' => 'active',


        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('setting', function (Blueprint $table) {
            //
        });
    }
}
