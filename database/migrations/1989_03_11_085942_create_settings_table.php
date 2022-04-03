<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            //بيانات المتجر store info
            $table->string('store_name');
            $table->string('currency');
            $table->string('shipping_cost');
            $table->string('logo_1');
            $table->string('logo_mobile');
            //contact us تواصل معنا 
            $table->string('email');
            $table->string('phone');
            $table->string('phone2');
            $table->string('address');
            $table->string('map',500);
            //footer begin here الفوتور يبدأ من هنا
            //قسم تغيير مميزات المتجر
            //section_1
            $table->string('section_1_icon');
            $table->string('section_1_title');
            $table->string('section_1_subtitle');
            //section_2
            $table->string('section_2_icon');
            $table->string('section_2_title');
            $table->string('section_2_subtitle');
            //section_3
            $table->string('section_3_icon');
            $table->string('section_3_title');
            $table->string('section_3_subtitle');
            //section_4
            $table->string('section_4_icon');
            $table->string('section_4_title');
            $table->string('section_4_subtitle');
            //social  روابط التواصل الأجتماعي
            $table->string('twiter');
            $table->string('facebook');
            $table->string('pinterest');
            $table->string('instagram');
            $table->string('youtube');
            //copyrights حقوق الملكية
            $table->string('copyright');
            $table->string('copyright_links')->nullable();
            //App Download Link روابط تحميل التطبيق
            $table->string('download_app_link_1')->nullable();
            $table->string('download_app_link_2')->nullable();
            //صورة طرق الدفع
            $table->string('payment_image');
            //banners البنرات
            $table->string('twin_banner_1');
            $table->string('twin_banner_2');
            $table->string('latest_products_banner');
            $table->string('products_by_section_banner');
            $table->string('shop_banner');
            //fixed_pages الصفحات الثابتة
            $table->text('about_shop_page_body',10000);
            $table->text('terms_page_body',10000);
            $table->text('about_privacy_body',10000);
            $table->text('about_return_body',10000);
            $table->text('about_faq_body',10000);
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
        Schema::dropIfExists('settings');
    }
}
