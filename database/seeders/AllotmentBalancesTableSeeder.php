<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllotmentBalancesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('allotment_balances')->delete();
        
        \DB::table('allotment_balances')->insert(array (
            0 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 1,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            1 => 
            array (
                'amount' => '183373.53',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 2,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            2 => 
            array (
                'amount' => '4031.17',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 3,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            3 => 
            array (
                'amount' => '3584.67',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 4,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            4 => 
            array (
                'amount' => '365051.50',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 5,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            5 => 
            array (
                'amount' => '65000.00',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 6,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            6 => 
            array (
                'amount' => '15000.00',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 7,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            7 => 
            array (
                'amount' => '90171.55',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 8,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            8 => 
            array (
                'amount' => '61990.00',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 9,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            9 => 
            array (
                'amount' => '2460.00',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 10,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            10 => 
            array (
                'amount' => '-6000.00',
                'created_at' => '2012-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 11,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            11 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 12,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            12 => 
            array (
                'amount' => '181876.53',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 13,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            13 => 
            array (
                'amount' => '69498.74',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 14,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            14 => 
            array (
                'amount' => '21140.16',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 15,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            15 => 
            array (
                'amount' => '341051.50',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 16,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            16 => 
            array (
                'amount' => '43500.00',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 17,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            17 => 
            array (
                'amount' => '5000.00',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 18,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            18 => 
            array (
                'amount' => '83829.47',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 19,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            19 => 
            array (
                'amount' => '61990.00',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 20,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            20 => 
            array (
                'amount' => '2460.00',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 21,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            21 => 
            array (
                'amount' => '-8000.00',
                'created_at' => '2013-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 22,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            22 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 23,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            23 => 
            array (
                'amount' => '57870.03',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 24,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            24 => 
            array (
                'amount' => '3999.93',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 25,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            25 => 
            array (
                'amount' => '59524.10',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 26,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            26 => 
            array (
                'amount' => '327511.50',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 27,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            27 => 
            array (
                'amount' => '-222500.00',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 28,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            28 => 
            array (
                'amount' => '-155000.00',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 29,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            29 => 
            array (
                'amount' => '-23000.00',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 30,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            30 => 
            array (
                'amount' => '81850.47',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 31,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            31 => 
            array (
                'amount' => '68674.97',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 32,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            32 => 
            array (
                'amount' => '61990.00',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 33,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            33 => 
            array (
                'amount' => '132550.00',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 34,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            34 => 
            array (
                'amount' => '-2000.00',
                'created_at' => '2013-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 35,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            35 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 36,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            36 => 
            array (
                'amount' => '16938.46',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 37,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            37 => 
            array (
                'amount' => '75783.93',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 38,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            38 => 
            array (
                'amount' => '183760.10',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 39,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            39 => 
            array (
                'amount' => '612381.50',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 40,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            40 => 
            array (
                'amount' => '500500.00',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 41,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            41 => 
            array (
                'amount' => '12500.00',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 42,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            42 => 
            array (
                'amount' => '-4000.00',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 43,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            43 => 
            array (
                'amount' => '81850.47',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 44,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            44 => 
            array (
                'amount' => '68674.97',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 45,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            45 => 
            array (
                'amount' => '73690.00',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 46,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            46 => 
            array (
                'amount' => '113050.00',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 47,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            47 => 
            array (
                'amount' => '-2000.00',
                'created_at' => '2013-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 48,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            48 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 49,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            49 => 
            array (
                'amount' => '18935.64',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 50,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            50 => 
            array (
                'amount' => '6719.02',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 51,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            51 => 
            array (
                'amount' => '163181.55',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 52,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            52 => 
            array (
                'amount' => '398986.50',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 53,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            53 => 
            array (
                'amount' => '-438500.00',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 54,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            54 => 
            array (
                'amount' => '-160000.00',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 55,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            55 => 
            array (
                'amount' => '-4000.00',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 12,
                'id' => 56,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            56 => 
            array (
                'amount' => '81530.47',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 57,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            57 => 
            array (
                'amount' => '68674.97',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 14,
                'id' => 58,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            58 => 
            array (
                'amount' => '73690.00',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 59,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            59 => 
            array (
                'amount' => '112040.00',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 60,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            60 => 
            array (
                'amount' => '-2000.00',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 61,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            61 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2013-12-01 00:00:00',
                'expense_id' => 18,
                'id' => 62,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            62 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 63,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            63 => 
            array (
                'amount' => '44286.21',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 64,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            64 => 
            array (
                'amount' => '81237.97',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 65,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            65 => 
            array (
                'amount' => '227585.84',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 66,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            66 => 
            array (
                'amount' => '820816.50',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 67,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            67 => 
            array (
                'amount' => '62500.00',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 68,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            68 => 
            array (
                'amount' => '-5000.00',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 69,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            69 => 
            array (
                'amount' => '78653.47',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 70,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            70 => 
            array (
                'amount' => '68674.97',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 71,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            71 => 
            array (
                'amount' => '73690.00',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 72,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            72 => 
            array (
                'amount' => '104040.00',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 73,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            73 => 
            array (
                'amount' => '-2000.00',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 74,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            74 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2014-03-01 00:00:00',
                'expense_id' => 18,
                'id' => 75,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            75 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 76,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            76 => 
            array (
                'amount' => '195935.88',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 77,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            77 => 
            array (
                'amount' => '5286.22',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 78,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            78 => 
            array (
                'amount' => '165663.89',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 79,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            79 => 
            array (
                'amount' => '1450675.50',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 80,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            80 => 
            array (
                'amount' => '384500.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 81,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            81 => 
            array (
                'amount' => '-202500.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 82,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            82 => 
            array (
                'amount' => '-24000.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 83,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            83 => 
            array (
                'amount' => '69463.47',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 84,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            84 => 
            array (
                'amount' => '220874.97',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 85,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            85 => 
            array (
                'amount' => '86690.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 86,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            86 => 
            array (
                'amount' => '334160.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 87,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            87 => 
            array (
                'amount' => '12000.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 88,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            88 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 18,
                'id' => 89,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            89 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 19,
                'id' => 90,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            90 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2014-06-01 00:00:00',
                'expense_id' => 20,
                'id' => 91,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            91 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 92,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            92 => 
            array (
                'amount' => '112424.98',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 93,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            93 => 
            array (
                'amount' => '86936.22',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 94,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            94 => 
            array (
                'amount' => '289899.89',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 95,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            95 => 
            array (
                'amount' => '1367643.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 96,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            96 => 
            array (
                'amount' => '-876500.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 97,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            97 => 
            array (
                'amount' => '5000.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 98,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            98 => 
            array (
                'amount' => '-1000.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 99,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            99 => 
            array (
                'amount' => '68243.47',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 100,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            100 => 
            array (
                'amount' => '153244.97',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 101,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            101 => 
            array (
                'amount' => '82890.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 102,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            102 => 
            array (
                'amount' => '326160.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 103,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            103 => 
            array (
                'amount' => '11000.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 104,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            104 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 18,
                'id' => 105,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            105 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 19,
                'id' => 106,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            106 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2014-09-01 00:00:00',
                'expense_id' => 20,
                'id' => 107,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            107 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 108,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            108 => 
            array (
                'amount' => '35826.38',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 109,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            109 => 
            array (
                'amount' => '74966.87',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 110,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            110 => 
            array (
                'amount' => '306807.14',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 111,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            111 => 
            array (
                'amount' => '880391.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 112,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            112 => 
            array (
                'amount' => '-1226500.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 113,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            113 => 
            array (
                'amount' => '-665000.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 114,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            114 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 12,
                'id' => 115,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            115 => 
            array (
                'amount' => '33612.07',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 116,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            116 => 
            array (
                'amount' => '322298.69',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 14,
                'id' => 117,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            117 => 
            array (
                'amount' => '116090.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 118,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            118 => 
            array (
                'amount' => '-106380.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 119,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            119 => 
            array (
                'amount' => '8000.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 120,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            120 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 18,
                'id' => 121,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            121 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 19,
                'id' => 122,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            122 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2015-12-01 00:00:00',
                'expense_id' => 20,
                'id' => 123,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            123 => 
            array (
                'amount' => '21753.82',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 124,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            124 => 
            array (
                'amount' => '-28699.37',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 125,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            125 => 
            array (
                'amount' => '74682.18',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 126,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            126 => 
            array (
                'amount' => '221171.33',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 127,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            127 => 
            array (
                'amount' => '1130540.50',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 128,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            128 => 
            array (
                'amount' => '163500.00',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 129,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            129 => 
            array (
                'amount' => '65000.00',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 130,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            130 => 
            array (
                'amount' => '67383.47',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 131,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            131 => 
            array (
                'amount' => '153244.97',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 14,
                'id' => 132,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            132 => 
            array (
                'amount' => '82890.00',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 133,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            133 => 
            array (
                'amount' => '326160.00',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 134,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            134 => 
            array (
                'amount' => '9000.00',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 135,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            135 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 18,
                'id' => 136,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            136 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 19,
                'id' => 137,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            137 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2014-12-01 00:00:00',
                'expense_id' => 20,
                'id' => 138,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            138 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 139,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            139 => 
            array (
                'amount' => '57402.78',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 140,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            140 => 
            array (
                'amount' => '146537.96',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 141,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            141 => 
            array (
                'amount' => '345407.33',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 142,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            142 => 
            array (
                'amount' => '1104918.50',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 143,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            143 => 
            array (
                'amount' => '300500.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 144,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            144 => 
            array (
                'amount' => '30000.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 145,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            145 => 
            array (
                'amount' => '67383.47',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 146,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            146 => 
            array (
                'amount' => '153244.97',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 147,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            147 => 
            array (
                'amount' => '82890.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 148,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            148 => 
            array (
                'amount' => '326160.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 149,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            149 => 
            array (
                'amount' => '8000.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 150,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            150 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 18,
                'id' => 151,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            151 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 19,
                'id' => 152,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            152 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2015-03-01 00:00:00',
                'expense_id' => 20,
                'id' => 153,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            153 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 154,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            154 => 
            array (
                'amount' => '152902.78',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 155,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            155 => 
            array (
                'amount' => '74878.59',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 156,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            156 => 
            array (
                'amount' => '305916.93',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 157,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            157 => 
            array (
                'amount' => '932428.50',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 158,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            158 => 
            array (
                'amount' => '2463500.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 159,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            159 => 
            array (
                'amount' => '5000.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 160,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            160 => 
            array (
                'amount' => '-44000.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 161,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            161 => 
            array (
                'amount' => '52186.71',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 162,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            162 => 
            array (
                'amount' => '322298.69',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 163,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            163 => 
            array (
                'amount' => '82890.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 164,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            164 => 
            array (
                'amount' => '-56380.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 165,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            165 => 
            array (
                'amount' => '8000.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 166,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            166 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 18,
                'id' => 167,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            167 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 19,
                'id' => 168,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            168 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2015-06-01 00:00:00',
                'expense_id' => 20,
                'id' => 169,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            169 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 170,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            170 => 
            array (
                'amount' => '172260.75',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 171,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            171 => 
            array (
                'amount' => '146687.52',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 172,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            172 => 
            array (
                'amount' => '368576.11',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 173,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            173 => 
            array (
                'amount' => '925778.50',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 174,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            174 => 
            array (
                'amount' => '1396500.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 175,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            175 => 
            array (
                'amount' => '65000.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 176,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            176 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 177,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            177 => 
            array (
                'amount' => '50871.71',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 178,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            178 => 
            array (
                'amount' => '322298.69',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 179,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            179 => 
            array (
                'amount' => '116090.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 180,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            180 => 
            array (
                'amount' => '-106380.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 181,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            181 => 
            array (
                'amount' => '8000.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 182,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            182 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 18,
                'id' => 183,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            183 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 19,
                'id' => 184,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            184 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2015-09-01 00:00:00',
                'expense_id' => 20,
                'id' => 185,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            185 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 186,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            186 => 
            array (
                'amount' => '8916.68',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 187,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            187 => 
            array (
                'amount' => '78939.15',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 188,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            188 => 
            array (
                'amount' => '312720.89',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 189,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            189 => 
            array (
                'amount' => '1368352.15',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 190,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            190 => 
            array (
                'amount' => '422500.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 191,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            191 => 
            array (
                'amount' => '300000.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 192,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            192 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 12,
                'id' => 193,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            193 => 
            array (
                'amount' => '27366.07',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 194,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            194 => 
            array (
                'amount' => '141768.38',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 14,
                'id' => 195,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            195 => 
            array (
                'amount' => '98790.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 196,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            196 => 
            array (
                'amount' => '520.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 197,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            197 => 
            array (
                'amount' => '11000.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 198,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            198 => 
            array (
                'amount' => '80810.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 18,
                'id' => 199,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            199 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 19,
                'id' => 200,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            200 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 20,
                'id' => 201,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            201 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 21,
                'id' => 202,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            202 => 
            array (
                'amount' => '7781.56',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 203,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            203 => 
            array (
                'amount' => '-7443.38',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 204,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            204 => 
            array (
                'amount' => '149048.50',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 205,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            205 => 
            array (
                'amount' => '369254.55',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 206,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            206 => 
            array (
                'amount' => '2360200.15',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 207,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            207 => 
            array (
                'amount' => '1093500.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 208,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            208 => 
            array (
                'amount' => '90000.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 209,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            209 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 12,
                'id' => 210,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            210 => 
            array (
                'amount' => '29512.07',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 211,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            211 => 
            array (
                'amount' => '322298.69',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 212,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            212 => 
            array (
                'amount' => '116090.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 213,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            213 => 
            array (
                'amount' => '-116380.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 214,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            214 => 
            array (
                'amount' => '8000.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 215,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            215 => 
            array (
                'amount' => '7200.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 18,
                'id' => 216,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            216 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 19,
                'id' => 217,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            217 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2016-03-01 00:00:00',
                'expense_id' => 20,
                'id' => 218,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            218 => 
            array (
                'amount' => '7781.56',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 219,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            219 => 
            array (
                'amount' => '-9439.38',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 220,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            220 => 
            array (
                'amount' => '78408.79',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 221,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            221 => 
            array (
                'amount' => '307816.95',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 222,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            222 => 
            array (
                'amount' => '2181910.15',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 223,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            223 => 
            array (
                'amount' => '356500.00',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 224,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            224 => 
            array (
                'amount' => '-350000.00',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 225,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            225 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 226,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            226 => 
            array (
                'amount' => '-13513.93',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 227,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            227 => 
            array (
                'amount' => '282785.24',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 228,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            228 => 
            array (
                'amount' => '116090.00',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 229,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            229 => 
            array (
                'amount' => '-359010.00',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 230,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            230 => 
            array (
                'amount' => '15000.00',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 231,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            231 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 19,
                'id' => 232,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            232 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2016-06-01 00:00:00',
                'expense_id' => 20,
                'id' => 233,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            233 => 
            array (
                'amount' => '7781.56',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 234,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            234 => 
            array (
                'amount' => '69871.96',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 235,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            235 => 
            array (
                'amount' => '153184.18',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 236,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            236 => 
            array (
                'amount' => '372523.37',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 237,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            237 => 
            array (
                'amount' => '1794965.15',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 238,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            238 => 
            array (
                'amount' => '1407500.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 239,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            239 => 
            array (
                'amount' => '175000.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 240,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            240 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 241,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            241 => 
            array (
                'amount' => '31441.07',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 242,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            242 => 
            array (
                'amount' => '188317.24',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 243,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            243 => 
            array (
                'amount' => '98790.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 244,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            244 => 
            array (
                'amount' => '-112460.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 245,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            245 => 
            array (
                'amount' => '12000.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 246,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            246 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 19,
                'id' => 247,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            247 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 20,
                'id' => 248,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            248 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2016-09-01 00:00:00',
                'expense_id' => 21,
                'id' => 249,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            249 => 
            array (
                'amount' => '311884.00',
                'created_at' => '2016-12-01 00:00:00',
                'expense_id' => 22,
                'id' => 250,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            250 => 
            array (
                'amount' => '27944.65',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 251,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            251 => 
            array (
                'amount' => '39946.64',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 252,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            252 => 
            array (
                'amount' => '81778.67',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 253,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            253 => 
            array (
                'amount' => '315215.18',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 254,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            254 => 
            array (
                'amount' => '1421949.12',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 255,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            255 => 
            array (
                'amount' => '100500.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 256,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            256 => 
            array (
                'amount' => '110000.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 257,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            257 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 12,
                'id' => 258,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            258 => 
            array (
                'amount' => '22246.07',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 259,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            259 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 260,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            260 => 
            array (
                'amount' => '98790.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 261,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            261 => 
            array (
                'amount' => '520.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 262,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            262 => 
            array (
                'amount' => '10000.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 263,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            263 => 
            array (
                'amount' => '80810.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 18,
                'id' => 264,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            264 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 19,
                'id' => 265,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            265 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 20,
                'id' => 266,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            266 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 21,
                'id' => 267,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            267 => 
            array (
                'amount' => '311884.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 22,
                'id' => 268,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            268 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 269,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            269 => 
            array (
                'amount' => '66922.52',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 270,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            270 => 
            array (
                'amount' => '82025.09',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 271,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            271 => 
            array (
                'amount' => '368421.30',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 272,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            272 => 
            array (
                'amount' => '1448759.12',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 273,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            273 => 
            array (
                'amount' => '6500.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 274,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            274 => 
            array (
                'amount' => '-165000.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 275,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            275 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 276,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            276 => 
            array (
                'amount' => '3861.07',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 277,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            277 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 278,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            278 => 
            array (
                'amount' => '98790.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 279,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            279 => 
            array (
                'amount' => '470.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 280,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            280 => 
            array (
                'amount' => '33000.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 281,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            281 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 19,
                'id' => 282,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            282 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 20,
                'id' => 283,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            283 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 21,
                'id' => 284,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            284 => 
            array (
                'amount' => '311884.00',
                'created_at' => '2017-06-01 00:00:00',
                'expense_id' => 22,
                'id' => 285,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            285 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 286,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            286 => 
            array (
                'amount' => '61683.01',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 287,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            287 => 
            array (
                'amount' => '61267.64',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 288,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            288 => 
            array (
                'amount' => '368421.30',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 289,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            289 => 
            array (
                'amount' => '1575278.66',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 290,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            290 => 
            array (
                'amount' => '1939500.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 291,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            291 => 
            array (
                'amount' => '375000.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 292,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            292 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 293,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            293 => 
            array (
                'amount' => '-672.93',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 294,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            294 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 295,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            295 => 
            array (
                'amount' => '70790.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 296,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            296 => 
            array (
                'amount' => '-221530.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 297,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            297 => 
            array (
                'amount' => '23000.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 298,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            298 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 19,
                'id' => 299,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            299 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 20,
                'id' => 300,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            300 => 
            array (
                'amount' => '80697.26',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 21,
                'id' => 301,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            301 => 
            array (
                'amount' => '311884.00',
                'created_at' => '2017-09-01 00:00:00',
                'expense_id' => 22,
                'id' => 302,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            302 => 
            array (
                'amount' => '27944.65',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 303,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            303 => 
            array (
                'amount' => '39946.64',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 304,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            304 => 
            array (
                'amount' => '81778.67',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 305,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            305 => 
            array (
                'amount' => '315215.18',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 306,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            306 => 
            array (
                'amount' => '1421949.12',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 307,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            307 => 
            array (
                'amount' => '100500.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 308,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            308 => 
            array (
                'amount' => '110000.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 309,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            309 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 12,
                'id' => 310,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            310 => 
            array (
                'amount' => '22246.07',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 311,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            311 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 312,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            312 => 
            array (
                'amount' => '98790.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 313,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            313 => 
            array (
                'amount' => '520.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 314,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            314 => 
            array (
                'amount' => '10000.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 315,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            315 => 
            array (
                'amount' => '80810.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 18,
                'id' => 316,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            316 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 19,
                'id' => 317,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            317 => 
            array (
                'amount' => '84692.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 20,
                'id' => 318,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            318 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 21,
                'id' => 319,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            319 => 
            array (
                'amount' => '311884.00',
                'created_at' => '2017-03-01 00:00:00',
                'expense_id' => 22,
                'id' => 320,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            320 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 321,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            321 => 
            array (
                'amount' => '1138.52',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 322,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            322 => 
            array (
                'amount' => '-53668.10',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 323,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            323 => 
            array (
                'amount' => '538302.04',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 324,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            324 => 
            array (
                'amount' => '2711338.22',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 325,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            325 => 
            array (
                'amount' => '-119500.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 326,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            326 => 
            array (
                'amount' => '-320000.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 327,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            327 => 
            array (
                'amount' => '26000.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 12,
                'id' => 328,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            328 => 
            array (
                'amount' => '102242.07',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 329,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            329 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 14,
                'id' => 330,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            330 => 
            array (
                'amount' => '83390.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 331,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            331 => 
            array (
                'amount' => '-493590.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 332,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            332 => 
            array (
                'amount' => '-41000.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 333,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            333 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 18,
                'id' => 334,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            334 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 19,
                'id' => 335,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            335 => 
            array (
                'amount' => '48257.41',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 20,
                'id' => 336,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            336 => 
            array (
                'amount' => '2080.40',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 22,
                'id' => 337,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            337 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 338,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            338 => 
            array (
                'amount' => '-62394.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 339,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            339 => 
            array (
                'amount' => '61267.64',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 340,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            340 => 
            array (
                'amount' => '368421.30',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 341,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            341 => 
            array (
                'amount' => '1200628.36',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 342,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            342 => 
            array (
                'amount' => '1014500.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 343,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            343 => 
            array (
                'amount' => '390000.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 344,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            344 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 12,
                'id' => 345,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            345 => 
            array (
                'amount' => '26717.07',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 346,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            346 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 14,
                'id' => 347,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            347 => 
            array (
                'amount' => '70790.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 348,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            348 => 
            array (
                'amount' => '48470.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 349,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            349 => 
            array (
                'amount' => '16000.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 350,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            350 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 19,
                'id' => 351,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            351 => 
            array (
                'amount' => '78509.26',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 20,
                'id' => 352,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            352 => 
            array (
                'amount' => '311884.00',
                'created_at' => '2017-12-01 00:00:00',
                'expense_id' => 22,
                'id' => 353,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            353 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 354,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            354 => 
            array (
                'amount' => '-65512.42',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 355,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            355 => 
            array (
                'amount' => '11933.25',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 356,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            356 => 
            array (
                'amount' => '330772.60',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 357,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            357 => 
            array (
                'amount' => '745171.36',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 358,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            358 => 
            array (
                'amount' => '1343500.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 359,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            359 => 
            array (
                'amount' => '215000.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 360,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            360 => 
            array (
                'amount' => '1000.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 12,
                'id' => 361,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            361 => 
            array (
                'amount' => '18947.07',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 362,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            362 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 363,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            363 => 
            array (
                'amount' => '70790.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 364,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            364 => 
            array (
                'amount' => '331220.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 365,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            365 => 
            array (
                'amount' => '15000.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 366,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            366 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 19,
                'id' => 367,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            367 => 
            array (
                'amount' => '78509.26',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 20,
                'id' => 368,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            368 => 
            array (
                'amount' => '265779.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 22,
                'id' => 369,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            369 => 
            array (
                'amount' => '84000.00',
                'created_at' => '2018-03-01 00:00:00',
                'expense_id' => 24,
                'id' => 370,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            370 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 371,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            371 => 
            array (
                'amount' => '43843.27',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 372,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            372 => 
            array (
                'amount' => '-60894.20',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 373,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            373 => 
            array (
                'amount' => '268762.84',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 374,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            374 => 
            array (
                'amount' => '2789149.03',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 375,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            375 => 
            array (
                'amount' => '5939500.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 376,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            376 => 
            array (
                'amount' => '525000.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 377,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            377 => 
            array (
                'amount' => '31000.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 378,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            378 => 
            array (
                'amount' => '89742.07',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 379,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            379 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 380,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            380 => 
            array (
                'amount' => '112590.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 381,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            381 => 
            array (
                'amount' => '-207590.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 382,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            382 => 
            array (
                'amount' => '-6000.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 383,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            383 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 19,
                'id' => 384,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            384 => 
            array (
                'amount' => '78509.26',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 20,
                'id' => 385,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            385 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 21,
                'id' => 386,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            386 => 
            array (
                'amount' => '2080.40',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 22,
                'id' => 387,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            387 => 
            array (
                'amount' => '84000.00',
                'created_at' => '2018-06-01 00:00:00',
                'expense_id' => 24,
                'id' => 388,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            388 => 
            array (
                'amount' => '-18000.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 389,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            389 => 
            array (
                'amount' => '-90000.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 390,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            390 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 391,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            391 => 
            array (
                'amount' => '93843.27',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 392,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            392 => 
            array (
                'amount' => '98578.60',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 393,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            393 => 
            array (
                'amount' => '538302.04',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 394,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            394 => 
            array (
                'amount' => '2989149.03',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 395,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            395 => 
            array (
                'amount' => '6639500.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 396,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            396 => 
            array (
                'amount' => '625000.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 397,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            397 => 
            array (
                'amount' => '31000.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 398,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            398 => 
            array (
                'amount' => '109742.07',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 399,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            399 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 400,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            400 => 
            array (
                'amount' => '116590.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 401,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            401 => 
            array (
                'amount' => '-207590.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 402,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            402 => 
            array (
                'amount' => '-6000.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 403,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            403 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 18,
                'id' => 404,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            404 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 19,
                'id' => 405,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            405 => 
            array (
                'amount' => '78509.26',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 20,
                'id' => 406,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            406 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 21,
                'id' => 407,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            407 => 
            array (
                'amount' => '2080.40',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 22,
                'id' => 408,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            408 => 
            array (
                'amount' => '84000.00',
                'created_at' => '2018-09-01 00:00:00',
                'expense_id' => 24,
                'id' => 409,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            409 => 
            array (
                'amount' => '86609.60',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 24,
                'id' => 410,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            410 => 
            array (
                'amount' => '-125763.71',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 26,
                'id' => 411,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            411 => 
            array (
                'amount' => '-29109.13',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 27,
                'id' => 412,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            412 => 
            array (
                'amount' => '-2080.40',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 28,
                'id' => 413,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            413 => 
            array (
                'amount' => '-50000.00',
                'created_at' => '2018-12-01 00:00:00',
                'expense_id' => 29,
                'id' => 414,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            414 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 415,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            415 => 
            array (
                'amount' => '-58552.51',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 416,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            416 => 
            array (
                'amount' => '-120673.84',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 417,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            417 => 
            array (
                'amount' => '538302.04',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 418,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            418 => 
            array (
                'amount' => '6271834.38',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 419,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            419 => 
            array (
                'amount' => '3044500.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 420,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            420 => 
            array (
                'amount' => '340000.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 421,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            421 => 
            array (
                'amount' => '26000.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 12,
                'id' => 422,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            422 => 
            array (
                'amount' => '264657.07',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 423,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            423 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 424,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            424 => 
            array (
                'amount' => '83390.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 425,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            425 => 
            array (
                'amount' => '-493590.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 426,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            426 => 
            array (
                'amount' => '-44000.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 427,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            427 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 18,
                'id' => 428,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            428 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 19,
                'id' => 429,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            429 => 
            array (
                'amount' => '48257.41',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 20,
                'id' => 430,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            430 => 
            array (
                'amount' => '-12125.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 21,
                'id' => 431,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            431 => 
            array (
                'amount' => '2080.40',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 22,
                'id' => 432,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            432 => 
            array (
                'amount' => '324669.60',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 24,
                'id' => 433,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            433 => 
            array (
                'amount' => '-238029.18',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 26,
                'id' => 434,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            434 => 
            array (
                'amount' => '-29109.13',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 27,
                'id' => 435,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            435 => 
            array (
                'amount' => '-2080.40',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 28,
                'id' => 436,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            436 => 
            array (
                'amount' => '-50000.00',
                'created_at' => '2019-03-01 00:00:00',
                'expense_id' => 29,
                'id' => 437,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            437 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 438,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            438 => 
            array (
                'amount' => '-158472.23',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 439,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            439 => 
            array (
                'amount' => '-199475.58',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 440,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            440 => 
            array (
                'amount' => '409932.38',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 441,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            441 => 
            array (
                'amount' => '6185325.42',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 442,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            442 => 
            array (
                'amount' => '494500.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 443,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            443 => 
            array (
                'amount' => '145000.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 444,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            444 => 
            array (
                'amount' => '26000.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 445,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            445 => 
            array (
                'amount' => '263946.07',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 446,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            446 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 447,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            447 => 
            array (
                'amount' => '83390.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 448,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            448 => 
            array (
                'amount' => '-661590.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 449,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            449 => 
            array (
                'amount' => '-69000.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 450,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            450 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 18,
                'id' => 451,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            451 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 19,
                'id' => 452,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            452 => 
            array (
                'amount' => '48257.41',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 20,
                'id' => 453,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            453 => 
            array (
                'amount' => '168.50',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 21,
                'id' => 454,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            454 => 
            array (
                'amount' => '2080.40',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 22,
                'id' => 455,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            455 => 
            array (
                'amount' => '86107.34',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 24,
                'id' => 456,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            456 => 
            array (
                'amount' => '-238029.18',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 26,
                'id' => 457,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            457 => 
            array (
                'amount' => '-29109.13',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 27,
                'id' => 458,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            458 => 
            array (
                'amount' => '-14857.40',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 28,
                'id' => 459,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            459 => 
            array (
                'amount' => '-50000.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 29,
                'id' => 460,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            460 => 
            array (
                'amount' => '35600.00',
                'created_at' => '2019-06-01 00:00:00',
                'expense_id' => 30,
                'id' => 461,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            461 => 
            array (
                'amount' => '-36609.60',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 27,
                'id' => 462,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            462 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 32,
                'id' => 463,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            463 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 464,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            464 => 
            array (
                'amount' => '-186445.50',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 465,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            465 => 
            array (
                'amount' => '-62883.09',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 466,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            466 => 
            array (
                'amount' => '218586.99',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 467,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            467 => 
            array (
                'amount' => '478500.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 468,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            468 => 
            array (
                'amount' => '130000.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 469,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            469 => 
            array (
                'amount' => '17000.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 12,
                'id' => 470,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            470 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 14,
                'id' => 471,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            471 => 
            array (
                'amount' => '84190.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 472,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            472 => 
            array (
                'amount' => '-703590.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 473,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            473 => 
            array (
                'amount' => '-94000.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 474,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            474 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 18,
                'id' => 475,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            475 => 
            array (
                'amount' => '86609.60',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 24,
                'id' => 476,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            476 => 
            array (
                'amount' => '21200.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 30,
                'id' => 477,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            477 => 
            array (
                'amount' => '182942.96',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 31,
                'id' => 478,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            478 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 32,
                'id' => 479,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            479 => 
            array (
                'amount' => '37057.97',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 34,
                'id' => 480,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            480 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 481,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            481 => 
            array (
                'amount' => '-149941.12',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 482,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            482 => 
            array (
                'amount' => '-48497.32',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 483,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            483 => 
            array (
                'amount' => '238906.21',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 484,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            484 => 
            array (
                'amount' => '6120592.07',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 485,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            485 => 
            array (
                'amount' => '-1374500.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 486,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            486 => 
            array (
                'amount' => '-475000.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 487,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            487 => 
            array (
                'amount' => '260960.07',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 488,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            488 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 489,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            489 => 
            array (
                'amount' => '83390.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 490,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            490 => 
            array (
                'amount' => '-675590.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 491,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            491 => 
            array (
                'amount' => '100000.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 18,
                'id' => 492,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            492 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 19,
                'id' => 493,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            493 => 
            array (
                'amount' => '48257.41',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 20,
                'id' => 494,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            494 => 
            array (
                'amount' => '86609.60',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 24,
                'id' => 495,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            495 => 
            array (
                'amount' => '-238029.18',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 26,
                'id' => 496,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            496 => 
            array (
                'amount' => '35600.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 30,
                'id' => 497,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            497 => 
            array (
                'amount' => '202828.94',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 31,
                'id' => 498,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            498 => 
            array (
                'amount' => '2080.40',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 22,
                'id' => 499,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            499 => 
            array (
                'amount' => '-50000.00',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 29,
                'id' => 500,
                'updated_at' => '2022-06-03 00:00:00',
            ),
        ));
        \DB::table('allotment_balances')->insert(array (
            0 => 
            array (
                'amount' => '6048786.11',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 501,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            1 => 
            array (
                'amount' => '252741.19',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 502,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            2 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 19,
                'id' => 503,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            3 => 
            array (
                'amount' => '2080.40',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 22,
                'id' => 504,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            4 => 
            array (
                'amount' => '-36609.60',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 27,
                'id' => 505,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            5 => 
            array (
                'amount' => '-2080.40',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 28,
                'id' => 506,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            6 => 
            array (
                'amount' => '-50000.00',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 29,
                'id' => 507,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            7 => 
            array (
                'amount' => '-238029.18',
                'created_at' => '2019-12-01 00:00:00',
                'expense_id' => 26,
                'id' => 508,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            8 => 
            array (
                'amount' => '-2080.40',
                'created_at' => '2019-09-01 00:00:00',
                'expense_id' => 28,
                'id' => 509,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            9 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 510,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            10 => 
            array (
                'amount' => '-206112.69',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 511,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            11 => 
            array (
                'amount' => '149057.35',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 512,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            12 => 
            array (
                'amount' => '-110566.79',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 513,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            13 => 
            array (
                'amount' => '5988471.05',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 514,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            14 => 
            array (
                'amount' => '-3733500.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 515,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            15 => 
            array (
                'amount' => '-590000.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 516,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            16 => 
            array (
                'amount' => '17000.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 12,
                'id' => 517,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            17 => 
            array (
                'amount' => '250708.19',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 518,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            18 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 519,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            19 => 
            array (
                'amount' => '84190.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 520,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            20 => 
            array (
                'amount' => '-801590.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 521,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            21 => 
            array (
                'amount' => '-99000.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 522,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            22 => 
            array (
                'amount' => '6980.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 18,
                'id' => 523,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            23 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 19,
                'id' => 524,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            24 => 
            array (
                'amount' => '-12777.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 22,
                'id' => 525,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            25 => 
            array (
                'amount' => '-502.26',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 24,
                'id' => 526,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            26 => 
            array (
                'amount' => '20300.00',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 30,
                'id' => 527,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            27 => 
            array (
                'amount' => '105343.10',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 31,
                'id' => 528,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            28 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 32,
                'id' => 529,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            29 => 
            array (
                'amount' => '37057.97',
                'created_at' => '2020-03-01 00:00:00',
                'expense_id' => 34,
                'id' => 530,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            30 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 531,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            31 => 
            array (
                'amount' => '-196675.89',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 532,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            32 => 
            array (
                'amount' => '151944.88',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 533,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            33 => 
            array (
                'amount' => '-33407.43',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 534,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            34 => 
            array (
                'amount' => '5895801.22',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 535,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            35 => 
            array (
                'amount' => '606500.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 536,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            36 => 
            array (
                'amount' => '162000.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 537,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            37 => 
            array (
                'amount' => '17000.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 538,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            38 => 
            array (
                'amount' => '250708.19',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 539,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            39 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 540,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            40 => 
            array (
                'amount' => '84190.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 541,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            41 => 
            array (
                'amount' => '-831090.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 542,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            42 => 
            array (
                'amount' => '-99000.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 543,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            43 => 
            array (
                'amount' => '6980.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 18,
                'id' => 544,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            44 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 19,
                'id' => 545,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            45 => 
            array (
                'amount' => '-12777.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 22,
                'id' => 546,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            46 => 
            array (
                'amount' => '-502.26',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 24,
                'id' => 547,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            47 => 
            array (
                'amount' => '20300.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 30,
                'id' => 548,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            48 => 
            array (
                'amount' => '8440.01',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 31,
                'id' => 549,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            49 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 32,
                'id' => 550,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            50 => 
            array (
                'amount' => '37057.97',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 34,
                'id' => 551,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            51 => 
            array (
                'amount' => '-3000.00',
                'created_at' => '2020-06-01 00:00:00',
                'expense_id' => 35,
                'id' => 552,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            52 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 553,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            53 => 
            array (
                'amount' => '-196675.89',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 554,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            54 => 
            array (
                'amount' => '240126.88',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 555,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            55 => 
            array (
                'amount' => '-33407.43',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 556,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            56 => 
            array (
                'amount' => '5895801.22',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 557,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            57 => 
            array (
                'amount' => '2979500.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 558,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            58 => 
            array (
                'amount' => '727000.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 559,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            59 => 
            array (
                'amount' => '17000.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 560,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            60 => 
            array (
                'amount' => '250708.19',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 561,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            61 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 562,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            62 => 
            array (
                'amount' => '84190.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 563,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            63 => 
            array (
                'amount' => '-831090.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 564,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            64 => 
            array (
                'amount' => '-99000.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 565,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            65 => 
            array (
                'amount' => '6980.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 18,
                'id' => 566,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            66 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 19,
                'id' => 567,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            67 => 
            array (
                'amount' => '-12777.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 22,
                'id' => 568,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            68 => 
            array (
                'amount' => '-502.26',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 24,
                'id' => 569,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            69 => 
            array (
                'amount' => '145576.80',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 26,
                'id' => 570,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            70 => 
            array (
                'amount' => '20300.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 30,
                'id' => 571,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            71 => 
            array (
                'amount' => '8440.01',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 31,
                'id' => 572,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            72 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 32,
                'id' => 573,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            73 => 
            array (
                'amount' => '37057.97',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 34,
                'id' => 574,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            74 => 
            array (
                'amount' => '87000.00',
                'created_at' => '2020-09-01 00:00:00',
                'expense_id' => 35,
                'id' => 575,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            75 => 
            array (
                'amount' => '-12777.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 22,
                'id' => 576,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            76 => 
            array (
                'amount' => '-502.26',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 24,
                'id' => 577,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            77 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 32,
                'id' => 578,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            78 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 5,
                'id' => 579,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            79 => 
            array (
                'amount' => '-212927.69',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 6,
                'id' => 580,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            80 => 
            array (
                'amount' => '142741.86',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 7,
                'id' => 581,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            81 => 
            array (
                'amount' => '-223620.98',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 8,
                'id' => 582,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            82 => 
            array (
                'amount' => '5898047.29',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 9,
                'id' => 583,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            83 => 
            array (
                'amount' => '620500.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 10,
                'id' => 584,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            84 => 
            array (
                'amount' => '72000.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 11,
                'id' => 585,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            85 => 
            array (
                'amount' => '12000.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 12,
                'id' => 586,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            86 => 
            array (
                'amount' => '250708.19',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 13,
                'id' => 587,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            87 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 14,
                'id' => 588,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            88 => 
            array (
                'amount' => '80590.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 15,
                'id' => 589,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            89 => 
            array (
                'amount' => '-931090.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 16,
                'id' => 590,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            90 => 
            array (
                'amount' => '-109000.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 17,
                'id' => 591,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            91 => 
            array (
                'amount' => '6980.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 18,
                'id' => 592,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            92 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 19,
                'id' => 593,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            93 => 
            array (
                'amount' => '145576.80',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 26,
                'id' => 594,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            94 => 
            array (
                'amount' => '14600.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 30,
                'id' => 595,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            95 => 
            array (
                'amount' => '8440.01',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 31,
                'id' => 596,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            96 => 
            array (
                'amount' => '37057.97',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 34,
                'id' => 597,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            97 => 
            array (
                'amount' => '4500.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 35,
                'id' => 598,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            98 => 
            array (
                'amount' => '9000.00',
                'created_at' => '2020-12-01 00:00:00',
                'expense_id' => 36,
                'id' => 599,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            99 => 
            array (
                'amount' => '26400.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 1,
                'id' => 600,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            100 => 
            array (
                'amount' => '13200.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 2,
                'id' => 601,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            101 => 
            array (
                'amount' => '22500.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 3,
                'id' => 602,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            102 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 5,
                'id' => 603,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            103 => 
            array (
                'amount' => '-112853.99',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 6,
                'id' => 604,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            104 => 
            array (
                'amount' => '251418.17',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 7,
                'id' => 605,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            105 => 
            array (
                'amount' => '-135201.03',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 8,
                'id' => 606,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            106 => 
            array (
                'amount' => '6063509.42',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 9,
                'id' => 607,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            107 => 
            array (
                'amount' => '3644500.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 10,
                'id' => 608,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            108 => 
            array (
                'amount' => '362000.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 11,
                'id' => 609,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            109 => 
            array (
                'amount' => '12000.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 12,
                'id' => 610,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            110 => 
            array (
                'amount' => '250708.19',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 13,
                'id' => 611,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            111 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 14,
                'id' => 612,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            112 => 
            array (
                'amount' => '80590.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 15,
                'id' => 613,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            113 => 
            array (
                'amount' => '-933190.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 16,
                'id' => 614,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            114 => 
            array (
                'amount' => '-112000.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 17,
                'id' => 615,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            115 => 
            array (
                'amount' => '6980.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 18,
                'id' => 616,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            116 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 19,
                'id' => 617,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            117 => 
            array (
                'amount' => '-12777.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 22,
                'id' => 618,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            118 => 
            array (
                'amount' => '-502.26',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 24,
                'id' => 619,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            119 => 
            array (
                'amount' => '-18000.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 25,
                'id' => 620,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            120 => 
            array (
                'amount' => '145576.80',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 26,
                'id' => 621,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            121 => 
            array (
                'amount' => '34600.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 30,
                'id' => 622,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            122 => 
            array (
                'amount' => '121499.97',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 31,
                'id' => 623,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            123 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 32,
                'id' => 624,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            124 => 
            array (
                'amount' => '37057.97',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 34,
                'id' => 625,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            125 => 
            array (
                'amount' => '4500.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 35,
                'id' => 626,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            126 => 
            array (
                'amount' => '7000.00',
                'created_at' => '2021-03-01 00:00:00',
                'expense_id' => 36,
                'id' => 627,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            127 => 
            array (
                'amount' => '18000.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 3,
                'id' => 628,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            128 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 5,
                'id' => 629,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            129 => 
            array (
                'amount' => '-148359.99',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 6,
                'id' => 630,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            130 => 
            array (
                'amount' => '167034.02',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 7,
                'id' => 631,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            131 => 
            array (
                'amount' => '-211316.20',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 8,
                'id' => 632,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            132 => 
            array (
                'amount' => '6036629.24',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 9,
                'id' => 633,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            133 => 
            array (
                'amount' => '193500.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 10,
                'id' => 634,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            134 => 
            array (
                'amount' => '95500.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 11,
                'id' => 635,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            135 => 
            array (
                'amount' => '12000.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 12,
                'id' => 636,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            136 => 
            array (
                'amount' => '250708.19',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 13,
                'id' => 637,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            137 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 14,
                'id' => 638,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            138 => 
            array (
                'amount' => '80590.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 15,
                'id' => 639,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            139 => 
            array (
                'amount' => '-933190.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 16,
                'id' => 640,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            140 => 
            array (
                'amount' => '-114000.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 17,
                'id' => 641,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            141 => 
            array (
                'amount' => '6980.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 18,
                'id' => 642,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            142 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 19,
                'id' => 643,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            143 => 
            array (
                'amount' => '-12777.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 22,
                'id' => 644,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            144 => 
            array (
                'amount' => '-502.26',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 24,
                'id' => 645,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            145 => 
            array (
                'amount' => '-18000.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 25,
                'id' => 646,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            146 => 
            array (
                'amount' => '145576.80',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 26,
                'id' => 647,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            147 => 
            array (
                'amount' => '34600.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 30,
                'id' => 648,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            148 => 
            array (
                'amount' => '31720.73',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 31,
                'id' => 649,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            149 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 32,
                'id' => 650,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            150 => 
            array (
                'amount' => '-18484.78',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 34,
                'id' => 651,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            151 => 
            array (
                'amount' => '4500.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 35,
                'id' => 652,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            152 => 
            array (
                'amount' => '7000.00',
                'created_at' => '2021-06-01 00:00:00',
                'expense_id' => 36,
                'id' => 653,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            153 => 
            array (
                'amount' => '18000.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 3,
                'id' => 654,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            154 => 
            array (
                'amount' => '14400.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 5,
                'id' => 655,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            155 => 
            array (
                'amount' => '-170580.99',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 6,
                'id' => 656,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            156 => 
            array (
                'amount' => '290410.14',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 7,
                'id' => 657,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            157 => 
            array (
                'amount' => '-127879.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 8,
                'id' => 658,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            158 => 
            array (
                'amount' => '6124761.94',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 9,
                'id' => 659,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            159 => 
            array (
                'amount' => '7193500.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 10,
                'id' => 660,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            160 => 
            array (
                'amount' => '845500.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 11,
                'id' => 661,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            161 => 
            array (
                'amount' => '133000.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 12,
                'id' => 662,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            162 => 
            array (
                'amount' => '250708.19',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 13,
                'id' => 663,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            163 => 
            array (
                'amount' => '27325.38',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 14,
                'id' => 664,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            164 => 
            array (
                'amount' => '132590.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 15,
                'id' => 665,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            165 => 
            array (
                'amount' => '1130810.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 16,
                'id' => 666,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            166 => 
            array (
                'amount' => '-71000.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 17,
                'id' => 667,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            167 => 
            array (
                'amount' => '6980.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 18,
                'id' => 668,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            168 => 
            array (
                'amount' => '165600.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 19,
                'id' => 669,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            169 => 
            array (
                'amount' => '-12777.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 22,
                'id' => 670,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            170 => 
            array (
                'amount' => '-502.26',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 24,
                'id' => 671,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            171 => 
            array (
                'amount' => '-18000.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 25,
                'id' => 672,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            172 => 
            array (
                'amount' => '145576.80',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 26,
                'id' => 673,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            173 => 
            array (
                'amount' => '31300.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 30,
                'id' => 674,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            174 => 
            array (
                'amount' => '194363.81',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 31,
                'id' => 675,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            175 => 
            array (
                'amount' => '-6088.70',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 32,
                'id' => 676,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            176 => 
            array (
                'amount' => '46380.86',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 34,
                'id' => 677,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            177 => 
            array (
                'amount' => '4500.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 35,
                'id' => 678,
                'updated_at' => '2022-06-03 00:00:00',
            ),
            178 => 
            array (
                'amount' => '891000.00',
                'created_at' => '2021-09-01 00:00:00',
                'expense_id' => 36,
                'id' => 679,
                'updated_at' => '2022-06-03 00:00:00',
            ),
        ));
        
        
    }
}