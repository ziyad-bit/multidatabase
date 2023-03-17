<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('text');

            $table->uuid('user_id_db_1')->nullable();
            $table->foreign('user_id_db_1')->references('uuid')->on('eco1.users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('user_id_db_2')->nullable();
            $table->foreign('user_id_db_2')->references('uuid')->on('eco2.users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('user_id_db_3')->nullable();
            $table->foreign('user_id_db_3')->references('uuid')->on('eco3.users')->cascadeOnDelete()->cascadeOnUpdate();

            $table->uuid('item_id_db_1')->nullable();
            $table->foreign('item_id_db_1')->references('uuid')->on('eco1.items')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('item_id_db_2')->nullable();
            $table->foreign('item_id_db_2')->references('uuid')->on('eco2.items')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('item_id_db_3')->nullable();
            $table->foreign('item_id_db_3')->references('uuid')->on('eco3.items')->cascadeOnDelete()->cascadeOnUpdate();

            $table->tinyInteger('db',false,true);
            $table->timestamps();
        });

        Schema::connection('mysql2')->create('comments', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('text');

            $table->uuid('user_id_db_1')->nullable();
            $table->foreign('user_id_db_1')->references('uuid')->on('eco1.users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('user_id_db_2')->nullable();
            $table->foreign('user_id_db_2')->references('uuid')->on('eco2.users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('user_id_db_3')->nullable();
            $table->foreign('user_id_db_3')->references('uuid')->on('eco3.users')->cascadeOnDelete()->cascadeOnUpdate();

            $table->uuid('item_id_db_1')->nullable();
            $table->foreign('item_id_db_1')->references('uuid')->on('eco1.items')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('item_id_db_2')->nullable();
            $table->foreign('item_id_db_2')->references('uuid')->on('eco2.items')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('item_id_db_3')->nullable();
            $table->foreign('item_id_db_3')->references('uuid')->on('eco3.items')->cascadeOnDelete()->cascadeOnUpdate();

            $table->tinyInteger('db',false,true);
            $table->timestamps();
        });

        Schema::connection('mysql3')->create('comments', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->string('text');

            $table->uuid('user_id_db_1')->nullable();
            $table->foreign('user_id_db_1')->references('uuid')->on('eco1.users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('user_id_db_2')->nullable();
            $table->foreign('user_id_db_2')->references('uuid')->on('eco2.users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('user_id_db_3')->nullable();
            $table->foreign('user_id_db_3')->references('uuid')->on('eco3.users')->cascadeOnDelete()->cascadeOnUpdate();

            $table->uuid('item_id_db_1')->nullable();
            $table->foreign('item_id_db_1')->references('uuid')->on('eco1.items')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('item_id_db_2')->nullable();
            $table->foreign('item_id_db_2')->references('uuid')->on('eco2.items')->cascadeOnDelete()->cascadeOnUpdate();
            $table->uuid('item_id_db_3')->nullable();
            $table->foreign('item_id_db_3')->references('uuid')->on('eco3.items')->cascadeOnDelete()->cascadeOnUpdate();

            $table->tinyInteger('db',false,true);
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
        Schema::dropIfExists('comments');
    }
}
