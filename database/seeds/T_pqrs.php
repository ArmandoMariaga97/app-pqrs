<?php

use Illuminate\Database\Seeder;

use App\TipoPQR;

class T_pqrs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPQR::create([
            't_pqr' => 'Derecho de petición',
        ]);
        TipoPQR::create([
            't_pqr' => 'Felicitación',
        ]);
        TipoPQR::create([
            't_pqr' => 'Petición',
        ]);
        TipoPQR::create([
            't_pqr' => 'Queja',
        ]);
        TipoPQR::create([
            't_pqr' => 'Reclamo',
        ]);
        TipoPQR::create([
            't_pqr' => 'Sugerencia',
        ]);
    }
}
