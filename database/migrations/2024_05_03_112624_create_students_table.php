<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');

$table->integer('pin')->nullable();
$table->string('addmission_no')->nullable();
$table->string('class')->nullable();
$table->string('session')->nullable();

             $table->string('first_name')->nullable();
             $table->string('middle_name')->nullable();
              $table->string('last_name')->nullable();

          $table->string('gender')->nullable();
          $table->string('birth_date')->nullable();

               $table->string('mobile_no')->nullable();
                $table->string('email')->nullable();

              $table->string('religion')->nullable();
               $table->string('photo')->nullable();

               $table->string('education_level')->nullable();
                 $table->integer('graduate',64)->nullable();

                 $table->string('parental_status')->nullable();
                  $table->string('tribe')->nullable();

                $table->string('marital_status')->nullable();
                 $table->string('place_origin')->nullable();
                  $table->string('current_residence')->nullable();
                   $table->integer('no_children')->nullable();

                   $table->string('designation',64)->nullable();
                     $table->string('location',64)->nullable();
                   $table->string('gurdian_name',64)->nullable();
                    $table->string('relationship',64)->nullable();


                   $table->string('guardian_mobile')->nullable();
                    $table->integer('user_id')->unsigned();
                   $table->string('status')->nullable();

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
        Schema::dropIfExists('students');
    }
}
