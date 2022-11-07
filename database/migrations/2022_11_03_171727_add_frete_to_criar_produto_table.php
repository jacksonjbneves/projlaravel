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
        Schema::table('criar_produto', function (Blueprint $table) {
            $table->string('CEP',7);
            //$table->dropColumn('CEP');   //da para apagar por aqui tbm, não precisa ser no metodo down,
                                           // é apenas uma ordem da arquitetura
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('criar_produto', function (Blueprint $table) {
            $table->dropColumn('CEP');
            //$table->string('CEP',7);
        });
        /*
        INSERT INTO `criar_produto` (`id`, `nome`, `tipo`, `peso`, `preço`, `CEP`) VALUES ('1', 'sapato', '1', '400g', '500,00', '6899000');
        INSERT INTO `criar_produto` (`id`, `nome`, `tipo`, `peso`, `preço`) VALUES ('1', 'sapato', '1', '400g', '500,00');
        */
    }
};
