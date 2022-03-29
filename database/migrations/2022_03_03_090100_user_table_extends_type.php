<?php

use App\Constants\AppConst;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTableExtendsType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(AppConst::DB_PREFIX . 'users', function (Blueprint $table) {
            $table->enum('type', ['su_admin', 'admin', 'student', 'parent'])->default('parent')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(AppConst::DB_PREFIX . 'users', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
}
