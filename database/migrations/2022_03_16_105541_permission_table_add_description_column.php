<?php

use App\Constants\AppConst;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissionTableAddDescriptionColumn extends Migration
{
    public function up()
    {
        Schema::table(AppConst::DB_PREFIX . 'permissions', function (Blueprint $table) {
            $table->string('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(AppConst::DB_PREFIX . 'permissions', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
}
