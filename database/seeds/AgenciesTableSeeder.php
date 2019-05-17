<?php

use Illuminate\Database\Seeder;

class AgenciesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('agencies')->delete();
        
        \DB::table('agencies')->insert(array (
            0 => 
            array (
                'id' => 10,
                'name' => '24X7 REMIS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:43:22',
                'updated_at' => '2019-05-09 17:43:22',
            ),
            1 => 
            array (
                'id' => 11,
                'name' => 'BAHIA REMIS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:43:36',
                'updated_at' => '2019-05-09 17:43:36',
            ),
            2 => 
            array (
                'id' => 12,
                'name' => 'COMPARTIDO',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:44:06',
                'updated_at' => '2019-05-09 17:44:30',
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'COMPARTIDOS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:44:20',
                'updated_at' => '2019-05-09 17:44:34',
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'DON BOSCO',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:44:44',
                'updated_at' => '2019-05-09 17:44:44',
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'EL ALBA',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:44:52',
                'updated_at' => '2019-05-09 17:44:52',
            ),
            6 => 
            array (
                'id' => 16,
                'name' => 'EL TANQUE',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:45:00',
                'updated_at' => '2019-05-09 17:45:00',
            ),
            7 => 
            array (
                'id' => 17,
                'name' => 'FULL CARS REMIS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:45:13',
                'updated_at' => '2019-05-09 17:46:11',
            ),
            8 => 
            array (
                'id' => 18,
                'name' => 'LA IBERIA REMIS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:45:26',
                'updated_at' => '2019-05-09 17:46:14',
            ),
            9 => 
            array (
                'id' => 19,
                'name' => 'MONICA REMIS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:45:39',
                'updated_at' => '2019-05-09 17:45:39',
            ),
            10 => 
            array (
                'id' => 20,
                'name' => 'OKTUBRE REMIS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:45:52',
                'updated_at' => '2019-05-09 17:45:52',
            ),
            11 => 
            array (
                'id' => 21,
                'name' => 'OLD FRIENDS',
                'address' => NULL,
                'created_at' => '2019-05-09 17:46:06',
                'updated_at' => '2019-05-09 17:46:06',
            ),
            12 => 
            array (
                'id' => 22,
                'name' => 'ONE TIME S.A',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:46:45',
                'updated_at' => '2019-05-09 17:46:45',
            ),
            13 => 
            array (
                'id' => 23,
                'name' => 'OND FRIENDS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:47:05',
                'updated_at' => '2019-05-09 17:47:05',
            ),
            14 => 
            array (
                'id' => 24,
                'name' => 'QUILMES REMIS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:47:21',
                'updated_at' => '2019-05-09 17:47:21',
            ),
            15 => 
            array (
                'id' => 25,
                'name' => 'R.E.V',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:47:32',
                'updated_at' => '2019-05-09 17:47:32',
            ),
            16 => 
            array (
                'id' => 26,
                'name' => 'REMIS ACUARIO',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:47:43',
                'updated_at' => '2019-05-09 17:47:43',
            ),
            17 => 
            array (
                'id' => 27,
                'name' => 'REMIS ARIES',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:47:48',
                'updated_at' => '2019-05-09 17:47:48',
            ),
            18 => 
            array (
                'id' => 28,
                'name' => 'REMIS BAHIA',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:47:58',
                'updated_at' => '2019-05-09 17:47:58',
            ),
            19 => 
            array (
                'id' => 29,
                'name' => 'REMIS CATEDRAL',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:48:02',
                'updated_at' => '2019-05-09 17:48:02',
            ),
            20 => 
            array (
                'id' => 30,
                'name' => 'REMIS CELTA',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:48:17',
                'updated_at' => '2019-05-09 17:48:17',
            ),
            21 => 
            array (
                'id' => 31,
                'name' => 'REMIS FAMILY',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:48:31',
                'updated_at' => '2019-05-09 17:48:31',
            ),
            22 => 
            array (
                'id' => 32,
                'name' => 'REMIS GOLDEN',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:48:35',
                'updated_at' => '2019-05-09 17:48:35',
            ),
            23 => 
            array (
                'id' => 33,
                'name' => 'REMIS LAVALLE',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:48:49',
                'updated_at' => '2019-05-09 17:48:49',
            ),
            24 => 
            array (
                'id' => 34,
                'name' => 'REMIS MENFIS',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:48:54',
                'updated_at' => '2019-05-09 17:48:54',
            ),
            25 => 
            array (
                'id' => 35,
                'name' => 'REMIS MIA',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:49:03',
                'updated_at' => '2019-05-09 17:49:03',
            ),
            26 => 
            array (
                'id' => 36,
                'name' => 'REMIS NOVEL',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:49:07',
                'updated_at' => '2019-05-09 17:49:07',
            ),
            27 => 
            array (
                'id' => 37,
                'name' => 'REMIS POLO',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:49:19',
                'updated_at' => '2019-05-09 17:49:19',
            ),
            28 => 
            array (
                'id' => 38,
                'name' => 'REMIS TOTAL',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:49:22',
                'updated_at' => '2019-05-09 17:49:22',
            ),
            29 => 
            array (
                'id' => 39,
                'name' => 'REMIS TRANSFER',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:49:36',
                'updated_at' => '2019-05-09 17:49:36',
            ),
            30 => 
            array (
                'id' => 40,
                'name' => 'REMIS TRIBUNALES',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:49:42',
                'updated_at' => '2019-05-09 17:49:42',
            ),
            31 => 
            array (
                'id' => 41,
                'name' => 'REMISCERO',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:49:56',
                'updated_at' => '2019-05-09 17:49:56',
            ),
            32 => 
            array (
                'id' => 42,
                'name' => 'REMISES QUILMES',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:50:08',
                'updated_at' => '2019-05-09 17:50:08',
            ),
            33 => 
            array (
                'id' => 43,
                'name' => 'RES COOP S.R.L',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:50:34',
                'updated_at' => '2019-05-09 17:51:00',
            ),
            34 => 
            array (
                'id' => 44,
                'name' => 'S.R. VIAJES',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:50:52',
                'updated_at' => '2019-05-09 17:50:52',
            ),
            35 => 
            array (
                'id' => 45,
                'name' => 'SAN TELMO S.R.L',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:51:19',
                'updated_at' => '2019-05-09 17:51:19',
            ),
            36 => 
            array (
                'id' => 46,
                'name' => 'TURIS TRANSFER',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:51:33',
                'updated_at' => '2019-05-09 17:51:33',
            ),
            37 => 
            array (
                'id' => 47,
                'name' => 'VIA LAVALLE',
                'address' => 'DIRECCION',
                'created_at' => '2019-05-09 17:51:41',
                'updated_at' => '2019-05-09 17:51:41',
            ),
        ));
        
        
    }
}