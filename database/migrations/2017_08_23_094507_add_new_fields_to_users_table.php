<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellidos');
            $table->string('tipo_id');
            $table->string('doc_id')->unique();
            $table->string('cod_ocupacion');
                $table->string('universidad');
                $table->string('programa');
                $table->string('semestre');
            $table->string('telefono');
            $table->string('estado_cuenta');
            $table->string('qr_code');
            $table->string('url_qr');
            $table->string('pago_monto');
            $table->string('fecha_lim_pago');

            /**
            $table->string('fecha_creacion');
            $table->string('fecha_lim_pago');
            $table->string('pago_monto');
            $table->string('qr_code');
            $table->string('url_code');
            $table->string('admin');
            **/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('apellidos');
            $table->dropColumn('tipo_id');
            $table->dropColumn('doc_id');
            $table->dropColumn('cod_ocupacion');
                $table->dropColumn('universidad');
                $table->dropColumn('programa');
                $table->dropColumn('semestre');
            $table->dropColumn('telefono');
            $table->dropColumn('estado_cuenta');
            $table->dropColumn('qr_code');
            $table->dropColumn('url_qr');
            $table->dropColumn('pago_monto');
            $table->dropColumn('fecha_lim_pago');

            /**
            $table->dropColumn('fecha_creacion');
            $table->dropColumn('fecha_lim_pago');
            $table->dropColumn('pago_monto');
            $table->dropColumn('qr_code');
            $table->dropColumn('url_code');
            $table->dropColumn('admin');
            **/
        });
    }
}
