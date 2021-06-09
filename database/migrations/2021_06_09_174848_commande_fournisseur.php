<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CommandeFournisseur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CommandeFournisseur', function (Blueprint $table) {
            $table->string('numero');
            $table->date('date');
            $table->string('client');
            $table->string('Total TVA')->nullable();
            $table->string('Total TTC')->nullable();
            $table->string('Net à payer')->nullable();
            $table->timestamps();
        });

        DB::table('user_types')->insert([
            ['type_name' => 'Active'],
            ['type_name' => 'Disable']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }

}
