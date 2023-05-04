<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('tour_guide')->nullable()->after('customer_email');   
            $table->string('avail_price')->nullable()->after('res_date');   
            $table->string('added_services')->nullable()->after('res_date');   
            $table->string('package')->nullable()->after('customer_email');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            //
            $table->dropColumn('tour_guide');
            $table->dropColumn('avail_price');
            $table->dropColumn('added_services');
            $table->dropColumn('package');
        });
    }
};
