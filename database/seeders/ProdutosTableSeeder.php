<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [
                'ds_produto' => 'Produto 1',
                'dt_compra' => '2024-01-01',
                'qt_quantidade' => 50,
                'vl_unitario' => 10.50,
                'vl_total' => 525.00,
                'ds_observacao' => 'Observação do Produto 1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ds_produto' => 'Produto 2',
                'dt_compra' => '2024-02-01',
                'qt_quantidade' => 30,
                'vl_unitario' => 20.00,
                'vl_total' => 600.00,
                'ds_observacao' => 'Observação do Produto 2',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'ds_produto' => 'Produto 3',
                'dt_compra' => '2024-03-01',
                'qt_quantidade' => 100,
                'vl_unitario' => 5.00,
                'vl_total' => 500.00,
                'ds_observacao' => 'Observação do Produto 3',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
