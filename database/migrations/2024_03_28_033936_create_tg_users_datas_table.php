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
        Schema::create('tg_users_datas', function (Blueprint $table) {
            # Habilitar unicamente valores positivos
            $table->bigInteger('az_identifier')->unsigned()->primary();

            # Campos informativos para auditorias
            $table->timestamp('az_created_at');
            $table->bigInteger('az_created_by');
            $table->timestamp('az_modified_at');
            $table->bigInteger('az_modified_by');

            # Campos relevantes para almacenacmiento
            $table->string('cd_email')->nullable();
            $table->string('cd_login')->nullable();
            $table->string('cd_password')->nullable();

            # Habilitar unicamente valores positivos
            $table->bigInteger('sy_authentication')->unsigned();
            $table->bigInteger('sy_session_time')->unsigned();
            $table->bigInteger('tg_role_data')->unsigned();

            # Relaciones de llaves foraneas con otras tablas de la base de datos
            $table->foreign('tg_role_data')->references('az_identifier')->on('tg_roles_datas');
            //$table->foreign('sy_authentication')->references('az_identifier')->on('sy_authentications');
            //$table->foreign('sy_session_time')->references('az_identifier')->on('sy_sessions_times');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tg_users_datas');
    }
};
