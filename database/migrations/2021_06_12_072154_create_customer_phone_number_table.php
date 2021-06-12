<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerPhoneNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_phone_number', function (Blueprint $table) {
            $table->id();
            $table->uuid('customer_uuid');
            $table->uuid('phone_number_uuid');

            $table->foreign('customer_uuid')
                ->references('uuid')
                ->on('customers')
                ->onDelete('cascade');

            $table->foreign('phone_number_uuid')
                ->references('uuid')
                ->on('phone_numbers')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_phone_number');
    }
}
