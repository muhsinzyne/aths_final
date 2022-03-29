<?php

use App\Constants\AppConst;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RolesTableAddCreatedBy extends Migration
{
    public function up()
    {
        Schema::table(AppConst::DB_PREFIX . 'roles', function (Blueprint $table) {
            $table->integer('created_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(AppConst::DB_PREFIX . 'roles', function (Blueprint $table) {
            $table->dropColumn('created_by');
        });
    }
}
