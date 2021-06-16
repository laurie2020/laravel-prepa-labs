<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_cards', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->text("description");
            $table->string("image");
            $table->string("categorie");
            $table->foreignId("portfolio_id")->constrained("portfolios");
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
        Schema::dropIfExists('portfolio_cards');
    }
}
