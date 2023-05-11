<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveColumnFromTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_translations', function (Blueprint $table) {
            $table->dropColumn('logo');
            $table->dropColumn('slider_image1');
            $table->dropColumn('slider_image2');
            $table->dropColumn('slider_image3');
            $table->dropColumn('info_image1');
            $table->dropColumn('info_image2');
            $table->dropColumn('info_image3');
            $table->dropColumn('info_image4');
            $table->dropColumn('info_image5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cms_page_translations', function (Blueprint $table) {
            $table->dropColumn('logo');
            $table->dropColumn('slider_image1');
            $table->dropColumn('slider_image2');
            $table->dropColumn('slider_image3');
            $table->dropColumn('info_image1');
            $table->dropColumn('info_image2');
            $table->dropColumn('info_image3');
            $table->dropColumn('info_image4');
            $table->dropColumn('info_image5');
        });
    }
}
