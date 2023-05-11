<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColoumImagesIntoTableCmstranslation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cms_page_translations', function (Blueprint $table) {
            $table->string('logo')->after('page_title');
            $table->string('slider_image1')->after('url_key');
            $table->string('slider_image2')->after('slider_image1');
            $table->string('slider_image3')->after('slider_image2');
            $table->string('info_image1')->after('content');
            $table->string('info_image2')->after('info_image1');
            $table->string('info_image3')->after('info_image2');
            $table->string('info_image4')->after('info_image3');
            $table->string('info_image5')->after('info_image4');
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
