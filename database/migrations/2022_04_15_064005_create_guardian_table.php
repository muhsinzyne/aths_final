<?php

use App\Constants\AppConst;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(AppConst::DB_PREFIX . 'guardians', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 255)->nullable(false);
            $table->string('name_ar', 255)->nullable(false);
            $table->string('national_id', 50)->nullable(false);
            $table->string('mobile', 50)->nullable();
            $table->string('email_id', 255)->nullable(false);
            $table->enum('geneder', ['M', 'F'])->nullable(false);
            $table->text('avatar')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(AppConst::DB_PREFIX . 'guardians');
    }
}
