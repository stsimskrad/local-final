<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AllotmentListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('allotment_lists')->delete();
        
        \DB::table('allotment_lists')->insert(array (
            0 => 
            array (
                'added_by' => 1,
                'allotment_id' => 1,
                'amount' => '13721.53',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 1,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            1 => 
            array (
                'added_by' => 1,
                'allotment_id' => 1,
                'amount' => '7705.70',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 2,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            2 => 
            array (
                'added_by' => 1,
                'allotment_id' => 2,
                'amount' => '127966.43',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 3,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            3 => 
            array (
                'added_by' => 1,
                'allotment_id' => 3,
                'amount' => '336000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 4,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            4 => 
            array (
                'added_by' => 1,
                'allotment_id' => 4,
                'amount' => '53828.13',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 5,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            5 => 
            array (
                'added_by' => 1,
                'allotment_id' => 5,
                'amount' => '168000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 6,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            6 => 
            array (
                'added_by' => 1,
                'allotment_id' => 6,
                'amount' => '57412.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 7,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            7 => 
            array (
                'added_by' => 1,
                'allotment_id' => 7,
                'amount' => '12000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 17,
                'id' => 8,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            8 => 
            array (
                'added_by' => 1,
                'allotment_id' => 7,
                'amount' => '350000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 14,
                'id' => 9,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            9 => 
            array (
                'added_by' => 1,
                'allotment_id' => 7,
                'amount' => '200000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 10,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            10 => 
            array (
                'added_by' => 1,
                'allotment_id' => 8,
                'amount' => '468000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 11,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            11 => 
            array (
                'added_by' => 1,
                'allotment_id' => 8,
                'amount' => '975000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 12,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            12 => 
            array (
                'added_by' => 1,
                'allotment_id' => 8,
                'amount' => '195000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 13,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            13 => 
            array (
                'added_by' => 1,
                'allotment_id' => 8,
                'amount' => '23000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 14,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            14 => 
            array (
                'added_by' => 1,
                'allotment_id' => 8,
                'amount' => '11700.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 15,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            15 => 
            array (
                'added_by' => 1,
                'allotment_id' => 9,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 16,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            16 => 
            array (
                'added_by' => 1,
                'allotment_id' => 9,
                'amount' => '143568.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 17,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            17 => 
            array (
                'added_by' => 1,
                'allotment_id' => 9,
                'amount' => '124236.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 18,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            18 => 
            array (
                'added_by' => 1,
                'allotment_id' => 10,
                'amount' => '650000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 19,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            19 => 
            array (
                'added_by' => 1,
                'allotment_id' => 11,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 20,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            20 => 
            array (
                'added_by' => 1,
                'allotment_id' => 11,
                'amount' => '65000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 18,
                'id' => 21,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            21 => 
            array (
                'added_by' => 1,
                'allotment_id' => 12,
                'amount' => '576000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 22,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            22 => 
            array (
                'added_by' => 1,
                'allotment_id' => 12,
                'amount' => '600000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 23,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            23 => 
            array (
                'added_by' => 1,
                'allotment_id' => 12,
                'amount' => '180000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 24,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            24 => 
            array (
                'added_by' => 1,
                'allotment_id' => 12,
                'amount' => '4000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 25,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            25 => 
            array (
                'added_by' => 1,
                'allotment_id' => 12,
                'amount' => '2000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 17,
                'id' => 26,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            26 => 
            array (
                'added_by' => 1,
                'allotment_id' => 13,
                'amount' => '38407.39',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 27,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            27 => 
            array (
                'added_by' => 1,
                'allotment_id' => 13,
                'amount' => '19160.90',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 28,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            28 => 
            array (
                'added_by' => 1,
                'allotment_id' => 14,
                'amount' => '608000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 29,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            29 => 
            array (
                'added_by' => 1,
                'allotment_id' => 15,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 30,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            30 => 
            array (
                'added_by' => 1,
                'allotment_id' => 15,
                'amount' => '143568.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 31,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            31 => 
            array (
                'added_by' => 1,
                'allotment_id' => 15,
                'amount' => '124236.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 32,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            32 => 
            array (
                'added_by' => 1,
                'allotment_id' => 16,
                'amount' => '304000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 33,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            33 => 
            array (
                'added_by' => 1,
                'allotment_id' => 17,
                'amount' => '352000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 14,
                'id' => 34,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            34 => 
            array (
                'added_by' => 1,
                'allotment_id' => 17,
                'amount' => '382000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 35,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            35 => 
            array (
                'added_by' => 1,
                'allotment_id' => 17,
                'amount' => '165600.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 19,
                'id' => 36,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            36 => 
            array (
                'added_by' => 1,
                'allotment_id' => 18,
                'amount' => '200000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 37,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            37 => 
            array (
                'added_by' => 1,
                'allotment_id' => 19,
                'amount' => '122000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 20,
                'id' => 38,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            38 => 
            array (
                'added_by' => 1,
                'allotment_id' => 20,
                'amount' => '650000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 39,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            39 => 
            array (
                'added_by' => 1,
                'allotment_id' => 20,
                'amount' => '816000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 40,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            40 => 
            array (
                'added_by' => 1,
                'allotment_id' => 20,
                'amount' => '325000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 41,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            41 => 
            array (
                'added_by' => 1,
                'allotment_id' => 20,
                'amount' => '16000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 17,
                'id' => 42,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            42 => 
            array (
                'added_by' => 1,
                'allotment_id' => 20,
                'amount' => '13000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 43,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            43 => 
            array (
                'added_by' => 1,
                'allotment_id' => 21,
                'amount' => '376000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 44,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            44 => 
            array (
                'added_by' => 1,
                'allotment_id' => 21,
                'amount' => '600000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 45,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            45 => 
            array (
                'added_by' => 1,
                'allotment_id' => 21,
                'amount' => '235000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 46,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            46 => 
            array (
                'added_by' => 1,
                'allotment_id' => 21,
                'amount' => '23500.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 47,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            47 => 
            array (
                'added_by' => 1,
                'allotment_id' => 21,
                'amount' => '8000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 48,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            48 => 
            array (
                'added_by' => 1,
                'allotment_id' => 22,
                'amount' => '19289.82',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 49,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            49 => 
            array (
                'added_by' => 1,
                'allotment_id' => 22,
                'amount' => '9649.84',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 50,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            50 => 
            array (
                'added_by' => 1,
                'allotment_id' => 22,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 51,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            51 => 
            array (
                'added_by' => 1,
                'allotment_id' => 22,
                'amount' => '143568.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 52,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            52 => 
            array (
                'added_by' => 1,
                'allotment_id' => 22,
                'amount' => '124236.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 53,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            53 => 
            array (
                'added_by' => 1,
                'allotment_id' => 23,
                'amount' => '944000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 54,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            54 => 
            array (
                'added_by' => 1,
                'allotment_id' => 24,
                'amount' => '19289.82',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 55,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            55 => 
            array (
                'added_by' => 1,
                'allotment_id' => 24,
                'amount' => '9649.86',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 56,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            56 => 
            array (
                'added_by' => 1,
                'allotment_id' => 25,
                'amount' => '952000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 57,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            57 => 
            array (
                'added_by' => 1,
                'allotment_id' => 25,
                'amount' => '565000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 58,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            58 => 
            array (
                'added_by' => 1,
                'allotment_id' => 25,
                'amount' => '1000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 59,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            59 => 
            array (
                'added_by' => 1,
                'allotment_id' => 26,
                'amount' => '7353.82',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 5,
                'id' => 60,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            60 => 
            array (
                'added_by' => 1,
                'allotment_id' => 27,
                'amount' => '952000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 61,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            61 => 
            array (
                'added_by' => 1,
                'allotment_id' => 28,
                'amount' => '71784.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 62,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            62 => 
            array (
                'added_by' => 1,
                'allotment_id' => 28,
                'amount' => '62118.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 63,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            63 => 
            array (
                'added_by' => 1,
                'allotment_id' => 29,
                'amount' => '544000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 64,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            64 => 
            array (
                'added_by' => 1,
                'allotment_id' => 30,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 65,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            65 => 
            array (
                'added_by' => 1,
                'allotment_id' => 30,
                'amount' => '71784.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 66,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            66 => 
            array (
                'added_by' => 1,
                'allotment_id' => 30,
                'amount' => '62118.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 67,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            67 => 
            array (
                'added_by' => 1,
                'allotment_id' => 31,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 68,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            68 => 
            array (
                'added_by' => 1,
                'allotment_id' => 32,
                'amount' => '19289.82',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 69,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            69 => 
            array (
                'added_by' => 1,
                'allotment_id' => 32,
                'amount' => '9649.84',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 70,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            70 => 
            array (
                'added_by' => 1,
                'allotment_id' => 32,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 71,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            71 => 
            array (
                'added_by' => 1,
                'allotment_id' => 32,
                'amount' => '143568.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 72,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            72 => 
            array (
                'added_by' => 1,
                'allotment_id' => 32,
                'amount' => '124236.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 73,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            73 => 
            array (
                'added_by' => 1,
                'allotment_id' => 33,
                'amount' => '2920000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 74,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            74 => 
            array (
                'added_by' => 1,
                'allotment_id' => 33,
                'amount' => '560000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 75,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            75 => 
            array (
                'added_by' => 1,
                'allotment_id' => 34,
                'amount' => '396000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 14,
                'id' => 76,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            76 => 
            array (
                'added_by' => 1,
                'allotment_id' => 35,
                'amount' => '540000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 77,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            77 => 
            array (
                'added_by' => 1,
                'allotment_id' => 35,
                'amount' => '1400000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 78,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            78 => 
            array (
                'added_by' => 1,
                'allotment_id' => 35,
                'amount' => '270000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 79,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            79 => 
            array (
                'added_by' => 1,
                'allotment_id' => 35,
                'amount' => '54000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 80,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            80 => 
            array (
                'added_by' => 1,
                'allotment_id' => 35,
                'amount' => '33200.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 81,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            81 => 
            array (
                'added_by' => 1,
                'allotment_id' => 36,
                'amount' => '1970000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 82,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            82 => 
            array (
                'added_by' => 1,
                'allotment_id' => 36,
                'amount' => '2038000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 83,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            83 => 
            array (
                'added_by' => 1,
                'allotment_id' => 36,
                'amount' => '985000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 84,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            84 => 
            array (
                'added_by' => 1,
                'allotment_id' => 37,
                'amount' => '19289.82',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 85,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            85 => 
            array (
                'added_by' => 1,
                'allotment_id' => 37,
                'amount' => '9649.86',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 86,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            86 => 
            array (
                'added_by' => 1,
                'allotment_id' => 38,
                'amount' => '143568.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 87,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            87 => 
            array (
                'added_by' => 1,
                'allotment_id' => 38,
                'amount' => '124236.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 88,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            88 => 
            array (
                'added_by' => 1,
                'allotment_id' => 39,
                'amount' => '3057000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 89,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            89 => 
            array (
                'added_by' => 1,
                'allotment_id' => 40,
                'amount' => '9192.28',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 5,
                'id' => 90,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            90 => 
            array (
                'added_by' => 1,
                'allotment_id' => 41,
                'amount' => '17000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 17,
                'id' => 91,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            91 => 
            array (
                'added_by' => 1,
                'allotment_id' => 41,
                'amount' => '480000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 92,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            92 => 
            array (
                'added_by' => 1,
                'allotment_id' => 42,
                'amount' => '60000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 18,
                'id' => 93,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            93 => 
            array (
                'added_by' => 1,
                'allotment_id' => 42,
                'amount' => '60000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 18,
                'id' => 94,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            94 => 
            array (
                'added_by' => 1,
                'allotment_id' => 43,
                'amount' => '546560.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 22,
                'id' => 95,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            95 => 
            array (
                'added_by' => 1,
                'allotment_id' => 44,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 13,
                'id' => 96,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            96 => 
            array (
                'added_by' => 1,
                'allotment_id' => 44,
                'amount' => '400000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 97,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            97 => 
            array (
                'added_by' => 1,
                'allotment_id' => 45,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 98,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            98 => 
            array (
                'added_by' => 1,
                'allotment_id' => 45,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 21,
                'id' => 99,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            99 => 
            array (
                'added_by' => 1,
                'allotment_id' => 46,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 100,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            100 => 
            array (
                'added_by' => 1,
                'allotment_id' => 46,
                'amount' => '148687.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 101,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            101 => 
            array (
                'added_by' => 1,
                'allotment_id' => 46,
                'amount' => '127656.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 102,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            102 => 
            array (
                'added_by' => 1,
                'allotment_id' => 47,
                'amount' => '725000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 103,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            103 => 
            array (
                'added_by' => 1,
                'allotment_id' => 47,
                'amount' => '3775000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 104,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            104 => 
            array (
                'added_by' => 1,
                'allotment_id' => 48,
                'amount' => '18000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 105,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            105 => 
            array (
                'added_by' => 1,
                'allotment_id' => 48,
                'amount' => '94305.84',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 106,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            106 => 
            array (
                'added_by' => 1,
                'allotment_id' => 48,
                'amount' => '47177.04',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 107,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            107 => 
            array (
                'added_by' => 1,
                'allotment_id' => 49,
                'amount' => '580000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 108,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            108 => 
            array (
                'added_by' => 1,
                'allotment_id' => 49,
                'amount' => '1216000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 109,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            109 => 
            array (
                'added_by' => 1,
                'allotment_id' => 49,
                'amount' => '294000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 110,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            110 => 
            array (
                'added_by' => 1,
                'allotment_id' => 49,
                'amount' => '145000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 111,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            111 => 
            array (
                'added_by' => 1,
                'allotment_id' => 49,
                'amount' => '115000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 112,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            112 => 
            array (
                'added_by' => 1,
                'allotment_id' => 51,
                'amount' => '13544.65',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 5,
                'id' => 113,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            113 => 
            array (
                'added_by' => 1,
                'allotment_id' => 52,
                'amount' => '2157000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 114,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            114 => 
            array (
                'added_by' => 1,
                'allotment_id' => 53,
                'amount' => '74343.60',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 115,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            115 => 
            array (
                'added_by' => 1,
                'allotment_id' => 53,
                'amount' => '63828.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 116,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            116 => 
            array (
                'added_by' => 1,
                'allotment_id' => 53,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 117,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            117 => 
            array (
                'added_by' => 1,
                'allotment_id' => 54,
                'amount' => '208000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 118,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            118 => 
            array (
                'added_by' => 1,
                'allotment_id' => 54,
                'amount' => '650000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 119,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            119 => 
            array (
                'added_by' => 1,
                'allotment_id' => 54,
                'amount' => '130000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 120,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            120 => 
            array (
                'added_by' => 1,
                'allotment_id' => 54,
                'amount' => '32000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 121,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            121 => 
            array (
                'added_by' => 1,
                'allotment_id' => 54,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 122,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            122 => 
            array (
                'added_by' => 1,
                'allotment_id' => 54,
                'amount' => '20000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 123,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            123 => 
            array (
                'added_by' => 1,
                'allotment_id' => 55,
                'amount' => '4000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 23,
                'id' => 124,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            124 => 
            array (
                'added_by' => 1,
                'allotment_id' => 56,
                'amount' => '250000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 125,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            125 => 
            array (
                'added_by' => 1,
                'allotment_id' => 56,
                'amount' => '630000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 126,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            126 => 
            array (
                'added_by' => 1,
                'allotment_id' => 56,
                'amount' => '125000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 127,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            127 => 
            array (
                'added_by' => 1,
                'allotment_id' => 56,
                'amount' => '56000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 17,
                'id' => 128,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            128 => 
            array (
                'added_by' => 1,
                'allotment_id' => 56,
                'amount' => '336000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 129,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            129 => 
            array (
                'added_by' => 1,
                'allotment_id' => 57,
                'amount' => '25357.47',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 130,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            130 => 
            array (
                'added_by' => 1,
                'allotment_id' => 57,
                'amount' => '12207.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 131,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            131 => 
            array (
                'added_by' => 1,
                'allotment_id' => 57,
                'amount' => '4500.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 132,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            132 => 
            array (
                'added_by' => 1,
                'allotment_id' => 57,
                'amount' => '54763.93',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 133,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            133 => 
            array (
                'added_by' => 1,
                'allotment_id' => 57,
                'amount' => '74343.60',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 134,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            134 => 
            array (
                'added_by' => 1,
                'allotment_id' => 57,
                'amount' => '63828.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 135,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            135 => 
            array (
                'added_by' => 1,
                'allotment_id' => 58,
                'amount' => '2785000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 136,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            136 => 
            array (
                'added_by' => 1,
                'allotment_id' => 58,
                'amount' => '535000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 137,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            137 => 
            array (
                'added_by' => 1,
                'allotment_id' => 59,
                'amount' => '25357.47',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 138,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            138 => 
            array (
                'added_by' => 1,
                'allotment_id' => 59,
                'amount' => '12207.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 139,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            139 => 
            array (
                'added_by' => 1,
                'allotment_id' => 59,
                'amount' => '4500.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 140,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            140 => 
            array (
                'added_by' => 1,
                'allotment_id' => 59,
                'amount' => '3296.27',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 141,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            141 => 
            array (
                'added_by' => 1,
                'allotment_id' => 60,
                'amount' => '296000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 142,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            142 => 
            array (
                'added_by' => 1,
                'allotment_id' => 60,
                'amount' => '930000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 143,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            143 => 
            array (
                'added_by' => 1,
                'allotment_id' => 60,
                'amount' => '185000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 144,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            144 => 
            array (
                'added_by' => 1,
                'allotment_id' => 61,
                'amount' => '1114000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 145,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            145 => 
            array (
                'added_by' => 1,
                'allotment_id' => 61,
                'amount' => '535000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 146,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            146 => 
            array (
                'added_by' => 1,
                'allotment_id' => 61,
                'amount' => '51000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 13,
                'id' => 147,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            147 => 
            array (
                'added_by' => 1,
                'allotment_id' => 61,
                'amount' => '300000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 148,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            148 => 
            array (
                'added_by' => 1,
                'allotment_id' => 62,
                'amount' => '50714.94',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 149,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            149 => 
            array (
                'added_by' => 1,
                'allotment_id' => 62,
                'amount' => '24414.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 150,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            150 => 
            array (
                'added_by' => 1,
                'allotment_id' => 62,
                'amount' => '9000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 151,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            151 => 
            array (
                'added_by' => 1,
                'allotment_id' => 62,
                'amount' => '14385.07',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 5,
                'id' => 152,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            152 => 
            array (
                'added_by' => 1,
                'allotment_id' => 63,
                'amount' => '84000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 24,
                'id' => 153,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            153 => 
            array (
                'added_by' => 1,
                'allotment_id' => 64,
                'amount' => '2344000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 154,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            154 => 
            array (
                'added_by' => 1,
                'allotment_id' => 64,
                'amount' => '324000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 155,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            155 => 
            array (
                'added_by' => 1,
                'allotment_id' => 65,
                'amount' => '432000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 156,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            156 => 
            array (
                'added_by' => 1,
                'allotment_id' => 65,
                'amount' => '352000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 157,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            157 => 
            array (
                'added_by' => 1,
                'allotment_id' => 65,
                'amount' => '1350000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 158,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            158 => 
            array (
                'added_by' => 1,
                'allotment_id' => 65,
                'amount' => '1130000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 159,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            159 => 
            array (
                'added_by' => 1,
                'allotment_id' => 65,
                'amount' => '270000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 160,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            160 => 
            array (
                'added_by' => 1,
                'allotment_id' => 65,
                'amount' => '5400.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 161,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            161 => 
            array (
                'added_by' => 1,
                'allotment_id' => 65,
                'amount' => '220000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 162,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            162 => 
            array (
                'added_by' => 1,
                'allotment_id' => 65,
                'amount' => '4400.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 163,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            163 => 
            array (
                'added_by' => 1,
                'allotment_id' => 66,
                'amount' => '150000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 164,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            164 => 
            array (
                'added_by' => 1,
                'allotment_id' => 66,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 21,
                'id' => 165,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            165 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '690000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 166,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            166 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '2415000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 167,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            167 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '345000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 168,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            168 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '13800.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 169,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            169 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '69000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 170,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            170 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '730000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 171,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            171 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '2555000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 172,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            172 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '365000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 173,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            173 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '73000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 13,
                'id' => 174,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            174 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '14600.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 175,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            175 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '180000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 176,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            176 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '630000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 177,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            177 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '90000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 178,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            178 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '18000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 13,
                'id' => 179,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            179 => 
            array (
                'added_by' => 1,
                'allotment_id' => 67,
                'amount' => '3600.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 180,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            180 => 
            array (
                'added_by' => 1,
                'allotment_id' => 68,
                'amount' => '3600.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 25,
                'id' => 181,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            181 => 
            array (
                'added_by' => 1,
                'allotment_id' => 69,
                'amount' => '354000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 24,
                'id' => 182,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            182 => 
            array (
                'added_by' => 1,
                'allotment_id' => 70,
                'amount' => '86609.60',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 24,
                'id' => 183,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            183 => 
            array (
                'added_by' => 1,
                'allotment_id' => 71,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 184,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            184 => 
            array (
                'added_by' => 1,
                'allotment_id' => 71,
                'amount' => '159472.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 185,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            185 => 
            array (
                'added_by' => 1,
                'allotment_id' => 71,
                'amount' => '269539.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 186,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            186 => 
            array (
                'added_by' => 1,
                'allotment_id' => 71,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 18,
                'id' => 187,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            187 => 
            array (
                'added_by' => 1,
                'allotment_id' => 72,
                'amount' => '200000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 188,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            188 => 
            array (
                'added_by' => 1,
                'allotment_id' => 72,
                'amount' => '700000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 189,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            189 => 
            array (
                'added_by' => 1,
                'allotment_id' => 72,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 190,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            190 => 
            array (
                'added_by' => 1,
                'allotment_id' => 72,
                'amount' => '20000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 13,
                'id' => 191,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            191 => 
            array (
                'added_by' => 1,
                'allotment_id' => 72,
                'amount' => '4000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 192,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            192 => 
            array (
                'added_by' => 1,
                'allotment_id' => 73,
                'amount' => '2260000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 193,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            193 => 
            array (
                'added_by' => 1,
                'allotment_id' => 73,
                'amount' => '360000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 194,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            194 => 
            array (
                'added_by' => 1,
                'allotment_id' => 73,
                'amount' => '1582000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 195,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            195 => 
            array (
                'added_by' => 1,
                'allotment_id' => 73,
                'amount' => '252000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 196,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            196 => 
            array (
                'added_by' => 1,
                'allotment_id' => 73,
                'amount' => '565000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 197,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            197 => 
            array (
                'added_by' => 1,
                'allotment_id' => 73,
                'amount' => '90000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 198,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            198 => 
            array (
                'added_by' => 1,
                'allotment_id' => 73,
                'amount' => '113000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 13,
                'id' => 199,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            199 => 
            array (
                'added_by' => 1,
                'allotment_id' => 73,
                'amount' => '18000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 13,
                'id' => 200,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            200 => 
            array (
                'added_by' => 1,
                'allotment_id' => 74,
                'amount' => '18000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 201,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            201 => 
            array (
                'added_by' => 1,
                'allotment_id' => 74,
                'amount' => '18235.08',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 5,
                'id' => 202,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            202 => 
            array (
                'added_by' => 1,
                'allotment_id' => 75,
                'amount' => '262000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 24,
                'id' => 203,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            203 => 
            array (
                'added_by' => 1,
                'allotment_id' => 76,
                'amount' => '1020000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 204,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            204 => 
            array (
                'added_by' => 1,
                'allotment_id' => 76,
                'amount' => '255000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 205,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            205 => 
            array (
                'added_by' => 1,
                'allotment_id' => 76,
                'amount' => '36000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 13,
                'id' => 206,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            206 => 
            array (
                'added_by' => 1,
                'allotment_id' => 76,
                'amount' => '3885000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 207,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            207 => 
            array (
                'added_by' => 1,
                'allotment_id' => 77,
                'amount' => '35600.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 30,
                'id' => 208,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            208 => 
            array (
                'added_by' => 1,
                'allotment_id' => 78,
                'amount' => '61600.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 209,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            209 => 
            array (
                'added_by' => 1,
                'allotment_id' => 78,
                'amount' => '30800.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 210,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            210 => 
            array (
                'added_by' => 1,
                'allotment_id' => 78,
                'amount' => '9000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 211,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            211 => 
            array (
                'added_by' => 1,
                'allotment_id' => 79,
                'amount' => '63520.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 212,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            212 => 
            array (
                'added_by' => 1,
                'allotment_id' => 79,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 21,
                'id' => 213,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            213 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '26400.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 214,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            214 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '13200.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 215,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            215 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '4500.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 216,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            216 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 217,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            217 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '275256.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 218,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            218 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '302784.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 31,
                'id' => 219,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            219 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '-102005.93',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 220,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            220 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '-26068.30',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 221,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            221 => 
            array (
                'added_by' => 1,
                'allotment_id' => 80,
                'amount' => '-7500.47',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 27,
                'id' => 222,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            222 => 
            array (
                'added_by' => 1,
                'allotment_id' => 81,
                'amount' => '160000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 32,
                'id' => 223,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            223 => 
            array (
                'added_by' => 1,
                'allotment_id' => 82,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 224,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            224 => 
            array (
                'added_by' => 1,
                'allotment_id' => 82,
                'amount' => '50000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 21,
                'id' => 225,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            225 => 
            array (
                'added_by' => 1,
                'allotment_id' => 82,
                'amount' => '2040.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 33,
                'id' => 226,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            226 => 
            array (
                'added_by' => 1,
                'allotment_id' => 83,
                'amount' => '104175.18',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 34,
                'id' => 227,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            227 => 
            array (
                'added_by' => 1,
                'allotment_id' => 84,
                'amount' => '3045000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 228,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            228 => 
            array (
                'added_by' => 1,
                'allotment_id' => 84,
                'amount' => '725000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 229,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            229 => 
            array (
                'added_by' => 1,
                'allotment_id' => 84,
                'amount' => '38000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 230,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            230 => 
            array (
                'added_by' => 1,
                'allotment_id' => 84,
                'amount' => '29000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 231,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            231 => 
            array (
                'added_by' => 1,
                'allotment_id' => 85,
                'amount' => '2030000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 232,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            232 => 
            array (
                'added_by' => 1,
                'allotment_id' => 86,
                'amount' => '17600.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 233,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            233 => 
            array (
                'added_by' => 1,
                'allotment_id' => 86,
                'amount' => '8800.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 234,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            234 => 
            array (
                'added_by' => 1,
                'allotment_id' => 86,
                'amount' => '4500.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 235,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            235 => 
            array (
                'added_by' => 1,
                'allotment_id' => 86,
                'amount' => '100000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 236,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            236 => 
            array (
                'added_by' => 1,
                'allotment_id' => 86,
                'amount' => '55051.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 237,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            237 => 
            array (
                'added_by' => 1,
                'allotment_id' => 86,
                'amount' => '46159.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 238,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            238 => 
            array (
                'added_by' => 1,
                'allotment_id' => 86,
                'amount' => '60556.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 31,
                'id' => 239,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            239 => 
            array (
                'added_by' => 1,
                'allotment_id' => 87,
                'amount' => '13782.84',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 5,
                'id' => 240,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            240 => 
            array (
                'added_by' => 1,
                'allotment_id' => 87,
                'amount' => '18000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 25,
                'id' => 241,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            241 => 
            array (
                'added_by' => 1,
                'allotment_id' => 88,
                'amount' => '26400.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 242,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            242 => 
            array (
                'added_by' => 1,
                'allotment_id' => 88,
                'amount' => '13200.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 243,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            243 => 
            array (
                'added_by' => 1,
                'allotment_id' => 88,
                'amount' => '4500.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 244,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            244 => 
            array (
                'added_by' => 1,
                'allotment_id' => 88,
                'amount' => '54845.60',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 245,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            245 => 
            array (
                'added_by' => 1,
                'allotment_id' => 88,
                'amount' => '82576.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 246,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            246 => 
            array (
                'added_by' => 1,
                'allotment_id' => 88,
                'amount' => '138477.60',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 247,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            247 => 
            array (
                'added_by' => 1,
                'allotment_id' => 89,
                'amount' => '630000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 248,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            248 => 
            array (
                'added_by' => 1,
                'allotment_id' => 89,
                'amount' => '90000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 249,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            249 => 
            array (
                'added_by' => 1,
                'allotment_id' => 89,
                'amount' => '595000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 250,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            250 => 
            array (
                'added_by' => 1,
                'allotment_id' => 89,
                'amount' => '85000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 251,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            251 => 
            array (
                'added_by' => 1,
                'allotment_id' => 89,
                'amount' => '4305000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 252,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            252 => 
            array (
                'added_by' => 1,
                'allotment_id' => 89,
                'amount' => '615000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 253,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            253 => 
            array (
                'added_by' => 1,
                'allotment_id' => 90,
                'amount' => '26400.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 254,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            254 => 
            array (
                'added_by' => 1,
                'allotment_id' => 90,
                'amount' => '13200.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 255,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            255 => 
            array (
                'added_by' => 1,
                'allotment_id' => 90,
                'amount' => '4500.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 256,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            256 => 
            array (
                'added_by' => 1,
                'allotment_id' => 90,
                'amount' => '9436.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 257,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            257 => 
            array (
                'added_by' => 1,
                'allotment_id' => 90,
                'amount' => '88182.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 258,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            258 => 
            array (
                'added_by' => 1,
                'allotment_id' => 90,
                'amount' => '5605.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 259,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            259 => 
            array (
                'added_by' => 1,
                'allotment_id' => 90,
                'amount' => '145576.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 260,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            260 => 
            array (
                'added_by' => 1,
                'allotment_id' => 90,
                'amount' => '7099.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 261,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            261 => 
            array (
                'added_by' => 1,
                'allotment_id' => 91,
                'amount' => '90000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 35,
                'id' => 262,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            262 => 
            array (
                'added_by' => 1,
                'allotment_id' => 92,
                'amount' => '140000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 263,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            263 => 
            array (
                'added_by' => 1,
                'allotment_id' => 92,
                'amount' => '1120000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 264,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            264 => 
            array (
                'added_by' => 1,
                'allotment_id' => 92,
                'amount' => '160000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 265,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            265 => 
            array (
                'added_by' => 1,
                'allotment_id' => 92,
                'amount' => '32000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 266,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            266 => 
            array (
                'added_by' => 1,
                'allotment_id' => 93,
                'amount' => '40000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 267,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            267 => 
            array (
                'added_by' => 1,
                'allotment_id' => 93,
                'amount' => '1582000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 268,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            268 => 
            array (
                'added_by' => 1,
                'allotment_id' => 94,
                'amount' => '52800.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 269,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            269 => 
            array (
                'added_by' => 1,
                'allotment_id' => 94,
                'amount' => '26400.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 270,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            270 => 
            array (
                'added_by' => 1,
                'allotment_id' => 94,
                'amount' => '9000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 271,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            271 => 
            array (
                'added_by' => 1,
                'allotment_id' => 94,
                'amount' => '21641.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 272,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            272 => 
            array (
                'added_by' => 1,
                'allotment_id' => 94,
                'amount' => '6400.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 30,
                'id' => 273,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            273 => 
            array (
                'added_by' => 1,
                'allotment_id' => 94,
                'amount' => '88182.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 274,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            274 => 
            array (
                'added_by' => 1,
                'allotment_id' => 94,
                'amount' => '145576.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 275,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            275 => 
            array (
                'added_by' => 1,
                'allotment_id' => 95,
                'amount' => '110000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 36,
                'id' => 276,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            276 => 
            array (
                'added_by' => 1,
                'allotment_id' => 96,
                'amount' => '29000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 277,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            277 => 
            array (
                'added_by' => 1,
                'allotment_id' => 97,
                'amount' => '2373000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 278,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            278 => 
            array (
                'added_by' => 1,
                'allotment_id' => 97,
                'amount' => '565000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 279,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            279 => 
            array (
                'added_by' => 1,
                'allotment_id' => 98,
                'amount' => '88182.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 280,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            280 => 
            array (
                'added_by' => 1,
                'allotment_id' => 98,
                'amount' => '145576.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 26,
                'id' => 281,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            281 => 
            array (
                'added_by' => 1,
                'allotment_id' => 99,
                'amount' => '52800.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 1,
                'id' => 282,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            282 => 
            array (
                'added_by' => 1,
                'allotment_id' => 99,
                'amount' => '26400.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 2,
                'id' => 283,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            283 => 
            array (
                'added_by' => 1,
                'allotment_id' => 99,
                'amount' => '9000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 284,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            284 => 
            array (
                'added_by' => 1,
                'allotment_id' => 99,
                'amount' => '107230.40',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 6,
                'id' => 285,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            285 => 
            array (
                'added_by' => 1,
                'allotment_id' => 99,
                'amount' => '20000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 30,
                'id' => 286,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            286 => 
            array (
                'added_by' => 1,
                'allotment_id' => 99,
                'amount' => '192628.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 31,
                'id' => 287,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            287 => 
            array (
                'added_by' => 1,
                'allotment_id' => 99,
                'amount' => '145576.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 288,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            288 => 
            array (
                'added_by' => 1,
                'allotment_id' => 99,
                'amount' => '176364.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 289,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            289 => 
            array (
                'added_by' => 1,
                'allotment_id' => 100,
                'amount' => '280000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 290,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            290 => 
            array (
                'added_by' => 1,
                'allotment_id' => 100,
                'amount' => '5250000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 291,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            291 => 
            array (
                'added_by' => 1,
                'allotment_id' => 100,
                'amount' => '750000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 292,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            292 => 
            array (
                'added_by' => 1,
                'allotment_id' => 101,
                'amount' => '14407.56',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 5,
                'id' => 293,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            293 => 
            array (
                'added_by' => 1,
                'allotment_id' => 102,
                'amount' => '18000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 3,
                'id' => 294,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            294 => 
            array (
                'added_by' => 1,
                'allotment_id' => 103,
                'amount' => '135093.60',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 34,
                'id' => 295,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            295 => 
            array (
                'added_by' => 1,
                'allotment_id' => 104,
                'amount' => '10958.40',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 31,
                'id' => 296,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            296 => 
            array (
                'added_by' => 1,
                'allotment_id' => 104,
                'amount' => '11210.40',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 297,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            297 => 
            array (
                'added_by' => 1,
                'allotment_id' => 104,
                'amount' => '7099.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 298,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            298 => 
            array (
                'added_by' => 1,
                'allotment_id' => 104,
                'amount' => '70387.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 34,
                'id' => 299,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            299 => 
            array (
                'added_by' => 1,
                'allotment_id' => 104,
                'amount' => '5680.80',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 34,
                'id' => 300,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            300 => 
            array (
                'added_by' => 1,
                'allotment_id' => 105,
                'amount' => '170000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 36,
                'id' => 301,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            301 => 
            array (
                'added_by' => 1,
                'allotment_id' => 106,
                'amount' => '187574.40',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 7,
                'id' => 302,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            302 => 
            array (
                'added_by' => 1,
                'allotment_id' => 106,
                'amount' => '152676.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 8,
                'id' => 303,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            303 => 
            array (
                'added_by' => 1,
                'allotment_id' => 106,
                'amount' => '203587.20',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 31,
                'id' => 304,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            304 => 
            array (
                'added_by' => 1,
                'allotment_id' => 107,
                'amount' => '160000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 9,
                'id' => 305,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            305 => 
            array (
                'added_by' => 1,
                'allotment_id' => 107,
                'amount' => '655000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 306,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            306 => 
            array (
                'added_by' => 1,
                'allotment_id' => 107,
                'amount' => '4585000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 307,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            307 => 
            array (
                'added_by' => 1,
                'allotment_id' => 107,
                'amount' => '2064000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 16,
                'id' => 308,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            308 => 
            array (
                'added_by' => 1,
                'allotment_id' => 107,
                'amount' => '26200.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 309,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            309 => 
            array (
                'added_by' => 1,
                'allotment_id' => 107,
                'amount' => '49000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 17,
                'id' => 310,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            310 => 
            array (
                'added_by' => 1,
                'allotment_id' => 107,
                'amount' => '930000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 36,
                'id' => 311,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            311 => 
            array (
                'added_by' => 1,
                'allotment_id' => 108,
                'amount' => '840000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 312,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            312 => 
            array (
                'added_by' => 1,
                'allotment_id' => 108,
                'amount' => '120000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 313,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            313 => 
            array (
                'added_by' => 1,
                'allotment_id' => 109,
                'amount' => '4235000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 10,
                'id' => 314,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            314 => 
            array (
                'added_by' => 1,
                'allotment_id' => 109,
                'amount' => '605000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 11,
                'id' => 315,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            315 => 
            array (
                'added_by' => 1,
                'allotment_id' => 109,
                'amount' => '121000.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 12,
                'id' => 316,
                'updated_at' => '2022-06-02 00:00:00',
            ),
            316 => 
            array (
                'added_by' => 1,
                'allotment_id' => 109,
                'amount' => '25800.00',
                'created_at' => '2022-06-02 00:00:00',
                'expense_id' => 15,
                'id' => 317,
                'updated_at' => '2022-06-02 00:00:00',
            ),
        ));
        
        
    }
}