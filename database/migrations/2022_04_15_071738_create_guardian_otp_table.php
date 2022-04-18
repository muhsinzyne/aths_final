<?php

use App\Constants\AppConst;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuardianOtpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(AppConst::DB_PREFIX . 'guardian_otp', function (Blueprint $table) {
            $table->id();
            $table->string('value', 255)->nullable(false);
            $table->integer('guardian_id')->nullable(false);
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
        Schema::dropIfExists(AppConst::DB_PREFIX . 'guardian_otp');
    }
}
