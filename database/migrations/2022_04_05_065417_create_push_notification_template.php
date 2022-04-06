<?php

use App\Constants\AppConst;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePushNotificationTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(AppConst::DB_PREFIX . 'push_notification_templates', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable(false);
            $table->text('template')->nullable(true);
            $table->text('description')->nullable(true);
            $table->string('template_id')->nullable(true);
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
        Schema::dropIfExists(AppConst::DB_PREFIX . 'push_notification_templates');
    }
}
