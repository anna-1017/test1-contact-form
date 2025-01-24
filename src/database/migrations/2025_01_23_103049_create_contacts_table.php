<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignID('category_id')->default(5)->constrained()->cascadeOnDelete();
            $table->string('first_name', 255)->nullable(false)->default('');
            $table->string('last_name', 255)->nullable(false)->default('');
            $table->tinyInteger('gender')->comment('1:男性, 2:女性, 3:その他')->default(1);
            $table->string('email', 255)->default('');
            $table->string('tel', 255)->default('');
            $table->string('address', 255)->default('');
            $table->string('building', 255)->nullable();
            $table->text('detail', 255)->nullable(false);//Nullを許容しない設定はできるが、デフォルト値設定はできない
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
        Schema::dropIfExists('contacts');
    }
}
