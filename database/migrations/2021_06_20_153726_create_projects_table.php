<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id(); 
            $table->string("ar_title");
            $table->string("en_title");
            $table->string("order_date");
            $table->string("final_date");
            $table->string("ar_location");
            $table->string("en_location");
            $table->string("en_client");
            $table->string("ar_client");
            $table->string("ar_description",600);
            $table->string("en_description",600);
            $table->string("folder_name")->nullable();
            $table->string("photo_link");
            $table->unsignedBigInteger("category_id");
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
        Schema::dropIfExists('projects');
    }
}
