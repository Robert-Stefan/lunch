<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePlacelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('placelists', function (Blueprint $table) {
            $table->unsignedBigInteger('day_id')->nullable()->after('slug');

            $table->foreign('day_id')
                ->references('id')
                ->on('days')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('placelists', function (Blueprint $table) {
            $table->dropForeign('placelists_day_id_foreign');

            $table->dropColumn('day_id');
        });
    }
}
