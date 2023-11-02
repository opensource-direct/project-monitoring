<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Lib\ReminderStatus;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reminder', function (Blueprint $table) {
            $table->dropColumn('status_notes');
        });
        Schema::table('reminder', function (Blueprint $table) {
            $table->string('status_notes')->default(ReminderStatus::PENDING->value);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reminder', function (Blueprint $table) {
            $table->dropColumn('status_notes');
        });
        Schema::table('reminder', function (Blueprint $table) {
            $table->integer('status_notes')->nullable();
        });
    }
};
