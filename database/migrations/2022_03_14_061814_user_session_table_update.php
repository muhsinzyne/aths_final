<?php

use App\Constants\AppConst;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserSessionTableUpdate extends Migration
{
    public function up()
    {
        Schema::table(AppConst::DB_PREFIX . 'user_sessions', function (Blueprint $table) {
            $table->enum('client_type', ['ios', 'android', 'web']);
            $table->string('unique_id', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(AppConst::DB_PREFIX . 'user_sessions', function (Blueprint $table) {
            $table->dropColumn('client_type');
            $table->dropColumn('unique_id');
        });
    }
}
