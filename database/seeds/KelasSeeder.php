<?php

use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'nama_kelas'=>'ECL-9',
        	'jurusan'   =>'Ecommers Lanjut 9'
        ];

        DB::table('table_kelas')->insert($data);

        $data = [
        	'nama_kelas'=>'ECL-10',
        	'jurusan'   =>'Ecommers Lanjut 10'
        ];

        DB::table('table_kelas')->insert($data);
    }
}
