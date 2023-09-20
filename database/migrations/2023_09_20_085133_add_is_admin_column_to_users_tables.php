<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->tinyInteger('is_admin')->default('0');
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropIfExists('is_admin');
            //
        });
    }
};










    /**
     * Run the migrations.
     */
//    public function up(): void
//    {
//        Schema::create('users_table', function (Blueprint $table) {
//
//           $table->id();
//           $table->string('name')->nullable();
//           $table->timestamps();
//            //
//        });
//       DB::table('users_table')->insert()
//    }
//
//    /**
//     * Reverse the migrations.
//     */
//    public function down(): void
//    {
//        Schema::dropIfExists('users_table', function (Blueprint $table) {
//
//            $table->dropColumn('users_table');
//
//        });
//    }
//};
