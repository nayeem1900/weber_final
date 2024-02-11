<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usertype')->nullable()->comment('operaor,employee,admin');
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('code')->nullable();
            $table->string('role')->nullable()->comment('admin=head of software,operator=computer operator,user=employee');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('f_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('religion')->nullable();
            $table->string('id_no')->nullable();
            $table->date('dob')->nullable();
            $table->string('ssc_institute_name')->nullable();
            $table->string('hsc_institute_name')->nullable();
            $table->string('ssc_year_passing')->nullable();
            $table->string('ssc_result')->nullable();
            $table->string('ssc_board_name')->nullable();
            $table->string('hsc_year_passing')->nullable();
            $table->string('hsc_result')->nullable();
            $table->string('hsc_board_name')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
