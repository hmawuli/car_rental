<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarOwner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_owner', function (Blueprint $table) {
            $table->id();
            $table->string("owner_name");
            $table->string("address");
            $table->string("contact");
            $table->binary("profile_image");
            $table->string("email_account");
            $table->string("username");
            $table->string("password");
            $table->integer("admin_id");
            $table->integer("account_status");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_owner');
    }
}
