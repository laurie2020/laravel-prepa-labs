<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_details', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->boolean("description_i");
            $table->text("paragraphe1");
            $table->text("paragraphe2")->nullable();
            $table->text("paragraphe3")->nullable();
            $table->string("image");
            $table->foreignId("feature_id")->constrained("features");
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
        Schema::dropIfExists('feature_details');
    }
}
