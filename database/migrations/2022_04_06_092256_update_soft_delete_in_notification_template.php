<?php

use App\Constants\AppConst;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateSoftDeleteInNotificationTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(AppConst::DB_PREFIX . 'push_notification_templates', function (Blueprint $table) {
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
        Schema::table(AppConst::DB_PREFIX . 'push_notification_templates', function (Blueprint $table) {
        });
    }
}
