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
        Schema::table('articulos', function (Blueprint $table) {
//            $table->unsignedBigInteger("proveedor_id")->after("id")->nullable();
//            $table->foreign("proveedor_id")->references("id")->on("proveedores");
            $table->foreignId("proveedor_id")
                  ->after("observaciones")
                  ->constrained("proveedores")
                  ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articulos', function (Blueprint $table) {
            $table->dropForeign("articulos_proveedor_id_foreign");
            $table->dropColumn("proveedor_id");
        });
    }
};
