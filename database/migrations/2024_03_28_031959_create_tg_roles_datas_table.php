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
        Schema::create('tg_roles_datas', function (Blueprint $table) {
            # Habilitar unicamente valores positivos
            $table->bigInteger('az_identifier')->unsigned()->primary();

            # Campos informativos para auditorias
            $table->timestamp('az_created_at');
            $table->bigInteger('az_created_by');
            $table->timestamp('az_modified_at');
            $table->bigInteger('az_modified_by');

            # Campos relevantes para almacenacmiento
            $table->string('cd_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tg_roles_datas');
    }
};
