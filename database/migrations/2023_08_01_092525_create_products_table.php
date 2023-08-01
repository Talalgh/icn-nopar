<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200);
            $table->string('added_by', 6)->default('admin');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('brand_id')->nullable();
            $table->string('photos', 2000)->nullable();
            $table->string('thumbnail_img', 100)->nullable();
            $table->string('video_provider', 20)->nullable();
            $table->string('video_link', 100)->nullable();
            $table->string('tags', 500)->nullable();
            $table->longText('description')->nullable();
            $table->double('unit_price', 20, 2);
            $table->double('purchase_price', 20, 2)->nullable();
            $table->integer('variant_product')->default(0);
            $table->string('attributes', 1000)->default('[]');
            $table->string('features', 1000)->default('[]');
            $table->mediumText('choice_options')->nullable();
            $table->mediumText('colors')->nullable();
            $table->text('variations')->nullable();
            $table->integer('todays_deal')->default(0);
            $table->integer('published')->default(1);
            $table->tinyInteger('approved')->default(1);
            $table->string('stock_visibility_state', 10)->default('quantity');
            $table->tinyInteger('cash_on_delivery')->default(1)->comment('1 = On, 0 = Off');
            $table->integer('featured')->default(0);
            $table->integer('seller_featured')->default(0);
            $table->integer('current_stock')->default(0);
            $table->string('unit', 20)->nullable();
            $table->integer('min_qty')->default(1);
            $table->integer('low_stock_quantity')->nullable();
            $table->double('discount', 20, 2)->default(0.00);
            $table->string('discount_type', 10)->nullable();
            $table->integer('discount_start_date')->nullable();
            $table->integer('discount_end_date')->nullable();
            $table->double('tax', 20, 2)->nullable();
            $table->string('tax_type', 10)->nullable();
            $table->string('shipping_type', 20)->default('flat_rate');
            $table->double('shipping_cost', 20, 2)->default(0.00);
            $table->tinyInteger('is_quantity_multiplied')->default(0)->comment('1 = Multiplied with shipping cost');
            $table->integer('est_shipping_days')->nullable();
            $table->integer('num_of_sale')->default(0);
            $table->mediumText('meta_title')->nullable();
            $table->longText('meta_description')->nullable();
            $table->string('meta_img', 255)->nullable();
            $table->string('pdf', 255)->nullable();
            $table->mediumText('slug');
            $table->integer('refundable')->default(0);
            $table->double('earn_point', 8, 2)->default(0.00);
            $table->double('rating', 8, 2)->default(0.00);
            $table->string('barcode', 255)->nullable();
            $table->integer('digital')->default(0);
            $table->integer('auction_product')->default(0);
            $table->string('file_name', 255)->nullable();
            $table->string('file_path', 255)->nullable();
            $table->string('external_link', 500)->nullable();
            $table->string('external_link_btn', 255)->default('Buy Now');
            $table->integer('wholesale_product')->default(0);
            $table->integer('new_product')->nullable();
            $table->integer('best_product')->nullable();
            $table->integer('show_home')->default(0);
            $table->integer('order_home')->default(0);
            $table->integer('fixed_home')->default(0);
            $table->integer('fixed_sub_home')->default(0);
            $table->integer('order_sub_home')->default(0);
            $table->integer('show_parent_categories_home')->default(0);
            $table->integer('show_sub_categories_home')->default(0);
            $table->integer('show_category')->default(0);
            $table->integer('order_category')->default(0);
            $table->integer('fixed_category')->default(0);
            $table->integer('show_sub_category')->default(0);
            $table->integer('order_sub_category')->default(0);
            $table->integer('fixed_sub_category')->default(0);
            $table->integer('show_subcategory')->default(0);
            $table->integer('order_subcategory')->default(0);
            $table->integer('fixed_subcategory')->default(0);
            $table->integer('show_sub_subcategory')->default(0);
            $table->integer('order_sub_subcategory')->default(0);
            $table->integer('fixed_sub_subcategory')->default(0);
            $table->integer('show_filter_first')->default(0);
            $table->integer('order_filter')->nullable();
            $table->integer('show_shop')->nullable();
            $table->integer('order_shop')->nullable();
            $table->timestamps();


            // foreign keys
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
