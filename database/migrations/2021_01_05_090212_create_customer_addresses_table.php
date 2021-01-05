<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_addresses', function (Blueprint $table) {
            $table->increments('entity_id');

            $table->integer('parent_id')
            ->unsigned()
            ->comment = 'Parent ID form Customers';

            $table->foreign('parent_id')->references('entity_id')->on('customers')->onDelete('cascade');

            $table->string('name', 255)
            ->nullable()
            ->comment = 'Customer Name';

            $table->string('phone', 100)
            ->nullable()
            ->comment = 'Phone';

            $table->string('email', 50)
            ->nullable()
            ->comment = 'Email';

            $table->string('city', 50)
            ->nullable()
            ->comment = 'City';

            $table->string('postcode', 10)
            ->nullable()
            ->comment = 'Post Code';

            $table->string('district', 50)
            ->nullable()
            ->comment = 'District';

            $table->string('area', 100)
            ->nullable()
            ->comment = 'Area';

            $table->string('street', 255)
            ->nullable()
            ->comment = 'Street Address';

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
        Schema::dropIfExists('customer_addresses');
    }
}
