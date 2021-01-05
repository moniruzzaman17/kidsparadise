<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('entity_id');

            $table->string('name',255)
            ->nullable(false)
            ->comment = 'Customer Name';

            $table->string('email',255)
            ->nullable()
            ->comment = 'Customer Email';

            $table->string('phone',255)
            ->nullable()
            ->comment = 'Customer Mobile Phone';

            $table->string('password_hash',255)
            ->nullable(false)
            ->comment = 'Password Hash';

            $table->integer('is_active')->unsigned()->default(1)->nullable();
            $table->integer('is_verified')->unsigned()->default(0)->nullable();

            $table->string('dob',20)
            ->nullable()
            ->comment = 'Date of Birth';

            $table->string('gender',20)
            ->nullable()
            ->comment = 'Gender';

            $table->string('rp_token',255)
            ->nullable()
            ->comment = 'Password Reset Token';

            $table->string('rp_token_created_at')
            ->nullable()
            ->comment = 'Password Reset Token Created';

            $table->rememberToken();

            $table->string('default_biling',255)
            ->nullable()
            ->comment = 'Default Billing Address';

            $table->string('default_shipping',255)
            ->nullable()
            ->comment = 'Default Shipping Address';

            $table->string('provider_id',255)
            ->nullable()
            ->comment = 'Login Provider Id';

            $table->string('provider',255)
            ->nullable()
            ->comment = 'Login Provider Name';
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
        Schema::dropIfExists('customers');
    }
}
