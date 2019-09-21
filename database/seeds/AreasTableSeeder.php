<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('areas')->delete();
        
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Visakhapatnam City',
                'city_id' => '15',
                'lat' => 17.6868159,
                'long' => 83.2184815,
                'radius' => 37903.8203125,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Visakhapatnam Steel Project',
                'city_id' => '15',
                'lat' => 17.6345641,
                'long' => 83.1970511,
                'radius' => 7918.8876953125,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Dwaraka Nagar',
                'city_id' => '15',
                'lat' => 17.7307042,
                'long' => 83.308702,
                'radius' => 1478.267333984375,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gajuwaka',
                'city_id' => '15',
                'lat' => 17.6881121,
                'long' => 83.2131206,
                'radius' => 4072.09228515625,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kasimkota',
                'city_id' => '15',
                'lat' => 17.6664005,
                'long' => 82.9640142,
                'radius' => 1212.78271484375,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Payakaraopeta',
                'city_id' => '15',
                'lat' => 17.3617463,
                'long' => 82.55916030000002,
                'radius' => 2354.7548828125,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Pedda Waltair',
                'city_id' => '15',
                'lat' => 17.7305115,
                'long' => 83.3335151,
                'radius' => 1635.7451171875,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Pendurthi',
                'city_id' => '15',
                'lat' => 17.8059158,
                'long' => 83.2131206,
                'radius' => 3192.863037109375,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Revidi',
                'city_id' => '15',
                'lat' => 17.9653841,
                'long' => 83.3729288,
                'radius' => 505.8779602050781,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Atchutapuram',
                'city_id' => '15',
                'lat' => 17.5642144,
                'long' => 82.9788774,
                'radius' => 1004.7518310546875,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Akkayyapalem',
                'city_id' => '15',
                'lat' => 17.7383557,
                'long' => 83.3015401,
                'radius' => 1751.8031005859375,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Allipuram',
                'city_id' => '15',
                'lat' => 17.7160309,
                'long' => 83.2974204,
                'radius' => 1134.40625,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Anakapalle',
                'city_id' => '15',
                'lat' => 17.6895915,
                'long' => 82.99773309999999,
                'radius' => 4555.90234375,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Anandapuram',
                'city_id' => '15',
                'lat' => 17.9053509,
                'long' => 83.3629107,
                'radius' => 2940.10107421875,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Andhra University',
                'city_id' => '15',
                'lat' => 17.728816,
                'long' => 83.32008499999999,
                'radius' => 207.15609741210938,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Auto Nagar',
                'city_id' => '15',
                'lat' => 17.3578951,
                'long' => 78.5831181,
                'radius' => 3409.103515625,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'AVN College Road',
                'city_id' => '15',
                'lat' => 13.0678612,
                'long' => 80.2483005,
                'radius' => 608.7039184570312,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Bharat Heavy Plate',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Bheemunipatnam',
                'city_id' => '15',
                'lat' => 17.9075221,
                'long' => 83.4269996,
                'radius' => 4793.55810546875,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Butchirajupalem',
                'city_id' => '15',
                'lat' => 17.7436163,
                'long' => 83.232198,
                'radius' => 450.12274169921875,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Chengal Rao Peta',
                'city_id' => '15',
                'lat' => 17.6977363,
                'long' => 83.2968967,
                'radius' => 591.4802856445312,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'China Bazar',
                'city_id' => '15',
                'lat' => 22.5790441,
                'long' => 88.3509503,
                'radius' => 243.27333068847656,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'China Waltair',
                'city_id' => '15',
                'lat' => 17.7257642,
                'long' => 83.3361327,
                'radius' => 1401.86474609375,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Chintapalli',
                'city_id' => '15',
                'lat' => 17.8713171,
                'long' => 82.3533266,
                'radius' => 1523.770751953125,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Chittivalasa',
                'city_id' => '15',
                'lat' => 17.9340894,
                'long' => 83.4307965,
                'radius' => 225.44126892089844,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Chodavaram',
                'city_id' => '15',
                'lat' => 17.8313806,
                'long' => 82.9340217,
                'radius' => 2329.730224609375,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Daba Gardens',
                'city_id' => '15',
                'lat' => 17.7160309,
                'long' => 83.2974204,
                'radius' => 1134.40625,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Devarapalle',
                'city_id' => '15',
                'lat' => 17.9878214,
                'long' => 82.9837557,
                'radius' => 1038.04443359375,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Gandhigram',
                'city_id' => '15',
                'lat' => 10.2866333,
                'long' => 77.9318668,
                'radius' => 752.6646728515625,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Gandhinagaram',
                'city_id' => '15',
                'lat' => 17.0303221,
                'long' => 81.48419229999999,
                'radius' => 533.1777954101562,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Gavaravaram',
                'city_id' => '15',
                'lat' => 17.1135086,
                'long' => 81.425838,
                'radius' => 970.0297241210938,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Gandhi Market',
                'city_id' => '15',
                'lat' => 19.0464176,
                'long' => 72.89602500000001,
                'radius' => 2050.976806640625,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Gopalapatnam',
                'city_id' => '15',
                'lat' => 17.7479751,
                'long' => 83.2179139,
                'radius' => 1463.871337890625,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Govada',
                'city_id' => '15',
                'lat' => 16.0844813,
                'long' => 80.6645973,
                'radius' => 992.783447265625,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Gnanapuram',
                'city_id' => '15',
                'lat' => 17.7207517,
                'long' => 83.28471549999999,
                'radius' => 929.6456909179688,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'Isakathota Visakha',
                'city_id' => '15',
                'lat' => 17.7412623,
                'long' => 83.3248275,
                'radius' => 472.8518981933594,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Kailasapuram',
                'city_id' => '15',
                'lat' => 10.7791403,
                'long' => 78.7957856,
                'radius' => 1746.8707275390625,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Kanchara Palem',
                'city_id' => '15',
                'lat' => 17.7358253,
                'long' => 83.2733459,
                'radius' => 2334.213134765625,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Kaspa Jagannadhapuram',
                'city_id' => '15',
                'lat' => 17.8660337,
                'long' => 82.83444209999999,
                'radius' => 2131.93994140625,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'King George Hospital',
                'city_id' => '15',
                'lat' => 17.7087374,
                'long' => 83.3060385,
                'radius' => 207.16712951660156,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Lalitha Nagar',
                'city_id' => '15',
                'lat' => 17.735181,
                'long' => 83.301374,
                'radius' => 580.0453491210938,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Lawsons Bay Colony',
                'city_id' => '15',
                'lat' => 17.7328338,
                'long' => 83.3368562,
                'radius' => 633.3739624023438,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'LIC Building',
                'city_id' => '15',
                'lat' => 13.0642185,
                'long' => 80.2661507,
                'radius' => 42.562801361083984,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Maharanipeta',
                'city_id' => '15',
                'lat' => 17.7106864,
                'long' => 83.313465,
                'radius' => 1591.831298828125,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Makavarapalem',
                'city_id' => '15',
                'lat' => 17.6203466,
                'long' => 82.7158302,
                'radius' => 1387.095458984375,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Malkapuram',
                'city_id' => '15',
                'lat' => 17.6854667,
                'long' => 83.2432403,
                'radius' => 783.6495361328125,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Marripalem',
                'city_id' => '15',
                'lat' => 17.74089,
                'long' => 83.2492625,
                'radius' => 1441.73095703125,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Muppidi Colony',
                'city_id' => '15',
                'lat' => 17.4796125,
                'long' => 78.5586545,
                'radius' => 30.018918991088867,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Muvvalavanipalem',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Nausena Baugh',
                'city_id' => '15',
                'lat' => 17.6821757,
                'long' => 83.25461519999999,
                'radius' => 1271.2216796875,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Naval Dockyard',
                'city_id' => '15',
                'lat' => 18.9120413,
                'long' => 72.82562999999999,
                'radius' => 28.426908493041992,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Nehru Nagar',
                'city_id' => '15',
                'lat' => 10.5046292,
                'long' => 76.23550929999999,
                'radius' => 2247.757568359375,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Panduranga Puram',
                'city_id' => '15',
                'lat' => 15.4388696,
                'long' => 78.43327219999999,
                'radius' => 563.984375,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Pithapuram Colony',
                'city_id' => '15',
                'lat' => 17.734703,
                'long' => 83.3268324,
                'radius' => 792.6504516601562,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Salagramapuram',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Resapuvanipalem',
                'city_id' => '15',
                'lat' => 17.7336261,
                'long' => 83.31680709999999,
                'radius' => 442.81573486328125,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Sabbavaram',
                'city_id' => '15',
                'lat' => 17.7893431,
                'long' => 83.1179848,
                'radius' => 1580.313720703125,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Sileru Project',
                'city_id' => '15',
                'lat' => 18.0584877,
                'long' => 82.03254009999999,
                'radius' => 2200.413818359375,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Sriharipuram',
                'city_id' => '15',
                'lat' => 17.6874226,
                'long' => 83.235879,
                'radius' => 853.4215087890625,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Vaddadi',
                'city_id' => '15',
                'lat' => 17.849746,
                'long' => 82.8721383,
                'radius' => 1490.6181640625,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Vemulapudi',
                'city_id' => '15',
                'lat' => 17.6091338,
                'long' => 82.61187389999999,
                'radius' => 1088.0357666015625,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Visakha',
                'city_id' => '15',
                'lat' => 8.5254464,
                'long' => 76.9575772,
                'radius' => 12.80825424194336,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Visakhapatnam Zinc',
                'city_id' => '15',
                'lat' => 17.6956118,
                'long' => 83.2171374,
                'radius' => 1546.489501953125,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Waltair',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Yellamanchili',
                'city_id' => '15',
                'lat' => 17.5514849,
                'long' => 82.85832219999999,
                'radius' => 2409.35107421875,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Visakhapatnam Port',
                'city_id' => '15',
                'lat' => 17.6831436,
                'long' => 83.2398943,
                'radius' => 9424.4853515625,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Vepada',
                'city_id' => '15',
                'lat' => 18.0119217,
                'long' => 83.0804283,
                'radius' => 706.0371704101562,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Ravikamatham',
                'city_id' => '15',
                'lat' => 17.7926667,
                'long' => 82.8007667,
                'radius' => 660.430419921875,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Munagapaka',
                'city_id' => '15',
                'lat' => 17.6366778,
                'long' => 82.9949038,
                'radius' => 1409.3477783203125,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Mindi',
                'city_id' => '15',
                'lat' => 17.704261,
                'long' => 83.2117816,
                'radius' => 1061.6905517578125,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Medivada',
                'city_id' => '15',
                'lat' => 17.7843564,
                'long' => 82.7802592,
                'radius' => 8027.26123046875,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Simhachalam',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Araku Colony',
                'city_id' => '15',
                'lat' => 18.3185138,
                'long' => 82.8881565,
                'radius' => 134.810546875,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Bonangi',
                'city_id' => '15',
                'lat' => 17.614232,
                'long' => 83.07774479999999,
                'radius' => 1695.5506591796875,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'District Court Building',
                'city_id' => '15',
                'lat' => 22.7199354,
                'long' => 75.8641865,
                'radius' => 58.8687744140625,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Dondapudi',
                'city_id' => '15',
                'lat' => 17.2116436,
                'long' => 81.5473014,
                'radius' => 984.285400390625,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Etikoppaka',
                'city_id' => '15',
                'lat' => 17.4876831,
                'long' => 82.7468511,
                'radius' => 779.0073852539062,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Gangaraju Madugula',
                'city_id' => '15',
                'lat' => 18.0179511,
                'long' => 82.4982552,
                'radius' => 433.7362060546875,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Industrial Estate',
                'city_id' => '15',
                'lat' => 14.1100961,
                'long' => 78.1713657,
                'radius' => 208.95640563964844,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Kanithi Junction',
                'city_id' => '15',
                'lat' => 17.6627421,
                'long' => 83.1672031,
                'radius' => 21.519502639770508,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Kintada Kotapadu',
                'city_id' => '15',
                'lat' => 17.8549898,
                'long' => 83.01733860000002,
                'radius' => 1871.0489501953125,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Peda Bayalu',
                'city_id' => '15',
                'lat' => 18.0123157,
                'long' => 82.6457824,
                'radius' => 2063.419189453125,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Naval Base',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Turners Choultry',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Srungavarapukota',
                'city_id' => '15',
                'lat' => 18.1111803,
                'long' => 83.13930069999999,
                'radius' => 2032.006591796875,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Sunkari Metta',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Visakhapatnam Bus Station',
                'city_id' => '15',
                'lat' => 17.7668055,
                'long' => 83.2480916,
                'radius' => 94.61095428466797,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Bharatiya Vidya Bhavan',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Railway New Colony',
                'city_id' => '15',
                'lat' => 17.7277843,
                'long' => 83.2974188,
                'radius' => 1708.870361328125,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Government General Hospital',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Pedagummuluru',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'S. Rayavaram',
                'city_id' => '15',
                'lat' => 17.454556,
                'long' => 82.8061559,
                'radius' => 743.2396850585938,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Koduru',
                'city_id' => '15',
                'lat' => 16.008622,
                'long' => 81.03406009999999,
                'radius' => 2242.40625,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Kothuru',
                'city_id' => '15',
                'lat' => 17.7415137,
                'long' => 82.8004299,
                'radius' => 219.46583557128906,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Hukumpeta',
                'city_id' => '15',
                'lat' => 18.1508937,
                'long' => 82.6928925,
                'radius' => 831.676025390625,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Kurupam Market',
                'city_id' => '15',
                'lat' => 18.8668799,
                'long' => 83.5509886,
                'radius' => 1556.9947509765625,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Lakkavaram',
                'city_id' => '15',
                'lat' => 15.6994981,
                'long' => 79.79465119999999,
                'radius' => 1334.2027587890625,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Lalitha Colony',
                'city_id' => '15',
                'lat' => 17.7191618,
                'long' => 83.30406889999999,
                'radius' => 177.53807067871094,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Madugula',
                'city_id' => '15',
                'lat' => 17.9168233,
                'long' => 82.81423889999999,
                'radius' => 1242.778564453125,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Malki Mohammad',
                'city_id' => '15',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Rajarhat',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Tollygunge',
                'city_id' => '14',
                'lat' => 22.4986357,
                'long' => 88.3453906,
                'radius' => 2625.50634765625,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Baruipur',
                'city_id' => '14',
                'lat' => 22.3596751,
                'long' => 88.4317758,
                'radius' => 2788.228515625,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Garia',
                'city_id' => '14',
                'lat' => 22.4629461,
                'long' => 88.3967536,
                'radius' => 3939.28857421875,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Barasat',
                'city_id' => '14',
                'lat' => 22.7228159,
                'long' => 88.480552,
                'radius' => 4227.0888671875,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Ballygunge',
                'city_id' => '14',
                'lat' => 22.5279046,
                'long' => 88.36248610000001,
                'radius' => 2044.52734375,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Barrackpore',
                'city_id' => '14',
                'lat' => 22.7674278,
                'long' => 88.3883455,
                'radius' => 7206.078125,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Baguiati',
                'city_id' => '14',
                'lat' => 22.6167843,
                'long' => 88.4274592,
                'radius' => 1972.4560546875,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Alipore',
                'city_id' => '14',
                'lat' => 22.5248472,
                'long' => 88.3312187,
                'radius' => 3344.74609375,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Santoshpur',
                'city_id' => '14',
                'lat' => 22.5269379,
                'long' => 88.2551517,
                'radius' => 4524.23486328125,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Bansdroni',
                'city_id' => '14',
                'lat' => 22.4696493,
                'long' => 88.3631369,
                'radius' => 1413.80419921875,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Narendrapur',
                'city_id' => '14',
                'lat' => 22.4391117,
                'long' => 88.3967536,
                'radius' => 4321.42724609375,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Behala',
                'city_id' => '14',
                'lat' => 22.4981402,
                'long' => 88.3108378,
                'radius' => 3484.863037109375,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Dakshineswar',
                'city_id' => '14',
                'lat' => 22.6574479,
                'long' => 88.36395929999999,
                'radius' => 1406.756591796875,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Amtala',
                'city_id' => '14',
                'lat' => 23.9309782,
                'long' => 88.4476565,
                'radius' => 1721.73583984375,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Kankurgachi',
                'city_id' => '14',
                'lat' => 22.5780247,
                'long' => 88.3902174,
                'radius' => 1858.0594482421875,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => '24 Parganas',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => '24 Parganas South',
                'city_id' => '14',
                'lat' => 22.1352378,
                'long' => 88.4016041,
                'radius' => 94234.6015625,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Acharya Jagadish Chandra Bose Ro',
                'city_id' => '14',
                'lat' => 22.5503988,
                'long' => 88.36285180000002,
                'radius' => 2944.07666015625,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Acharya Profulla Chandra Road',
                'city_id' => '14',
                'lat' => 22.5817067,
                'long' => 88.3742099,
                'radius' => 2234.114013671875,
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Agarpara',
                'city_id' => '14',
                'lat' => 22.6816847,
                'long' => 88.38485589999999,
                'radius' => 3560.22216796875,
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Alambazar',
                'city_id' => '14',
                'lat' => 22.6495466,
                'long' => 88.3633918,
                'radius' => 869.9280395507812,
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Alipur',
                'city_id' => '14',
                'lat' => 28.7972263,
                'long' => 77.13313629999999,
                'radius' => 3350.824951171875,
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Alipur Road',
                'city_id' => '14',
                'lat' => 22.5089094,
                'long' => 88.3336398,
                'radius' => 1223.1566162109375,
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Amartala Street',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Amherst Street',
                'city_id' => '14',
                'lat' => 22.5777658,
                'long' => 88.3692471,
                'radius' => 699.2799072265625,
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Anandpur',
                'city_id' => '14',
                'lat' => 31.2344015,
                'long' => 76.5054652,
                'radius' => 1825.47216796875,
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Andul Road',
                'city_id' => '14',
                'lat' => 22.5863731,
                'long' => 88.2498722,
                'radius' => 5715.72265625,
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Ariadaha',
                'city_id' => '14',
                'lat' => 22.6444014,
                'long' => 88.3700662,
                'radius' => 1813.9482421875,
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Armenian Street',
                'city_id' => '14',
                'lat' => 13.0924793,
                'long' => 80.2882848,
                'radius' => 447.4302062988281,
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Ashutosh Mukherjee Road',
                'city_id' => '14',
                'lat' => 22.5345383,
                'long' => 88.346127,
                'radius' => 817.4033813476562,
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'B. B. D. Bag Dalhousie Square',
                'city_id' => '14',
                'lat' => 22.5711841,
                'long' => 88.3470047,
                'radius' => 1708.7628173828125,
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Bagh Bazar',
                'city_id' => '14',
                'lat' => 22.6026086,
                'long' => 88.3658993,
                'radius' => 1014.89306640625,
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Bagha Jatin',
                'city_id' => '14',
                'lat' => 22.4833003,
                'long' => 88.3786818,
                'radius' => 1369.989501953125,
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Baguihati',
                'city_id' => '14',
                'lat' => 22.6107101,
                'long' => 88.42706020000001,
                'radius' => 904.4010009765625,
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Bally',
                'city_id' => '14',
                'lat' => 22.645734,
                'long' => 88.34786,
                'radius' => 2002.4876708984375,
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Ballygunge Circular Road',
                'city_id' => '14',
                'lat' => 22.527928,
                'long' => 88.36040829999999,
                'radius' => 616.6322021484375,
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Ballygunge Phari',
                'city_id' => '14',
                'lat' => 22.5281267,
                'long' => 88.3658883,
                'radius' => 204.19891357421875,
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Ballygunge Place',
                'city_id' => '14',
                'lat' => 22.5279046,
                'long' => 88.36248610000001,
                'radius' => 2044.52734375,
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Bandel',
                'city_id' => '14',
                'lat' => 22.9274222,
                'long' => 88.37734619999999,
                'radius' => 5926.134765625,
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Bangur Avenue',
                'city_id' => '14',
                'lat' => 22.6060853,
                'long' => 88.4138969,
                'radius' => 247.61837768554688,
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Barabazar',
                'city_id' => '14',
                'lat' => 22.5817406,
                'long' => 88.3543972,
                'radius' => 879.385986328125,
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Barahanagar',
                'city_id' => '14',
                'lat' => 22.6383016,
                'long' => 88.36543859999999,
                'radius' => 3456.307373046875,
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Barisha',
                'city_id' => '14',
                'lat' => 22.4852952,
                'long' => 88.3206664,
                'radius' => 1261.9322509765625,
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Barrackpore Trunk Road',
                'city_id' => '14',
                'lat' => 22.6812304,
                'long' => 88.3757267,
                'radius' => 8941.296875,
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Bata Nagar',
                'city_id' => '14',
                'lat' => 22.5132689,
                'long' => 88.2229909,
                'radius' => 2580.4638671875,
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Beadon Street',
                'city_id' => '14',
                'lat' => 22.588776,
                'long' => 88.3707336,
                'radius' => 43.2681770324707,
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Beck Bagan',
                'city_id' => '14',
                'lat' => 22.5385631,
                'long' => 88.3615713,
                'radius' => 682.918701171875,
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Behala Chowrasta',
                'city_id' => '14',
                'lat' => 22.4870522,
                'long' => 88.31317159999999,
                'radius' => 204.22683715820312,
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Belgachia',
                'city_id' => '14',
                'lat' => 22.6041337,
                'long' => 88.38527069999999,
                'radius' => 1291.0859375,
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Belghoriya',
                'city_id' => '14',
                'lat' => 22.6655601,
                'long' => 88.37924,
                'radius' => 2678.248291015625,
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Beliaghata',
                'city_id' => '14',
                'lat' => 22.5667378,
                'long' => 88.39298749999999,
                'radius' => 2033.2119140625,
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Belur',
                'city_id' => '14',
                'lat' => 13.1623166,
                'long' => 75.8679195,
                'radius' => 1981.039794921875,
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Bentick Street',
                'city_id' => '14',
                'lat' => 22.5698373,
                'long' => 88.3531189,
                'radius' => 465.5203857421875,
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Bepin Behari Ganguly Street',
                'city_id' => '14',
                'lat' => 22.569418,
                'long' => 88.36117689999999,
                'radius' => 1143.5672607421875,
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Bhawanipur',
                'city_id' => '14',
                'lat' => 22.5332356,
                'long' => 88.3459362,
                'radius' => 1651.4134521484375,
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Bhowanipur',
                'city_id' => '14',
                'lat' => 22.5332356,
                'long' => 88.3459362,
                'radius' => 1651.4134521484375,
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Bidhan Nagar',
                'city_id' => '14',
                'lat' => 22.5867296,
                'long' => 88.41709879999999,
                'radius' => 7976.8271484375,
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Bidhan Sarani',
                'city_id' => '14',
                'lat' => 22.6034849,
                'long' => 88.374313,
                'radius' => 948.7188720703125,
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Binoy Badal Dinesh Bag',
                'city_id' => '14',
                'lat' => 22.5711841,
                'long' => 88.3470047,
                'radius' => 1708.7628173828125,
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Birati',
                'city_id' => '14',
                'lat' => 22.6636028,
                'long' => 88.42728120000001,
                'radius' => 3063.291748046875,
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Bon Hoogly',
                'city_id' => '14',
                'lat' => 22.649365,
                'long' => 88.3805094,
                'radius' => 932.8697509765625,
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Bow Bazar',
                'city_id' => '14',
                'lat' => 22.5668237,
                'long' => 88.3614764,
                'radius' => 1171.654296875,
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Brabourne Road',
                'city_id' => '14',
                'lat' => 22.5785427,
                'long' => 88.35232549999999,
                'radius' => 723.3707275390625,
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Brace Bridge Road',
                'city_id' => '14',
                'lat' => 22.5437426,
                'long' => 88.30667749999999,
                'radius' => 92.72698974609375,
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'British India Street',
                'city_id' => '14',
                'lat' => 22.5682862,
                'long' => 88.35104199999999,
                'radius' => 179.13731384277344,
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Budge Budge Road',
                'city_id' => '14',
                'lat' => 22.4814021,
                'long' => 88.1827273,
                'radius' => 359.4013366699219,
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Burrabazar',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Burtolla Street',
                'city_id' => '14',
                'lat' => 22.5825256,
                'long' => 88.35406239999999,
                'radius' => 364.506591796875,
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'C I T Scheme',
                'city_id' => '14',
                'lat' => 22.5147244,
                'long' => 88.3606539,
                'radius' => 204.20802307128906,
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Camac Street',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Canning Street',
                'city_id' => '14',
                'lat' => 22.5714976,
                'long' => 88.35838919999999,
                'radius' => 130.94570922851562,
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Central',
                'city_id' => '14',
                'lat' => 22.9747007,
                'long' => 88.43383419999999,
                'radius' => 211.6013641357422,
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Chandannagar',
                'city_id' => '14',
                'lat' => 22.8647723,
                'long' => 88.36326,
                'radius' => 3364.140869140625,
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Chandni Chowk',
                'city_id' => '14',
                'lat' => 28.6505942,
                'long' => 77.23032839999999,
                'radius' => 1977.4957275390625,
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Chandni Chowk Street',
                'city_id' => '14',
                'lat' => 22.5659481,
                'long' => 88.3553111,
                'radius' => 217.25717163085938,
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Chetla',
                'city_id' => '14',
                'lat' => 22.5154308,
                'long' => 88.33494089999999,
                'radius' => 975.9888916015625,
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'Chetla Road',
                'city_id' => '14',
                'lat' => 22.5130827,
                'long' => 88.33990539999999,
                'radius' => 1128.2532958984375,
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Chinsurah',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Chittaranjan Avenue',
                'city_id' => '14',
                'lat' => 22.5804966,
                'long' => 88.3611692,
                'radius' => 1851.721923828125,
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Chowranghee',
                'city_id' => '14',
                'lat' => 22.5516889,
                'long' => 88.3491439,
                'radius' => 1538.9046630859375,
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Chowranghee Lane',
                'city_id' => '14',
                'lat' => 22.5570448,
                'long' => 88.3528927,
                'radius' => 150.0975799560547,
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'Chowranghee Road',
                'city_id' => '14',
                'lat' => 22.5536512,
                'long' => 88.34977300000001,
                'radius' => 1416.3046875,
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Circus Avenue',
                'city_id' => '14',
                'lat' => 22.5411295,
                'long' => 88.35900079999999,
                'radius' => 922.8367309570312,
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'CIT Road',
                'city_id' => '14',
                'lat' => 22.5511932,
                'long' => 88.3712463,
                'radius' => 915.168701171875,
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'Clive Row',
                'city_id' => '14',
                'lat' => 22.578629,
                'long' => 88.3495183,
                'radius' => 204.1645050048828,
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'College Square',
                'city_id' => '14',
                'lat' => 22.5742457,
                'long' => 88.3628573,
                'radius' => 577.2308959960938,
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'College Street',
                'city_id' => '14',
                'lat' => 22.5742457,
                'long' => 88.3628573,
                'radius' => 577.2308959960938,
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Cossipore',
                'city_id' => '14',
                'lat' => 22.6170463,
                'long' => 88.3713578,
                'radius' => 1533.2161865234375,
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Cotton Street',
                'city_id' => '14',
                'lat' => 22.58142,
                'long' => 88.3554302,
                'radius' => 185.56053161621094,
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Dakhineswar',
                'city_id' => '14',
                'lat' => 22.6574479,
                'long' => 88.36395929999999,
                'radius' => 1406.756591796875,
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Dalhousie',
                'city_id' => '14',
                'lat' => 32.5387385,
                'long' => 75.97099779999999,
                'radius' => 2916.948486328125,
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Dankuni',
                'city_id' => '14',
                'lat' => 22.6808348,
                'long' => 88.29293129999999,
                'radius' => 3962.570068359375,
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Deshapriya Park0',
                'city_id' => '14',
                'lat' => 22.517799,
                'long' => 88.35372009999999,
                'radius' => 204.2059326171875,
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Deshbandhu Nagar',
                'city_id' => '14',
                'lat' => 22.618568,
                'long' => 88.42611409999999,
                'radius' => 162.11866760253906,
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Deshbandhunagar',
                'city_id' => '14',
                'lat' => 22.618568,
                'long' => 88.42611409999999,
                'radius' => 162.11866760253906,
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'Dhakuria',
                'city_id' => '14',
                'lat' => 22.5104166,
                'long' => 88.37109749999999,
                'radius' => 2905.056396484375,
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Dhapa',
                'city_id' => '14',
                'lat' => 22.560235,
                'long' => 88.4421081,
                'radius' => 6596.1103515625,
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Dharmatala',
                'city_id' => '14',
                'lat' => 22.5600686,
                'long' => 88.3524678,
                'radius' => 696.7395629882812,
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Dharmatala Road',
                'city_id' => '14',
                'lat' => 22.6114806,
                'long' => 88.3399307,
                'radius' => 976.3079223632812,
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Dharmatalla',
                'city_id' => '14',
                'lat' => 22.5600686,
                'long' => 88.3524678,
                'radius' => 696.7395629882812,
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Diamond Harbour Road',
                'city_id' => '14',
                'lat' => 22.3566038,
                'long' => 88.27020519999999,
                'radius' => 21789.015625,
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Dobson Road',
                'city_id' => '14',
                'lat' => 22.5904464,
                'long' => 88.3408772,
                'radius' => 407.1148681640625,
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Dover Lane',
                'city_id' => '14',
                'lat' => 22.5224063,
                'long' => 88.3625977,
                'radius' => 414.0146179199219,
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Dum Dum Cant',
                'city_id' => '14',
                'lat' => 22.6470514,
                'long' => 88.43168299999999,
                'radius' => 4277.7314453125,
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Dum Dum Park',
                'city_id' => '14',
                'lat' => 22.6076364,
                'long' => 88.4173644,
                'radius' => 905.8174438476562,
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Dum Dum Road',
                'city_id' => '14',
                'lat' => 22.6204679,
                'long' => 88.39686139999999,
                'radius' => 1850.4259033203125,
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Dunlop',
                'city_id' => '14',
                'lat' => 22.651934,
                'long' => 88.3785594,
                'radius' => 1088.974365234375,
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'E.M Bypass',
                'city_id' => '14',
                'lat' => 22.4893006,
                'long' => 88.395217,
                'radius' => 13210.3203125,
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Eastern Metropolitan Bypass',
                'city_id' => '14',
                'lat' => 22.4893006,
                'long' => 88.395217,
                'radius' => 13210.3203125,
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Ekbalpore',
                'city_id' => '14',
                'lat' => 22.5341324,
                'long' => 88.3238482,
                'radius' => 156.5593719482422,
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Elgin',
                'city_id' => '14',
                'lat' => 22.5437087,
                'long' => 88.3548955,
                'radius' => 1149.2025146484375,
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Elgin Road',
                'city_id' => '14',
                'lat' => 22.5377811,
                'long' => 88.3507267,
                'radius' => 425.2799072265625,
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Entaly',
                'city_id' => '14',
                'lat' => 22.5560521,
                'long' => 88.37002749999999,
                'radius' => 1169.212890625,
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Ezra Street',
                'city_id' => '14',
                'lat' => 22.5756156,
                'long' => 88.35322099999999,
                'radius' => 348.1020202636719,
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Fort William',
                'city_id' => '14',
                'lat' => 22.5546875,
                'long' => 88.33607649999999,
                'radius' => 1341.7806396484375,
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'Free School Street',
                'city_id' => '14',
                'lat' => 22.5582932,
                'long' => 88.3547316,
                'radius' => 668.249755859375,
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'G P O',
                'city_id' => '14',
                'lat' => 22.5728858,
                'long' => 88.34755229999999,
                'radius' => 204.16842651367188,
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'G. T. Road',
                'city_id' => '14',
                'lat' => 30.6610549,
                'long' => 76.2965299,
                'radius' => 277460.78125,
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'G.P.O',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Ganesh Chandra Avenue',
                'city_id' => '14',
                'lat' => 22.5675537,
                'long' => 88.3564717,
                'radius' => 471.51910400390625,
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Garden Reach',
                'city_id' => '14',
                'lat' => 22.5334555,
                'long' => 88.2996294,
                'radius' => 3468.9482421875,
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Garia Main Road',
                'city_id' => '14',
                'lat' => 22.4573346,
                'long' => 88.3845767,
                'radius' => 1146.8297119140625,
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Gariahat',
                'city_id' => '14',
                'lat' => 22.5170076,
                'long' => 88.365819,
                'radius' => 808.7984008789062,
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Gariahat Road',
                'city_id' => '14',
                'lat' => 22.5157428,
                'long' => 88.36680229999999,
                'radius' => 1449.0828857421875,
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Ghughu Danga',
                'city_id' => '14',
                'lat' => 22.6189612,
                'long' => 88.3952377,
                'radius' => 726.8056640625,
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Girish Park',
                'city_id' => '14',
                'lat' => 22.5895372,
                'long' => 88.363483,
                'radius' => 204.1570587158203,
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Gobinda Chandra Khatick Road',
                'city_id' => '14',
                'lat' => 22.5552193,
                'long' => 88.38364349999999,
                'radius' => 410.9686279296875,
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Golf Green',
                'city_id' => '14',
                'lat' => 22.4931376,
                'long' => 88.3621781,
                'radius' => 612.8165283203125,
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Golpark',
                'city_id' => '14',
                'lat' => 22.5158681,
                'long' => 88.3651364,
                'radius' => 2004.3751220703125,
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Govinda Khattik Road',
                'city_id' => '14',
                'lat' => 22.539445,
                'long' => 88.386704,
                'radius' => 204.1912078857422,
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Grand Trunk Road',
                'city_id' => '14',
                'lat' => 30.6610549,
                'long' => 76.2965299,
                'radius' => 277460.78125,
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Haltu',
                'city_id' => '14',
                'lat' => 22.506616,
                'long' => 88.3901702,
                'radius' => 1824.7572021484375,
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Haridevpur',
                'city_id' => '14',
                'lat' => 22.479414,
                'long' => 88.3355732,
                'radius' => 911.7369384765625,
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Harish Mukherjee Road',
                'city_id' => '14',
                'lat' => 22.5325836,
                'long' => 88.34354909999999,
                'radius' => 1007.3040161132812,
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Hastings',
                'city_id' => '14',
                'lat' => 22.5487295,
                'long' => 88.33607649999999,
                'radius' => 1889.3153076171875,
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Hati Bagan',
                'city_id' => '14',
                'lat' => 22.5974903,
                'long' => 88.3706729,
                'radius' => 679.6904296875,
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Hatkhola',
                'city_id' => '14',
                'lat' => 22.5996535,
                'long' => 88.3608534,
                'radius' => 638.9682006835938,
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Hazra Road',
                'city_id' => '14',
                'lat' => 22.5244718,
                'long' => 88.35290359999999,
                'radius' => 1392.09765625,
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Hiland Park',
                'city_id' => '14',
                'lat' => 22.4845644,
                'long' => 88.3895541,
                'radius' => 204.22853088378906,
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Hindusthan Park',
                'city_id' => '14',
                'lat' => 22.5169831,
                'long' => 88.3633918,
                'radius' => 497.0646667480469,
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Ho Chi Minh Sarani',
                'city_id' => '14',
                'lat' => 22.487163,
                'long' => 88.3087254,
                'radius' => 136.52244567871094,
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Howrah A. C Market',
                'city_id' => '14',
                'lat' => 22.5914284,
                'long' => 88.3410286,
                'radius' => 176.70877075195312,
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Howrah Maidan',
                'city_id' => '14',
                'lat' => 22.5833782,
                'long' => 88.3337983,
                'radius' => 204.16127014160156,
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'India Exchange Place',
                'city_id' => '14',
                'lat' => 22.5744468,
                'long' => 88.35208469999999,
                'radius' => 347.11126708984375,
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'Invalid',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Jadavpur',
                'city_id' => '14',
                'lat' => 22.4939728,
                'long' => 88.37067119999999,
                'radius' => 1731.1763916015625,
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Jadavpur University',
                'city_id' => '14',
                'lat' => 22.4858161,
                'long' => 88.3825104,
                'radius' => 204.22767639160156,
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Jawaharlal Nehru Road',
                'city_id' => '14',
                'lat' => 22.5536512,
                'long' => 88.34977300000001,
                'radius' => 1416.3046875,
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Jessore Road',
                'city_id' => '14',
                'lat' => 22.6134659,
                'long' => 88.4065949,
                'radius' => 411.6031188964844,
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Jodhpur Park',
                'city_id' => '14',
                'lat' => 22.5058175,
                'long' => 88.3639986,
                'radius' => 762.8524780273438,
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Joka',
                'city_id' => '14',
                'lat' => 22.4530659,
                'long' => 88.3025054,
                'radius' => 2514.8662109375,
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'K. G. Basu Sarani',
                'city_id' => '14',
                'lat' => 22.5683301,
                'long' => 88.38605179999999,
                'radius' => 444.8259582519531,
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'Kalakar Street',
                'city_id' => '14',
                'lat' => 22.5838046,
                'long' => 88.3545286,
                'radius' => 323.8570861816406,
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Kalighat',
                'city_id' => '14',
                'lat' => 22.516951,
                'long' => 88.3458699,
                'radius' => 1678.738525390625,
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Kalikapur',
                'city_id' => '14',
                'lat' => 22.5009134,
                'long' => 88.39493449999999,
                'radius' => 715.12109375,
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Kalyani',
                'city_id' => '14',
                'lat' => 22.9750855,
                'long' => 88.43450779999999,
                'radius' => 5394.8134765625,
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'Kamarhati',
                'city_id' => '14',
                'lat' => 22.6846668,
                'long' => 88.3706491,
                'radius' => 2058.25634765625,
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Kanchrapara',
                'city_id' => '14',
                'lat' => 22.944101,
                'long' => 88.4335019,
                'radius' => 5008.36279296875,
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'Karl Marx Sarani',
                'city_id' => '14',
                'lat' => 22.5381626,
                'long' => 88.3123569,
                'radius' => 1887.6573486328125,
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Kasba',
                'city_id' => '14',
                'lat' => 22.5176176,
                'long' => 88.3840499,
                'radius' => 2118.61328125,
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Kasba Industrial Estate',
                'city_id' => '14',
                'lat' => 22.5133192,
                'long' => 88.4067571,
                'radius' => 441.8919982910156,
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Kashipur',
                'city_id' => '14',
                'lat' => 29.2104232,
                'long' => 78.9618845,
                'radius' => 4343.79833984375,
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Kestopur',
                'city_id' => '14',
                'lat' => 22.5954837,
                'long' => 88.4357144,
                'radius' => 2481.769775390625,
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Khardah',
                'city_id' => '14',
                'lat' => 22.7002943,
                'long' => 88.3753455,
                'radius' => 4942.5908203125,
            ),
            265 => 
            array (
                'id' => 266,
                'name' => 'Khidirpur',
                'city_id' => '14',
                'lat' => 22.54206,
                'long' => 88.3189579,
                'radius' => 1387.5941162109375,
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Kidderpore',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Kiran Sarkar Roy Road',
                'city_id' => '14',
                'lat' => 22.5698315,
                'long' => 88.344893,
                'radius' => 289.9168701171875,
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Kolkata Airport',
                'city_id' => '14',
                'lat' => 22.6520429,
                'long' => 88.4463299,
                'radius' => 204.1143798828125,
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Kolkata Maidan',
                'city_id' => '14',
                'lat' => 22.5544689,
                'long' => 88.340896,
                'radius' => 204.18096923828125,
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Konnagar',
                'city_id' => '14',
                'lat' => 22.7004725,
                'long' => 88.3190717,
                'radius' => 4901.31640625,
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Krishnapur',
                'city_id' => '14',
                'lat' => 22.5914526,
                'long' => 88.4379653,
                'radius' => 1542.475341796875,
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Lake Gardens',
                'city_id' => '14',
                'lat' => 22.5057437,
                'long' => 88.3567163,
                'radius' => 877.0653686523438,
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Lake Market',
                'city_id' => '14',
                'lat' => 22.515358,
                'long' => 88.35003979999999,
                'radius' => 527.5665283203125,
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Lake Road',
                'city_id' => '14',
                'lat' => 22.9720712,
                'long' => 88.4429243,
                'radius' => 762.0955200195312,
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Lake Town',
                'city_id' => '14',
                'lat' => 22.6069698,
                'long' => 88.40281379999999,
                'radius' => 1706.72705078125,
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Lal Bazar Street',
                'city_id' => '14',
                'lat' => 22.5725214,
                'long' => 88.35167229999999,
                'radius' => 169.2153778076172,
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Lala Lajpat Rai Sarani',
                'city_id' => '14',
                'lat' => 22.5377811,
                'long' => 88.3507267,
                'radius' => 425.2799072265625,
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Lansdown Place',
                'city_id' => '14',
                'lat' => 22.5239162,
                'long' => 88.35337109999999,
                'radius' => 200.73880004882812,
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Lansdown Road',
                'city_id' => '14',
                'lat' => 29.79336349999999,
                'long' => 78.5973001,
                'radius' => 10886.40234375,
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Lansdowne',
                'city_id' => '14',
                'lat' => 29.8377457,
                'long' => 78.6871069,
                'radius' => 2047.9622802734375,
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Lenin Sarani',
                'city_id' => '14',
                'lat' => 26.7362476,
                'long' => 88.4262996,
                'radius' => 400.6391906738281,
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Liluah',
                'city_id' => '14',
                'lat' => 22.6170686,
                'long' => 88.3190717,
                'radius' => 3954.850341796875,
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Lindsay Street',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Lord Sinha Road',
                'city_id' => '14',
                'lat' => 22.5436671,
                'long' => 88.3488718,
                'radius' => 236.55360412597656,
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Loudon Street',
                'city_id' => '14',
                'lat' => 22.5448988,
                'long' => 88.35666040000001,
                'radius' => 460.0399475097656,
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'Madan Street',
                'city_id' => '14',
                'lat' => 22.5658453,
                'long' => 88.35391349999999,
                'radius' => 157.2926025390625,
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Madhyamgram',
                'city_id' => '14',
                'lat' => 22.6925015,
                'long' => 88.465448,
                'radius' => 7513.29931640625,
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Maharsi Debendra Road',
                'city_id' => '14',
                'lat' => 22.5909955,
                'long' => 88.3532546,
                'radius' => 913.8550415039062,
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Mahatma Gandhi Road',
                'city_id' => '14',
                'lat' => 12.9726966,
                'long' => 77.6195894,
                'radius' => 479410.03125,
            ),
            290 => 
            array (
                'id' => 291,
                'name' => 'Mahestala',
                'city_id' => '14',
                'lat' => 22.511976,
                'long' => 88.2509941,
                'radius' => 8142.25537109375,
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Maidan',
                'city_id' => '14',
                'lat' => 22.5544689,
                'long' => 88.340896,
                'radius' => 204.18096923828125,
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Malda',
                'city_id' => '14',
                'lat' => 25.1785773,
                'long' => 88.24611829999999,
                'radius' => 75968.2734375,
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Mallik Bazar',
                'city_id' => '14',
                'lat' => 22.5474757,
                'long' => 88.35914389999999,
                'radius' => 787.4749755859375,
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Mango Lane',
                'city_id' => '14',
                'lat' => 33.7023029,
                'long' => -116.209678,
                'radius' => 187.2384490966797,
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Manick Tala',
                'city_id' => '14',
                'lat' => 22.7469794,
                'long' => 88.3518608,
                'radius' => 758.0374145507812,
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'Manick Tala Main Road',
                'city_id' => '14',
                'lat' => 22.5803204,
                'long' => 88.389786,
                'radius' => 1246.92724609375,
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Middleton Row',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Middleton Street',
                'city_id' => '14',
                'lat' => 22.5489421,
                'long' => 88.35112509999999,
                'radius' => 256.01800537109375,
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Minto Park',
                'city_id' => '14',
                'lat' => 25.4318098,
                'long' => 81.86267939999999,
                'radius' => 202.11561584472656,
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Mirza Galib Street',
                'city_id' => '14',
                'lat' => 22.5582932,
                'long' => 88.3547316,
                'radius' => 668.249755859375,
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Moti Jheel',
                'city_id' => '14',
                'lat' => 26.2531978,
                'long' => 78.1421905,
                'radius' => 941.0656127929688,
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Moulali',
                'city_id' => '14',
                'lat' => 22.559441,
                'long' => 88.3639986,
                'radius' => 679.2333374023438,
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Nadia',
                'city_id' => '14',
                'lat' => 23.4709656,
                'long' => 88.55653099999999,
                'radius' => 78908.40625,
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'Nagar Bazar',
                'city_id' => '14',
                'lat' => 22.6217922,
                'long' => 88.4179705,
                'radius' => 668.6043090820312,
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Naihati',
                'city_id' => '14',
                'lat' => 22.8928724,
                'long' => 88.42203239999999,
                'radius' => 3024.162109375,
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Naktala',
                'city_id' => '14',
                'lat' => 22.4730953,
                'long' => 88.36885269999999,
                'radius' => 1322.813232421875,
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Narkel Danga',
                'city_id' => '14',
                'lat' => 22.492228,
                'long' => 88.2059418,
                'radius' => 648.5723876953125,
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Nawpara',
                'city_id' => '14',
                'lat' => 22.6428013,
                'long' => 88.3916662,
                'radius' => 1159.8968505859375,
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'Netaji Subhas Chandra Bose Road',
                'city_id' => '14',
                'lat' => 22.4561543,
                'long' => 88.3856686,
                'radius' => 6398.14111328125,
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'Netaji Subhas Road',
                'city_id' => '14',
                'lat' => 22.5823377,
                'long' => 88.31992989999999,
                'radius' => 1304.435546875,
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'New Alipore',
                'city_id' => '14',
                'lat' => 22.5089709,
                'long' => 88.3329766,
                'radius' => 1685.56005859375,
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'New Barrackpore',
                'city_id' => '14',
                'lat' => 22.6908457,
                'long' => 88.4400441,
                'radius' => 2045.3077392578125,
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'New Market',
                'city_id' => '14',
                'lat' => 23.2356359,
                'long' => 77.4006229,
                'radius' => 249.75819396972656,
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Nimta',
                'city_id' => '14',
                'lat' => 22.6686196,
                'long' => 88.4088788,
                'radius' => 2406.615478515625,
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Nimtala',
                'city_id' => '14',
                'lat' => 24.1195779,
                'long' => 88.2923363,
                'radius' => 2110.845703125,
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'Noapara',
                'city_id' => '14',
                'lat' => 22.8128009,
                'long' => 88.38098579999999,
                'radius' => 832.4618530273438,
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Nona Chandanpukur',
                'city_id' => '14',
                'lat' => 22.7655775,
                'long' => 88.3770175,
                'radius' => 1005.8988647460938,
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Old China Bazar Street',
                'city_id' => '14',
                'lat' => 22.5776507,
                'long' => 88.35107839999999,
                'radius' => 307.965576171875,
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'Old Court House Street',
                'city_id' => '14',
                'lat' => 22.5692348,
                'long' => 88.3494882,
                'radius' => 137.6951904296875,
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Paddapukur Road',
                'city_id' => '14',
                'lat' => 22.5322025,
                'long' => 88.352571,
                'radius' => 315.9698791503906,
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'Paikpara',
                'city_id' => '14',
                'lat' => 22.613223,
                'long' => 88.3804976,
                'radius' => 1571.32177734375,
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Panchashyar',
                'city_id' => '14',
                'lat' => 22.4636369,
                'long' => 88.3912962,
                'radius' => 515.114013671875,
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Panihati',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Park Circus',
                'city_id' => '14',
                'lat' => 22.5378858,
                'long' => 88.368246,
                'radius' => 799.6865234375,
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Park Street',
                'city_id' => '14',
                'lat' => 22.5481524,
                'long' => 88.3590603,
                'radius' => 1290.8546142578125,
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Parnasree Palli',
                'city_id' => '14',
                'lat' => 22.5062482,
                'long' => 88.30184009999999,
                'radius' => 1346.8079833984375,
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Paschim Putiari',
                'city_id' => '14',
                'lat' => 22.4772311,
                'long' => 88.33607649999999,
                'radius' => 1789.8779296875,
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Phool Bagan',
                'city_id' => '14',
                'lat' => 22.5701957,
                'long' => 88.3967536,
                'radius' => 1732.9422607421875,
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Poddar Nagar',
                'city_id' => '14',
                'lat' => 22.4998836,
                'long' => 88.3664257,
                'radius' => 571.23388671875,
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Prafulla Kanan',
                'city_id' => '14',
                'lat' => 22.6054437,
                'long' => 88.4216066,
                'radius' => 607.665771484375,
            ),
            331 => 
            array (
                'id' => 332,
                'name' => 'Prince Anwar Shah Road',
                'city_id' => '14',
                'lat' => 22.5020937,
                'long' => 88.3564397,
                'radius' => 1219.080810546875,
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Princep Street',
                'city_id' => '14',
                'lat' => 22.5674484,
                'long' => 88.35534679999999,
                'radius' => 374.21966552734375,
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Purba Putiari',
                'city_id' => '14',
                'lat' => 22.4690906,
                'long' => 88.342254,
                'radius' => 1711.0465087890625,
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Purbachal',
                'city_id' => '14',
                'lat' => 22.5731778,
                'long' => 88.40544120000001,
                'radius' => 2003.5482177734375,
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'R.N. Mukherjee Road',
                'city_id' => '14',
                'lat' => 22.5711836,
                'long' => 88.3510374,
                'radius' => 264.60919189453125,
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Rabindra Sadan',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Rabindra Sarani',
                'city_id' => '14',
                'lat' => 22.5888277,
                'long' => 88.3588523,
                'radius' => 2323.325439453125,
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Rabindra Sarovar',
                'city_id' => '14',
                'lat' => 22.5117266,
                'long' => 88.35914389999999,
                'radius' => 1470.89892578125,
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Radha Bazar Street',
                'city_id' => '14',
                'lat' => 22.5734228,
                'long' => 88.3519208,
                'radius' => 115.10047912597656,
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Rafi Ahmed Kidwai Road',
                'city_id' => '14',
                'lat' => 22.557948,
                'long' => 88.3576331,
                'radius' => 930.8587646484375,
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Raghunathpur',
                'city_id' => '14',
                'lat' => 22.6196705,
                'long' => 88.4294838,
                'radius' => 810.1390380859375,
            ),
            342 => 
            array (
                'id' => 343,
                'name' => 'Rahora',
                'city_id' => '14',
                'lat' => 22.7239929,
                'long' => 88.38680719999999,
                'radius' => 1976.0965576171875,
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Rai Bahadur Road',
                'city_id' => '14',
                'lat' => 22.4998938,
                'long' => 88.3296376,
                'radius' => 1209.4307861328125,
            ),
            344 => 
            array (
                'id' => 345,
                'name' => 'Raja Rammohan Roy Sarani',
                'city_id' => '14',
                'lat' => 22.5767382,
                'long' => 88.3688035,
                'radius' => 1031.096923828125,
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'Raja Subodh Chandra Mullick Road',
                'city_id' => '14',
                'lat' => 22.4904397,
                'long' => 88.3722914,
                'radius' => 2955.500732421875,
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Rajabazar',
                'city_id' => '14',
                'lat' => 22.5729891,
                'long' => 88.37560189999999,
                'radius' => 1824.958984375,
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Rajbari Colony',
                'city_id' => '14',
                'lat' => 22.6525285,
                'long' => 88.4322768,
                'radius' => 2002.3892822265625,
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Rash Behari Avenue',
                'city_id' => '14',
                'lat' => 22.5210149,
                'long' => 88.3706328,
                'radius' => 3374.05859375,
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Regent Estate',
                'city_id' => '14',
                'lat' => 22.4867121,
                'long' => 88.36844119999999,
                'radius' => 734.55615234375,
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Regent Park',
                'city_id' => '14',
                'lat' => 22.4874358,
                'long' => 88.35494,
                'radius' => 1156.168701171875,
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'Ripon Street',
                'city_id' => '14',
                'lat' => 20.4604406,
                'long' => 85.8724797,
                'radius' => 425.1554260253906,
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Rishra',
                'city_id' => '14',
                'lat' => 22.7244023,
                'long' => 88.3287896,
                'radius' => 3381.999267578125,
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Royd Street',
                'city_id' => '14',
                'lat' => 22.5526154,
                'long' => 88.3556742,
                'radius' => 260.1769714355469,
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Russel Street',
                'city_id' => '14',
                'lat' => 22.5516618,
                'long' => 88.35072079999999,
                'radius' => 347.9159851074219,
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'S. N. Banerjee Road',
                'city_id' => '14',
                'lat' => 22.4874652,
                'long' => 88.193482,
                'radius' => 52.37686538696289,
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Sahapur',
                'city_id' => '14',
                'lat' => 22.5084987,
                'long' => 88.3281158,
                'radius' => 816.4568481445312,
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Salkia',
                'city_id' => '14',
                'lat' => 22.5972179,
                'long' => 88.3376845,
                'radius' => 2269.88330078125,
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Salt Lake',
                'city_id' => '14',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Santoshpur Avenue',
                'city_id' => '14',
                'lat' => 22.4934112,
                'long' => 88.3892351,
                'radius' => 646.9779052734375,
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Santragachi',
                'city_id' => '14',
                'lat' => 22.5839176,
                'long' => 88.2826103,
                'radius' => 1589.187255859375,
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Sarat Bose Road',
                'city_id' => '14',
                'lat' => 22.5270146,
                'long' => 88.3527005,
                'radius' => 1637.4990234375,
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Sarsuna',
                'city_id' => '14',
                'lat' => 22.4826318,
                'long' => 88.2826103,
                'radius' => 2556.29150390625,
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Sealdah',
                'city_id' => '14',
                'lat' => 22.5654725,
                'long' => 88.3712796,
                'radius' => 1026.5457763671875,
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Serampore',
                'city_id' => '14',
                'lat' => 22.748331,
                'long' => 88.3385053,
                'radius' => 3098.517333984375,
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Shakespeare Sarani',
                'city_id' => '14',
                'lat' => 22.5446879,
                'long' => 88.35604119999999,
                'radius' => 994.0526123046875,
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Shibpur',
                'city_id' => '14',
                'lat' => 22.5723094,
                'long' => 88.3117819,
                'radius' => 3520.438720703125,
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Shobhabazar',
                'city_id' => '14',
                'lat' => 22.5981676,
                'long' => 88.3639986,
                'radius' => 830.1673583984375,
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Shreebhumi',
                'city_id' => '14',
                'lat' => 22.599295,
                'long' => 88.4022104,
                'radius' => 657.6390380859375,
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Shyam Nagar',
                'city_id' => '14',
                'lat' => 22.8323184,
                'long' => 88.3967536,
                'radius' => 3912.833984375,
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Shyama Prasad Mukherjee Road',
                'city_id' => '14',
                'lat' => 22.5162141,
                'long' => 88.34593450000001,
                'radius' => 1493.5960693359375,
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Shyambazar',
                'city_id' => '14',
                'lat' => 22.5982031,
                'long' => 88.36868659999999,
                'radius' => 139.68783569335938,
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Sinthee',
                'city_id' => '14',
                'lat' => 22.6263189,
                'long' => 88.3813033,
                'radius' => 2002.7734375,
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Sodepur',
                'city_id' => '14',
                'lat' => 22.7150007,
                'long' => 88.3871813,
                'radius' => 104.84807586669922,
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Sonarpur',
                'city_id' => '14',
                'lat' => 22.4490894,
                'long' => 88.39147310000001,
                'radius' => 8538.2080078125,
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'Southern Avenue',
                'city_id' => '14',
                'lat' => 22.5134021,
                'long' => 88.3560305,
                'radius' => 1090.7862548828125,
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Shobhabaza',
                'city_id' => '14',
                'lat' => 22.5981676,
                'long' => 88.3639986,
                'radius' => 830.1673583984375,
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Strand Road',
                'city_id' => '14',
                'lat' => 22.5736711,
                'long' => 88.3455579,
                'radius' => 2647.1474609375,
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Surya Sen Street',
                'city_id' => '14',
                'lat' => 22.572735,
                'long' => 88.3671104,
                'radius' => 469.78692626953125,
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Syed Amir Ali Avenue',
                'city_id' => '14',
                'lat' => 22.538784,
                'long' => 88.36525689999999,
                'radius' => 545.7239379882812,
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Taltala',
                'city_id' => '14',
                'lat' => 22.561227,
                'long' => 88.3582718,
                'radius' => 1603.0162353515625,
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Tangra',
                'city_id' => '14',
                'lat' => 22.5577172,
                'long' => 88.38665859999999,
                'radius' => 2946.564697265625,
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Taratala',
                'city_id' => '14',
                'lat' => 22.5168375,
                'long' => 88.3017677,
                'radius' => 2112.963134765625,
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'Taratala Road',
                'city_id' => '14',
                'lat' => 22.5326621,
                'long' => 88.2917751,
                'radius' => 3835.45263671875,
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'Teghoria',
                'city_id' => '14',
                'lat' => 22.6227201,
                'long' => 88.43675379999999,
                'radius' => 845.8843383789062,
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Thakurpukur',
                'city_id' => '14',
                'lat' => 22.4616267,
                'long' => 88.3061645,
                'radius' => 3177.946044921875,
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Theatre Road',
                'city_id' => '14',
                'lat' => 14.9195638,
                'long' => 79.99105569999999,
                'radius' => 305.3939514160156,
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Tiljala',
                'city_id' => '14',
                'lat' => 22.5268906,
                'long' => 88.38583799999999,
                'radius' => 1199.175537109375,
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Tollygunge Circular Road',
                'city_id' => '14',
                'lat' => 22.5059234,
                'long' => 88.3362068,
                'radius' => 1138.5240478515625,
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Topsia',
                'city_id' => '14',
                'lat' => 22.5336607,
                'long' => 88.39015189999999,
                'radius' => 1598.9876708984375,
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Topsia Road',
                'city_id' => '14',
                'lat' => 22.5333561,
                'long' => 88.387896,
                'radius' => 1476.52490234375,
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Topsia Road South',
                'city_id' => '14',
                'lat' => 22.5333561,
                'long' => 88.387896,
                'radius' => 1476.52490234375,
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Ultadanga',
                'city_id' => '14',
                'lat' => 22.594817,
                'long' => 88.3868594,
                'radius' => 1137.9737548828125,
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Ultadanga Main Road',
                'city_id' => '14',
                'lat' => 22.5936146,
                'long' => 88.3876545,
                'radius' => 977.8104858398438,
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Uluberia',
                'city_id' => '14',
                'lat' => 22.4744363,
                'long' => 88.1000377,
                'radius' => 5918.69091796875,
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Uttar Para',
                'city_id' => '14',
                'lat' => 22.6768451,
                'long' => 88.3385053,
                'radius' => 3505.72412109375,
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'V.I.P Road',
                'city_id' => '14',
                'lat' => 23.2609096,
                'long' => 77.3806578,
                'radius' => 2273.542236328125,
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Vivekananda Road',
                'city_id' => '14',
                'lat' => 22.4293986,
                'long' => 88.433061,
                'radius' => 93.11587524414062,
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Wellington',
                'city_id' => '14',
                'lat' => 11.36356,
                'long' => 76.7884713,
                'radius' => 1389.411865234375,
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'Weston Street',
                'city_id' => '14',
                'lat' => 22.569393,
                'long' => 88.3553872,
                'radius' => 237.18020629882812,
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Bopal',
                'city_id' => '13',
                'lat' => 23.0336769,
                'long' => 72.4634117,
                'radius' => 2794.81103515625,
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Gandhinagar',
                'city_id' => '13',
                'lat' => 23.2156354,
                'long' => 72.63694149999999,
                'radius' => 8498.4990234375,
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Paldi',
                'city_id' => '13',
                'lat' => 23.0134135,
                'long' => 72.5624095,
                'radius' => 3241.816162109375,
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Naranpura',
                'city_id' => '13',
                'lat' => 23.0551934,
                'long' => 72.55850029999999,
                'radius' => 2354.765869140625,
            ),
            404 => 
            array (
                'id' => 405,
                'name' => 'Vejalpur',
                'city_id' => '13',
                'lat' => 22.6898334,
                'long' => 73.5626805,
                'radius' => 1364.728759765625,
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'Motera',
                'city_id' => '13',
                'lat' => 23.1036054,
                'long' => 72.6024044,
                'radius' => 2531.90869140625,
            ),
            406 => 
            array (
                'id' => 407,
                'name' => 'Sanand',
                'city_id' => '13',
                'lat' => 22.9912897,
                'long' => 72.37550850000001,
                'radius' => 3170.071044921875,
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Chandkheda',
                'city_id' => '13',
                'lat' => 23.1115671,
                'long' => 72.57276209999999,
                'radius' => 4576.72265625,
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Maninagar',
                'city_id' => '13',
                'lat' => 22.9961698,
                'long' => 72.5995843,
                'radius' => 2354.8740234375,
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Naroda',
                'city_id' => '13',
                'lat' => 23.0685865,
                'long' => 72.6535961,
                'radius' => 1417.86865234375,
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'Bavla',
                'city_id' => '13',
                'lat' => 22.8297927,
                'long' => 72.3637811,
                'radius' => 4826.53076171875,
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'Ranip',
                'city_id' => '13',
                'lat' => 23.0997918,
                'long' => 72.55745329999999,
                'radius' => 1144.6253662109375,
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'Usmanpura',
                'city_id' => '13',
                'lat' => 23.0470487,
                'long' => 72.5704362,
                'radius' => 1070.3189697265625,
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'Shahibaug',
                'city_id' => '13',
                'lat' => 23.0568249,
                'long' => 72.59356819999999,
                'radius' => 1790.675537109375,
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Chandlodiya',
                'city_id' => '13',
                'lat' => 23.0875397,
                'long' => 72.5504732,
                'radius' => 1836.256591796875,
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'Bapunagar',
                'city_id' => '13',
                'lat' => 23.0386956,
                'long' => 72.6307533,
                'radius' => 2524.890625,
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Mandal',
                'city_id' => '13',
                'lat' => 23.2889777,
                'long' => 71.9176387,
                'radius' => 631.078857421875,
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Maninagar',
                'city_id' => '13',
                'lat' => 22.9961698,
                'long' => 72.5995843,
                'radius' => 2354.8740234375,
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Manek Chowk',
                'city_id' => '13',
                'lat' => 22.6911621,
                'long' => 72.8632774,
                'radius' => 58.374717712402344,
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'Mehmadabad',
                'city_id' => '13',
                'lat' => 22.9991066,
                'long' => 72.616569,
                'radius' => 1533.5797119140625,
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'Memnagar Ahmedabad',
                'city_id' => '13',
                'lat' => 23.0523843,
                'long' => 72.5337182,
                'radius' => 2339.41552734375,
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'Ahmedabad Municipal Corporation',
                'city_id' => '13',
                'lat' => 23.0389814,
                'long' => 72.51421979999999,
                'radius' => 203.8478546142578,
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Nandej',
                'city_id' => '13',
                'lat' => 22.9006696,
                'long' => 72.69493729999999,
                'radius' => 1114.1353759765625,
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Nandol',
                'city_id' => '13',
                'lat' => 23.2105683,
                'long' => 72.8183134,
                'radius' => 664.3486328125,
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'Naranpura',
                'city_id' => '13',
                'lat' => 23.0551934,
                'long' => 72.55850029999999,
                'radius' => 2354.765869140625,
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Naranpurvistar',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Rakhial',
                'city_id' => '13',
                'lat' => 23.0213204,
                'long' => 72.62392419999999,
                'radius' => 1712.306884765625,
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'Narayan Nagar',
                'city_id' => '13',
                'lat' => 22.9989457,
                'long' => 72.5519104,
                'radius' => 1473.3804931640625,
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Naroda',
                'city_id' => '13',
                'lat' => 23.0685865,
                'long' => 72.6535961,
                'radius' => 1417.86865234375,
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Nava Vadaj',
                'city_id' => '13',
                'lat' => 23.0687131,
                'long' => 72.56641499999999,
                'radius' => 1436.9798583984375,
            ),
            430 => 
            array (
                'id' => 431,
                'name' => 'Narol',
                'city_id' => '13',
                'lat' => 22.9729054,
                'long' => 72.5882606,
                'radius' => 4022.828857421875,
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Navrangpura',
                'city_id' => '13',
                'lat' => 23.0365437,
                'long' => 72.5611395,
                'radius' => 1873.37109375,
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'New Chamanpura',
                'city_id' => '13',
                'lat' => 23.04758,
                'long' => 72.6114209,
                'radius' => 919.7935791015625,
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'Raikhad',
                'city_id' => '13',
                'lat' => 23.0189588,
                'long' => 72.5811117,
                'radius' => 876.5787963867188,
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Raipur',
                'city_id' => '13',
                'lat' => 21.2513844,
                'long' => 81.62964130000002,
                'radius' => 11671.03515625,
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Rampura',
                'city_id' => '13',
                'lat' => 24.4661518,
                'long' => 75.44175589999999,
                'radius' => 795.2628173828125,
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Ranip',
                'city_id' => '13',
                'lat' => 23.0997918,
                'long' => 72.55745329999999,
                'radius' => 1144.6253662109375,
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Ranpur',
                'city_id' => '13',
                'lat' => 22.352089,
                'long' => 71.71776109999999,
                'radius' => 1831.032470703125,
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Revdi Bazar',
                'city_id' => '13',
                'lat' => 23.0270397,
                'long' => 72.5984845,
                'radius' => 266.989990234375,
            ),
            439 => 
            array (
                'id' => 440,
                'name' => 'Agol',
                'city_id' => '13',
                'lat' => 23.1414193,
                'long' => 72.2735376,
                'radius' => 896.9630126953125,
            ),
            440 => 
            array (
                'id' => 441,
                'name' => 'Ahmedabad Airport',
                'city_id' => '13',
                'lat' => 23.0734262,
                'long' => 72.626571,
                'radius' => 203.82394409179688,
            ),
            441 => 
            array (
                'id' => 442,
                'name' => 'Amraiwadi',
                'city_id' => '13',
                'lat' => 22.9995994,
                'long' => 72.63559719999999,
                'radius' => 2594.03369140625,
            ),
            442 => 
            array (
                'id' => 443,
                'name' => 'Behrampura',
                'city_id' => '13',
                'lat' => 23.0012215,
                'long' => 72.57436179999999,
                'radius' => 2906.5205078125,
            ),
            443 => 
            array (
                'id' => 444,
                'name' => 'Ahmedabad Cantonment',
                'city_id' => '13',
                'lat' => 23.0638989,
                'long' => 72.6087359,
                'radius' => 2091.802001953125,
            ),
            444 => 
            array (
                'id' => 445,
                'name' => 'Ahmedabad Civil Hospital',
                'city_id' => '13',
                'lat' => 23.0524255,
                'long' => 72.60418539999999,
                'radius' => 203.83853149414062,
            ),
            445 => 
            array (
                'id' => 446,
                'name' => 'Jivraj Park',
                'city_id' => '13',
                'lat' => 23.0053051,
                'long' => 72.5367504,
                'radius' => 1516.369140625,
            ),
            446 => 
            array (
                'id' => 447,
                'name' => 'Juhapura',
                'city_id' => '13',
                'lat' => 22.99619,
                'long' => 72.52350919999999,
                'radius' => 3011.38232421875,
            ),
            447 => 
            array (
                'id' => 448,
                'name' => 'Paldi',
                'city_id' => '13',
                'lat' => 23.0134135,
                'long' => 72.5624095,
                'radius' => 3241.816162109375,
            ),
            448 => 
            array (
                'id' => 449,
                'name' => 'Railway Colony',
                'city_id' => '13',
                'lat' => 23.0989231,
                'long' => 72.5751973,
                'radius' => 1817.6065673828125,
            ),
            449 => 
            array (
                'id' => 450,
                'name' => 'Rajpur Gomtipur',
                'city_id' => '13',
                'lat' => 23.0136542,
                'long' => 72.6106817,
                'radius' => 966.8318481445312,
            ),
            450 => 
            array (
                'id' => 451,
                'name' => 'Shahibaug',
                'city_id' => '13',
                'lat' => 23.0568249,
                'long' => 72.59356819999999,
                'radius' => 1790.675537109375,
            ),
            451 => 
            array (
                'id' => 452,
                'name' => 'Space Application Centre',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'name' => 'Thaltej Road',
                'city_id' => '13',
                'lat' => 23.0505187,
                'long' => 72.4988089,
                'radius' => 1998.6077880859375,
            ),
            453 => 
            array (
                'id' => 454,
                'name' => 'Shah E Alam Roza',
                'city_id' => '13',
                'lat' => 22.9940983,
                'long' => 72.5896319,
                'radius' => 203.87896728515625,
            ),
            454 => 
            array (
                'id' => 455,
                'name' => 'Ambawadi',
                'city_id' => '13',
                'lat' => 23.0190813,
                'long' => 72.5517075,
                'radius' => 2380.846435546875,
            ),
            455 => 
            array (
                'id' => 456,
                'name' => 'Anand Nagar-Ahmedabad',
                'city_id' => '13',
                'lat' => 23.0833294,
                'long' => 72.5666973,
                'radius' => 880.8147583007812,
            ),
            456 => 
            array (
                'id' => 457,
                'name' => 'Anil Marg',
                'city_id' => '13',
                'lat' => 23.0427286,
                'long' => 72.5195664,
                'radius' => 203.8452606201172,
            ),
            457 => 
            array (
                'id' => 458,
                'name' => 'Azad Society',
                'city_id' => '13',
                'lat' => 23.0261878,
                'long' => 72.5399255,
                'radius' => 1996.9005126953125,
            ),
            458 => 
            array (
                'id' => 459,
                'name' => 'Badarkha',
                'city_id' => '13',
                'lat' => 22.8404577,
                'long' => 72.45083009999999,
                'radius' => 954.9478149414062,
            ),
            459 => 
            array (
                'id' => 460,
                'name' => 'Bahiyal',
                'city_id' => '13',
                'lat' => 23.0728337,
                'long' => 72.8854672,
                'radius' => 804.6678466796875,
            ),
            460 => 
            array (
                'id' => 461,
                'name' => 'Bapu Nagar',
                'city_id' => '13',
                'lat' => 23.0386956,
                'long' => 72.6307533,
                'radius' => 2524.890625,
            ),
            461 => 
            array (
                'id' => 462,
                'name' => 'Barwala Ghelasa',
                'city_id' => '13',
                'lat' => 22.1509924,
                'long' => 71.8937292,
                'radius' => 366.8533630371094,
            ),
            462 => 
            array (
                'id' => 463,
                'name' => 'Bavla',
                'city_id' => '13',
                'lat' => 22.8297927,
                'long' => 72.3637811,
                'radius' => 4826.53076171875,
            ),
            463 => 
            array (
                'id' => 464,
                'name' => 'Bavla Market Yard',
                'city_id' => '13',
                'lat' => 22.8292329,
                'long' => 72.35812109999999,
                'radius' => 203.99281311035156,
            ),
            464 => 
            array (
                'id' => 465,
                'name' => 'Bhadiyad',
                'city_id' => '13',
                'lat' => 22.2807437,
                'long' => 72.1675288,
                'radius' => 442.0487976074219,
            ),
            465 => 
            array (
                'id' => 466,
                'name' => 'Bhairavnath Road',
                'city_id' => '13',
                'lat' => 22.9953267,
                'long' => 72.602085,
                'radius' => 1290.6920166015625,
            ),
            466 => 
            array (
                'id' => 467,
                'name' => 'Bhojva',
                'city_id' => '13',
                'lat' => 23.1537316,
                'long' => 72.0275571,
                'radius' => 956.3175048828125,
            ),
            467 => 
            array (
                'id' => 468,
                'name' => 'Calico Mills',
                'city_id' => '13',
                'lat' => 23.0025431,
                'long' => 72.5746437,
                'radius' => 1238.12158203125,
            ),
            468 => 
            array (
                'id' => 469,
                'name' => 'Chaloda',
                'city_id' => '13',
                'lat' => 22.8028774,
                'long' => 72.4487067,
                'radius' => 1066.919921875,
            ),
            469 => 
            array (
                'id' => 470,
                'name' => 'Dabhoda',
                'city_id' => '13',
                'lat' => 23.1781191,
                'long' => 72.7473981,
                'radius' => 991.9717407226562,
            ),
            470 => 
            array (
                'id' => 471,
                'name' => 'Dahegam Jawahar',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'name' => 'Dariapur',
                'city_id' => '13',
                'lat' => 23.0340575,
                'long' => 72.59367929999999,
                'radius' => 792.0040893554688,
            ),
            472 => 
            array (
                'id' => 473,
                'name' => 'Daxini Society',
                'city_id' => '13',
                'lat' => 22.9915207,
                'long' => 72.6121033,
                'radius' => 991.50439453125,
            ),
            473 => 
            array (
                'id' => 474,
                'name' => 'Delhi Gala',
                'city_id' => '13',
                'lat' => 23.0366036,
                'long' => 72.5907223,
                'radius' => 353.968017578125,
            ),
            474 => 
            array (
                'id' => 475,
                'name' => 'Detroj',
                'city_id' => '13',
                'lat' => 23.3333915,
                'long' => 72.18751929999999,
                'radius' => 874.0265502929688,
            ),
            475 => 
            array (
                'id' => 476,
                'name' => 'Dhandhuka',
                'city_id' => '13',
                'lat' => 22.3796555,
                'long' => 71.9816261,
                'radius' => 3528.0634765625,
            ),
            476 => 
            array (
                'id' => 477,
                'name' => 'Dholera',
                'city_id' => '13',
                'lat' => 22.2498636,
                'long' => 72.1934421,
                'radius' => 825.8008422851562,
            ),
            477 => 
            array (
                'id' => 478,
                'name' => 'Dholka Kharakuva',
                'city_id' => '13',
                'lat' => 22.7251862,
                'long' => 72.4390907,
                'radius' => 204.0642852783203,
            ),
            478 => 
            array (
                'id' => 479,
                'name' => 'Dudeshwar',
                'city_id' => '13',
                'lat' => 23.0509388,
                'long' => 72.585863,
                'radius' => 1154.58837890625,
            ),
            479 => 
            array (
                'id' => 480,
                'name' => 'Ellis Bridge',
                'city_id' => '13',
                'lat' => 23.0262331,
                'long' => 72.5623124,
                'radius' => 1706.4490966796875,
            ),
            480 => 
            array (
                'id' => 481,
                'name' => 'Gandhi Ashram',
                'city_id' => '13',
                'lat' => 23.0607723,
                'long' => 72.5808868,
                'radius' => 203.83273315429688,
            ),
            481 => 
            array (
                'id' => 482,
                'name' => 'Gandhi Road',
                'city_id' => '13',
                'lat' => 23.0247547,
                'long' => 72.5908134,
                'radius' => 931.1619262695312,
            ),
            482 => 
            array (
                'id' => 483,
                'name' => 'Ghatlodia',
                'city_id' => '13',
                'lat' => 23.0747676,
                'long' => 72.535598,
                'radius' => 2441.468017578125,
            ),
            483 => 
            array (
                'id' => 484,
                'name' => 'Gheekanta Road',
                'city_id' => '13',
                'lat' => 23.0318064,
                'long' => 72.587829,
                'radius' => 552.5366821289062,
            ),
            484 => 
            array (
                'id' => 485,
                'name' => 'Ghodasar',
                'city_id' => '13',
                'lat' => 24.4519026,
                'long' => 71.8230224,
                'radius' => 3906.492919921875,
            ),
            485 => 
            array (
                'id' => 486,
                'name' => 'Girdhar Nagar',
                'city_id' => '13',
                'lat' => 23.0497617,
                'long' => 72.5988541,
                'radius' => 608.64501953125,
            ),
            486 => 
            array (
                'id' => 487,
                'name' => 'Gita Mandir Road',
                'city_id' => '13',
                'lat' => 23.0074118,
                'long' => 72.5913206,
                'radius' => 1031.25830078125,
            ),
            487 => 
            array (
                'id' => 488,
                'name' => 'Godhavi',
                'city_id' => '13',
                'lat' => 23.0231493,
                'long' => 72.4088003,
                'radius' => 485.59637451171875,
            ),
            488 => 
            array (
                'id' => 489,
                'name' => 'Gomtipur',
                'city_id' => '13',
                'lat' => 23.0179182,
                'long' => 72.6138847,
                'radius' => 1712.6668701171875,
            ),
            489 => 
            array (
                'id' => 490,
                'name' => 'Gujarat College',
                'city_id' => '13',
                'lat' => 23.0226587,
                'long' => 72.56500530000001,
                'radius' => 203.8591766357422,
            ),
            490 => 
            array (
                'id' => 491,
                'name' => 'Gujarat High Court',
                'city_id' => '13',
                'lat' => 23.0802458,
                'long' => 72.52437669999999,
                'radius' => 203.81919860839844,
            ),
            491 => 
            array (
                'id' => 492,
                'name' => 'Gujarat University',
                'city_id' => '13',
                'lat' => 23.03611,
                'long' => 72.546635,
                'radius' => 203.849853515625,
            ),
            492 => 
            array (
                'id' => 493,
                'name' => 'Gujarat Vidyapith Ahmedabad',
                'city_id' => '13',
                'lat' => 23.0445501,
                'long' => 72.5673742,
                'radius' => 203.843994140625,
            ),
            493 => 
            array (
                'id' => 494,
                'name' => 'Isanpur',
                'city_id' => '13',
                'lat' => 22.9782583,
                'long' => 72.6002263,
                'radius' => 2585.361083984375,
            ),
            494 => 
            array (
                'id' => 495,
                'name' => 'Isanpur',
                'city_id' => '13',
                'lat' => 22.9782583,
                'long' => 72.6002263,
                'radius' => 2585.361083984375,
            ),
            495 => 
            array (
                'id' => 496,
                'name' => 'Jalila',
                'city_id' => '13',
                'lat' => 22.2560467,
                'long' => 71.8087208,
                'radius' => 2195.729248046875,
            ),
            496 => 
            array (
                'id' => 497,
                'name' => 'Jamalpur',
                'city_id' => '13',
                'lat' => 25.312717,
                'long' => 86.4906091,
                'radius' => 2778.15283203125,
            ),
            497 => 
            array (
                'id' => 498,
                'name' => 'Janta Nagar',
                'city_id' => '13',
                'lat' => 30.8794397,
                'long' => 75.8635625,
                'radius' => 938.9599609375,
            ),
            498 => 
            array (
                'id' => 499,
                'name' => 'Jawahar Chowk',
                'city_id' => '13',
                'lat' => 23.0896165,
                'long' => 72.5875367,
                'radius' => 121.83949279785156,
            ),
            499 => 
            array (
                'id' => 500,
                'name' => 'Jetalpur',
                'city_id' => '13',
                'lat' => 22.8878953,
                'long' => 72.5946589,
                'radius' => 2544.03662109375,
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 501,
                'name' => 'Kabir Chowk',
                'city_id' => '13',
                'lat' => 23.087618,
                'long' => 72.58521999999999,
                'radius' => 203.8140869140625,
            ),
            1 => 
            array (
                'id' => 502,
                'name' => 'Kabir Chowk',
                'city_id' => '13',
                'lat' => 23.087618,
                'long' => 72.58521999999999,
                'radius' => 203.8140869140625,
            ),
            2 => 
            array (
                'id' => 503,
                'name' => 'Kalupurchakla',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'name' => 'Kalyanpura',
                'city_id' => '13',
                'lat' => 23.3682555,
                'long' => 77.4214278,
                'radius' => 2360.876220703125,
            ),
            4 => 
            array (
                'id' => 505,
                'name' => 'Kankaria Road',
                'city_id' => '13',
                'lat' => 20.8864218,
                'long' => 73.17720039999999,
                'radius' => 1027.2664794921875,
            ),
            5 => 
            array (
                'id' => 506,
                'name' => 'Kathwada',
                'city_id' => '13',
                'lat' => 23.047284,
                'long' => 72.6919814,
                'radius' => 3086.479736328125,
            ),
            6 => 
            array (
                'id' => 507,
                'name' => 'Kathwada',
                'city_id' => '13',
                'lat' => 23.047284,
                'long' => 72.6919814,
                'radius' => 3086.479736328125,
            ),
            7 => 
            array (
                'id' => 508,
                'name' => 'Katosan Road',
                'city_id' => '13',
                'lat' => 23.3817216,
                'long' => 72.2425268,
                'radius' => 2931.054443359375,
            ),
            8 => 
            array (
                'id' => 509,
                'name' => 'Kauka',
                'city_id' => '13',
                'lat' => 22.6078557,
                'long' => 72.4465261,
                'radius' => 1982.4320068359375,
            ),
            9 => 
            array (
                'id' => 510,
                'name' => 'Khadia',
                'city_id' => '13',
                'lat' => 23.0207761,
                'long' => 72.5920225,
                'radius' => 1289.386474609375,
            ),
            10 => 
            array (
                'id' => 511,
                'name' => 'Khanpur-Ahmedabad',
                'city_id' => '13',
                'lat' => 23.030406,
                'long' => 72.5780125,
                'radius' => 1166.6553955078125,
            ),
            11 => 
            array (
                'id' => 512,
                'name' => 'Kharna',
                'city_id' => '13',
                'lat' => 23.4527467,
                'long' => 72.5788938,
                'radius' => 560.5264892578125,
            ),
            12 => 
            array (
                'id' => 513,
                'name' => 'Khodiyar Nagar',
                'city_id' => '13',
                'lat' => 22.3232949,
                'long' => 73.22861689999999,
                'radius' => 677.3413696289062,
            ),
            13 => 
            array (
                'id' => 514,
                'name' => 'Laldarwaja',
                'city_id' => '13',
                'lat' => 23.0263517,
                'long' => 72.58190130000001,
                'radius' => 776.121337890625,
            ),
            14 => 
            array (
                'id' => 515,
                'name' => 'Madhupura Market',
                'city_id' => '13',
                'lat' => 23.0381734,
                'long' => 72.5908467,
                'radius' => 203.84841918945312,
            ),
            15 => 
            array (
                'id' => 516,
                'name' => 'Lothalbhurhki',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'name' => 'Kothgangad',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'name' => 'Krishnanagar',
                'city_id' => '13',
                'lat' => 23.4008744,
                'long' => 88.5013962,
                'radius' => 4432.52783203125,
            ),
            18 => 
            array (
                'id' => 519,
                'name' => 'Kuha',
                'city_id' => '13',
                'lat' => 22.9999387,
                'long' => 72.7968932,
                'radius' => 862.6216430664062,
            ),
            19 => 
            array (
                'id' => 520,
                'name' => 'Khokhara',
                'city_id' => '13',
                'lat' => 22.9991066,
                'long' => 72.616569,
                'radius' => 1533.5797119140625,
            ),
            20 => 
            array (
                'id' => 521,
                'name' => 'Navjivan',
                'city_id' => '13',
                'lat' => 23.0451147,
                'long' => 72.5641074,
                'radius' => 849.3978881835938,
            ),
            21 => 
            array (
                'id' => 522,
                'name' => 'Sarkhej Road',
                'city_id' => '13',
                'lat' => 22.9902253,
                'long' => 72.51598,
                'radius' => 1484.09033203125,
            ),
            22 => 
            array (
                'id' => 523,
                'name' => 'Kuber Nagar',
                'city_id' => '13',
                'lat' => 23.0711673,
                'long' => 72.64184279999999,
                'radius' => 2089.787841796875,
            ),
            23 => 
            array (
                'id' => 524,
                'name' => 'Shastri Nagar',
                'city_id' => '13',
                'lat' => 28.6746196,
                'long' => 77.18017569999999,
                'radius' => 1409.0516357421875,
            ),
            24 => 
            array (
                'id' => 525,
                'name' => 'Sabarmati',
                'city_id' => '13',
                'lat' => 23.5660014,
                'long' => 72.9452629,
                'radius' => 154344.96875,
            ),
            25 => 
            array (
                'id' => 526,
                'name' => 'Sahijpur Bhoga',
                'city_id' => '13',
                'lat' => 23.0583105,
                'long' => 72.637183,
                'radius' => 2084.594482421875,
            ),
            26 => 
            array (
                'id' => 527,
                'name' => 'Sanand',
                'city_id' => '13',
                'lat' => 22.9912897,
                'long' => 72.37550850000001,
                'radius' => 3170.071044921875,
            ),
            27 => 
            array (
                'id' => 528,
                'name' => 'Sarangpur Hanuman Temple',
                'city_id' => '13',
                'lat' => 22.1588481,
                'long' => 71.77100039999999,
                'radius' => 204.44845581054688,
            ),
            28 => 
            array (
                'id' => 529,
                'name' => 'Sardar Nagar',
                'city_id' => '13',
                'lat' => 23.0830442,
                'long' => 72.6204227,
                'radius' => 2043.884521484375,
            ),
            29 => 
            array (
                'id' => 530,
                'name' => 'Sarkhej',
                'city_id' => '13',
                'lat' => 22.9797708,
                'long' => 72.4927108,
                'radius' => 2609.9228515625,
            ),
            30 => 
            array (
                'id' => 531,
                'name' => 'Shahpur-Ahmedabad',
                'city_id' => '13',
                'lat' => 23.0362381,
                'long' => 72.5811117,
                'radius' => 819.5526733398438,
            ),
            31 => 
            array (
                'id' => 532,
                'name' => 'Sharda Nagar',
                'city_id' => '13',
                'lat' => 26.4869893,
                'long' => 80.28369959999999,
                'radius' => 1041.31787109375,
            ),
            32 => 
            array (
                'id' => 533,
                'name' => 'Sindhi Ambavadi',
                'city_id' => '13',
                'lat' => 23.0821653,
                'long' => 72.63468449999999,
                'radius' => 424.6361389160156,
            ),
            33 => 
            array (
                'id' => 534,
                'name' => 'Sindhi Colony-Ahmedabad',
                'city_id' => '13',
                'lat' => 23.0821653,
                'long' => 72.63468449999999,
                'radius' => 424.6361389160156,
            ),
            34 => 
            array (
                'id' => 535,
                'name' => 'Sonaria Block',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'name' => 'Stadium Marg',
                'city_id' => '13',
                'lat' => 23.0473545,
                'long' => 72.5602451,
                'radius' => 203.842041015625,
            ),
            36 => 
            array (
                'id' => 537,
                'name' => 'Sukhrampura',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'name' => 'Tavdipura',
                'city_id' => '13',
                'lat' => 23.0474232,
                'long' => 72.5781545,
                'radius' => 800.0713500976562,
            ),
            38 => 
            array (
                'id' => 539,
                'name' => 'Thakkarabapa Nagar',
                'city_id' => '13',
                'lat' => 23.0506776,
                'long' => 72.6487059,
                'radius' => 2032.3253173828125,
            ),
            39 => 
            array (
                'id' => 540,
                'name' => 'Viramgam',
                'city_id' => '13',
                'lat' => 23.1236377,
                'long' => 72.0527421,
                'radius' => 3369.1064453125,
            ),
            40 => 
            array (
                'id' => 541,
                'name' => 'Viramgam Choksi Bazar',
                'city_id' => '13',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'name' => 'Vadaj',
                'city_id' => '13',
                'lat' => 22.0654081,
                'long' => 73.4357002,
                'radius' => 3678.962158203125,
            ),
            42 => 
            array (
                'id' => 543,
                'name' => 'Sanand Society Area',
                'city_id' => '13',
                'lat' => 22.9876199,
                'long' => 72.3877029,
                'radius' => 203.88345336914062,
            ),
            43 => 
            array (
                'id' => 544,
                'name' => 'Vastral',
                'city_id' => '13',
                'lat' => 22.9952752,
                'long' => 72.6629835,
                'radius' => 2012.6375732421875,
            ),
            44 => 
            array (
                'id' => 545,
                'name' => 'Virochan Nagar',
                'city_id' => '13',
                'lat' => 23.0974015,
                'long' => 72.22806849999999,
                'radius' => 4979.4775390625,
            ),
            45 => 
            array (
                'id' => 546,
                'name' => 'Vatvajasoda Nagar',
                'city_id' => '13',
                'lat' => 22.9586042,
                'long' => 72.62983860000001,
                'radius' => 203.90353393554688,
            ),
            46 => 
            array (
                'id' => 547,
                'name' => 'Hazipur Khera',
                'city_id' => '12',
                'lat' => 27.2972489,
                'long' => 77.9995589,
                'radius' => 2356.097900390625,
            ),
            47 => 
            array (
                'id' => 548,
                'name' => 'Kiraoli',
                'city_id' => '12',
                'lat' => 27.1367245,
                'long' => 77.7852575,
                'radius' => 1773.5380859375,
            ),
            48 => 
            array (
                'id' => 549,
                'name' => 'Kukapur',
                'city_id' => '12',
                'lat' => 26.8231313,
                'long' => 78.78445479999999,
                'radius' => 2985.47216796875,
            ),
            49 => 
            array (
                'id' => 550,
                'name' => 'Kukthala',
                'city_id' => '12',
                'lat' => 27.191806,
                'long' => 77.8361285,
                'radius' => 200.75254821777344,
            ),
            50 => 
            array (
                'id' => 551,
                'name' => 'Kukthari',
                'city_id' => '12',
                'lat' => 26.8875028,
                'long' => 78.43256149999999,
                'radius' => 2359.956787109375,
            ),
            51 => 
            array (
                'id' => 552,
                'name' => 'Kundaul',
                'city_id' => '12',
                'lat' => 27.1094377,
                'long' => 78.1393397,
                'radius' => 3381.381591796875,
            ),
            52 => 
            array (
                'id' => 553,
                'name' => 'Kurra Chittaipur',
                'city_id' => '12',
                'lat' => 27.0113464,
                'long' => 78.0054507,
                'radius' => 3121.817138671875,
            ),
            53 => 
            array (
                'id' => 554,
                'name' => 'Kuwari',
                'city_id' => '12',
                'lat' => 27.192169,
                'long' => 77.99753559999999,
                'radius' => 200.7522735595703,
            ),
            54 => 
            array (
                'id' => 555,
                'name' => 'Lali Bari',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'name' => 'Mahab',
                'city_id' => '12',
                'lat' => 17.9307285,
                'long' => 73.6477342,
                'radius' => 3658.55029296875,
            ),
            56 => 
            array (
                'id' => 557,
                'name' => 'Maharajpur',
                'city_id' => '12',
                'lat' => 26.3240873,
                'long' => 80.46741589999999,
                'radius' => 725.1953735351562,
            ),
            57 => 
            array (
                'id' => 558,
                'name' => 'Mahuar',
                'city_id' => '12',
                'lat' => 25.6687778,
                'long' => 84.3410586,
                'radius' => 2270.111572265625,
            ),
            58 => 
            array (
                'id' => 559,
                'name' => 'Mahwatpur',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'name' => 'Mainpuri Gate',
                'city_id' => '12',
                'lat' => 27.224701,
                'long' => 79.00088029999999,
                'radius' => 2430.34228515625,
            ),
            60 => 
            array (
                'id' => 561,
                'name' => 'Maloni',
                'city_id' => '12',
                'lat' => 21.5577732,
                'long' => 74.4789393,
                'radius' => 1641.813232421875,
            ),
            61 => 
            array (
                'id' => 562,
                'name' => 'Malpura',
                'city_id' => '12',
                'lat' => 26.3005677,
                'long' => 75.36966140000001,
                'radius' => 3558.88134765625,
            ),
            62 => 
            array (
                'id' => 563,
                'name' => 'Malupur',
                'city_id' => '12',
                'lat' => 31.1643687,
                'long' => 75.3208107,
                'radius' => 1592.5780029296875,
            ),
            63 => 
            array (
                'id' => 564,
                'name' => 'Malviya Kunj',
                'city_id' => '12',
                'lat' => 26.6143075,
                'long' => 79.52890479999999,
                'radius' => 115.68589782714844,
            ),
            64 => 
            array (
                'id' => 565,
                'name' => 'Mandi',
                'city_id' => '12',
                'lat' => 27.1941451,
                'long' => 77.97322880000002,
                'radius' => 2468.059814453125,
            ),
            65 => 
            array (
                'id' => 566,
                'name' => 'Mandi Mirja Khan',
                'city_id' => '12',
                'lat' => 27.0659858,
                'long' => 77.62354130000001,
                'radius' => 1195.1871337890625,
            ),
            66 => 
            array (
                'id' => 567,
                'name' => 'Mangrol Jat',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'name' => 'Manikpura',
                'city_id' => '12',
                'lat' => 26.9257867,
                'long' => 78.4041297,
                'radius' => 2823.11328125,
            ),
            68 => 
            array (
                'id' => 569,
                'name' => 'Mankeda',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'name' => 'Medical College',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'name' => 'Mehdau',
                'city_id' => '12',
                'lat' => 27.1628056,
                'long' => 77.622856,
                'radius' => 2051.908203125,
            ),
            71 => 
            array (
                'id' => 572,
                'name' => 'Mehra Chudhary',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'name' => 'Midhakur',
                'city_id' => '12',
                'lat' => 27.155242,
                'long' => 77.86630319999999,
                'radius' => 2457.9755859375,
            ),
            73 => 
            array (
                'id' => 574,
                'name' => 'Mihawa',
                'city_id' => '12',
                'lat' => 26.940567,
                'long' => 78.0965691,
                'radius' => 2363.551025390625,
            ),
            74 => 
            array (
                'id' => 575,
                'name' => 'Mitaoli',
                'city_id' => '12',
                'lat' => 27.2800719,
                'long' => 78.1956281,
                'radius' => 435.61944580078125,
            ),
            75 => 
            array (
                'id' => 576,
                'name' => 'Moti Katara',
                'city_id' => '12',
                'lat' => 27.1871977,
                'long' => 78.00740859999999,
                'radius' => 748.326171875,
            ),
            76 => 
            array (
                'id' => 577,
                'name' => 'Moti Katra',
                'city_id' => '12',
                'lat' => 27.1871977,
                'long' => 78.00740859999999,
                'radius' => 748.326171875,
            ),
            77 => 
            array (
                'id' => 578,
                'name' => 'Mukhbar',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'name' => 'Murkia',
                'city_id' => '12',
                'lat' => 22.4785496,
                'long' => 84.0775201,
                'radius' => 1937.645263671875,
            ),
            79 => 
            array (
                'id' => 580,
                'name' => 'Murthar Alipur',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'name' => 'Muzaffar',
                'city_id' => '12',
                'lat' => 27.191957,
                'long' => 78.00384059999999,
                'radius' => 666.9210815429688,
            ),
            81 => 
            array (
                'id' => 582,
                'name' => 'Nadeem',
                'city_id' => '12',
                'lat' => 26.9771815,
                'long' => 77.98243029999999,
                'radius' => 2871.365234375,
            ),
            82 => 
            array (
                'id' => 583,
                'name' => 'Nadgawan',
                'city_id' => '12',
                'lat' => 26.8814539,
                'long' => 78.7688728,
                'radius' => 521.5374145507812,
            ),
            83 => 
            array (
                'id' => 584,
                'name' => 'Nagar Chand',
                'city_id' => '12',
                'lat' => 27.0579924,
                'long' => 78.2807158,
                'radius' => 211.33473205566406,
            ),
            84 => 
            array (
                'id' => 585,
                'name' => 'Nagaria',
                'city_id' => '12',
                'lat' => 26.6846281,
                'long' => 79.40004929999999,
                'radius' => 2190.94677734375,
            ),
            85 => 
            array (
                'id' => 586,
                'name' => 'Nagla Bari',
                'city_id' => '12',
                'lat' => 27.0278317,
                'long' => 78.3230559,
                'radius' => 727.4403076171875,
            ),
            86 => 
            array (
                'id' => 587,
                'name' => 'Nahchani',
                'city_id' => '12',
                'lat' => 27.1036609,
                'long' => 77.8165673,
                'radius' => 2749.34375,
            ),
            87 => 
            array (
                'id' => 588,
                'name' => 'Nainana Jat',
                'city_id' => '12',
                'lat' => 27.1127763,
                'long' => 77.9924223,
                'radius' => 1304.8001708984375,
            ),
            88 => 
            array (
                'id' => 589,
                'name' => 'Namner',
                'city_id' => '12',
                'lat' => 27.1653557,
                'long' => 78.0059814,
                'radius' => 959.0487670898438,
            ),
            89 => 
            array (
                'id' => 590,
                'name' => 'Naraich',
                'city_id' => '12',
                'lat' => 27.2135134,
                'long' => 78.0523548,
                'radius' => 1057.2474365234375,
            ),
            90 => 
            array (
                'id' => 591,
                'name' => 'Naugawan',
                'city_id' => '12',
                'lat' => 27.01047,
                'long' => 78.37568999999999,
                'radius' => 2446.32568359375,
            ),
            91 => 
            array (
                'id' => 592,
                'name' => 'New Agra',
                'city_id' => '12',
                'lat' => 27.2129264,
                'long' => 78.01239699999999,
                'radius' => 867.15966796875,
            ),
            92 => 
            array (
                'id' => 593,
                'name' => 'Nibohara',
                'city_id' => '12',
                'lat' => 26.9580712,
                'long' => 78.254199,
                'radius' => 200.93775939941406,
            ),
            93 => 
            array (
                'id' => 594,
                'name' => 'N.M.Palika',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'name' => 'Noni',
                'city_id' => '12',
                'lat' => 27.215743,
                'long' => 77.998937,
                'radius' => 200.7335205078125,
            ),
            95 => 
            array (
                'id' => 596,
                'name' => 'Nunhai',
                'city_id' => '12',
                'lat' => 27.2035256,
                'long' => 78.0587469,
                'radius' => 258.58685302734375,
            ),
            96 => 
            array (
                'id' => 597,
                'name' => 'N.V.Colony',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'name' => 'Palia',
                'city_id' => '12',
                'lat' => 27.0409345,
                'long' => 78.2718187,
                'radius' => 1793.05419921875,
            ),
            98 => 
            array (
                'id' => 599,
                'name' => 'Parachute',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'name' => 'Parna',
                'city_id' => '12',
                'lat' => 26.8807481,
                'long' => 78.74195279999999,
                'radius' => 4781.78857421875,
            ),
            100 => 
            array (
                'id' => 601,
                'name' => 'Patholi',
                'city_id' => '12',
                'lat' => 27.1597151,
                'long' => 77.9324565,
                'radius' => 696.31591796875,
            ),
            101 => 
            array (
                'id' => 602,
                'name' => 'Patsal',
                'city_id' => '12',
                'lat' => 27.1099524,
                'long' => 77.6135158,
                'radius' => 2888.45166015625,
            ),
            102 => 
            array (
                'id' => 603,
                'name' => 'Phoolpur',
                'city_id' => '12',
                'lat' => 27.0415169,
                'long' => 78.0566344,
                'radius' => 2137.48291015625,
            ),
            103 => 
            array (
                'id' => 604,
                'name' => 'Phullati Bazar',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'name' => 'Pidhora',
                'city_id' => '12',
                'lat' => 26.9643743,
                'long' => 78.4496168,
                'radius' => 4526.26318359375,
            ),
            105 => 
            array (
                'id' => 606,
                'name' => 'Pinahat',
                'city_id' => '12',
                'lat' => 26.8838933,
                'long' => 78.37142329999999,
                'radius' => 836.29638671875,
            ),
            106 => 
            array (
                'id' => 607,
                'name' => 'Pura Tinnet',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'name' => 'Pura Guman Singh',
                'city_id' => '12',
                'lat' => 26.8177856,
                'long' => 78.58962269999999,
                'radius' => 201.04832458496094,
            ),
            108 => 
            array (
                'id' => 609,
                'name' => 'Pura Kanhera',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'name' => 'Puramana',
                'city_id' => '12',
                'lat' => 27.1499398,
                'long' => 77.7709558,
                'radius' => 2818.36767578125,
            ),
            110 => 
            array (
                'id' => 611,
                'name' => 'Puseta',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'name' => 'Raibha',
                'city_id' => '12',
                'lat' => 27.1776846,
                'long' => 77.80670649999999,
                'radius' => 831.4246826171875,
            ),
            112 => 
            array (
                'id' => 613,
                'name' => 'Rajamandi',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'name' => 'Rajapur',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'name' => 'Rajora',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'name' => 'Rajpur',
                'city_id' => '12',
                'lat' => 27.1444311,
                'long' => 78.0445597,
                'radius' => 708.4946899414062,
            ),
            116 => 
            array (
                'id' => 617,
                'name' => 'Rakabganj',
                'city_id' => '12',
                'lat' => 27.171347,
                'long' => 78.0166847,
                'radius' => 2778.9560546875,
            ),
            117 => 
            array (
                'id' => 618,
                'name' => 'Rasoolpur',
                'city_id' => '12',
                'lat' => 27.1557277,
                'long' => 77.9867127,
                'radius' => 807.674560546875,
            ),
            118 => 
            array (
                'id' => 619,
                'name' => 'Ratoti',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'name' => 'Rawatpara',
                'city_id' => '12',
                'lat' => 27.1886184,
                'long' => 78.012974,
                'radius' => 384.22637939453125,
            ),
            120 => 
            array (
                'id' => 621,
                'name' => 'Regimental Centre',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'name' => 'Reha',
                'city_id' => '12',
                'lat' => 26.8503649,
                'long' => 78.230526,
                'radius' => 4305.564453125,
            ),
            122 => 
            array (
                'id' => 623,
                'name' => 'Rehan Kalan',
                'city_id' => '12',
                'lat' => 27.1923222,
                'long' => 78.1150953,
                'radius' => 200.7521514892578,
            ),
            123 => 
            array (
                'id' => 624,
                'name' => 'Richhpura',
                'city_id' => '12',
                'lat' => 27.1823946,
                'long' => 78.0398716,
                'radius' => 246.8261260986328,
            ),
            124 => 
            array (
                'id' => 625,
                'name' => 'Rithori',
                'city_id' => '12',
                'lat' => 26.9939532,
                'long' => 77.9081752,
                'radius' => 2672.548828125,
            ),
            125 => 
            array (
                'id' => 626,
                'name' => 'Rohta',
                'city_id' => '12',
                'lat' => 27.1092929,
                'long' => 78.0024134,
                'radius' => 2991.509765625,
            ),
            126 => 
            array (
                'id' => 627,
                'name' => 'Rojholi',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'name' => 'Rudhmuli',
                'city_id' => '12',
                'lat' => 26.9112857,
                'long' => 78.5987291,
                'radius' => 1109.8450927734375,
            ),
            128 => 
            array (
                'id' => 629,
                'name' => 'Runkata',
                'city_id' => '12',
                'lat' => 27.2364517,
                'long' => 77.87460089999999,
                'radius' => 589.8719482421875,
            ),
            129 => 
            array (
                'id' => 630,
                'name' => 'Sabora',
                'city_id' => '12',
                'lat' => 26.928759,
                'long' => 78.3700011,
                'radius' => 2604.68896484375,
            ),
            130 => 
            array (
                'id' => 631,
                'name' => 'Sadar Bazar',
                'city_id' => '12',
                'lat' => 27.1587371,
                'long' => 78.0100124,
                'radius' => 955.5451049804688,
            ),
            131 => 
            array (
                'id' => 632,
                'name' => 'Sadarbhatti',
                'city_id' => '12',
                'lat' => 27.1799923,
                'long' => 78.00889649999999,
                'radius' => 1930.189208984375,
            ),
            132 => 
            array (
                'id' => 633,
                'name' => 'Sahara',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'name' => 'Sahata',
                'city_id' => '12',
                'lat' => 27.1533413,
                'long' => 77.8924608,
                'radius' => 633.7003173828125,
            ),
            134 => 
            array (
                'id' => 635,
                'name' => 'Saiyan',
                'city_id' => '12',
                'lat' => 26.9536939,
                'long' => 77.9453091,
                'radius' => 3541.10302734375,
            ),
            135 => 
            array (
                'id' => 636,
                'name' => 'Saket Colony',
                'city_id' => '12',
                'lat' => 27.1791861,
                'long' => 77.9817166,
                'radius' => 478.73052978515625,
            ),
            136 => 
            array (
                'id' => 637,
                'name' => 'Salemabad',
                'city_id' => '12',
                'lat' => 27.0781636,
                'long' => 78.01097639999999,
                'radius' => 1612.27294921875,
            ),
            137 => 
            array (
                'id' => 638,
                'name' => 'Samara',
                'city_id' => '12',
                'lat' => 27.0932615,
                'long' => 77.55621,
                'radius' => 3324.547119140625,
            ),
            138 => 
            array (
                'id' => 639,
                'name' => 'Shamsabad',
                'city_id' => '12',
                'lat' => 27.0168053,
                'long' => 78.1236592,
                'radius' => 1077.9490966796875,
            ),
            139 => 
            array (
                'id' => 640,
                'name' => 'Sandhan',
                'city_id' => '12',
                'lat' => 27.2296154,
                'long' => 77.7065754,
                'radius' => 806.537353515625,
            ),
            140 => 
            array (
                'id' => 641,
                'name' => 'Sanjay Place',
                'city_id' => '12',
                'lat' => 27.1986569,
                'long' => 78.0059814,
                'radius' => 975.4413452148438,
            ),
            141 => 
            array (
                'id' => 642,
                'name' => 'Sanjeti',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'name' => 'Sarai Khawaja',
                'city_id' => '12',
                'lat' => 27.1636298,
                'long' => 77.98599899999999,
                'radius' => 297.99981689453125,
            ),
            143 => 
            array (
                'id' => 644,
                'name' => 'Sarendha',
                'city_id' => '12',
                'lat' => 26.9423339,
                'long' => 77.6822442,
                'radius' => 3833.828369140625,
            ),
            144 => 
            array (
                'id' => 645,
                'name' => 'Sarendhi',
                'city_id' => '12',
                'lat' => 26.9423339,
                'long' => 77.6822442,
                'radius' => 3833.828369140625,
            ),
            145 => 
            array (
                'id' => 646,
                'name' => 'Sawain',
                'city_id' => '12',
                'lat' => 27.2555133,
                'long' => 78.18779219999999,
                'radius' => 3767.962158203125,
            ),
            146 => 
            array (
                'id' => 647,
                'name' => 'Semera',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'name' => 'Seola Jat',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'name' => 'Shahganj',
                'city_id' => '12',
                'lat' => 27.1762774,
                'long' => 77.9747732,
                'radius' => 2108.35400390625,
            ),
            149 => 
            array (
                'id' => 650,
                'name' => 'Shahganj Bazar',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'name' => 'Shahpur Brahman',
                'city_id' => '12',
                'lat' => 19.4528235,
                'long' => 73.32610989999999,
                'radius' => 71.49854278564453,
            ),
            151 => 
            array (
                'id' => 652,
                'name' => 'Shahpur Toola',
                'city_id' => '12',
                'lat' => 26.9671586,
                'long' => 78.1364889,
                'radius' => 2116.96435546875,
            ),
            152 => 
            array (
                'id' => 653,
                'name' => 'Shiaupura',
                'city_id' => '12',
                'lat' => 13.0264861,
                'long' => 77.5060439,
                'radius' => 209.42027282714844,
            ),
            153 => 
            array (
                'id' => 654,
                'name' => 'Shiraz',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'name' => 'Shiv Nagar',
                'city_id' => '12',
                'lat' => 27.1508058,
                'long' => 77.98421470000001,
                'radius' => 283.3964538574219,
            ),
            155 => 
            array (
                'id' => 656,
                'name' => 'Shoe Market',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'name' => 'Shyamo',
                'city_id' => '12',
                'lat' => 27.1024023,
                'long' => 78.0908651,
                'radius' => 2505.01806640625,
            ),
            157 => 
            array (
                'id' => 658,
                'name' => 'Sidhaoli',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'name' => 'Sikandra',
                'city_id' => '12',
                'lat' => 27.2205556,
                'long' => 77.95050859999999,
                'radius' => 200.7296905517578,
            ),
            159 => 
            array (
                'id' => 660,
                'name' => 'Sikraondha',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'name' => 'Siktara',
                'city_id' => '12',
                'lat' => 27.277223,
                'long' => 78.1706939,
                'radius' => 1697.4151611328125,
            ),
            161 => 
            array (
                'id' => 662,
                'name' => 'Singaich',
                'city_id' => '12',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'name' => 'SNH Road',
                'city_id' => '12',
                'lat' => 27.1646513,
                'long' => 78.0110823,
                'radius' => 200.77413940429688,
            ),
            163 => 
            array (
                'id' => 664,
                'name' => 'Korai',
                'city_id' => '12',
                'lat' => 27.1201072,
                'long' => 77.7280396,
                'radius' => 3525.2705078125,
            ),
            164 => 
            array (
                'id' => 665,
                'name' => 'Lajpat Kunj',
                'city_id' => '12',
                'lat' => 27.2023836,
                'long' => 77.99884519999999,
                'radius' => 422.9633483886719,
            ),
            165 => 
            array (
                'id' => 666,
                'name' => 'Loha Mandi',
                'city_id' => '12',
                'lat' => 27.1941451,
                'long' => 77.97322880000002,
                'radius' => 2468.059814453125,
            ),
            166 => 
            array (
                'id' => 667,
                'name' => 'Nai Ki Mandi',
                'city_id' => '12',
                'lat' => 27.1841788,
                'long' => 78.0059814,
                'radius' => 572.4366455078125,
            ),
            167 => 
            array (
                'id' => 668,
                'name' => 'Soni Khera',
                'city_id' => '12',
                'lat' => 26.7628175,
                'long' => 77.4874049,
                'radius' => 3655.07080078125,
            ),
            168 => 
            array (
                'id' => 669,
                'name' => 'Sultanpura',
                'city_id' => '12',
                'lat' => 27.1622596,
                'long' => 77.995277,
                'radius' => 836.4984130859375,
            ),
            169 => 
            array (
                'id' => 670,
                'name' => 'Sunari',
                'city_id' => '12',
                'lat' => 27.1913962,
                'long' => 77.9138889,
                'radius' => 1668.1942138671875,
            ),
            170 => 
            array (
                'id' => 671,
                'name' => 'Swara',
                'city_id' => '12',
                'lat' => 27.0503075,
                'long' => 78.401286,
                'radius' => 3189.20947265625,
            ),
            171 => 
            array (
                'id' => 672,
                'name' => 'Taj',
                'city_id' => '12',
                'lat' => 27.161006,
                'long' => 78.03914999999999,
                'radius' => 200.77703857421875,
            ),
            172 => 
            array (
                'id' => 673,
                'name' => 'Tajganj',
                'city_id' => '12',
                'lat' => 27.1553473,
                'long' => 78.0479534,
                'radius' => 4298.28564453125,
            ),
            173 => 
            array (
                'id' => 674,
                'name' => 'Tanora Noorpur',
                'city_id' => '12',
                'lat' => 27.1693284,
                'long' => 78.16214370000002,
                'radius' => 2852.41357421875,
            ),
            174 => 
            array (
                'id' => 675,
                'name' => 'Tarauli Gujar',
                'city_id' => '12',
                'lat' => 26.984294,
                'long' => 78.4098167,
                'radius' => 1906.4432373046875,
            ),
            175 => 
            array (
                'id' => 676,
                'name' => 'Tasond',
                'city_id' => '12',
                'lat' => 26.8671903,
                'long' => 78.2063123,
                'radius' => 2059.490478515625,
            ),
            176 => 
            array (
                'id' => 677,
                'name' => 'Tehra',
                'city_id' => '12',
                'lat' => 26.9983984,
                'long' => 77.959588,
                'radius' => 1607.1070556640625,
            ),
            177 => 
            array (
                'id' => 678,
                'name' => 'Tehu',
                'city_id' => '12',
                'lat' => 20.8484205,
                'long' => 75.1049137,
                'radius' => 1694.8095703125,
            ),
            178 => 
            array (
                'id' => 679,
                'name' => 'Thana Shankar Dwari',
                'city_id' => '12',
                'lat' => 26.9673916,
                'long' => 78.1051246,
                'radius' => 3867.22216796875,
            ),
            179 => 
            array (
                'id' => 680,
                'name' => 'Therai',
                'city_id' => '12',
                'lat' => 27.0584155,
                'long' => 78.0509282,
                'radius' => 2444.50927734375,
            ),
            180 => 
            array (
                'id' => 681,
                'name' => 'Tiwaha',
                'city_id' => '12',
                'lat' => 27.0199685,
                'long' => 78.4027079,
                'radius' => 2130.6640625,
            ),
            181 => 
            array (
                'id' => 682,
                'name' => 'Tantpur',
                'city_id' => '12',
                'lat' => 26.8397507,
                'long' => 77.4730653,
                'radius' => 1572.5872802734375,
            ),
            182 => 
            array (
                'id' => 683,
                'name' => 'TP Nagar',
                'city_id' => '12',
                'lat' => 25.4548271,
                'long' => 81.7698154,
                'radius' => 454.4473876953125,
            ),
            183 => 
            array (
                'id' => 684,
                'name' => 'Tundla',
                'city_id' => '12',
                'lat' => 27.2135222,
                'long' => 78.23907059999999,
                'radius' => 2944.823974609375,
            ),
            184 => 
            array (
                'id' => 685,
                'name' => 'Turkia',
                'city_id' => '12',
                'lat' => 27.1904827,
                'long' => 77.68940099999999,
                'radius' => 1535.8487548828125,
            ),
            185 => 
            array (
                'id' => 686,
                'name' => 'Udyog Nagar',
                'city_id' => '12',
                'lat' => 27.2107353,
                'long' => 78.0689819,
                'radius' => 36.956573486328125,
            ),
            186 => 
            array (
                'id' => 687,
                'name' => 'Ujarai',
                'city_id' => '12',
                'lat' => 27.019164,
                'long' => 78.6937618,
                'radius' => 1666.96630859375,
            ),
            187 => 
            array (
                'id' => 688,
                'name' => 'Peelamedu',
                'city_id' => '11',
                'lat' => 11.0331511,
                'long' => 77.02766,
                'radius' => 5593.19873046875,
            ),
            188 => 
            array (
                'id' => 689,
                'name' => 'Thudiyalur',
                'city_id' => '11',
                'lat' => 11.0812183,
                'long' => 76.941558,
                'radius' => 3143.941162109375,
            ),
            189 => 
            array (
                'id' => 690,
                'name' => 'Ondipudur',
                'city_id' => '11',
                'lat' => 10.9982815,
                'long' => 77.053568,
                'radius' => 2107.575927734375,
            ),
            190 => 
            array (
                'id' => 691,
                'name' => 'Vedapatti',
                'city_id' => '11',
                'lat' => 11.0023603,
                'long' => 76.8922729,
                'radius' => 1964.6673583984375,
            ),
            191 => 
            array (
                'id' => 692,
                'name' => 'Mettupalayam',
                'city_id' => '11',
                'lat' => 11.2890873,
                'long' => 76.94096859999999,
                'radius' => 2693.5732421875,
            ),
            192 => 
            array (
                'id' => 693,
                'name' => 'Vadavalli',
                'city_id' => '11',
                'lat' => 11.0247473,
                'long' => 76.8980371,
                'radius' => 3105.5087890625,
            ),
            193 => 
            array (
                'id' => 694,
                'name' => 'Saravanampatti',
                'city_id' => '11',
                'lat' => 11.0763751,
                'long' => 77.00298389999999,
                'radius' => 4336.98876953125,
            ),
            194 => 
            array (
                'id' => 695,
                'name' => 'Kovaipudur',
                'city_id' => '11',
                'lat' => 10.9432639,
                'long' => 76.9326167,
                'radius' => 3416.671875,
            ),
            195 => 
            array (
                'id' => 696,
                'name' => 'Thudiyalur',
                'city_id' => '11',
                'lat' => 11.0812183,
                'long' => 76.941558,
                'radius' => 3143.941162109375,
            ),
            196 => 
            array (
                'id' => 697,
                'name' => 'Pollachi',
                'city_id' => '11',
                'lat' => 10.6572737,
                'long' => 77.0106693,
                'radius' => 6777.640625,
            ),
            197 => 
            array (
                'id' => 698,
                'name' => 'Sulur',
                'city_id' => '11',
                'lat' => 11.0265378,
                'long' => 77.1312586,
                'radius' => 3371.161865234375,
            ),
            198 => 
            array (
                'id' => 699,
                'name' => 'Singanallur',
                'city_id' => '11',
                'lat' => 10.9987351,
                'long' => 77.0319784,
                'radius' => 1760.193115234375,
            ),
            199 => 
            array (
                'id' => 700,
                'name' => 'Kinathukadavu',
                'city_id' => '11',
                'lat' => 10.8224775,
                'long' => 77.01614359999999,
                'radius' => 3631.668212890625,
            ),
            200 => 
            array (
                'id' => 701,
                'name' => 'Periyanaickenpalayam',
                'city_id' => '11',
                'lat' => 11.1510082,
                'long' => 76.9354979,
                'radius' => 3089.081787109375,
            ),
            201 => 
            array (
                'id' => 702,
                'name' => 'Malumichampatti',
                'city_id' => '11',
                'lat' => 10.9057976,
                'long' => 77.000399,
                'radius' => 2594.28173828125,
            ),
            202 => 
            array (
                'id' => 703,
                'name' => 'Kovilpalayam',
                'city_id' => '11',
                'lat' => 11.1452936,
                'long' => 77.04028869999999,
                'radius' => 1012.2725219726562,
            ),
            203 => 
            array (
                'id' => 704,
                'name' => 'Alandurai',
                'city_id' => '11',
                'lat' => 10.9535776,
                'long' => 76.7884713,
                'radius' => 1038.0032958984375,
            ),
            204 => 
            array (
                'id' => 705,
                'name' => 'Aliyar Nagar',
                'city_id' => '11',
                'lat' => 10.4881394,
                'long' => 76.96574629999999,
                'radius' => 975.0970458984375,
            ),
            205 => 
            array (
                'id' => 706,
                'name' => 'Amaravathi Nagar',
                'city_id' => '11',
                'lat' => 13.0765694,
                'long' => 80.2080787,
                'radius' => 561.953857421875,
            ),
            206 => 
            array (
                'id' => 707,
                'name' => 'Ambarampalayam',
                'city_id' => '11',
                'lat' => 10.6363701,
                'long' => 76.954224,
                'radius' => 934.2699584960938,
            ),
            207 => 
            array (
                'id' => 708,
                'name' => 'Anamalai',
                'city_id' => '11',
                'lat' => 10.424099,
                'long' => 77.12556,
                'radius' => 210.38864135742188,
            ),
            208 => 
            array (
                'id' => 709,
                'name' => 'Angalakurichi',
                'city_id' => '11',
                'lat' => 10.5333742,
                'long' => 76.9945473,
                'radius' => 1923.5440673828125,
            ),
            209 => 
            array (
                'id' => 710,
                'name' => 'Anuparpalayam',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'name' => 'Chettipalayam',
                'city_id' => '11',
                'lat' => 10.9132206,
                'long' => 77.036902,
                'radius' => 3554.262451171875,
            ),
            211 => 
            array (
                'id' => 712,
                'name' => 'Chikkarasampalayam',
                'city_id' => '11',
                'lat' => 11.5262226,
                'long' => 77.20674269999999,
                'radius' => 688.0416259765625,
            ),
            212 => 
            array (
                'id' => 713,
                'name' => 'Chinna Negamam',
                'city_id' => '11',
                'lat' => 10.7339486,
                'long' => 77.1186733,
                'radius' => 292.3009948730469,
            ),
            213 => 
            array (
                'id' => 714,
                'name' => 'Coimbatore Aerodrome',
                'city_id' => '11',
                'lat' => 11.0302569,
                'long' => 77.0393179,
                'radius' => 210.181640625,
            ),
            214 => 
            array (
                'id' => 715,
                'name' => 'Coimbatore Central Bus Station',
                'city_id' => '11',
                'lat' => 11.0140866,
                'long' => 76.96700650000001,
                'radius' => 210.18731689453125,
            ),
            215 => 
            array (
                'id' => 716,
                'name' => 'Coimbatore Collectorate',
                'city_id' => '11',
                'lat' => 11.0622794,
                'long' => 76.9435061,
                'radius' => 210.17039489746094,
            ),
            216 => 
            array (
                'id' => 717,
                'name' => 'Coimbatore Courts',
                'city_id' => '11',
                'lat' => 11.0381645,
                'long' => 77.0375792,
                'radius' => 7856.919921875,
            ),
            217 => 
            array (
                'id' => 718,
                'name' => 'Coimbatore Industrial Estate',
                'city_id' => '11',
                'lat' => 11.0454372,
                'long' => 77.0095946,
                'radius' => 458.2770690917969,
            ),
            218 => 
            array (
                'id' => 719,
                'name' => 'Coimbatore North',
                'city_id' => '11',
                'lat' => 11.060285,
                'long' => 76.94577799999999,
                'radius' => 2129.427734375,
            ),
            219 => 
            array (
                'id' => 720,
            'name' => 'Coimbatore R.S. (Railway Station)',
                'city_id' => '11',
                'lat' => 10.9960612,
                'long' => 76.96776659999999,
                'radius' => 210.19361877441406,
            ),
            220 => 
            array (
                'id' => 721,
                'name' => 'Coimbatore Race Course',
                'city_id' => '11',
                'lat' => 10.9991378,
                'long' => 76.9772675,
                'radius' => 1367.3536376953125,
            ),
            221 => 
            array (
                'id' => 722,
                'name' => 'Commercial Tax Office',
                'city_id' => '11',
                'lat' => 11.0103322,
                'long' => 76.97547899999999,
                'radius' => 210.18862915039062,
            ),
            222 => 
            array (
                'id' => 723,
                'name' => 'Devangapet',
                'city_id' => '11',
                'lat' => 11.0049744,
                'long' => 76.956895,
                'radius' => 127.92933654785156,
            ),
            223 => 
            array (
                'id' => 724,
                'name' => 'Devanur Pudur',
                'city_id' => '11',
                'lat' => 11.5457458,
                'long' => 77.5404459,
                'radius' => 522.2765502929688,
            ),
            224 => 
            array (
                'id' => 725,
                'name' => 'Eripalayam',
                'city_id' => '11',
                'lat' => 10.5973277,
                'long' => 77.2482388,
                'radius' => 196.58169555664062,
            ),
            225 => 
            array (
                'id' => 726,
                'name' => 'Ganapathy',
                'city_id' => '11',
                'lat' => 11.0494087,
                'long' => 77.00936879999999,
                'radius' => 551.910888671875,
            ),
            226 => 
            array (
                'id' => 727,
                'name' => 'Gandhi Market',
                'city_id' => '11',
                'lat' => 19.0464176,
                'long' => 72.89602500000001,
                'radius' => 2050.976806640625,
            ),
            227 => 
            array (
                'id' => 728,
                'name' => 'Gandhi Nagar-Coimbatore',
                'city_id' => '11',
                'lat' => 10.95415,
                'long' => 76.9765475,
                'radius' => 572.3615112304688,
            ),
            228 => 
            array (
                'id' => 729,
                'name' => 'Jallipatti',
                'city_id' => '11',
                'lat' => 10.8498016,
                'long' => 77.27550819999999,
                'radius' => 552.1577758789062,
            ),
            229 => 
            array (
                'id' => 730,
                'name' => 'Gnanambika Mills',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'name' => 'Muthugoundenpudur',
                'city_id' => '11',
                'lat' => 11.0500992,
                'long' => 77.1176484,
                'radius' => 18.304332733154297,
            ),
            231 => 
            array (
                'id' => 732,
                'name' => 'N G M College',
                'city_id' => '11',
                'lat' => 10.663662,
                'long' => 76.996757,
                'radius' => 210.3081817626953,
            ),
            232 => 
            array (
                'id' => 733,
                'name' => 'Ukadam',
                'city_id' => '11',
                'lat' => 10.9902127,
                'long' => 76.96286580000002,
                'radius' => 1055.876708984375,
            ),
            233 => 
            array (
                'id' => 734,
                'name' => 'Nanda Nagar',
                'city_id' => '11',
                'lat' => 22.7446794,
                'long' => 75.8782344,
                'radius' => 879.0213623046875,
            ),
            234 => 
            array (
                'id' => 735,
                'name' => 'Jothipuram',
                'city_id' => '11',
                'lat' => 11.164051,
                'long' => 76.9484624,
                'radius' => 1596.35205078125,
            ),
            235 => 
            array (
                'id' => 736,
                'name' => 'Kadamparai Dam',
                'city_id' => '11',
                'lat' => 10.3895676,
                'long' => 77.0434934,
                'radius' => 1500.4193115234375,
            ),
            236 => 
            array (
                'id' => 737,
                'name' => 'Kaniyur',
                'city_id' => '11',
                'lat' => 10.6048985,
                'long' => 77.3776613,
                'radius' => 895.3873901367188,
            ),
            237 => 
            array (
                'id' => 738,
                'name' => 'Karamadai',
                'city_id' => '11',
                'lat' => 11.2407738,
                'long' => 76.96004289999999,
                'radius' => 2022.6904296875,
            ),
            238 => 
            array (
                'id' => 739,
                'name' => 'Katoor MTP',
                'city_id' => '11',
                'lat' => 11.028803,
                'long' => 76.9511978,
                'radius' => 3246.094970703125,
            ),
            239 => 
            array (
                'id' => 740,
                'name' => 'Kinathukadavu',
                'city_id' => '11',
                'lat' => 10.8224775,
                'long' => 77.01614359999999,
                'radius' => 3631.668212890625,
            ),
            240 => 
            array (
                'id' => 741,
                'name' => 'Kovaipudur',
                'city_id' => '11',
                'lat' => 10.9432639,
                'long' => 76.9326167,
                'radius' => 3416.671875,
            ),
            241 => 
            array (
                'id' => 742,
                'name' => 'Kovilpalayam',
                'city_id' => '11',
                'lat' => 11.1452936,
                'long' => 77.04028869999999,
                'radius' => 1012.2725219726562,
            ),
            242 => 
            array (
                'id' => 743,
                'name' => 'Krishnaswamy Nagar',
                'city_id' => '11',
                'lat' => 11.0020549,
                'long' => 76.9967071,
                'radius' => 524.504150390625,
            ),
            243 => 
            array (
                'id' => 744,
                'name' => 'Kunniyamuthur',
                'city_id' => '11',
                'lat' => 10.9531499,
                'long' => 76.9522836,
                'radius' => 2618.6396484375,
            ),
            244 => 
            array (
                'id' => 745,
                'name' => 'Kurichikottai',
                'city_id' => '11',
                'lat' => 10.5082216,
                'long' => 77.2286601,
                'radius' => 263.56781005859375,
            ),
            245 => 
            array (
                'id' => 746,
                'name' => 'Kurudampalayam',
                'city_id' => '11',
                'lat' => 11.0845202,
                'long' => 76.9354979,
                'radius' => 3740.713134765625,
            ),
            246 => 
            array (
                'id' => 747,
                'name' => 'Lawley Road',
                'city_id' => '11',
                'lat' => 11.0124333,
                'long' => 76.94089989999999,
                'radius' => 270.99945068359375,
            ),
            247 => 
            array (
                'id' => 748,
                'name' => 'Madathukulam',
                'city_id' => '11',
                'lat' => 10.5595839,
                'long' => 77.36546109999999,
                'radius' => 1074.5396728515625,
            ),
            248 => 
            array (
                'id' => 749,
                'name' => 'Mahadevapuram',
                'city_id' => '11',
                'lat' => 17.8194686,
                'long' => 80.93736229999999,
                'radius' => 2963.833740234375,
            ),
            249 => 
            array (
                'id' => 750,
                'name' => 'Mahalingapuram',
                'city_id' => '11',
                'lat' => 13.0572703,
                'long' => 80.2342226,
                'radius' => 497.75628662109375,
            ),
            250 => 
            array (
                'id' => 751,
                'name' => 'Malayandipattinam',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'name' => 'Marapettai',
                'city_id' => '11',
                'lat' => 10.6586787,
                'long' => 77.01308139999999,
                'radius' => 678.9586181640625,
            ),
            252 => 
            array (
                'id' => 753,
                'name' => 'Maruthamalai',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'name' => 'Mettupalayam East',
                'city_id' => '11',
                'lat' => 11.2890873,
                'long' => 76.94096859999999,
                'radius' => 2693.5732421875,
            ),
            254 => 
            array (
                'id' => 755,
                'name' => 'Vaiyampalayam',
                'city_id' => '11',
                'lat' => 11.135634,
                'long' => 77.0035462,
                'radius' => 368.8465576171875,
            ),
            255 => 
            array (
                'id' => 756,
                'name' => 'Valliamkadu',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'name' => 'Nanjundapuram',
                'city_id' => '11',
                'lat' => 10.9806403,
                'long' => 76.997427,
                'radius' => 1396.23095703125,
            ),
            257 => 
            array (
                'id' => 758,
                'name' => 'Narasimhanaickenpalyam',
                'city_id' => '11',
                'lat' => 11.1177584,
                'long' => 76.9354979,
                'radius' => 4229.05615234375,
            ),
            258 => 
            array (
                'id' => 759,
                'name' => 'Neelikonampalayam',
                'city_id' => '11',
                'lat' => 11.0199304,
                'long' => 77.0420541,
                'radius' => 2879.410888671875,
            ),
            259 => 
            array (
                'id' => 760,
                'name' => 'Negamam',
                'city_id' => '11',
                'lat' => 10.742618,
                'long' => 77.10320949999999,
                'radius' => 739.5772094726562,
            ),
            260 => 
            array (
                'id' => 761,
                'name' => 'NGGO Colony',
                'city_id' => '11',
                'lat' => 11.0932072,
                'long' => 76.944141,
                'radius' => 1029.982421875,
            ),
            261 => 
            array (
                'id' => 762,
                'name' => 'Ondipudur',
                'city_id' => '11',
                'lat' => 10.9982815,
                'long' => 77.053568,
                'radius' => 2107.575927734375,
            ),
            262 => 
            array (
                'id' => 763,
                'name' => 'Othakalmandapam',
                'city_id' => '11',
                'lat' => 10.8743614,
                'long' => 77.0017465,
                'radius' => 2150.74853515625,
            ),
            263 => 
            array (
                'id' => 764,
                'name' => 'Pannimade',
                'city_id' => '11',
                'lat' => 11.0864057,
                'long' => 76.9153281,
                'radius' => 1639.62744140625,
            ),
            264 => 
            array (
                'id' => 765,
                'name' => 'Pappanaicken Pudur',
                'city_id' => '11',
                'lat' => 11.0204698,
                'long' => 76.9268541,
                'radius' => 2572.03857421875,
            ),
            265 => 
            array (
                'id' => 766,
                'name' => 'Pappanaickenpalayam',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'name' => 'Pappanaickenpalayam West',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'name' => 'Peelamedu',
                'city_id' => '11',
                'lat' => 11.0331511,
                'long' => 77.02766,
                'radius' => 5593.19873046875,
            ),
            268 => 
            array (
                'id' => 769,
                'name' => 'Peelamedu East',
                'city_id' => '11',
                'lat' => 11.0331511,
                'long' => 77.02766,
                'radius' => 5593.19873046875,
            ),
            269 => 
            array (
                'id' => 770,
                'name' => 'Perianaickenpalayam',
                'city_id' => '11',
                'lat' => 11.1510082,
                'long' => 76.9354979,
                'radius' => 3089.081787109375,
            ),
            270 => 
            array (
                'id' => 771,
                'name' => 'Pollachi',
                'city_id' => '11',
                'lat' => 10.6572737,
                'long' => 77.0106693,
                'radius' => 6777.640625,
            ),
            271 => 
            array (
                'id' => 772,
                'name' => 'Pollachi Bazaar',
                'city_id' => '11',
                'lat' => 10.656405,
                'long' => 77.00854629999999,
                'radius' => 219.69862365722656,
            ),
            272 => 
            array (
                'id' => 773,
                'name' => 'Pulankinar',
                'city_id' => '11',
                'lat' => 10.5965603,
                'long' => 77.19021219999999,
                'radius' => 1123.4588623046875,
            ),
            273 => 
            array (
                'id' => 774,
                'name' => 'Puliyakulam',
                'city_id' => '11',
                'lat' => 11.0052962,
                'long' => 76.99166749999999,
                'radius' => 1067.2042236328125,
            ),
            274 => 
            array (
                'id' => 775,
                'name' => 'Ram Nagar-Coimbatore',
                'city_id' => '11',
                'lat' => 11.0123501,
                'long' => 76.96286580000002,
                'radius' => 1400.3818359375,
            ),
            275 => 
            array (
                'id' => 776,
                'name' => 'Ramanamudalipudur',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'name' => 'Ramanathapuram',
                'city_id' => '11',
                'lat' => 9.370588999999999,
                'long' => 78.83345659999999,
                'radius' => 4803.20947265625,
            ),
            277 => 
            array (
                'id' => 778,
                'name' => 'Ranganatha Puram',
                'city_id' => '11',
                'lat' => 12.0739464,
                'long' => 79.87868329999999,
                'radius' => 1265.803466796875,
            ),
            278 => 
            array (
                'id' => 779,
                'name' => 'Ratnapuri',
                'city_id' => '11',
                'lat' => 23.344413,
                'long' => 75.0271621,
                'radius' => 312.64276123046875,
            ),
            279 => 
            array (
                'id' => 780,
                'name' => 'Redfields',
                'city_id' => '11',
                'lat' => 11.0050468,
                'long' => 76.9859077,
                'radius' => 890.9534301757812,
            ),
            280 => 
            array (
                'id' => 781,
                'name' => 'Saibaba Mission',
                'city_id' => '11',
                'lat' => 11.0262483,
                'long' => 76.94735299999999,
                'radius' => 210.18304443359375,
            ),
            281 => 
            array (
                'id' => 782,
                'name' => 'Sarcarsamakulam',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'name' => 'Government College Of Technology',
                'city_id' => '11',
                'lat' => 11.0200723,
                'long' => 76.93712409999999,
                'radius' => 210.18521118164062,
            ),
            283 => 
            array (
                'id' => 784,
                'name' => 'Gomangalam',
                'city_id' => '11',
                'lat' => 10.6339801,
                'long' => 77.161458,
                'radius' => 774.205322265625,
            ),
            284 => 
            array (
                'id' => 785,
                'name' => 'Gudimangalam',
                'city_id' => '11',
                'lat' => 10.6912678,
                'long' => 77.2793059,
                'radius' => 967.5935668945312,
            ),
            285 => 
            array (
                'id' => 786,
                'name' => 'Irugur',
                'city_id' => '11',
                'lat' => 11.0209236,
                'long' => 77.0650809,
                'radius' => 1993.239013671875,
            ),
            286 => 
            array (
                'id' => 787,
                'name' => 'Iyerpadi',
                'city_id' => '11',
                'lat' => 10.3608087,
                'long' => 76.97870759999999,
                'radius' => 2427.600341796875,
            ),
            287 => 
            array (
                'id' => 788,
                'name' => 'Sethurmadai',
                'city_id' => '11',
                'lat' => 10.5107424,
                'long' => 76.8807437,
                'radius' => 1622.284423828125,
            ),
            288 => 
            array (
                'id' => 789,
                'name' => 'Sholayar',
                'city_id' => '11',
                'lat' => 10.312611,
                'long' => 76.8749787,
                'radius' => 2266.42822265625,
            ),
            289 => 
            array (
                'id' => 790,
                'name' => 'Sidhapudur',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'name' => 'Singanallur',
                'city_id' => '11',
                'lat' => 10.9987351,
                'long' => 77.0319784,
                'radius' => 1760.193115234375,
            ),
            291 => 
            array (
                'id' => 792,
                'name' => 'Sulur',
                'city_id' => '11',
                'lat' => 11.0265378,
                'long' => 77.1312586,
                'radius' => 3371.161865234375,
            ),
            292 => 
            array (
                'id' => 793,
                'name' => 'Somandurai',
                'city_id' => '11',
                'lat' => 10.5595947,
                'long' => 76.9959872,
                'radius' => 4760.2197265625,
            ),
            293 => 
            array (
                'id' => 794,
                'name' => 'Sowripalayam',
                'city_id' => '11',
                'lat' => 11.0110911,
                'long' => 77.0084983,
                'radius' => 1832.0263671875,
            ),
            294 => 
            array (
                'id' => 795,
                'name' => 'Sri Ramakrishna Vidyalaya',
                'city_id' => '11',
                'lat' => 11.1488217,
                'long' => 76.94443969999999,
                'radius' => 210.13983154296875,
            ),
            295 => 
            array (
                'id' => 796,
                'name' => 'Sukravar Pettai',
                'city_id' => '11',
                'lat' => 11.0093325,
                'long' => 76.9571046,
                'radius' => 1110.3184814453125,
            ),
            296 => 
            array (
                'id' => 797,
                'name' => 'Sundaraperumalkoil',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'name' => 'T. Kottampatti',
                'city_id' => '11',
                'lat' => 11.3105026,
                'long' => 78.0710361,
                'radius' => 1117.7745361328125,
            ),
            298 => 
            array (
                'id' => 799,
                'name' => 'Tadiyalur',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'name' => 'Tatabad East',
                'city_id' => '11',
                'lat' => 11.0225237,
                'long' => 76.9606436,
                'radius' => 1849.942138671875,
            ),
            300 => 
            array (
                'id' => 801,
                'name' => 'Tatabad',
                'city_id' => '11',
                'lat' => 11.0225237,
                'long' => 76.9606436,
                'radius' => 1849.942138671875,
            ),
            301 => 
            array (
                'id' => 802,
                'name' => 'Telungupalayam',
                'city_id' => '11',
                'lat' => 10.9948496,
                'long' => 76.9273683,
                'radius' => 2129.905517578125,
            ),
            302 => 
            array (
                'id' => 803,
                'name' => 'Thadagam',
                'city_id' => '11',
                'lat' => 11.0412439,
                'long' => 76.9246062,
                'radius' => 7559.34912109375,
            ),
            303 => 
            array (
                'id' => 804,
                'name' => 'Thekkampatti',
                'city_id' => '11',
                'lat' => 11.2563078,
                'long' => 76.887229,
                'radius' => 455.7166442871094,
            ),
            304 => 
            array (
                'id' => 805,
                'name' => 'Thondamuthur',
                'city_id' => '11',
                'lat' => 10.9899245,
                'long' => 76.84088129999999,
                'radius' => 2743.42578125,
            ),
            305 => 
            array (
                'id' => 806,
                'name' => 'Udumalpet Bazar',
                'city_id' => '11',
                'lat' => 10.656405,
                'long' => 77.00854629999999,
                'radius' => 219.69862365722656,
            ),
            306 => 
            array (
                'id' => 807,
                'name' => 'Udumalaipettai',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'name' => 'Uppilipalayam',
                'city_id' => '11',
                'lat' => 11.0126165,
                'long' => 77.0190056,
                'radius' => 2072.929443359375,
            ),
            308 => 
            array (
                'id' => 809,
                'name' => 'Zamin Muthur',
                'city_id' => '11',
                'lat' => 10.6743746,
                'long' => 76.9729472,
                'radius' => 1345.498291015625,
            ),
            309 => 
            array (
                'id' => 810,
                'name' => 'Waterfalls Estate',
                'city_id' => '11',
                'lat' => 10.3108531,
                'long' => 76.9592486,
                'radius' => 210.42605590820312,
            ),
            310 => 
            array (
                'id' => 811,
                'name' => 'Vettaikaranpudur',
                'city_id' => '11',
                'lat' => 10.562861,
                'long' => 76.9167831,
                'radius' => 1572.6435546875,
            ),
            311 => 
            array (
                'id' => 812,
                'name' => 'Vellalore C.B.E',
                'city_id' => '11',
                'lat' => 10.9777936,
                'long' => 77.02766,
                'radius' => 3793.692138671875,
            ),
            312 => 
            array (
                'id' => 813,
                'name' => 'Velandipalayam',
                'city_id' => '11',
                'lat' => 11.0282375,
                'long' => 76.9304557,
                'radius' => 617.8160400390625,
            ),
            313 => 
            array (
                'id' => 814,
                'name' => 'Valparai',
                'city_id' => '11',
                'lat' => 10.3235908,
                'long' => 76.951003,
                'radius' => 5244.60595703125,
            ),
            314 => 
            array (
                'id' => 815,
                'name' => 'Venkatesa Oil Mills',
                'city_id' => '11',
                'lat' => 11.0167952,
                'long' => 76.9770796,
                'radius' => 210.1863555908203,
            ),
            315 => 
            array (
                'id' => 816,
                'name' => 'Valavadi',
                'city_id' => '11',
                'lat' => 10.5465941,
                'long' => 77.1815867,
                'radius' => 849.2168579101562,
            ),
            316 => 
            array (
                'id' => 817,
                'name' => 'Vadasithur',
                'city_id' => '11',
                'lat' => 10.837781,
                'long' => 77.083787,
                'radius' => 926.9244384765625,
            ),
            317 => 
            array (
                'id' => 818,
                'name' => 'Uthukuli Zamin',
                'city_id' => '11',
                'lat' => 10.6512417,
                'long' => 76.9801476,
                'radius' => 984.413330078125,
            ),
            318 => 
            array (
                'id' => 819,
                'name' => 'Chinniampalayam',
                'city_id' => '11',
                'lat' => 10.6549738,
                'long' => 77.0362967,
                'radius' => 1458.916748046875,
            ),
            319 => 
            array (
                'id' => 820,
                'name' => 'Neelambur',
                'city_id' => '11',
                'lat' => 11.0662279,
                'long' => 77.0881034,
                'radius' => 2918.035400390625,
            ),
            320 => 
            array (
                'id' => 821,
                'name' => 'Pillur Dam',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'name' => 'Selvapuram',
                'city_id' => '11',
                'lat' => 10.9918547,
                'long' => 76.9369384,
                'radius' => 601.3297119140625,
            ),
            322 => 
            array (
                'id' => 823,
                'name' => 'Sirukundra',
                'city_id' => '11',
                'lat' => 10.3055524,
                'long' => 76.9625057,
                'radius' => 226.46548461914062,
            ),
            323 => 
            array (
                'id' => 824,
                'name' => 'Thirumurthinagar',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'name' => 'Coimbatore Bazar',
                'city_id' => '11',
                'lat' => 11.0115059,
                'long' => 76.9843702,
                'radius' => 210.18821716308594,
            ),
            325 => 
            array (
                'id' => 826,
                'name' => 'Coimbatore Central',
                'city_id' => '11',
                'lat' => 11.0157749,
                'long' => 76.95556429999999,
                'radius' => 210.1867218017578,
            ),
            326 => 
            array (
                'id' => 827,
                'name' => 'Karamalai Bazar',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'name' => 'Kavundampalyam Colony',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'name' => 'Kuppakonanpudur',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'name' => 'Madukkarai',
                'city_id' => '11',
                'lat' => 10.9137214,
                'long' => 76.9527836,
                'radius' => 3809.7216796875,
            ),
            330 => 
            array (
                'id' => 831,
                'name' => 'Madukkarai Kasba',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'name' => 'Mettupalayam Bazaar',
                'city_id' => '11',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'name' => 'Penderghast Road',
                'city_id' => '10',
                'lat' => 17.4400533,
                'long' => 78.4830948,
                'radius' => 619.7830200195312,
            ),
            333 => 
            array (
                'id' => 834,
                'name' => 'Troop Bazar',
                'city_id' => '10',
                'lat' => 17.3846192,
                'long' => 78.47874639999999,
                'radius' => 775.1837768554688,
            ),
            334 => 
            array (
                'id' => 835,
                'name' => 'Marredpally',
                'city_id' => '10',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'name' => 'Langer House',
                'city_id' => '10',
                'lat' => 17.3781533,
                'long' => 78.4207757,
                'radius' => 2027.17431640625,
            ),
            336 => 
            array (
                'id' => 837,
                'name' => 'Sanath Nagar',
                'city_id' => '10',
                'lat' => 17.4526898,
                'long' => 78.44343289999999,
                'radius' => 1853.8841552734375,
            ),
            337 => 
            array (
                'id' => 838,
                'name' => 'Bolaram',
                'city_id' => '10',
                'lat' => 17.5287165,
                'long' => 78.5149691,
                'radius' => 6018.95458984375,
            ),
            338 => 
            array (
                'id' => 839,
                'name' => 'Srinagar Colony Main Road',
                'city_id' => '10',
                'lat' => 17.4301709,
                'long' => 78.43740009999999,
                'radius' => 1338.213623046875,
            ),
            339 => 
            array (
                'id' => 840,
                'name' => 'Sitaphal Mandi',
                'city_id' => '10',
                'lat' => 17.4267948,
                'long' => 78.5193163,
                'radius' => 623.0778198242188,
            ),
            340 => 
            array (
                'id' => 841,
                'name' => 'Shanti Nagar',
                'city_id' => '10',
                'lat' => 17.4011088,
                'long' => 78.4556565,
                'radius' => 413.2126159667969,
            ),
            341 => 
            array (
                'id' => 842,
                'name' => 'Saidabad Colony',
                'city_id' => '10',
                'lat' => 17.3574639,
                'long' => 78.5109914,
                'radius' => 1133.281005859375,
            ),
            342 => 
            array (
                'id' => 843,
                'name' => 'Secunderabad',
                'city_id' => '10',
                'lat' => 17.4399295,
                'long' => 78.4982741,
                'radius' => 30526.103515625,
            ),
            343 => 
            array (
                'id' => 844,
                'name' => 'Anand Nagar',
                'city_id' => '10',
                'lat' => 17.411341,
                'long' => 78.4563671,
                'radius' => 490.09185791015625,
            ),
            344 => 
            array (
                'id' => 845,
                'name' => 'Ie Moulali',
                'city_id' => '10',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'name' => 'Himayat Nagar X Roads',
                'city_id' => '10',
                'lat' => 17.4028753,
                'long' => 78.4830959,
                'radius' => 1143.8197021484375,
            ),
            346 => 
            array (
                'id' => 847,
                'name' => 'Lakdi Ka Pul',
                'city_id' => '10',
                'lat' => 17.3992721,
                'long' => 78.4627103,
                'radius' => 1278.5487060546875,
            ),
            347 => 
            array (
                'id' => 848,
                'name' => 'Saleem Nagar',
                'city_id' => '10',
                'lat' => 17.3734125,
                'long' => 78.51141849999999,
                'radius' => 589.620361328125,
            ),
            348 => 
            array (
                'id' => 849,
                'name' => 'Sarjapur Road',
                'city_id' => '9',
                'lat' => 12.9033473,
                'long' => 77.7041732,
                'radius' => 10763.3779296875,
            ),
            349 => 
            array (
                'id' => 850,
                'name' => 'Whitefield',
                'city_id' => '9',
                'lat' => 12.9697999,
                'long' => 77.7499467,
                'radius' => 5694.716796875,
            ),
            350 => 
            array (
                'id' => 851,
                'name' => 'Bannerghatta Road',
                'city_id' => '9',
                'lat' => 12.8739421,
                'long' => 77.5945662,
                'radius' => 9448.4609375,
            ),
            351 => 
            array (
                'id' => 852,
                'name' => 'Electronic City',
                'city_id' => '9',
                'lat' => 12.8399389,
                'long' => 77.6770031,
                'radius' => 5716.908203125,
            ),
            352 => 
            array (
                'id' => 853,
                'name' => 'HSR Layout',
                'city_id' => '9',
                'lat' => 12.9081357,
                'long' => 77.64760799999999,
                'radius' => 3040.9423828125,
            ),
            353 => 
            array (
                'id' => 854,
                'name' => 'Jayanagar',
                'city_id' => '9',
                'lat' => 12.9250074,
                'long' => 77.5938028,
                'radius' => 2609.901611328125,
            ),
            354 => 
            array (
                'id' => 855,
                'name' => 'JP Nagar',
                'city_id' => '9',
                'lat' => 12.910491,
                'long' => 77.5857168,
                'radius' => 6396.57861328125,
            ),
            355 => 
            array (
                'id' => 856,
                'name' => 'Hosur Road',
                'city_id' => '9',
                'lat' => 12.8550364,
                'long' => 77.66519579999999,
                'radius' => 17338.203125,
            ),
            356 => 
            array (
                'id' => 857,
                'name' => 'Indira Nagar',
                'city_id' => '9',
                'lat' => 12.9718915,
                'long' => 77.6411545,
                'radius' => 1899.6619873046875,
            ),
            357 => 
            array (
                'id' => 858,
                'name' => 'Koramangala',
                'city_id' => '9',
                'lat' => 12.9279232,
                'long' => 77.62710779999999,
                'radius' => 3815.471923828125,
            ),
            358 => 
            array (
                'id' => 859,
                'name' => 'Yelahanka',
                'city_id' => '9',
                'lat' => 13.1004849,
                'long' => 77.5940134,
                'radius' => 5252.78125,
            ),
            359 => 
            array (
                'id' => 860,
                'name' => 'Hesaraghatta Main Road',
                'city_id' => '9',
                'lat' => 13.0929403,
                'long' => 77.48988190000001,
                'radius' => 5728.927734375,
            ),
            360 => 
            array (
                'id' => 861,
                'name' => 'Devanahalli',
                'city_id' => '9',
                'lat' => 13.2417155,
                'long' => 77.71373059999999,
                'radius' => 1914.62890625,
            ),
            361 => 
            array (
                'id' => 862,
                'name' => 'Marathahalli',
                'city_id' => '9',
                'lat' => 12.9591722,
                'long' => 77.697419,
                'radius' => 2812.542236328125,
            ),
            362 => 
            array (
                'id' => 863,
                'name' => 'Hebbal',
                'city_id' => '9',
                'lat' => 13.0357695,
                'long' => 77.5970222,
                'radius' => 1628.52490234375,
            ),
            363 => 
            array (
                'id' => 864,
                'name' => 'Kanakapura Road',
                'city_id' => '9',
                'lat' => 12.8605204,
                'long' => 77.5293743,
                'radius' => 11204.453125,
            ),
            364 => 
            array (
                'id' => 865,
                'name' => 'Anekal',
                'city_id' => '9',
                'lat' => 12.7105259,
                'long' => 77.6911295,
                'radius' => 4813.025390625,
            ),
            365 => 
            array (
                'id' => 866,
                'name' => 'Hennur Road',
                'city_id' => '9',
                'lat' => 13.0778263,
                'long' => 77.65320849999999,
                'radius' => 1718.91943359375,
            ),
            366 => 
            array (
                'id' => 867,
                'name' => 'C V Raman Nagar',
                'city_id' => '9',
                'lat' => 12.9854542,
                'long' => 77.66392479999999,
                'radius' => 2320.46142578125,
            ),
            367 => 
            array (
                'id' => 868,
                'name' => 'Kalyan Nagar',
                'city_id' => '9',
                'lat' => 13.0280047,
                'long' => 77.6399711,
                'radius' => 1812.20166015625,
            ),
            368 => 
            array (
                'id' => 869,
                'name' => 'RT Nagar',
                'city_id' => '9',
                'lat' => 13.0195677,
                'long' => 77.5968131,
                'radius' => 1401.7310791015625,
            ),
            369 => 
            array (
                'id' => 870,
                'name' => 'Jalahalli',
                'city_id' => '9',
                'lat' => 13.0527646,
                'long' => 77.5418986,
                'radius' => 2823.74365234375,
            ),
            370 => 
            array (
                'id' => 871,
                'name' => 'HRBR Layout',
                'city_id' => '9',
                'lat' => 13.0191445,
                'long' => 77.6464534,
                'radius' => 1721.9403076171875,
            ),
            371 => 
            array (
                'id' => 872,
                'name' => 'BTM Layout',
                'city_id' => '9',
                'lat' => 12.9165757,
                'long' => 77.6101163,
                'radius' => 2231.65234375,
            ),
            372 => 
            array (
                'id' => 873,
                'name' => 'Ramamurthy Nagar',
                'city_id' => '9',
                'lat' => 13.0084887,
                'long' => 77.6737028,
                'radius' => 133.9771270751953,
            ),
            373 => 
            array (
                'id' => 874,
                'name' => 'Brooke Field',
                'city_id' => '9',
                'lat' => 12.9712301,
                'long' => 77.7148376,
                'radius' => 2120.870361328125,
            ),
            374 => 
            array (
                'id' => 875,
                'name' => 'Jakkur',
                'city_id' => '9',
                'lat' => 13.0631411,
                'long' => 77.62067689999999,
                'radius' => 813.863525390625,
            ),
            375 => 
            array (
                'id' => 876,
                'name' => 'Dollars Colony',
                'city_id' => '9',
                'lat' => 13.041526,
                'long' => 77.5683899,
                'radius' => 710.366943359375,
            ),
            376 => 
            array (
                'id' => 877,
                'name' => 'Abbigere',
                'city_id' => '9',
                'lat' => 13.0762712,
                'long' => 77.5255683,
                'radius' => 1602.3466796875,
            ),
            377 => 
            array (
                'id' => 878,
                'name' => 'Rajanukunte',
                'city_id' => '9',
                'lat' => 13.1870068,
                'long' => 77.5501957,
                'radius' => 3780.103271484375,
            ),
            378 => 
            array (
                'id' => 879,
                'name' => 'G M Palya',
                'city_id' => '9',
                'lat' => 12.9750721,
                'long' => 77.665865,
                'radius' => 719.3688354492188,
            ),
            379 => 
            array (
                'id' => 880,
                'name' => 'Kundalahalli',
                'city_id' => '9',
                'lat' => 12.9689968,
                'long' => 77.72088529999999,
                'radius' => 901.3836059570312,
            ),
            380 => 
            array (
                'id' => 881,
                'name' => 'Madiwala',
                'city_id' => '9',
                'lat' => 12.9226373,
                'long' => 77.6174442,
                'radius' => 587.5640258789062,
            ),
            381 => 
            array (
                'id' => 882,
                'name' => 'Fraser Town',
                'city_id' => '9',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'name' => 'Chandapur',
                'city_id' => '9',
                'lat' => 12.8004945,
                'long' => 77.713612,
                'radius' => 1800.2247314453125,
            ),
            383 => 
            array (
                'id' => 884,
                'name' => 'Gottigere',
                'city_id' => '9',
                'lat' => 12.8552384,
                'long' => 77.58689059999999,
                'radius' => 1824.55322265625,
            ),
            384 => 
            array (
                'id' => 885,
                'name' => 'Basavanagar',
                'city_id' => '9',
                'lat' => 12.9670863,
                'long' => 77.6808128,
                'radius' => 871.8768310546875,
            ),
            385 => 
            array (
                'id' => 886,
                'name' => 'Nagarbhavi',
                'city_id' => '9',
                'lat' => 12.9599448,
                'long' => 77.5082833,
                'radius' => 3366.873046875,
            ),
            386 => 
            array (
                'id' => 887,
                'name' => 'Belandur',
                'city_id' => '9',
                'lat' => 12.9260308,
                'long' => 77.6762463,
                'radius' => 3577.2353515625,
            ),
            387 => 
            array (
                'id' => 888,
                'name' => 'Hoskote',
                'city_id' => '9',
                'lat' => 13.0730023,
                'long' => 77.7966975,
                'radius' => 3337.107177734375,
            ),
            388 => 
            array (
                'id' => 889,
                'name' => 'Chamarajpet',
                'city_id' => '9',
                'lat' => 12.9570097,
                'long' => 77.5634409,
                'radius' => 1433.3052978515625,
            ),
            389 => 
            array (
                'id' => 890,
                'name' => 'Richards Town',
                'city_id' => '9',
                'lat' => 13.0063217,
                'long' => 77.614948,
                'radius' => 914.0557250976562,
            ),
            390 => 
            array (
                'id' => 891,
                'name' => 'Lavelle Road',
                'city_id' => '9',
                'lat' => 12.9711522,
                'long' => 77.5978612,
                'radius' => 690.8731689453125,
            ),
            391 => 
            array (
                'id' => 892,
                'name' => 'Kodigehalli',
                'city_id' => '9',
                'lat' => 13.0695205,
                'long' => 77.58228439999999,
                'radius' => 1462.396728515625,
            ),
            392 => 
            array (
                'id' => 893,
                'name' => 'Chikkajala',
                'city_id' => '9',
                'lat' => 13.1715223,
                'long' => 77.6356486,
                'radius' => 1657.9881591796875,
            ),
            393 => 
            array (
                'id' => 894,
                'name' => 'Hanumanth Nagar',
                'city_id' => '9',
                'lat' => 12.9425468,
                'long' => 77.5625781,
                'radius' => 735.048583984375,
            ),
            394 => 
            array (
                'id' => 895,
                'name' => 'Akshaya Nagar',
                'city_id' => '9',
                'lat' => 13.017294,
                'long' => 77.6815285,
                'radius' => 260.5054931640625,
            ),
            395 => 
            array (
                'id' => 896,
                'name' => 'Thanisandra',
                'city_id' => '9',
                'lat' => 13.0568653,
                'long' => 77.6235264,
                'radius' => 2408.106689453125,
            ),
            396 => 
            array (
                'id' => 897,
                'name' => 'Sarjapur',
                'city_id' => '9',
                'lat' => 12.8549222,
                'long' => 77.78811759999999,
                'radius' => 1961.1002197265625,
            ),
            397 => 
            array (
                'id' => 898,
                'name' => 'Hegde Nagar',
                'city_id' => '9',
                'lat' => 13.0724417,
                'long' => 77.6323623,
                'radius' => 1702.1878662109375,
            ),
            398 => 
            array (
                'id' => 899,
                'name' => 'Jigani Industrial Area',
                'city_id' => '9',
                'lat' => 12.8192498,
                'long' => 77.68789389999999,
                'radius' => 209.50494384765625,
            ),
            399 => 
            array (
                'id' => 900,
                'name' => 'Mathikere',
                'city_id' => '9',
                'lat' => 13.0334194,
                'long' => 77.56397609999999,
                'radius' => 3031.771240234375,
            ),
            400 => 
            array (
                'id' => 901,
                'name' => 'Rest House Road',
                'city_id' => '9',
                'lat' => 12.9729961,
                'long' => 77.60601369999999,
                'radius' => 243.20631408691406,
            ),
            401 => 
            array (
                'id' => 902,
                'name' => 'Begur Road',
                'city_id' => '9',
                'lat' => 12.8890289,
                'long' => 77.6256925,
                'radius' => 2180.5693359375,
            ),
            402 => 
            array (
                'id' => 903,
                'name' => 'Rajajinagar',
                'city_id' => '9',
                'lat' => 12.9900578,
                'long' => 77.5524925,
                'radius' => 3210.689208984375,
            ),
            403 => 
            array (
                'id' => 904,
                'name' => 'MG Road',
                'city_id' => '9',
                'lat' => 12.9726966,
                'long' => 77.6195894,
                'radius' => 479410.03125,
            ),
            404 => 
            array (
                'id' => 905,
                'name' => 'HBR Layout',
                'city_id' => '9',
                'lat' => 13.0377347,
                'long' => 77.62882789999999,
                'radius' => 2750.319580078125,
            ),
            405 => 
            array (
                'id' => 906,
                'name' => 'Banaswadi',
                'city_id' => '9',
                'lat' => 13.0119571,
                'long' => 77.64713069999999,
                'radius' => 1743.51806640625,
            ),
            406 => 
            array (
                'id' => 907,
                'name' => 'Uttarahalli',
                'city_id' => '9',
                'lat' => 12.9069823,
                'long' => 77.552059,
                'radius' => 1745.599853515625,
            ),
            407 => 
            array (
                'id' => 908,
                'name' => 'Airport Road',
                'city_id' => '9',
                'lat' => 12.9548476,
                'long' => 77.6848959,
                'radius' => 6971.255859375,
            ),
            408 => 
            array (
                'id' => 909,
                'name' => 'Thippasandra',
                'city_id' => '9',
                'lat' => 12.9123424,
                'long' => 77.75292929999999,
                'radius' => 2355.11767578125,
            ),
            409 => 
            array (
                'id' => 910,
                'name' => 'Banashankari',
                'city_id' => '9',
                'lat' => 12.9254533,
                'long' => 77.546757,
                'radius' => 4525.09765625,
            ),
            410 => 
            array (
                'id' => 911,
                'name' => 'Bagalur',
                'city_id' => '9',
                'lat' => 13.151285,
                'long' => 77.668837,
                'radius' => 2073.1796875,
            ),
            411 => 
            array (
                'id' => 912,
                'name' => 'Horamavu',
                'city_id' => '9',
                'lat' => 13.0250726,
                'long' => 77.65966499999999,
                'radius' => 3396.325927734375,
            ),
            412 => 
            array (
                'id' => 913,
                'name' => 'KR Puram',
                'city_id' => '9',
                'lat' => 13.0040167,
                'long' => 77.6877765,
                'radius' => 9668.53515625,
            ),
            413 => 
            array (
                'id' => 914,
                'name' => 'Bommanahalli',
                'city_id' => '9',
                'lat' => 12.8983601,
                'long' => 77.6179465,
                'radius' => 2210.444091796875,
            ),
            414 => 
            array (
                'id' => 915,
                'name' => 'OMBR Layout',
                'city_id' => '9',
                'lat' => 13.0075666,
                'long' => 77.65046640000001,
                'radius' => 1413.5103759765625,
            ),
            415 => 
            array (
                'id' => 916,
                'name' => 'Mysore Road',
                'city_id' => '9',
                'lat' => 12.6132808,
                'long' => 77.0690353,
                'radius' => 55184.1953125,
            ),
            416 => 
            array (
                'id' => 917,
                'name' => 'Silkboard',
                'city_id' => '9',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'name' => 'RMV Extension Stage',
                'city_id' => '9',
                'lat' => 13.0422174,
                'long' => 77.5700444,
                'radius' => 2325.51220703125,
            ),
            418 => 
            array (
                'id' => 919,
                'name' => 'Old Madras Road',
                'city_id' => '9',
                'lat' => 13.0292811,
                'long' => 77.72570019999999,
                'radius' => 2713.45361328125,
            ),
            419 => 
            array (
                'id' => 920,
                'name' => 'Kasturi Nagar',
                'city_id' => '9',
                'lat' => 13.0060924,
                'long' => 77.65944979999999,
                'radius' => 1300.834716796875,
            ),
            420 => 
            array (
                'id' => 921,
                'name' => 'Tumkur Road',
                'city_id' => '9',
                'lat' => 12.9120129,
                'long' => 77.5435419,
                'radius' => 231.63880920410156,
            ),
            421 => 
            array (
                'id' => 922,
                'name' => 'Richmond Road',
                'city_id' => '9',
                'lat' => 12.9665636,
                'long' => 77.60836619999999,
                'radius' => 1347.6082763671875,
            ),
            422 => 
            array (
                'id' => 923,
                'name' => 'Vidyaranyapura',
                'city_id' => '9',
                'lat' => 13.0857908,
                'long' => 77.55609799999999,
                'radius' => 3126.695556640625,
            ),
            423 => 
            array (
                'id' => 924,
                'name' => 'Mahadevapura',
                'city_id' => '9',
                'lat' => 12.9912802,
                'long' => 77.687367,
                'radius' => 3235.420654296875,
            ),
            424 => 
            array (
                'id' => 925,
                'name' => 'Rajarajeshwari Nagar',
                'city_id' => '9',
                'lat' => 12.9242199,
                'long' => 77.5191195,
                'radius' => 4131.69140625,
            ),
            425 => 
            array (
                'id' => 926,
                'name' => 'Malleshwaram',
                'city_id' => '9',
                'lat' => 13.0030624,
                'long' => 77.56429279999999,
                'radius' => 2632.969482421875,
            ),
            426 => 
            array (
                'id' => 927,
                'name' => 'AECS Layout',
                'city_id' => '9',
                'lat' => 12.9629354,
                'long' => 77.7122996,
                'radius' => 829.1010131835938,
            ),
            427 => 
            array (
                'id' => 928,
                'name' => 'Chikkaballapur',
                'city_id' => '9',
                'lat' => 13.432366,
                'long' => 77.7280396,
                'radius' => 3130.89404296875,
            ),
            428 => 
            array (
                'id' => 929,
                'name' => 'Defence Colony',
                'city_id' => '9',
                'lat' => 12.9766094,
                'long' => 77.6435896,
                'radius' => 429.1708679199219,
            ),
            429 => 
            array (
                'id' => 930,
                'name' => 'Kanaka Nagar',
                'city_id' => '9',
                'lat' => 13.0341748,
                'long' => 77.60635409999999,
                'radius' => 878.4401245117188,
            ),
            430 => 
            array (
                'id' => 931,
                'name' => 'Hulimavu',
                'city_id' => '9',
                'lat' => 12.8789001,
                'long' => 77.6089869,
                'radius' => 2902.86376953125,
            ),
            431 => 
            array (
                'id' => 932,
                'name' => 'Thyagaraj Nagar',
                'city_id' => '9',
                'lat' => 12.9312228,
                'long' => 77.5671468,
                'radius' => 872.7266845703125,
            ),
            432 => 
            array (
                'id' => 933,
                'name' => 'Basaveshwaranagar',
                'city_id' => '9',
                'lat' => 12.9886182,
                'long' => 77.53828639999999,
                'radius' => 2049.0654296875,
            ),
            433 => 
            array (
                'id' => 934,
                'name' => 'Airport Area',
                'city_id' => '9',
                'lat' => 12.950929,
                'long' => 77.6679292,
                'radius' => 2487.300537109375,
            ),
            434 => 
            array (
                'id' => 935,
                'name' => 'Kumaraswamy Layout',
                'city_id' => '9',
                'lat' => 12.9037594,
                'long' => 77.5618439,
                'radius' => 1567.100830078125,
            ),
            435 => 
            array (
                'id' => 936,
                'name' => 'Sanjay Nagar',
                'city_id' => '9',
                'lat' => 13.0364641,
                'long' => 77.5767631,
                'radius' => 1596.957763671875,
            ),
            436 => 
            array (
                'id' => 937,
                'name' => 'Hoskote',
                'city_id' => '9',
                'lat' => 13.0730023,
                'long' => 77.7966975,
                'radius' => 3337.107177734375,
            ),
            437 => 
            array (
                'id' => 938,
                'name' => 'Kudlu Gate',
                'city_id' => '9',
                'lat' => 12.890984,
                'long' => 77.6400098,
                'radius' => 610.163818359375,
            ),
            438 => 
            array (
                'id' => 939,
                'name' => 'RBI Layout',
                'city_id' => '9',
                'lat' => 12.8895219,
                'long' => 77.57985219999999,
                'radius' => 584.0077514648438,
            ),
            439 => 
            array (
                'id' => 940,
                'name' => 'Palace Road',
                'city_id' => '9',
                'lat' => 12.9849066,
                'long' => 77.5882383,
                'radius' => 1620.3089599609375,
            ),
            440 => 
            array (
                'id' => 941,
                'name' => 'Hoodi Village',
                'city_id' => '9',
                'lat' => 12.9922145,
                'long' => 77.7159001,
                'radius' => 2046.0621337890625,
            ),
            441 => 
            array (
                'id' => 942,
                'name' => 'Millers Road',
                'city_id' => '9',
                'lat' => 12.989323,
                'long' => 77.5925454,
                'radius' => 698.8382568359375,
            ),
            442 => 
            array (
                'id' => 943,
                'name' => 'Huskur',
                'city_id' => '9',
                'lat' => 12.8385129,
                'long' => 77.6842066,
                'radius' => 594.869140625,
            ),
            443 => 
            array (
                'id' => 944,
                'name' => 'Vijaya Bank Layout',
                'city_id' => '9',
                'lat' => 12.8902208,
                'long' => 77.6092188,
                'radius' => 963.6332397460938,
            ),
            444 => 
            array (
                'id' => 945,
                'name' => 'Shanti Nagar',
                'city_id' => '9',
                'lat' => 12.9569472,
                'long' => 77.5992703,
                'radius' => 1098.251708984375,
            ),
            445 => 
            array (
                'id' => 946,
                'name' => 'Hebbal Kempapura',
                'city_id' => '9',
                'lat' => 13.0529125,
                'long' => 77.60148590000001,
                'radius' => 2782.696533203125,
            ),
            446 => 
            array (
                'id' => 947,
                'name' => 'Tippasandra',
                'city_id' => '9',
                'lat' => 12.9123424,
                'long' => 77.75292929999999,
                'radius' => 2355.11767578125,
            ),
            447 => 
            array (
                'id' => 948,
                'name' => 'Naganathapura',
                'city_id' => '9',
                'lat' => 12.8708958,
                'long' => 77.6629186,
                'radius' => 755.9132080078125,
            ),
            448 => 
            array (
                'id' => 949,
                'name' => 'Yeshwantpur',
                'city_id' => '9',
                'lat' => 13.0279661,
                'long' => 77.54091559999999,
                'radius' => 3010.987548828125,
            ),
            449 => 
            array (
                'id' => 950,
                'name' => 'Jeevan Bima Nagar',
                'city_id' => '9',
                'lat' => 12.9628593,
                'long' => 77.65950819999999,
                'radius' => 1222.3905029296875,
            ),
            450 => 
            array (
                'id' => 951,
                'name' => 'Cox Town',
                'city_id' => '9',
                'lat' => 12.9954659,
                'long' => 77.6234053,
                'radius' => 1211.4488525390625,
            ),
            451 => 
            array (
                'id' => 952,
                'name' => 'Ulsoor',
                'city_id' => '9',
                'lat' => 12.9817147,
                'long' => 77.6285585,
                'radius' => 2145.01025390625,
            ),
            452 => 
            array (
                'id' => 953,
                'name' => 'Benson Town',
                'city_id' => '9',
                'lat' => 13.004155,
                'long' => 77.6045925,
                'radius' => 1396.6685791015625,
            ),
            453 => 
            array (
                'id' => 954,
                'name' => 'ITPL',
                'city_id' => '9',
                'lat' => 12.9861748,
                'long' => 77.73595619999999,
                'radius' => 209.4368438720703,
            ),
            454 => 
            array (
                'id' => 955,
                'name' => 'Doddaballapur',
                'city_id' => '9',
                'lat' => 13.1995227,
                'long' => 77.5615023,
                'radius' => 11812.1025390625,
            ),
            455 => 
            array (
                'id' => 956,
                'name' => 'Kaggadaspura',
                'city_id' => '9',
                'lat' => 12.9752911,
                'long' => 77.6750869,
                'radius' => 2111.863037109375,
            ),
            456 => 
            array (
                'id' => 957,
                'name' => 'Nagwar',
                'city_id' => '9',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'name' => 'Attibele',
                'city_id' => '9',
                'lat' => 12.7807124,
                'long' => 77.7709558,
                'radius' => 1551.566650390625,
            ),
            458 => 
            array (
                'id' => 959,
                'name' => 'Padmanabhanagar',
                'city_id' => '9',
                'lat' => 12.9155691,
                'long' => 77.5567733,
                'radius' => 976.0440673828125,
            ),
            459 => 
            array (
                'id' => 960,
                'name' => 'Vijayanagar',
                'city_id' => '9',
                'lat' => 12.9719161,
                'long' => 77.5298856,
                'radius' => 2713.16796875,
            ),
            460 => 
            array (
                'id' => 961,
                'name' => 'Kengeri',
                'city_id' => '9',
                'lat' => 12.899623,
                'long' => 77.4826976,
                'radius' => 1875.76806640625,
            ),
            461 => 
            array (
                'id' => 962,
                'name' => 'Peenya',
                'city_id' => '9',
                'lat' => 13.0285133,
                'long' => 77.5196763,
                'radius' => 4511.95068359375,
            ),
            462 => 
            array (
                'id' => 963,
                'name' => 'Magadi Road',
                'city_id' => '9',
                'lat' => 12.9869096,
                'long' => 77.4762391,
                'radius' => 10716.12890625,
            ),
            463 => 
            array (
                'id' => 964,
                'name' => 'NelaMangala',
                'city_id' => '9',
                'lat' => 13.0874193,
                'long' => 77.41100639999999,
                'radius' => 6702.63720703125,
            ),
            464 => 
            array (
                'id' => 965,
                'name' => 'Sahakar Nagar',
                'city_id' => '9',
                'lat' => 13.0623425,
                'long' => 77.5871032,
                'radius' => 2205.692626953125,
            ),
            465 => 
            array (
                'id' => 966,
                'name' => 'Dodballapur Road',
                'city_id' => '9',
                'lat' => 13.1383945,
                'long' => 77.5691495,
                'radius' => 4223.9453125,
            ),
            466 => 
            array (
                'id' => 967,
                'name' => 'Outer Ring Road',
                'city_id' => '9',
                'lat' => 13.0279353,
                'long' => 77.6321671,
                'radius' => 18781.724609375,
            ),
            467 => 
            array (
                'id' => 968,
                'name' => 'Vigyan Nagar',
                'city_id' => '9',
                'lat' => 12.9745385,
                'long' => 77.6805538,
                'radius' => 642.0021362304688,
            ),
            468 => 
            array (
                'id' => 969,
                'name' => 'Basavanagudi',
                'city_id' => '9',
                'lat' => 12.9421166,
                'long' => 77.57536089999999,
                'radius' => 2133.447998046875,
            ),
            469 => 
            array (
                'id' => 970,
                'name' => 'Mallesh Palaya',
                'city_id' => '9',
                'lat' => 12.9756762,
                'long' => 77.6778473,
                'radius' => 974.0167846679688,
            ),
            470 => 
            array (
                'id' => 971,
                'name' => 'Domlur',
                'city_id' => '9',
                'lat' => 12.9609857,
                'long' => 77.6387316,
                'radius' => 1641.6761474609375,
            ),
            471 => 
            array (
                'id' => 972,
                'name' => 'Cookes Town',
                'city_id' => '9',
                'lat' => 13.0031678,
                'long' => 77.6228252,
                'radius' => 723.0407104492188,
            ),
            472 => 
            array (
                'id' => 973,
                'name' => 'Old Airport Road',
                'city_id' => '9',
                'lat' => 12.9548476,
                'long' => 77.6848959,
                'radius' => 6971.255859375,
            ),
            473 => 
            array (
                'id' => 974,
                'name' => 'Bellary Road',
                'city_id' => '9',
                'lat' => 13.0884405,
                'long' => 77.5958416,
                'radius' => 9630.802734375,
            ),
            474 => 
            array (
                'id' => 975,
                'name' => 'Sadaramangala',
                'city_id' => '9',
                'lat' => 13.0003059,
                'long' => 77.74020089999999,
                'radius' => 608.040771484375,
            ),
            475 => 
            array (
                'id' => 976,
                'name' => 'Anjanapura',
                'city_id' => '9',
                'lat' => 12.8616508,
                'long' => 77.5616139,
                'radius' => 274.2798156738281,
            ),
            476 => 
            array (
                'id' => 977,
                'name' => 'Majestic',
                'city_id' => '9',
                'lat' => 12.9766637,
                'long' => 77.5712556,
                'radius' => 851.3978881835938,
            ),
            477 => 
            array (
                'id' => 978,
                'name' => 'Vasanth Nagar',
                'city_id' => '9',
                'lat' => 12.9910869,
                'long' => 77.5920295,
                'radius' => 1386.8262939453125,
            ),
            478 => 
            array (
                'id' => 979,
                'name' => 'Wilson Garden',
                'city_id' => '9',
                'lat' => 12.9481933,
                'long' => 77.59718649999999,
                'radius' => 1430.180419921875,
            ),
            479 => 
            array (
                'id' => 980,
                'name' => 'ISRO Layout',
                'city_id' => '9',
                'lat' => 12.8984834,
                'long' => 77.55906449999999,
                'radius' => 629.6246337890625,
            ),
            480 => 
            array (
                'id' => 981,
                'name' => 'HMT Layout',
                'city_id' => '9',
                'lat' => 13.0310769,
                'long' => 77.5569265,
                'radius' => 521.2779541015625,
            ),
            481 => 
            array (
                'id' => 982,
                'name' => 'Nagawara',
                'city_id' => '9',
                'lat' => 13.0422567,
                'long' => 77.6135523,
                'radius' => 2326.54248046875,
            ),
            482 => 
            array (
                'id' => 983,
                'name' => 'Doddaballapur Road',
                'city_id' => '9',
                'lat' => 13.1383945,
                'long' => 77.5691495,
                'radius' => 4223.9453125,
            ),
            483 => 
            array (
                'id' => 984,
                'name' => 'Central Silk Board',
                'city_id' => '9',
                'lat' => 12.9165413,
                'long' => 77.6220312,
                'radius' => 209.46536254882812,
            ),
            484 => 
            array (
                'id' => 985,
                'name' => 'Nandi Hills',
                'city_id' => '9',
                'lat' => 13.370154,
                'long' => 77.68345510000002,
                'radius' => 3955.2744140625,
            ),
            485 => 
            array (
                'id' => 986,
                'name' => 'Ganganagar',
                'city_id' => '9',
                'lat' => 13.0266605,
                'long' => 77.590791,
                'radius' => 1992.8255615234375,
            ),
            486 => 
            array (
                'id' => 987,
                'name' => 'Bommasandra',
                'city_id' => '9',
                'lat' => 12.8168473,
                'long' => 77.6989492,
                'radius' => 7829.36572265625,
            ),
            487 => 
            array (
                'id' => 988,
                'name' => 'Pai Layout',
                'city_id' => '9',
                'lat' => 12.9943266,
                'long' => 77.66681799999999,
                'radius' => 645.3057861328125,
            ),
            488 => 
            array (
                'id' => 989,
                'name' => 'Sadaramangala',
                'city_id' => '9',
                'lat' => 13.0003059,
                'long' => 77.74020089999999,
                'radius' => 608.040771484375,
            ),
            489 => 
            array (
                'id' => 990,
                'name' => 'Prashanth Nagar',
                'city_id' => '9',
                'lat' => 12.9790324,
                'long' => 77.532563,
                'radius' => 488.2547912597656,
            ),
            490 => 
            array (
                'id' => 991,
                'name' => 'Hennur',
                'city_id' => '9',
                'lat' => 13.0345848,
                'long' => 77.6368664,
                'radius' => 2459.422607421875,
            ),
            491 => 
            array (
                'id' => 992,
                'name' => 'Raj Bhavan',
                'city_id' => '9',
                'lat' => 12.9824881,
                'long' => 77.59131,
                'radius' => 209.4383544921875,
            ),
            492 => 
            array (
                'id' => 993,
                'name' => 'Vidyanagar',
                'city_id' => '9',
                'lat' => 12.8239877,
                'long' => 77.6858226,
                'radius' => 533.8406982421875,
            ),
            493 => 
            array (
                'id' => 994,
                'name' => 'Bilekahalli',
                'city_id' => '9',
                'lat' => 12.8970168,
                'long' => 77.6071578,
                'radius' => 1407.2520751953125,
            ),
            494 => 
            array (
                'id' => 995,
                'name' => 'Manek Chowk',
                'city_id' => '9',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'name' => 'Chambal River',
                'city_id' => '9',
                'lat' => 22.4282836,
                'long' => 75.5363916,
                'radius' => 10132.7451171875,
            ),
            496 => 
            array (
                'id' => 997,
                'name' => 'Indraprastha',
                'city_id' => '9',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'name' => 'Khandwa',
                'city_id' => '8',
                'lat' => 22.2362386,
                'long' => 76.04685429999999,
                'radius' => 59685.8828125,
            ),
            498 => 
            array (
                'id' => 999,
                'name' => 'Rajendra Nagar',
                'city_id' => '8',
                'lat' => 22.6709179,
                'long' => 75.8275244,
                'radius' => 740.9539794921875,
            ),
            499 => 
            array (
                'id' => 1000,
                'name' => 'Pithampur',
                'city_id' => '8',
                'lat' => 22.611121,
                'long' => 75.6772689,
                'radius' => 4253.1630859375,
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'name' => 'Saket Nagar',
                'city_id' => '8',
                'lat' => 22.7234046,
                'long' => 75.8976893,
                'radius' => 512.5454711914062,
            ),
            1 => 
            array (
                'id' => 1002,
                'name' => 'Kalyani Nagar',
                'city_id' => '8',
                'lat' => 22.7221923,
                'long' => 75.8192578,
                'radius' => 465.417724609375,
            ),
            2 => 
            array (
                'id' => 1003,
                'name' => 'Limbodi',
                'city_id' => '8',
                'lat' => 22.6665846,
                'long' => 75.88970290000002,
                'radius' => 1642.212646484375,
            ),
            3 => 
            array (
                'id' => 1004,
                'name' => 'A.B. Road',
                'city_id' => '8',
                'lat' => 22.7258984,
                'long' => 75.88738900000001,
                'radius' => 13549.294921875,
            ),
            4 => 
            array (
                'id' => 1005,
                'name' => 'Annapurna Road',
                'city_id' => '8',
                'lat' => 22.6902533,
                'long' => 75.8375741,
                'radius' => 1846.3538818359375,
            ),
            5 => 
            array (
                'id' => 1006,
                'name' => 'Khajuri Bazar',
                'city_id' => '8',
                'lat' => 22.7193684,
                'long' => 75.8526692,
                'radius' => 233.8583526611328,
            ),
            6 => 
            array (
                'id' => 1007,
                'name' => 'Race Course Road',
                'city_id' => '8',
                'lat' => 22.7266058,
                'long' => 75.88119739999999,
                'radius' => 787.1903686523438,
            ),
            7 => 
            array (
                'id' => 1008,
                'name' => 'Chhawani',
                'city_id' => '8',
                'lat' => 22.7082479,
                'long' => 75.8757064,
                'radius' => 916.020263671875,
            ),
            8 => 
            array (
                'id' => 1009,
                'name' => 'Khatiwala Tank',
                'city_id' => '8',
                'lat' => 22.6996207,
                'long' => 75.8599315,
                'radius' => 695.3963012695312,
            ),
            9 => 
            array (
                'id' => 1010,
                'name' => 'Rajwada',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'name' => 'Dhar Road',
                'city_id' => '8',
                'lat' => 22.7088319,
                'long' => 75.8287983,
                'radius' => 1875.122314453125,
            ),
            11 => 
            array (
                'id' => 1012,
                'name' => 'Maharani Road',
                'city_id' => '8',
                'lat' => 22.7173424,
                'long' => 75.8655375,
                'radius' => 378.60394287109375,
            ),
            12 => 
            array (
                'id' => 1013,
                'name' => 'RNT Marg',
                'city_id' => '8',
                'lat' => 22.7144031,
                'long' => 75.8744759,
                'radius' => 854.5469970703125,
            ),
            13 => 
            array (
                'id' => 1014,
                'name' => 'Sector 23-D',
                'city_id' => '8',
                'lat' => 30.7396066,
                'long' => 76.766835,
                'radius' => 1117.326171875,
            ),
            14 => 
            array (
                'id' => 1015,
                'name' => 'Depalpur',
                'city_id' => '8',
                'lat' => 22.8514441,
                'long' => 75.5421946,
                'radius' => 4349.27392578125,
            ),
            15 => 
            array (
                'id' => 1016,
                'name' => 'Datoda',
                'city_id' => '8',
                'lat' => 22.5698817,
                'long' => 75.8838944,
                'radius' => 1116.973388671875,
            ),
            16 => 
            array (
                'id' => 1017,
                'name' => 'Dakachia',
                'city_id' => '8',
                'lat' => 22.8575117,
                'long' => 75.95503289999999,
                'radius' => 1573.586181640625,
            ),
            17 => 
            array (
                'id' => 1018,
                'name' => 'Chordia',
                'city_id' => '8',
                'lat' => 22.5493912,
                'long' => 75.78511209999999,
                'radius' => 1309.892822265625,
            ),
            18 => 
            array (
                'id' => 1019,
                'name' => 'Choral',
                'city_id' => '8',
                'lat' => 22.4526011,
                'long' => 75.9419693,
                'radius' => 1463.3782958984375,
            ),
            19 => 
            array (
                'id' => 1020,
                'name' => 'Chittoda',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'name' => 'Burankhedi',
                'city_id' => '8',
                'lat' => 22.7654199,
                'long' => 76.0174308,
                'radius' => 976.2824096679688,
            ),
            21 => 
            array (
                'id' => 1022,
                'name' => 'Binawda',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'name' => 'Bhatkhedi',
                'city_id' => '8',
                'lat' => 22.5966165,
                'long' => 75.7109806,
                'radius' => 3021.681396484375,
            ),
            23 => 
            array (
                'id' => 1024,
                'name' => 'Bai',
                'city_id' => '8',
                'lat' => 29.1274872,
                'long' => 77.0290995,
                'radius' => 1171.6929931640625,
            ),
            24 => 
            array (
                'id' => 1025,
                'name' => 'Badodia Khan',
                'city_id' => '8',
                'lat' => 23.0070449,
                'long' => 75.8359645,
                'radius' => 2292.9033203125,
            ),
            25 => 
            array (
                'id' => 1026,
                'name' => 'Bachhoda',
                'city_id' => '8',
                'lat' => 23.5463902,
                'long' => 75.4082506,
                'radius' => 2327.062744140625,
            ),
            26 => 
            array (
                'id' => 1027,
                'name' => 'Aurangpura',
                'city_id' => '8',
                'lat' => 19.8837677,
                'long' => 75.32566829999999,
                'radius' => 497.572021484375,
            ),
            27 => 
            array (
                'id' => 1028,
                'name' => 'Atwada',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'name' => 'Attahada',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'name' => 'Ambachandan',
                'city_id' => '8',
                'lat' => 22.5376567,
                'long' => 75.8330591,
                'radius' => 903.0916748046875,
            ),
            30 => 
            array (
                'id' => 1031,
                'name' => 'Alwasa',
                'city_id' => '8',
                'lat' => 22.8290604,
                'long' => 75.8330591,
                'radius' => 1831.9783935546875,
            ),
            31 => 
            array (
                'id' => 1032,
                'name' => 'Ajnod',
                'city_id' => '8',
                'lat' => 22.9397953,
                'long' => 75.75313849999999,
                'radius' => 2084.883544921875,
            ),
            32 => 
            array (
                'id' => 1033,
                'name' => 'Barlai Jagir',
                'city_id' => '8',
                'lat' => 22.8893131,
                'long' => 75.95213,
                'radius' => 3301.738525390625,
            ),
            33 => 
            array (
                'id' => 1034,
                'name' => 'Baoliakhurd',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'name' => 'Badgonda',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'name' => 'Bhagora',
                'city_id' => '8',
                'lat' => 22.5164776,
                'long' => 75.8243427,
                'radius' => 5775.6240234375,
            ),
            36 => 
            array (
                'id' => 1037,
                'name' => 'Bhanwrasala',
                'city_id' => '8',
                'lat' => 22.7930099,
                'long' => 75.84715249999999,
                'radius' => 3866.798095703125,
            ),
            37 => 
            array (
                'id' => 1038,
                'name' => 'Bhilbadoli',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'name' => 'Banadia',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'name' => 'Army Headquarters',
                'city_id' => '8',
                'lat' => 22.7265205,
                'long' => 75.84578859999999,
                'radius' => 204.06336975097656,
            ),
            40 => 
            array (
                'id' => 1041,
                'name' => 'Baloda Tkun',
                'city_id' => '8',
                'lat' => 22.8600932,
                'long' => 75.7415099,
                'radius' => 637.3087158203125,
            ),
            41 => 
            array (
                'id' => 1042,
                'name' => 'Chadoda',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'name' => 'Indore Agrawal Nagar',
                'city_id' => '8',
                'lat' => 22.699221,
                'long' => 75.8704465,
                'radius' => 227.84268188476562,
            ),
            43 => 
            array (
                'id' => 1044,
                'name' => 'Indore Badwali Chowk',
                'city_id' => '8',
                'lat' => 22.7209913,
                'long' => 75.8524876,
                'radius' => 269.4304504394531,
            ),
            44 => 
            array (
                'id' => 1045,
                'name' => 'Indore Bajasan Road',
                'city_id' => '8',
                'lat' => 22.7445003,
                'long' => 75.8680595,
                'radius' => 286.2153625488281,
            ),
            45 => 
            array (
                'id' => 1046,
                'name' => 'Bicholi Mardana',
                'city_id' => '8',
                'lat' => 22.7081457,
                'long' => 75.92295800000001,
                'radius' => 1217.4112548828125,
            ),
            46 => 
            array (
                'id' => 1047,
                'name' => 'Biyabani',
                'city_id' => '8',
                'lat' => 22.7113003,
                'long' => 75.8439539,
                'radius' => 454.9534606933594,
            ),
            47 => 
            array (
                'id' => 1048,
                'name' => 'Indore CGO Complex',
                'city_id' => '8',
                'lat' => 22.7122175,
                'long' => 75.88384169999999,
                'radius' => 204.07318115234375,
            ),
            48 => 
            array (
                'id' => 1049,
                'name' => 'Indore Cloth Market',
                'city_id' => '8',
                'lat' => 22.7195687,
                'long' => 75.8577258,
                'radius' => 204.06814575195312,
            ),
            49 => 
            array (
                'id' => 1050,
                'name' => 'Dhannad',
                'city_id' => '8',
                'lat' => 22.6437515,
                'long' => 75.71679619999999,
                'radius' => 2927.08251953125,
            ),
            50 => 
            array (
                'id' => 1051,
                'name' => 'Dharnaka',
                'city_id' => '8',
                'lat' => 22.5663912,
                'long' => 75.7473243,
                'radius' => 742.1694946289062,
            ),
            51 => 
            array (
                'id' => 1052,
                'name' => 'Dudhia',
                'city_id' => '8',
                'lat' => 26.8198334,
                'long' => 88.24490139999999,
                'radius' => 2101.92333984375,
            ),
            52 => 
            array (
                'id' => 1053,
                'name' => 'Farkodha',
                'city_id' => '8',
                'lat' => 22.9316425,
                'long' => 75.52184679999999,
                'radius' => 3261.598388671875,
            ),
            53 => 
            array (
                'id' => 1054,
                'name' => 'Fatahabad Chandrawatiganj',
                'city_id' => '8',
                'lat' => 23.0107479,
                'long' => 75.6734414,
                'radius' => 203.867431640625,
            ),
            54 => 
            array (
                'id' => 1055,
                'name' => 'FC Ganj Edso',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'name' => 'Gandhi Nagar-Indore',
                'city_id' => '8',
                'lat' => 22.7435895,
                'long' => 75.7934945,
                'radius' => 2533.61962890625,
            ),
            56 => 
            array (
                'id' => 1057,
                'name' => 'Gautampura',
                'city_id' => '8',
                'lat' => 22.9872111,
                'long' => 75.5247584,
                'radius' => 1830.8402099609375,
            ),
            57 => 
            array (
                'id' => 1058,
                'name' => 'Gawali Palasia',
                'city_id' => '8',
                'lat' => 22.5340988,
                'long' => 75.7284267,
                'radius' => 1280.6483154296875,
            ),
            58 => 
            array (
                'id' => 1059,
                'name' => 'Girota',
                'city_id' => '8',
                'lat' => 23.0672603,
                'long' => 75.6033497,
                'radius' => 4022.523681640625,
            ),
            59 => 
            array (
                'id' => 1060,
                'name' => 'Gokulpur',
                'city_id' => '8',
                'lat' => 22.9038435,
                'long' => 75.5123838,
                'radius' => 1089.2635498046875,
            ),
            60 => 
            array (
                'id' => 1061,
                'name' => 'Gujarkheda',
                'city_id' => '8',
                'lat' => 23.2790844,
                'long' => 76.12184789999999,
                'radius' => 1394.76416015625,
            ),
            61 => 
            array (
                'id' => 1062,
                'name' => 'Guran',
                'city_id' => '8',
                'lat' => 31.6877225,
                'long' => 77.1815867,
                'radius' => 828.2105102539062,
            ),
            62 => 
            array (
                'id' => 1063,
                'name' => 'Gurunanak Chowk',
                'city_id' => '8',
                'lat' => 21.2505775,
                'long' => 81.6290243,
                'radius' => 155.5683135986328,
            ),
            63 => 
            array (
                'id' => 1064,
                'name' => 'Harsola',
                'city_id' => '8',
                'lat' => 22.5697407,
                'long' => 75.8170786,
                'radius' => 1467.5645751953125,
            ),
            64 => 
            array (
                'id' => 1065,
                'name' => 'Hasalpur',
                'city_id' => '8',
                'lat' => 22.5584352,
                'long' => 75.7560455,
                'radius' => 810.378173828125,
            ),
            65 => 
            array (
                'id' => 1066,
                'name' => 'Indore Army',
                'city_id' => '8',
                'lat' => 22.715984,
                'long' => 75.852576,
                'radius' => 204.0706024169922,
            ),
            66 => 
            array (
                'id' => 1067,
                'name' => 'Indore Collectorate',
                'city_id' => '8',
                'lat' => 22.7080136,
                'long' => 75.85544019999999,
                'radius' => 235.83477783203125,
            ),
            67 => 
            array (
                'id' => 1068,
                'name' => 'Indore Courts',
                'city_id' => '8',
                'lat' => 22.6300214,
                'long' => 75.8072832,
                'radius' => 95.02442169189453,
            ),
            68 => 
            array (
                'id' => 1069,
                'name' => 'Indore Jail Road',
                'city_id' => '8',
                'lat' => 22.7217381,
                'long' => 75.8628363,
                'radius' => 364.7802734375,
            ),
            69 => 
            array (
                'id' => 1070,
                'name' => 'Indore Javeri Bagh',
                'city_id' => '8',
                'lat' => 22.665383,
                'long' => 75.8822733,
                'radius' => 204.10525512695312,
            ),
            70 => 
            array (
                'id' => 1071,
                'name' => 'Indore Cantt',
                'city_id' => '8',
                'lat' => 22.5559502,
                'long' => 75.7657744,
                'radius' => 318.15277099609375,
            ),
            71 => 
            array (
                'id' => 1072,
                'name' => 'Indore Khajrana',
                'city_id' => '8',
                'lat' => 22.7367662,
                'long' => 75.9085792,
                'radius' => 1256.282470703125,
            ),
            72 => 
            array (
                'id' => 1073,
                'name' => 'Indore Kumar Khadi',
                'city_id' => '8',
                'lat' => 22.738047,
                'long' => 75.849717,
                'radius' => 204.0554656982422,
            ),
            73 => 
            array (
                'id' => 1074,
                'name' => 'Indore Lokmanya Nagar',
                'city_id' => '8',
                'lat' => 22.6940765,
                'long' => 75.8468591,
                'radius' => 467.5646057128906,
            ),
            74 => 
            array (
                'id' => 1075,
                'name' => 'Indore Malharganj',
                'city_id' => '8',
                'lat' => 22.7199612,
                'long' => 75.8436572,
                'radius' => 541.770263671875,
            ),
            75 => 
            array (
                'id' => 1076,
                'name' => 'Indore Malwa Mill',
                'city_id' => '8',
                'lat' => 22.7374822,
                'long' => 75.8759072,
                'radius' => 651.04736328125,
            ),
            76 => 
            array (
                'id' => 1077,
                'name' => 'Indore Manorama Ganj',
                'city_id' => '8',
                'lat' => 22.71958,
                'long' => 75.8875248,
                'radius' => 552.12353515625,
            ),
            77 => 
            array (
                'id' => 1078,
                'name' => 'Indore Mills',
                'city_id' => '8',
                'lat' => 22.713575,
                'long' => 75.87630999999999,
                'radius' => 204.07225036621094,
            ),
            78 => 
            array (
                'id' => 1079,
                'name' => 'Indore Nanda Nagar',
                'city_id' => '8',
                'lat' => 22.7446794,
                'long' => 75.8782344,
                'radius' => 879.0213623046875,
            ),
            79 => 
            array (
                'id' => 1080,
                'name' => 'Indore New Palasia',
                'city_id' => '8',
                'lat' => 22.724355,
                'long' => 75.8838944,
                'radius' => 827.911376953125,
            ),
            80 => 
            array (
                'id' => 1081,
                'name' => 'Indore Pardesipura',
                'city_id' => '8',
                'lat' => 22.7461518,
                'long' => 75.8681634,
                'radius' => 1277.530029296875,
            ),
            81 => 
            array (
                'id' => 1082,
                'name' => 'Indore RSS Nagar',
                'city_id' => '8',
                'lat' => 22.732695,
                'long' => 75.8875248,
                'radius' => 395.7071838378906,
            ),
            82 => 
            array (
                'id' => 1083,
                'name' => 'Indore Rajendra Nagar',
                'city_id' => '8',
                'lat' => 22.6709179,
                'long' => 75.8275244,
                'radius' => 740.9539794921875,
            ),
            83 => 
            array (
                'id' => 1084,
                'name' => 'Indore Rajmohalla',
                'city_id' => '8',
                'lat' => 22.7143401,
                'long' => 75.84323289999999,
                'radius' => 131.71231079101562,
            ),
            84 => 
            array (
                'id' => 1085,
                'name' => 'Indore Rambagh',
                'city_id' => '8',
                'lat' => 22.7249928,
                'long' => 75.85715739999999,
                'radius' => 204.06442260742188,
            ),
            85 => 
            array (
                'id' => 1086,
                'name' => 'Indore Siyaganj',
                'city_id' => '8',
                'lat' => 22.7156149,
                'long' => 75.8660962,
                'radius' => 599.356201171875,
            ),
            86 => 
            array (
                'id' => 1087,
                'name' => 'Indore Topkhana',
                'city_id' => '8',
                'lat' => 22.7200061,
                'long' => 75.86364259999999,
                'radius' => 204.06784057617188,
            ),
            87 => 
            array (
                'id' => 1088,
                'name' => 'Indore Srinagar Colony',
                'city_id' => '8',
                'lat' => 22.7318882,
                'long' => 75.8947852,
                'radius' => 641.2101440429688,
            ),
            88 => 
            array (
                'id' => 1089,
                'name' => 'Indore Tukoganj',
                'city_id' => '8',
                'lat' => 22.7181933,
                'long' => 75.87494319999999,
                'radius' => 1242.6485595703125,
            ),
            89 => 
            array (
                'id' => 1090,
                'name' => 'Indore VS Market',
                'city_id' => '8',
                'lat' => 22.722667,
                'long' => 75.865267,
                'radius' => 204.06602478027344,
            ),
            90 => 
            array (
                'id' => 1091,
                'name' => 'Indore Uchchanyayalay',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'name' => 'Indore Yeshwant Road',
                'city_id' => '8',
                'lat' => 22.7318511,
                'long' => 75.87510979999999,
                'radius' => 204.05972290039062,
            ),
            92 => 
            array (
                'id' => 1093,
                'name' => 'Jalodiyagyan',
                'city_id' => '8',
                'lat' => 23.0101155,
                'long' => 75.61498929999999,
                'radius' => 2890.3212890625,
            ),
            93 => 
            array (
                'id' => 1094,
                'name' => 'Jambudi Hapsi',
                'city_id' => '8',
                'lat' => 22.7438549,
                'long' => 75.741874,
                'radius' => 1976.75341796875,
            ),
            94 => 
            array (
                'id' => 1095,
                'name' => 'Simrol',
                'city_id' => '8',
                'lat' => 22.539009,
                'long' => 75.9113971,
                'radius' => 797.9100341796875,
            ),
            95 => 
            array (
                'id' => 1096,
                'name' => 'Palakhedi',
                'city_id' => '8',
                'lat' => 22.781292,
                'long' => 75.80011619999999,
                'radius' => 2404.575927734375,
            ),
            96 => 
            array (
                'id' => 1097,
                'name' => 'Palda',
                'city_id' => '8',
                'lat' => 22.6837831,
                'long' => 75.90277139999999,
                'radius' => 2352.521484375,
            ),
            97 => 
            array (
                'id' => 1098,
                'name' => 'Paliya',
                'city_id' => '8',
                'lat' => 22.8298846,
                'long' => 75.7938309,
                'radius' => 643.242431640625,
            ),
            98 => 
            array (
                'id' => 1099,
                'name' => 'Panod',
                'city_id' => '8',
                'lat' => 23.0091532,
                'long' => 75.85920519999999,
                'radius' => 2729.65087890625,
            ),
            99 => 
            array (
                'id' => 1100,
                'name' => 'Pedmi',
                'city_id' => '8',
                'lat' => 22.6199826,
                'long' => 76.1124246,
                'radius' => 774.5240478515625,
            ),
            100 => 
            array (
                'id' => 1101,
                'name' => 'Pigdamber',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'name' => 'Pipalda',
                'city_id' => '8',
                'lat' => 25.556054,
                'long' => 76.45775200000001,
                'radius' => 1957.501220703125,
            ),
            102 => 
            array (
                'id' => 1103,
                'name' => 'Piwdai',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'name' => 'Radio Colony Indore',
                'city_id' => '8',
                'lat' => 22.7032903,
                'long' => 75.8846204,
                'radius' => 503.6083068847656,
            ),
            104 => 
            array (
                'id' => 1105,
                'name' => 'Rajendra Nagar-Indore',
                'city_id' => '8',
                'lat' => 22.6709179,
                'long' => 75.8275244,
                'radius' => 740.9539794921875,
            ),
            105 => 
            array (
                'id' => 1106,
                'name' => 'Rangwasa',
                'city_id' => '8',
                'lat' => 22.7379888,
                'long' => 75.5684254,
                'radius' => 3740.941162109375,
            ),
            106 => 
            array (
                'id' => 1107,
                'name' => 'Jinda Kheda',
                'city_id' => '8',
                'lat' => 22.8759808,
                'long' => 75.7240654,
                'radius' => 611.7894287109375,
            ),
            107 => 
            array (
                'id' => 1108,
                'name' => 'Rolai',
                'city_id' => '8',
                'lat' => 22.7247914,
                'long' => 75.6469934,
                'radius' => 2563.660400390625,
            ),
            108 => 
            array (
                'id' => 1109,
                'name' => 'Sadar Bazar',
                'city_id' => '8',
                'lat' => 28.6569553,
                'long' => 77.2122028,
                'radius' => 1533.7364501953125,
            ),
            109 => 
            array (
                'id' => 1110,
                'name' => 'Juni Indore',
                'city_id' => '8',
                'lat' => 22.7115348,
                'long' => 75.8601046,
                'radius' => 552.7672729492188,
            ),
            110 => 
            array (
                'id' => 1111,
                'name' => 'Kadwali Buzurg',
                'city_id' => '8',
                'lat' => 22.8296296,
                'long' => 75.9855098,
                'radius' => 875.7030029296875,
            ),
            111 => 
            array (
                'id' => 1112,
                'name' => 'Sagdod',
                'city_id' => '8',
                'lat' => 22.7590814,
                'long' => 75.497096,
                'radius' => 787.920654296875,
            ),
            112 => 
            array (
                'id' => 1113,
                'name' => 'Sanawadia',
                'city_id' => '8',
                'lat' => 22.6550858,
                'long' => 75.9405178,
                'radius' => 4259.654296875,
            ),
            113 => 
            array (
                'id' => 1114,
                'name' => 'Kanadia',
                'city_id' => '8',
                'lat' => 22.7268087,
                'long' => 75.9273267,
                'radius' => 2414.552001953125,
            ),
            114 => 
            array (
                'id' => 1115,
                'name' => 'Kanadia Road',
                'city_id' => '8',
                'lat' => 22.7208279,
                'long' => 75.9004565,
                'radius' => 670.3074340820312,
            ),
            115 => 
            array (
                'id' => 1116,
                'name' => 'Sanwer Link Road',
                'city_id' => '8',
                'lat' => 22.8657293,
                'long' => 75.85514549999999,
                'radius' => 12426.306640625,
            ),
            116 => 
            array (
                'id' => 1117,
                'name' => 'Sanwer',
                'city_id' => '8',
                'lat' => 22.9736761,
                'long' => 75.82604380000001,
                'radius' => 1848.025390625,
            ),
            117 => 
            array (
                'id' => 1118,
                'name' => 'Khatiwala Tank-Indore',
                'city_id' => '8',
                'lat' => 22.6996207,
                'long' => 75.8599315,
                'radius' => 695.3963012695312,
            ),
            118 => 
            array (
                'id' => 1119,
                'name' => 'Khurdi',
                'city_id' => '8',
                'lat' => 22.358852,
                'long' => 75.6586295,
                'radius' => 1626.03955078125,
            ),
            119 => 
            array (
                'id' => 1120,
                'name' => 'Sivani',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'name' => 'Kodria',
                'city_id' => '8',
                'lat' => 22.5319306,
                'long' => 75.7691262,
                'radius' => 1594.0299072265625,
            ),
            121 => 
            array (
                'id' => 1122,
                'name' => 'Krishnaganj',
                'city_id' => '8',
                'lat' => 23.4171433,
                'long' => 88.69765269999999,
                'radius' => 1348.0118408203125,
            ),
            122 => 
            array (
                'id' => 1123,
                'name' => 'Solsinda',
                'city_id' => '8',
                'lat' => 22.8703766,
                'long' => 75.8388698,
                'radius' => 2574.785888671875,
            ),
            123 => 
            array (
                'id' => 1124,
                'name' => 'Kudana',
                'city_id' => '8',
                'lat' => 29.42974839999999,
                'long' => 77.3700314,
                'radius' => 794.7427978515625,
            ),
            124 => 
            array (
                'id' => 1125,
                'name' => 'Sudama Nagar',
                'city_id' => '8',
                'lat' => 22.6888332,
                'long' => 75.83114139999999,
                'radius' => 1213.010986328125,
            ),
            125 => 
            array (
                'id' => 1126,
                'name' => 'Lasudia',
                'city_id' => '8',
                'lat' => 22.9086743,
                'long' => 76.09973839999999,
                'radius' => 383.150634765625,
            ),
            126 => 
            array (
                'id' => 1127,
                'name' => 'Tilak Nagar-Indore',
                'city_id' => '8',
                'lat' => 22.7189594,
                'long' => 75.897201,
                'radius' => 587.4243774414062,
            ),
            127 => 
            array (
                'id' => 1128,
                'name' => 'Tillor Khurd',
                'city_id' => '8',
                'lat' => 22.616099,
                'long' => 75.9528557,
                'radius' => 1256.9019775390625,
            ),
            128 => 
            array (
                'id' => 1129,
                'name' => 'Tillorbujurg',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'name' => 'Limbiodapar',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'name' => 'Todi',
                'city_id' => '8',
                'lat' => 28.8025311,
                'long' => 77.6908323,
                'radius' => 1597.778564453125,
            ),
            131 => 
            array (
                'id' => 1132,
                'name' => 'Lokmanya Nagar',
                'city_id' => '8',
                'lat' => 19.2078678,
                'long' => 72.9534465,
                'radius' => 853.4400024414062,
            ),
            132 => 
            array (
                'id' => 1133,
                'name' => 'Machal',
                'city_id' => '8',
                'lat' => 16.9240095,
                'long' => 73.7190995,
                'radius' => 505.99700927734375,
            ),
            133 => 
            array (
                'id' => 1134,
                'name' => 'Vallabh Nagar',
                'city_id' => '8',
                'lat' => 24.6734484,
                'long' => 74.0022396,
                'radius' => 3825.53564453125,
            ),
            134 => 
            array (
                'id' => 1135,
                'name' => 'Machla',
                'city_id' => '8',
                'lat' => 24.3995851,
                'long' => 85.2994028,
                'radius' => 1391.2335205078125,
            ),
            135 => 
            array (
                'id' => 1136,
                'name' => 'Vijay Nagar-Indore',
                'city_id' => '8',
                'lat' => 22.7532848,
                'long' => 75.8936962,
                'radius' => 386.9284362792969,
            ),
            136 => 
            array (
                'id' => 1137,
                'name' => 'Maithwada',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'name' => 'Yashwant Nagar',
                'city_id' => '8',
                'lat' => 22.6955711,
                'long' => 75.8711419,
                'radius' => 37.94184494018555,
            ),
            138 => 
            array (
                'id' => 1139,
                'name' => 'Manglia',
                'city_id' => '8',
                'lat' => 22.8172806,
                'long' => 75.9289046,
                'radius' => 3230.839599609375,
            ),
            139 => 
            array (
                'id' => 1140,
                'name' => 'Manpur',
                'city_id' => '8',
                'lat' => 22.4295855,
                'long' => 75.6193539,
                'radius' => 1082.2054443359375,
            ),
            140 => 
            array (
                'id' => 1141,
                'name' => 'Jamli',
                'city_id' => '8',
                'lat' => 22.5244643,
                'long' => 75.69425939999999,
                'radius' => 540.50537109375,
            ),
            141 => 
            array (
                'id' => 1142,
                'name' => 'Nanda Nagar-Indore',
                'city_id' => '8',
                'lat' => 22.7446794,
                'long' => 75.8782344,
                'radius' => 879.0213623046875,
            ),
            142 => 
            array (
                'id' => 1143,
                'name' => 'Pagnispaga Indore',
                'city_id' => '8',
                'lat' => 22.7099568,
                'long' => 75.8573897,
                'radius' => 315.1280212402344,
            ),
            143 => 
            array (
                'id' => 1144,
                'name' => 'Jhalaria',
                'city_id' => '8',
                'lat' => 23.0652696,
                'long' => 75.4257325,
                'radius' => 3052.60595703125,
            ),
            144 => 
            array (
                'id' => 1145,
                'name' => 'Biyabani-Indore',
                'city_id' => '8',
                'lat' => 22.7104481,
                'long' => 75.84634319999999,
                'radius' => 618.9246215820312,
            ),
            145 => 
            array (
                'id' => 1146,
                'name' => 'Kankaripal',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'name' => 'DDU Nagar',
                'city_id' => '8',
                'lat' => 22.7606773,
                'long' => 75.8664672,
                'radius' => 1171.4974365234375,
            ),
            147 => 
            array (
                'id' => 1148,
                'name' => 'Kanwasa',
                'city_id' => '8',
                'lat' => 22.9656785,
                'long' => 75.63826569999999,
                'radius' => 2928.7138671875,
            ),
            148 => 
            array (
                'id' => 1149,
                'name' => 'Indore Nagar',
                'city_id' => '8',
                'lat' => 22.7195687,
                'long' => 75.8577258,
                'radius' => 16693.14453125,
            ),
            149 => 
            array (
                'id' => 1150,
                'name' => 'Kelod Kartal',
                'city_id' => '8',
                'lat' => 22.6370057,
                'long' => 75.8772481,
                'radius' => 1444.24560546875,
            ),
            150 => 
            array (
                'id' => 1151,
                'name' => 'Ravi Shankar Shukla Nagar',
                'city_id' => '8',
                'lat' => 22.739789,
                'long' => 75.88334979999999,
                'radius' => 209.5037078857422,
            ),
            151 => 
            array (
                'id' => 1152,
                'name' => 'Kalaria',
                'city_id' => '8',
                'lat' => 22.6908863,
                'long' => 75.7226116,
                'radius' => 1918.16455078125,
            ),
            152 => 
            array (
                'id' => 1153,
                'name' => 'Khajrana',
                'city_id' => '8',
                'lat' => 22.7367662,
                'long' => 75.9085792,
                'radius' => 1256.282470703125,
            ),
            153 => 
            array (
                'id' => 1154,
                'name' => 'Kallibillod',
                'city_id' => '8',
                'lat' => 22.6374214,
                'long' => 75.61498929999999,
                'radius' => 3585.442138671875,
            ),
            154 => 
            array (
                'id' => 1155,
                'name' => 'Murkheda',
                'city_id' => '8',
                'lat' => 22.8354304,
                'long' => 75.61498929999999,
                'radius' => 2940.01904296875,
            ),
            155 => 
            array (
                'id' => 1156,
                'name' => 'Kalmer',
                'city_id' => '8',
                'lat' => 22.7944679,
                'long' => 75.4548646,
                'radius' => 2320.528564453125,
            ),
            156 => 
            array (
                'id' => 1157,
                'name' => 'Sawer',
                'city_id' => '8',
                'lat' => 22.9736761,
                'long' => 75.82604380000001,
                'radius' => 1848.025390625,
            ),
            157 => 
            array (
                'id' => 1158,
                'name' => 'Sumtha',
                'city_id' => '8',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'name' => 'Kampel',
                'city_id' => '8',
                'lat' => 22.6176943,
                'long' => 76.04499299999999,
                'radius' => 1710.485595703125,
            ),
            159 => 
            array (
                'id' => 1160,
                'name' => 'Ambala',
                'city_id' => '7',
                'lat' => 30.5175191,
                'long' => 76.8087307,
                'radius' => 16841.666015625,
            ),
            160 => 
            array (
                'id' => 1161,
                'name' => 'Manimajra',
                'city_id' => '7',
                'lat' => 30.7194817,
                'long' => 76.8317325,
                'radius' => 2411.551025390625,
            ),
            161 => 
            array (
                'id' => 1162,
                'name' => 'Mohali',
                'city_id' => '7',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'name' => 'Industrial Area',
                'city_id' => '7',
                'lat' => 30.6965335,
                'long' => 76.78702899999999,
                'radius' => 1285.199462890625,
            ),
            163 => 
            array (
                'id' => 1164,
                'name' => 'Sector-17',
                'city_id' => '7',
                'lat' => 30.7398339,
                'long' => 76.782702,
                'radius' => 1110.657958984375,
            ),
            164 => 
            array (
                'id' => 1165,
                'name' => 'Baddi',
                'city_id' => '7',
                'lat' => 30.8798039,
                'long' => 76.76728849999999,
                'radius' => 5825.46533203125,
            ),
            165 => 
            array (
                'id' => 1166,
                'name' => 'Burail',
                'city_id' => '7',
                'lat' => 30.7079677,
                'long' => 76.76106469999999,
                'radius' => 494.6161804199219,
            ),
            166 => 
            array (
                'id' => 1167,
                'name' => 'Dhanas',
                'city_id' => '7',
                'lat' => 30.7688416,
                'long' => 76.7540559,
                'radius' => 1879.6519775390625,
            ),
            167 => 
            array (
                'id' => 1168,
                'name' => 'Industrial Area Phase I',
                'city_id' => '7',
                'lat' => 30.7021049,
                'long' => 76.8000091,
                'radius' => 2519.0126953125,
            ),
            168 => 
            array (
                'id' => 1169,
                'name' => 'Industrial Area Phase-2',
                'city_id' => '7',
                'lat' => 30.7089676,
                'long' => 76.8031809,
                'radius' => 588.3570556640625,
            ),
            169 => 
            array (
                'id' => 1170,
                'name' => 'Madhya Marg',
                'city_id' => '7',
                'lat' => 30.7397101,
                'long' => 76.79169859999999,
                'radius' => 4584.93212890625,
            ),
            170 => 
            array (
                'id' => 1171,
                'name' => 'Ram Darbar Colony',
                'city_id' => '7',
                'lat' => 30.691482,
                'long' => 76.7927981,
                'radius' => 854.8588256835938,
            ),
            171 => 
            array (
                'id' => 1172,
                'name' => 'Sector 10',
                'city_id' => '7',
                'lat' => 30.7532757,
                'long' => 76.7899135,
                'radius' => 1120.748779296875,
            ),
            172 => 
            array (
                'id' => 1173,
                'name' => 'Sector 10-A',
                'city_id' => '7',
                'lat' => 30.75609729999999,
                'long' => 76.7899135,
                'radius' => 578.3681030273438,
            ),
            173 => 
            array (
                'id' => 1174,
                'name' => 'Sector 10-D',
                'city_id' => '7',
                'lat' => 30.7532757,
                'long' => 76.7899135,
                'radius' => 1120.748779296875,
            ),
            174 => 
            array (
                'id' => 1175,
                'name' => 'Sector-11',
                'city_id' => '7',
                'lat' => 30.7583236,
                'long' => 76.7841443,
                'radius' => 1057.9124755859375,
            ),
            175 => 
            array (
                'id' => 1176,
                'name' => 'Sector 11-A',
                'city_id' => '7',
                'lat' => 30.7619248,
                'long' => 76.7848655,
                'radius' => 570.3941040039062,
            ),
            176 => 
            array (
                'id' => 1177,
                'name' => 'Sector 11-B',
                'city_id' => '7',
                'lat' => 30.7602369,
                'long' => 76.78833949999999,
                'radius' => 108.93397521972656,
            ),
            177 => 
            array (
                'id' => 1178,
                'name' => 'Sector 11-D',
                'city_id' => '7',
                'lat' => 30.7583236,
                'long' => 76.7841443,
                'radius' => 1057.9124755859375,
            ),
            178 => 
            array (
                'id' => 1179,
                'name' => 'Sector 12',
                'city_id' => '7',
                'lat' => 30.766192,
                'long' => 76.7783748,
                'radius' => 1474.4732666015625,
            ),
            179 => 
            array (
                'id' => 1180,
                'name' => 'Sector 12-A',
                'city_id' => '7',
                'lat' => 30.674269,
                'long' => 76.8503167,
                'radius' => 966.2179565429688,
            ),
            180 => 
            array (
                'id' => 1181,
                'name' => 'Sector 14',
                'city_id' => '7',
                'lat' => 30.7603533,
                'long' => 76.7669528,
                'radius' => 1313.00634765625,
            ),
            181 => 
            array (
                'id' => 1182,
                'name' => 'Sector 15',
                'city_id' => '7',
                'lat' => 30.7514892,
                'long' => 76.772605,
                'radius' => 1104.4813232421875,
            ),
            182 => 
            array (
                'id' => 1183,
                'name' => 'Sector 15-A',
                'city_id' => '7',
                'lat' => 30.7551544,
                'long' => 76.7734404,
                'radius' => 620.4317016601562,
            ),
            183 => 
            array (
                'id' => 1184,
                'name' => 'Sector 15-B',
                'city_id' => '7',
                'lat' => 30.7514892,
                'long' => 76.772605,
                'radius' => 1104.4813232421875,
            ),
            184 => 
            array (
                'id' => 1185,
                'name' => 'Sector 15-C',
                'city_id' => '7',
                'lat' => 30.7514892,
                'long' => 76.772605,
                'radius' => 1104.4813232421875,
            ),
            185 => 
            array (
                'id' => 1186,
                'name' => 'Sector 15-D',
                'city_id' => '7',
                'lat' => 30.751822,
                'long' => 76.7689988,
                'radius' => 494.00665283203125,
            ),
            186 => 
            array (
                'id' => 1187,
                'name' => 'Sector 16',
                'city_id' => '7',
                'lat' => 30.7464418,
                'long' => 76.7783748,
                'radius' => 1148.520751953125,
            ),
            187 => 
            array (
                'id' => 1188,
                'name' => 'Sector 16-A',
                'city_id' => '7',
                'lat' => 30.7486324,
                'long' => 76.779096,
                'radius' => 606.7971801757812,
            ),
            188 => 
            array (
                'id' => 1189,
                'name' => 'Sector 16-D',
                'city_id' => '7',
                'lat' => 30.7457894,
                'long' => 76.7732699,
                'radius' => 549.2310180664062,
            ),
            189 => 
            array (
                'id' => 1190,
                'name' => 'Sector 17-A',
                'city_id' => '7',
                'lat' => 30.73996009999999,
                'long' => 76.78299779999999,
                'radius' => 175.05612182617188,
            ),
            190 => 
            array (
                'id' => 1191,
                'name' => 'Sector 17-B',
                'city_id' => '7',
                'lat' => 30.7393337,
                'long' => 76.78811069999999,
                'radius' => 500.1349182128906,
            ),
            191 => 
            array (
                'id' => 1192,
                'name' => 'Sector 17-C',
                'city_id' => '7',
                'lat' => 30.7393517,
                'long' => 76.7848655,
                'radius' => 502.3843078613281,
            ),
            192 => 
            array (
                'id' => 1193,
                'name' => 'Sector 17-D',
                'city_id' => '7',
                'lat' => 30.7420247,
                'long' => 76.7834231,
                'radius' => 526.7753295898438,
            ),
            193 => 
            array (
                'id' => 1194,
                'name' => 'Sector 17-E',
                'city_id' => '7',
                'lat' => 30.7400184,
                'long' => 76.7776536,
                'radius' => 465.1501159667969,
            ),
            194 => 
            array (
                'id' => 1195,
                'name' => 'Sector 18',
                'city_id' => '7',
                'lat' => 30.7332254,
                'long' => 76.78702899999999,
                'radius' => 1200.2239990234375,
            ),
            195 => 
            array (
                'id' => 1196,
                'name' => 'Sector 18-A',
                'city_id' => '7',
                'lat' => 30.736356,
                'long' => 76.7886814,
                'radius' => 330.9464416503906,
            ),
            196 => 
            array (
                'id' => 1197,
                'name' => 'Sector 18-B',
                'city_id' => '7',
                'lat' => 30.736057,
                'long' => 76.794732,
                'radius' => 197.7952423095703,
            ),
            197 => 
            array (
                'id' => 1198,
                'name' => 'Sector 18-C',
                'city_id' => '7',
                'lat' => 30.7310345,
                'long' => 76.7863078,
                'radius' => 527.7762451171875,
            ),
            198 => 
            array (
                'id' => 1199,
                'name' => 'Sector 18-D',
                'city_id' => '7',
                'lat' => 30.7332254,
                'long' => 76.78702899999999,
                'radius' => 1200.2239990234375,
            ),
            199 => 
            array (
                'id' => 1200,
                'name' => 'Sector 19',
                'city_id' => '7',
                'lat' => 30.7282196,
                'long' => 76.79322379999999,
                'radius' => 1078.7547607421875,
            ),
            200 => 
            array (
                'id' => 1201,
                'name' => 'Sector 19',
                'city_id' => '7',
                'lat' => 30.7282196,
                'long' => 76.79322379999999,
                'radius' => 1078.7547607421875,
            ),
            201 => 
            array (
                'id' => 1202,
                'name' => 'Sector 19-B',
                'city_id' => '7',
                'lat' => 30.6655431,
                'long' => 76.8288489,
                'radius' => 893.8802490234375,
            ),
            202 => 
            array (
                'id' => 1203,
                'name' => 'Sector 19-C',
                'city_id' => '7',
                'lat' => 30.7250501,
                'long' => 76.7922531,
                'radius' => 552.1697387695312,
            ),
            203 => 
            array (
                'id' => 1204,
                'name' => 'Sector 19-D',
                'city_id' => '7',
                'lat' => 30.7270987,
                'long' => 76.78919239999999,
                'radius' => 590.7909545898438,
            ),
            204 => 
            array (
                'id' => 1205,
                'name' => 'Sector 20',
                'city_id' => '7',
                'lat' => 30.7213417,
                'long' => 76.7812596,
                'radius' => 1100.8212890625,
            ),
            205 => 
            array (
                'id' => 1206,
                'name' => 'Sector 20-A',
                'city_id' => '7',
                'lat' => 30.7283406,
                'long' => 76.777293,
                'radius' => 309.9888610839844,
            ),
            206 => 
            array (
                'id' => 1207,
                'name' => 'Sector 20-C',
                'city_id' => '7',
                'lat' => 30.7177394,
                'long' => 76.7805384,
                'radius' => 566.3597412109375,
            ),
            207 => 
            array (
                'id' => 1208,
                'name' => 'Sector 20-D',
                'city_id' => '7',
                'lat' => 30.72026409999999,
                'long' => 76.7776536,
                'radius' => 540.4977416992188,
            ),
            208 => 
            array (
                'id' => 1209,
                'name' => 'Sector 21',
                'city_id' => '7',
                'lat' => 30.7263907,
                'long' => 76.77548999999999,
                'radius' => 1160.5794677734375,
            ),
            209 => 
            array (
                'id' => 1210,
                'name' => 'Sector 21-A',
                'city_id' => '7',
                'lat' => 30.7304104,
                'long' => 76.77767770000001,
                'radius' => 543.4488525390625,
            ),
            210 => 
            array (
                'id' => 1211,
                'name' => 'Sector 21-B',
                'city_id' => '7',
                'lat' => 30.7276172,
                'long' => 76.7805384,
                'radius' => 565.4886474609375,
            ),
            211 => 
            array (
                'id' => 1212,
                'name' => 'Sector 21-C',
                'city_id' => '7',
                'lat' => 30.7241997,
                'long' => 76.7747687,
                'radius' => 537.9993896484375,
            ),
            212 => 
            array (
                'id' => 1213,
                'name' => 'Sector 21-D',
                'city_id' => '7',
                'lat' => 30.72672399999999,
                'long' => 76.7718838,
                'radius' => 564.2101440429688,
            ),
            213 => 
            array (
                'id' => 1214,
                'name' => 'Sector 22',
                'city_id' => '7',
                'lat' => 30.7339583,
                'long' => 76.77261969999999,
                'radius' => 1275.91162109375,
            ),
            214 => 
            array (
                'id' => 1215,
                'name' => 'Sector 22-A',
                'city_id' => '7',
                'lat' => 30.7339583,
                'long' => 76.77261969999999,
                'radius' => 1275.91162109375,
            ),
            215 => 
            array (
                'id' => 1216,
                'name' => 'Sector 22-B',
                'city_id' => '7',
                'lat' => 30.7328147,
                'long' => 76.77621119999999,
                'radius' => 530.4000244140625,
            ),
            216 => 
            array (
                'id' => 1217,
                'name' => 'Sector 22-C',
                'city_id' => '7',
                'lat' => 30.729805,
                'long' => 76.7693641,
                'radius' => 557.7865600585938,
            ),
            217 => 
            array (
                'id' => 1218,
                'name' => 'Sector 22-D',
                'city_id' => '7',
                'lat' => 30.733332,
                'long' => 76.7675563,
                'radius' => 597.5032958984375,
            ),
            218 => 
            array (
                'id' => 1219,
                'name' => 'Sector 23',
                'city_id' => '7',
                'lat' => 30.7396066,
                'long' => 76.766835,
                'radius' => 1117.326171875,
            ),
            219 => 
            array (
                'id' => 1220,
                'name' => 'Sector 23-C',
                'city_id' => '7',
                'lat' => 30.7396066,
                'long' => 76.766835,
                'radius' => 1117.326171875,
            ),
            220 => 
            array (
                'id' => 1221,
                'name' => 'Sector 24-C',
                'city_id' => '7',
                'lat' => 30.7423137,
                'long' => 76.75890079999999,
                'radius' => 593.2735595703125,
            ),
            221 => 
            array (
                'id' => 1222,
                'name' => 'Sector 24-D',
                'city_id' => '7',
                'lat' => 30.7449862,
                'long' => 76.7574581,
                'radius' => 510.2493896484375,
            ),
            222 => 
            array (
                'id' => 1223,
                'name' => 'Sector 26',
                'city_id' => '7',
                'lat' => 30.7299586,
                'long' => 76.8101038,
                'radius' => 1078.568603515625,
            ),
            223 => 
            array (
                'id' => 1224,
                'name' => 'Sector 27',
                'city_id' => '7',
                'lat' => 30.7227149,
                'long' => 76.7987759,
                'radius' => 1100.675537109375,
            ),
            224 => 
            array (
                'id' => 1225,
                'name' => 'Sector 27-A',
                'city_id' => '7',
                'lat' => 30.7227149,
                'long' => 76.7987759,
                'radius' => 1100.675537109375,
            ),
            225 => 
            array (
                'id' => 1226,
                'name' => 'Sector 27-C',
                'city_id' => '7',
                'lat' => 30.7195236,
                'long' => 76.79784579999999,
                'radius' => 615.0173950195312,
            ),
            226 => 
            array (
                'id' => 1227,
                'name' => 'Sector 27-D',
                'city_id' => '7',
                'lat' => 30.7226633,
                'long' => 76.79416220000002,
                'radius' => 553.2753295898438,
            ),
            227 => 
            array (
                'id' => 1228,
                'name' => 'Sector 28',
                'city_id' => '7',
                'lat' => 30.7180751,
                'long' => 76.8043355,
                'radius' => 1158.9903564453125,
            ),
            228 => 
            array (
                'id' => 1229,
                'name' => 'Sector 28-A',
                'city_id' => '7',
                'lat' => 30.7198126,
                'long' => 76.8051084,
                'radius' => 560.0059204101562,
            ),
            229 => 
            array (
                'id' => 1230,
                'name' => 'Sector 28-C',
                'city_id' => '7',
                'lat' => 30.7143242,
                'long' => 76.8021723,
                'radius' => 549.1095581054688,
            ),
            230 => 
            array (
                'id' => 1231,
                'name' => 'Sector 28-D',
                'city_id' => '7',
                'lat' => 30.7168497,
                'long' => 76.79928799999999,
                'radius' => 556.0093383789062,
            ),
            231 => 
            array (
                'id' => 1232,
                'name' => 'Sector 29',
                'city_id' => '7',
                'lat' => 30.7112416,
                'long' => 76.7927981,
                'radius' => 1151.93115234375,
            ),
            232 => 
            array (
                'id' => 1233,
                'name' => 'Sector 29-D',
                'city_id' => '7',
                'lat' => 30.7115892,
                'long' => 76.78998410000001,
                'radius' => 1865.479248046875,
            ),
            233 => 
            array (
                'id' => 1234,
                'name' => 'Sector 30',
                'city_id' => '7',
                'lat' => 30.716292,
                'long' => 76.78702899999999,
                'radius' => 1119.5228271484375,
            ),
            234 => 
            array (
                'id' => 1235,
                'name' => 'Sector 30-C',
                'city_id' => '7',
                'lat' => 30.7140597,
                'long' => 76.7881196,
                'radius' => 1865.434326171875,
            ),
            235 => 
            array (
                'id' => 1236,
                'name' => 'Sector 30-D',
                'city_id' => '7',
                'lat' => 30.716292,
                'long' => 76.78702899999999,
                'radius' => 1119.5228271484375,
            ),
            236 => 
            array (
                'id' => 1237,
                'name' => 'Sector 31',
                'city_id' => '7',
                'lat' => 30.7020269,
                'long' => 76.7805808,
                'radius' => 1217.896728515625,
            ),
            237 => 
            array (
                'id' => 1238,
                'name' => 'Sector 31-D',
                'city_id' => '7',
                'lat' => 30.7020269,
                'long' => 76.7805808,
                'radius' => 1217.896728515625,
            ),
            238 => 
            array (
                'id' => 1239,
                'name' => 'Sector 32',
                'city_id' => '7',
                'lat' => 30.709058,
                'long' => 76.77439749999999,
                'radius' => 1131.3546142578125,
            ),
            239 => 
            array (
                'id' => 1240,
                'name' => 'Sector 32-A',
                'city_id' => '7',
                'lat' => 30.709058,
                'long' => 76.77439749999999,
                'radius' => 1131.3546142578125,
            ),
            240 => 
            array (
                'id' => 1241,
                'name' => 'Sector 32-C',
                'city_id' => '7',
                'lat' => 30.709058,
                'long' => 76.77439749999999,
                'radius' => 1131.3546142578125,
            ),
            241 => 
            array (
                'id' => 1242,
                'name' => 'Sector 32-D',
                'city_id' => '7',
                'lat' => 30.7083792,
                'long' => 76.7718838,
                'radius' => 580.466796875,
            ),
            242 => 
            array (
                'id' => 1243,
                'name' => 'Sector 33-A',
                'city_id' => '7',
                'lat' => 30.7137743,
                'long' => 76.769673,
                'radius' => 1094.294189453125,
            ),
            243 => 
            array (
                'id' => 1244,
                'name' => 'Sector 33-C',
                'city_id' => '7',
                'lat' => 30.7109038,
                'long' => 76.7689988,
                'radius' => 525.616943359375,
            ),
            244 => 
            array (
                'id' => 1245,
                'name' => 'Sector 33-D',
                'city_id' => '7',
                'lat' => 30.7137743,
                'long' => 76.769673,
                'radius' => 1094.294189453125,
            ),
            245 => 
            array (
                'id' => 1246,
                'name' => 'Sector 34',
                'city_id' => '7',
                'lat' => 30.7195549,
                'long' => 76.7639499,
                'radius' => 1186.9932861328125,
            ),
            246 => 
            array (
                'id' => 1247,
                'name' => 'Sector 34-A',
                'city_id' => '7',
                'lat' => 30.723306,
                'long' => 76.76611369999999,
                'radius' => 664.4727172851562,
            ),
            247 => 
            array (
                'id' => 1248,
                'name' => 'Sector 34-C',
                'city_id' => '7',
                'lat' => 30.7173637,
                'long' => 76.76322859999999,
                'radius' => 544.0484619140625,
            ),
            248 => 
            array (
                'id' => 1249,
                'name' => 'Sector 34-D',
                'city_id' => '7',
                'lat' => 30.7200369,
                'long' => 76.761786,
                'radius' => 589.8511962890625,
            ),
            249 => 
            array (
                'id' => 1250,
                'name' => 'Sector 35',
                'city_id' => '7',
                'lat' => 30.7261629,
                'long' => 76.7596221,
                'radius' => 1094.341064453125,
            ),
            250 => 
            array (
                'id' => 1251,
                'name' => 'Sector 35-A',
                'city_id' => '7',
                'lat' => 30.7261629,
                'long' => 76.7596221,
                'radius' => 1094.341064453125,
            ),
            251 => 
            array (
                'id' => 1252,
                'name' => 'Sector 35-B',
                'city_id' => '7',
                'lat' => 30.7259791,
                'long' => 76.7646712,
                'radius' => 606.258544921875,
            ),
            252 => 
            array (
                'id' => 1253,
                'name' => 'Sector 35-C',
                'city_id' => '7',
                'lat' => 30.7225608,
                'long' => 76.75890079999999,
                'radius' => 552.4848022460938,
            ),
            253 => 
            array (
                'id' => 1254,
                'name' => 'Sector 35-D',
                'city_id' => '7',
                'lat' => 30.7264956,
                'long' => 76.75601549999999,
                'radius' => 609.9163208007812,
            ),
            254 => 
            array (
                'id' => 1255,
                'name' => 'Sector 36',
                'city_id' => '7',
                'lat' => 30.7327703,
                'long' => 76.7552941,
                'radius' => 1112.65087890625,
            ),
            255 => 
            array (
                'id' => 1256,
                'name' => 'Sector 36-A',
                'city_id' => '7',
                'lat' => 30.7327703,
                'long' => 76.7552941,
                'radius' => 1112.65087890625,
            ),
            256 => 
            array (
                'id' => 1257,
                'name' => 'Sector 36-D',
                'city_id' => '7',
                'lat' => 30.7315427,
                'long' => 76.7502447,
                'radius' => 530.5289916992188,
            ),
            257 => 
            array (
                'id' => 1258,
                'name' => 'Sector 37',
                'city_id' => '7',
                'lat' => 30.7391181,
                'long' => 76.7498438,
                'radius' => 1049.3173828125,
            ),
            258 => 
            array (
                'id' => 1259,
                'name' => 'Sector 37-A',
                'city_id' => '7',
                'lat' => 30.7415678,
                'long' => 76.7516874,
                'radius' => 555.7511596679688,
            ),
            259 => 
            array (
                'id' => 1260,
                'name' => 'Sector 37-B',
                'city_id' => '7',
                'lat' => 30.7391181,
                'long' => 76.7498438,
                'radius' => 1049.3173828125,
            ),
            260 => 
            array (
                'id' => 1261,
                'name' => 'Sector 37-C',
                'city_id' => '7',
                'lat' => 30.73562609999999,
                'long' => 76.74880189999999,
                'radius' => 564.0123901367188,
            ),
            261 => 
            array (
                'id' => 1262,
                'name' => 'Sector 37-D',
                'city_id' => '7',
                'lat' => 30.7345433,
                'long' => 76.74592310000001,
                'radius' => 1865.04052734375,
            ),
            262 => 
            array (
                'id' => 1263,
                'name' => 'Sector 38',
                'city_id' => '7',
                'lat' => 30.7454504,
                'long' => 76.74448009999999,
                'radius' => 1353.8587646484375,
            ),
            263 => 
            array (
                'id' => 1264,
                'name' => 'Sector 38 West',
                'city_id' => '7',
                'lat' => 30.7499495,
                'long' => 76.7372594,
                'radius' => 762.9674072265625,
            ),
            264 => 
            array (
                'id' => 1265,
                'name' => 'Sector 38-A',
                'city_id' => '7',
                'lat' => 30.7481737,
                'long' => 76.74735919999999,
                'radius' => 583.9263305664062,
            ),
            265 => 
            array (
                'id' => 1266,
                'name' => 'Sector 38-B',
                'city_id' => '7',
                'lat' => 30.7442401,
                'long' => 76.7502447,
                'radius' => 563.6370849609375,
            ),
            266 => 
            array (
                'id' => 1267,
                'name' => 'Sector 38-C',
                'city_id' => '7',
                'lat' => 30.7414295,
                'long' => 76.74629379999999,
                'radius' => 111.20292663574219,
            ),
            267 => 
            array (
                'id' => 1268,
                'name' => 'Sector 38-D',
                'city_id' => '7',
                'lat' => 30.744755,
                'long' => 76.741588,
                'radius' => 528.7453002929688,
            ),
            268 => 
            array (
                'id' => 1269,
                'name' => 'Sector 4',
                'city_id' => '7',
                'lat' => 28.5839319,
                'long' => 77.32310939999999,
                'radius' => 560.28076171875,
            ),
            269 => 
            array (
                'id' => 1270,
                'name' => 'Sector 40',
                'city_id' => '7',
                'lat' => 30.7394439,
                'long' => 76.7379808,
                'radius' => 725.8488159179688,
            ),
            270 => 
            array (
                'id' => 1271,
                'name' => 'Sector 40-A',
                'city_id' => '7',
                'lat' => 30.7394439,
                'long' => 76.7379808,
                'radius' => 725.8488159179688,
            ),
            271 => 
            array (
                'id' => 1272,
                'name' => 'Sector 40-B',
                'city_id' => '7',
                'lat' => 30.7391433,
                'long' => 76.7383031,
                'radius' => 389.88397216796875,
            ),
            272 => 
            array (
                'id' => 1273,
                'name' => 'Sector 40-C',
                'city_id' => '7',
                'lat' => 30.7339832,
                'long' => 76.7329307,
                'radius' => 544.5079956054688,
            ),
            273 => 
            array (
                'id' => 1274,
                'name' => 'Sector 40-D',
                'city_id' => '7',
                'lat' => 30.7363831,
                'long' => 76.7309729,
                'radius' => 707.7261962890625,
            ),
            274 => 
            array (
                'id' => 1275,
                'name' => 'Sector 41-D',
                'city_id' => '7',
                'lat' => 30.7316264,
                'long' => 76.7340129,
                'radius' => 359.6943359375,
            ),
            275 => 
            array (
                'id' => 1276,
                'name' => 'Sector 42',
                'city_id' => '7',
                'lat' => 30.7243726,
                'long' => 76.7423094,
                'radius' => 1202.494384765625,
            ),
            276 => 
            array (
                'id' => 1277,
                'name' => 'Sector 42-B',
                'city_id' => '7',
                'lat' => 30.724505,
                'long' => 76.74699849999999,
                'radius' => 272.313720703125,
            ),
            277 => 
            array (
                'id' => 1278,
                'name' => 'Sector 42-C',
                'city_id' => '7',
                'lat' => 30.7243726,
                'long' => 76.7423094,
                'radius' => 1202.494384765625,
            ),
            278 => 
            array (
                'id' => 1279,
                'name' => 'Sector 43-A',
                'city_id' => '7',
                'lat' => 30.721666,
                'long' => 76.7502447,
                'radius' => 615.7113647460938,
            ),
            279 => 
            array (
                'id' => 1280,
                'name' => 'Sector 43-B',
                'city_id' => '7',
                'lat' => 30.7190586,
                'long' => 76.7487044,
                'radius' => 1077.101318359375,
            ),
            280 => 
            array (
                'id' => 1281,
                'name' => 'Sector 44',
                'city_id' => '7',
                'lat' => 28.448479,
                'long' => 77.0758733,
                'radius' => 591.99609375,
            ),
            281 => 
            array (
                'id' => 1282,
                'name' => 'Sector 44-A',
                'city_id' => '7',
                'lat' => 30.7135646,
                'long' => 76.7530761,
                'radius' => 1082.0731201171875,
            ),
            282 => 
            array (
                'id' => 1283,
                'name' => 'Sector 44-B',
                'city_id' => '7',
                'lat' => 30.713495,
                'long' => 76.7565646,
                'radius' => 225.9697723388672,
            ),
            283 => 
            array (
                'id' => 1284,
                'name' => 'Sector 44-C',
                'city_id' => '7',
                'lat' => 30.7135646,
                'long' => 76.7530761,
                'radius' => 1082.0731201171875,
            ),
            284 => 
            array (
                'id' => 1285,
                'name' => 'Sector 44-D',
                'city_id' => '7',
                'lat' => 30.7135646,
                'long' => 76.7530761,
                'radius' => 1082.0731201171875,
            ),
            285 => 
            array (
                'id' => 1286,
                'name' => 'Sector 45',
                'city_id' => '7',
                'lat' => 28.4452895,
                'long' => 77.0650809,
                'radius' => 1850.0704345703125,
            ),
            286 => 
            array (
                'id' => 1287,
                'name' => 'Sector 45-A',
                'city_id' => '7',
                'lat' => 30.7076696,
                'long' => 76.7581794,
                'radius' => 1086.2357177734375,
            ),
            287 => 
            array (
                'id' => 1288,
                'name' => 'Sector 45-B',
                'city_id' => '7',
                'lat' => 30.70802459999999,
                'long' => 76.7650318,
                'radius' => 352.73162841796875,
            ),
            288 => 
            array (
                'id' => 1289,
                'name' => 'Sector 45-C',
                'city_id' => '7',
                'lat' => 30.7040671,
                'long' => 76.7574581,
                'radius' => 561.8887329101562,
            ),
            289 => 
            array (
                'id' => 1290,
                'name' => 'Sector 45-D',
                'city_id' => '7',
                'lat' => 30.7076696,
                'long' => 76.7581794,
                'radius' => 1086.2357177734375,
            ),
            290 => 
            array (
                'id' => 1291,
                'name' => 'Sector 46',
                'city_id' => '7',
                'lat' => 28.4345552,
                'long' => 77.0578855,
                'radius' => 1386.26123046875,
            ),
            291 => 
            array (
                'id' => 1292,
                'name' => 'Sector 46-C',
                'city_id' => '7',
                'lat' => 30.7026207,
                'long' => 76.7639499,
                'radius' => 1149.4832763671875,
            ),
            292 => 
            array (
                'id' => 1293,
                'name' => 'Sector 47',
                'city_id' => '7',
                'lat' => 30.6947484,
                'long' => 76.7697201,
                'radius' => 1092.9525146484375,
            ),
            293 => 
            array (
                'id' => 1294,
                'name' => 'Sector 47-C',
                'city_id' => '7',
                'lat' => 30.692519,
                'long' => 76.77142099999999,
                'radius' => 197.83319091796875,
            ),
            294 => 
            array (
                'id' => 1295,
                'name' => 'Sector 47-D',
                'city_id' => '7',
                'lat' => 30.6950819,
                'long' => 76.76611369999999,
                'radius' => 564.35791015625,
            ),
            295 => 
            array (
                'id' => 1296,
                'name' => 'Sector 48-A',
                'city_id' => '7',
                'lat' => 19.015289,
                'long' => 73.0172825,
                'radius' => 253.0269775390625,
            ),
            296 => 
            array (
                'id' => 1297,
                'name' => 'Sector 48-C',
                'city_id' => '7',
                'lat' => 30.686887,
                'long' => 76.75895799999999,
                'radius' => 1865.9595947265625,
            ),
            297 => 
            array (
                'id' => 1298,
                'name' => 'Sector 49-A',
                'city_id' => '7',
                'lat' => 30.6988879,
                'long' => 76.7552583,
                'radius' => 1865.7271728515625,
            ),
            298 => 
            array (
                'id' => 1299,
                'name' => 'Sector 5',
                'city_id' => '7',
                'lat' => 26.8742101,
                'long' => 80.9836539,
                'radius' => 607.5615234375,
            ),
            299 => 
            array (
                'id' => 1300,
                'name' => 'Sector 6',
                'city_id' => '7',
                'lat' => 30.7064709,
                'long' => 76.8562405,
                'radius' => 1015.21728515625,
            ),
            300 => 
            array (
                'id' => 1301,
                'name' => 'Sector 61',
                'city_id' => '7',
                'lat' => 28.5960875,
                'long' => 77.3683319,
                'radius' => 826.4104614257812,
            ),
            301 => 
            array (
                'id' => 1302,
                'name' => 'Sector 7',
                'city_id' => '7',
                'lat' => 30.7350091,
                'long' => 76.8043355,
                'radius' => 1045.6260986328125,
            ),
            302 => 
            array (
                'id' => 1303,
                'name' => 'Sector 7-C',
                'city_id' => '7',
                'lat' => 30.7325211,
                'long' => 76.80073010000001,
                'radius' => 651.8324584960938,
            ),
            303 => 
            array (
                'id' => 1304,
                'name' => 'Sector 70',
                'city_id' => '7',
                'lat' => 30.6978446,
                'long' => 76.717779,
                'radius' => 1371.9827880859375,
            ),
            304 => 
            array (
                'id' => 1305,
                'name' => 'Sector 8',
                'city_id' => '7',
                'lat' => 30.7400589,
                'long' => 76.7985669,
                'radius' => 1154.933349609375,
            ),
            305 => 
            array (
                'id' => 1306,
                'name' => 'Sector 8-A',
                'city_id' => '7',
                'lat' => 19.1442848,
                'long' => 72.994035,
                'radius' => 397.60101318359375,
            ),
            306 => 
            array (
                'id' => 1307,
                'name' => 'Sector 8-B',
                'city_id' => '7',
                'lat' => 19.030947,
                'long' => 73.04464829999999,
                'radius' => 711.516357421875,
            ),
            307 => 
            array (
                'id' => 1308,
                'name' => 'Sector 8-C',
                'city_id' => '7',
                'lat' => 30.73898179999999,
                'long' => 76.79496139999999,
                'radius' => 624.9213256835938,
            ),
            308 => 
            array (
                'id' => 1309,
                'name' => 'Sector 9',
                'city_id' => '7',
                'lat' => 28.3733754,
                'long' => 77.335314,
                'radius' => 1249.0654296875,
            ),
            309 => 
            array (
                'id' => 1310,
                'name' => 'Sector 9-C',
                'city_id' => '7',
                'lat' => 30.7086707,
                'long' => 76.7720772,
                'radius' => 420.9287414550781,
            ),
            310 => 
            array (
                'id' => 1311,
                'name' => 'Zirakpur',
                'city_id' => '7',
                'lat' => 30.6425496,
                'long' => 76.8173359,
                'radius' => 4758.84033203125,
            ),
            311 => 
            array (
                'id' => 1312,
                'name' => 'Kakkanad',
                'city_id' => '6',
                'lat' => 10.0158605,
                'long' => 76.3418666,
                'radius' => 5298.69580078125,
            ),
            312 => 
            array (
                'id' => 1313,
                'name' => 'Edappally',
                'city_id' => '6',
                'lat' => 10.0236761,
                'long' => 76.3116235,
                'radius' => 4269.14599609375,
            ),
            313 => 
            array (
                'id' => 1314,
                'name' => 'Calicut',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'name' => 'Thrippunithura',
                'city_id' => '6',
                'lat' => 9.9486828,
                'long' => 76.34636239999999,
                'radius' => 8537.37890625,
            ),
            315 => 
            array (
                'id' => 1316,
                'name' => 'Aluva',
                'city_id' => '6',
                'lat' => 10.1075702,
                'long' => 76.34566199999999,
                'radius' => 6178.6337890625,
            ),
            316 => 
            array (
                'id' => 1317,
                'name' => 'Palarivattom',
                'city_id' => '6',
                'lat' => 9.9984802,
                'long' => 76.3119364,
                'radius' => 1283.598388671875,
            ),
            317 => 
            array (
                'id' => 1318,
                'name' => 'Kadavanthra',
                'city_id' => '6',
                'lat' => 9.970432899999999,
                'long' => 76.29913700000002,
                'radius' => 124.92168426513672,
            ),
            318 => 
            array (
                'id' => 1319,
                'name' => 'Kaloor',
                'city_id' => '6',
                'lat' => 9.9970903,
                'long' => 76.302815,
                'radius' => 3181.620849609375,
            ),
            319 => 
            array (
                'id' => 1320,
                'name' => 'Kalamassery',
                'city_id' => '6',
                'lat' => 10.0579063,
                'long' => 76.34636239999999,
                'radius' => 5129.896484375,
            ),
            320 => 
            array (
                'id' => 1321,
                'name' => 'Ernakulam',
                'city_id' => '6',
                'lat' => 9.9816358,
                'long' => 76.2998842,
                'radius' => 14119.0615234375,
            ),
            321 => 
            array (
                'id' => 1322,
                'name' => 'Marine Drive',
                'city_id' => '6',
                'lat' => 18.9432135,
                'long' => 72.8229996,
                'radius' => 2544.357177734375,
            ),
            322 => 
            array (
                'id' => 1323,
                'name' => 'Vyttila',
                'city_id' => '6',
                'lat' => 9.966654300000002,
                'long' => 76.31681340000002,
                'radius' => 2656.180908203125,
            ),
            323 => 
            array (
                'id' => 1324,
                'name' => 'Pizhala',
                'city_id' => '6',
                'lat' => 10.0501086,
                'long' => 76.2580499,
                'radius' => 1205.3544921875,
            ),
            324 => 
            array (
                'id' => 1325,
                'name' => 'Tatapuram',
                'city_id' => '6',
                'lat' => 9.9942101,
                'long' => 76.2761515,
                'radius' => 449.8376770019531,
            ),
            325 => 
            array (
                'id' => 1326,
                'name' => 'Manjeri',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'name' => 'Vazhakkala',
                'city_id' => '6',
                'lat' => 10.0177542,
                'long' => 76.3333364,
                'radius' => 1543.0775146484375,
            ),
            327 => 
            array (
                'id' => 1328,
                'name' => 'MG Road',
                'city_id' => '6',
                'lat' => 12.9726966,
                'long' => 77.6195894,
                'radius' => 479410.03125,
            ),
            328 => 
            array (
                'id' => 1329,
                'name' => 'Alangad',
                'city_id' => '6',
                'lat' => 10.1023571,
                'long' => 76.29149869999999,
                'radius' => 2758.303955078125,
            ),
            329 => 
            array (
                'id' => 1330,
                'name' => 'Ambalamedu',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'name' => 'Ambalamugal',
                'city_id' => '6',
                'lat' => 9.971474599999999,
                'long' => 76.36951669999999,
                'radius' => 4850.52587890625,
            ),
            331 => 
            array (
                'id' => 1332,
                'name' => 'Angamally',
                'city_id' => '6',
                'lat' => 10.1849092,
                'long' => 76.37530459999999,
                'radius' => 7935.0595703125,
            ),
            332 => 
            array (
                'id' => 1333,
                'name' => 'Angamally South',
                'city_id' => '6',
                'lat' => 10.1814255,
                'long' => 76.370889,
                'radius' => 210.46832275390625,
            ),
            333 => 
            array (
                'id' => 1334,
                'name' => 'Arakunnam',
                'city_id' => '6',
                'lat' => 9.8911325,
                'long' => 76.4300602,
                'radius' => 958.134521484375,
            ),
            334 => 
            array (
                'id' => 1335,
                'name' => 'Athani',
                'city_id' => '6',
                'lat' => 16.7268811,
                'long' => 75.06409289999999,
                'radius' => 3972.745849609375,
            ),
            335 => 
            array (
                'id' => 1336,
                'name' => 'Ayappankavu',
                'city_id' => '6',
                'lat' => 9.993618399999999,
                'long' => 76.2783235,
                'radius' => 1174.041259765625,
            ),
            336 => 
            array (
                'id' => 1337,
                'name' => 'Azheekal',
                'city_id' => '6',
                'lat' => 9.1213047,
                'long' => 76.47221429999999,
                'radius' => 2997.6513671875,
            ),
            337 => 
            array (
                'id' => 1338,
                'name' => 'Banerji Road',
                'city_id' => '6',
                'lat' => 9.9921403,
                'long' => 76.28921,
                'radius' => 1919.7904052734375,
            ),
            338 => 
            array (
                'id' => 1339,
                'name' => 'Binanipuram',
                'city_id' => '6',
                'lat' => 10.0869808,
                'long' => 76.3065567,
                'radius' => 616.2495727539062,
            ),
            339 => 
            array (
                'id' => 1340,
                'name' => 'Broadway',
                'city_id' => '6',
                'lat' => 9.9791651,
                'long' => 76.2773354,
                'radius' => 252.79539489746094,
            ),
            340 => 
            array (
                'id' => 1341,
                'name' => 'Canon Shed Road',
                'city_id' => '6',
                'lat' => 9.973735099999999,
                'long' => 76.2809837,
                'radius' => 174.7869415283203,
            ),
            341 => 
            array (
                'id' => 1342,
                'name' => 'Changampuzha Nagar',
                'city_id' => '6',
                'lat' => 10.0410788,
                'long' => 76.3195853,
                'radius' => 576.717529296875,
            ),
            342 => 
            array (
                'id' => 1343,
                'name' => 'Cherai',
                'city_id' => '6',
                'lat' => 10.1415953,
                'long' => 76.17828329999999,
                'radius' => 1398.3245849609375,
            ),
            343 => 
            array (
                'id' => 1344,
                'name' => 'Cheranalloor',
                'city_id' => '6',
                'lat' => 10.0580928,
                'long' => 76.2855634,
                'radius' => 2132.537841796875,
            ),
            344 => 
            array (
                'id' => 1345,
                'name' => 'Cheranallur',
                'city_id' => '6',
                'lat' => 10.0580928,
                'long' => 76.2855634,
                'radius' => 2132.537841796875,
            ),
            345 => 
            array (
                'id' => 1346,
                'name' => 'Chittoor Road',
                'city_id' => '6',
                'lat' => 9.998843599999999,
                'long' => 76.2799057,
                'radius' => 3944.318603515625,
            ),
            346 => 
            array (
                'id' => 1347,
                'name' => 'Chittoor-Ekm',
                'city_id' => '6',
                'lat' => 9.998843599999999,
                'long' => 76.2799057,
                'radius' => 3944.318603515625,
            ),
            347 => 
            array (
                'id' => 1348,
                'name' => 'Chottanikkara',
                'city_id' => '6',
                'lat' => 9.935286099999999,
                'long' => 76.38543279999999,
                'radius' => 1777.65380859375,
            ),
            348 => 
            array (
                'id' => 1349,
                'name' => 'Chullickal',
                'city_id' => '6',
                'lat' => 9.9476883,
                'long' => 76.25660169999999,
                'radius' => 1397.6392822265625,
            ),
            349 => 
            array (
                'id' => 1350,
                'name' => 'Cochin',
                'city_id' => '6',
                'lat' => 10.0113518,
                'long' => 76.3051316,
                'radius' => 12.737677574157715,
            ),
            350 => 
            array (
                'id' => 1351,
                'name' => 'Cochin Special Economic Zone',
                'city_id' => '6',
                'lat' => 10.0038092,
                'long' => 76.3427442,
                'radius' => 792.1253051757812,
            ),
            351 => 
            array (
                'id' => 1352,
                'name' => 'Convent Junction',
                'city_id' => '6',
                'lat' => 9.9766592,
                'long' => 76.2822377,
                'radius' => 217.4542694091797,
            ),
            352 => 
            array (
                'id' => 1353,
                'name' => 'Convent Road',
                'city_id' => '6',
                'lat' => 9.9766592,
                'long' => 76.2822377,
                'radius' => 230.28549194335938,
            ),
            353 => 
            array (
                'id' => 1354,
                'name' => 'CP Ummer Road',
                'city_id' => '6',
                'lat' => 9.9800253,
                'long' => 76.2869498,
                'radius' => 307.42523193359375,
            ),
            354 => 
            array (
                'id' => 1355,
                'name' => 'Durbar Hall Road',
                'city_id' => '6',
                'lat' => 9.9680141,
                'long' => 76.28371620000001,
                'radius' => 295.0840148925781,
            ),
            355 => 
            array (
                'id' => 1356,
                'name' => 'Edakochi',
                'city_id' => '6',
                'lat' => 9.9163994,
                'long' => 76.291355,
                'radius' => 2669.71484375,
            ),
            356 => 
            array (
                'id' => 1357,
                'name' => 'Edapally',
                'city_id' => '6',
                'lat' => 10.0236761,
                'long' => 76.3116235,
                'radius' => 4269.14599609375,
            ),
            357 => 
            array (
                'id' => 1358,
                'name' => 'Edathala',
                'city_id' => '6',
                'lat' => 10.082247,
                'long' => 76.38284460000001,
                'radius' => 3816.78271484375,
            ),
            358 => 
            array (
                'id' => 1359,
                'name' => 'Edavanakad',
                'city_id' => '6',
                'lat' => 10.095775,
                'long' => 76.2073525,
                'radius' => 3344.784912109375,
            ),
            359 => 
            array (
                'id' => 1360,
                'name' => 'Edayar',
                'city_id' => '6',
                'lat' => 10.0863523,
                'long' => 76.3132682,
                'radius' => 2039.279296875,
            ),
            360 => 
            array (
                'id' => 1361,
                'name' => 'Elamakkara',
                'city_id' => '6',
                'lat' => 10.0146377,
                'long' => 76.291355,
                'radius' => 2371.248291015625,
            ),
            361 => 
            array (
                'id' => 1362,
                'name' => 'Elamkunnapuzha',
                'city_id' => '6',
                'lat' => 10.0268019,
                'long' => 76.223288,
                'radius' => 1832.3673095703125,
            ),
            362 => 
            array (
                'id' => 1363,
                'name' => 'Ernakulam',
                'city_id' => '6',
                'lat' => 9.9312328,
                'long' => 76.26730409999999,
                'radius' => 26251.900390625,
            ),
            363 => 
            array (
                'id' => 1364,
                'name' => 'Ernakulam College',
                'city_id' => '6',
                'lat' => 9.9495838,
                'long' => 76.25177409999999,
                'radius' => 210.54273986816406,
            ),
            364 => 
            array (
                'id' => 1365,
                'name' => 'Ernakulam H.O',
                'city_id' => '6',
                'lat' => 9.971812,
                'long' => 76.28236,
                'radius' => 210.5356903076172,
            ),
            365 => 
            array (
                'id' => 1366,
                'name' => 'Ernakulam High Court',
                'city_id' => '6',
                'lat' => 9.9855131,
                'long' => 76.2749717,
                'radius' => 231.47674560546875,
            ),
            366 => 
            array (
                'id' => 1367,
                'name' => 'Ernakulam North',
                'city_id' => '6',
                'lat' => 9.9919637,
                'long' => 76.2877353,
                'radius' => 546.9188232421875,
            ),
            367 => 
            array (
                'id' => 1368,
                'name' => 'Ernakulam South',
                'city_id' => '6',
                'lat' => 9.969537299999999,
                'long' => 76.2899071,
                'radius' => 1158.8123779296875,
            ),
            368 => 
            array (
                'id' => 1369,
                'name' => 'Eroor',
                'city_id' => '6',
                'lat' => 9.967426999999999,
                'long' => 76.33767859999999,
                'radius' => 3200.1201171875,
            ),
            369 => 
            array (
                'id' => 1370,
                'name' => 'Fort Kochi',
                'city_id' => '6',
                'lat' => 9.9657787,
                'long' => 76.2421147,
                'radius' => 1666.166259765625,
            ),
            370 => 
            array (
                'id' => 1371,
                'name' => 'Gopala Prabhu Road',
                'city_id' => '6',
                'lat' => 9.9787611,
                'long' => 76.2813001,
                'radius' => 252.6714324951172,
            ),
            371 => 
            array (
                'id' => 1372,
                'name' => 'Irimbanam',
                'city_id' => '6',
                'lat' => 9.9681462,
                'long' => 76.35504569999999,
                'radius' => 2605.111572265625,
            ),
            372 => 
            array (
                'id' => 1373,
                'name' => 'Jew Street',
                'city_id' => '6',
                'lat' => 9.980977099999999,
                'long' => 76.2801492,
                'radius' => 476.6031494140625,
            ),
            373 => 
            array (
                'id' => 1374,
                'name' => 'Kacheripady',
                'city_id' => '6',
                'lat' => 9.988280099999999,
                'long' => 76.28121949999999,
                'radius' => 1134.4332275390625,
            ),
            374 => 
            array (
                'id' => 1375,
                'name' => 'Kadavanthara',
                'city_id' => '6',
                'lat' => 9.970432899999999,
                'long' => 76.29913700000002,
                'radius' => 124.92168426513672,
            ),
            375 => 
            array (
                'id' => 1376,
                'name' => 'Kadavanthra',
                'city_id' => '6',
                'lat' => 9.970432899999999,
                'long' => 76.29913700000002,
                'radius' => 124.92168426513672,
            ),
            376 => 
            array (
                'id' => 1377,
                'name' => 'Kalady',
                'city_id' => '6',
                'lat' => 10.1844746,
                'long' => 76.3718492,
                'radius' => 370.46759033203125,
            ),
            377 => 
            array (
                'id' => 1378,
                'name' => 'Kalamassery',
                'city_id' => '6',
                'lat' => 10.0579063,
                'long' => 76.34636239999999,
                'radius' => 5129.896484375,
            ),
            378 => 
            array (
                'id' => 1379,
                'name' => 'Kalathiparambil Road',
                'city_id' => '6',
                'lat' => 10.0166582,
                'long' => 76.2741502,
                'radius' => 230.69090270996094,
            ),
            379 => 
            array (
                'id' => 1380,
                'name' => 'Kanjiramattom',
                'city_id' => '6',
                'lat' => 9.8533393,
                'long' => 76.41581289999999,
                'radius' => 2856.050537109375,
            ),
            380 => 
            array (
                'id' => 1381,
                'name' => 'Kanjoor',
                'city_id' => '6',
                'lat' => 10.1365296,
                'long' => 76.43369659999999,
                'radius' => 1672.22998046875,
            ),
            381 => 
            array (
                'id' => 1382,
                'name' => 'Kannamali',
                'city_id' => '6',
                'lat' => 9.8757284,
                'long' => 76.2638427,
                'radius' => 4153.61669921875,
            ),
            382 => 
            array (
                'id' => 1383,
                'name' => 'Karikkamuri',
                'city_id' => '6',
                'lat' => 9.975587299999999,
                'long' => 76.2877353,
                'radius' => 413.6888122558594,
            ),
            383 => 
            array (
                'id' => 1384,
                'name' => 'Karukutty',
                'city_id' => '6',
                'lat' => 10.2269749,
                'long' => 76.3750218,
                'radius' => 3626.761962890625,
            ),
            384 => 
            array (
                'id' => 1385,
                'name' => 'Karuvelipady',
                'city_id' => '6',
                'lat' => 9.9390337,
                'long' => 76.2616704,
                'radius' => 642.9353637695312,
            ),
            385 => 
            array (
                'id' => 1386,
                'name' => 'Keezhillam',
                'city_id' => '6',
                'lat' => 10.0559086,
                'long' => 76.5301743,
                'radius' => 210.50881958007812,
            ),
            386 => 
            array (
                'id' => 1387,
                'name' => 'Kizhakkambalam',
                'city_id' => '6',
                'lat' => 10.0372719,
                'long' => 76.4085802,
                'radius' => 1168.5455322265625,
            ),
            387 => 
            array (
                'id' => 1388,
                'name' => 'Kochi H.O',
                'city_id' => '6',
                'lat' => 9.9312328,
                'long' => 76.26730409999999,
                'radius' => 26251.900390625,
            ),
            388 => 
            array (
                'id' => 1389,
                'name' => 'Kolenchery',
                'city_id' => '6',
                'lat' => 9.9782707,
                'long' => 76.4738971,
                'radius' => 1797.4031982421875,
            ),
            389 => 
            array (
                'id' => 1390,
                'name' => 'Kombara',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'name' => 'Koonammavu',
                'city_id' => '6',
                'lat' => 10.1063013,
                'long' => 76.2623945,
                'radius' => 3149.31884765625,
            ),
            391 => 
            array (
                'id' => 1392,
                'name' => 'Koothattukulam',
                'city_id' => '6',
                'lat' => 9.863259399999999,
                'long' => 76.5929565,
                'radius' => 48.048221588134766,
            ),
            392 => 
            array (
                'id' => 1393,
                'name' => 'Koovappady',
                'city_id' => '6',
                'lat' => 10.1562109,
                'long' => 76.48345789999999,
                'radius' => 3218.738037109375,
            ),
            393 => 
            array (
                'id' => 1394,
                'name' => 'Kothamangalam',
                'city_id' => '6',
                'lat' => 9.9926456,
                'long' => 76.588162,
                'radius' => 210.529052734375,
            ),
            394 => 
            array (
                'id' => 1395,
                'name' => 'Kumbalam',
                'city_id' => '6',
                'lat' => 9.903812799999999,
                'long' => 76.31060310000001,
                'radius' => 2283.385498046875,
            ),
            395 => 
            array (
                'id' => 1396,
                'name' => 'Kumbalangi',
                'city_id' => '6',
                'lat' => 9.8760584,
                'long' => 76.2870781,
                'radius' => 3051.09765625,
            ),
            396 => 
            array (
                'id' => 1397,
                'name' => 'Kuruppampady',
                'city_id' => '6',
                'lat' => 10.1084116,
                'long' => 76.50631820000001,
                'radius' => 260.5926208496094,
            ),
            397 => 
            array (
                'id' => 1398,
                'name' => 'Layam Road',
                'city_id' => '6',
                'lat' => 9.949502599999999,
                'long' => 76.3450497,
                'radius' => 524.5510864257812,
            ),
            398 => 
            array (
                'id' => 1399,
                'name' => 'Lissie Junction',
                'city_id' => '6',
                'lat' => 9.988975,
                'long' => 76.2886085,
                'radius' => 210.53021240234375,
            ),
            399 => 
            array (
                'id' => 1400,
                'name' => 'Malipuram',
                'city_id' => '6',
                'lat' => 10.021526,
                'long' => 76.2245609,
                'radius' => 210.51983642578125,
            ),
            400 => 
            array (
                'id' => 1401,
                'name' => 'Mamala',
                'city_id' => '6',
                'lat' => 9.948692399999999,
                'long' => 76.37964529999999,
                'radius' => 1096.0260009765625,
            ),
            401 => 
            array (
                'id' => 1402,
                'name' => 'Mamangalam',
                'city_id' => '6',
                'lat' => 10.0094187,
                'long' => 76.2971463,
                'radius' => 1629.8363037109375,
            ),
            402 => 
            array (
                'id' => 1403,
                'name' => 'Manjapra',
                'city_id' => '6',
                'lat' => 10.2073598,
                'long' => 76.4534165,
                'radius' => 1978.54931640625,
            ),
            403 => 
            array (
                'id' => 1404,
                'name' => 'Manjummel',
                'city_id' => '6',
                'lat' => 10.0533577,
                'long' => 76.30293739999999,
                'radius' => 1861.5350341796875,
            ),
            404 => 
            array (
                'id' => 1405,
                'name' => 'Maradu',
                'city_id' => '6',
                'lat' => 9.9368112,
                'long' => 76.32320419999999,
                'radius' => 3156.342529296875,
            ),
            405 => 
            array (
                'id' => 1406,
                'name' => 'Marine Drive',
                'city_id' => '6',
                'lat' => 9.9825798,
                'long' => 76.27542749999999,
                'radius' => 1957.4925537109375,
            ),
            406 => 
            array (
                'id' => 1407,
                'name' => 'Market Road',
                'city_id' => '6',
                'lat' => 9.9810195,
                'long' => 76.2782268,
                'radius' => 1213.3721923828125,
            ),
            407 => 
            array (
                'id' => 1408,
                'name' => 'Mattancherry',
                'city_id' => '6',
                'lat' => 9.9586007,
                'long' => 76.25660169999999,
                'radius' => 1272.19482421875,
            ),
            408 => 
            array (
                'id' => 1409,
                'name' => 'Moothakunnam',
                'city_id' => '6',
                'lat' => 10.190175,
                'long' => 76.2002014,
                'radius' => 3375.22021484375,
            ),
            409 => 
            array (
                'id' => 1410,
                'name' => 'Mulanthuruthy',
                'city_id' => '6',
                'lat' => 9.9003047,
                'long' => 76.38442710000001,
                'radius' => 1635.5892333984375,
            ),
            410 => 
            array (
                'id' => 1411,
                'name' => 'Mulavukad',
                'city_id' => '6',
                'lat' => 10.0134266,
                'long' => 76.2623945,
                'radius' => 3634.385009765625,
            ),
            411 => 
            array (
                'id' => 1412,
                'name' => 'Mundamveli',
                'city_id' => '6',
                'lat' => 9.9204134,
                'long' => 76.25660169999999,
                'radius' => 2324.23828125,
            ),
            412 => 
            array (
                'id' => 1413,
                'name' => 'Muppathadam',
                'city_id' => '6',
                'lat' => 10.0836429,
                'long' => 76.3145967,
                'radius' => 1014.507568359375,
            ),
            413 => 
            array (
                'id' => 1414,
                'name' => 'Muslim Street',
                'city_id' => '6',
                'lat' => 9.9813846,
                'long' => 76.27924519999999,
                'radius' => 65.72785186767578,
            ),
            414 => 
            array (
                'id' => 1415,
                'name' => 'Muvattupuzha Bazar',
                'city_id' => '6',
                'lat' => 9.994584,
                'long' => 76.572942,
                'radius' => 210.52842712402344,
            ),
            415 => 
            array (
                'id' => 1416,
                'name' => 'Muvattupuzha H.O',
                'city_id' => '6',
                'lat' => 9.988541999999999,
                'long' => 76.5786961,
                'radius' => 210.53036499023438,
            ),
            416 => 
            array (
                'id' => 1417,
                'name' => 'Narakkal',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'name' => 'Nayarambalam',
                'city_id' => '6',
                'lat' => 10.0629946,
                'long' => 76.2073525,
                'radius' => 3536.527587890625,
            ),
            418 => 
            array (
                'id' => 1419,
                'name' => 'Nazreth',
                'city_id' => '6',
                'lat' => 9.942330799999999,
                'long' => 76.249544,
                'radius' => 384.98809814453125,
            ),
            419 => 
            array (
                'id' => 1420,
                'name' => 'Nedumbassery',
                'city_id' => '6',
                'lat' => 10.1656696,
                'long' => 76.3938161,
                'radius' => 4178.79833984375,
            ),
            420 => 
            array (
                'id' => 1421,
                'name' => 'Nettoor',
                'city_id' => '6',
                'lat' => 9.9282678,
                'long' => 76.31451880000002,
                'radius' => 2312.188720703125,
            ),
            421 => 
            array (
                'id' => 1422,
                'name' => 'North End',
                'city_id' => '6',
                'lat' => 9.968347999999999,
                'long' => 76.2585245,
                'radius' => 210.5367889404297,
            ),
            422 => 
            array (
                'id' => 1423,
                'name' => 'North Kalamassery',
                'city_id' => '6',
                'lat' => 10.0563318,
                'long' => 76.3171144,
                'radius' => 5307.064453125,
            ),
            423 => 
            array (
                'id' => 1424,
                'name' => 'North Paravur',
                'city_id' => '6',
                'lat' => 10.1499581,
                'long' => 76.2299322,
                'radius' => 3041.64794921875,
            ),
            424 => 
            array (
                'id' => 1425,
                'name' => 'Okkal',
                'city_id' => '6',
                'lat' => 10.1609576,
                'long' => 76.4506378,
                'radius' => 478.9090270996094,
            ),
            425 => 
            array (
                'id' => 1426,
                'name' => 'Old Railway Station Road',
                'city_id' => '6',
                'lat' => 9.9879057,
                'long' => 76.27896179999999,
                'radius' => 400.8608703613281,
            ),
            426 => 
            array (
                'id' => 1427,
                'name' => 'Pachalam',
                'city_id' => '6',
                'lat' => 10.0013787,
                'long' => 76.2795445,
                'radius' => 845.0032958984375,
            ),
            427 => 
            array (
                'id' => 1428,
                'name' => 'Padivattom',
                'city_id' => '6',
                'lat' => 10.0088384,
                'long' => 76.3159664,
                'radius' => 1017.7112426757812,
            ),
            428 => 
            array (
                'id' => 1429,
                'name' => 'Pallimukku',
                'city_id' => '6',
                'lat' => 9.966567500000002,
                'long' => 76.28411539999999,
                'radius' => 787.6061401367188,
            ),
            429 => 
            array (
                'id' => 1430,
                'name' => 'Palliport',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'name' => 'Palluruthy',
                'city_id' => '6',
                'lat' => 9.908711799999999,
                'long' => 76.2730412,
                'radius' => 2739.65185546875,
            ),
            431 => 
            array (
                'id' => 1432,
                'name' => 'Panampilly Nagar',
                'city_id' => '6',
                'lat' => 9.9588628,
                'long' => 76.2956985,
                'radius' => 979.408447265625,
            ),
            432 => 
            array (
                'id' => 1433,
                'name' => 'Panangad',
                'city_id' => '6',
                'lat' => 9.8959941,
                'long' => 76.3260944,
                'radius' => 2570.4619140625,
            ),
            433 => 
            array (
                'id' => 1434,
                'name' => 'Panayappilly',
                'city_id' => '6',
                'lat' => 9.9463846,
                'long' => 76.2580499,
                'radius' => 632.3338012695312,
            ),
            434 => 
            array (
                'id' => 1435,
                'name' => 'Paramara Road',
                'city_id' => '6',
                'lat' => 9.9897576,
                'long' => 76.2850705,
                'radius' => 176.62635803222656,
            ),
            435 => 
            array (
                'id' => 1436,
                'name' => 'Paravur',
                'city_id' => '6',
                'lat' => 10.089171,
                'long' => 76.24501529999999,
                'radius' => 2634.886474609375,
            ),
            436 => 
            array (
                'id' => 1437,
                'name' => 'Pattimattam',
                'city_id' => '6',
                'lat' => 10.0251524,
                'long' => 76.4446348,
                'radius' => 379.0895690917969,
            ),
            437 => 
            array (
                'id' => 1438,
                'name' => 'Perumannoor',
                'city_id' => '6',
                'lat' => 9.953165199999999,
                'long' => 76.2899071,
                'radius' => 1534.986572265625,
            ),
            438 => 
            array (
                'id' => 1439,
                'name' => 'Perumanur',
                'city_id' => '6',
                'lat' => 9.953165199999999,
                'long' => 76.2899071,
                'radius' => 1534.986572265625,
            ),
            439 => 
            array (
                'id' => 1440,
                'name' => 'Perumbavoor',
                'city_id' => '6',
                'lat' => 10.1144912,
                'long' => 76.4775534,
                'radius' => 210.48997497558594,
            ),
            440 => 
            array (
                'id' => 1441,
                'name' => 'Perumbavoor H.O',
                'city_id' => '6',
                'lat' => 10.1144912,
                'long' => 76.4775534,
                'radius' => 210.48997497558594,
            ),
            441 => 
            array (
                'id' => 1442,
                'name' => 'Piravom',
                'city_id' => '6',
                'lat' => 9.8770738,
                'long' => 76.4856648,
                'radius' => 59.481689453125,
            ),
            442 => 
            array (
                'id' => 1443,
                'name' => 'Ponnurunni',
                'city_id' => '6',
                'lat' => 9.9768291,
                'long' => 76.3099648,
                'radius' => 1721.1094970703125,
            ),
            443 => 
            array (
                'id' => 1444,
                'name' => 'Poonithura',
                'city_id' => '6',
                'lat' => 9.9385943,
                'long' => 76.3333364,
                'radius' => 1756.57275390625,
            ),
            444 => 
            array (
                'id' => 1445,
                'name' => 'Poothotta',
                'city_id' => '6',
                'lat' => 9.8506191,
                'long' => 76.3825391,
                'radius' => 987.03662109375,
            ),
            445 => 
            array (
                'id' => 1446,
                'name' => 'Press Club Road',
                'city_id' => '6',
                'lat' => 9.9767399,
                'long' => 76.2790533,
                'radius' => 110.29273986816406,
            ),
            446 => 
            array (
                'id' => 1447,
                'name' => 'Providence Road',
                'city_id' => '6',
                'lat' => 9.987974099999999,
                'long' => 76.2809693,
                'radius' => 247.9342498779297,
            ),
            447 => 
            array (
                'id' => 1448,
                'name' => 'PT Usha Road',
                'city_id' => '6',
                'lat' => 9.9735438,
                'long' => 76.28332139999999,
                'radius' => 188.05458068847656,
            ),
            448 => 
            array (
                'id' => 1449,
                'name' => 'Pullepady',
                'city_id' => '6',
                'lat' => 9.982615899999999,
                'long' => 76.2844774,
                'radius' => 374.8140869140625,
            ),
            449 => 
            array (
                'id' => 1450,
                'name' => 'Puthencruz',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'name' => 'Puthenvelikkara',
                'city_id' => '6',
                'lat' => 10.1700176,
                'long' => 76.2518043,
                'radius' => 213.2642364501953,
            ),
            451 => 
            array (
                'id' => 1452,
                'name' => 'Rajaji Road',
                'city_id' => '6',
                'lat' => 9.9786253,
                'long' => 76.2853717,
                'radius' => 206.43614196777344,
            ),
            452 => 
            array (
                'id' => 1453,
                'name' => 'Ravipuram',
                'city_id' => '6',
                'lat' => 9.955893699999999,
                'long' => 76.2899071,
                'radius' => 1154.585693359375,
            ),
            453 => 
            array (
                'id' => 1454,
                'name' => 'Sahodaran Ayyapan Road',
                'city_id' => '6',
                'lat' => 9.967619599999999,
                'long' => 76.3026881,
                'radius' => 1722.6729736328125,
            ),
            454 => 
            array (
                'id' => 1455,
                'name' => 'Shanmugam Road',
                'city_id' => '6',
                'lat' => 9.9798257,
                'long' => 76.2758975,
                'radius' => 638.4830932617188,
            ),
            455 => 
            array (
                'id' => 1456,
                'name' => 'Shanmugham Road',
                'city_id' => '6',
                'lat' => 9.9798257,
                'long' => 76.2758975,
                'radius' => 638.4830932617188,
            ),
            456 => 
            array (
                'id' => 1457,
                'name' => 'South Kalamassery',
                'city_id' => '6',
                'lat' => 10.0507697,
                'long' => 76.3200956,
                'radius' => 2225.6572265625,
            ),
            457 => 
            array (
                'id' => 1458,
                'name' => 'Sreemoolanagaram',
                'city_id' => '6',
                'lat' => 10.1340201,
                'long' => 76.4013471,
                'radius' => 2082.3740234375,
            ),
            458 => 
            array (
                'id' => 1459,
                'name' => 'SRM Road',
                'city_id' => '6',
                'lat' => 9.9983497,
                'long' => 76.28503950000001,
                'radius' => 964.0397338867188,
            ),
            459 => 
            array (
                'id' => 1460,
                'name' => 'St. Benedict Road',
                'city_id' => '6',
                'lat' => 9.9903035,
                'long' => 76.2814525,
                'radius' => 534.955078125,
            ),
            460 => 
            array (
                'id' => 1461,
                'name' => 'TD Road',
                'city_id' => '6',
                'lat' => 9.977786799999999,
                'long' => 76.2816294,
                'radius' => 887.6069946289062,
            ),
            461 => 
            array (
                'id' => 1462,
                'name' => 'Thaikkattukara',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'name' => 'Thammanam',
                'city_id' => '6',
                'lat' => 9.9885532,
                'long' => 76.3093555,
                'radius' => 1646.6102294921875,
            ),
            463 => 
            array (
                'id' => 1464,
                'name' => 'Thevara',
                'city_id' => '6',
                'lat' => 9.9426125,
                'long' => 76.29859410000002,
                'radius' => 2021.0604248046875,
            ),
            464 => 
            array (
                'id' => 1465,
                'name' => 'Thiruvamkulam',
                'city_id' => '6',
                'lat' => 9.946790700000001,
                'long' => 76.3666226,
                'radius' => 1587.657470703125,
            ),
            465 => 
            array (
                'id' => 1466,
                'name' => 'Thoppumpady',
                'city_id' => '6',
                'lat' => 9.9355941,
                'long' => 76.2609463,
                'radius' => 1392.0062255859375,
            ),
            466 => 
            array (
                'id' => 1467,
                'name' => 'Thottakkattukara',
                'city_id' => '6',
                'lat' => 10.1206519,
                'long' => 76.3434679,
                'radius' => 1997.8492431640625,
            ),
            467 => 
            array (
                'id' => 1468,
                'name' => 'Thottumughom',
                'city_id' => '6',
                'lat' => 10.1084747,
                'long' => 76.37084569999999,
                'radius' => 210.49192810058594,
            ),
            468 => 
            array (
                'id' => 1469,
                'name' => 'Thrikkakara',
                'city_id' => '6',
                'lat' => 10.0327153,
                'long' => 76.33188899999999,
                'radius' => 3112.28271484375,
            ),
            469 => 
            array (
                'id' => 1470,
                'name' => 'Thrissur',
                'city_id' => '6',
                'lat' => 10.5276416,
                'long' => 76.2144349,
                'radius' => 14050.3525390625,
            ),
            470 => 
            array (
                'id' => 1471,
                'name' => 'Tripunithura',
                'city_id' => '6',
                'lat' => 9.9486828,
                'long' => 76.34636239999999,
                'radius' => 8537.37890625,
            ),
            471 => 
            array (
                'id' => 1472,
                'name' => 'Udayamperoor',
                'city_id' => '6',
                'lat' => 9.8955299,
                'long' => 76.3680712,
                'radius' => 3631.236572265625,
            ),
            472 => 
            array (
                'id' => 1473,
                'name' => 'Udyogamandal',
                'city_id' => '6',
                'lat' => 10.0737878,
                'long' => 76.3014896,
                'radius' => 1933.2291259765625,
            ),
            473 => 
            array (
                'id' => 1474,
                'name' => 'Vaduthala',
                'city_id' => '6',
                'lat' => 10.0153371,
                'long' => 76.27542749999999,
                'radius' => 2193.677001953125,
            ),
            474 => 
            array (
                'id' => 1475,
                'name' => 'Valanjambalam',
                'city_id' => '6',
                'lat' => 9.965961000000002,
                'long' => 76.28874239999999,
                'radius' => 395.69427490234375,
            ),
            475 => 
            array (
                'id' => 1476,
                'name' => 'Varapuzha',
                'city_id' => '6',
                'lat' => 10.0743385,
                'long' => 76.2713608,
                'radius' => 3357.515869140625,
            ),
            476 => 
            array (
                'id' => 1477,
                'name' => 'Vazhakkala',
                'city_id' => '6',
                'lat' => 10.0177542,
                'long' => 76.3333364,
                'radius' => 1543.0775146484375,
            ),
            477 => 
            array (
                'id' => 1478,
                'name' => 'Vazhakulam',
                'city_id' => '6',
                'lat' => 9.9467939,
                'long' => 76.63486089999999,
                'radius' => 210.5436248779297,
            ),
            478 => 
            array (
                'id' => 1479,
                'name' => 'Veekshanam Road',
                'city_id' => '6',
                'lat' => 9.9847865,
                'long' => 76.2857154,
                'radius' => 397.9139099121094,
            ),
            479 => 
            array (
                'id' => 1480,
                'name' => 'Vennala',
                'city_id' => '6',
                'lat' => 9.988525,
                'long' => 76.32014800000002,
                'radius' => 2569.410888671875,
            ),
            480 => 
            array (
                'id' => 1481,
                'name' => 'Vyttila',
                'city_id' => '6',
                'lat' => 9.966654300000002,
                'long' => 76.31681340000002,
                'radius' => 2656.180908203125,
            ),
            481 => 
            array (
                'id' => 1482,
                'name' => 'Warriam Road',
                'city_id' => '6',
                'lat' => 9.9659584,
                'long' => 76.2852843,
                'radius' => 284.01959228515625,
            ),
            482 => 
            array (
                'id' => 1483,
                'name' => 'Willingdon Island',
                'city_id' => '6',
                'lat' => 9.936388899999999,
                'long' => 76.25388889999999,
                'radius' => 2137.180908203125,
            ),
            483 => 
            array (
                'id' => 1484,
                'name' => 'Vallarpadam',
                'city_id' => '6',
                'lat' => 9.9994138,
                'long' => 76.2537052,
                'radius' => 3033.648193359375,
            ),
            484 => 
            array (
                'id' => 1485,
                'name' => 'South Chellanam',
                'city_id' => '6',
                'lat' => 9.8393572,
                'long' => 76.2739795,
                'radius' => 8278.857421875,
            ),
            485 => 
            array (
                'id' => 1486,
                'name' => 'Thengode',
                'city_id' => '6',
                'lat' => 10.0217911,
                'long' => 76.3685606,
                'radius' => 565.7478637695312,
            ),
            486 => 
            array (
                'id' => 1487,
                'name' => 'Vadakode Kailas',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'name' => 'Angadikadavu',
                'city_id' => '6',
                'lat' => 10.1971092,
                'long' => 76.380139,
                'radius' => 636.3436889648438,
            ),
            488 => 
            array (
                'id' => 1489,
                'name' => 'Chellanam',
                'city_id' => '6',
                'lat' => 9.8393572,
                'long' => 76.2739795,
                'radius' => 8278.857421875,
            ),
            489 => 
            array (
                'id' => 1490,
                'name' => 'Chittoor Ernakulam',
                'city_id' => '6',
                'lat' => 9.998843599999999,
                'long' => 76.2799057,
                'radius' => 3944.318603515625,
            ),
            490 => 
            array (
                'id' => 1491,
                'name' => 'Edapally North',
                'city_id' => '6',
                'lat' => 10.0236761,
                'long' => 76.3116235,
                'radius' => 4269.14599609375,
            ),
            491 => 
            array (
                'id' => 1492,
                'name' => 'Bharata Mata College',
                'city_id' => '6',
                'lat' => 10.0300087,
                'long' => 76.3355527,
                'radius' => 98.80036163330078,
            ),
            492 => 
            array (
                'id' => 1493,
                'name' => 'Kadamakudi',
                'city_id' => '6',
                'lat' => 10.0570888,
                'long' => 76.2525754,
                'radius' => 210.50843811035156,
            ),
            493 => 
            array (
                'id' => 1494,
                'name' => 'Kochi',
                'city_id' => '6',
                'lat' => 9.9312328,
                'long' => 76.26730409999999,
                'radius' => 26251.900390625,
            ),
            494 => 
            array (
                'id' => 1495,
                'name' => 'Kochi MG Road',
                'city_id' => '6',
                'lat' => 9.9649828,
                'long' => 76.2869059,
                'radius' => 2423.559326171875,
            ),
            495 => 
            array (
                'id' => 1496,
                'name' => 'Kochi Naval Base',
                'city_id' => '6',
                'lat' => 9.953253199999999,
                'long' => 76.27922989999999,
                'radius' => 210.5415802001953,
            ),
            496 => 
            array (
                'id' => 1497,
                'name' => 'Kochi University',
                'city_id' => '6',
                'lat' => 10.044334,
                'long' => 76.32823379999999,
                'radius' => 210.5125274658203,
            ),
            497 => 
            array (
                'id' => 1498,
                'name' => 'Kollode',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'name' => 'Kothad',
                'city_id' => '6',
                'lat' => 10.0521434,
                'long' => 76.2739795,
                'radius' => 1227.76025390625,
            ),
            499 => 
            array (
                'id' => 1500,
                'name' => 'Malayinkil',
                'city_id' => '6',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'name' => 'Palluruthy Industrial Estate',
                'city_id' => '6',
                'lat' => 9.9252091,
                'long' => 76.2715358,
                'radius' => 90.52667236328125,
            ),
            1 => 
            array (
                'id' => 1502,
                'name' => 'Mira Road',
                'city_id' => '4',
                'lat' => 19.2871393,
                'long' => 72.8688419,
                'radius' => 3822.0576171875,
            ),
            2 => 
            array (
                'id' => 1503,
                'name' => 'Chembur',
                'city_id' => '4',
                'lat' => 19.0327996,
                'long' => 72.89635679999999,
                'radius' => 5372.3935546875,
            ),
            3 => 
            array (
                'id' => 1504,
                'name' => 'Andheri West',
                'city_id' => '4',
                'lat' => 19.1363246,
                'long' => 72.82766,
                'radius' => 3908.85546875,
            ),
            4 => 
            array (
                'id' => 1505,
                'name' => 'Kharghar',
                'city_id' => '4',
                'lat' => 19.0473216,
                'long' => 73.0699046,
                'radius' => 6965.05712890625,
            ),
            5 => 
            array (
                'id' => 1506,
                'name' => 'Malad West',
                'city_id' => '4',
                'lat' => 19.1827551,
                'long' => 72.84015389999999,
                'radius' => 4913.86376953125,
            ),
            6 => 
            array (
                'id' => 1507,
                'name' => 'Andheri East',
                'city_id' => '4',
                'lat' => 19.113645,
                'long' => 72.8697339,
                'radius' => 2050.143310546875,
            ),
            7 => 
            array (
                'id' => 1508,
                'name' => 'Bandra West',
                'city_id' => '4',
                'lat' => 19.0606917,
                'long' => 72.8362497,
                'radius' => 2962.255859375,
            ),
            8 => 
            array (
                'id' => 1509,
                'name' => 'Goregaon West',
                'city_id' => '4',
                'lat' => 19.1551485,
                'long' => 72.8678551,
                'radius' => 4872.37548828125,
            ),
            9 => 
            array (
                'id' => 1510,
                'name' => 'Kandivali East',
                'city_id' => '4',
                'lat' => 19.1998211,
                'long' => 72.84259399999999,
                'radius' => 4110.01806640625,
            ),
            10 => 
            array (
                'id' => 1511,
                'name' => 'Ghodbunder Road',
                'city_id' => '4',
                'lat' => 19.280105,
                'long' => 72.9302656,
                'radius' => 8670.8603515625,
            ),
            11 => 
            array (
                'id' => 1512,
                'name' => 'Navi Mumbai',
                'city_id' => '4',
                'lat' => 19.0330488,
                'long' => 73.0296625,
                'radius' => 24581.01171875,
            ),
            12 => 
            array (
                'id' => 1513,
                'name' => 'Bhandup West',
                'city_id' => '4',
                'lat' => 19.1509879,
                'long' => 72.9315251,
                'radius' => 3335.54931640625,
            ),
            13 => 
            array (
                'id' => 1514,
                'name' => 'Borivali West',
                'city_id' => '4',
                'lat' => 19.2461644,
                'long' => 72.85090559999999,
                'radius' => 5053.4365234375,
            ),
            14 => 
            array (
                'id' => 1515,
                'name' => 'Panvel',
                'city_id' => '4',
                'lat' => 18.9894007,
                'long' => 73.1175162,
                'radius' => 7461.10498046875,
            ),
            15 => 
            array (
                'id' => 1516,
                'name' => 'Khar East',
                'city_id' => '4',
                'lat' => 19.0716597,
                'long' => 72.8439889,
                'radius' => 750.5814208984375,
            ),
            16 => 
            array (
                'id' => 1517,
                'name' => 'Kandivali West',
                'city_id' => '4',
                'lat' => 19.1998211,
                'long' => 72.84259399999999,
                'radius' => 4110.01806640625,
            ),
            17 => 
            array (
                'id' => 1518,
                'name' => 'Goregaon East',
                'city_id' => '4',
                'lat' => 19.1551485,
                'long' => 72.8678551,
                'radius' => 4872.37548828125,
            ),
            18 => 
            array (
                'id' => 1519,
                'name' => '90 Feet Road',
                'city_id' => '4',
                'lat' => 19.043015,
                'long' => 72.8571376,
                'radius' => 662.9367065429688,
            ),
            19 => 
            array (
                'id' => 1520,
                'name' => 'Nelson Manickam Road',
                'city_id' => '4',
                'lat' => 19.1045301,
                'long' => 72.8341816,
                'radius' => 307.95697021484375,
            ),
            20 => 
            array (
                'id' => 1521,
                'name' => 'Abdul Rehman Street',
                'city_id' => '4',
                'lat' => 18.9508463,
                'long' => 72.8327505,
                'radius' => 390.1153259277344,
            ),
            21 => 
            array (
                'id' => 1522,
                'name' => 'Agripada',
                'city_id' => '4',
                'lat' => 18.9777315,
                'long' => 72.8273249,
                'radius' => 978.8140258789062,
            ),
            22 => 
            array (
                'id' => 1523,
                'name' => 'Airoli',
                'city_id' => '4',
                'lat' => 19.157935,
                'long' => 72.9934762,
                'radius' => 3170.530517578125,
            ),
            23 => 
            array (
                'id' => 1524,
                'name' => 'Airoli Sector 4',
                'city_id' => '4',
                'lat' => 19.153192,
                'long' => 72.99698719999999,
                'radius' => 415.2577819824219,
            ),
            24 => 
            array (
                'id' => 1525,
                'name' => 'Airoli Sector 8',
                'city_id' => '4',
                'lat' => 19.1442848,
                'long' => 72.994035,
                'radius' => 397.60101318359375,
            ),
            25 => 
            array (
                'id' => 1526,
                'name' => 'Altamount Road',
                'city_id' => '4',
                'lat' => 18.9671349,
                'long' => 72.8095076,
                'radius' => 427.612548828125,
            ),
            26 => 
            array (
                'id' => 1527,
                'name' => 'Ambarnath',
                'city_id' => '4',
                'lat' => 19.1825167,
                'long' => 73.19260229999999,
                'radius' => 7438.763671875,
            ),
            27 => 
            array (
                'id' => 1528,
                'name' => 'Ambarnath East',
                'city_id' => '4',
                'lat' => 19.2091683,
                'long' => 73.1789835,
                'radius' => 206.311279296875,
            ),
            28 => 
            array (
                'id' => 1529,
                'name' => 'Ambernath West',
                'city_id' => '4',
                'lat' => 19.1825167,
                'long' => 73.19260229999999,
                'radius' => 7438.763671875,
            ),
            29 => 
            array (
                'id' => 1530,
                'name' => 'Amboli',
                'city_id' => '4',
                'lat' => 19.1257992,
                'long' => 72.8448476,
                'radius' => 1026.1971435546875,
            ),
            30 => 
            array (
                'id' => 1531,
                'name' => 'Andheri Kurla Road',
                'city_id' => '4',
                'lat' => 19.1108788,
                'long' => 72.8715356,
                'radius' => 4191.7919921875,
            ),
            31 => 
            array (
                'id' => 1532,
                'name' => 'Andheri Sahar Road',
                'city_id' => '4',
                'lat' => 19.1086092,
                'long' => 72.8570451,
                'radius' => 1758.1270751953125,
            ),
            32 => 
            array (
                'id' => 1533,
                'name' => 'Antop Hill',
                'city_id' => '4',
                'lat' => 19.0283439,
                'long' => 72.869804,
                'radius' => 1664.6011962890625,
            ),
            33 => 
            array (
                'id' => 1534,
                'name' => 'Apollo Bunder',
                'city_id' => '4',
                'lat' => 18.9203886,
                'long' => 72.83013059999999,
                'radius' => 906.4207763671875,
            ),
            34 => 
            array (
                'id' => 1535,
                'name' => 'August Kranti Maidan',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'name' => 'Babulnath Road',
                'city_id' => '4',
                'lat' => 18.9573052,
                'long' => 72.8087302,
                'radius' => 248.217529296875,
            ),
            36 => 
            array (
                'id' => 1537,
                'name' => 'Badlapur',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'name' => 'Ballard Estate',
                'city_id' => '4',
                'lat' => 18.9362381,
                'long' => 72.83825470000001,
                'radius' => 648.2083740234375,
            ),
            38 => 
            array (
                'id' => 1539,
                'name' => 'Bandra East',
                'city_id' => '4',
                'lat' => 19.0606917,
                'long' => 72.8362497,
                'radius' => 2962.255859375,
            ),
            39 => 
            array (
                'id' => 1540,
                'name' => 'Belapur',
                'city_id' => '4',
                'lat' => 19.0300657,
                'long' => 73.03511379999999,
                'radius' => 2996.965576171875,
            ),
            40 => 
            array (
                'id' => 1541,
                'name' => 'Bhandup',
                'city_id' => '4',
                'lat' => 19.1465225,
                'long' => 72.9305026,
                'radius' => 2049.7353515625,
            ),
            41 => 
            array (
                'id' => 1542,
                'name' => 'Bhandup East',
                'city_id' => '4',
                'lat' => 19.1465032,
                'long' => 72.94598409999999,
                'radius' => 2533.007080078125,
            ),
            42 => 
            array (
                'id' => 1543,
                'name' => 'Bhayandar',
                'city_id' => '4',
                'lat' => 19.310472,
                'long' => 72.854041,
                'radius' => 2047.6920166015625,
            ),
            43 => 
            array (
                'id' => 1544,
                'name' => 'Bhayandar East',
                'city_id' => '4',
                'lat' => 19.3056009,
                'long' => 72.8593755,
                'radius' => 2484.920166015625,
            ),
            44 => 
            array (
                'id' => 1545,
                'name' => 'Bhayandar Wada',
                'city_id' => '4',
                'lat' => 19.2201873,
                'long' => 72.9869811,
                'radius' => 1000.2709350585938,
            ),
            45 => 
            array (
                'id' => 1546,
                'name' => 'Bhayandar West',
                'city_id' => '4',
                'lat' => 19.3017788,
                'long' => 72.8502601,
                'radius' => 5502.16650390625,
            ),
            46 => 
            array (
                'id' => 1547,
                'name' => 'Bhayander',
                'city_id' => '4',
                'lat' => 19.310472,
                'long' => 72.854041,
                'radius' => 2047.6920166015625,
            ),
            47 => 
            array (
                'id' => 1548,
                'name' => 'Bhayander East',
                'city_id' => '4',
                'lat' => 19.3056009,
                'long' => 72.8593755,
                'radius' => 2484.920166015625,
            ),
            48 => 
            array (
                'id' => 1549,
                'name' => 'Bhayander West',
                'city_id' => '4',
                'lat' => 19.3017788,
                'long' => 72.8502601,
                'radius' => 5502.16650390625,
            ),
            49 => 
            array (
                'id' => 1550,
                'name' => 'Bhindi Bazaar',
                'city_id' => '4',
                'lat' => 18.9567568,
                'long' => 72.8312385,
                'radius' => 293.5128479003906,
            ),
            50 => 
            array (
                'id' => 1551,
                'name' => 'Bhiwandi',
                'city_id' => '4',
                'lat' => 19.2812547,
                'long' => 73.0482912,
                'radius' => 10008.357421875,
            ),
            51 => 
            array (
                'id' => 1552,
                'name' => 'Bhiwandi',
                'city_id' => '4',
                'lat' => 19.2812547,
                'long' => 73.0482912,
                'radius' => 10008.357421875,
            ),
            52 => 
            array (
                'id' => 1553,
                'name' => 'Bhoiwada',
                'city_id' => '4',
                'lat' => 19.0048419,
                'long' => 72.8460091,
                'radius' => 220.6600341796875,
            ),
            53 => 
            array (
                'id' => 1554,
                'name' => 'Bhulabhai Desai Road',
                'city_id' => '4',
                'lat' => 18.9723185,
                'long' => 72.8051864,
                'radius' => 912.7215576171875,
            ),
            54 => 
            array (
                'id' => 1555,
                'name' => 'Bhuleshwar',
                'city_id' => '4',
                'lat' => 18.9562462,
                'long' => 72.82955419999999,
                'radius' => 701.7831420898438,
            ),
            55 => 
            array (
                'id' => 1556,
                'name' => 'Bhyandar East',
                'city_id' => '4',
                'lat' => 19.3056009,
                'long' => 72.8593755,
                'radius' => 2484.920166015625,
            ),
            56 => 
            array (
                'id' => 1557,
                'name' => 'Boisar',
                'city_id' => '4',
                'lat' => 19.7968929,
                'long' => 72.7451817,
                'radius' => 3871.22314453125,
            ),
            57 => 
            array (
                'id' => 1558,
                'name' => 'Boisar West',
                'city_id' => '4',
                'lat' => 19.7968929,
                'long' => 72.7451817,
                'radius' => 3871.22314453125,
            ),
            58 => 
            array (
                'id' => 1559,
                'name' => 'Borivali',
                'city_id' => '4',
                'lat' => 19.2371877,
                'long' => 72.8441358,
                'radius' => 3908.49609375,
            ),
            59 => 
            array (
                'id' => 1560,
                'name' => 'Borivali East',
                'city_id' => '4',
                'lat' => 19.2240612,
                'long' => 72.86664689999999,
                'radius' => 2402.306640625,
            ),
            60 => 
            array (
                'id' => 1561,
                'name' => 'Breach Candy',
                'city_id' => '4',
                'lat' => 18.9746317,
                'long' => 72.80650229999999,
                'radius' => 1240.4969482421875,
            ),
            61 => 
            array (
                'id' => 1562,
                'name' => 'Byculla',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'name' => 'Byculla East',
                'city_id' => '4',
                'lat' => 18.9821993,
                'long' => 72.83825470000001,
                'radius' => 891.2391357421875,
            ),
            63 => 
            array (
                'id' => 1564,
                'name' => 'Byculla West',
                'city_id' => '4',
                'lat' => 18.9760704,
                'long' => 72.8311503,
                'radius' => 803.8580322265625,
            ),
            64 => 
            array (
                'id' => 1565,
                'name' => 'CP Tank',
                'city_id' => '4',
                'lat' => 18.9570542,
                'long' => 72.8268071,
                'radius' => 295.8660583496094,
            ),
            65 => 
            array (
                'id' => 1566,
                'name' => 'Chhatrapati Shivaji Terminus',
                'city_id' => '4',
                'lat' => 19.0895595,
                'long' => 72.8656144,
                'radius' => 206.38182067871094,
            ),
            66 => 
            array (
                'id' => 1567,
                'name' => 'Carnac Bunder',
                'city_id' => '4',
                'lat' => 18.94733,
                'long' => 72.8406328,
                'radius' => 313.67852783203125,
            ),
            67 => 
            array (
                'id' => 1568,
                'name' => 'CBD Belapur',
                'city_id' => '4',
                'lat' => 19.0300657,
                'long' => 73.03511379999999,
                'radius' => 2996.965576171875,
            ),
            68 => 
            array (
                'id' => 1569,
                'name' => 'CBD Belapur Sector 11',
                'city_id' => '4',
                'lat' => 19.0164654,
                'long' => 73.0412656,
                'radius' => 711.2787475585938,
            ),
            69 => 
            array (
                'id' => 1570,
                'name' => 'Chakala',
                'city_id' => '4',
                'lat' => 19.1097712,
                'long' => 72.8582672,
                'radius' => 569.4646606445312,
            ),
            70 => 
            array (
                'id' => 1571,
                'name' => 'Chandivali',
                'city_id' => '4',
                'lat' => 19.1074911,
                'long' => 72.90176029999999,
                'radius' => 2455.51416015625,
            ),
            71 => 
            array (
                'id' => 1572,
                'name' => 'Charkop',
                'city_id' => '4',
                'lat' => 19.2100454,
                'long' => 72.8183494,
                'radius' => 1787.0361328125,
            ),
            72 => 
            array (
                'id' => 1573,
                'name' => 'Charni Road',
                'city_id' => '4',
                'lat' => 18.9519381,
                'long' => 72.8179061,
                'radius' => 206.4624786376953,
            ),
            73 => 
            array (
                'id' => 1574,
                'name' => 'Charni Road East',
                'city_id' => '4',
                'lat' => 18.9556358,
                'long' => 72.823388,
                'radius' => 2052.09228515625,
            ),
            74 => 
            array (
                'id' => 1575,
                'name' => 'Chembur Camp',
                'city_id' => '4',
                'lat' => 19.0455684,
                'long' => 72.8962753,
                'radius' => 206.40765380859375,
            ),
            75 => 
            array (
                'id' => 1576,
                'name' => 'Chembur Colony',
                'city_id' => '4',
                'lat' => 19.0443465,
                'long' => 72.8951151,
                'radius' => 456.41046142578125,
            ),
            76 => 
            array (
                'id' => 1577,
                'name' => 'Chembur East',
                'city_id' => '4',
                'lat' => 19.0327996,
                'long' => 72.89635679999999,
                'radius' => 5372.3935546875,
            ),
            77 => 
            array (
                'id' => 1578,
                'name' => 'Chembur West',
                'city_id' => '4',
                'lat' => 19.0327996,
                'long' => 72.89635679999999,
                'radius' => 5372.3935546875,
            ),
            78 => 
            array (
                'id' => 1579,
                'name' => 'Chinch Bandar',
                'city_id' => '4',
                'lat' => 18.9506004,
                'long' => 72.83825470000001,
                'radius' => 486.5293273925781,
            ),
            79 => 
            array (
                'id' => 1580,
                'name' => 'Chinch Bunder',
                'city_id' => '4',
                'lat' => 18.9557077,
                'long' => 72.837829,
                'radius' => 321.89984130859375,
            ),
            80 => 
            array (
                'id' => 1581,
                'name' => 'Chinchpokli',
                'city_id' => '4',
                'lat' => 18.9854394,
                'long' => 72.83456199999999,
                'radius' => 937.072021484375,
            ),
            81 => 
            array (
                'id' => 1582,
                'name' => 'Chinchpokli East',
                'city_id' => '4',
                'lat' => 18.9854394,
                'long' => 72.83456199999999,
                'radius' => 937.072021484375,
            ),
            82 => 
            array (
                'id' => 1583,
                'name' => 'Chinchpokli West',
                'city_id' => '4',
                'lat' => 18.9854394,
                'long' => 72.83456199999999,
                'radius' => 937.072021484375,
            ),
            83 => 
            array (
                'id' => 1584,
                'name' => 'Chira Bazaar',
                'city_id' => '4',
                'lat' => 18.9480852,
                'long' => 72.8275237,
                'radius' => 499.98309326171875,
            ),
            84 => 
            array (
                'id' => 1585,
                'name' => 'Chowpatti',
                'city_id' => '4',
                'lat' => 18.9547494,
                'long' => 72.81388179999999,
                'radius' => 726.4716796875,
            ),
            85 => 
            array (
                'id' => 1586,
                'name' => 'Chuna Bhatti',
                'city_id' => '4',
                'lat' => 19.0516931,
                'long' => 72.8691602,
                'radius' => 1576.4722900390625,
            ),
            86 => 
            array (
                'id' => 1587,
                'name' => 'Churchgate',
                'city_id' => '4',
                'lat' => 18.9322453,
                'long' => 72.8264378,
                'radius' => 1443.166748046875,
            ),
            87 => 
            array (
                'id' => 1588,
                'name' => 'Colaba Causeway',
                'city_id' => '4',
                'lat' => 18.9153001,
                'long' => 72.8255018,
                'radius' => 1645.7557373046875,
            ),
            88 => 
            array (
                'id' => 1589,
                'name' => 'Cotton Green',
                'city_id' => '4',
                'lat' => 18.9921457,
                'long' => 72.846563,
                'radius' => 111.1564712524414,
            ),
            89 => 
            array (
                'id' => 1590,
                'name' => 'Cotton Green West',
                'city_id' => '4',
                'lat' => 18.9921457,
                'long' => 72.846563,
                'radius' => 111.1564712524414,
            ),
            90 => 
            array (
                'id' => 1591,
                'name' => 'Crawford Market',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'name' => 'Cuffe Parade',
                'city_id' => '4',
                'lat' => 18.9126831,
                'long' => 72.8212934,
                'radius' => 958.9713134765625,
            ),
            92 => 
            array (
                'id' => 1593,
                'name' => 'Cumbala Hill',
                'city_id' => '4',
                'lat' => 18.9703118,
                'long' => 72.8061337,
                'radius' => 1341.9248046875,
            ),
            93 => 
            array (
                'id' => 1594,
                'name' => 'Currey Road',
                'city_id' => '4',
                'lat' => 18.9950828,
                'long' => 72.8333842,
                'radius' => 225.7168426513672,
            ),
            94 => 
            array (
                'id' => 1595,
                'name' => 'Dadabhai Naoroji Road',
                'city_id' => '4',
                'lat' => 18.9325,
                'long' => 72.8317,
                'radius' => 206.4738311767578,
            ),
            95 => 
            array (
                'id' => 1596,
                'name' => 'Dadar East',
                'city_id' => '4',
                'lat' => 19.0099129,
                'long' => 72.8426858,
                'radius' => 1996.760986328125,
            ),
            96 => 
            array (
                'id' => 1597,
                'name' => 'Dadar T T',
                'city_id' => '4',
                'lat' => 19.0099129,
                'long' => 72.8426858,
                'radius' => 1996.760986328125,
            ),
            97 => 
            array (
                'id' => 1598,
                'name' => 'Dadar West',
                'city_id' => '4',
                'lat' => 19.0235976,
                'long' => 72.8378125,
                'radius' => 1937.4283447265625,
            ),
            98 => 
            array (
                'id' => 1599,
                'name' => 'Dahisar',
                'city_id' => '4',
                'lat' => 19.4945979,
                'long' => 72.86040969999999,
                'radius' => 1906.046142578125,
            ),
            99 => 
            array (
                'id' => 1600,
                'name' => 'Dahisar East',
                'city_id' => '4',
                'lat' => 19.2539332,
                'long' => 72.8672448,
                'radius' => 1905.4815673828125,
            ),
            100 => 
            array (
                'id' => 1601,
                'name' => 'Dahisar West',
                'city_id' => '4',
                'lat' => 19.4945979,
                'long' => 72.86040969999999,
                'radius' => 1906.046142578125,
            ),
            101 => 
            array (
                'id' => 1602,
                'name' => 'Dana Bunder',
                'city_id' => '4',
                'lat' => 18.9532314,
                'long' => 72.8352917,
                'radius' => 228.0538330078125,
            ),
            102 => 
            array (
                'id' => 1603,
                'name' => 'Delisle Road',
                'city_id' => '4',
                'lat' => 18.9840735,
                'long' => 72.8318213,
                'radius' => 1237.67626953125,
            ),
            103 => 
            array (
                'id' => 1604,
                'name' => 'Deonar',
                'city_id' => '4',
                'lat' => 19.0447048,
                'long' => 72.9102511,
                'radius' => 209.6245574951172,
            ),
            104 => 
            array (
                'id' => 1605,
                'name' => 'Deonar East',
                'city_id' => '4',
                'lat' => 19.0447048,
                'long' => 72.9102511,
                'radius' => 209.6245574951172,
            ),
            105 => 
            array (
                'id' => 1606,
                'name' => 'Dharavi',
                'city_id' => '4',
                'lat' => 19.0402084,
                'long' => 72.8508504,
                'radius' => 2894.332275390625,
            ),
            106 => 
            array (
                'id' => 1607,
                'name' => 'Dhobhi Talao',
                'city_id' => '4',
                'lat' => 18.943647,
                'long' => 72.8330849,
                'radius' => 805.2798461914062,
            ),
            107 => 
            array (
                'id' => 1608,
                'name' => 'Dhobi Talao',
                'city_id' => '4',
                'lat' => 18.943647,
                'long' => 72.8330849,
                'radius' => 805.2798461914062,
            ),
            108 => 
            array (
                'id' => 1609,
                'name' => 'Dockyard',
                'city_id' => '4',
                'lat' => 18.9702823,
                'long' => 72.8448488,
                'radius' => 2051.913818359375,
            ),
            109 => 
            array (
                'id' => 1610,
                'name' => 'Dombivali',
                'city_id' => '4',
                'lat' => 19.2094006,
                'long' => 73.0939483,
                'radius' => 5362.12646484375,
            ),
            110 => 
            array (
                'id' => 1611,
                'name' => 'Dombivali East',
                'city_id' => '4',
                'lat' => 19.2057161,
                'long' => 73.0955302,
                'radius' => 4918.43896484375,
            ),
            111 => 
            array (
                'id' => 1612,
                'name' => 'Dombivali West',
                'city_id' => '4',
                'lat' => 19.2157613,
                'long' => 73.0729934,
                'radius' => 3086.683349609375,
            ),
            112 => 
            array (
                'id' => 1613,
                'name' => 'Dongri',
                'city_id' => '4',
                'lat' => 19.292194,
                'long' => 72.7895065,
                'radius' => 3172.8212890625,
            ),
            113 => 
            array (
                'id' => 1614,
                'name' => 'Elphinstone Road',
                'city_id' => '4',
                'lat' => 19.0077897,
                'long' => 72.83395759999999,
                'radius' => 174.77020263671875,
            ),
            114 => 
            array (
                'id' => 1615,
                'name' => 'Flora Fountain',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'name' => 'Fort',
                'city_id' => '4',
                'lat' => 18.9352599,
                'long' => 72.8371511,
                'radius' => 1927.1669921875,
            ),
            116 => 
            array (
                'id' => 1617,
                'name' => 'Gamdevi',
                'city_id' => '4',
                'lat' => 18.9589174,
                'long' => 72.8124046,
                'radius' => 491.2696533203125,
            ),
            117 => 
            array (
                'id' => 1618,
                'name' => 'Ghansoli',
                'city_id' => '4',
                'lat' => 19.1253629,
                'long' => 72.99920130000001,
                'radius' => 3000.190185546875,
            ),
            118 => 
            array (
                'id' => 1619,
                'name' => 'Ghatkopar',
                'city_id' => '4',
                'lat' => 19.0790239,
                'long' => 72.9080122,
                'radius' => 2050.57177734375,
            ),
            119 => 
            array (
                'id' => 1620,
                'name' => 'Ghatkopar East',
                'city_id' => '4',
                'lat' => 19.0796375,
                'long' => 72.90701159999999,
                'radius' => 2068.896484375,
            ),
            120 => 
            array (
                'id' => 1621,
                'name' => 'Ghatkopar West',
                'city_id' => '4',
                'lat' => 19.0908063,
                'long' => 72.9076669,
                'radius' => 2575.3125,
            ),
            121 => 
            array (
                'id' => 1622,
                'name' => 'Ghodbandar Road',
                'city_id' => '4',
                'lat' => 19.280105,
                'long' => 72.9302656,
                'radius' => 8670.8603515625,
            ),
            122 => 
            array (
                'id' => 1623,
                'name' => 'Girgaon',
                'city_id' => '4',
                'lat' => 18.9572287,
                'long' => 72.8196689,
                'radius' => 1582.5771484375,
            ),
            123 => 
            array (
                'id' => 1624,
                'name' => 'Girgaon Chowpatty',
                'city_id' => '4',
                'lat' => 18.9547494,
                'long' => 72.81388179999999,
                'radius' => 726.4716796875,
            ),
            124 => 
            array (
                'id' => 1625,
                'name' => 'Girgaum',
                'city_id' => '4',
                'lat' => 18.9572287,
                'long' => 72.8196689,
                'radius' => 1582.5771484375,
            ),
            125 => 
            array (
                'id' => 1626,
                'name' => 'Goregaon East',
                'city_id' => '4',
                'lat' => 19.1551485,
                'long' => 72.8678551,
                'radius' => 4872.37548828125,
            ),
            126 => 
            array (
                'id' => 1627,
                'name' => 'Goregaon West',
                'city_id' => '4',
                'lat' => 19.1551485,
                'long' => 72.8678551,
                'radius' => 4872.37548828125,
            ),
            127 => 
            array (
                'id' => 1628,
                'name' => 'Govandi',
                'city_id' => '4',
                'lat' => 19.0535444,
                'long' => 72.9239095,
                'radius' => 1653.1102294921875,
            ),
            128 => 
            array (
                'id' => 1629,
                'name' => 'Govandi East',
                'city_id' => '4',
                'lat' => 19.0535444,
                'long' => 72.9239095,
                'radius' => 1653.1102294921875,
            ),
            129 => 
            array (
                'id' => 1630,
                'name' => 'Govandi West',
                'city_id' => '4',
                'lat' => 19.0535444,
                'long' => 72.9239095,
                'radius' => 1653.1102294921875,
            ),
            130 => 
            array (
                'id' => 1631,
                'name' => 'Gowalia Tank',
                'city_id' => '4',
                'lat' => 18.9659577,
                'long' => 72.8109274,
                'radius' => 406.8484191894531,
            ),
            131 => 
            array (
                'id' => 1632,
                'name' => 'Grant Road',
                'city_id' => '4',
                'lat' => 18.9629992,
                'long' => 72.8175748,
                'radius' => 1041.5216064453125,
            ),
            132 => 
            array (
                'id' => 1633,
                'name' => 'Grant Road East',
                'city_id' => '4',
                'lat' => 18.9623513,
                'long' => 72.8183134,
                'radius' => 700.2924194335938,
            ),
            133 => 
            array (
                'id' => 1634,
                'name' => 'Grant Road West',
                'city_id' => '4',
                'lat' => 18.9629992,
                'long' => 72.8175748,
                'radius' => 1041.5216064453125,
            ),
            134 => 
            array (
                'id' => 1635,
                'name' => 'Green Park Extension',
                'city_id' => '4',
                'lat' => 28.5597033,
                'long' => 77.203868,
                'radius' => 900.4684448242188,
            ),
            135 => 
            array (
                'id' => 1636,
                'name' => 'Gulalwadi',
                'city_id' => '4',
                'lat' => 18.9557582,
                'long' => 72.8282842,
                'radius' => 367.23114013671875,
            ),
            136 => 
            array (
                'id' => 1637,
                'name' => 'Haji Ali',
                'city_id' => '4',
                'lat' => 18.982747,
                'long' => 72.8089648,
                'radius' => 206.44447326660156,
            ),
            137 => 
            array (
                'id' => 1638,
                'name' => 'Horiman Circle',
                'city_id' => '4',
                'lat' => 18.9319108,
                'long' => 72.8355447,
                'radius' => 206.47418212890625,
            ),
            138 => 
            array (
                'id' => 1639,
                'name' => 'Hughes Road',
                'city_id' => '4',
                'lat' => 18.9593055,
                'long' => 72.8098783,
                'radius' => 628.1229248046875,
            ),
            139 => 
            array (
                'id' => 1640,
                'name' => 'Hutatma Chowk',
                'city_id' => '4',
                'lat' => 18.9326704,
                'long' => 72.8315985,
                'radius' => 2052.377685546875,
            ),
            140 => 
            array (
                'id' => 1641,
                'name' => 'J B Nagar',
                'city_id' => '4',
                'lat' => 19.1110621,
                'long' => 72.8655922,
                'radius' => 1254.449951171875,
            ),
            141 => 
            array (
                'id' => 1642,
                'name' => 'Jacob Circle',
                'city_id' => '4',
                'lat' => 18.9821456,
                'long' => 72.83013059999999,
                'radius' => 698.4154052734375,
            ),
            142 => 
            array (
                'id' => 1643,
                'name' => 'Jogeshwari',
                'city_id' => '4',
                'lat' => 19.1405116,
                'long' => 72.8421555,
                'radius' => 1897.9620361328125,
            ),
            143 => 
            array (
                'id' => 1644,
                'name' => 'Jogeshwari East',
                'city_id' => '4',
                'lat' => 19.1405116,
                'long' => 72.8421555,
                'radius' => 1897.9620361328125,
            ),
            144 => 
            array (
                'id' => 1645,
                'name' => 'Jogeshwari West',
                'city_id' => '4',
                'lat' => 19.1405116,
                'long' => 72.8421555,
                'radius' => 1897.9620361328125,
            ),
            145 => 
            array (
                'id' => 1646,
                'name' => 'Juhu Scheme',
                'city_id' => '4',
                'lat' => 19.110608,
                'long' => 72.83255299999999,
                'radius' => 1071.90283203125,
            ),
            146 => 
            array (
                'id' => 1647,
                'name' => 'Juhu Tara Road',
                'city_id' => '4',
                'lat' => 19.0858276,
                'long' => 72.8288604,
                'radius' => 253.51609802246094,
            ),
            147 => 
            array (
                'id' => 1648,
                'name' => 'Kalachowki',
                'city_id' => '4',
                'lat' => 19.0097727,
                'long' => 72.90176029999999,
                'radius' => 1649.6036376953125,
            ),
            148 => 
            array (
                'id' => 1649,
                'name' => 'Kala Ghoda',
                'city_id' => '4',
                'lat' => 18.9307214,
                'long' => 72.8330849,
                'radius' => 660.8944091796875,
            ),
            149 => 
            array (
                'id' => 1650,
                'name' => 'Kalamboli',
                'city_id' => '4',
                'lat' => 19.032803,
                'long' => 73.10121529999999,
                'radius' => 2685.4736328125,
            ),
            150 => 
            array (
                'id' => 1651,
                'name' => 'Kalbadevi',
                'city_id' => '4',
                'lat' => 18.9487379,
                'long' => 72.8288826,
                'radius' => 1075.4493408203125,
            ),
            151 => 
            array (
                'id' => 1652,
                'name' => 'Kalina',
                'city_id' => '4',
                'lat' => 19.076277,
                'long' => 72.8653997,
                'radius' => 2098.8984375,
            ),
            152 => 
            array (
                'id' => 1653,
                'name' => 'Kalwa',
                'city_id' => '4',
                'lat' => 19.1943854,
                'long' => 72.99920130000001,
                'radius' => 4446.04443359375,
            ),
            153 => 
            array (
                'id' => 1654,
                'name' => 'Kalwa West',
                'city_id' => '4',
                'lat' => 19.1954365,
                'long' => 72.99156889999999,
                'radius' => 1463.66015625,
            ),
            154 => 
            array (
                'id' => 1655,
                'name' => 'Kalyan',
                'city_id' => '4',
                'lat' => 19.2403305,
                'long' => 73.1305395,
                'radius' => 5536.306640625,
            ),
            155 => 
            array (
                'id' => 1656,
                'name' => 'Kalyan East',
                'city_id' => '4',
                'lat' => 19.2262884,
                'long' => 73.1399252,
                'radius' => 206.3011474609375,
            ),
            156 => 
            array (
                'id' => 1657,
                'name' => 'Kalyan West',
                'city_id' => '4',
                'lat' => 19.2379839,
                'long' => 73.125625,
                'radius' => 206.2942352294922,
            ),
            157 => 
            array (
                'id' => 1658,
                'name' => 'Kamothe',
                'city_id' => '4',
                'lat' => 19.0166223,
                'long' => 73.0966019,
                'radius' => 1634.1507568359375,
            ),
            158 => 
            array (
                'id' => 1659,
                'name' => 'Kandivali',
                'city_id' => '4',
                'lat' => 19.1998211,
                'long' => 72.84259399999999,
                'radius' => 4110.01806640625,
            ),
            159 => 
            array (
                'id' => 1660,
                'name' => 'Kanjur Marg East',
                'city_id' => '4',
                'lat' => 19.1316889,
                'long' => 72.9351934,
                'radius' => 1529.4132080078125,
            ),
            160 => 
            array (
                'id' => 1661,
                'name' => 'Kanjur Marg West',
                'city_id' => '4',
                'lat' => 19.1326909,
                'long' => 72.9254251,
                'radius' => 1564.425537109375,
            ),
            161 => 
            array (
                'id' => 1662,
                'name' => 'Kanjurmarg',
                'city_id' => '4',
                'lat' => 19.1316889,
                'long' => 72.9351934,
                'radius' => 1529.4132080078125,
            ),
            162 => 
            array (
                'id' => 1663,
                'name' => 'Kanjurmarg East',
                'city_id' => '4',
                'lat' => 19.1316889,
                'long' => 72.9351934,
                'radius' => 1529.4132080078125,
            ),
            163 => 
            array (
                'id' => 1664,
                'name' => 'Kanjurmarg West',
                'city_id' => '4',
                'lat' => 19.1326909,
                'long' => 72.9254251,
                'radius' => 1564.425537109375,
            ),
            164 => 
            array (
                'id' => 1665,
                'name' => 'Kazi Sayed Street',
                'city_id' => '4',
                'lat' => 18.9512564,
                'long' => 72.8369815,
                'radius' => 287.5845947265625,
            ),
            165 => 
            array (
                'id' => 1666,
                'name' => 'Kemps Corner',
                'city_id' => '4',
                'lat' => 18.9629177,
                'long' => 72.8053877,
                'radius' => 454.3137512207031,
            ),
            166 => 
            array (
                'id' => 1667,
                'name' => 'Khar',
                'city_id' => '4',
                'lat' => 19.0716903,
                'long' => 72.8341267,
                'radius' => 1631.8349609375,
            ),
            167 => 
            array (
                'id' => 1668,
                'name' => 'Khar Danda',
                'city_id' => '4',
                'lat' => 19.0787581,
                'long' => 72.8264378,
                'radius' => 1020.580322265625,
            ),
            168 => 
            array (
                'id' => 1669,
                'name' => 'Khar West',
                'city_id' => '4',
                'lat' => 19.0716903,
                'long' => 72.8341267,
                'radius' => 1631.8349609375,
            ),
            169 => 
            array (
                'id' => 1670,
                'name' => 'Kharghar Sector 12',
                'city_id' => '4',
                'lat' => 19.0439138,
                'long' => 73.0656152,
                'radius' => 851.7372436523438,
            ),
            170 => 
            array (
                'id' => 1671,
                'name' => 'Kharghar Sector 2',
                'city_id' => '4',
                'lat' => 19.0301846,
                'long' => 73.0648774,
                'radius' => 1104.877685546875,
            ),
            171 => 
            array (
                'id' => 1672,
                'name' => 'Kharghar Sector 7',
                'city_id' => '4',
                'lat' => 19.0346367,
                'long' => 73.06635299999999,
                'radius' => 574.3333129882812,
            ),
            172 => 
            array (
                'id' => 1673,
                'name' => 'Khetwadi',
                'city_id' => '4',
                'lat' => 18.9581018,
                'long' => 72.82331479999999,
                'radius' => 522.3190307617188,
            ),
            173 => 
            array (
                'id' => 1674,
                'name' => 'Khopoli',
                'city_id' => '4',
                'lat' => 18.792494,
                'long' => 73.35408699999999,
                'radius' => 206.55528259277344,
            ),
            174 => 
            array (
                'id' => 1675,
                'name' => 'Kings Circle',
                'city_id' => '4',
                'lat' => 19.0264175,
                'long' => 72.85575310000002,
                'radius' => 119.38765716552734,
            ),
            175 => 
            array (
                'id' => 1676,
                'name' => 'Kopar Khairane',
                'city_id' => '4',
                'lat' => 19.102769,
                'long' => 73.0090013,
                'radius' => 2221.869140625,
            ),
            176 => 
            array (
                'id' => 1677,
                'name' => 'Koper Khraine',
                'city_id' => '4',
                'lat' => 19.102769,
                'long' => 73.0090013,
                'radius' => 2221.869140625,
            ),
            177 => 
            array (
                'id' => 1678,
                'name' => 'Andheri Kurla Road',
                'city_id' => '4',
                'lat' => 19.1108788,
                'long' => 72.8715356,
                'radius' => 4191.7919921875,
            ),
            178 => 
            array (
                'id' => 1679,
                'name' => 'Kurla East',
                'city_id' => '4',
                'lat' => 19.0599836,
                'long' => 72.889999,
                'radius' => 3350.60498046875,
            ),
            179 => 
            array (
                'id' => 1680,
                'name' => 'Kurla West',
                'city_id' => '4',
                'lat' => 19.0707532,
                'long' => 72.8781322,
                'radius' => 2562.49951171875,
            ),
            180 => 
            array (
                'id' => 1681,
                'name' => 'Lal Bahadur Shastri Marg',
                'city_id' => '4',
                'lat' => 19.080149,
                'long' => 72.886245,
                'radius' => 117.59114837646484,
            ),
            181 => 
            array (
                'id' => 1682,
                'name' => 'Lal Baug',
                'city_id' => '4',
                'lat' => 18.9908177,
                'long' => 72.83825470000001,
                'radius' => 838.0031127929688,
            ),
            182 => 
            array (
                'id' => 1683,
                'name' => 'Lalbaug',
                'city_id' => '4',
                'lat' => 19.0497075,
                'long' => 72.875917,
                'radius' => 403.5843811035156,
            ),
            183 => 
            array (
                'id' => 1684,
                'name' => 'Lamington Road',
                'city_id' => '4',
                'lat' => 18.9625285,
                'long' => 72.8177888,
                'radius' => 773.6469116210938,
            ),
            184 => 
            array (
                'id' => 1685,
                'name' => 'LBS Marg',
                'city_id' => '4',
                'lat' => 19.1057011,
                'long' => 72.9222648,
                'radius' => 9299.27734375,
            ),
            185 => 
            array (
                'id' => 1686,
                'name' => 'Link Road',
                'city_id' => '4',
                'lat' => 19.1903355,
                'long' => 72.8353052,
                'radius' => 8638.99609375,
            ),
            186 => 
            array (
                'id' => 1687,
                'name' => 'Lohar Chawl',
                'city_id' => '4',
                'lat' => 18.9467032,
                'long' => 72.8312385,
                'radius' => 554.1741943359375,
            ),
            187 => 
            array (
                'id' => 1688,
                'name' => 'Lokhandwala',
                'city_id' => '4',
                'lat' => 19.1435906,
                'long' => 72.8246291,
                'radius' => 726.6116333007812,
            ),
            188 => 
            array (
                'id' => 1689,
                'name' => 'Parel',
                'city_id' => '4',
                'lat' => 19.0021567,
                'long' => 72.84157929999999,
                'radius' => 2182.777099609375,
            ),
            189 => 
            array (
                'id' => 1690,
                'name' => 'Lower Parel East',
                'city_id' => '4',
                'lat' => 18.9937893,
                'long' => 72.83203440000001,
                'radius' => 2051.62353515625,
            ),
            190 => 
            array (
                'id' => 1691,
                'name' => 'Lower Parel West',
                'city_id' => '4',
                'lat' => 19.000258,
                'long' => 72.8238143,
                'radius' => 753.4695434570312,
            ),
            191 => 
            array (
                'id' => 1692,
                'name' => 'M G Road',
                'city_id' => '4',
                'lat' => 19.205461,
                'long' => 72.83881029999999,
                'radius' => 1172.2257080078125,
            ),
            192 => 
            array (
                'id' => 1693,
                'name' => 'Mahakali Caves Road',
                'city_id' => '4',
                'lat' => 19.125333,
                'long' => 72.8665041,
                'radius' => 1362.8692626953125,
            ),
            193 => 
            array (
                'id' => 1694,
                'name' => 'Mahalaxmi',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'name' => 'Mahalaxmi West',
                'city_id' => '4',
                'lat' => 18.9767719,
                'long' => 72.80760360000001,
                'radius' => 249.3297576904297,
            ),
            195 => 
            array (
                'id' => 1696,
                'name' => 'Mahape',
                'city_id' => '4',
                'lat' => 19.1182937,
                'long' => 73.0275875,
                'radius' => 4491.2080078125,
            ),
            196 => 
            array (
                'id' => 1697,
                'name' => 'Mahim',
                'city_id' => '4',
                'lat' => 19.0351534,
                'long' => 72.8404432,
                'radius' => 1804.486328125,
            ),
            197 => 
            array (
                'id' => 1698,
                'name' => 'Mahim East',
                'city_id' => '4',
                'lat' => 19.0386825,
                'long' => 72.8490338,
                'radius' => 339.1839294433594,
            ),
            198 => 
            array (
                'id' => 1699,
                'name' => 'Mahim West',
                'city_id' => '4',
                'lat' => 19.032012,
                'long' => 72.8401043,
                'radius' => 1870.4705810546875,
            ),
            199 => 
            array (
                'id' => 1700,
                'name' => 'Malabar Hill',
                'city_id' => '4',
                'lat' => 18.9542739,
                'long' => 72.8013252,
                'radius' => 1984.545654296875,
            ),
            200 => 
            array (
                'id' => 1701,
                'name' => 'Aarey Milk Colony',
                'city_id' => '4',
                'lat' => 19.1509655,
                'long' => 72.8831294,
                'radius' => 3347.937744140625,
            ),
            201 => 
            array (
                'id' => 1702,
                'name' => 'Airport',
                'city_id' => '4',
                'lat' => 19.0895595,
                'long' => 72.8656144,
                'radius' => 206.38182067871094,
            ),
            202 => 
            array (
                'id' => 1703,
                'name' => 'Ambewadi',
                'city_id' => '4',
                'lat' => 18.9556274,
                'long' => 72.8217148,
                'radius' => 452.4079895019531,
            ),
            203 => 
            array (
                'id' => 1704,
                'name' => 'Andheri',
                'city_id' => '4',
                'lat' => 19.113645,
                'long' => 72.8697339,
                'radius' => 2050.143310546875,
            ),
            204 => 
            array (
                'id' => 1705,
                'name' => 'Asvini',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'name' => 'Azad Nagar',
                'city_id' => '4',
                'lat' => 19.1292452,
                'long' => 72.836039,
                'radius' => 614.13916015625,
            ),
            206 => 
            array (
                'id' => 1707,
                'name' => 'BPT Colony',
                'city_id' => '4',
                'lat' => 19.0125259,
                'long' => 72.8626251,
                'radius' => 862.322998046875,
            ),
            207 => 
            array (
                'id' => 1708,
                'name' => 'BN Bhavan',
                'city_id' => '4',
                'lat' => 18.9563727,
                'long' => 72.8097154,
                'radius' => 206.45989990234375,
            ),
            208 => 
            array (
                'id' => 1709,
                'name' => 'Bandra',
                'city_id' => '4',
                'lat' => 19.0606917,
                'long' => 72.8362497,
                'radius' => 2962.255859375,
            ),
            209 => 
            array (
                'id' => 1710,
                'name' => 'Bazargate',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'name' => 'Bharat Nagar',
                'city_id' => '4',
                'lat' => 18.9637874,
                'long' => 72.8183134,
                'radius' => 622.7351684570312,
            ),
            211 => 
            array (
                'id' => 1712,
                'name' => 'Bhavani Shankar Road',
                'city_id' => '4',
                'lat' => 19.0157557,
                'long' => 72.8373081,
                'radius' => 510.3634948730469,
            ),
            212 => 
            array (
                'id' => 1713,
                'name' => 'CGS Colony',
                'city_id' => '4',
                'lat' => 19.0304677,
                'long' => 72.8700096,
                'radius' => 368.450927734375,
            ),
            213 => 
            array (
                'id' => 1714,
                'name' => 'Air India Staff Colony',
                'city_id' => '4',
                'lat' => 19.0815887,
                'long' => 72.867425,
                'radius' => 332.6800231933594,
            ),
            214 => 
            array (
                'id' => 1715,
                'name' => 'Century Mills Worli',
                'city_id' => '4',
                'lat' => 19.0064016,
                'long' => 72.8246486,
                'radius' => 206.4306182861328,
            ),
            215 => 
            array (
                'id' => 1716,
                'name' => 'Chamar Baug',
                'city_id' => '4',
                'lat' => 19.0020917,
                'long' => 72.8396838,
                'radius' => 122.79166412353516,
            ),
            216 => 
            array (
                'id' => 1717,
                'name' => 'Colaba',
                'city_id' => '4',
                'lat' => 18.9067031,
                'long' => 72.8147123,
                'radius' => 3053.662841796875,
            ),
            217 => 
            array (
                'id' => 1718,
                'name' => 'Cotton Exchange',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'name' => 'Dadar Colony',
                'city_id' => '4',
                'lat' => 19.0189128,
                'long' => 72.85293039999999,
                'radius' => 183.63473510742188,
            ),
            219 => 
            array (
                'id' => 1720,
                'name' => 'Dadar',
                'city_id' => '4',
                'lat' => 19.021324,
                'long' => 72.84241779999999,
                'radius' => 1879.1456298828125,
            ),
            220 => 
            array (
                'id' => 1721,
                'name' => 'Danda',
                'city_id' => '4',
                'lat' => 19.0747015,
                'long' => 72.82533,
                'radius' => 313.6268310546875,
            ),
            221 => 
            array (
                'id' => 1722,
                'name' => 'Dockyard Road',
                'city_id' => '4',
                'lat' => 18.9675962,
                'long' => 72.844814,
                'radius' => 347.677978515625,
            ),
            222 => 
            array (
                'id' => 1723,
                'name' => 'Dr Deshmukh Marg',
                'city_id' => '4',
                'lat' => 18.9720944,
                'long' => 72.80920119999999,
                'radius' => 24.325593948364258,
            ),
            223 => 
            array (
                'id' => 1724,
                'name' => 'Falkland Road',
                'city_id' => '4',
                'lat' => 18.9618019,
                'long' => 72.8230335,
                'radius' => 792.695556640625,
            ),
            224 => 
            array (
                'id' => 1725,
                'name' => 'Girgaon Mdg',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'name' => 'Gokhale Road',
                'city_id' => '4',
                'lat' => 19.0172967,
                'long' => 72.8353831,
                'radius' => 1021.7410278320312,
            ),
            226 => 
            array (
                'id' => 1727,
                'name' => 'Goregoan',
                'city_id' => '4',
                'lat' => 19.1551485,
                'long' => 72.8678551,
                'radius' => 4872.37548828125,
            ),
            227 => 
            array (
                'id' => 1728,
                'name' => 'Government Colony',
                'city_id' => '4',
                'lat' => 19.0605737,
                'long' => 72.8504402,
                'radius' => 265.8475341796875,
            ),
            228 => 
            array (
                'id' => 1729,
                'name' => 'HMP School',
                'city_id' => '4',
                'lat' => 19.122222,
                'long' => 72.833484,
                'radius' => 206.3625946044922,
            ),
            229 => 
            array (
                'id' => 1730,
                'name' => 'Haffkine Institute',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'name' => 'Haines Road',
                'city_id' => '4',
                'lat' => 13.0008049,
                'long' => 77.61283990000001,
                'radius' => 209.4308319091797,
            ),
            231 => 
            array (
                'id' => 1732,
                'name' => 'Hanuman Road',
                'city_id' => '4',
                'lat' => 19.1034179,
                'long' => 72.8494666,
                'radius' => 509.07763671875,
            ),
            232 => 
            array (
                'id' => 1733,
                'name' => 'High Court Building',
                'city_id' => '4',
                'lat' => 18.9311867,
                'long' => 72.8303797,
                'radius' => 102.6224594116211,
            ),
            233 => 
            array (
                'id' => 1734,
                'name' => 'Holiday Camp',
                'city_id' => '4',
                'lat' => 19.09681,
                'long' => 72.8542174,
                'radius' => 206.37754821777344,
            ),
            234 => 
            array (
                'id' => 1735,
                'name' => 'INS Hamla',
                'city_id' => '4',
                'lat' => 19.1902249,
                'long' => 72.7976319,
                'radius' => 916.1383666992188,
            ),
            235 => 
            array (
                'id' => 1736,
                'name' => 'Central Building',
                'city_id' => '4',
                'lat' => 18.9397248,
                'long' => 72.82722260000001,
                'radius' => 19.265607833862305,
            ),
            236 => 
            array (
                'id' => 1737,
                'name' => 'Parel Naka',
                'city_id' => '4',
                'lat' => 19.0057805,
                'long' => 72.8394946,
                'radius' => 206.4309844970703,
            ),
            237 => 
            array (
                'id' => 1738,
                'name' => 'Oshiwara',
                'city_id' => '4',
                'lat' => 19.1483497,
                'long' => 72.84047029999999,
                'radius' => 587.0582885742188,
            ),
            238 => 
            array (
                'id' => 1739,
                'name' => 'Opera House',
                'city_id' => '4',
                'lat' => 18.9537342,
                'long' => 72.8183134,
                'radius' => 637.1621704101562,
            ),
            239 => 
            array (
                'id' => 1740,
                'name' => 'New Yogakshema',
                'city_id' => '4',
                'lat' => 18.9296308,
                'long' => 72.82326359999999,
                'radius' => 206.4755096435547,
            ),
            240 => 
            array (
                'id' => 1741,
                'name' => 'New Prabhadevi Road',
                'city_id' => '4',
                'lat' => 19.0115497,
                'long' => 72.82887029999999,
                'radius' => 213.65892028808594,
            ),
            241 => 
            array (
                'id' => 1742,
                'name' => 'N S Patkar Marg',
                'city_id' => '4',
                'lat' => 18.9587976,
                'long' => 72.8099414,
                'radius' => 206.45848083496094,
            ),
            242 => 
            array (
                'id' => 1743,
                'name' => 'Mori Road',
                'city_id' => '4',
                'lat' => 19.0432238,
                'long' => 72.84264580000001,
                'radius' => 281.52105712890625,
            ),
            243 => 
            array (
                'id' => 1744,
                'name' => 'Mazgaon Road',
                'city_id' => '4',
                'lat' => 18.9655928,
                'long' => 72.8390706,
                'radius' => 377.8642578125,
            ),
            244 => 
            array (
                'id' => 1745,
                'name' => 'JJ Hospital',
                'city_id' => '4',
                'lat' => 18.9630684,
                'long' => 72.8336083,
                'radius' => 206.4559783935547,
            ),
            245 => 
            array (
                'id' => 1746,
                'name' => 'Juhu',
                'city_id' => '4',
                'lat' => 19.098821,
                'long' => 72.8320717,
                'radius' => 2441.495361328125,
            ),
            246 => 
            array (
                'id' => 1747,
                'name' => 'Kamathipura',
                'city_id' => '4',
                'lat' => 18.9648916,
                'long' => 72.8261411,
                'radius' => 971.3756713867188,
            ),
            247 => 
            array (
                'id' => 1748,
                'name' => 'Ketkipada',
                'city_id' => '4',
                'lat' => 19.2588973,
                'long' => 72.87665539999999,
                'radius' => 631.1792602539062,
            ),
            248 => 
            array (
                'id' => 1749,
                'name' => 'Kherwadi',
                'city_id' => '4',
                'lat' => 19.0586788,
                'long' => 72.84437679999999,
                'radius' => 729.6336059570312,
            ),
            249 => 
            array (
                'id' => 1750,
                'name' => 'Kidwai Nagar',
                'city_id' => '4',
                'lat' => 19.0097831,
                'long' => 72.8526557,
                'radius' => 453.6981506347656,
            ),
            250 => 
            array (
                'id' => 1751,
                'name' => 'Liberty Garden',
                'city_id' => '4',
                'lat' => 19.186,
                'long' => 72.8412535,
                'radius' => 359.9347839355469,
            ),
            251 => 
            array (
                'id' => 1752,
                'name' => 'Mazagon Dock',
                'city_id' => '4',
                'lat' => 18.9670056,
                'long' => 72.8479262,
                'radius' => 206.45367431640625,
            ),
            252 => 
            array (
                'id' => 1753,
                'name' => 'Naigaon',
                'city_id' => '4',
                'lat' => 19.0109822,
                'long' => 72.84637839999999,
                'radius' => 740.9967651367188,
            ),
            253 => 
            array (
                'id' => 1754,
                'name' => 'Mumbai Central',
                'city_id' => '4',
                'lat' => 18.971303,
                'long' => 72.819379,
                'radius' => 206.451171875,
            ),
            254 => 
            array (
                'id' => 1755,
                'name' => 'Orlem',
                'city_id' => '4',
                'lat' => 19.195491,
                'long' => 72.8375161,
                'radius' => 626.5609741210938,
            ),
            255 => 
            array (
                'id' => 1756,
                'name' => 'Nagardas Road',
                'city_id' => '4',
                'lat' => 19.1240163,
                'long' => 72.8498572,
                'radius' => 390.4541931152344,
            ),
            256 => 
            array (
                'id' => 1757,
                'name' => 'Madhavbaug',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'name' => 'Khar Delivery',
                'city_id' => '4',
                'lat' => 19.0710071,
                'long' => 72.8383107,
                'radius' => 206.39273071289062,
            ),
            258 => 
            array (
                'id' => 1759,
                'name' => 'MPT',
                'city_id' => '4',
                'lat' => 18.9956545,
                'long' => 72.8589327,
                'radius' => 785.6754150390625,
            ),
            259 => 
            array (
                'id' => 1760,
                'name' => 'M A Marg',
                'city_id' => '4',
                'lat' => 19.0285494,
                'long' => 72.85588059999999,
                'radius' => 112.82320404052734,
            ),
            260 => 
            array (
                'id' => 1761,
                'name' => 'Magathane',
                'city_id' => '4',
                'lat' => 19.2202063,
                'long' => 72.8666866,
                'radius' => 387.3173522949219,
            ),
            261 => 
            array (
                'id' => 1762,
                'name' => 'LBSNE College',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'name' => 'Mazagaon',
                'city_id' => '4',
                'lat' => 18.9718388,
                'long' => 72.8436024,
                'radius' => 2371.31103515625,
            ),
            263 => 
            array (
                'id' => 1764,
                'name' => 'Matunga Railway Workshop',
                'city_id' => '4',
                'lat' => 19.0274304,
                'long' => 72.850123,
                'radius' => 206.41830444335938,
            ),
            264 => 
            array (
                'id' => 1765,
                'name' => 'Motilal Nagar',
                'city_id' => '4',
                'lat' => 19.1574784,
                'long' => 72.83825470000001,
                'radius' => 597.876953125,
            ),
            265 => 
            array (
                'id' => 1766,
                'name' => 'Nariman Point',
                'city_id' => '4',
                'lat' => 18.9255728,
                'long' => 72.8242221,
                'radius' => 868.7313842773438,
            ),
            266 => 
            array (
                'id' => 1767,
                'name' => 'International Airport',
                'city_id' => '4',
                'lat' => 19.0926195,
                'long' => 72.86631729999999,
                'radius' => 2831.898681640625,
            ),
            267 => 
            array (
                'id' => 1768,
                'name' => 'Irla',
                'city_id' => '4',
                'lat' => 19.1083973,
                'long' => 72.8434243,
                'radius' => 463.0477294921875,
            ),
            268 => 
            array (
                'id' => 1769,
                'name' => 'Malad',
                'city_id' => '4',
                'lat' => 19.180237,
                'long' => 72.8554149,
                'radius' => 2049.3134765625,
            ),
            269 => 
            array (
                'id' => 1770,
                'name' => 'Mantralaya',
                'city_id' => '4',
                'lat' => 18.9290052,
                'long' => 72.83013059999999,
                'radius' => 481.42041015625,
            ),
            270 => 
            array (
                'id' => 1771,
                'name' => 'Marine Lines',
                'city_id' => '4',
                'lat' => 18.9430864,
                'long' => 72.8271764,
                'radius' => 1174.041015625,
            ),
            271 => 
            array (
                'id' => 1772,
                'name' => 'Marol Naka',
                'city_id' => '4',
                'lat' => 19.1079341,
                'long' => 72.87930879999999,
                'radius' => 206.37100219726562,
            ),
            272 => 
            array (
                'id' => 1773,
                'name' => 'Prabhadevi',
                'city_id' => '4',
                'lat' => 19.0158466,
                'long' => 72.82799729999999,
                'radius' => 988.6658935546875,
            ),
            273 => 
            array (
                'id' => 1774,
                'name' => 'Princess Dock',
                'city_id' => '4',
                'lat' => 18.957186,
                'long' => 72.8471169,
                'radius' => 670.5076293945312,
            ),
            274 => 
            array (
                'id' => 1775,
                'name' => 'Raj Bhavan',
                'city_id' => '4',
                'lat' => 18.9431956,
                'long' => 72.79430789999999,
                'radius' => 717.7970581054688,
            ),
            275 => 
            array (
                'id' => 1776,
                'name' => 'Rajendra Nagar',
                'city_id' => '4',
                'lat' => 19.2224441,
                'long' => 72.8600404,
                'radius' => 333.564208984375,
            ),
            276 => 
            array (
                'id' => 1777,
                'name' => 'Ramwadi',
                'city_id' => '4',
                'lat' => 18.9503129,
                'long' => 72.8274583,
                'radius' => 110.32608032226562,
            ),
            277 => 
            array (
                'id' => 1778,
                'name' => 'Ranade Road',
                'city_id' => '4',
                'lat' => 19.0213255,
                'long' => 72.8397884,
                'radius' => 457.2844543457031,
            ),
            278 => 
            array (
                'id' => 1779,
                'name' => 'Rani Sati Marg',
                'city_id' => '4',
                'lat' => 19.1799748,
                'long' => 72.85932509999999,
                'radius' => 1236.4300537109375,
            ),
            279 => 
            array (
                'id' => 1780,
                'name' => 'SRPF Camp',
                'city_id' => '4',
                'lat' => 19.1431831,
                'long' => 72.85782499999999,
                'radius' => 206.35025024414062,
            ),
            280 => 
            array (
                'id' => 1781,
                'name' => 'S Savarkar Marg',
                'city_id' => '4',
                'lat' => 19.0212717,
                'long' => 72.83330169999999,
                'radius' => 2505.599853515625,
            ),
            281 => 
            array (
                'id' => 1782,
                'name' => 'S.K. Nagar',
                'city_id' => '4',
                'lat' => 18.9585149,
                'long' => 72.8405992,
                'radius' => 206.45864868164062,
            ),
            282 => 
            array (
                'id' => 1783,
                'name' => 'Sahar PT Colony',
                'city_id' => '4',
                'lat' => 19.1086092,
                'long' => 72.8570451,
                'radius' => 1758.1270751953125,
            ),
            283 => 
            array (
                'id' => 1784,
                'name' => 'Sahargaon',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'name' => 'Santacruz Central',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'name' => 'Santacruz P AND T Colony',
                'city_id' => '4',
                'lat' => 19.0839424,
                'long' => 72.8581943,
                'radius' => 698.9826049804688,
            ),
            286 => 
            array (
                'id' => 1787,
                'name' => 'Santacruz',
                'city_id' => '4',
                'lat' => 19.0843377,
                'long' => 72.8359724,
                'radius' => 2050.508544921875,
            ),
            287 => 
            array (
                'id' => 1788,
                'name' => 'Secretariat',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'name' => 'SEEPZ',
                'city_id' => '4',
                'lat' => 19.1266574,
                'long' => 72.87665539999999,
                'radius' => 1143.4140625,
            ),
            289 => 
            array (
                'id' => 1790,
                'name' => 'Sewri',
                'city_id' => '4',
                'lat' => 18.9985832,
                'long' => 72.8547291,
                'radius' => 2924.936767578125,
            ),
            290 => 
            array (
                'id' => 1791,
                'name' => 'Sharma Estate',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'name' => 'Shroffmahajan',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'name' => 'Shroff Mahajan',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'name' => 'Stock Exchange',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'name' => 'Tajmahal',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'name' => 'Tajmahal Hotel',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'name' => 'Tank Road',
                'city_id' => '4',
                'lat' => 19.1469439,
                'long' => 72.933335,
                'radius' => 413.3158874511719,
            ),
            297 => 
            array (
                'id' => 1798,
                'name' => 'Tardeo',
                'city_id' => '4',
                'lat' => 18.9681499,
                'long' => 72.8122442,
                'radius' => 1491.2686767578125,
            ),
            298 => 
            array (
                'id' => 1799,
                'name' => 'Taj Mahal Hotel',
                'city_id' => '4',
                'lat' => 18.9225854,
                'long' => 72.83315429999999,
                'radius' => 206.4796142578125,
            ),
            299 => 
            array (
                'id' => 1800,
                'name' => 'Thakurdwar',
                'city_id' => '4',
                'lat' => 18.9498466,
                'long' => 72.8227449,
                'radius' => 439.63580322265625,
            ),
            300 => 
            array (
                'id' => 1801,
                'name' => 'Town Hall',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'name' => 'Tulsiwadi',
                'city_id' => '4',
                'lat' => 18.9747163,
                'long' => 72.8139964,
                'radius' => 847.7738647460938,
            ),
            302 => 
            array (
                'id' => 1803,
                'name' => 'VJB Udyan',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'name' => 'VK Bhavan',
                'city_id' => '4',
                'lat' => 18.9946403,
                'long' => 72.8277072,
                'radius' => 32.47441101074219,
            ),
            304 => 
            array (
                'id' => 1805,
                'name' => 'VP Road',
                'city_id' => '4',
                'lat' => 19.0957489,
                'long' => 72.8372886,
                'radius' => 812.2164916992188,
            ),
            305 => 
            array (
                'id' => 1806,
                'name' => 'VWTC',
                'city_id' => '4',
                'lat' => 19.1732508,
                'long' => 72.9563038,
                'radius' => 21.103897094726562,
            ),
            306 => 
            array (
                'id' => 1807,
                'name' => 'Vakola',
                'city_id' => '4',
                'lat' => 19.0788783,
                'long' => 72.85003069999999,
                'radius' => 1510.0589599609375,
            ),
            307 => 
            array (
                'id' => 1808,
                'name' => 'Vesava',
                'city_id' => '4',
                'lat' => 19.1350852,
                'long' => 72.8146101,
                'radius' => 2225.365966796875,
            ),
            308 => 
            array (
                'id' => 1809,
                'name' => 'Vidyanagari',
                'city_id' => '4',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'name' => 'Vileeparle',
                'city_id' => '4',
                'lat' => 19.1030524,
                'long' => 72.8466914,
                'radius' => 3912.3583984375,
            ),
            310 => 
            array (
                'id' => 1811,
                'name' => 'Vile Parle',
                'city_id' => '4',
                'lat' => 19.1030524,
                'long' => 72.8466914,
                'radius' => 3912.3583984375,
            ),
            311 => 
            array (
                'id' => 1812,
                'name' => 'Wadala',
                'city_id' => '4',
                'lat' => 19.0151285,
                'long' => 72.8580644,
                'radius' => 2117.431640625,
            ),
            312 => 
            array (
                'id' => 1813,
                'name' => 'Worli',
                'city_id' => '4',
                'lat' => 18.9872015,
                'long' => 72.8290456,
                'radius' => 4372.19482421875,
            ),
            313 => 
            array (
                'id' => 1814,
                'name' => 'Ambarnath West',
                'city_id' => '4',
                'lat' => 19.2105577,
                'long' => 73.1867381,
                'radius' => 197.53411865234375,
            ),
            314 => 
            array (
                'id' => 1815,
                'name' => 'Kharghar',
                'city_id' => '4',
                'lat' => 19.0473216,
                'long' => 73.0699046,
                'radius' => 6965.05712890625,
            ),
            315 => 
            array (
                'id' => 1816,
                'name' => 'Rajarhat',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'name' => 'Tollygunge',
                'city_id' => '3',
                'lat' => 22.4986357,
                'long' => 88.3453906,
                'radius' => 2625.50634765625,
            ),
            317 => 
            array (
                'id' => 1818,
                'name' => 'Baruipur',
                'city_id' => '3',
                'lat' => 22.3596751,
                'long' => 88.4317758,
                'radius' => 2788.228515625,
            ),
            318 => 
            array (
                'id' => 1819,
                'name' => 'Garia',
                'city_id' => '3',
                'lat' => 22.4629461,
                'long' => 88.3967536,
                'radius' => 3939.28857421875,
            ),
            319 => 
            array (
                'id' => 1820,
                'name' => 'Barasat',
                'city_id' => '3',
                'lat' => 22.7228159,
                'long' => 88.480552,
                'radius' => 4227.0888671875,
            ),
            320 => 
            array (
                'id' => 1821,
                'name' => 'Ballygunge',
                'city_id' => '3',
                'lat' => 22.5279046,
                'long' => 88.36248610000001,
                'radius' => 2044.52734375,
            ),
            321 => 
            array (
                'id' => 1822,
                'name' => 'Barrackpore',
                'city_id' => '3',
                'lat' => 22.7674278,
                'long' => 88.3883455,
                'radius' => 7206.078125,
            ),
            322 => 
            array (
                'id' => 1823,
                'name' => 'Baguiati',
                'city_id' => '3',
                'lat' => 22.6167843,
                'long' => 88.4274592,
                'radius' => 1972.4560546875,
            ),
            323 => 
            array (
                'id' => 1824,
                'name' => 'Alipore',
                'city_id' => '3',
                'lat' => 22.5248472,
                'long' => 88.3312187,
                'radius' => 3344.74609375,
            ),
            324 => 
            array (
                'id' => 1825,
                'name' => 'Santoshpur',
                'city_id' => '3',
                'lat' => 22.4896872,
                'long' => 88.38947689999999,
                'radius' => 2227.8876953125,
            ),
            325 => 
            array (
                'id' => 1826,
                'name' => 'Bansdroni',
                'city_id' => '3',
                'lat' => 22.4696493,
                'long' => 88.3631369,
                'radius' => 1413.80419921875,
            ),
            326 => 
            array (
                'id' => 1827,
                'name' => 'Narendrapur',
                'city_id' => '3',
                'lat' => 22.4391117,
                'long' => 88.3967536,
                'radius' => 4321.42724609375,
            ),
            327 => 
            array (
                'id' => 1828,
                'name' => 'Behala',
                'city_id' => '3',
                'lat' => 22.4981402,
                'long' => 88.3108378,
                'radius' => 3484.863037109375,
            ),
            328 => 
            array (
                'id' => 1829,
                'name' => 'Dakshineswar',
                'city_id' => '3',
                'lat' => 22.6574479,
                'long' => 88.36395929999999,
                'radius' => 1406.756591796875,
            ),
            329 => 
            array (
                'id' => 1830,
                'name' => 'Amtala',
                'city_id' => '3',
                'lat' => 22.6713053,
                'long' => 88.3929539,
                'radius' => 489.99615478515625,
            ),
            330 => 
            array (
                'id' => 1831,
                'name' => 'Kankurgachi',
                'city_id' => '3',
                'lat' => 22.5780247,
                'long' => 88.3902174,
                'radius' => 1858.0594482421875,
            ),
            331 => 
            array (
                'id' => 1832,
                'name' => '24 Parganas',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            332 => 
            array (
                'id' => 1833,
                'name' => '24 Parganas South',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            333 => 
            array (
                'id' => 1834,
                'name' => 'Acharya Jagadish Chandra Bose Ro',
                'city_id' => '3',
                'lat' => 22.5503988,
                'long' => 88.36285180000002,
                'radius' => 2944.07666015625,
            ),
            334 => 
            array (
                'id' => 1835,
                'name' => 'Acharya Profulla Chandra Road',
                'city_id' => '3',
                'lat' => 22.5817067,
                'long' => 88.3742099,
                'radius' => 2234.114013671875,
            ),
            335 => 
            array (
                'id' => 1836,
                'name' => 'Agarpara',
                'city_id' => '3',
                'lat' => 22.6816847,
                'long' => 88.38485589999999,
                'radius' => 3560.22216796875,
            ),
            336 => 
            array (
                'id' => 1837,
                'name' => 'Alambazar',
                'city_id' => '3',
                'lat' => 22.6495466,
                'long' => 88.3633918,
                'radius' => 869.9280395507812,
            ),
            337 => 
            array (
                'id' => 1838,
                'name' => 'Alipur',
                'city_id' => '3',
                'lat' => 22.5248472,
                'long' => 88.3312187,
                'radius' => 3344.74609375,
            ),
            338 => 
            array (
                'id' => 1839,
                'name' => 'Alipur Road',
                'city_id' => '3',
                'lat' => 22.5089094,
                'long' => 88.3336398,
                'radius' => 1223.1566162109375,
            ),
            339 => 
            array (
                'id' => 1840,
                'name' => 'Amartala Street',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            340 => 
            array (
                'id' => 1841,
                'name' => 'Amherst Street',
                'city_id' => '3',
                'lat' => 22.5777658,
                'long' => 88.3692471,
                'radius' => 699.2799072265625,
            ),
            341 => 
            array (
                'id' => 1842,
                'name' => 'Anandpur',
                'city_id' => '3',
                'lat' => 22.5148386,
                'long' => 88.4097881,
                'radius' => 318.66229248046875,
            ),
            342 => 
            array (
                'id' => 1843,
                'name' => 'Andul Road',
                'city_id' => '3',
                'lat' => 22.5733946,
                'long' => 88.2629378,
                'radius' => 5217.51708984375,
            ),
            343 => 
            array (
                'id' => 1844,
                'name' => 'Ariadaha',
                'city_id' => '3',
                'lat' => 22.6444014,
                'long' => 88.3700662,
                'radius' => 1813.9482421875,
            ),
            344 => 
            array (
                'id' => 1845,
                'name' => 'Armenian Street',
                'city_id' => '3',
                'lat' => 22.5792942,
                'long' => 88.35421269999999,
                'radius' => 249.59153747558594,
            ),
            345 => 
            array (
                'id' => 1846,
                'name' => 'Ashutosh Mukherjee Road',
                'city_id' => '3',
                'lat' => 22.5345383,
                'long' => 88.346127,
                'radius' => 817.4033813476562,
            ),
            346 => 
            array (
                'id' => 1847,
                'name' => 'B. B. D. Bag Dalhousie Square',
                'city_id' => '3',
                'lat' => 22.5711841,
                'long' => 88.3470047,
                'radius' => 1708.7628173828125,
            ),
            347 => 
            array (
                'id' => 1848,
                'name' => 'Bagh Bazar',
                'city_id' => '3',
                'lat' => 22.6026086,
                'long' => 88.3658993,
                'radius' => 1014.89306640625,
            ),
            348 => 
            array (
                'id' => 1849,
                'name' => 'Bagha Jatin',
                'city_id' => '3',
                'lat' => 22.4843951,
                'long' => 88.3815923,
                'radius' => 348.9476013183594,
            ),
            349 => 
            array (
                'id' => 1850,
                'name' => 'Baguihati',
                'city_id' => '3',
                'lat' => 22.6107101,
                'long' => 88.42706020000001,
                'radius' => 904.4010009765625,
            ),
            350 => 
            array (
                'id' => 1851,
                'name' => 'Bally',
                'city_id' => '3',
                'lat' => 22.645734,
                'long' => 88.34786,
                'radius' => 2002.4876708984375,
            ),
            351 => 
            array (
                'id' => 1852,
                'name' => 'Ballygunge Circular Road',
                'city_id' => '3',
                'lat' => 22.527928,
                'long' => 88.36040829999999,
                'radius' => 616.6322021484375,
            ),
            352 => 
            array (
                'id' => 1853,
                'name' => 'Ballygunge Phari',
                'city_id' => '3',
                'lat' => 22.5281267,
                'long' => 88.3658883,
                'radius' => 204.19891357421875,
            ),
            353 => 
            array (
                'id' => 1854,
                'name' => 'Ballygunge Place',
                'city_id' => '3',
                'lat' => 22.5267203,
                'long' => 88.36885269999999,
                'radius' => 507.45953369140625,
            ),
            354 => 
            array (
                'id' => 1855,
                'name' => 'Bandel',
                'city_id' => '3',
                'lat' => 22.9274222,
                'long' => 88.37734619999999,
                'radius' => 5926.134765625,
            ),
            355 => 
            array (
                'id' => 1856,
                'name' => 'Bangur Avenue',
                'city_id' => '3',
                'lat' => 22.6060853,
                'long' => 88.4138969,
                'radius' => 247.61837768554688,
            ),
            356 => 
            array (
                'id' => 1857,
                'name' => 'Barabazar',
                'city_id' => '3',
                'lat' => 23.0280303,
                'long' => 86.3604859,
                'radius' => 1768.372314453125,
            ),
            357 => 
            array (
                'id' => 1858,
                'name' => 'Barahanagar',
                'city_id' => '3',
                'lat' => 22.6383016,
                'long' => 88.36543859999999,
                'radius' => 3456.307373046875,
            ),
            358 => 
            array (
                'id' => 1859,
                'name' => 'Barisha',
                'city_id' => '3',
                'lat' => 22.4852952,
                'long' => 88.3206664,
                'radius' => 1261.9322509765625,
            ),
            359 => 
            array (
                'id' => 1860,
                'name' => 'Barrackpore Trunk Road',
                'city_id' => '3',
                'lat' => 22.6812304,
                'long' => 88.3757267,
                'radius' => 8941.296875,
            ),
            360 => 
            array (
                'id' => 1861,
                'name' => 'Bata Nagar',
                'city_id' => '3',
                'lat' => 22.5132689,
                'long' => 88.2229909,
                'radius' => 2580.4638671875,
            ),
            361 => 
            array (
                'id' => 1862,
                'name' => 'Beadon Street',
                'city_id' => '3',
                'lat' => 22.588776,
                'long' => 88.3707336,
                'radius' => 43.2681770324707,
            ),
            362 => 
            array (
                'id' => 1863,
                'name' => 'Beck Bagan',
                'city_id' => '3',
                'lat' => 22.5385631,
                'long' => 88.3615713,
                'radius' => 682.918701171875,
            ),
            363 => 
            array (
                'id' => 1864,
                'name' => 'Behala Chowrasta',
                'city_id' => '3',
                'lat' => 22.4870522,
                'long' => 88.31317159999999,
                'radius' => 204.22683715820312,
            ),
            364 => 
            array (
                'id' => 1865,
                'name' => 'Belgachia',
                'city_id' => '3',
                'lat' => 22.6041337,
                'long' => 88.38527069999999,
                'radius' => 1291.0859375,
            ),
            365 => 
            array (
                'id' => 1866,
                'name' => 'Belghoriya',
                'city_id' => '3',
                'lat' => 22.6655601,
                'long' => 88.37924,
                'radius' => 2678.248291015625,
            ),
            366 => 
            array (
                'id' => 1867,
                'name' => 'Beliaghata',
                'city_id' => '3',
                'lat' => 22.5667378,
                'long' => 88.39298749999999,
                'radius' => 2033.2119140625,
            ),
            367 => 
            array (
                'id' => 1868,
                'name' => 'Belur',
                'city_id' => '3',
                'lat' => 22.6378364,
                'long' => 88.3490918,
                'radius' => 2833.95751953125,
            ),
            368 => 
            array (
                'id' => 1869,
                'name' => 'Bentick Street',
                'city_id' => '3',
                'lat' => 22.5698373,
                'long' => 88.3531189,
                'radius' => 465.5203857421875,
            ),
            369 => 
            array (
                'id' => 1870,
                'name' => 'Bepin Behari Ganguly Street',
                'city_id' => '3',
                'lat' => 22.569418,
                'long' => 88.36117689999999,
                'radius' => 1143.5672607421875,
            ),
            370 => 
            array (
                'id' => 1871,
                'name' => 'Bhawanipur',
                'city_id' => '3',
                'lat' => 22.5332356,
                'long' => 88.3459362,
                'radius' => 1651.4134521484375,
            ),
            371 => 
            array (
                'id' => 1872,
                'name' => 'Bhowanipur',
                'city_id' => '3',
                'lat' => 22.5332356,
                'long' => 88.3459362,
                'radius' => 1651.4134521484375,
            ),
            372 => 
            array (
                'id' => 1873,
                'name' => 'Bidhan Nagar',
                'city_id' => '3',
                'lat' => 22.5867296,
                'long' => 88.41709879999999,
                'radius' => 7976.8271484375,
            ),
            373 => 
            array (
                'id' => 1874,
                'name' => 'Bidhan Sarani',
                'city_id' => '3',
                'lat' => 22.6034849,
                'long' => 88.374313,
                'radius' => 948.7188720703125,
            ),
            374 => 
            array (
                'id' => 1875,
                'name' => 'Binoy Badal Dinesh Bag',
                'city_id' => '3',
                'lat' => 22.5711841,
                'long' => 88.3470047,
                'radius' => 1708.7628173828125,
            ),
            375 => 
            array (
                'id' => 1876,
                'name' => 'Birati',
                'city_id' => '3',
                'lat' => 22.6636028,
                'long' => 88.42728120000001,
                'radius' => 3063.291748046875,
            ),
            376 => 
            array (
                'id' => 1877,
                'name' => 'Bon Hoogly',
                'city_id' => '3',
                'lat' => 22.649365,
                'long' => 88.3805094,
                'radius' => 932.8697509765625,
            ),
            377 => 
            array (
                'id' => 1878,
                'name' => 'Bow Bazar',
                'city_id' => '3',
                'lat' => 22.5668237,
                'long' => 88.3614764,
                'radius' => 1171.654296875,
            ),
            378 => 
            array (
                'id' => 1879,
                'name' => 'Brabourne Road',
                'city_id' => '3',
                'lat' => 22.5785427,
                'long' => 88.35232549999999,
                'radius' => 723.3707275390625,
            ),
            379 => 
            array (
                'id' => 1880,
                'name' => 'Brace Bridge Road',
                'city_id' => '3',
                'lat' => 10.1124169,
                'long' => 76.3530061,
                'radius' => 725.9024658203125,
            ),
            380 => 
            array (
                'id' => 1881,
                'name' => 'British India Street',
                'city_id' => '3',
                'lat' => 22.5682862,
                'long' => 88.35104199999999,
                'radius' => 179.13731384277344,
            ),
            381 => 
            array (
                'id' => 1882,
                'name' => 'Budge Budge Road',
                'city_id' => '3',
                'lat' => 22.4814021,
                'long' => 88.1827273,
                'radius' => 359.4013366699219,
            ),
            382 => 
            array (
                'id' => 1883,
                'name' => 'Burrabazar',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            383 => 
            array (
                'id' => 1884,
                'name' => 'Burtolla Street',
                'city_id' => '3',
                'lat' => 22.5825256,
                'long' => 88.35406239999999,
                'radius' => 364.506591796875,
            ),
            384 => 
            array (
                'id' => 1885,
                'name' => 'C I T Scheme',
                'city_id' => '3',
                'lat' => 22.5147244,
                'long' => 88.3606539,
                'radius' => 204.20802307128906,
            ),
            385 => 
            array (
                'id' => 1886,
                'name' => 'Camac Street',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            386 => 
            array (
                'id' => 1887,
                'name' => 'Canning Street',
                'city_id' => '3',
                'lat' => 22.5714976,
                'long' => 88.35838919999999,
                'radius' => 130.94570922851562,
            ),
            387 => 
            array (
                'id' => 1888,
                'name' => 'Central',
                'city_id' => '3',
                'lat' => 22.9747007,
                'long' => 88.43383419999999,
                'radius' => 211.6013641357422,
            ),
            388 => 
            array (
                'id' => 1889,
                'name' => 'Chandannagar',
                'city_id' => '3',
                'lat' => 22.8647723,
                'long' => 88.36326,
                'radius' => 3364.140869140625,
            ),
            389 => 
            array (
                'id' => 1890,
                'name' => 'Chandni Chowk',
                'city_id' => '3',
                'lat' => 28.6505942,
                'long' => 77.23032839999999,
                'radius' => 1977.4957275390625,
            ),
            390 => 
            array (
                'id' => 1891,
                'name' => 'Chandni Chowk Street',
                'city_id' => '3',
                'lat' => 22.5659481,
                'long' => 88.3553111,
                'radius' => 217.25717163085938,
            ),
            391 => 
            array (
                'id' => 1892,
                'name' => 'Chetla',
                'city_id' => '3',
                'lat' => 22.5154308,
                'long' => 88.33494089999999,
                'radius' => 975.9888916015625,
            ),
            392 => 
            array (
                'id' => 1893,
                'name' => 'Chetla Road',
                'city_id' => '3',
                'lat' => 22.5130827,
                'long' => 88.33990539999999,
                'radius' => 1128.2532958984375,
            ),
            393 => 
            array (
                'id' => 1894,
                'name' => 'Chinsurah',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            394 => 
            array (
                'id' => 1895,
                'name' => 'Chittaranjan Avenue',
                'city_id' => '3',
                'lat' => 22.5804966,
                'long' => 88.3611692,
                'radius' => 1851.721923828125,
            ),
            395 => 
            array (
                'id' => 1896,
                'name' => 'Chowranghee',
                'city_id' => '3',
                'lat' => 22.5516889,
                'long' => 88.3491439,
                'radius' => 1538.9046630859375,
            ),
            396 => 
            array (
                'id' => 1897,
                'name' => 'Chowranghee Lane',
                'city_id' => '3',
                'lat' => 22.5570448,
                'long' => 88.3528927,
                'radius' => 150.0975799560547,
            ),
            397 => 
            array (
                'id' => 1898,
                'name' => 'Chowranghee Road',
                'city_id' => '3',
                'lat' => 22.5536512,
                'long' => 88.34977300000001,
                'radius' => 1416.3046875,
            ),
            398 => 
            array (
                'id' => 1899,
                'name' => 'Circus Avenue',
                'city_id' => '3',
                'lat' => 22.5411295,
                'long' => 88.35900079999999,
                'radius' => 922.8367309570312,
            ),
            399 => 
            array (
                'id' => 1900,
                'name' => 'CIT Road',
                'city_id' => '3',
                'lat' => 22.5511932,
                'long' => 88.3712463,
                'radius' => 915.168701171875,
            ),
            400 => 
            array (
                'id' => 1901,
                'name' => 'Clive Row',
                'city_id' => '3',
                'lat' => 22.578629,
                'long' => 88.3495183,
                'radius' => 204.1645050048828,
            ),
            401 => 
            array (
                'id' => 1902,
                'name' => 'College Square',
                'city_id' => '3',
                'lat' => 22.5743114,
                'long' => 88.3615713,
                'radius' => 771.5131225585938,
            ),
            402 => 
            array (
                'id' => 1903,
                'name' => 'College Street',
                'city_id' => '3',
                'lat' => 22.5742457,
                'long' => 88.3628573,
                'radius' => 577.2308959960938,
            ),
            403 => 
            array (
                'id' => 1904,
                'name' => 'Cossipore',
                'city_id' => '3',
                'lat' => 22.6170463,
                'long' => 88.3713578,
                'radius' => 1533.2161865234375,
            ),
            404 => 
            array (
                'id' => 1905,
                'name' => 'Cotton Street',
                'city_id' => '3',
                'lat' => 22.58142,
                'long' => 88.3554302,
                'radius' => 185.56053161621094,
            ),
            405 => 
            array (
                'id' => 1906,
                'name' => 'Dakhineswar',
                'city_id' => '3',
                'lat' => 22.6574479,
                'long' => 88.36395929999999,
                'radius' => 1406.756591796875,
            ),
            406 => 
            array (
                'id' => 1907,
                'name' => 'Dalhousie',
                'city_id' => '3',
                'lat' => 32.5387385,
                'long' => 75.97099779999999,
                'radius' => 2916.948486328125,
            ),
            407 => 
            array (
                'id' => 1908,
                'name' => 'Dankuni',
                'city_id' => '3',
                'lat' => 22.6808348,
                'long' => 88.29293129999999,
                'radius' => 3962.570068359375,
            ),
            408 => 
            array (
                'id' => 1909,
                'name' => 'Deshapriya Park0',
                'city_id' => '3',
                'lat' => 22.517799,
                'long' => 88.35372009999999,
                'radius' => 204.2059326171875,
            ),
            409 => 
            array (
                'id' => 1910,
                'name' => 'Deshbandhu Nagar',
                'city_id' => '3',
                'lat' => 22.618568,
                'long' => 88.42611409999999,
                'radius' => 162.11866760253906,
            ),
            410 => 
            array (
                'id' => 1911,
                'name' => 'Deshbandhunagar',
                'city_id' => '3',
                'lat' => 22.618568,
                'long' => 88.42611409999999,
                'radius' => 162.11866760253906,
            ),
            411 => 
            array (
                'id' => 1912,
                'name' => 'Dhakuria',
                'city_id' => '3',
                'lat' => 22.5104166,
                'long' => 88.37109749999999,
                'radius' => 2905.056396484375,
            ),
            412 => 
            array (
                'id' => 1913,
                'name' => 'Dhapa',
                'city_id' => '3',
                'lat' => 22.560235,
                'long' => 88.4421081,
                'radius' => 6596.1103515625,
            ),
            413 => 
            array (
                'id' => 1914,
                'name' => 'Dharmatala',
                'city_id' => '3',
                'lat' => 22.5600686,
                'long' => 88.3524678,
                'radius' => 696.7395629882812,
            ),
            414 => 
            array (
                'id' => 1915,
                'name' => 'Dharmatala Road',
                'city_id' => '3',
                'lat' => 22.5227155,
                'long' => 88.3846075,
                'radius' => 368.8065185546875,
            ),
            415 => 
            array (
                'id' => 1916,
                'name' => 'Dharmatalla',
                'city_id' => '3',
                'lat' => 22.5600686,
                'long' => 88.3524678,
                'radius' => 696.7395629882812,
            ),
            416 => 
            array (
                'id' => 1917,
                'name' => 'Diamond Harbour Road',
                'city_id' => '3',
                'lat' => 22.3566038,
                'long' => 88.27020519999999,
                'radius' => 21789.015625,
            ),
            417 => 
            array (
                'id' => 1918,
                'name' => 'Dobson Road',
                'city_id' => '3',
                'lat' => 22.5904464,
                'long' => 88.3408772,
                'radius' => 407.1148681640625,
            ),
            418 => 
            array (
                'id' => 1919,
                'name' => 'Dover Lane',
                'city_id' => '3',
                'lat' => 22.5224063,
                'long' => 88.3625977,
                'radius' => 414.0146179199219,
            ),
            419 => 
            array (
                'id' => 1920,
                'name' => 'Dum Dum Cant',
                'city_id' => '3',
                'lat' => 22.6369714,
                'long' => 88.4123388,
                'radius' => 204.1246795654297,
            ),
            420 => 
            array (
                'id' => 1921,
                'name' => 'Dum Dum Park',
                'city_id' => '3',
                'lat' => 22.6076364,
                'long' => 88.4173644,
                'radius' => 905.8174438476562,
            ),
            421 => 
            array (
                'id' => 1922,
                'name' => 'Dum Dum Road',
                'city_id' => '3',
                'lat' => 22.6204679,
                'long' => 88.39686139999999,
                'radius' => 1850.4259033203125,
            ),
            422 => 
            array (
                'id' => 1923,
                'name' => 'Dunlop',
                'city_id' => '3',
                'lat' => 22.651934,
                'long' => 88.3785594,
                'radius' => 1088.974365234375,
            ),
            423 => 
            array (
                'id' => 1924,
                'name' => 'E.M Bypass',
                'city_id' => '3',
                'lat' => 22.4893006,
                'long' => 88.395217,
                'radius' => 13210.3203125,
            ),
            424 => 
            array (
                'id' => 1925,
                'name' => 'Eastern Metropolitan Bypass',
                'city_id' => '3',
                'lat' => 22.4893006,
                'long' => 88.395217,
                'radius' => 13210.3203125,
            ),
            425 => 
            array (
                'id' => 1926,
                'name' => 'Ekbalpore',
                'city_id' => '3',
                'lat' => 22.5341324,
                'long' => 88.3238482,
                'radius' => 156.5593719482422,
            ),
            426 => 
            array (
                'id' => 1927,
                'name' => 'Elgin',
                'city_id' => '3',
                'lat' => 22.5437087,
                'long' => 88.3548955,
                'radius' => 1149.2025146484375,
            ),
            427 => 
            array (
                'id' => 1928,
                'name' => 'Elgin Road',
                'city_id' => '3',
                'lat' => 22.5377811,
                'long' => 88.3507267,
                'radius' => 425.2799072265625,
            ),
            428 => 
            array (
                'id' => 1929,
                'name' => 'Entaly',
                'city_id' => '3',
                'lat' => 22.5560521,
                'long' => 88.37002749999999,
                'radius' => 1169.212890625,
            ),
            429 => 
            array (
                'id' => 1930,
                'name' => 'Ezra Street',
                'city_id' => '3',
                'lat' => 22.5756156,
                'long' => 88.35322099999999,
                'radius' => 348.1020202636719,
            ),
            430 => 
            array (
                'id' => 1931,
                'name' => 'Fort William',
                'city_id' => '3',
                'lat' => 22.5546875,
                'long' => 88.33607649999999,
                'radius' => 1341.7806396484375,
            ),
            431 => 
            array (
                'id' => 1932,
                'name' => 'Free School Street',
                'city_id' => '3',
                'lat' => 22.5582932,
                'long' => 88.3547316,
                'radius' => 668.249755859375,
            ),
            432 => 
            array (
                'id' => 1933,
                'name' => 'G P O',
                'city_id' => '3',
                'lat' => 22.5728858,
                'long' => 88.34755229999999,
                'radius' => 204.16842651367188,
            ),
            433 => 
            array (
                'id' => 1934,
                'name' => 'G. T. Road',
                'city_id' => '3',
                'lat' => 30.6610549,
                'long' => 76.2965299,
                'radius' => 277460.78125,
            ),
            434 => 
            array (
                'id' => 1935,
                'name' => 'G.P.O',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            435 => 
            array (
                'id' => 1936,
                'name' => 'Ganesh Chandra Avenue',
                'city_id' => '3',
                'lat' => 22.5675537,
                'long' => 88.3564717,
                'radius' => 471.51910400390625,
            ),
            436 => 
            array (
                'id' => 1937,
                'name' => 'Garden Reach',
                'city_id' => '3',
                'lat' => 22.5334555,
                'long' => 88.2996294,
                'radius' => 3468.9482421875,
            ),
            437 => 
            array (
                'id' => 1938,
                'name' => 'Garia Main Road',
                'city_id' => '3',
                'lat' => 22.4573346,
                'long' => 88.3845767,
                'radius' => 1146.8297119140625,
            ),
            438 => 
            array (
                'id' => 1939,
                'name' => 'Gariahat',
                'city_id' => '3',
                'lat' => 22.5170076,
                'long' => 88.365819,
                'radius' => 808.7984008789062,
            ),
            439 => 
            array (
                'id' => 1940,
                'name' => 'Gariahat Road',
                'city_id' => '3',
                'lat' => 22.5157428,
                'long' => 88.36680229999999,
                'radius' => 1449.0828857421875,
            ),
            440 => 
            array (
                'id' => 1941,
                'name' => 'Ghughu Danga',
                'city_id' => '3',
                'lat' => 22.6189612,
                'long' => 88.3952377,
                'radius' => 726.8056640625,
            ),
            441 => 
            array (
                'id' => 1942,
                'name' => 'Girish Park',
                'city_id' => '3',
                'lat' => 22.5867031,
                'long' => 88.36096479999999,
                'radius' => 67.06124877929688,
            ),
            442 => 
            array (
                'id' => 1943,
                'name' => 'Gobinda Chandra Khatick Road',
                'city_id' => '3',
                'lat' => 22.5552193,
                'long' => 88.38364349999999,
                'radius' => 410.9686279296875,
            ),
            443 => 
            array (
                'id' => 1944,
                'name' => 'Golf Green',
                'city_id' => '3',
                'lat' => 22.4931376,
                'long' => 88.3621781,
                'radius' => 612.8165283203125,
            ),
            444 => 
            array (
                'id' => 1945,
                'name' => 'Golpark',
                'city_id' => '3',
                'lat' => 22.5158681,
                'long' => 88.3651364,
                'radius' => 2004.3751220703125,
            ),
            445 => 
            array (
                'id' => 1946,
                'name' => 'Govinda Khattik Road',
                'city_id' => '3',
                'lat' => 22.539445,
                'long' => 88.386704,
                'radius' => 204.1912078857422,
            ),
            446 => 
            array (
                'id' => 1947,
                'name' => 'Grand Trunk Road',
                'city_id' => '3',
                'lat' => 30.6610549,
                'long' => 76.2965299,
                'radius' => 277460.78125,
            ),
            447 => 
            array (
                'id' => 1948,
                'name' => 'Haltu',
                'city_id' => '3',
                'lat' => 22.506616,
                'long' => 88.3901702,
                'radius' => 1824.7572021484375,
            ),
            448 => 
            array (
                'id' => 1949,
                'name' => 'Haridevpur',
                'city_id' => '3',
                'lat' => 22.479414,
                'long' => 88.3355732,
                'radius' => 911.7369384765625,
            ),
            449 => 
            array (
                'id' => 1950,
                'name' => 'Harish Mukherjee Road',
                'city_id' => '3',
                'lat' => 22.5325836,
                'long' => 88.34354909999999,
                'radius' => 1007.3040161132812,
            ),
            450 => 
            array (
                'id' => 1951,
                'name' => 'Hastings',
                'city_id' => '3',
                'lat' => 22.5487295,
                'long' => 88.33607649999999,
                'radius' => 1889.3153076171875,
            ),
            451 => 
            array (
                'id' => 1952,
                'name' => 'Hati Bagan',
                'city_id' => '3',
                'lat' => 22.5974903,
                'long' => 88.3706729,
                'radius' => 679.6904296875,
            ),
            452 => 
            array (
                'id' => 1953,
                'name' => 'Hatkhola',
                'city_id' => '3',
                'lat' => 22.5996535,
                'long' => 88.3608534,
                'radius' => 638.9682006835938,
            ),
            453 => 
            array (
                'id' => 1954,
                'name' => 'Hazra Road',
                'city_id' => '3',
                'lat' => 22.5244718,
                'long' => 88.35290359999999,
                'radius' => 1392.09765625,
            ),
            454 => 
            array (
                'id' => 1955,
                'name' => 'Hiland Park',
                'city_id' => '3',
                'lat' => 22.4845644,
                'long' => 88.3895541,
                'radius' => 204.22853088378906,
            ),
            455 => 
            array (
                'id' => 1956,
                'name' => 'Hindusthan Park',
                'city_id' => '3',
                'lat' => 22.5169831,
                'long' => 88.3633918,
                'radius' => 497.0646667480469,
            ),
            456 => 
            array (
                'id' => 1957,
                'name' => 'Ho Chi Minh Sarani',
                'city_id' => '3',
                'lat' => 22.487163,
                'long' => 88.3087254,
                'radius' => 136.52244567871094,
            ),
            457 => 
            array (
                'id' => 1958,
                'name' => 'Howrah A. C Market',
                'city_id' => '3',
                'lat' => 22.5914284,
                'long' => 88.3410286,
                'radius' => 176.70877075195312,
            ),
            458 => 
            array (
                'id' => 1959,
                'name' => 'Howrah Maidan',
                'city_id' => '3',
                'lat' => 22.5833782,
                'long' => 88.3337983,
                'radius' => 204.16127014160156,
            ),
            459 => 
            array (
                'id' => 1960,
                'name' => 'India Exchange Place',
                'city_id' => '3',
                'lat' => 22.5744468,
                'long' => 88.35208469999999,
                'radius' => 347.11126708984375,
            ),
            460 => 
            array (
                'id' => 1961,
                'name' => 'Invalid',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            461 => 
            array (
                'id' => 1962,
                'name' => 'Jadavpur',
                'city_id' => '3',
                'lat' => 22.4939728,
                'long' => 88.37067119999999,
                'radius' => 1731.1763916015625,
            ),
            462 => 
            array (
                'id' => 1963,
                'name' => 'Jadavpur University',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            463 => 
            array (
                'id' => 1964,
                'name' => 'Jawaharlal Nehru Road',
                'city_id' => '3',
                'lat' => 22.5536512,
                'long' => 88.34977300000001,
                'radius' => 1416.3046875,
            ),
            464 => 
            array (
                'id' => 1965,
                'name' => 'Jessore Road',
                'city_id' => '3',
                'lat' => 22.6789117,
                'long' => 88.4486514,
                'radius' => 11517.80859375,
            ),
            465 => 
            array (
                'id' => 1966,
                'name' => 'Jodhpur Park',
                'city_id' => '3',
                'lat' => 22.5058175,
                'long' => 88.3639986,
                'radius' => 762.8524780273438,
            ),
            466 => 
            array (
                'id' => 1967,
                'name' => 'Joka',
                'city_id' => '3',
                'lat' => 22.4530659,
                'long' => 88.3025054,
                'radius' => 2514.8662109375,
            ),
            467 => 
            array (
                'id' => 1968,
                'name' => 'K. G. Basu Sarani',
                'city_id' => '3',
                'lat' => 22.5683301,
                'long' => 88.38605179999999,
                'radius' => 444.8259582519531,
            ),
            468 => 
            array (
                'id' => 1969,
                'name' => 'Kalakar Street',
                'city_id' => '3',
                'lat' => 22.5838046,
                'long' => 88.3545286,
                'radius' => 323.8570861816406,
            ),
            469 => 
            array (
                'id' => 1970,
                'name' => 'Kalighat',
                'city_id' => '3',
                'lat' => 22.516951,
                'long' => 88.3458699,
                'radius' => 1678.738525390625,
            ),
            470 => 
            array (
                'id' => 1971,
                'name' => 'Kalikapur',
                'city_id' => '3',
                'lat' => 22.5009134,
                'long' => 88.39493449999999,
                'radius' => 715.12109375,
            ),
            471 => 
            array (
                'id' => 1972,
                'name' => 'Kalyani',
                'city_id' => '3',
                'lat' => 22.9750855,
                'long' => 88.43450779999999,
                'radius' => 5394.8134765625,
            ),
            472 => 
            array (
                'id' => 1973,
                'name' => 'Kamarhati',
                'city_id' => '3',
                'lat' => 22.6846668,
                'long' => 88.3706491,
                'radius' => 2058.25634765625,
            ),
            473 => 
            array (
                'id' => 1974,
                'name' => 'Kanchrapara',
                'city_id' => '3',
                'lat' => 22.944101,
                'long' => 88.4335019,
                'radius' => 5008.36279296875,
            ),
            474 => 
            array (
                'id' => 1975,
                'name' => 'Karl Marx Sarani',
                'city_id' => '3',
                'lat' => 22.5381626,
                'long' => 88.3123569,
                'radius' => 1887.6573486328125,
            ),
            475 => 
            array (
                'id' => 1976,
                'name' => 'Kasba',
                'city_id' => '3',
                'lat' => 22.5176176,
                'long' => 88.3840499,
                'radius' => 2118.61328125,
            ),
            476 => 
            array (
                'id' => 1977,
                'name' => 'Kasba Industrial Estate',
                'city_id' => '3',
                'lat' => 22.5133192,
                'long' => 88.4067571,
                'radius' => 441.8919982910156,
            ),
            477 => 
            array (
                'id' => 1978,
                'name' => 'Kashipur',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            478 => 
            array (
                'id' => 1979,
                'name' => 'Kestopur',
                'city_id' => '3',
                'lat' => 22.5954837,
                'long' => 88.4357144,
                'radius' => 2481.769775390625,
            ),
            479 => 
            array (
                'id' => 1980,
                'name' => 'Khardah',
                'city_id' => '3',
                'lat' => 22.7002943,
                'long' => 88.3753455,
                'radius' => 4942.5908203125,
            ),
            480 => 
            array (
                'id' => 1981,
                'name' => 'Khidirpur',
                'city_id' => '3',
                'lat' => 22.54206,
                'long' => 88.3189579,
                'radius' => 1387.5941162109375,
            ),
            481 => 
            array (
                'id' => 1982,
                'name' => 'Kidderpore',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            482 => 
            array (
                'id' => 1983,
                'name' => 'Kiran Sarkar Roy Road',
                'city_id' => '3',
                'lat' => 22.5698315,
                'long' => 88.344893,
                'radius' => 289.9168701171875,
            ),
            483 => 
            array (
                'id' => 1984,
                'name' => 'Kolkata Airport',
                'city_id' => '3',
                'lat' => 22.6375676,
                'long' => 88.43190729999999,
                'radius' => 743.3612670898438,
            ),
            484 => 
            array (
                'id' => 1985,
                'name' => 'Kolkata Maidan',
                'city_id' => '3',
                'lat' => 22.5544689,
                'long' => 88.340896,
                'radius' => 204.18096923828125,
            ),
            485 => 
            array (
                'id' => 1986,
                'name' => 'Konnagar',
                'city_id' => '3',
                'lat' => 22.7004725,
                'long' => 88.3190717,
                'radius' => 4901.31640625,
            ),
            486 => 
            array (
                'id' => 1987,
                'name' => 'Krishnapur',
                'city_id' => '3',
                'lat' => 22.5914526,
                'long' => 88.4379653,
                'radius' => 1542.475341796875,
            ),
            487 => 
            array (
                'id' => 1988,
                'name' => 'Lake Gardens',
                'city_id' => '3',
                'lat' => 22.5057437,
                'long' => 88.3567163,
                'radius' => 877.0653686523438,
            ),
            488 => 
            array (
                'id' => 1989,
                'name' => 'Lake Market',
                'city_id' => '3',
                'lat' => 22.515358,
                'long' => 88.35003979999999,
                'radius' => 527.5665283203125,
            ),
            489 => 
            array (
                'id' => 1990,
                'name' => 'Lake Road',
                'city_id' => '3',
                'lat' => 22.9720712,
                'long' => 88.4429243,
                'radius' => 762.0955200195312,
            ),
            490 => 
            array (
                'id' => 1991,
                'name' => 'Lake Town',
                'city_id' => '3',
                'lat' => 22.6069698,
                'long' => 88.40281379999999,
                'radius' => 1706.72705078125,
            ),
            491 => 
            array (
                'id' => 1992,
                'name' => 'Lal Bazar Street',
                'city_id' => '3',
                'lat' => 22.5725214,
                'long' => 88.35167229999999,
                'radius' => 169.2153778076172,
            ),
            492 => 
            array (
                'id' => 1993,
                'name' => 'Lala Lajpat Rai Sarani',
                'city_id' => '3',
                'lat' => 22.5377811,
                'long' => 88.3507267,
                'radius' => 425.2799072265625,
            ),
            493 => 
            array (
                'id' => 1994,
                'name' => 'Lansdown Place',
                'city_id' => '3',
                'lat' => 22.5239162,
                'long' => 88.35337109999999,
                'radius' => 200.73880004882812,
            ),
            494 => 
            array (
                'id' => 1995,
                'name' => 'Lansdown Road',
                'city_id' => '3',
                'lat' => 22.5270146,
                'long' => 88.3527005,
                'radius' => 1637.4990234375,
            ),
            495 => 
            array (
                'id' => 1996,
                'name' => 'Lansdowne',
                'city_id' => '3',
                'lat' => 22.5239162,
                'long' => 88.35337109999999,
                'radius' => 198.439453125,
            ),
            496 => 
            array (
                'id' => 1997,
                'name' => 'Lenin Sarani',
                'city_id' => '3',
                'lat' => 22.677827,
                'long' => 88.4060408,
                'radius' => 723.3319702148438,
            ),
            497 => 
            array (
                'id' => 1998,
                'name' => 'Liluah',
                'city_id' => '3',
                'lat' => 22.6170686,
                'long' => 88.3190717,
                'radius' => 3954.850341796875,
            ),
            498 => 
            array (
                'id' => 1999,
                'name' => 'Lindsay Street',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            499 => 
            array (
                'id' => 2000,
                'name' => 'Lord Sinha Road',
                'city_id' => '3',
                'lat' => 22.5436671,
                'long' => 88.3488718,
                'radius' => 236.55360412597656,
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'name' => 'Loudon Street',
                'city_id' => '3',
                'lat' => 22.5422855,
                'long' => 88.35659509999999,
                'radius' => 88.75746154785156,
            ),
            1 => 
            array (
                'id' => 2002,
                'name' => 'Madan Street',
                'city_id' => '3',
                'lat' => 22.5658453,
                'long' => 88.35391349999999,
                'radius' => 157.2926025390625,
            ),
            2 => 
            array (
                'id' => 2003,
                'name' => 'Madhyamgram',
                'city_id' => '3',
                'lat' => 22.6925015,
                'long' => 88.465448,
                'radius' => 7513.29931640625,
            ),
            3 => 
            array (
                'id' => 2004,
                'name' => 'Maharsi Debendra Road',
                'city_id' => '3',
                'lat' => 22.5909955,
                'long' => 88.3532546,
                'radius' => 913.8550415039062,
            ),
            4 => 
            array (
                'id' => 2005,
                'name' => 'Mahatma Gandhi Road',
                'city_id' => '3',
                'lat' => 22.5786041,
                'long' => 88.36093919999999,
                'radius' => 1608.8123779296875,
            ),
            5 => 
            array (
                'id' => 2006,
                'name' => 'Mahestala',
                'city_id' => '3',
                'lat' => 22.511976,
                'long' => 88.2509941,
                'radius' => 8142.25537109375,
            ),
            6 => 
            array (
                'id' => 2007,
                'name' => 'Maidan',
                'city_id' => '3',
                'lat' => 22.5544689,
                'long' => 88.340896,
                'radius' => 204.18096923828125,
            ),
            7 => 
            array (
                'id' => 2008,
                'name' => 'Malda',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            8 => 
            array (
                'id' => 2009,
                'name' => 'Mallik Bazar',
                'city_id' => '3',
                'lat' => 22.5474757,
                'long' => 88.35914389999999,
                'radius' => 787.4749755859375,
            ),
            9 => 
            array (
                'id' => 2010,
                'name' => 'Mango Lane',
                'city_id' => '3',
                'lat' => 22.5694299,
                'long' => 88.3514939,
                'radius' => 176.90956115722656,
            ),
            10 => 
            array (
                'id' => 2011,
                'name' => 'Manick Tala',
                'city_id' => '3',
                'lat' => 22.5863743,
                'long' => 88.376133,
                'radius' => 989.9179077148438,
            ),
            11 => 
            array (
                'id' => 2012,
                'name' => 'Manick Tala Main Road',
                'city_id' => '3',
                'lat' => 22.5803204,
                'long' => 88.389786,
                'radius' => 1246.92724609375,
            ),
            12 => 
            array (
                'id' => 2013,
                'name' => 'Middleton Row',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            13 => 
            array (
                'id' => 2014,
                'name' => 'Middleton Street',
                'city_id' => '3',
                'lat' => 22.5489421,
                'long' => 88.35112509999999,
                'radius' => 256.01800537109375,
            ),
            14 => 
            array (
                'id' => 2015,
                'name' => 'Minto Park',
                'city_id' => '3',
                'lat' => 22.5410869,
                'long' => 88.35513089999999,
                'radius' => 204.19007873535156,
            ),
            15 => 
            array (
                'id' => 2016,
                'name' => 'Mirza Galib Street',
                'city_id' => '3',
                'lat' => 22.5582932,
                'long' => 88.3547316,
                'radius' => 668.249755859375,
            ),
            16 => 
            array (
                'id' => 2017,
                'name' => 'Moti Jheel',
                'city_id' => '3',
                'lat' => 22.6232102,
                'long' => 88.4106973,
                'radius' => 462.24359130859375,
            ),
            17 => 
            array (
                'id' => 2018,
                'name' => 'Moulali',
                'city_id' => '3',
                'lat' => 22.559441,
                'long' => 88.3639986,
                'radius' => 679.2333374023438,
            ),
            18 => 
            array (
                'id' => 2019,
                'name' => 'Nadia',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            19 => 
            array (
                'id' => 2020,
                'name' => 'Nagar Bazar',
                'city_id' => '3',
                'lat' => 22.6217922,
                'long' => 88.4179705,
                'radius' => 668.6043090820312,
            ),
            20 => 
            array (
                'id' => 2021,
                'name' => 'Naihati',
                'city_id' => '3',
                'lat' => 22.8928724,
                'long' => 88.42203239999999,
                'radius' => 3024.162109375,
            ),
            21 => 
            array (
                'id' => 2022,
                'name' => 'Naktala',
                'city_id' => '3',
                'lat' => 22.4730953,
                'long' => 88.36885269999999,
                'radius' => 1322.813232421875,
            ),
            22 => 
            array (
                'id' => 2023,
                'name' => 'Narkel Danga',
                'city_id' => '3',
                'lat' => 22.577486,
                'long' => 88.38098579999999,
                'radius' => 932.9330444335938,
            ),
            23 => 
            array (
                'id' => 2024,
                'name' => 'Nawpara',
                'city_id' => '3',
                'lat' => 22.6428013,
                'long' => 88.3916662,
                'radius' => 1159.8968505859375,
            ),
            24 => 
            array (
                'id' => 2025,
                'name' => 'Netaji Subhas Chandra Bose Road',
                'city_id' => '3',
                'lat' => 22.4561543,
                'long' => 88.3856686,
                'radius' => 6398.14111328125,
            ),
            25 => 
            array (
                'id' => 2026,
                'name' => 'Netaji Subhas Road',
                'city_id' => '3',
                'lat' => 22.578682,
                'long' => 88.3495117,
                'radius' => 872.6927490234375,
            ),
            26 => 
            array (
                'id' => 2027,
                'name' => 'New Alipore',
                'city_id' => '3',
                'lat' => 22.5089709,
                'long' => 88.3329766,
                'radius' => 1685.56005859375,
            ),
            27 => 
            array (
                'id' => 2028,
                'name' => 'New Barrackpore',
                'city_id' => '3',
                'lat' => 22.6908457,
                'long' => 88.4400441,
                'radius' => 2045.3077392578125,
            ),
            28 => 
            array (
                'id' => 2029,
                'name' => 'New Market',
                'city_id' => '3',
                'lat' => 22.5600686,
                'long' => 88.3524678,
                'radius' => 566.31689453125,
            ),
            29 => 
            array (
                'id' => 2030,
                'name' => 'Nimta',
                'city_id' => '3',
                'lat' => 22.6686196,
                'long' => 88.4088788,
                'radius' => 2406.615478515625,
            ),
            30 => 
            array (
                'id' => 2031,
                'name' => 'Nimtala',
                'city_id' => '3',
                'lat' => 22.5925139,
                'long' => 88.3588668,
                'radius' => 88.32538604736328,
            ),
            31 => 
            array (
                'id' => 2032,
                'name' => 'Noapara',
                'city_id' => '3',
                'lat' => 22.8128009,
                'long' => 88.38098579999999,
                'radius' => 832.4618530273438,
            ),
            32 => 
            array (
                'id' => 2033,
                'name' => 'Nona Chandanpukur',
                'city_id' => '3',
                'lat' => 22.7655775,
                'long' => 88.3770175,
                'radius' => 1005.8988647460938,
            ),
            33 => 
            array (
                'id' => 2034,
                'name' => 'Old China Bazar Street',
                'city_id' => '3',
                'lat' => 22.5776507,
                'long' => 88.35107839999999,
                'radius' => 307.965576171875,
            ),
            34 => 
            array (
                'id' => 2035,
                'name' => 'Old Court House Street',
                'city_id' => '3',
                'lat' => 22.5692348,
                'long' => 88.3494882,
                'radius' => 137.6951904296875,
            ),
            35 => 
            array (
                'id' => 2036,
                'name' => 'Paddapukur Road',
                'city_id' => '3',
                'lat' => 22.5322025,
                'long' => 88.352571,
                'radius' => 315.9698791503906,
            ),
            36 => 
            array (
                'id' => 2037,
                'name' => 'Paikpara',
                'city_id' => '3',
                'lat' => 22.613223,
                'long' => 88.3804976,
                'radius' => 1571.32177734375,
            ),
            37 => 
            array (
                'id' => 2038,
                'name' => 'Panchashyar',
                'city_id' => '3',
                'lat' => 22.4636369,
                'long' => 88.3912962,
                'radius' => 515.114013671875,
            ),
            38 => 
            array (
                'id' => 2039,
                'name' => 'Panihati',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            39 => 
            array (
                'id' => 2040,
                'name' => 'Park Circus',
                'city_id' => '3',
                'lat' => 22.5378858,
                'long' => 88.368246,
                'radius' => 799.6865234375,
            ),
            40 => 
            array (
                'id' => 2041,
                'name' => 'Park Street',
                'city_id' => '3',
                'lat' => 22.5481524,
                'long' => 88.3590603,
                'radius' => 1290.8546142578125,
            ),
            41 => 
            array (
                'id' => 2042,
                'name' => 'Parnasree Palli',
                'city_id' => '3',
                'lat' => 22.5062482,
                'long' => 88.30184009999999,
                'radius' => 1346.8079833984375,
            ),
            42 => 
            array (
                'id' => 2043,
                'name' => 'Paschim Putiari',
                'city_id' => '3',
                'lat' => 22.4772311,
                'long' => 88.33607649999999,
                'radius' => 1789.8779296875,
            ),
            43 => 
            array (
                'id' => 2044,
                'name' => 'Phool Bagan',
                'city_id' => '3',
                'lat' => 22.5701957,
                'long' => 88.3967536,
                'radius' => 1732.9422607421875,
            ),
            44 => 
            array (
                'id' => 2045,
                'name' => 'Poddar Nagar',
                'city_id' => '3',
                'lat' => 22.4998836,
                'long' => 88.3664257,
                'radius' => 571.23388671875,
            ),
            45 => 
            array (
                'id' => 2046,
                'name' => 'Prafulla Kanan',
                'city_id' => '3',
                'lat' => 22.6054437,
                'long' => 88.4216066,
                'radius' => 607.665771484375,
            ),
            46 => 
            array (
                'id' => 2047,
                'name' => 'Prince Anwar Shah Road',
                'city_id' => '3',
                'lat' => 22.5020937,
                'long' => 88.3564397,
                'radius' => 1219.080810546875,
            ),
            47 => 
            array (
                'id' => 2048,
                'name' => 'Princep Street',
                'city_id' => '3',
                'lat' => 22.5674484,
                'long' => 88.35534679999999,
                'radius' => 374.21966552734375,
            ),
            48 => 
            array (
                'id' => 2049,
                'name' => 'Purba Putiari',
                'city_id' => '3',
                'lat' => 22.4690906,
                'long' => 88.342254,
                'radius' => 1711.0465087890625,
            ),
            49 => 
            array (
                'id' => 2050,
                'name' => 'Purbachal',
                'city_id' => '3',
                'lat' => 22.5045477,
                'long' => 88.3941495,
                'radius' => 427.612060546875,
            ),
            50 => 
            array (
                'id' => 2051,
                'name' => 'R.N. Mukherjee Road',
                'city_id' => '3',
                'lat' => 22.5711836,
                'long' => 88.3510374,
                'radius' => 264.60919189453125,
            ),
            51 => 
            array (
                'id' => 2052,
                'name' => 'Rabindra Sadan',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            52 => 
            array (
                'id' => 2053,
                'name' => 'Rabindra Sarani',
                'city_id' => '3',
                'lat' => 22.5888277,
                'long' => 88.3588523,
                'radius' => 2323.325439453125,
            ),
            53 => 
            array (
                'id' => 2054,
                'name' => 'Rabindra Sarovar',
                'city_id' => '3',
                'lat' => 22.5117266,
                'long' => 88.35914389999999,
                'radius' => 1470.89892578125,
            ),
            54 => 
            array (
                'id' => 2055,
                'name' => 'Radha Bazar Street',
                'city_id' => '3',
                'lat' => 22.5734228,
                'long' => 88.3519208,
                'radius' => 115.10047912597656,
            ),
            55 => 
            array (
                'id' => 2056,
                'name' => 'Rafi Ahmed Kidwai Road',
                'city_id' => '3',
                'lat' => 22.557948,
                'long' => 88.3576331,
                'radius' => 930.8587646484375,
            ),
            56 => 
            array (
                'id' => 2057,
                'name' => 'Raghunathpur',
                'city_id' => '3',
                'lat' => 22.6196705,
                'long' => 88.4294838,
                'radius' => 810.1390380859375,
            ),
            57 => 
            array (
                'id' => 2058,
                'name' => 'Rahora',
                'city_id' => '3',
                'lat' => 22.7239929,
                'long' => 88.38680719999999,
                'radius' => 1976.0965576171875,
            ),
            58 => 
            array (
                'id' => 2059,
                'name' => 'Rai Bahadur Road',
                'city_id' => '3',
                'lat' => 22.4998938,
                'long' => 88.3296376,
                'radius' => 1209.4307861328125,
            ),
            59 => 
            array (
                'id' => 2060,
                'name' => 'Raja Rammohan Roy Sarani',
                'city_id' => '3',
                'lat' => 22.5767382,
                'long' => 88.3688035,
                'radius' => 1031.096923828125,
            ),
            60 => 
            array (
                'id' => 2061,
                'name' => 'Raja Subodh Chandra Mullick Road',
                'city_id' => '3',
                'lat' => 22.4904397,
                'long' => 88.3722914,
                'radius' => 2955.500732421875,
            ),
            61 => 
            array (
                'id' => 2062,
                'name' => 'Rajabazar',
                'city_id' => '3',
                'lat' => 22.5729891,
                'long' => 88.37560189999999,
                'radius' => 1824.958984375,
            ),
            62 => 
            array (
                'id' => 2063,
                'name' => 'Rajbari Colony',
                'city_id' => '3',
                'lat' => 22.6525285,
                'long' => 88.4322768,
                'radius' => 2002.3892822265625,
            ),
            63 => 
            array (
                'id' => 2064,
                'name' => 'Rash Behari Avenue',
                'city_id' => '3',
                'lat' => 22.5210149,
                'long' => 88.3706328,
                'radius' => 3374.05859375,
            ),
            64 => 
            array (
                'id' => 2065,
                'name' => 'Regent Estate',
                'city_id' => '3',
                'lat' => 22.4867121,
                'long' => 88.36844119999999,
                'radius' => 734.55615234375,
            ),
            65 => 
            array (
                'id' => 2066,
                'name' => 'Regent Park',
                'city_id' => '3',
                'lat' => 22.4874358,
                'long' => 88.35494,
                'radius' => 1156.168701171875,
            ),
            66 => 
            array (
                'id' => 2067,
                'name' => 'Ripon Street',
                'city_id' => '3',
                'lat' => 22.6535662,
                'long' => 88.4284729,
                'radius' => 26.264877319335938,
            ),
            67 => 
            array (
                'id' => 2068,
                'name' => 'Rishra',
                'city_id' => '3',
                'lat' => 22.7244023,
                'long' => 88.3287896,
                'radius' => 3381.999267578125,
            ),
            68 => 
            array (
                'id' => 2069,
                'name' => 'Royd Street',
                'city_id' => '3',
                'lat' => 22.5526154,
                'long' => 88.3556742,
                'radius' => 260.1769714355469,
            ),
            69 => 
            array (
                'id' => 2070,
                'name' => 'Russel Street',
                'city_id' => '3',
                'lat' => 22.5516618,
                'long' => 88.35072079999999,
                'radius' => 347.9159851074219,
            ),
            70 => 
            array (
                'id' => 2071,
                'name' => 'S. N. Banerjee Road',
                'city_id' => '3',
                'lat' => 22.4874652,
                'long' => 88.193482,
                'radius' => 52.37686538696289,
            ),
            71 => 
            array (
                'id' => 2072,
                'name' => 'Sahapur',
                'city_id' => '3',
                'lat' => 22.5084987,
                'long' => 88.3281158,
                'radius' => 816.4568481445312,
            ),
            72 => 
            array (
                'id' => 2073,
                'name' => 'Salkia',
                'city_id' => '3',
                'lat' => 22.5972179,
                'long' => 88.3376845,
                'radius' => 2269.88330078125,
            ),
            73 => 
            array (
                'id' => 2074,
                'name' => 'Salt Lake',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            74 => 
            array (
                'id' => 2075,
                'name' => 'Santoshpur Avenue',
                'city_id' => '3',
                'lat' => 22.4934112,
                'long' => 88.3892351,
                'radius' => 646.9779052734375,
            ),
            75 => 
            array (
                'id' => 2076,
                'name' => 'Santragachi',
                'city_id' => '3',
                'lat' => 22.5839176,
                'long' => 88.2826103,
                'radius' => 1589.187255859375,
            ),
            76 => 
            array (
                'id' => 2077,
                'name' => 'Sarat Bose Road',
                'city_id' => '3',
                'lat' => 22.5270146,
                'long' => 88.3527005,
                'radius' => 1637.4990234375,
            ),
            77 => 
            array (
                'id' => 2078,
                'name' => 'Sarsuna',
                'city_id' => '3',
                'lat' => 22.4826318,
                'long' => 88.2826103,
                'radius' => 2556.29150390625,
            ),
            78 => 
            array (
                'id' => 2079,
                'name' => 'Sealdah',
                'city_id' => '3',
                'lat' => 22.5654725,
                'long' => 88.3712796,
                'radius' => 1026.5457763671875,
            ),
            79 => 
            array (
                'id' => 2080,
                'name' => 'Serampore',
                'city_id' => '3',
                'lat' => 22.748331,
                'long' => 88.3385053,
                'radius' => 3098.517333984375,
            ),
            80 => 
            array (
                'id' => 2081,
                'name' => 'Shakespeare Sarani',
                'city_id' => '3',
                'lat' => 22.5446879,
                'long' => 88.35604119999999,
                'radius' => 994.0526123046875,
            ),
            81 => 
            array (
                'id' => 2082,
                'name' => 'Shibpur',
                'city_id' => '3',
                'lat' => 22.5723094,
                'long' => 88.3117819,
                'radius' => 3520.438720703125,
            ),
            82 => 
            array (
                'id' => 2083,
                'name' => 'Shobhabazar',
                'city_id' => '3',
                'lat' => 22.5981676,
                'long' => 88.3639986,
                'radius' => 830.1673583984375,
            ),
            83 => 
            array (
                'id' => 2084,
                'name' => 'Shreebhumi',
                'city_id' => '3',
                'lat' => 22.599295,
                'long' => 88.4022104,
                'radius' => 657.6390380859375,
            ),
            84 => 
            array (
                'id' => 2085,
                'name' => 'Shyam Nagar',
                'city_id' => '3',
                'lat' => 22.8323184,
                'long' => 88.3967536,
                'radius' => 3912.833984375,
            ),
            85 => 
            array (
                'id' => 2086,
                'name' => 'Shyama Prasad Mukherjee Road',
                'city_id' => '3',
                'lat' => 22.5162141,
                'long' => 88.34593450000001,
                'radius' => 1493.5960693359375,
            ),
            86 => 
            array (
                'id' => 2087,
                'name' => 'Shyambazar',
                'city_id' => '3',
                'lat' => 22.5982031,
                'long' => 88.36868659999999,
                'radius' => 139.68783569335938,
            ),
            87 => 
            array (
                'id' => 2088,
                'name' => 'Sinthee',
                'city_id' => '3',
                'lat' => 22.6263189,
                'long' => 88.3813033,
                'radius' => 2002.7734375,
            ),
            88 => 
            array (
                'id' => 2089,
                'name' => 'Sodepur',
                'city_id' => '3',
                'lat' => 22.7150007,
                'long' => 88.3871813,
                'radius' => 104.84807586669922,
            ),
            89 => 
            array (
                'id' => 2090,
                'name' => 'Sonarpur',
                'city_id' => '3',
                'lat' => 22.4490894,
                'long' => 88.39147310000001,
                'radius' => 8538.2080078125,
            ),
            90 => 
            array (
                'id' => 2091,
                'name' => 'Southern Avenue',
                'city_id' => '3',
                'lat' => 22.5134021,
                'long' => 88.3560305,
                'radius' => 1090.7862548828125,
            ),
            91 => 
            array (
                'id' => 2092,
                'name' => 'Sovabazar',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            92 => 
            array (
                'id' => 2093,
                'name' => 'Strand Road',
                'city_id' => '3',
                'lat' => 22.5736711,
                'long' => 88.3455579,
                'radius' => 2647.1474609375,
            ),
            93 => 
            array (
                'id' => 2094,
                'name' => 'Surya Sen Street',
                'city_id' => '3',
                'lat' => 22.572735,
                'long' => 88.3671104,
                'radius' => 469.78692626953125,
            ),
            94 => 
            array (
                'id' => 2095,
                'name' => 'Syed Amir Ali Avenue',
                'city_id' => '3',
                'lat' => 22.538784,
                'long' => 88.36525689999999,
                'radius' => 545.7239379882812,
            ),
            95 => 
            array (
                'id' => 2096,
                'name' => 'Taltala',
                'city_id' => '3',
                'lat' => 22.561227,
                'long' => 88.3582718,
                'radius' => 1603.0162353515625,
            ),
            96 => 
            array (
                'id' => 2097,
                'name' => 'Tangra',
                'city_id' => '3',
                'lat' => 22.5577172,
                'long' => 88.38665859999999,
                'radius' => 2946.564697265625,
            ),
            97 => 
            array (
                'id' => 2098,
                'name' => 'Taratala',
                'city_id' => '3',
                'lat' => 22.5168375,
                'long' => 88.3017677,
                'radius' => 2112.963134765625,
            ),
            98 => 
            array (
                'id' => 2099,
                'name' => 'Taratala Road',
                'city_id' => '3',
                'lat' => 22.5326621,
                'long' => 88.2917751,
                'radius' => 3835.45263671875,
            ),
            99 => 
            array (
                'id' => 2100,
                'name' => 'Teghoria',
                'city_id' => '3',
                'lat' => 22.6227201,
                'long' => 88.43675379999999,
                'radius' => 845.8843383789062,
            ),
            100 => 
            array (
                'id' => 2101,
                'name' => 'Thakurpukur',
                'city_id' => '3',
                'lat' => 22.4616267,
                'long' => 88.3061645,
                'radius' => 3177.946044921875,
            ),
            101 => 
            array (
                'id' => 2102,
                'name' => 'Theatre Road',
                'city_id' => '3',
                'lat' => 22.5446879,
                'long' => 88.35604119999999,
                'radius' => 994.0526123046875,
            ),
            102 => 
            array (
                'id' => 2103,
                'name' => 'Tiljala',
                'city_id' => '3',
                'lat' => 22.5268906,
                'long' => 88.38583799999999,
                'radius' => 1199.175537109375,
            ),
            103 => 
            array (
                'id' => 2104,
                'name' => 'Tollygunge Circular Road',
                'city_id' => '3',
                'lat' => 22.5059234,
                'long' => 88.3362068,
                'radius' => 1138.5240478515625,
            ),
            104 => 
            array (
                'id' => 2105,
                'name' => 'Topsia',
                'city_id' => '3',
                'lat' => 22.5336607,
                'long' => 88.39015189999999,
                'radius' => 1598.9876708984375,
            ),
            105 => 
            array (
                'id' => 2106,
                'name' => 'Topsia Road',
                'city_id' => '3',
                'lat' => 22.5333561,
                'long' => 88.387896,
                'radius' => 1476.52490234375,
            ),
            106 => 
            array (
                'id' => 2107,
                'name' => 'Topsia Road South',
                'city_id' => '3',
                'lat' => 22.5333561,
                'long' => 88.387896,
                'radius' => 1476.52490234375,
            ),
            107 => 
            array (
                'id' => 2108,
                'name' => 'Ultadanga',
                'city_id' => '3',
                'lat' => 22.594817,
                'long' => 88.3868594,
                'radius' => 1137.9737548828125,
            ),
            108 => 
            array (
                'id' => 2109,
                'name' => 'Ultadanga Main Road',
                'city_id' => '3',
                'lat' => 22.5936146,
                'long' => 88.3876545,
                'radius' => 977.8104858398438,
            ),
            109 => 
            array (
                'id' => 2110,
                'name' => 'Uluberia',
                'city_id' => '3',
                'lat' => 22.4744363,
                'long' => 88.1000377,
                'radius' => 5918.69091796875,
            ),
            110 => 
            array (
                'id' => 2111,
                'name' => 'Uttar Para',
                'city_id' => '3',
                'lat' => 22.6768451,
                'long' => 88.3385053,
                'radius' => 3505.72412109375,
            ),
            111 => 
            array (
                'id' => 2112,
                'name' => 'V.I.P Road',
                'city_id' => '3',
                'lat' => 22.6037402,
                'long' => 88.414349,
                'radius' => 4809.087890625,
            ),
            112 => 
            array (
                'id' => 2113,
                'name' => 'Vivekananda Road',
                'city_id' => '3',
                'lat' => 22.5853947,
                'long' => 88.36987309999999,
                'radius' => 1017.1779174804688,
            ),
            113 => 
            array (
                'id' => 2114,
                'name' => 'Wellington',
                'city_id' => '3',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            114 => 
            array (
                'id' => 2115,
                'name' => 'Weston Street',
                'city_id' => '3',
                'lat' => 22.569393,
                'long' => 88.3553872,
                'radius' => 237.18020629882812,
            ),
            115 => 
            array (
                'id' => 2116,
                'name' => 'Kalyani Nagar',
                'city_id' => '2',
                'lat' => 18.5463286,
                'long' => 73.9033139,
                'radius' => 1543.833740234375,
            ),
            116 => 
            array (
                'id' => 2117,
                'name' => 'Kothrud',
                'city_id' => '2',
                'lat' => 18.5073985,
                'long' => 73.8076504,
                'radius' => 3330.227783203125,
            ),
            117 => 
            array (
                'id' => 2118,
                'name' => 'Aundh',
                'city_id' => '2',
                'lat' => 18.558007,
                'long' => 73.80752009999999,
                'radius' => 2138.601806640625,
            ),
            118 => 
            array (
                'id' => 2119,
                'name' => 'Viman Nagar',
                'city_id' => '2',
                'lat' => 18.567929,
                'long' => 73.9143179,
                'radius' => 1884.8414306640625,
            ),
            119 => 
            array (
                'id' => 2120,
                'name' => 'Balewadi',
                'city_id' => '2',
                'lat' => 18.5788913,
                'long' => 73.7706807,
                'radius' => 1842.3172607421875,
            ),
            120 => 
            array (
                'id' => 2121,
                'name' => 'Swargate',
                'city_id' => '2',
                'lat' => 18.5018322,
                'long' => 73.8635912,
                'radius' => 784.9039306640625,
            ),
            121 => 
            array (
                'id' => 2122,
                'name' => 'Yerawada',
                'city_id' => '2',
                'lat' => 18.5528779,
                'long' => 73.8796368,
                'radius' => 3399.950439453125,
            ),
            122 => 
            array (
                'id' => 2123,
                'name' => 'Katraj',
                'city_id' => '2',
                'lat' => 18.4575324,
                'long' => 73.8677464,
                'radius' => 3802.47119140625,
            ),
            123 => 
            array (
                'id' => 2124,
                'name' => 'Kasba Peth',
                'city_id' => '2',
                'lat' => 18.5258965,
                'long' => 73.8610191,
                'radius' => 1063.1761474609375,
            ),
            124 => 
            array (
                'id' => 2125,
                'name' => 'Bhosari',
                'city_id' => '2',
                'lat' => 18.6385292,
                'long' => 73.8477874,
                'radius' => 4379.2490234375,
            ),
            125 => 
            array (
                'id' => 2126,
                'name' => 'Chinchwad',
                'city_id' => '2',
                'lat' => 18.6297811,
                'long' => 73.7997094,
                'radius' => 14943.609375,
            ),
            126 => 
            array (
                'id' => 2127,
                'name' => 'Hadapsar',
                'city_id' => '2',
                'lat' => 18.5089197,
                'long' => 73.9260261,
                'radius' => 5193.89599609375,
            ),
            127 => 
            array (
                'id' => 2128,
                'name' => 'Warje',
                'city_id' => '2',
                'lat' => 18.4864727,
                'long' => 73.79683399999999,
                'radius' => 2848.056640625,
            ),
            128 => 
            array (
                'id' => 2129,
                'name' => 'Vadgaon Budruk',
                'city_id' => '2',
                'lat' => 18.4666576,
                'long' => 73.8258668,
                'radius' => 2494.904541015625,
            ),
            129 => 
            array (
                'id' => 2130,
                'name' => 'Shivajinagar',
                'city_id' => '2',
                'lat' => 18.5308225,
                'long' => 73.8474647,
                'radius' => 2950.9677734375,
            ),
            130 => 
            array (
                'id' => 2131,
                'name' => 'Lohegaon',
                'city_id' => '2',
                'lat' => 18.5911292,
                'long' => 73.91882,
                'radius' => 4828.48828125,
            ),
            131 => 
            array (
                'id' => 2132,
                'name' => 'Akurdi',
                'city_id' => '2',
                'lat' => 18.6504839,
                'long' => 73.7785786,
                'radius' => 3197.93212890625,
            ),
            132 => 
            array (
                'id' => 2133,
                'name' => 'Ala',
                'city_id' => '2',
                'lat' => 18.4967084,
                'long' => 73.8162995,
                'radius' => 206.72555541992188,
            ),
            133 => 
            array (
                'id' => 2134,
                'name' => 'Alandi Devachi',
                'city_id' => '2',
                'lat' => 18.6791635,
                'long' => 73.8968647,
                'radius' => 206.6208038330078,
            ),
            134 => 
            array (
                'id' => 2135,
                'name' => 'Alandi Khed',
                'city_id' => '2',
                'lat' => 18.6725535,
                'long' => 73.8893642,
                'radius' => 2914.47216796875,
            ),
            135 => 
            array (
                'id' => 2136,
                'name' => 'Alandi Road',
                'city_id' => '2',
                'lat' => 18.571599,
                'long' => 73.8776209,
                'radius' => 104.17556762695312,
            ),
            136 => 
            array (
                'id' => 2137,
                'name' => 'Ambegaon BK',
                'city_id' => '2',
                'lat' => 18.4458033,
                'long' => 73.8507279,
                'radius' => 3248.329345703125,
            ),
            137 => 
            array (
                'id' => 2138,
                'name' => 'Anandnagar',
                'city_id' => '2',
                'lat' => 18.4777968,
                'long' => 73.8213213,
                'radius' => 1832.2607421875,
            ),
            138 => 
            array (
                'id' => 2139,
                'name' => 'Ane',
                'city_id' => '2',
                'lat' => 19.1643427,
                'long' => 74.2340731,
                'radius' => 686.9398803710938,
            ),
            139 => 
            array (
                'id' => 2140,
                'name' => 'Aundh Road',
                'city_id' => '2',
                'lat' => 18.5647416,
                'long' => 73.8125371,
                'radius' => 3544.178955078125,
            ),
            140 => 
            array (
                'id' => 2141,
                'name' => 'Balaji Nagar',
                'city_id' => '2',
                'lat' => 18.4646316,
                'long' => 73.8602841,
                'radius' => 1081.2769775390625,
            ),
            141 => 
            array (
                'id' => 2142,
                'name' => 'Baner',
                'city_id' => '2',
                'lat' => 18.5590032,
                'long' => 73.7867629,
                'radius' => 414.4414367675781,
            ),
            142 => 
            array (
                'id' => 2143,
                'name' => 'Baner Road',
                'city_id' => '2',
                'lat' => 18.5549732,
                'long' => 73.797159,
                'radius' => 3728.099853515625,
            ),
            143 => 
            array (
                'id' => 2144,
                'name' => 'Belha',
                'city_id' => '2',
                'lat' => 19.0374002,
                'long' => 74.1800117,
                'radius' => 911.3685913085938,
            ),
            144 => 
            array (
                'id' => 2145,
                'name' => 'Bhandarkar Road',
                'city_id' => '2',
                'lat' => 18.518107,
                'long' => 73.83636609999999,
                'radius' => 650.7145385742188,
            ),
            145 => 
            array (
                'id' => 2146,
                'name' => 'Bhavani Peth',
                'city_id' => '2',
                'lat' => 18.5116565,
                'long' => 73.8699182,
                'radius' => 698.712890625,
            ),
            146 => 
            array (
                'id' => 2147,
                'name' => 'Bhawani Peth Road',
                'city_id' => '2',
                'lat' => 18.5124257,
                'long' => 73.8664888,
                'radius' => 281.6594543457031,
            ),
            147 => 
            array (
                'id' => 2148,
                'name' => 'Bhor',
                'city_id' => '2',
                'lat' => 18.1458199,
                'long' => 73.8429847,
                'radius' => 1818.271728515625,
            ),
            148 => 
            array (
                'id' => 2149,
                'name' => 'Bhosari',
                'city_id' => '2',
                'lat' => 18.6385292,
                'long' => 73.8477874,
                'radius' => 4379.2490234375,
            ),
            149 => 
            array (
                'id' => 2150,
                'name' => 'Bibvewadi',
                'city_id' => '2',
                'lat' => 18.4717965,
                'long' => 73.86709139999999,
                'radius' => 1846.759765625,
            ),
            150 => 
            array (
                'id' => 2151,
                'name' => 'Bopodi',
                'city_id' => '2',
                'lat' => 18.5693781,
                'long' => 73.8345794,
                'radius' => 1109.195556640625,
            ),
            151 => 
            array (
                'id' => 2152,
                'name' => 'Budhwar Peth',
                'city_id' => '2',
                'lat' => 18.5158792,
                'long' => 73.85803969999999,
                'radius' => 537.425048828125,
            ),
            152 => 
            array (
                'id' => 2153,
                'name' => 'Bund Garden Road',
                'city_id' => '2',
                'lat' => 18.5314397,
                'long' => 73.87913879999999,
                'radius' => 1276.0003662109375,
            ),
            153 => 
            array (
                'id' => 2154,
                'name' => 'Camp',
                'city_id' => '2',
                'lat' => 18.5122306,
                'long' => 73.88601,
                'radius' => 3340.38525390625,
            ),
            154 => 
            array (
                'id' => 2155,
                'name' => 'Chakan',
                'city_id' => '2',
                'lat' => 18.7602664,
                'long' => 73.86303459999999,
                'radius' => 1799.903076171875,
            ),
            155 => 
            array (
                'id' => 2156,
                'name' => 'Chikhali',
                'city_id' => '2',
                'lat' => 18.6710369,
                'long' => 73.8242621,
                'radius' => 4276.87109375,
            ),
            156 => 
            array (
                'id' => 2157,
                'name' => 'Chinchwad East',
                'city_id' => '2',
                'lat' => 18.5122493,
                'long' => 73.8799514,
                'radius' => 685.8641357421875,
            ),
            157 => 
            array (
                'id' => 2158,
                'name' => 'Chinchwadgaon',
                'city_id' => '2',
                'lat' => 18.6276082,
                'long' => 73.78088,
                'radius' => 976.240234375,
            ),
            158 => 
            array (
                'id' => 2159,
                'name' => 'Dapodi',
                'city_id' => '2',
                'lat' => 18.5866965,
                'long' => 73.8316141,
                'radius' => 1947.412353515625,
            ),
            159 => 
            array (
                'id' => 2160,
                'name' => 'Dattawadi',
                'city_id' => '2',
                'lat' => 18.4929052,
                'long' => 73.836238,
                'radius' => 1667.0693359375,
            ),
            160 => 
            array (
                'id' => 2161,
                'name' => 'Daund',
                'city_id' => '2',
                'lat' => 18.4592892,
                'long' => 74.5873348,
                'radius' => 3461.55615234375,
            ),
            161 => 
            array (
                'id' => 2162,
                'name' => 'Deccan Gymkhana',
                'city_id' => '2',
                'lat' => 18.5175566,
                'long' => 73.84165999999999,
                'radius' => 1510.9423828125,
            ),
            162 => 
            array (
                'id' => 2163,
                'name' => 'Dehu Road',
                'city_id' => '2',
                'lat' => 18.6868159,
                'long' => 73.7419017,
                'radius' => 5660.66943359375,
            ),
            163 => 
            array (
                'id' => 2164,
                'name' => 'Dhankawadi',
                'city_id' => '2',
                'lat' => 18.4616211,
                'long' => 73.8505315,
                'radius' => 1997.176025390625,
            ),
            164 => 
            array (
                'id' => 2165,
                'name' => 'Dhayari',
                'city_id' => '2',
                'lat' => 18.4422181,
                'long' => 73.8095839,
                'radius' => 2733.48291015625,
            ),
            165 => 
            array (
                'id' => 2166,
                'name' => 'Dhole Patil Road',
                'city_id' => '2',
                'lat' => 18.5349903,
                'long' => 73.8762555,
                'radius' => 422.63104248046875,
            ),
            166 => 
            array (
                'id' => 2167,
                'name' => 'Erandwana',
                'city_id' => '2',
                'lat' => 18.5085936,
                'long' => 73.831721,
                'radius' => 1616.5115966796875,
            ),
            167 => 
            array (
                'id' => 2168,
                'name' => 'Fatima Nagar',
                'city_id' => '2',
                'lat' => 18.5042104,
                'long' => 73.90144389999999,
                'radius' => 375.73284912109375,
            ),
            168 => 
            array (
                'id' => 2169,
                'name' => 'Fergusson College Road',
                'city_id' => '2',
                'lat' => 18.523142,
                'long' => 73.8410157,
                'radius' => 1015.6910400390625,
            ),
            169 => 
            array (
                'id' => 2170,
                'name' => 'Ganesh Peth',
                'city_id' => '2',
                'lat' => 18.5140531,
                'long' => 73.8678766,
                'radius' => 742.1991577148438,
            ),
            170 => 
            array (
                'id' => 2171,
                'name' => 'Ganeshkhind',
                'city_id' => '2',
                'lat' => 18.5595857,
                'long' => 73.8170821,
                'radius' => 2207.521728515625,
            ),
            171 => 
            array (
                'id' => 2172,
                'name' => 'Ghorpade Peth',
                'city_id' => '2',
                'lat' => 18.5019469,
                'long' => 73.86629169999999,
                'radius' => 568.103271484375,
            ),
            172 => 
            array (
                'id' => 2173,
                'name' => 'Ghorpuri',
                'city_id' => '2',
                'lat' => 18.5280793,
                'long' => 73.8940916,
                'radius' => 206.70761108398438,
            ),
            173 => 
            array (
                'id' => 2174,
                'name' => 'Gokhale Nagar',
                'city_id' => '2',
                'lat' => 18.5296313,
                'long' => 73.8213213,
                'radius' => 1863.538818359375,
            ),
            174 => 
            array (
                'id' => 2175,
                'name' => 'Gultekdi',
                'city_id' => '2',
                'lat' => 18.4876541,
                'long' => 73.86836970000002,
                'radius' => 1656.058837890625,
            ),
            175 => 
            array (
                'id' => 2176,
                'name' => 'Guruwar Peth',
                'city_id' => '2',
                'lat' => 18.5063909,
                'long' => 73.8602841,
                'radius' => 555.8798828125,
            ),
            176 => 
            array (
                'id' => 2177,
                'name' => 'Hadapsar',
                'city_id' => '2',
                'lat' => 18.5089197,
                'long' => 73.9260261,
                'radius' => 5193.89599609375,
            ),
            177 => 
            array (
                'id' => 2178,
                'name' => 'Hadapsar Indl Estate',
                'city_id' => '2',
                'lat' => 18.5111574,
                'long' => 73.9160571,
                'radius' => 1235.39306640625,
            ),
            178 => 
            array (
                'id' => 2179,
                'name' => 'Haveli',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            179 => 
            array (
                'id' => 2180,
                'name' => 'Hingane Khurd',
                'city_id' => '2',
                'lat' => 18.4819732,
                'long' => 73.8279381,
                'radius' => 875.9957275390625,
            ),
            180 => 
            array (
                'id' => 2181,
                'name' => 'Hingne Khurd',
                'city_id' => '2',
                'lat' => 18.4819732,
                'long' => 73.8279381,
                'radius' => 875.9957275390625,
            ),
            181 => 
            array (
                'id' => 2182,
                'name' => 'Hinjewadi',
                'city_id' => '2',
                'lat' => 18.597059,
                'long' => 73.7188233,
                'radius' => 5361.01806640625,
            ),
            182 => 
            array (
                'id' => 2183,
                'name' => 'Indrayani Darshan Dehu Road',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            183 => 
            array (
                'id' => 2184,
                'name' => 'Jangali Maharaj Road',
                'city_id' => '2',
                'lat' => 18.5211517,
                'long' => 73.846734,
                'radius' => 893.080322265625,
            ),
            184 => 
            array (
                'id' => 2185,
                'name' => 'Junnar',
                'city_id' => '2',
                'lat' => 19.2031842,
                'long' => 73.87425,
                'radius' => 1942.3348388671875,
            ),
            185 => 
            array (
                'id' => 2186,
                'name' => 'Kalewadi',
                'city_id' => '2',
                'lat' => 18.406612,
                'long' => 74.6839545,
                'radius' => 1937.8128662109375,
            ),
            186 => 
            array (
                'id' => 2187,
                'name' => 'Kalyani Nagar',
                'city_id' => '2',
                'lat' => 18.5463286,
                'long' => 73.9033139,
                'radius' => 1543.833740234375,
            ),
            187 => 
            array (
                'id' => 2188,
                'name' => 'Karve Nagar',
                'city_id' => '2',
                'lat' => 18.4897587,
                'long' => 73.8202962,
                'radius' => 1814.843994140625,
            ),
            188 => 
            array (
                'id' => 2189,
                'name' => 'Karve Road',
                'city_id' => '2',
                'lat' => 18.5032391,
                'long' => 73.81982289999999,
                'radius' => 3051.421142578125,
            ),
            189 => 
            array (
                'id' => 2190,
                'name' => 'Kasarwadi',
                'city_id' => '2',
                'lat' => 18.6060873,
                'long' => 73.8227917,
                'radius' => 1617.473876953125,
            ),
            190 => 
            array (
                'id' => 2191,
                'name' => 'Khadaki',
                'city_id' => '2',
                'lat' => 18.5699361,
                'long' => 73.8506427,
                'radius' => 3032.53564453125,
            ),
            191 => 
            array (
                'id' => 2192,
                'name' => 'Khadki',
                'city_id' => '2',
                'lat' => 18.5699361,
                'long' => 73.8506427,
                'radius' => 3032.53564453125,
            ),
            192 => 
            array (
                'id' => 2193,
                'name' => 'Kharadi',
                'city_id' => '2',
                'lat' => 18.5514501,
                'long' => 73.9347856,
                'radius' => 3535.712646484375,
            ),
            193 => 
            array (
                'id' => 2194,
                'name' => 'Khed',
                'city_id' => '2',
                'lat' => 18.840499,
                'long' => 73.907195,
                'radius' => 2053.506591796875,
            ),
            194 => 
            array (
                'id' => 2195,
                'name' => 'Kondhwa',
                'city_id' => '2',
                'lat' => 18.4770906,
                'long' => 73.89068689999999,
                'radius' => 3355.790283203125,
            ),
            195 => 
            array (
                'id' => 2196,
                'name' => 'Kondhwa Budruk',
                'city_id' => '2',
                'lat' => 18.4465521,
                'long' => 73.8743352,
                'radius' => 4262.099609375,
            ),
            196 => 
            array (
                'id' => 2197,
                'name' => 'Kondhwa Khurd',
                'city_id' => '2',
                'lat' => 18.4770906,
                'long' => 73.89068689999999,
                'radius' => 3355.790283203125,
            ),
            197 => 
            array (
                'id' => 2198,
                'name' => 'Koregaon Park',
                'city_id' => '2',
                'lat' => 18.5362084,
                'long' => 73.8939748,
                'radius' => 1466.8829345703125,
            ),
            198 => 
            array (
                'id' => 2199,
                'name' => 'Koregaon Park Road 1',
                'city_id' => '2',
                'lat' => 18.5360121,
                'long' => 73.8860433,
                'radius' => 206.70306396484375,
            ),
            199 => 
            array (
                'id' => 2200,
                'name' => 'Law College Road',
                'city_id' => '2',
                'lat' => 18.5142961,
                'long' => 73.8287303,
                'radius' => 692.4683227539062,
            ),
            200 => 
            array (
                'id' => 2201,
                'name' => 'Laxmi Road',
                'city_id' => '2',
                'lat' => 18.5158071,
                'long' => 73.8574421,
                'radius' => 1450.418212890625,
            ),
            201 => 
            array (
                'id' => 2202,
                'name' => 'Lonavala',
                'city_id' => '2',
                'lat' => 18.7546171,
                'long' => 73.4062342,
                'radius' => 7114.03662109375,
            ),
            202 => 
            array (
                'id' => 2203,
                'name' => 'Loni Kalbhor',
                'city_id' => '2',
                'lat' => 18.4878505,
                'long' => 74.0234138,
                'radius' => 3380.553955078125,
            ),
            203 => 
            array (
                'id' => 2204,
                'name' => 'Lulla Nagar',
                'city_id' => '2',
                'lat' => 18.4847906,
                'long' => 73.885986,
                'radius' => 1063.32763671875,
            ),
            204 => 
            array (
                'id' => 2205,
                'name' => 'Mahatma Gandhi Road',
                'city_id' => '2',
                'lat' => 18.5130658,
                'long' => 73.87881150000001,
                'radius' => 813.4732666015625,
            ),
            205 => 
            array (
                'id' => 2206,
                'name' => 'Mangalwar Peth',
                'city_id' => '2',
                'lat' => 18.5240566,
                'long' => 73.8646945,
                'radius' => 527.0316772460938,
            ),
            206 => 
            array (
                'id' => 2207,
                'name' => 'Manik Baug',
                'city_id' => '2',
                'lat' => 18.4745254,
                'long' => 73.82095360000001,
                'radius' => 303.0208435058594,
            ),
            207 => 
            array (
                'id' => 2208,
                'name' => 'Market Yard',
                'city_id' => '2',
                'lat' => 18.4876541,
                'long' => 73.86836970000002,
                'radius' => 1228.3914794921875,
            ),
            208 => 
            array (
                'id' => 2209,
                'name' => 'Model Colony',
                'city_id' => '2',
                'lat' => 18.5324846,
                'long' => 73.8374954,
                'radius' => 1076.169921875,
            ),
            209 => 
            array (
                'id' => 2210,
                'name' => 'Mukund Nagar',
                'city_id' => '2',
                'lat' => 18.4957425,
                'long' => 73.8611312,
                'radius' => 555.8865966796875,
            ),
            210 => 
            array (
                'id' => 2211,
                'name' => 'Mundhawa',
                'city_id' => '2',
                'lat' => 18.5321814,
                'long' => 73.9331528,
                'radius' => 3518.891357421875,
            ),
            211 => 
            array (
                'id' => 2212,
                'name' => 'Nagar Road',
                'city_id' => '2',
                'lat' => 18.5661226,
                'long' => 73.9461312,
                'radius' => 63.202781677246094,
            ),
            212 => 
            array (
                'id' => 2213,
                'name' => 'Nana Peth',
                'city_id' => '2',
                'lat' => 18.5144313,
                'long' => 73.86538329999999,
                'radius' => 870.2017822265625,
            ),
            213 => 
            array (
                'id' => 2214,
                'name' => 'Narayan Peth',
                'city_id' => '2',
                'lat' => 18.5154741,
                'long' => 73.8500717,
                'radius' => 817.0360717773438,
            ),
            214 => 
            array (
                'id' => 2215,
                'name' => 'Narayangaon',
                'city_id' => '2',
                'lat' => 19.1229038,
                'long' => 73.977126,
                'radius' => 4887.671875,
            ),
            215 => 
            array (
                'id' => 2216,
                'name' => 'Navi Peth',
                'city_id' => '2',
                'lat' => 18.506821,
                'long' => 73.840436,
                'radius' => 680.1828002929688,
            ),
            216 => 
            array (
                'id' => 2217,
                'name' => 'Nigdi',
                'city_id' => '2',
                'lat' => 18.6571325,
                'long' => 73.7659068,
                'radius' => 4027.51416015625,
            ),
            217 => 
            array (
                'id' => 2218,
                'name' => 'Padmavati',
                'city_id' => '2',
                'lat' => 18.476679,
                'long' => 73.8580788,
                'radius' => 747.4602661132812,
            ),
            218 => 
            array (
                'id' => 2219,
                'name' => 'Parvati',
                'city_id' => '2',
                'lat' => 18.4949019,
                'long' => 73.8441118,
                'radius' => 940.7977294921875,
            ),
            219 => 
            array (
                'id' => 2220,
                'name' => 'Pashan',
                'city_id' => '2',
                'lat' => 18.5416299,
                'long' => 73.8024097,
                'radius' => 6827.96728515625,
            ),
            220 => 
            array (
                'id' => 2221,
                'name' => 'Paud Road',
                'city_id' => '2',
                'lat' => 18.5047184,
                'long' => 73.7647293,
                'radius' => 6539.578125,
            ),
            221 => 
            array (
                'id' => 2222,
                'name' => 'Phursungi',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            222 => 
            array (
                'id' => 2223,
                'name' => 'Pimpri',
                'city_id' => '2',
                'lat' => 18.6297811,
                'long' => 73.7997094,
                'radius' => 14943.609375,
            ),
            223 => 
            array (
                'id' => 2224,
                'name' => 'Pirangut',
                'city_id' => '2',
                'lat' => 18.5114767,
                'long' => 73.68010919999999,
                'radius' => 2993.502685546875,
            ),
            224 => 
            array (
                'id' => 2225,
                'name' => 'Prabhat Road',
                'city_id' => '2',
                'lat' => 18.5140054,
                'long' => 73.8352924,
                'radius' => 747.7416381835938,
            ),
            225 => 
            array (
                'id' => 2226,
                'name' => 'Pune Railway Station',
                'city_id' => '2',
                'lat' => 18.5284242,
                'long' => 73.87386459999999,
                'radius' => 206.70741271972656,
            ),
            226 => 
            array (
                'id' => 2227,
                'name' => 'Rasta Peth',
                'city_id' => '2',
                'lat' => 18.5176333,
                'long' => 73.8671232,
                'radius' => 590.161865234375,
            ),
            227 => 
            array (
                'id' => 2228,
                'name' => 'Raviwar Peth',
                'city_id' => '2',
                'lat' => 18.517454,
                'long' => 73.8612411,
                'radius' => 796.4077758789062,
            ),
            228 => 
            array (
                'id' => 2229,
                'name' => 'Sadashiv Peth',
                'city_id' => '2',
                'lat' => 18.5083218,
                'long' => 73.8465648,
                'radius' => 1335.5074462890625,
            ),
            229 => 
            array (
                'id' => 2230,
                'name' => 'Sahakar Nagar',
                'city_id' => '2',
                'lat' => 18.4756393,
                'long' => 73.8544034,
                'radius' => 323.4742736816406,
            ),
            230 => 
            array (
                'id' => 2231,
                'name' => 'Salunke Vihar',
                'city_id' => '2',
                'lat' => 18.4799816,
                'long' => 73.9043836,
                'radius' => 509.10186767578125,
            ),
            231 => 
            array (
                'id' => 2232,
                'name' => 'Sanghavi',
                'city_id' => '2',
                'lat' => 18.1705003,
                'long' => 73.6624507,
                'radius' => 2961.646240234375,
            ),
            232 => 
            array (
                'id' => 2233,
                'name' => 'Sasoon Road',
                'city_id' => '2',
                'lat' => 18.5311703,
                'long' => 73.8760712,
                'radius' => 454.8355407714844,
            ),
            233 => 
            array (
                'id' => 2234,
                'name' => 'Satara Road',
                'city_id' => '2',
                'lat' => 18.4775848,
                'long' => 73.8572817,
                'radius' => 2596.961669921875,
            ),
            234 => 
            array (
                'id' => 2235,
                'name' => 'Senapati Bapat Marg',
                'city_id' => '2',
                'lat' => 18.5146812,
                'long' => 73.8669603,
                'radius' => 194.24356079101562,
            ),
            235 => 
            array (
                'id' => 2236,
                'name' => 'Shaniwar Peth',
                'city_id' => '2',
                'lat' => 18.5194431,
                'long' => 73.85193559999999,
                'radius' => 945.8492431640625,
            ),
            236 => 
            array (
                'id' => 2237,
                'name' => 'Shivaji Nagar',
                'city_id' => '2',
                'lat' => 18.5308225,
                'long' => 73.8474647,
                'radius' => 2950.9677734375,
            ),
            237 => 
            array (
                'id' => 2238,
                'name' => 'Shukrawar Peth',
                'city_id' => '2',
                'lat' => 18.5083204,
                'long' => 73.8567002,
                'radius' => 923.4117431640625,
            ),
            238 => 
            array (
                'id' => 2239,
                'name' => 'Sinhagad',
                'city_id' => '2',
                'lat' => 18.4572124,
                'long' => 73.8037326,
                'radius' => 7219.740234375,
            ),
            239 => 
            array (
                'id' => 2240,
                'name' => 'Sinhagad Road',
                'city_id' => '2',
                'lat' => 18.4660941,
                'long' => 73.81680209999999,
                'radius' => 5535.92333984375,
            ),
            240 => 
            array (
                'id' => 2241,
                'name' => 'Somwar Peth',
                'city_id' => '2',
                'lat' => 18.5214325,
                'long' => 73.86763470000001,
                'radius' => 727.3846435546875,
            ),
            241 => 
            array (
                'id' => 2242,
                'name' => 'Talegaon Dabhade',
                'city_id' => '2',
                'lat' => 18.7391977,
                'long' => 73.6830521,
                'radius' => 5391.3291015625,
            ),
            242 => 
            array (
                'id' => 2243,
                'name' => 'Thergaon',
                'city_id' => '2',
                'lat' => 18.6141133,
                'long' => 73.7726814,
                'radius' => 2106.574462890625,
            ),
            243 => 
            array (
                'id' => 2244,
                'name' => 'Tilak Road',
                'city_id' => '2',
                'lat' => 18.4723217,
                'long' => 73.8265101,
                'radius' => 67.5762710571289,
            ),
            244 => 
            array (
                'id' => 2245,
                'name' => 'Uruli',
                'city_id' => '2',
                'lat' => 18.4874257,
                'long' => 74.1333715,
                'radius' => 3344.4833984375,
            ),
            245 => 
            array (
                'id' => 2246,
                'name' => 'Vadgaon Sheri',
                'city_id' => '2',
                'lat' => 18.5527193,
                'long' => 73.920817,
                'radius' => 2370.44189453125,
            ),
            246 => 
            array (
                'id' => 2247,
                'name' => 'Vishrantwadi',
                'city_id' => '2',
                'lat' => 18.5726054,
                'long' => 73.8782079,
                'radius' => 840.298828125,
            ),
            247 => 
            array (
                'id' => 2248,
                'name' => 'Wagholi',
                'city_id' => '2',
                'lat' => 18.579305,
                'long' => 73.98234529999999,
                'radius' => 3923.3017578125,
            ),
            248 => 
            array (
                'id' => 2249,
                'name' => 'Wakad',
                'city_id' => '2',
                'lat' => 18.5989428,
                'long' => 73.7652715,
                'radius' => 3232.97314453125,
            ),
            249 => 
            array (
                'id' => 2250,
                'name' => 'Wakadewadi',
                'city_id' => '2',
                'lat' => 18.5424091,
                'long' => 73.8521981,
                'radius' => 1020.831787109375,
            ),
            250 => 
            array (
                'id' => 2251,
                'name' => 'Wanowarie',
                'city_id' => '2',
                'lat' => 18.4828904,
                'long' => 73.9016832,
                'radius' => 3732.792236328125,
            ),
            251 => 
            array (
                'id' => 2252,
                'name' => 'Wanowri',
                'city_id' => '2',
                'lat' => 18.4828904,
                'long' => 73.9016832,
                'radius' => 3732.792236328125,
            ),
            252 => 
            array (
                'id' => 2253,
                'name' => 'Wanworie',
                'city_id' => '2',
                'lat' => 18.4828904,
                'long' => 73.9016832,
                'radius' => 3732.792236328125,
            ),
            253 => 
            array (
                'id' => 2254,
                'name' => 'Armament',
                'city_id' => '2',
                'lat' => 18.5504471,
                'long' => 73.82058599999999,
                'radius' => 1010.5975341796875,
            ),
            254 => 
            array (
                'id' => 2255,
                'name' => 'Bhosarigaon',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            255 => 
            array (
                'id' => 2256,
                'name' => 'Dighi Camp',
                'city_id' => '2',
                'lat' => 18.588357,
                'long' => 73.8746865,
                'radius' => 206.6730499267578,
            ),
            256 => 
            array (
                'id' => 2257,
                'name' => 'Ex Servicemen Colony',
                'city_id' => '2',
                'lat' => 18.5110663,
                'long' => 73.81967639999999,
                'radius' => 206.71734619140625,
            ),
            257 => 
            array (
                'id' => 2258,
                'name' => 'I.A.T. Pune',
                'city_id' => '2',
                'lat' => 18.5204303,
                'long' => 73.8567437,
                'radius' => 18744.615234375,
            ),
            258 => 
            array (
                'id' => 2259,
                'name' => 'Khadakwasla',
                'city_id' => '2',
                'lat' => 18.4454128,
                'long' => 73.7801447,
                'radius' => 2006.369140625,
            ),
            259 => 
            array (
                'id' => 2260,
                'name' => 'Mundhwa',
                'city_id' => '2',
                'lat' => 18.5321814,
                'long' => 73.9331528,
                'radius' => 3518.891357421875,
            ),
            260 => 
            array (
                'id' => 2261,
                'name' => 'Navsahyadri',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            261 => 
            array (
                'id' => 2262,
                'name' => 'Pimpri Colony',
                'city_id' => '2',
                'lat' => 18.6239079,
                'long' => 73.8124984,
                'radius' => 4601.478515625,
            ),
            262 => 
            array (
                'id' => 2263,
                'name' => 'Pimpri Chinchwad',
                'city_id' => '2',
                'lat' => 18.6297811,
                'long' => 73.7997094,
                'radius' => 14943.609375,
            ),
            263 => 
            array (
                'id' => 2264,
                'name' => 'Pune City',
                'city_id' => '2',
                'lat' => 18.5204303,
                'long' => 73.8567437,
                'radius' => 18744.615234375,
            ),
            264 => 
            array (
                'id' => 2265,
                'name' => 'Pune',
                'city_id' => '2',
                'lat' => 18.5204303,
                'long' => 73.8567437,
                'radius' => 18744.615234375,
            ),
            265 => 
            array (
                'id' => 2266,
                'name' => 'Range Hill',
                'city_id' => '2',
                'lat' => 18.5542148,
                'long' => 73.8389657,
                'radius' => 1567.8585205078125,
            ),
            266 => 
            array (
                'id' => 2267,
                'name' => 'Shivaji Housing Society',
                'city_id' => '2',
                'lat' => 18.5184473,
                'long' => 73.8339132,
                'radius' => 2057.412841796875,
            ),
            267 => 
            array (
                'id' => 2268,
                'name' => 'S.P. College',
                'city_id' => '2',
                'lat' => 18.5074212,
                'long' => 73.84968289999999,
                'radius' => 206.71942138671875,
            ),
            268 => 
            array (
                'id' => 2269,
                'name' => 'Secondary School Certificate',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            269 => 
            array (
                'id' => 2270,
                'name' => 'Wadgaon Budruk',
                'city_id' => '2',
                'lat' => 18.4666576,
                'long' => 73.8258668,
                'radius' => 2494.904541015625,
            ),
            270 => 
            array (
                'id' => 2271,
                'name' => 'Wanawadi',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            271 => 
            array (
                'id' => 2272,
                'name' => 'Warje Malwadi',
                'city_id' => '2',
                'lat' => 18.4796627,
                'long' => 73.80402699999999,
                'radius' => 1910.474853515625,
            ),
            272 => 
            array (
                'id' => 2273,
                'name' => 'Dwarka',
                'city_id' => '1',
                'lat' => 28.5921401,
                'long' => 77.0460481,
                'radius' => 8206.3173828125,
            ),
            273 => 
            array (
                'id' => 2274,
                'name' => 'Rohini',
                'city_id' => '1',
                'lat' => 28.7494716,
                'long' => 77.0565333,
                'radius' => 10032.8037109375,
            ),
            274 => 
            array (
                'id' => 2275,
                'name' => 'Pitampura',
                'city_id' => '1',
                'lat' => 28.69899839999999,
                'long' => 77.1384174,
                'radius' => 4447.34716796875,
            ),
            275 => 
            array (
                'id' => 2276,
                'name' => 'Greater Kailash',
                'city_id' => '1',
                'lat' => 28.5428238,
                'long' => 77.23954789999999,
                'radius' => 2204.814697265625,
            ),
            276 => 
            array (
                'id' => 2277,
                'name' => 'Lajpat Nagar',
                'city_id' => '1',
                'lat' => 28.5676955,
                'long' => 77.2432721,
                'radius' => 1748.4527587890625,
            ),
            277 => 
            array (
                'id' => 2278,
                'name' => 'Paschim Vihar',
                'city_id' => '1',
                'lat' => 28.66866719999999,
                'long' => 77.10194,
                'radius' => 3005.3759765625,
            ),
            278 => 
            array (
                'id' => 2279,
                'name' => 'Janakpuri',
                'city_id' => '1',
                'lat' => 28.621899,
                'long' => 77.08783849999999,
                'radius' => 3038.916015625,
            ),
            279 => 
            array (
                'id' => 2280,
                'name' => 'Uttam Nagar',
                'city_id' => '1',
                'lat' => 28.6212718,
                'long' => 77.0613266,
                'radius' => 2722.578369140625,
            ),
            280 => 
            array (
                'id' => 2281,
                'name' => 'Vasundhara Enclave',
                'city_id' => '1',
                'lat' => 28.5990303,
                'long' => 77.31592959999999,
                'radius' => 1459.5777587890625,
            ),
            281 => 
            array (
                'id' => 2282,
                'name' => 'Vasant Vihar',
                'city_id' => '1',
                'lat' => 28.560323,
                'long' => 77.16172809999999,
                'radius' => 1967.7747802734375,
            ),
            282 => 
            array (
                'id' => 2283,
                'name' => 'Mayur Vihar',
                'city_id' => '1',
                'lat' => 28.6065926,
                'long' => 77.2936763,
                'radius' => 2219.482666015625,
            ),
            283 => 
            array (
                'id' => 2284,
                'name' => 'Model Town',
                'city_id' => '1',
                'lat' => 28.7158727,
                'long' => 77.1910738,
                'radius' => 2269.427001953125,
            ),
            284 => 
            array (
                'id' => 2285,
                'name' => 'South Extension',
                'city_id' => '1',
                'lat' => 28.5698009,
                'long' => 77.2195028,
                'radius' => 1905.5877685546875,
            ),
            285 => 
            array (
                'id' => 2286,
                'name' => 'East Of Kailash',
                'city_id' => '1',
                'lat' => 28.5583464,
                'long' => 77.2530829,
                'radius' => 1519.479736328125,
            ),
            286 => 
            array (
                'id' => 2287,
                'name' => 'Punjabi Bagh',
                'city_id' => '1',
                'lat' => 28.66197529999999,
                'long' => 77.1241557,
                'radius' => 966.4614868164062,
            ),
            287 => 
            array (
                'id' => 2288,
                'name' => 'Tilak Nagar',
                'city_id' => '1',
                'lat' => 28.6390693,
                'long' => 77.0867741,
                'radius' => 2183.45751953125,
            ),
            288 => 
            array (
                'id' => 2289,
                'name' => 'Adarsh Nagar',
                'city_id' => '1',
                'lat' => 28.7192604,
                'long' => 77.173582,
                'radius' => 676.17041015625,
            ),
            289 => 
            array (
                'id' => 2290,
                'name' => 'Adhchini',
                'city_id' => '1',
                'lat' => 28.5363184,
                'long' => 77.19752299999999,
                'radius' => 1260.243896484375,
            ),
            290 => 
            array (
                'id' => 2291,
                'name' => 'Agra-Mathura Road',
                'city_id' => '1',
                'lat' => 27.218533,
                'long' => 77.936497,
                'radius' => 200.73129272460938,
            ),
            291 => 
            array (
                'id' => 2292,
                'name' => 'Ajmeri Gate',
                'city_id' => '1',
                'lat' => 28.642701,
                'long' => 77.2247081,
                'radius' => 1404.6165771484375,
            ),
            292 => 
            array (
                'id' => 2293,
                'name' => 'Alaknanda',
                'city_id' => '1',
                'lat' => 28.5304408,
                'long' => 77.2505733,
                'radius' => 1270.1627197265625,
            ),
            293 => 
            array (
                'id' => 2294,
                'name' => 'Ali Pur',
                'city_id' => '1',
                'lat' => 28.7972263,
                'long' => 77.13313629999999,
                'radius' => 3350.824951171875,
            ),
            294 => 
            array (
                'id' => 2295,
                'name' => 'Ambedkar Nagar',
                'city_id' => '1',
                'lat' => 28.5183848,
                'long' => 77.2369229,
                'radius' => 742.7921142578125,
            ),
            295 => 
            array (
                'id' => 2296,
                'name' => 'Ambedkar Road',
                'city_id' => '1',
                'lat' => 28.7160128,
                'long' => 77.2988534,
                'radius' => 844.3995971679688,
            ),
            296 => 
            array (
                'id' => 2297,
                'name' => 'Ambedkar Road- Gaziabad',
                'city_id' => '1',
                'lat' => 28.7160128,
                'long' => 77.2988534,
                'radius' => 844.3995971679688,
            ),
            297 => 
            array (
                'id' => 2298,
                'name' => 'Anand Niketan',
                'city_id' => '1',
                'lat' => 28.5789383,
                'long' => 77.16505269999999,
                'radius' => 900.5918579101562,
            ),
            298 => 
            array (
                'id' => 2299,
                'name' => 'Anand Parbat',
                'city_id' => '1',
                'lat' => 28.6649414,
                'long' => 77.1747773,
                'radius' => 1383.680419921875,
            ),
            299 => 
            array (
                'id' => 2300,
                'name' => 'Anand Parbat Industrial Area',
                'city_id' => '1',
                'lat' => 28.6609414,
                'long' => 77.1718822,
                'radius' => 615.187255859375,
            ),
            300 => 
            array (
                'id' => 2301,
                'name' => 'Anand Vihar',
                'city_id' => '1',
                'lat' => 28.650218,
                'long' => 77.30270589999999,
                'radius' => 2423.1494140625,
            ),
            301 => 
            array (
                'id' => 2302,
                'name' => 'Andrews Ganj',
                'city_id' => '1',
                'lat' => 28.5626799,
                'long' => 77.2275823,
                'radius' => 860.1157836914062,
            ),
            302 => 
            array (
                'id' => 2303,
                'name' => 'Arjun Nagar',
                'city_id' => '1',
                'lat' => 28.560589,
                'long' => 77.1981184,
                'radius' => 376.01324462890625,
            ),
            303 => 
            array (
                'id' => 2304,
                'name' => 'Asaf Ali Road',
                'city_id' => '1',
                'lat' => 28.6423374,
                'long' => 77.23205569999999,
                'radius' => 944.4317626953125,
            ),
            304 => 
            array (
                'id' => 2305,
                'name' => 'Ashok Nagar',
                'city_id' => '1',
                'lat' => 28.6373773,
                'long' => 77.1014442,
                'radius' => 777.9038696289062,
            ),
            305 => 
            array (
                'id' => 2306,
                'name' => 'Ashok Vihar',
                'city_id' => '1',
                'lat' => 28.6884549,
                'long' => 77.17575029999999,
                'radius' => 2761.841796875,
            ),
            306 => 
            array (
                'id' => 2307,
                'name' => 'Ashok Vihar 1',
                'city_id' => '1',
                'lat' => 28.6916776,
                'long' => 77.167365,
                'radius' => 776.7454223632812,
            ),
            307 => 
            array (
                'id' => 2308,
                'name' => 'Ashok Vihar Phase 1',
                'city_id' => '1',
                'lat' => 28.6916606,
                'long' => 77.16720939999999,
                'radius' => 1232.5911865234375,
            ),
            308 => 
            array (
                'id' => 2309,
                'name' => 'Ashok Vihar Phase 2',
                'city_id' => '1',
                'lat' => 28.6958633,
                'long' => 77.1736794,
                'radius' => 732.9159545898438,
            ),
            309 => 
            array (
                'id' => 2310,
                'name' => 'Ashok Vihar Phase 3',
                'city_id' => '1',
                'lat' => 28.6944491,
                'long' => 77.1781451,
                'radius' => 1406.0435791015625,
            ),
            310 => 
            array (
                'id' => 2311,
                'name' => 'Ashram',
                'city_id' => '1',
                'lat' => 28.5736253,
                'long' => 77.2559612,
                'radius' => 497.1899108886719,
            ),
            311 => 
            array (
                'id' => 2312,
                'name' => 'Atta',
                'city_id' => '1',
                'lat' => 28.6729923,
                'long' => 77.2725505,
                'radius' => 282.35528564453125,
            ),
            312 => 
            array (
                'id' => 2313,
                'name' => 'Aurangzeb Road',
                'city_id' => '1',
                'lat' => 28.5996621,
                'long' => 77.2156139,
                'radius' => 915.6968383789062,
            ),
            313 => 
            array (
                'id' => 2314,
                'name' => 'Aurobindo Marg',
                'city_id' => '1',
                'lat' => 28.5564305,
                'long' => 77.2063093,
                'radius' => 4047.979736328125,
            ),
            314 => 
            array (
                'id' => 2315,
                'name' => 'Azad Market',
                'city_id' => '1',
                'lat' => 28.6630531,
                'long' => 77.2116513,
                'radius' => 404.4577941894531,
            ),
            315 => 
            array (
                'id' => 2316,
                'name' => 'Azad Nagar',
                'city_id' => '1',
                'lat' => 28.5987228,
                'long' => 77.1562567,
                'radius' => 386.4324645996094,
            ),
            316 => 
            array (
                'id' => 2317,
                'name' => 'Azad Nagar East',
                'city_id' => '1',
                'lat' => 28.6636157,
                'long' => 77.2825378,
                'radius' => 329.8156433105469,
            ),
            317 => 
            array (
                'id' => 2318,
                'name' => 'Azadpur',
                'city_id' => '1',
                'lat' => 28.7102951,
                'long' => 77.1752448,
                'radius' => 1652.89111328125,
            ),
            318 => 
            array (
                'id' => 2319,
                'name' => 'Babarpur',
                'city_id' => '1',
                'lat' => 28.6876088,
                'long' => 77.2821608,
                'radius' => 1175.294677734375,
            ),
            319 => 
            array (
                'id' => 2320,
                'name' => 'Badarpur',
                'city_id' => '1',
                'lat' => 28.5039606,
                'long' => 77.30182789999999,
                'radius' => 4828.609375,
            ),
            320 => 
            array (
                'id' => 2321,
                'name' => 'Badarpur Border',
                'city_id' => '1',
                'lat' => 28.5039606,
                'long' => 77.30182789999999,
                'radius' => 4828.609375,
            ),
            321 => 
            array (
                'id' => 2322,
                'name' => 'Badarpur Pahari',
                'city_id' => '1',
                'lat' => 28.4947856,
                'long' => 77.3058772,
                'radius' => 704.9359741210938,
            ),
            322 => 
            array (
                'id' => 2323,
                'name' => 'Badli',
                'city_id' => '1',
                'lat' => 28.7324287,
                'long' => 77.1442022,
                'radius' => 963.90625,
            ),
            323 => 
            array (
                'id' => 2324,
                'name' => 'Badli Industrial Area',
                'city_id' => '1',
                'lat' => 28.7473999,
                'long' => 77.1323373,
                'radius' => 125.80719757080078,
            ),
            324 => 
            array (
                'id' => 2325,
                'name' => 'Bahadur Shah Zafar Marg',
                'city_id' => '1',
                'lat' => 28.6309308,
                'long' => 77.2441075,
                'radius' => 384.5013122558594,
            ),
            325 => 
            array (
                'id' => 2326,
                'name' => 'Bahadurgarh',
                'city_id' => '1',
                'lat' => 28.6924464,
                'long' => 76.9239727,
                'radius' => 4389.80029296875,
            ),
            326 => 
            array (
                'id' => 2327,
                'name' => 'Bajriyan',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            327 => 
            array (
                'id' => 2328,
                'name' => 'Bali Nagar',
                'city_id' => '1',
                'lat' => 28.6549734,
                'long' => 77.1321054,
                'radius' => 937.5831909179688,
            ),
            328 => 
            array (
                'id' => 2329,
                'name' => 'Baljit Nagar',
                'city_id' => '1',
                'lat' => 28.6570858,
                'long' => 77.1610719,
                'radius' => 880.100830078125,
            ),
            329 => 
            array (
                'id' => 2330,
                'name' => 'Ballabgarh',
                'city_id' => '1',
                'lat' => 28.3421598,
                'long' => 77.32559630000002,
                'radius' => 2415.67626953125,
            ),
            330 => 
            array (
                'id' => 2331,
                'name' => 'Ballabhgarh',
                'city_id' => '1',
                'lat' => 28.3421598,
                'long' => 77.32559630000002,
                'radius' => 2415.67626953125,
            ),
            331 => 
            array (
                'id' => 2332,
                'name' => 'Bara Hindu Rao',
                'city_id' => '1',
                'lat' => 28.6613574,
                'long' => 77.2024306,
                'radius' => 558.6239624023438,
            ),
            332 => 
            array (
                'id' => 2333,
                'name' => 'Barakhamba Road',
                'city_id' => '1',
                'lat' => 28.6285887,
                'long' => 77.2269242,
                'radius' => 544.471435546875,
            ),
            333 => 
            array (
                'id' => 2334,
                'name' => 'Basai',
                'city_id' => '1',
                'lat' => 28.4603189,
                'long' => 76.9844026,
                'radius' => 1442.603515625,
            ),
            334 => 
            array (
                'id' => 2335,
                'name' => 'Basai Darapur',
                'city_id' => '1',
                'lat' => 28.6561747,
                'long' => 77.133416,
                'radius' => 758.5039672851562,
            ),
            335 => 
            array (
                'id' => 2336,
                'name' => 'Basai Road',
                'city_id' => '1',
                'lat' => 28.4831455,
                'long' => 76.9087491,
                'radius' => 15337.4248046875,
            ),
            336 => 
            array (
                'id' => 2337,
                'name' => 'Bawana',
                'city_id' => '1',
                'lat' => 28.8054651,
                'long' => 77.0463008,
                'radius' => 4411.46728515625,
            ),
            337 => 
            array (
                'id' => 2338,
                'name' => 'Ber Sarai',
                'city_id' => '1',
                'lat' => 28.54878,
                'long' => 77.1815314,
                'radius' => 401.50885009765625,
            ),
            338 => 
            array (
                'id' => 2339,
                'name' => 'Bhagirath Palace',
                'city_id' => '1',
                'lat' => 28.6572676,
                'long' => 77.2341464,
                'radius' => 259.09765625,
            ),
            339 => 
            array (
                'id' => 2340,
                'name' => 'Bhagirathi Vihar',
                'city_id' => '1',
                'lat' => 28.705882,
                'long' => 77.2785876,
                'radius' => 874.9509887695312,
            ),
            340 => 
            array (
                'id' => 2341,
                'name' => 'Bhagwan Nagar',
                'city_id' => '1',
                'lat' => 28.5791483,
                'long' => 77.2593734,
                'radius' => 297.8472900390625,
            ),
            341 => 
            array (
                'id' => 2342,
                'name' => 'Bhajanpura',
                'city_id' => '1',
                'lat' => 28.7004534,
                'long' => 77.25919379999999,
                'radius' => 806.3802490234375,
            ),
            342 => 
            array (
                'id' => 2343,
                'name' => 'Bhangel',
                'city_id' => '1',
                'lat' => 28.5419128,
                'long' => 77.388143,
                'radius' => 898.0416870117188,
            ),
            343 => 
            array (
                'id' => 2344,
                'name' => 'Bharat Nagar',
                'city_id' => '1',
                'lat' => 28.6392477,
                'long' => 77.2110547,
                'radius' => 369.99810791015625,
            ),
            344 => 
            array (
                'id' => 2345,
                'name' => 'Bhikaji Cama Place',
                'city_id' => '1',
                'lat' => 28.567924,
                'long' => 77.1880786,
                'radius' => 405.1139221191406,
            ),
            345 => 
            array (
                'id' => 2346,
                'name' => 'Bhim Nagar',
                'city_id' => '1',
                'lat' => 28.5523964,
                'long' => 77.201135,
                'radius' => 464.0487365722656,
            ),
            346 => 
            array (
                'id' => 2347,
                'name' => 'Bhiwadi',
                'city_id' => '1',
                'lat' => 28.2088218,
                'long' => 76.84459989999999,
                'radius' => 4668.34814453125,
            ),
            347 => 
            array (
                'id' => 2348,
                'name' => 'Bhogal',
                'city_id' => '1',
                'lat' => 28.584023,
                'long' => 77.2484181,
                'radius' => 667.2675170898438,
            ),
            348 => 
            array (
                'id' => 2349,
                'name' => 'Bhola Nath Nagar',
                'city_id' => '1',
                'lat' => 28.6694348,
                'long' => 77.28720609999999,
                'radius' => 459.5387878417969,
            ),
            349 => 
            array (
                'id' => 2350,
                'name' => 'Bhopura',
                'city_id' => '1',
                'lat' => 28.7006197,
                'long' => 77.3288529,
                'radius' => 719.364990234375,
            ),
            350 => 
            array (
                'id' => 2351,
                'name' => 'Bijwasan',
                'city_id' => '1',
                'lat' => 28.5349468,
                'long' => 77.0557525,
                'radius' => 2337.014404296875,
            ),
            351 => 
            array (
                'id' => 2352,
                'name' => 'Brahm Puri',
                'city_id' => '1',
                'lat' => 28.6840231,
                'long' => 77.26550770000001,
                'radius' => 793.1785888671875,
            ),
            352 => 
            array (
                'id' => 2353,
                'name' => 'Brahmapuri Road',
                'city_id' => '1',
                'lat' => 28.6813612,
                'long' => 77.26758690000001,
                'radius' => 1011.5724487304688,
            ),
            353 => 
            array (
                'id' => 2354,
                'name' => 'Brij Vihar',
                'city_id' => '1',
                'lat' => 28.6705461,
                'long' => 77.33674979999999,
                'radius' => 875.9605102539062,
            ),
            354 => 
            array (
                'id' => 2355,
                'name' => 'Budh Nagar',
                'city_id' => '1',
                'lat' => 28.6329165,
                'long' => 77.1449212,
                'radius' => 705.0916748046875,
            ),
            355 => 
            array (
                'id' => 2356,
                'name' => 'Budh Vihar',
                'city_id' => '1',
                'lat' => 28.7169943,
                'long' => 77.0881034,
                'radius' => 1845.42724609375,
            ),
            356 => 
            array (
                'id' => 2357,
                'name' => 'Bulandshahr Road Industrial Area',
                'city_id' => '1',
                'lat' => 28.6430344,
                'long' => 77.45585539999999,
                'radius' => 2601.3935546875,
            ),
            357 => 
            array (
                'id' => 2358,
                'name' => 'Bulandshahar Road Industrial Area',
                'city_id' => '1',
                'lat' => 28.6430344,
                'long' => 77.45585539999999,
                'radius' => 2601.3935546875,
            ),
            358 => 
            array (
                'id' => 2359,
                'name' => 'Burari',
                'city_id' => '1',
                'lat' => 28.7535212,
                'long' => 77.19482409999999,
                'radius' => 4082.781005859375,
            ),
            359 => 
            array (
                'id' => 2360,
                'name' => 'Chakarpur',
                'city_id' => '1',
                'lat' => 28.4720271,
                'long' => 77.0895421,
                'radius' => 956.51416015625,
            ),
            360 => 
            array (
                'id' => 2361,
                'name' => 'Chander Nagar',
                'city_id' => '1',
                'lat' => 28.6524841,
                'long' => 77.2800257,
                'radius' => 631.1041870117188,
            ),
            361 => 
            array (
                'id' => 2362,
                'name' => 'Chandni Chowk',
                'city_id' => '1',
                'lat' => 28.6505942,
                'long' => 77.23032839999999,
                'radius' => 1977.4957275390625,
            ),
            362 => 
            array (
                'id' => 2363,
                'name' => 'Chandu Nagar',
                'city_id' => '1',
                'lat' => 28.7088143,
                'long' => 77.26422219999999,
                'radius' => 506.93115234375,
            ),
            363 => 
            array (
                'id' => 2364,
                'name' => 'Chanakya Place',
                'city_id' => '1',
                'lat' => 28.6104443,
                'long' => 77.0785681,
                'radius' => 479.4543151855469,
            ),
            364 => 
            array (
                'id' => 2365,
                'name' => 'Chanakyapuri',
                'city_id' => '1',
                'lat' => 28.5938532,
                'long' => 77.1887364,
                'radius' => 2455.48388671875,
            ),
            365 => 
            array (
                'id' => 2366,
                'name' => 'Chhatarpur',
                'city_id' => '1',
                'lat' => 28.4958562,
                'long' => 77.1848254,
                'radius' => 2801.85693359375,
            ),
            366 => 
            array (
                'id' => 2367,
                'name' => 'Chawri Bazar',
                'city_id' => '1',
                'lat' => 28.648201,
                'long' => 77.2269535,
                'radius' => 90.45574188232422,
            ),
            367 => 
            array (
                'id' => 2368,
                'name' => 'Chikambarpur',
                'city_id' => '1',
                'lat' => 28.677412,
                'long' => 77.3259812,
                'radius' => 432.6826171875,
            ),
            368 => 
            array (
                'id' => 2369,
                'name' => 'Chirag Delhi',
                'city_id' => '1',
                'lat' => 28.5376318,
                'long' => 77.2282863,
                'radius' => 626.2476196289062,
            ),
            369 => 
            array (
                'id' => 2370,
                'name' => 'Chiranjeev Vihar',
                'city_id' => '1',
                'lat' => 28.6688935,
                'long' => 77.4716313,
                'radius' => 795.2265014648438,
            ),
            370 => 
            array (
                'id' => 2371,
                'name' => 'Chittaranjan Park',
                'city_id' => '1',
                'lat' => 28.535291,
                'long' => 77.25093749999999,
                'radius' => 1396.442138671875,
            ),
            371 => 
            array (
                'id' => 2372,
                'name' => 'Civil Lines',
                'city_id' => '1',
                'lat' => 28.6814284,
                'long' => 77.2226866,
                'radius' => 2089.202392578125,
            ),
            372 => 
            array (
                'id' => 2373,
                'name' => 'Connaught Circus',
                'city_id' => '1',
                'lat' => 28.6314512,
                'long' => 77.2166672,
                'radius' => 1549.8563232421875,
            ),
            373 => 
            array (
                'id' => 2374,
                'name' => 'Connaught Place',
                'city_id' => '1',
                'lat' => 28.6314512,
                'long' => 77.2166672,
                'radius' => 1549.8563232421875,
            ),
            374 => 
            array (
                'id' => 2375,
                'name' => 'Dabri',
                'city_id' => '1',
                'lat' => 28.6096751,
                'long' => 77.0895421,
                'radius' => 1025.984375,
            ),
            375 => 
            array (
                'id' => 2376,
                'name' => 'Dadri Road',
                'city_id' => '1',
                'lat' => 28.5881891,
                'long' => 77.2974297,
                'radius' => 1067.8604736328125,
            ),
            376 => 
            array (
                'id' => 2377,
                'name' => 'Dakshinpuri',
                'city_id' => '1',
                'lat' => 28.5207415,
                'long' => 77.2390784,
                'radius' => 972.39404296875,
            ),
            377 => 
            array (
                'id' => 2378,
                'name' => 'Dallupura',
                'city_id' => '1',
                'lat' => 28.6004677,
                'long' => 77.319462,
                'radius' => 1646.8316650390625,
            ),
            378 => 
            array (
                'id' => 2379,
                'name' => 'Dariba Kalan',
                'city_id' => '1',
                'lat' => 28.6552556,
                'long' => 77.2342286,
                'radius' => 113.00691223144531,
            ),
            379 => 
            array (
                'id' => 2380,
                'name' => 'Daryaganj',
                'city_id' => '1',
                'lat' => 28.6448474,
                'long' => 77.24037729999999,
                'radius' => 896.8402709960938,
            ),
            380 => 
            array (
                'id' => 2381,
                'name' => 'Dasna Gate',
                'city_id' => '1',
                'lat' => 28.6642119,
                'long' => 77.4293184,
                'radius' => 237.9188690185547,
            ),
            381 => 
            array (
                'id' => 2382,
                'name' => 'Daya Basti',
                'city_id' => '1',
                'lat' => 28.669285,
                'long' => 77.1729605,
                'radius' => 1083.556640625,
            ),
            382 => 
            array (
                'id' => 2383,
                'name' => 'Dayalpur',
                'city_id' => '1',
                'lat' => 28.7203701,
                'long' => 77.271705,
                'radius' => 1008.8169555664062,
            ),
            383 => 
            array (
                'id' => 2384,
                'name' => 'Dayanand Colony',
                'city_id' => '1',
                'lat' => 28.5625103,
                'long' => 77.2484181,
                'radius' => 402.334228515625,
            ),
            384 => 
            array (
                'id' => 2385,
                'name' => 'Dayanand Vihar',
                'city_id' => '1',
                'lat' => 28.6443433,
                'long' => 77.30228679999999,
                'radius' => 739.7747802734375,
            ),
            385 => 
            array (
                'id' => 2386,
                'name' => 'Defence Colony',
                'city_id' => '1',
                'lat' => 28.5726334,
                'long' => 77.23250999999999,
                'radius' => 1043.623779296875,
            ),
            386 => 
            array (
                'id' => 2387,
                'name' => 'Delhi Cantt',
                'city_id' => '1',
                'lat' => 28.5961279,
                'long' => 77.1587375,
                'radius' => 8063.06640625,
            ),
            387 => 
            array (
                'id' => 2388,
                'name' => 'Delhi Gate',
                'city_id' => '1',
                'lat' => 28.6405645,
                'long' => 77.24177259999999,
                'radius' => 158.50816345214844,
            ),
            388 => 
            array (
                'id' => 2389,
                'name' => 'Delhi GPO',
                'city_id' => '1',
                'lat' => 28.6269416,
                'long' => 77.20664769999999,
                'radius' => 199.58811950683594,
            ),
            389 => 
            array (
                'id' => 2390,
                'name' => 'Delhi High Court',
                'city_id' => '1',
                'lat' => 28.6086036,
                'long' => 77.23548590000001,
                'radius' => 424.7830810546875,
            ),
            390 => 
            array (
                'id' => 2391,
                'name' => 'Delhi Road',
                'city_id' => '1',
                'lat' => 28.6882421,
                'long' => 77.3301944,
                'radius' => 669.0472412109375,
            ),
            391 => 
            array (
                'id' => 2392,
                'name' => 'Derawal Nagar',
                'city_id' => '1',
                'lat' => 28.6973788,
                'long' => 77.1894934,
                'radius' => 782.2839965820312,
            ),
            392 => 
            array (
                'id' => 2393,
                'name' => 'Desh Bandhu Gupta Road',
                'city_id' => '1',
                'lat' => 28.6479145,
                'long' => 77.2014184,
                'radius' => 2536.015869140625,
            ),
            393 => 
            array (
                'id' => 2394,
                'name' => 'Dev Nagar',
                'city_id' => '1',
                'lat' => 28.6554076,
                'long' => 77.18518069999999,
                'radius' => 1162.0308837890625,
            ),
            394 => 
            array (
                'id' => 2395,
                'name' => 'Dhaula Kuan',
                'city_id' => '1',
                'lat' => 28.5956381,
                'long' => 77.1628404,
                'radius' => 598.9387817382812,
            ),
            395 => 
            array (
                'id' => 2396,
                'name' => 'Dilshad Colony',
                'city_id' => '1',
                'lat' => 28.6844089,
                'long' => 77.31522,
                'radius' => 2277.012939453125,
            ),
            396 => 
            array (
                'id' => 2397,
                'name' => 'Dilshad Garden',
                'city_id' => '1',
                'lat' => 28.6844089,
                'long' => 77.31522,
                'radius' => 2277.012939453125,
            ),
            397 => 
            array (
                'id' => 2398,
                'name' => 'DLF Phase 1',
                'city_id' => '1',
                'lat' => 28.4650453,
                'long' => 77.10071169999999,
                'radius' => 2238.76904296875,
            ),
            398 => 
            array (
                'id' => 2399,
                'name' => 'DLF City',
                'city_id' => '1',
                'lat' => 28.4476911,
                'long' => 77.09477849999999,
                'radius' => 2717.5322265625,
            ),
            399 => 
            array (
                'id' => 2400,
                'name' => 'DLF City Phase 1',
                'city_id' => '1',
                'lat' => 28.4650453,
                'long' => 77.10071169999999,
                'radius' => 2238.76904296875,
            ),
            400 => 
            array (
                'id' => 2401,
                'name' => 'DLF City Phase 2',
                'city_id' => '1',
                'lat' => 28.6179009,
                'long' => 77.1154368,
                'radius' => 1302.2275390625,
            ),
            401 => 
            array (
                'id' => 2402,
                'name' => 'DLF City Phase 3',
                'city_id' => '1',
                'lat' => 28.4938623,
                'long' => 77.1038023,
                'radius' => 1649.3846435546875,
            ),
            402 => 
            array (
                'id' => 2403,
                'name' => 'DLF City Phase 4',
                'city_id' => '1',
                'lat' => 28.4649343,
                'long' => 77.0808808,
                'radius' => 199.7218780517578,
            ),
            403 => 
            array (
                'id' => 2404,
                'name' => 'DLF City Phase II',
                'city_id' => '1',
                'lat' => 28.4876667,
                'long' => 77.0881034,
                'radius' => 1939.88232421875,
            ),
            404 => 
            array (
                'id' => 2405,
                'name' => 'DLF City Phase III',
                'city_id' => '1',
                'lat' => 28.4916812,
                'long' => 77.094897,
                'radius' => 2550.8310546875,
            ),
            405 => 
            array (
                'id' => 2406,
                'name' => 'DLF City Phase IV',
                'city_id' => '1',
                'lat' => 28.4646699,
                'long' => 77.0844801,
                'radius' => 1314.9708251953125,
            ),
            406 => 
            array (
                'id' => 2407,
                'name' => 'DLF Industrial Area',
                'city_id' => '1',
                'lat' => 28.657142,
                'long' => 77.1434831,
                'radius' => 467.84039306640625,
            ),
            407 => 
            array (
                'id' => 2408,
                'name' => 'DLF Phase 2',
                'city_id' => '1',
                'lat' => 28.4876667,
                'long' => 77.0881034,
                'radius' => 1939.88232421875,
            ),
            408 => 
            array (
                'id' => 2409,
                'name' => 'DLF Phase 4',
                'city_id' => '1',
                'lat' => 28.4646699,
                'long' => 77.0844801,
                'radius' => 1314.9708251953125,
            ),
            409 => 
            array (
                'id' => 2410,
                'name' => 'DLF Phase II',
                'city_id' => '1',
                'lat' => 28.4876667,
                'long' => 77.0881034,
                'radius' => 1939.88232421875,
            ),
            410 => 
            array (
                'id' => 2411,
                'name' => 'DLF Phase IV',
                'city_id' => '1',
                'lat' => 28.4646699,
                'long' => 77.0844801,
                'radius' => 1314.9708251953125,
            ),
            411 => 
            array (
                'id' => 2412,
                'name' => 'Dr. Mukherjee Nagar',
                'city_id' => '1',
                'lat' => 28.705484,
                'long' => 77.2035219,
                'radius' => 2496.01025390625,
            ),
            412 => 
            array (
                'id' => 2413,
                'name' => 'Dr. Mukherji Nagar',
                'city_id' => '1',
                'lat' => 28.705484,
                'long' => 77.2035219,
                'radius' => 2496.01025390625,
            ),
            413 => 
            array (
                'id' => 2414,
                'name' => 'Dr Mukherjee Nagar',
                'city_id' => '1',
                'lat' => 28.705484,
                'long' => 77.2035219,
                'radius' => 2496.01025390625,
            ),
            414 => 
            array (
                'id' => 2415,
                'name' => 'Durgapuri',
                'city_id' => '1',
                'lat' => 28.6882906,
                'long' => 77.2933104,
                'radius' => 455.1345520019531,
            ),
            415 => 
            array (
                'id' => 2416,
                'name' => 'Dwarka Sector 6',
                'city_id' => '1',
                'lat' => 28.5928446,
                'long' => 77.0636419,
                'radius' => 1248.6246337890625,
            ),
            416 => 
            array (
                'id' => 2417,
                'name' => 'Dwarka Sector 10',
                'city_id' => '1',
                'lat' => 28.5849492,
                'long' => 77.05828439999999,
                'radius' => 1198.51318359375,
            ),
            417 => 
            array (
                'id' => 2418,
                'name' => 'Dwarka Sector 11',
                'city_id' => '1',
                'lat' => 28.5914547,
                'long' => 77.04925039999999,
                'radius' => 1017.6853637695312,
            ),
            418 => 
            array (
                'id' => 2419,
                'name' => 'Dwarka Sector 12',
                'city_id' => '1',
                'lat' => 28.5937647,
                'long' => 77.0434934,
                'radius' => 1126.672607421875,
            ),
            419 => 
            array (
                'id' => 2420,
                'name' => 'Dwarka Sector 19',
                'city_id' => '1',
                'lat' => 28.5860795,
                'long' => 77.0486422,
                'radius' => 171.52098083496094,
            ),
            420 => 
            array (
                'id' => 2421,
                'name' => 'Dwarka Sector 3',
                'city_id' => '1',
                'lat' => 28.6078176,
                'long' => 77.04061469999999,
                'radius' => 1751.346435546875,
            ),
            421 => 
            array (
                'id' => 2422,
                'name' => 'Dwarka Sector 4',
                'city_id' => '1',
                'lat' => 28.6029202,
                'long' => 77.04925039999999,
                'radius' => 988.112548828125,
            ),
            422 => 
            array (
                'id' => 2423,
                'name' => 'Dwarka Sector 5',
                'city_id' => '1',
                'lat' => 28.5980218,
                'long' => 77.0578855,
                'radius' => 1050.6358642578125,
            ),
            423 => 
            array (
                'id' => 2424,
                'name' => 'Dwarka Sector 7',
                'city_id' => '1',
                'lat' => 28.5842915,
                'long' => 77.07155639999999,
                'radius' => 1439.7574462890625,
            ),
            424 => 
            array (
                'id' => 2425,
                'name' => 'Dwarka Sector 9',
                'city_id' => '1',
                'lat' => 28.5787888,
                'long' => 77.06652,
                'radius' => 1102.27734375,
            ),
            425 => 
            array (
                'id' => 2426,
                'name' => 'East Krishna Nagar',
                'city_id' => '1',
                'lat' => 28.6591439,
                'long' => 77.2882833,
                'radius' => 293.26324462890625,
            ),
            426 => 
            array (
                'id' => 2427,
                'name' => 'East Patel Nagar',
                'city_id' => '1',
                'lat' => 28.6468151,
                'long' => 77.1721199,
                'radius' => 862.3925170898438,
            ),
            427 => 
            array (
                'id' => 2428,
                'name' => 'Faridabad Old',
                'city_id' => '1',
                'lat' => 28.4203197,
                'long' => 77.31420899999999,
                'radius' => 2033.5787353515625,
            ),
            428 => 
            array (
                'id' => 2429,
                'name' => 'Faridabad Sector 15 A',
                'city_id' => '1',
                'lat' => 28.3952729,
                'long' => 77.3238274,
                'radius' => 895.367919921875,
            ),
            429 => 
            array (
                'id' => 2430,
                'name' => 'Faridabad Sector 16',
                'city_id' => '1',
                'lat' => 28.4138045,
                'long' => 77.3223915,
                'radius' => 755.3086547851562,
            ),
            430 => 
            array (
                'id' => 2431,
                'name' => 'Faridabad Sector 7',
                'city_id' => '1',
                'lat' => 28.3623771,
                'long' => 77.3252633,
                'radius' => 966.8932495117188,
            ),
            431 => 
            array (
                'id' => 2432,
                'name' => 'Fateh Nagar',
                'city_id' => '1',
                'lat' => 28.6303737,
                'long' => 77.10056999999999,
                'radius' => 1657.0106201171875,
            ),
            432 => 
            array (
                'id' => 2433,
                'name' => 'Fatehpuri',
                'city_id' => '1',
                'lat' => 28.6563683,
                'long' => 77.2214745,
                'radius' => 201.9330291748047,
            ),
            433 => 
            array (
                'id' => 2434,
                'name' => 'Friends Colony',
                'city_id' => '1',
                'lat' => 28.5668488,
                'long' => 77.26638799999999,
                'radius' => 1028.7393798828125,
            ),
            434 => 
            array (
                'id' => 2435,
                'name' => 'Friends Colony East',
                'city_id' => '1',
                'lat' => 28.5668488,
                'long' => 77.26638799999999,
                'radius' => 1028.7393798828125,
            ),
            435 => 
            array (
                'id' => 2436,
                'name' => 'G B Road',
                'city_id' => '1',
                'lat' => 28.6507192,
                'long' => 77.22053389999999,
                'radius' => 765.2620239257812,
            ),
            436 => 
            array (
                'id' => 2437,
                'name' => 'G T Karnal Road',
                'city_id' => '1',
                'lat' => 28.7467305,
                'long' => 77.1517511,
                'radius' => 21485.224609375,
            ),
            437 => 
            array (
                'id' => 2438,
                'name' => 'G T Karnal Road Industrial Area',
                'city_id' => '1',
                'lat' => 28.6955329,
                'long' => 77.18518069999999,
                'radius' => 427.66485595703125,
            ),
            438 => 
            array (
                'id' => 2439,
                'name' => 'Gagan Vihar',
                'city_id' => '1',
                'lat' => 28.6450792,
                'long' => 77.29383159999999,
                'radius' => 507.968017578125,
            ),
            439 => 
            array (
                'id' => 2440,
                'name' => 'Gandhi Nagar',
                'city_id' => '1',
                'lat' => 28.6661232,
                'long' => 77.2740109,
                'radius' => 1903.83984375,
            ),
            440 => 
            array (
                'id' => 2441,
                'name' => 'Ganesh Nagar',
                'city_id' => '1',
                'lat' => 28.6245815,
                'long' => 77.2828969,
                'radius' => 870.8988647460938,
            ),
            441 => 
            array (
                'id' => 2442,
                'name' => 'Garhi',
                'city_id' => '1',
                'lat' => 28.5570462,
                'long' => 77.2512917,
                'radius' => 747.35400390625,
            ),
            442 => 
            array (
                'id' => 2443,
                'name' => 'Garima Garden',
                'city_id' => '1',
                'lat' => 28.6937851,
                'long' => 77.3475174,
                'radius' => 640.3169555664062,
            ),
            443 => 
            array (
                'id' => 2444,
                'name' => 'Gautam Budh Nagar',
                'city_id' => '1',
                'lat' => 28.338333,
                'long' => 77.6077865,
                'radius' => 41328.7421875,
            ),
            444 => 
            array (
                'id' => 2445,
                'name' => 'Gautam Nagar',
                'city_id' => '1',
                'lat' => 28.5620966,
                'long' => 77.2139292,
                'radius' => 741.7513427734375,
            ),
            445 => 
            array (
                'id' => 2446,
                'name' => 'Gazipur',
                'city_id' => '1',
                'lat' => 28.6286586,
                'long' => 77.3207839,
                'radius' => 1939.641357421875,
            ),
            446 => 
            array (
                'id' => 2447,
                'name' => 'Geeta Colony',
                'city_id' => '1',
                'lat' => 28.6539087,
                'long' => 77.2712102,
                'radius' => 1685.7261962890625,
            ),
            447 => 
            array (
                'id' => 2448,
                'name' => 'Geetanjali Enclave',
                'city_id' => '1',
                'lat' => 28.5308814,
                'long' => 77.2024306,
                'radius' => 437.5645751953125,
            ),
            448 => 
            array (
                'id' => 2449,
                'name' => 'Gharoli',
                'city_id' => '1',
                'lat' => 28.6171805,
                'long' => 77.3299384,
                'radius' => 1786.29150390625,
            ),
            449 => 
            array (
                'id' => 2450,
                'name' => 'Ghaziabad Sector 11',
                'city_id' => '1',
                'lat' => 28.6546402,
                'long' => 77.4113845,
                'radius' => 1136.41064453125,
            ),
            450 => 
            array (
                'id' => 2451,
                'name' => 'Ghaziabad Sector 12',
                'city_id' => '1',
                'lat' => 28.5962491,
                'long' => 77.3396212,
                'radius' => 926.8165893554688,
            ),
            451 => 
            array (
                'id' => 2452,
                'name' => 'Ghaziabad Sector 3',
                'city_id' => '1',
                'lat' => 28.6640413,
                'long' => 77.38452339999999,
                'radius' => 622.6934814453125,
            ),
            452 => 
            array (
                'id' => 2453,
                'name' => 'Ghaziabad Sector 4',
                'city_id' => '1',
                'lat' => 28.6465998,
                'long' => 77.3395938,
                'radius' => 856.0391235351562,
            ),
            453 => 
            array (
                'id' => 2454,
                'name' => 'Ghaziabad Sector 9',
                'city_id' => '1',
                'lat' => 28.6537774,
                'long' => 77.348953,
                'radius' => 579.490234375,
            ),
            454 => 
            array (
                'id' => 2455,
                'name' => 'Ghazipur',
                'city_id' => '1',
                'lat' => 28.6286586,
                'long' => 77.3207839,
                'radius' => 1939.641357421875,
            ),
            455 => 
            array (
                'id' => 2456,
                'name' => 'Ghazipur Road',
                'city_id' => '1',
                'lat' => 28.624027,
                'long' => 77.3193496,
                'radius' => 1142.08837890625,
            ),
            456 => 
            array (
                'id' => 2457,
                'name' => 'Ghitorni',
                'city_id' => '1',
                'lat' => 28.4964413,
                'long' => 77.1393872,
                'radius' => 3852.057861328125,
            ),
            457 => 
            array (
                'id' => 2458,
                'name' => 'Ghonda Chowk',
                'city_id' => '1',
                'lat' => 28.695093,
                'long' => 77.2664049,
                'radius' => 563.537841796875,
            ),
            458 => 
            array (
                'id' => 2459,
                'name' => 'Gokalpuri',
                'city_id' => '1',
                'lat' => 28.703423,
                'long' => 77.2840105,
                'radius' => 2175.13134765625,
            ),
            459 => 
            array (
                'id' => 2460,
                'name' => 'Gol Market',
                'city_id' => '1',
                'lat' => 28.633736,
                'long' => 77.20557020000001,
                'radius' => 1161.95751953125,
            ),
            460 => 
            array (
                'id' => 2461,
                'name' => 'Gole Market',
                'city_id' => '1',
                'lat' => 28.633736,
                'long' => 77.20557020000001,
                'radius' => 1161.95751953125,
            ),
            461 => 
            array (
                'id' => 2462,
                'name' => 'Golf Link',
                'city_id' => '1',
                'lat' => 28.5995199,
                'long' => 77.2307855,
                'radius' => 1365.0377197265625,
            ),
            462 => 
            array (
                'id' => 2463,
                'name' => 'Govindpuri',
                'city_id' => '1',
                'lat' => 28.5354383,
                'long' => 77.26393259999999,
                'radius' => 1091.0093994140625,
            ),
            463 => 
            array (
                'id' => 2464,
                'name' => 'Greater Kailash 1',
                'city_id' => '1',
                'lat' => 28.5496329,
                'long' => 77.2409132,
                'radius' => 1905.954345703125,
            ),
            464 => 
            array (
                'id' => 2465,
                'name' => 'Greater Kailash 2',
                'city_id' => '1',
                'lat' => 28.53536,
                'long' => 77.2419522,
                'radius' => 1101.26123046875,
            ),
            465 => 
            array (
                'id' => 2466,
                'name' => 'Greater Kailash Enclave',
                'city_id' => '1',
                'lat' => 28.5428238,
                'long' => 77.23954789999999,
                'radius' => 2204.814697265625,
            ),
            466 => 
            array (
                'id' => 2467,
                'name' => 'Greater Kailash Enclave-1',
                'city_id' => '1',
                'lat' => 28.5447521,
                'long' => 77.24267069999999,
                'radius' => 308.3328857421875,
            ),
            467 => 
            array (
                'id' => 2468,
                'name' => 'Greater Kailash Part 1',
                'city_id' => '1',
                'lat' => 28.6116033,
                'long' => 77.3130268,
                'radius' => 145.1260986328125,
            ),
            468 => 
            array (
                'id' => 2469,
                'name' => 'Greater Kailash Part 2',
                'city_id' => '1',
                'lat' => 28.6047368,
                'long' => 77.3080313,
                'radius' => 857.4859008789062,
            ),
            469 => 
            array (
                'id' => 2470,
                'name' => 'Greater Noida',
                'city_id' => '1',
                'lat' => 28.4743879,
                'long' => 77.50399039999999,
                'radius' => 19467.416015625,
            ),
            470 => 
            array (
                'id' => 2471,
                'name' => 'Green Fields Colony',
                'city_id' => '1',
                'lat' => 28.458023,
                'long' => 77.29641,
                'radius' => 1907.6087646484375,
            ),
            471 => 
            array (
                'id' => 2472,
                'name' => 'Green Park',
                'city_id' => '1',
                'lat' => 28.5584489,
                'long' => 77.2029376,
                'radius' => 750.7804565429688,
            ),
            472 => 
            array (
                'id' => 2473,
                'name' => 'GT Karnal Road',
                'city_id' => '1',
                'lat' => 28.7467305,
                'long' => 77.1517511,
                'radius' => 21485.224609375,
            ),
            473 => 
            array (
                'id' => 2474,
                'name' => 'GT Road',
                'city_id' => '1',
                'lat' => 28.6758729,
                'long' => 77.20297140000001,
                'radius' => 1116.1622314453125,
            ),
            474 => 
            array (
                'id' => 2475,
                'name' => 'Gujranwala Town',
                'city_id' => '1',
                'lat' => 28.7005219,
                'long' => 77.18894759999999,
                'radius' => 1525.7088623046875,
            ),
            475 => 
            array (
                'id' => 2476,
                'name' => 'Gulabi Bagh',
                'city_id' => '1',
                'lat' => 28.6724241,
                'long' => 77.19195959999999,
                'radius' => 1724.0028076171875,
            ),
            476 => 
            array (
                'id' => 2477,
                'name' => 'Gulmohar Park',
                'city_id' => '1',
                'lat' => 28.5572098,
                'long' => 77.2127891,
                'radius' => 516.9168090820312,
            ),
            477 => 
            array (
                'id' => 2478,
                'name' => 'Gurgaon Road',
                'city_id' => '1',
                'lat' => 28.5344903,
                'long' => 77.09037579999999,
                'radius' => 374.9079284667969,
            ),
            478 => 
            array (
                'id' => 2479,
                'name' => 'Gurgaon Sector 12',
                'city_id' => '1',
                'lat' => 28.4748793,
                'long' => 77.0325884,
                'radius' => 2007.422119140625,
            ),
            479 => 
            array (
                'id' => 2480,
                'name' => 'Gurgaon Sector 14',
                'city_id' => '1',
                'lat' => 28.4707417,
                'long' => 77.0463719,
                'radius' => 1495.214599609375,
            ),
            480 => 
            array (
                'id' => 2481,
                'name' => 'Gurgaon Sector 15',
                'city_id' => '1',
                'lat' => 28.4621359,
                'long' => 77.0463719,
                'radius' => 1016.4268798828125,
            ),
            481 => 
            array (
                'id' => 2482,
                'name' => 'Gurgaon Sector 53',
                'city_id' => '1',
                'lat' => 28.4396185,
                'long' => 77.0971527,
                'radius' => 1421.4461669921875,
            ),
            482 => 
            array (
                'id' => 2483,
                'name' => 'Guru Nanak Pura',
                'city_id' => '1',
                'lat' => 28.6331422,
                'long' => 77.28056269999999,
                'radius' => 113.79608154296875,
            ),
            483 => 
            array (
                'id' => 2484,
                'name' => 'Guru Teg Bahadur Nagar',
                'city_id' => '1',
                'lat' => 28.6966531,
                'long' => 77.2057554,
                'radius' => 1186.5870361328125,
            ),
            484 => 
            array (
                'id' => 2485,
                'name' => 'Gurudwara Road',
                'city_id' => '1',
                'lat' => 28.6484317,
                'long' => 77.19297019999999,
                'radius' => 566.2421875,
            ),
            485 => 
            array (
                'id' => 2486,
                'name' => 'Haidarpur',
                'city_id' => '1',
                'lat' => 28.7224969,
                'long' => 77.1446978,
                'radius' => 1277.76025390625,
            ),
            486 => 
            array (
                'id' => 2487,
                'name' => 'Hamilton Road',
                'city_id' => '1',
                'lat' => 28.6627254,
                'long' => 77.2266155,
                'radius' => 729.786865234375,
            ),
            487 => 
            array (
                'id' => 2488,
                'name' => 'Hapur Road',
                'city_id' => '1',
                'lat' => 28.6273821,
                'long' => 77.3170141,
                'radius' => 54.64281463623047,
            ),
            488 => 
            array (
                'id' => 2489,
                'name' => 'Hargovind Enclave',
                'city_id' => '1',
                'lat' => 28.6475873,
                'long' => 77.2986963,
                'radius' => 465.576904296875,
            ),
            489 => 
            array (
                'id' => 2490,
                'name' => 'Hari Nagar',
                'city_id' => '1',
                'lat' => 28.6248596,
                'long' => 77.11086809999999,
                'radius' => 1967.4957275390625,
            ),
            490 => 
            array (
                'id' => 2491,
                'name' => 'Harola',
                'city_id' => '1',
                'lat' => 28.5878278,
                'long' => 77.3188016,
                'radius' => 492.53741455078125,
            ),
            491 => 
            array (
                'id' => 2492,
                'name' => 'Hasanpur',
                'city_id' => '1',
                'lat' => 28.6330401,
                'long' => 77.3116215,
                'radius' => 470.4591979980469,
            ),
            492 => 
            array (
                'id' => 2493,
                'name' => 'Hauz Khas',
                'city_id' => '1',
                'lat' => 28.5494489,
                'long' => 77.2001368,
                'radius' => 2161.298095703125,
            ),
            493 => 
            array (
                'id' => 2494,
                'name' => 'Hauz Khas Enclave',
                'city_id' => '1',
                'lat' => 28.5479558,
                'long' => 77.2009932,
                'radius' => 593.162353515625,
            ),
            494 => 
            array (
                'id' => 2495,
                'name' => 'Hauz Khas Village',
                'city_id' => '1',
                'lat' => 28.5533997,
                'long' => 77.1941654,
                'radius' => 297.7943420410156,
            ),
            495 => 
            array (
                'id' => 2496,
                'name' => 'Hauz Qazi',
                'city_id' => '1',
                'lat' => 28.6491421,
                'long' => 77.2278244,
                'radius' => 559.5485229492188,
            ),
            496 => 
            array (
                'id' => 2497,
                'name' => 'I G I Airport',
                'city_id' => '1',
                'lat' => 28.5561624,
                'long' => 77.0999578,
                'radius' => 199.64663696289062,
            ),
            497 => 
            array (
                'id' => 2498,
                'name' => 'I N A Market',
                'city_id' => '1',
                'lat' => 28.5750292,
                'long' => 77.2098568,
                'radius' => 199.63104248046875,
            ),
            498 => 
            array (
                'id' => 2499,
                'name' => 'I.T.O',
                'city_id' => '1',
                'lat' => 28.6308294,
                'long' => 77.2505733,
                'radius' => 760.316650390625,
            ),
            499 => 
            array (
                'id' => 2500,
                'name' => 'IMT Manesar',
                'city_id' => '1',
                'lat' => 28.3754567,
                'long' => 76.90668289999999,
                'radius' => 6443.53369140625,
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'name' => 'INA Colony',
                'city_id' => '1',
                'lat' => 28.5782211,
                'long' => 77.2126241,
                'radius' => 718.650146484375,
            ),
            1 => 
            array (
                'id' => 2502,
                'name' => 'Inder Lok',
                'city_id' => '1',
                'lat' => 28.6722038,
                'long' => 77.1652136,
                'radius' => 868.479736328125,
            ),
            2 => 
            array (
                'id' => 2503,
                'name' => 'Indralok',
                'city_id' => '1',
                'lat' => 28.6722038,
                'long' => 77.1652136,
                'radius' => 868.479736328125,
            ),
            3 => 
            array (
                'id' => 2504,
                'name' => 'Inder Puri',
                'city_id' => '1',
                'lat' => 28.6319998,
                'long' => 77.14509939999999,
                'radius' => 1138.134033203125,
            ),
            4 => 
            array (
                'id' => 2505,
                'name' => 'Indira Gandhi International Airport',
                'city_id' => '1',
                'lat' => 28.5561624,
                'long' => 77.0999578,
                'radius' => 199.64663696289062,
            ),
            5 => 
            array (
                'id' => 2506,
                'name' => 'Indira Puram',
                'city_id' => '1',
                'lat' => 28.641485,
                'long' => 77.3713856,
                'radius' => 3943.619384765625,
            ),
            6 => 
            array (
                'id' => 2507,
                'name' => 'IndiraPuram',
                'city_id' => '1',
                'lat' => 28.641485,
                'long' => 77.3713856,
                'radius' => 3943.619384765625,
            ),
            7 => 
            array (
                'id' => 2508,
                'name' => 'Indraprastha Extension',
                'city_id' => '1',
                'lat' => 28.6295233,
                'long' => 77.3123396,
                'radius' => 2863.65966796875,
            ),
            8 => 
            array (
                'id' => 2509,
                'name' => 'Islampur',
                'city_id' => '1',
                'lat' => 28.4900747,
                'long' => 77.3396212,
                'radius' => 1099.6356201171875,
            ),
            9 => 
            array (
                'id' => 2510,
                'name' => 'ITO',
                'city_id' => '1',
                'lat' => 28.6308294,
                'long' => 77.2505733,
                'radius' => 760.316650390625,
            ),
            10 => 
            array (
                'id' => 2511,
                'name' => 'Jacombpura',
                'city_id' => '1',
                'lat' => 28.4625522,
                'long' => 77.0283798,
                'radius' => 577.45849609375,
            ),
            11 => 
            array (
                'id' => 2512,
                'name' => 'Jaffrabad',
                'city_id' => '1',
                'lat' => 28.6841295,
                'long' => 77.2721327,
                'radius' => 526.0203247070312,
            ),
            12 => 
            array (
                'id' => 2513,
                'name' => 'Jagatpuri',
                'city_id' => '1',
                'lat' => 28.6484761,
                'long' => 77.2929513,
                'radius' => 594.5659790039062,
            ),
            13 => 
            array (
                'id' => 2514,
                'name' => 'Jahangir Puri',
                'city_id' => '1',
                'lat' => 28.7055419,
                'long' => 77.1812273,
                'radius' => 287.560302734375,
            ),
            14 => 
            array (
                'id' => 2515,
                'name' => 'Jahangirpuri',
                'city_id' => '1',
                'lat' => 28.7296171,
                'long' => 77.16663129999999,
                'radius' => 1949.2021484375,
            ),
            15 => 
            array (
                'id' => 2516,
                'name' => 'Jail Road',
                'city_id' => '1',
                'lat' => 28.6560294,
                'long' => 77.1895643,
                'radius' => 141.87228393554688,
            ),
            16 => 
            array (
                'id' => 2517,
                'name' => 'Jama Masjid',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            17 => 
            array (
                'id' => 2518,
                'name' => 'Jamia Nagar',
                'city_id' => '1',
                'lat' => 28.5538528,
                'long' => 77.295553,
                'radius' => 2273.31640625,
            ),
            18 => 
            array (
                'id' => 2519,
                'name' => 'Janakpuri District Centre',
                'city_id' => '1',
                'lat' => 28.6295538,
                'long' => 77.0801899,
                'radius' => 433.6273498535156,
            ),
            19 => 
            array (
                'id' => 2520,
                'name' => 'Jangpura',
                'city_id' => '1',
                'lat' => 28.5821032,
                'long' => 77.2485251,
                'radius' => 1622.544677734375,
            ),
            20 => 
            array (
                'id' => 2521,
                'name' => 'Jangpura Extension',
                'city_id' => '1',
                'lat' => 28.581257,
                'long' => 77.2419522,
                'radius' => 910.072021484375,
            ),
            21 => 
            array (
                'id' => 2522,
                'name' => 'Janpath',
                'city_id' => '1',
                'lat' => 28.6154559,
                'long' => 77.21860939999999,
                'radius' => 1631.6829833984375,
            ),
            22 => 
            array (
                'id' => 2523,
                'name' => 'Jasola',
                'city_id' => '1',
                'lat' => 28.5473444,
                'long' => 77.2891216,
                'radius' => 2076.6943359375,
            ),
            23 => 
            array (
                'id' => 2524,
                'name' => 'Jasola Vihar',
                'city_id' => '1',
                'lat' => 28.5470294,
                'long' => 77.28936060000001,
                'radius' => 1983.554443359375,
            ),
            24 => 
            array (
                'id' => 2525,
                'name' => 'Jatwara',
                'city_id' => '1',
                'lat' => 27.2638973,
                'long' => 76.88079119999999,
                'radius' => 3701.001220703125,
            ),
            25 => 
            array (
                'id' => 2526,
                'name' => 'Jawahar Colony',
                'city_id' => '1',
                'lat' => 28.4491527,
                'long' => 77.1378768,
                'radius' => 86.80714416503906,
            ),
            26 => 
            array (
                'id' => 2527,
                'name' => 'Jeevan Nagar',
                'city_id' => '1',
                'lat' => 28.4295136,
                'long' => 77.33674979999999,
                'radius' => 1337.1297607421875,
            ),
            27 => 
            array (
                'id' => 2528,
                'name' => 'Jhandewalan',
                'city_id' => '1',
                'lat' => 28.6472827,
                'long' => 77.2028368,
                'radius' => 1036.8953857421875,
            ),
            28 => 
            array (
                'id' => 2529,
                'name' => 'Jhandewalan Extension',
                'city_id' => '1',
                'lat' => 28.645591,
                'long' => 77.2024306,
                'radius' => 628.580322265625,
            ),
            29 => 
            array (
                'id' => 2530,
                'name' => 'Jheel',
                'city_id' => '1',
                'lat' => 28.6572899,
                'long' => 77.2724872,
                'radius' => 230.228759765625,
            ),
            30 => 
            array (
                'id' => 2531,
                'name' => 'Jheel Khurenja',
                'city_id' => '1',
                'lat' => 28.6567384,
                'long' => 77.2742782,
                'radius' => 428.8544006347656,
            ),
            31 => 
            array (
                'id' => 2532,
                'name' => 'Jhilmil Colony',
                'city_id' => '1',
                'lat' => 28.6708194,
                'long' => 77.30756939999999,
                'radius' => 1613.167724609375,
            ),
            32 => 
            array (
                'id' => 2533,
                'name' => 'Jhilmil Industrial Area',
                'city_id' => '1',
                'lat' => 28.6746182,
                'long' => 77.3116215,
                'radius' => 1141.160888671875,
            ),
            33 => 
            array (
                'id' => 2534,
                'name' => 'Jia Sarai',
                'city_id' => '1',
                'lat' => 28.5458173,
                'long' => 77.1898528,
                'radius' => 297.18975830078125,
            ),
            34 => 
            array (
                'id' => 2535,
                'name' => 'Jitar Nagar',
                'city_id' => '1',
                'lat' => 28.6457287,
                'long' => 77.29043779999999,
                'radius' => 311.5923767089844,
            ),
            35 => 
            array (
                'id' => 2536,
                'name' => 'Jor Bagh',
                'city_id' => '1',
                'lat' => 28.5877575,
                'long' => 77.215312,
                'radius' => 530.302001953125,
            ),
            36 => 
            array (
                'id' => 2537,
                'name' => 'Jungpura',
                'city_id' => '1',
                'lat' => 28.5821032,
                'long' => 77.2485251,
                'radius' => 1622.544677734375,
            ),
            37 => 
            array (
                'id' => 2538,
                'name' => 'Kailash Colony',
                'city_id' => '1',
                'lat' => 28.5534601,
                'long' => 77.24258069999999,
                'radius' => 688.8656005859375,
            ),
            38 => 
            array (
                'id' => 2539,
                'name' => 'Kailash Nagar',
                'city_id' => '1',
                'lat' => 28.66527,
                'long' => 77.2584755,
                'radius' => 727.5874633789062,
            ),
            39 => 
            array (
                'id' => 2540,
                'name' => 'Kalkaji',
                'city_id' => '1',
                'lat' => 28.5374198,
                'long' => 77.2597274,
                'radius' => 2650.56396484375,
            ),
            40 => 
            array (
                'id' => 2541,
                'name' => 'Kalkaji DDA Flats',
                'city_id' => '1',
                'lat' => 28.5295166,
                'long' => 77.2547104,
                'radius' => 191.86265563964844,
            ),
            41 => 
            array (
                'id' => 2542,
                'name' => 'Kalkaji Extension',
                'city_id' => '1',
                'lat' => 28.5421788,
                'long' => 77.2567012,
                'radius' => 432.699462890625,
            ),
            42 => 
            array (
                'id' => 2543,
                'name' => 'Kallupura',
                'city_id' => '1',
                'lat' => 28.6646158,
                'long' => 77.4336221,
                'radius' => 434.8733825683594,
            ),
            43 => 
            array (
                'id' => 2544,
                'name' => 'Kalu Sarai',
                'city_id' => '1',
                'lat' => 28.5409217,
                'long' => 77.2024306,
                'radius' => 501.37744140625,
            ),
            44 => 
            array (
                'id' => 2545,
                'name' => 'Kalyanpuri',
                'city_id' => '1',
                'lat' => 28.6179505,
                'long' => 77.31422119999999,
                'radius' => 826.7628784179688,
            ),
            45 => 
            array (
                'id' => 2546,
                'name' => 'Kamala Nagar',
                'city_id' => '1',
                'lat' => 28.6809111,
                'long' => 77.2045867,
                'radius' => 781.5259399414062,
            ),
            46 => 
            array (
                'id' => 2547,
                'name' => 'Kanti Nagar',
                'city_id' => '1',
                'lat' => 28.666773,
                'long' => 77.2742782,
                'radius' => 358.93988037109375,
            ),
            47 => 
            array (
                'id' => 2548,
                'name' => 'Kapashera',
                'city_id' => '1',
                'lat' => 28.5255897,
                'long' => 77.0796189,
                'radius' => 1111.532958984375,
            ),
            48 => 
            array (
                'id' => 2549,
                'name' => 'Karampura',
                'city_id' => '1',
                'lat' => 28.664819,
                'long' => 77.14822509999999,
                'radius' => 1745.5146484375,
            ),
            49 => 
            array (
                'id' => 2550,
                'name' => 'Karampura West',
                'city_id' => '1',
                'lat' => 28.664819,
                'long' => 77.14822509999999,
                'radius' => 1745.5146484375,
            ),
            50 => 
            array (
                'id' => 2551,
                'name' => 'Karawal Nagar',
                'city_id' => '1',
                'lat' => 28.7283102,
                'long' => 77.276926,
                'radius' => 2387.9228515625,
            ),
            51 => 
            array (
                'id' => 2552,
                'name' => 'Karkar Duma',
                'city_id' => '1',
                'lat' => 28.6529458,
                'long' => 77.30228679999999,
                'radius' => 836.2542724609375,
            ),
            52 => 
            array (
                'id' => 2553,
                'name' => 'Karkardooma',
                'city_id' => '1',
                'lat' => 28.6529458,
                'long' => 77.30228679999999,
                'radius' => 836.2542724609375,
            ),
            53 => 
            array (
                'id' => 2554,
                'name' => 'Karol Bagh',
                'city_id' => '1',
                'lat' => 28.6527809,
                'long' => 77.1921441,
                'radius' => 2108.4462890625,
            ),
            54 => 
            array (
                'id' => 2555,
                'name' => 'Kashmiri Gate',
                'city_id' => '1',
                'lat' => 28.6664723,
                'long' => 77.2332892,
                'radius' => 1375.3436279296875,
            ),
            55 => 
            array (
                'id' => 2556,
                'name' => 'Kasturba Gandhi Marg',
                'city_id' => '1',
                'lat' => 28.8033329,
                'long' => 77.1762383,
                'radius' => 165.11880493164062,
            ),
            56 => 
            array (
                'id' => 2557,
                'name' => 'Katwaria Sarai',
                'city_id' => '1',
                'lat' => 28.5411219,
                'long' => 77.1894934,
                'radius' => 887.471435546875,
            ),
            57 => 
            array (
                'id' => 2558,
                'name' => 'Kaushambi',
                'city_id' => '1',
                'lat' => 28.6424143,
                'long' => 77.3187435,
                'radius' => 1292.244140625,
            ),
            58 => 
            array (
                'id' => 2559,
                'name' => 'Kavi Nagar',
                'city_id' => '1',
                'lat' => 28.6635746,
                'long' => 77.451855,
                'radius' => 1733.13671875,
            ),
            59 => 
            array (
                'id' => 2560,
                'name' => 'Kavi Nagar Industrial Area',
                'city_id' => '1',
                'lat' => 28.6618145,
                'long' => 77.45728969999999,
                'radius' => 819.8169555664062,
            ),
            60 => 
            array (
                'id' => 2561,
                'name' => 'Keshav Puram',
                'city_id' => '1',
                'lat' => 28.6172972,
                'long' => 77.3131993,
                'radius' => 82.48706817626953,
            ),
            61 => 
            array (
                'id' => 2562,
                'name' => 'Khajuri Khas',
                'city_id' => '1',
                'lat' => 28.7100319,
                'long' => 77.2603927,
                'radius' => 1334.2386474609375,
            ),
            62 => 
            array (
                'id' => 2563,
                'name' => 'Khan Market',
                'city_id' => '1',
                'lat' => 28.6000912,
                'long' => 77.2270425,
                'radius' => 295.1759948730469,
            ),
            63 => 
            array (
                'id' => 2564,
                'name' => 'Khandsa Road',
                'city_id' => '1',
                'lat' => 28.4390921,
                'long' => 77.00674479999999,
                'radius' => 2713.749755859375,
            ),
            64 => 
            array (
                'id' => 2565,
                'name' => 'Khanpur',
                'city_id' => '1',
                'lat' => 28.5093102,
                'long' => 77.2309277,
                'radius' => 1246.8944091796875,
            ),
            65 => 
            array (
                'id' => 2566,
                'name' => 'Khari Baoli',
                'city_id' => '1',
                'lat' => 28.6588423,
                'long' => 77.2211152,
                'radius' => 456.3951110839844,
            ),
            66 => 
            array (
                'id' => 2567,
                'name' => 'Khel Gaon Marg',
                'city_id' => '1',
                'lat' => 28.5530539,
                'long' => 77.2156991,
                'radius' => 292.0904846191406,
            ),
            67 => 
            array (
                'id' => 2568,
                'name' => 'Khichripur',
                'city_id' => '1',
                'lat' => 28.6205422,
                'long' => 77.31592959999999,
                'radius' => 915.3977661132812,
            ),
            68 => 
            array (
                'id' => 2569,
                'name' => 'Khirki Extention',
                'city_id' => '1',
                'lat' => 28.5322507,
                'long' => 77.21680359999999,
                'radius' => 651.895751953125,
            ),
            69 => 
            array (
                'id' => 2570,
                'name' => 'Khora Colony',
                'city_id' => '1',
                'lat' => 28.7026787,
                'long' => 77.0946792,
                'radius' => 371.2472839355469,
            ),
            70 => 
            array (
                'id' => 2571,
                'name' => 'Khureji Khas',
                'city_id' => '1',
                'lat' => 28.6462079,
                'long' => 77.2803832,
                'radius' => 212.24481201171875,
            ),
            71 => 
            array (
                'id' => 2572,
                'name' => 'Khyala',
                'city_id' => '1',
                'lat' => 28.6563648,
                'long' => 77.0981743,
                'radius' => 998.3822021484375,
            ),
            72 => 
            array (
                'id' => 2573,
                'name' => 'Kidwai Nagar',
                'city_id' => '1',
                'lat' => 28.5718613,
                'long' => 77.2110547,
                'radius' => 833.6385498046875,
            ),
            73 => 
            array (
                'id' => 2574,
                'name' => 'Kilokri',
                'city_id' => '1',
                'lat' => 28.5779612,
                'long' => 77.263863,
                'radius' => 393.3944091796875,
            ),
            74 => 
            array (
                'id' => 2575,
                'name' => 'Kingsway Camp',
                'city_id' => '1',
                'lat' => 28.6961996,
                'long' => 77.1998976,
                'radius' => 753.6929931640625,
            ),
            75 => 
            array (
                'id' => 2576,
                'name' => 'Kirti Nagar',
                'city_id' => '1',
                'lat' => 28.6504091,
                'long' => 77.14442679999999,
                'radius' => 2528.9267578125,
            ),
            76 => 
            array (
                'id' => 2577,
                'name' => 'Kirti Nagar Industrial Area',
                'city_id' => '1',
                'lat' => 28.6472485,
                'long' => 77.1449212,
                'radius' => 1419.4000244140625,
            ),
            77 => 
            array (
                'id' => 2578,
                'name' => 'Kishan Ganj',
                'city_id' => '1',
                'lat' => 28.6602972,
                'long' => 77.1988371,
                'radius' => 1085.94384765625,
            ),
            78 => 
            array (
                'id' => 2579,
                'name' => 'Kishangarh',
                'city_id' => '1',
                'lat' => 28.522365,
                'long' => 77.1697282,
                'radius' => 342.919677734375,
            ),
            79 => 
            array (
                'id' => 2580,
                'name' => 'Kondli',
                'city_id' => '1',
                'lat' => 28.6122868,
                'long' => 77.325467,
                'radius' => 1585.88232421875,
            ),
            80 => 
            array (
                'id' => 2581,
                'name' => 'Kotla',
                'city_id' => '1',
                'lat' => 28.6123368,
                'long' => 77.3012097,
                'radius' => 314.4510192871094,
            ),
            81 => 
            array (
                'id' => 2582,
                'name' => 'Kotla Mubarakpur',
                'city_id' => '1',
                'lat' => 28.5754899,
                'long' => 77.22736909999999,
                'radius' => 890.6060180664062,
            ),
            82 => 
            array (
                'id' => 2583,
                'name' => 'Krishna Nagar',
                'city_id' => '1',
                'lat' => 28.6498489,
                'long' => 77.2834841,
                'radius' => 2177.404296875,
            ),
            83 => 
            array (
                'id' => 2584,
                'name' => 'Krishna Nagar East',
                'city_id' => '1',
                'lat' => 28.6498489,
                'long' => 77.2834841,
                'radius' => 2177.404296875,
            ),
            84 => 
            array (
                'id' => 2585,
                'name' => 'Krishna Park',
                'city_id' => '1',
                'lat' => 28.6305703,
                'long' => 77.0758733,
                'radius' => 360.60748291015625,
            ),
            85 => 
            array (
                'id' => 2586,
                'name' => 'Lado Sarai',
                'city_id' => '1',
                'lat' => 28.5244854,
                'long' => 77.1918799,
                'radius' => 1433.3902587890625,
            ),
            86 => 
            array (
                'id' => 2587,
                'name' => 'Lajpat Nagar 2',
                'city_id' => '1',
                'lat' => 28.5692718,
                'long' => 77.2441075,
                'radius' => 898.7596435546875,
            ),
            87 => 
            array (
                'id' => 2588,
                'name' => 'Lajpat Nagar 3',
                'city_id' => '1',
                'lat' => 28.5674276,
                'long' => 77.2397968,
                'radius' => 739.0140380859375,
            ),
            88 => 
            array (
                'id' => 2589,
                'name' => 'Lajpat Nagar 4',
                'city_id' => '1',
                'lat' => 28.5609053,
                'long' => 77.2390784,
                'radius' => 1186.098876953125,
            ),
            89 => 
            array (
                'id' => 2590,
                'name' => 'Lajpat Nagar Part 1',
                'city_id' => '1',
                'lat' => 28.5755205,
                'long' => 77.2419522,
                'radius' => 530.6309204101562,
            ),
            90 => 
            array (
                'id' => 2591,
                'name' => 'Lajpat Nagar Part 2',
                'city_id' => '1',
                'lat' => 28.5692718,
                'long' => 77.2441075,
                'radius' => 898.7596435546875,
            ),
            91 => 
            array (
                'id' => 2592,
                'name' => 'Lajpat Nagar Part 3',
                'city_id' => '1',
                'lat' => 28.5674276,
                'long' => 77.2397968,
                'radius' => 739.0140380859375,
            ),
            92 => 
            array (
                'id' => 2593,
                'name' => 'Lajpat Nagar Part 4',
                'city_id' => '1',
                'lat' => 28.5609053,
                'long' => 77.2390784,
                'radius' => 1186.098876953125,
            ),
            93 => 
            array (
                'id' => 2594,
                'name' => 'Lajpat Nagar-1',
                'city_id' => '1',
                'lat' => 28.5755205,
                'long' => 77.2419522,
                'radius' => 530.6309204101562,
            ),
            94 => 
            array (
                'id' => 2595,
                'name' => 'Lajpat Nagar-2',
                'city_id' => '1',
                'lat' => 28.5692718,
                'long' => 77.2441075,
                'radius' => 898.7596435546875,
            ),
            95 => 
            array (
                'id' => 2596,
                'name' => 'Ajpat Nagar-4',
                'city_id' => '1',
                'lat' => 28.5609053,
                'long' => 77.2390784,
                'radius' => 1186.098876953125,
            ),
            96 => 
            array (
                'id' => 2597,
                'name' => 'Lajpat Rai Market',
                'city_id' => '1',
                'lat' => 28.6577391,
                'long' => 77.2358452,
                'radius' => 206.1138458251953,
            ),
            97 => 
            array (
                'id' => 2598,
                'name' => 'Lajwanti Garden',
                'city_id' => '1',
                'lat' => 28.612447,
                'long' => 77.1071655,
                'radius' => 376.38336181640625,
            ),
            98 => 
            array (
                'id' => 2599,
                'name' => 'Lakshmi Bai Nagar',
                'city_id' => '1',
                'lat' => 28.5780204,
                'long' => 77.2087952,
                'radius' => 803.234375,
            ),
            99 => 
            array (
                'id' => 2600,
                'name' => 'Lal Kuan',
                'city_id' => '1',
                'lat' => 28.4936726,
                'long' => 77.2778144,
                'radius' => 1505.040771484375,
            ),
            100 => 
            array (
                'id' => 2601,
                'name' => 'Lawrance Road',
                'city_id' => '1',
                'lat' => 28.678704,
                'long' => 77.14610929999999,
                'radius' => 492.6556701660156,
            ),
            101 => 
            array (
                'id' => 2602,
                'name' => 'Lawrence Road',
                'city_id' => '1',
                'lat' => 28.678704,
                'long' => 77.14610929999999,
                'radius' => 492.6556701660156,
            ),
            102 => 
            array (
                'id' => 2603,
                'name' => 'Laxmi Nagar',
                'city_id' => '1',
                'lat' => 28.6275609,
                'long' => 77.2784081,
                'radius' => 80.8065414428711,
            ),
            103 => 
            array (
                'id' => 2604,
                'name' => 'Laxmi Nagar Market',
                'city_id' => '1',
                'lat' => 28.5228088,
                'long' => 77.1814744,
                'radius' => 22.441423416137695,
            ),
            104 => 
            array (
                'id' => 2605,
                'name' => 'Libaspur',
                'city_id' => '1',
                'lat' => 28.7508636,
                'long' => 77.1459998,
                'radius' => 482.3702087402344,
            ),
            105 => 
            array (
                'id' => 2606,
                'name' => 'Lodhi Colony',
                'city_id' => '1',
                'lat' => 28.5862742,
                'long' => 77.224306,
                'radius' => 1023.6575317382812,
            ),
            106 => 
            array (
                'id' => 2607,
                'name' => 'Lodhi Estate',
                'city_id' => '1',
                'lat' => 28.5930975,
                'long' => 77.22352599999999,
                'radius' => 1142.2264404296875,
            ),
            107 => 
            array (
                'id' => 2608,
                'name' => 'Lodhi Road',
                'city_id' => '1',
                'lat' => 28.5910562,
                'long' => 77.22807809999999,
                'radius' => 1529.14453125,
            ),
            108 => 
            array (
                'id' => 2609,
                'name' => 'Lohia Nagar',
                'city_id' => '1',
                'lat' => 28.6740045,
                'long' => 77.4343394,
                'radius' => 822.7456665039062,
            ),
            109 => 
            array (
                'id' => 2610,
                'name' => 'Lohiya Nagar',
                'city_id' => '1',
                'lat' => 28.6740045,
                'long' => 77.4343394,
                'radius' => 822.7456665039062,
            ),
            110 => 
            array (
                'id' => 2611,
                'name' => 'Loni',
                'city_id' => '1',
                'lat' => 28.7316438,
                'long' => 77.30085059999999,
                'radius' => 2548.541259765625,
            ),
            111 => 
            array (
                'id' => 2612,
                'name' => 'Loni Bhopura Road',
                'city_id' => '1',
                'lat' => 28.7134187,
                'long' => 77.3313479,
                'radius' => 66.51244354248047,
            ),
            112 => 
            array (
                'id' => 2613,
                'name' => 'Loni Road',
                'city_id' => '1',
                'lat' => 28.7014111,
                'long' => 77.2915206,
                'radius' => 2939.043212890625,
            ),
            113 => 
            array (
                'id' => 2614,
                'name' => 'Madangir',
                'city_id' => '1',
                'lat' => 28.5199221,
                'long' => 77.2304564,
                'radius' => 965.8330078125,
            ),
            114 => 
            array (
                'id' => 2615,
                'name' => 'Madanpur Khadar',
                'city_id' => '1',
                'lat' => 28.5308819,
                'long' => 77.3147422,
                'radius' => 2703.42822265625,
            ),
            115 => 
            array (
                'id' => 2616,
                'name' => 'Madhu Vihar',
                'city_id' => '1',
                'lat' => 28.6040325,
                'long' => 77.0607637,
                'radius' => 936.373046875,
            ),
            116 => 
            array (
                'id' => 2617,
                'name' => 'Madipur',
                'city_id' => '1',
                'lat' => 28.6721246,
                'long' => 77.12047129999999,
                'radius' => 460.69537353515625,
            ),
            117 => 
            array (
                'id' => 2618,
                'name' => 'Maharani Bagh',
                'city_id' => '1',
                'lat' => 28.5714978,
                'long' => 77.2640259,
                'radius' => 756.29296875,
            ),
            118 => 
            array (
                'id' => 2619,
                'name' => 'Mahavir Enclave',
                'city_id' => '1',
                'lat' => 28.6029832,
                'long' => 77.0782426,
                'radius' => 1555.9290771484375,
            ),
            119 => 
            array (
                'id' => 2620,
                'name' => 'Mahipalpur',
                'city_id' => '1',
                'lat' => 28.5448686,
                'long' => 77.1281345,
                'radius' => 2851.54833984375,
            ),
            120 => 
            array (
                'id' => 2621,
                'name' => 'Mahipalpur Extension',
                'city_id' => '1',
                'lat' => 28.5470921,
                'long' => 77.1319777,
                'radius' => 904.8633422851562,
            ),
            121 => 
            array (
                'id' => 2622,
                'name' => 'Maliwara',
                'city_id' => '1',
                'lat' => 28.6542541,
                'long' => 77.2293316,
                'radius' => 183.9403076171875,
            ),
            122 => 
            array (
                'id' => 2623,
                'name' => 'Malka Ganj',
                'city_id' => '1',
                'lat' => 28.6767388,
                'long' => 77.20865289999999,
                'radius' => 482.8440856933594,
            ),
            123 => 
            array (
                'id' => 2624,
                'name' => 'Malviya Nagar',
                'city_id' => '1',
                'lat' => 28.5335197,
                'long' => 77.21088569999999,
                'radius' => 1679.0914306640625,
            ),
            124 => 
            array (
                'id' => 2625,
                'name' => 'Mamura',
                'city_id' => '1',
                'lat' => 28.6026361,
                'long' => 77.3769437,
                'radius' => 717.7271728515625,
            ),
            125 => 
            array (
                'id' => 2626,
                'name' => 'Mandawali',
                'city_id' => '1',
                'lat' => 28.6248312,
                'long' => 77.29249949999999,
                'radius' => 1713.201171875,
            ),
            126 => 
            array (
                'id' => 2627,
                'name' => 'Manesar',
                'city_id' => '1',
                'lat' => 28.3542852,
                'long' => 76.9398195,
                'radius' => 1322.2188720703125,
            ),
            127 => 
            array (
                'id' => 2628,
                'name' => 'Mangolpur Kalan',
                'city_id' => '1',
                'lat' => 28.6925367,
                'long' => 77.08842369999999,
                'radius' => 2495.02197265625,
            ),
            128 => 
            array (
                'id' => 2629,
                'name' => 'Mangolpuri',
                'city_id' => '1',
                'lat' => 28.6925367,
                'long' => 77.08842369999999,
                'radius' => 2495.02197265625,
            ),
            129 => 
            array (
                'id' => 2630,
                'name' => 'Mangolpuri Industrial Area Phase 1',
                'city_id' => '1',
                'lat' => 28.68606239999999,
                'long' => 77.0874065,
                'radius' => 199.53916931152344,
            ),
            130 => 
            array (
                'id' => 2631,
                'name' => 'Mangolpuri Industrial Area Phase 2',
                'city_id' => '1',
                'lat' => 28.6850198,
                'long' => 77.0981743,
                'radius' => 616.003662109375,
            ),
            131 => 
            array (
                'id' => 2632,
                'name' => 'Mansarovar Garden',
                'city_id' => '1',
                'lat' => 28.6424915,
                'long' => 77.1326969,
                'radius' => 935.4295654296875,
            ),
            132 => 
            array (
                'id' => 2633,
                'name' => 'Mansarowar Garden',
                'city_id' => '1',
                'lat' => 28.6424915,
                'long' => 77.1326969,
                'radius' => 935.4295654296875,
            ),
            133 => 
            array (
                'id' => 2634,
                'name' => 'Masjid Modh',
                'city_id' => '1',
                'lat' => 28.5436935,
                'long' => 77.2390784,
                'radius' => 1371.64599609375,
            ),
            134 => 
            array (
                'id' => 2635,
                'name' => 'Masudpur',
                'city_id' => '1',
                'lat' => 28.528944,
                'long' => 77.15211140000001,
                'radius' => 611.3885498046875,
            ),
            135 => 
            array (
                'id' => 2636,
                'name' => 'Mathura Road',
                'city_id' => '1',
                'lat' => 28.5374656,
                'long' => 77.28399449999999,
                'radius' => 8214.5244140625,
            ),
            136 => 
            array (
                'id' => 2637,
                'name' => 'Maujpur',
                'city_id' => '1',
                'lat' => 28.6906285,
                'long' => 77.2764329,
                'radius' => 860.193115234375,
            ),
            137 => 
            array (
                'id' => 2638,
                'name' => 'Mayapuri',
                'city_id' => '1',
                'lat' => 28.6293651,
                'long' => 77.1266912,
                'radius' => 2827.439453125,
            ),
            138 => 
            array (
                'id' => 2639,
                'name' => 'Mayapuri Industrial Area Phase 1',
                'city_id' => '1',
                'lat' => 28.6304732,
                'long' => 77.12694379999999,
                'radius' => 1043.1953125,
            ),
            139 => 
            array (
                'id' => 2640,
                'name' => 'Mayapuri Industrial Area Phase 2',
                'city_id' => '1',
                'lat' => 28.6179009,
                'long' => 77.1154368,
                'radius' => 1302.2275390625,
            ),
            140 => 
            array (
                'id' => 2641,
                'name' => 'Mayur Vihar Phase 1',
                'city_id' => '1',
                'lat' => 28.6065926,
                'long' => 77.2936763,
                'radius' => 2219.482666015625,
            ),
            141 => 
            array (
                'id' => 2642,
                'name' => 'Mayur Vihar Phase 2',
                'city_id' => '1',
                'lat' => 28.6169634,
                'long' => 77.30085059999999,
                'radius' => 1145.149169921875,
            ),
            142 => 
            array (
                'id' => 2643,
                'name' => 'Mayur Vihar Phase 3',
                'city_id' => '1',
                'lat' => 28.6095544,
                'long' => 77.3302981,
                'radius' => 2312.4921875,
            ),
            143 => 
            array (
                'id' => 2644,
                'name' => 'Mayur Vihar Phase II',
                'city_id' => '1',
                'lat' => 28.6169634,
                'long' => 77.30085059999999,
                'radius' => 1145.149169921875,
            ),
            144 => 
            array (
                'id' => 2645,
                'name' => 'Mayur Vihar Phase III',
                'city_id' => '1',
                'lat' => 28.6095544,
                'long' => 77.3302981,
                'radius' => 2312.4921875,
            ),
            145 => 
            array (
                'id' => 2646,
                'name' => 'Meera Bagh',
                'city_id' => '1',
                'lat' => 28.6580377,
                'long' => 77.09089080000001,
                'radius' => 1044.1903076171875,
            ),
            146 => 
            array (
                'id' => 2647,
                'name' => 'Meerut Road',
                'city_id' => '1',
                'lat' => 28.6761283,
                'long' => 77.41885309999999,
                'radius' => 806.4067993164062,
            ),
            147 => 
            array (
                'id' => 2648,
                'name' => 'Meerut Road Industrial Area',
                'city_id' => '1',
                'lat' => 28.6886134,
                'long' => 77.4372084,
                'radius' => 3522.3505859375,
            ),
            148 => 
            array (
                'id' => 2649,
                'name' => 'Mehrauli',
                'city_id' => '1',
                'lat' => 28.5212083,
                'long' => 77.1789831,
                'radius' => 1689.7872314453125,
            ),
            149 => 
            array (
                'id' => 2650,
                'name' => 'Mehrauli Gurgaon Road',
                'city_id' => '1',
                'lat' => 28.4940101,
                'long' => 77.1493303,
                'radius' => 3888.870849609375,
            ),
            150 => 
            array (
                'id' => 2651,
                'name' => 'Mehrauli Road',
                'city_id' => '1',
                'lat' => 28.5232298,
                'long' => 77.1775401,
                'radius' => 26.10728645324707,
            ),
            151 => 
            array (
                'id' => 2652,
                'name' => 'MIE',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            152 => 
            array (
                'id' => 2653,
                'name' => 'Minto Road',
                'city_id' => '1',
                'lat' => 28.6390955,
                'long' => 77.2244328,
                'radius' => 541.1725463867188,
            ),
            153 => 
            array (
                'id' => 2654,
                'name' => 'Model Basti',
                'city_id' => '1',
                'lat' => 28.6576466,
                'long' => 77.2029697,
                'radius' => 151.20960998535156,
            ),
            154 => 
            array (
                'id' => 2655,
                'name' => 'Model Town Part 2',
                'city_id' => '1',
                'lat' => 28.6385606,
                'long' => 77.1776331,
                'radius' => 486.9661865234375,
            ),
            155 => 
            array (
                'id' => 2656,
                'name' => 'Model Town Part 3',
                'city_id' => '1',
                'lat' => 28.6952498,
                'long' => 77.1934466,
                'radius' => 277.6090393066406,
            ),
            156 => 
            array (
                'id' => 2657,
                'name' => 'Mohammad Pur',
                'city_id' => '1',
                'lat' => 28.8050416,
                'long' => 77.1844619,
                'radius' => 500.9274597167969,
            ),
            157 => 
            array (
                'id' => 2658,
                'name' => 'Mohammad Pur Majri',
                'city_id' => '1',
                'lat' => 28.7287974,
                'long' => 77.0398951,
                'radius' => 827.666748046875,
            ),
            158 => 
            array (
                'id' => 2659,
                'name' => 'Mohammadpur',
                'city_id' => '1',
                'lat' => 28.5653646,
                'long' => 77.1880559,
                'radius' => 341.2084655761719,
            ),
            159 => 
            array (
                'id' => 2660,
                'name' => 'Mohan Co-Operative Industrial Estate',
                'city_id' => '1',
                'lat' => 28.4894237,
                'long' => 77.30228679999999,
                'radius' => 4052.833740234375,
            ),
            160 => 
            array (
                'id' => 2661,
                'name' => 'Mohan Garden',
                'city_id' => '1',
                'lat' => 28.6225691,
                'long' => 77.0560866,
                'radius' => 239.7255096435547,
            ),
            161 => 
            array (
                'id' => 2662,
                'name' => 'Mohan Nagar',
                'city_id' => '1',
                'lat' => 28.672818,
                'long' => 77.3862836,
                'radius' => 1867.0919189453125,
            ),
            162 => 
            array (
                'id' => 2663,
                'name' => 'Molarband Extension',
                'city_id' => '1',
                'lat' => 28.4916399,
                'long' => 77.3160363,
                'radius' => 1488.113525390625,
            ),
            163 => 
            array (
                'id' => 2664,
                'name' => 'Mori Gate',
                'city_id' => '1',
                'lat' => 28.6630428,
                'long' => 77.2275823,
                'radius' => 1221.860595703125,
            ),
            164 => 
            array (
                'id' => 2665,
                'name' => 'Moti Bagh',
                'city_id' => '1',
                'lat' => 28.5820046,
                'long' => 77.1716841,
                'radius' => 1555.7933349609375,
            ),
            165 => 
            array (
                'id' => 2666,
                'name' => 'Moti Bagh South',
                'city_id' => '1',
                'lat' => 28.5834095,
                'long' => 77.1681275,
                'radius' => 1389.5919189453125,
            ),
            166 => 
            array (
                'id' => 2667,
                'name' => 'Moti Nagar',
                'city_id' => '1',
                'lat' => 28.6623452,
                'long' => 77.14108089999999,
                'radius' => 925.1516723632812,
            ),
            167 => 
            array (
                'id' => 2668,
                'name' => 'Motia Khan',
                'city_id' => '1',
                'lat' => 28.6496551,
                'long' => 77.2074614,
                'radius' => 491.9563293457031,
            ),
            168 => 
            array (
                'id' => 2669,
                'name' => 'Mujesar',
                'city_id' => '1',
                'lat' => 28.367016,
                'long' => 77.3058772,
                'radius' => 525.8486328125,
            ),
            169 => 
            array (
                'id' => 2670,
                'name' => 'Mukarji Park',
                'city_id' => '1',
                'lat' => 28.6430985,
                'long' => 77.10177089999999,
                'radius' => 447.33477783203125,
            ),
            170 => 
            array (
                'id' => 2671,
                'name' => 'Mukharji Nagar',
                'city_id' => '1',
                'lat' => 28.705484,
                'long' => 77.2035219,
                'radius' => 2496.01025390625,
            ),
            171 => 
            array (
                'id' => 2672,
                'name' => 'Mukund Nagar',
                'city_id' => '1',
                'lat' => 28.6693454,
                'long' => 77.42307199999999,
                'radius' => 320.0565185546875,
            ),
            172 => 
            array (
                'id' => 2673,
                'name' => 'Mundka',
                'city_id' => '1',
                'lat' => 28.6823144,
                'long' => 77.034937,
                'radius' => 5041.5283203125,
            ),
            173 => 
            array (
                'id' => 2674,
                'name' => 'Munirka',
                'city_id' => '1',
                'lat' => 28.5532118,
                'long' => 77.1744823,
                'radius' => 1048.595703125,
            ),
            174 => 
            array (
                'id' => 2675,
                'name' => 'Nabi Karim',
                'city_id' => '1',
                'lat' => 28.65242289999999,
                'long' => 77.2139292,
                'radius' => 468.5509033203125,
            ),
            175 => 
            array (
                'id' => 2676,
                'name' => 'Nai Sadak',
                'city_id' => '1',
                'lat' => 28.6533436,
                'long' => 77.2285394,
                'radius' => 389.439697265625,
            ),
            176 => 
            array (
                'id' => 2677,
                'name' => 'Nai Sarak',
                'city_id' => '1',
                'lat' => 28.6533436,
                'long' => 77.2285394,
                'radius' => 389.439697265625,
            ),
            177 => 
            array (
                'id' => 2678,
                'name' => 'Najafgarh',
                'city_id' => '1',
                'lat' => 28.6090126,
                'long' => 76.9854526,
                'radius' => 5471.70361328125,
            ),
            178 => 
            array (
                'id' => 2679,
                'name' => 'Najafgarh Road',
                'city_id' => '1',
                'lat' => 28.6278943,
                'long' => 77.07361519999999,
                'radius' => 9774.8876953125,
            ),
            179 => 
            array (
                'id' => 2680,
                'name' => 'Najafgarh Road Industrial Area',
                'city_id' => '1',
                'lat' => 28.658756,
                'long' => 77.1528304,
                'radius' => 1439.61572265625,
            ),
            180 => 
            array (
                'id' => 2681,
                'name' => 'Nanakpura',
                'city_id' => '1',
                'lat' => 28.5833773,
                'long' => 77.1664905,
                'radius' => 475.05755615234375,
            ),
            181 => 
            array (
                'id' => 2682,
                'name' => 'Nand Nagari',
                'city_id' => '1',
                'lat' => 28.6944225,
                'long' => 77.3095173,
                'radius' => 959.8328857421875,
            ),
            182 => 
            array (
                'id' => 2683,
                'name' => 'Nand Nagri',
                'city_id' => '1',
                'lat' => 28.6944225,
                'long' => 77.3095173,
                'radius' => 959.8328857421875,
            ),
            183 => 
            array (
                'id' => 2684,
                'name' => 'Nangal Raya',
                'city_id' => '1',
                'lat' => 28.6087477,
                'long' => 77.1096829,
                'radius' => 613.4104614257812,
            ),
            184 => 
            array (
                'id' => 2685,
                'name' => 'Nangloi',
                'city_id' => '1',
                'lat' => 28.6841206,
                'long' => 77.0632942,
                'radius' => 3935.734375,
            ),
            185 => 
            array (
                'id' => 2686,
                'name' => 'Nangloi Extension',
                'city_id' => '1',
                'lat' => 28.677984,
                'long' => 77.05500719999999,
                'radius' => 1344.656982421875,
            ),
            186 => 
            array (
                'id' => 2687,
                'name' => 'Nangloi Jat',
                'city_id' => '1',
                'lat' => 28.6841206,
                'long' => 77.0632942,
                'radius' => 3935.734375,
            ),
            187 => 
            array (
                'id' => 2688,
                'name' => 'Naraina',
                'city_id' => '1',
                'lat' => 28.6321415,
                'long' => 77.1388522,
                'radius' => 2279.56103515625,
            ),
            188 => 
            array (
                'id' => 2689,
                'name' => 'Naraina Industrial Area',
                'city_id' => '1',
                'lat' => 28.6313024,
                'long' => 77.13557329999999,
                'radius' => 1586.08447265625,
            ),
            189 => 
            array (
                'id' => 2690,
                'name' => 'Naraina Industrial Area Phase 1',
                'city_id' => '1',
                'lat' => 28.6313024,
                'long' => 77.13557329999999,
                'radius' => 1586.08447265625,
            ),
            190 => 
            array (
                'id' => 2691,
                'name' => 'Naraina Industrial Ph 1',
                'city_id' => '1',
                'lat' => 28.6313024,
                'long' => 77.13557329999999,
                'radius' => 1586.08447265625,
            ),
            191 => 
            array (
                'id' => 2692,
                'name' => 'Naraina Vihar',
                'city_id' => '1',
                'lat' => 28.6289883,
                'long' => 77.1413259,
                'radius' => 1032.3272705078125,
            ),
            192 => 
            array (
                'id' => 2693,
                'name' => 'Narayana Industrial Area Phase 2',
                'city_id' => '1',
                'lat' => 28.6445203,
                'long' => 77.1463593,
                'radius' => 483.47625732421875,
            ),
            193 => 
            array (
                'id' => 2694,
                'name' => 'Narela',
                'city_id' => '1',
                'lat' => 28.8539597,
                'long' => 77.0917838,
                'radius' => 6652.8720703125,
            ),
            194 => 
            array (
                'id' => 2695,
                'name' => 'Narela Industrial Area',
                'city_id' => '1',
                'lat' => 28.829651,
                'long' => 77.1027897,
                'radius' => 1448.1639404296875,
            ),
            195 => 
            array (
                'id' => 2696,
                'name' => 'Nathupur',
                'city_id' => '1',
                'lat' => 28.4879257,
                'long' => 77.0995671,
                'radius' => 826.125244140625,
            ),
            196 => 
            array (
                'id' => 2697,
                'name' => 'Nav Yug Market',
                'city_id' => '1',
                'lat' => 28.6683795,
                'long' => 77.4278838,
                'radius' => 487.7761535644531,
            ),
            197 => 
            array (
                'id' => 2698,
                'name' => 'Naveen Shahdara',
                'city_id' => '1',
                'lat' => 28.6761928,
                'long' => 77.2828969,
                'radius' => 629.1095581054688,
            ),
            198 => 
            array (
                'id' => 2699,
                'name' => 'Naya Bazaar',
                'city_id' => '1',
                'lat' => 28.6590292,
                'long' => 77.2193187,
                'radius' => 327.366455078125,
            ),
            199 => 
            array (
                'id' => 2700,
                'name' => 'Naya Bazar',
                'city_id' => '1',
                'lat' => 28.6590292,
                'long' => 77.2193187,
                'radius' => 327.366455078125,
            ),
            200 => 
            array (
                'id' => 2701,
                'name' => 'Neb Sarai',
                'city_id' => '1',
                'lat' => 28.5049596,
                'long' => 77.20889869999999,
                'radius' => 1129.118896484375,
            ),
            201 => 
            array (
                'id' => 2702,
                'name' => 'Nehru Enclave',
                'city_id' => '1',
                'lat' => 28.5449737,
                'long' => 77.2487773,
                'radius' => 407.8009033203125,
            ),
            202 => 
            array (
                'id' => 2703,
                'name' => 'Nehru Place',
                'city_id' => '1',
                'lat' => 28.5503314,
                'long' => 77.2501893,
                'radius' => 853.0067749023438,
            ),
            203 => 
            array (
                'id' => 2704,
                'name' => 'Nehru Vihar',
                'city_id' => '1',
                'lat' => 28.7102709,
                'long' => 77.22025839999999,
                'radius' => 984.3417358398438,
            ),
            204 => 
            array (
                'id' => 2705,
                'name' => 'Netaji Nagar',
                'city_id' => '1',
                'lat' => 26.3198757,
                'long' => 89.6654994,
                'radius' => 145.370849609375,
            ),
            205 => 
            array (
                'id' => 2706,
                'name' => 'Netaji Subhash Place',
                'city_id' => '1',
                'lat' => 28.6922224,
                'long' => 77.1506734,
                'radius' => 783.7536010742188,
            ),
            206 => 
            array (
                'id' => 2707,
                'name' => 'New Arya Nagar',
                'city_id' => '1',
                'lat' => 28.67851,
                'long' => 77.4241976,
                'radius' => 296.64373779296875,
            ),
            207 => 
            array (
                'id' => 2708,
                'name' => 'New Ashok Nagar',
                'city_id' => '1',
                'lat' => 28.5929914,
                'long' => 77.3051591,
                'radius' => 1267.546630859375,
            ),
            208 => 
            array (
                'id' => 2709,
                'name' => 'New Colony',
                'city_id' => '1',
                'lat' => 28.5304919,
                'long' => 77.2171629,
                'radius' => 257.82598876953125,
            ),
            209 => 
            array (
                'id' => 2710,
                'name' => 'New Friends Colony',
                'city_id' => '1',
                'lat' => 28.5674621,
                'long' => 77.26913259999999,
                'radius' => 4358.55908203125,
            ),
            210 => 
            array (
                'id' => 2711,
                'name' => 'New Industrial Town Ship',
                'city_id' => '1',
                'lat' => 28.3817353,
                'long' => 77.2961392,
                'radius' => 4170.91650390625,
            ),
            211 => 
            array (
                'id' => 2712,
                'name' => 'New Industrial Town Ship 1',
                'city_id' => '1',
                'lat' => 28.3816213,
                'long' => 77.30085059999999,
                'radius' => 1344.0667724609375,
            ),
            212 => 
            array (
                'id' => 2713,
                'name' => 'New Kondli',
                'city_id' => '1',
                'lat' => 28.6048262,
                'long' => 77.3317246,
                'radius' => 810.1564331054688,
            ),
            213 => 
            array (
                'id' => 2714,
                'name' => 'New Lajpat Rai Market',
                'city_id' => '1',
                'lat' => 28.6554519,
                'long' => 77.23440819999999,
                'radius' => 197.40731811523438,
            ),
            214 => 
            array (
                'id' => 2715,
                'name' => 'New Modi Nagar',
                'city_id' => '1',
                'lat' => 28.829399,
                'long' => 77.56999499999999,
                'radius' => 199.42015075683594,
            ),
            215 => 
            array (
                'id' => 2716,
                'name' => 'New Moti Nagar',
                'city_id' => '1',
                'lat' => 28.6628741,
                'long' => 77.1434831,
                'radius' => 606.0742797851562,
            ),
            216 => 
            array (
                'id' => 2717,
                'name' => 'New Railway Road',
                'city_id' => '1',
                'lat' => 28.468373,
                'long' => 77.0255332,
                'radius' => 988.00927734375,
            ),
            217 => 
            array (
                'id' => 2718,
                'name' => 'New Rajdhani Enclave',
                'city_id' => '1',
                'lat' => 28.6428775,
                'long' => 77.2943876,
                'radius' => 387.41033935546875,
            ),
            218 => 
            array (
                'id' => 2719,
                'name' => 'New Rajendra Nagar',
                'city_id' => '1',
                'lat' => 28.6349338,
                'long' => 77.1792825,
                'radius' => 1030.0338134765625,
            ),
            219 => 
            array (
                'id' => 2720,
                'name' => 'New Rohtak Road',
                'city_id' => '1',
                'lat' => 28.6584481,
                'long' => 77.19291199999999,
                'radius' => 1395.3897705078125,
            ),
            220 => 
            array (
                'id' => 2721,
                'name' => 'New Seemapuri',
                'city_id' => '1',
                'lat' => 28.6877187,
                'long' => 77.3288529,
                'radius' => 615.8673706054688,
            ),
            221 => 
            array (
                'id' => 2722,
                'name' => 'New Silampur',
                'city_id' => '1',
                'lat' => 28.6754755,
                'long' => 77.26781369999999,
                'radius' => 1476.4228515625,
            ),
            222 => 
            array (
                'id' => 2723,
                'name' => 'Nirman Vihar',
                'city_id' => '1',
                'lat' => 28.6350273,
                'long' => 77.28720609999999,
                'radius' => 440.5983581542969,
            ),
            223 => 
            array (
                'id' => 2724,
                'name' => 'NIT',
                'city_id' => '1',
                'lat' => 28.8429798,
                'long' => 77.1045429,
                'radius' => 199.4088592529297,
            ),
            224 => 
            array (
                'id' => 2725,
                'name' => 'NIT Faridabad',
                'city_id' => '1',
                'lat' => 28.3817353,
                'long' => 77.2961392,
                'radius' => 4170.91650390625,
            ),
            225 => 
            array (
                'id' => 2726,
                'name' => 'Nit No.1',
                'city_id' => '1',
                'lat' => 28.8429798,
                'long' => 77.1045429,
                'radius' => 199.4088592529297,
            ),
            226 => 
            array (
                'id' => 2727,
                'name' => 'Nit No.3',
                'city_id' => '1',
                'lat' => 28.3924233,
                'long' => 77.29256300000002,
                'radius' => 199.78155517578125,
            ),
            227 => 
            array (
                'id' => 2728,
                'name' => 'Niti Bagh',
                'city_id' => '1',
                'lat' => 28.5595022,
                'long' => 77.21680359999999,
                'radius' => 458.1012268066406,
            ),
            228 => 
            array (
                'id' => 2729,
                'name' => 'Nizamuddin',
                'city_id' => '1',
                'lat' => 28.5948466,
                'long' => 77.2491365,
                'radius' => 1465.1138916015625,
            ),
            229 => 
            array (
                'id' => 2730,
                'name' => 'Nizamuddin East',
                'city_id' => '1',
                'lat' => 28.5902107,
                'long' => 77.24993669999999,
                'radius' => 921.5641479492188,
            ),
            230 => 
            array (
                'id' => 2731,
                'name' => 'Nizamuddin West',
                'city_id' => '1',
                'lat' => 28.5892126,
                'long' => 77.24267069999999,
                'radius' => 704.3504028320312,
            ),
            231 => 
            array (
                'id' => 2732,
                'name' => 'Noida-Sector 38',
                'city_id' => '1',
                'lat' => 28.5623077,
                'long' => 77.3295708,
                'radius' => 1562.9520263671875,
            ),
            232 => 
            array (
                'id' => 2733,
                'name' => 'Noida-Sector 38A',
                'city_id' => '1',
                'lat' => 28.5623077,
                'long' => 77.3295708,
                'radius' => 1562.9520263671875,
            ),
            233 => 
            array (
                'id' => 2734,
                'name' => 'Noida Institutional Area',
                'city_id' => '1',
                'lat' => 28.6197948,
                'long' => 77.3611549,
                'radius' => 1917.4727783203125,
            ),
            234 => 
            array (
                'id' => 2735,
                'name' => 'Noida Link Road',
                'city_id' => '1',
                'lat' => 28.6139542,
                'long' => 77.2825733,
                'radius' => 2264.995849609375,
            ),
            235 => 
            array (
                'id' => 2736,
                'name' => 'Noida Phase 2',
                'city_id' => '1',
                'lat' => 28.5406346,
                'long' => 77.4042102,
                'radius' => 1978.5010986328125,
            ),
            236 => 
            array (
                'id' => 2737,
                'name' => 'Noida Sector 1',
                'city_id' => '1',
                'lat' => 28.6356338,
                'long' => 77.3388511,
                'radius' => 956.0153198242188,
            ),
            237 => 
            array (
                'id' => 2738,
                'name' => 'Noida Sector 10',
                'city_id' => '1',
                'lat' => 28.5904833,
                'long' => 77.3317246,
                'radius' => 609.1842041015625,
            ),
            238 => 
            array (
                'id' => 2739,
                'name' => 'Noida Sector 11',
                'city_id' => '1',
                'lat' => 28.5985755,
                'long' => 77.3338783,
                'radius' => 815.2772216796875,
            ),
            239 => 
            array (
                'id' => 2740,
                'name' => 'Noida Sector 12',
                'city_id' => '1',
                'lat' => 28.5962491,
                'long' => 77.3396212,
                'radius' => 926.8165893554688,
            ),
            240 => 
            array (
                'id' => 2741,
                'name' => 'Noida Sector 15',
                'city_id' => '1',
                'lat' => 28.5820607,
                'long' => 77.3109035,
                'radius' => 674.975341796875,
            ),
            241 => 
            array (
                'id' => 2742,
                'name' => 'Noida Sector 16',
                'city_id' => '1',
                'lat' => 28.5773799,
                'long' => 77.31449359999999,
                'radius' => 560.7459716796875,
            ),
            242 => 
            array (
                'id' => 2743,
                'name' => 'Noida Sector 18',
                'city_id' => '1',
                'lat' => 28.570317,
                'long' => 77.3218196,
                'radius' => 634.781494140625,
            ),
            243 => 
            array (
                'id' => 2744,
                'name' => 'Noida Sector 19',
                'city_id' => '1',
                'lat' => 28.5774092,
                'long' => 77.3223915,
                'radius' => 1010.6768798828125,
            ),
            244 => 
            array (
                'id' => 2745,
                'name' => 'Noida Sector 2',
                'city_id' => '1',
                'lat' => 28.5846875,
                'long' => 77.31592959999999,
                'radius' => 658.5308227539062,
            ),
            245 => 
            array (
                'id' => 2746,
                'name' => 'Noida Sector 22',
                'city_id' => '1',
                'lat' => 28.597062,
                'long' => 77.34823519999999,
                'radius' => 1070.845458984375,
            ),
            246 => 
            array (
                'id' => 2747,
                'name' => 'Noida Sector 26',
                'city_id' => '1',
                'lat' => 28.5792792,
                'long' => 77.3345961,
                'radius' => 680.6890258789062,
            ),
            247 => 
            array (
                'id' => 2748,
                'name' => 'Noida Sector 27',
                'city_id' => '1',
                'lat' => 28.5750829,
                'long' => 77.328135,
                'radius' => 766.1546630859375,
            ),
            248 => 
            array (
                'id' => 2749,
                'name' => 'Noida Sector 29',
                'city_id' => '1',
                'lat' => 28.5692377,
                'long' => 77.3345961,
                'radius' => 707.8945922851562,
            ),
            249 => 
            array (
                'id' => 2750,
                'name' => 'Noida Sector 31',
                'city_id' => '1',
                'lat' => 28.576709,
                'long' => 77.3453639,
                'radius' => 949.6619873046875,
            ),
            250 => 
            array (
                'id' => 2751,
                'name' => 'Noida Sector 37',
                'city_id' => '1',
                'lat' => 28.5670458,
                'long' => 77.3417748,
                'radius' => 875.8566284179688,
            ),
            251 => 
            array (
                'id' => 2752,
                'name' => 'Noida Sector 38A',
                'city_id' => '1',
                'lat' => 28.5623077,
                'long' => 77.3295708,
                'radius' => 1562.9520263671875,
            ),
            252 => 
            array (
                'id' => 2753,
                'name' => 'Noida Sector 41',
                'city_id' => '1',
                'lat' => 28.5639862,
                'long' => 77.3625903,
                'radius' => 924.0213012695312,
            ),
            253 => 
            array (
                'id' => 2754,
                'name' => 'Noida Sector 44',
                'city_id' => '1',
                'lat' => 28.5529427,
                'long' => 77.33674979999999,
                'radius' => 1500.275146484375,
            ),
            254 => 
            array (
                'id' => 2755,
                'name' => 'Noida Sector 49',
                'city_id' => '1',
                'lat' => 28.5621974,
                'long' => 77.3740732,
                'radius' => 1270.0198974609375,
            ),
            255 => 
            array (
                'id' => 2756,
                'name' => 'Noida Sector 5',
                'city_id' => '1',
                'lat' => 28.5888843,
                'long' => 77.3223915,
                'radius' => 813.5094604492188,
            ),
            256 => 
            array (
                'id' => 2757,
                'name' => 'Noida Sector 50',
                'city_id' => '1',
                'lat' => 28.573405,
                'long' => 77.37120259999999,
                'radius' => 1561.4810791015625,
            ),
            257 => 
            array (
                'id' => 2758,
                'name' => 'Noida Sector 51',
                'city_id' => '1',
                'lat' => 28.578603,
                'long' => 77.36546109999999,
                'radius' => 1607.68798828125,
            ),
            258 => 
            array (
                'id' => 2759,
                'name' => 'Noida Sector 53',
                'city_id' => '1',
                'lat' => 28.5898088,
                'long' => 77.3625903,
                'radius' => 948.4418334960938,
            ),
            259 => 
            array (
                'id' => 2760,
                'name' => 'Noida Sector 57',
                'city_id' => '1',
                'lat' => 28.603341,
                'long' => 77.35397739999999,
                'radius' => 761.3560791015625,
            ),
            260 => 
            array (
                'id' => 2761,
                'name' => 'Noida Sector 6',
                'city_id' => '1',
                'lat' => 28.593565,
                'long' => 77.3188016,
                'radius' => 702.9157104492188,
            ),
            261 => 
            array (
                'id' => 2762,
                'name' => 'Noida Sector 61',
                'city_id' => '1',
                'lat' => 28.5960875,
                'long' => 77.3683319,
                'radius' => 826.4104614257812,
            ),
            262 => 
            array (
                'id' => 2763,
                'name' => 'Noida Sector 62',
                'city_id' => '1',
                'lat' => 28.6207641,
                'long' => 77.3639292,
                'radius' => 2597.8310546875,
            ),
            263 => 
            array (
                'id' => 2764,
                'name' => 'Noida Sector 63',
                'city_id' => '1',
                'lat' => 28.6266412,
                'long' => 77.3848031,
                'radius' => 1815.87255859375,
            ),
            264 => 
            array (
                'id' => 2765,
                'name' => 'Noida Sector 9',
                'city_id' => '1',
                'lat' => 28.5872077,
                'long' => 77.32741709999999,
                'radius' => 608.4888916015625,
            ),
            265 => 
            array (
                'id' => 2766,
                'name' => 'Okhla',
                'city_id' => '1',
                'lat' => 28.56028,
                'long' => 77.2913315,
                'radius' => 3286.80029296875,
            ),
            266 => 
            array (
                'id' => 2767,
                'name' => 'Okhla Industrail Area',
                'city_id' => '1',
                'lat' => 28.5317061,
                'long' => 77.27655659999999,
                'radius' => 3488.55615234375,
            ),
            267 => 
            array (
                'id' => 2768,
                'name' => 'Okhla Industrial Area',
                'city_id' => '1',
                'lat' => 28.5317061,
                'long' => 77.27655659999999,
                'radius' => 3488.55615234375,
            ),
            268 => 
            array (
                'id' => 2769,
                'name' => 'Okhla Industrial Area Ph 1',
                'city_id' => '1',
                'lat' => 28.5245577,
                'long' => 77.2793059,
                'radius' => 1403.0994873046875,
            ),
            269 => 
            array (
                'id' => 2770,
                'name' => 'Okhla Industrial Area Ph 2',
                'city_id' => '1',
                'lat' => 28.5357628,
                'long' => 77.2764329,
                'radius' => 1193.7862548828125,
            ),
            270 => 
            array (
                'id' => 2771,
                'name' => 'Okhla Industrial Area Ph 3',
                'city_id' => '1',
                'lat' => 28.549291,
                'long' => 77.26781369999999,
                'radius' => 1014.4000854492188,
            ),
            271 => 
            array (
                'id' => 2772,
                'name' => 'Okhla Industrial Area Phase 1',
                'city_id' => '1',
                'lat' => 28.5245577,
                'long' => 77.2793059,
                'radius' => 1403.0994873046875,
            ),
            272 => 
            array (
                'id' => 2773,
                'name' => 'Okhla Industrial Area Phase 2',
                'city_id' => '1',
                'lat' => 28.5357628,
                'long' => 77.2764329,
                'radius' => 1193.7862548828125,
            ),
            273 => 
            array (
                'id' => 2774,
                'name' => 'Okhla Industrial Area Phase 3',
                'city_id' => '1',
                'lat' => 28.549291,
                'long' => 77.26781369999999,
                'radius' => 1014.4000854492188,
            ),
            274 => 
            array (
                'id' => 2775,
                'name' => 'Okhla Industrial Estate',
                'city_id' => '1',
                'lat' => 28.5317061,
                'long' => 77.27655659999999,
                'radius' => 3488.55615234375,
            ),
            275 => 
            array (
                'id' => 2776,
                'name' => 'Old DLF Colony',
                'city_id' => '1',
                'lat' => 28.4702791,
                'long' => 77.0452925,
                'radius' => 461.5066223144531,
            ),
            276 => 
            array (
                'id' => 2777,
                'name' => 'Old Faridabad',
                'city_id' => '1',
                'lat' => 28.4203197,
                'long' => 77.31420899999999,
                'radius' => 2033.5787353515625,
            ),
            277 => 
            array (
                'id' => 2778,
                'name' => 'Old Lajpat Rai Market',
                'city_id' => '1',
                'lat' => 28.6577391,
                'long' => 77.2358452,
                'radius' => 206.1138458251953,
            ),
            278 => 
            array (
                'id' => 2779,
                'name' => 'Old Railway Road',
                'city_id' => '1',
                'lat' => 28.4671919,
                'long' => 77.02087929999999,
                'radius' => 2840.901611328125,
            ),
            279 => 
            array (
                'id' => 2780,
                'name' => 'Old Rajender Nagar',
                'city_id' => '1',
                'lat' => 28.6404268,
                'long' => 77.18589949999999,
                'radius' => 1292.30859375,
            ),
            280 => 
            array (
                'id' => 2781,
                'name' => 'Old Rajendra Nagar',
                'city_id' => '1',
                'lat' => 28.6404268,
                'long' => 77.18589949999999,
                'radius' => 1292.30859375,
            ),
            281 => 
            array (
                'id' => 2782,
                'name' => 'Paharganj',
                'city_id' => '1',
                'lat' => 28.6480367,
                'long' => 77.21298709999999,
                'radius' => 1620.569580078125,
            ),
            282 => 
            array (
                'id' => 2783,
                'name' => 'Palam',
                'city_id' => '1',
                'lat' => 28.5900637,
                'long' => 77.08878279999999,
                'radius' => 2501.962158203125,
            ),
            283 => 
            array (
                'id' => 2784,
                'name' => 'Palam Colony',
                'city_id' => '1',
                'lat' => 28.5900637,
                'long' => 77.08878279999999,
                'radius' => 2501.962158203125,
            ),
            284 => 
            array (
                'id' => 2785,
                'name' => 'Palam Vihar',
                'city_id' => '1',
                'lat' => 28.5127828,
                'long' => 77.0368925,
                'radius' => 2701.151123046875,
            ),
            285 => 
            array (
                'id' => 2786,
                'name' => 'Palam Vihar Road',
                'city_id' => '1',
                'lat' => 28.511651,
                'long' => 77.0315883,
                'radius' => 1040.18505859375,
            ),
            286 => 
            array (
                'id' => 2787,
                'name' => 'Palam Village',
                'city_id' => '1',
                'lat' => 28.5900637,
                'long' => 77.08878279999999,
                'radius' => 2501.962158203125,
            ),
            287 => 
            array (
                'id' => 2788,
                'name' => 'Palika Bazar',
                'city_id' => '1',
                'lat' => 28.6310085,
                'long' => 77.2186001,
                'radius' => 224.58692932128906,
            ),
            288 => 
            array (
                'id' => 2789,
                'name' => 'Panchkuian Road',
                'city_id' => '1',
                'lat' => 28.6386038,
                'long' => 77.2098895,
                'radius' => 847.1715698242188,
            ),
            289 => 
            array (
                'id' => 2790,
                'name' => 'Panchsheel Enclave',
                'city_id' => '1',
                'lat' => 28.54482,
                'long' => 77.2283008,
                'radius' => 543.0173950195312,
            ),
            290 => 
            array (
                'id' => 2791,
                'name' => 'Panchsheel Park',
                'city_id' => '1',
                'lat' => 28.5415056,
                'long' => 77.21608499999999,
                'radius' => 928.859375,
            ),
            291 => 
            array (
                'id' => 2792,
                'name' => 'Pandav Nagar',
                'city_id' => '1',
                'lat' => 28.6147804,
                'long' => 77.2776579,
                'radius' => 2718.744873046875,
            ),
            292 => 
            array (
                'id' => 2793,
                'name' => 'Pankha Road',
                'city_id' => '1',
                'lat' => 28.614241,
                'long' => 77.0852287,
                'radius' => 2409.7265625,
            ),
            293 => 
            array (
                'id' => 2794,
                'name' => 'Parliament Street',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            294 => 
            array (
                'id' => 2795,
                'name' => 'Parwana Road',
                'city_id' => '1',
                'lat' => 28.6928509,
                'long' => 77.12000119999999,
                'radius' => 1446.6617431640625,
            ),
            295 => 
            array (
                'id' => 2796,
                'name' => 'Paschim Puri',
                'city_id' => '1',
                'lat' => 28.6637593,
                'long' => 77.1154368,
                'radius' => 771.9550170898438,
            ),
            296 => 
            array (
                'id' => 2797,
                'name' => 'East Patel Nagar',
                'city_id' => '1',
                'lat' => 28.6468151,
                'long' => 77.1721199,
                'radius' => 862.3925170898438,
            ),
            297 => 
            array (
                'id' => 2798,
                'name' => 'Patiala House',
                'city_id' => '1',
                'lat' => 28.6153115,
                'long' => 77.23440819999999,
                'radius' => 233.86557006835938,
            ),
            298 => 
            array (
                'id' => 2799,
                'name' => 'Patiala House Court',
                'city_id' => '1',
                'lat' => 28.6154844,
                'long' => 77.2348124,
                'radius' => 85.20880126953125,
            ),
            299 => 
            array (
                'id' => 2800,
                'name' => 'Patparganj',
                'city_id' => '1',
                'lat' => 28.6199877,
                'long' => 77.292355,
                'radius' => 3707.220947265625,
            ),
            300 => 
            array (
                'id' => 2801,
                'name' => 'Patparganj Industrial Area',
                'city_id' => '1',
                'lat' => 28.6394246,
                'long' => 77.3109035,
                'radius' => 937.8922119140625,
            ),
            301 => 
            array (
                'id' => 2802,
                'name' => 'Peera Garhi',
                'city_id' => '1',
                'lat' => 28.67822589999999,
                'long' => 77.0945777,
                'radius' => 544.5199584960938,
            ),
            302 => 
            array (
                'id' => 2803,
                'name' => 'Pira Garhi',
                'city_id' => '1',
                'lat' => 28.6765157,
                'long' => 77.0917003,
                'radius' => 719.2874755859375,
            ),
            303 => 
            array (
                'id' => 2804,
                'name' => 'Pragati Maidan',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            304 => 
            array (
                'id' => 2805,
                'name' => 'Prashant Vihar',
                'city_id' => '1',
                'lat' => 28.7157406,
                'long' => 77.1351454,
                'radius' => 954.8416137695312,
            ),
            305 => 
            array (
                'id' => 2806,
                'name' => 'Pratap Nagar',
                'city_id' => '1',
                'lat' => 28.6692691,
                'long' => 77.19524349999999,
                'radius' => 749.08349609375,
            ),
            306 => 
            array (
                'id' => 2807,
                'name' => 'Preet Vihar',
                'city_id' => '1',
                'lat' => 28.63642,
                'long' => 77.2927538,
                'radius' => 1260.516845703125,
            ),
            307 => 
            array (
                'id' => 2808,
                'name' => 'Prem Nagar',
                'city_id' => '1',
                'lat' => 28.6907368,
                'long' => 77.053568,
                'radius' => 1619.7779541015625,
            ),
            308 => 
            array (
                'id' => 2809,
                'name' => 'Priyadarshini Vihar',
                'city_id' => '1',
                'lat' => 28.6413779,
                'long' => 77.2785876,
                'radius' => 442.51312255859375,
            ),
            309 => 
            array (
                'id' => 2810,
                'name' => 'Pulpehladpur',
                'city_id' => '1',
                'lat' => 28.4993959,
                'long' => 77.29183909999999,
                'radius' => 1110.877685546875,
            ),
            310 => 
            array (
                'id' => 2811,
                'name' => 'Punjabi Bagh East',
                'city_id' => '1',
                'lat' => 28.673751,
                'long' => 77.12733759999999,
                'radius' => 2943.64453125,
            ),
            311 => 
            array (
                'id' => 2812,
                'name' => 'Punjabi Bagh Extension',
                'city_id' => '1',
                'lat' => 28.66197529999999,
                'long' => 77.1241557,
                'radius' => 966.4614868164062,
            ),
            312 => 
            array (
                'id' => 2813,
                'name' => 'Punjabi Bagh West',
                'city_id' => '1',
                'lat' => 28.66197529999999,
                'long' => 77.1241557,
                'radius' => 966.4614868164062,
            ),
            313 => 
            array (
                'id' => 2814,
                'name' => 'Pusa Road',
                'city_id' => '1',
                'lat' => 28.6440078,
                'long' => 77.1880376,
                'radius' => 892.5997314453125,
            ),
            314 => 
            array (
                'id' => 2815,
                'name' => 'Pushp Vihar',
                'city_id' => '1',
                'lat' => 28.5236421,
                'long' => 77.2225225,
                'radius' => 1391.9547119140625,
            ),
            315 => 
            array (
                'id' => 2816,
                'name' => 'Qutab Institutional Area',
                'city_id' => '1',
                'lat' => 28.5384505,
                'long' => 77.1846218,
                'radius' => 1455.064208984375,
            ),
            316 => 
            array (
                'id' => 2817,
                'name' => 'R K Puram',
                'city_id' => '1',
                'lat' => 28.5660075,
                'long' => 77.1767435,
                'radius' => 2236.966064453125,
            ),
            317 => 
            array (
                'id' => 2818,
                'name' => 'R K Puram Sector 1',
                'city_id' => '1',
                'lat' => 28.5633813,
                'long' => 77.1823055,
                'radius' => 460.50482177734375,
            ),
            318 => 
            array (
                'id' => 2819,
                'name' => 'R K Puram Sector 12',
                'city_id' => '1',
                'lat' => 28.5743032,
                'long' => 77.17655479999999,
                'radius' => 645.4630737304688,
            ),
            319 => 
            array (
                'id' => 2820,
                'name' => 'R K Puram Sector 6',
                'city_id' => '1',
                'lat' => 28.566073,
                'long' => 77.1729605,
                'radius' => 792.0411987304688,
            ),
            320 => 
            array (
                'id' => 2821,
                'name' => 'R K Puram Sector 8',
                'city_id' => '1',
                'lat' => 28.5719067,
                'long' => 77.1664905,
                'radius' => 536.0222778320312,
            ),
            321 => 
            array (
                'id' => 2822,
                'name' => 'R K Puram Sector 9',
                'city_id' => '1',
                'lat' => 28.5737533,
                'long' => 77.1708039,
                'radius' => 445.5097961425781,
            ),
            322 => 
            array (
                'id' => 2823,
                'name' => 'Radheypuri Extension',
                'city_id' => '1',
                'lat' => 28.653682,
                'long' => 77.291156,
                'radius' => 235.03126525878906,
            ),
            323 => 
            array (
                'id' => 2824,
                'name' => 'Raghubir Nagar',
                'city_id' => '1',
                'lat' => 28.6570269,
                'long' => 77.1114928,
                'radius' => 1616.493896484375,
            ),
            324 => 
            array (
                'id' => 2825,
                'name' => 'Railway Road',
                'city_id' => '1',
                'lat' => 28.6735818,
                'long' => 77.31637549999999,
                'radius' => 301.0662536621094,
            ),
            325 => 
            array (
                'id' => 2826,
                'name' => 'Railway Station Colony',
                'city_id' => '1',
                'lat' => 28.4383238,
                'long' => 76.9307034,
                'radius' => 37.874656677246094,
            ),
            326 => 
            array (
                'id' => 2827,
                'name' => 'Raj Nagar',
                'city_id' => '1',
                'lat' => 28.5794838,
                'long' => 77.0802425,
                'radius' => 1449.7459716796875,
            ),
            327 => 
            array (
                'id' => 2828,
                'name' => 'Raja Garden',
                'city_id' => '1',
                'lat' => 28.6521553,
                'long' => 77.12514589999999,
                'radius' => 290.51971435546875,
            ),
            328 => 
            array (
                'id' => 2829,
                'name' => 'Rajauri Garden',
                'city_id' => '1',
                'lat' => 28.6415294,
                'long' => 77.1209145,
                'radius' => 1413.048583984375,
            ),
            329 => 
            array (
                'id' => 2830,
                'name' => 'Rajeev Nagar',
                'city_id' => '1',
                'lat' => 28.7250664,
                'long' => 77.0568062,
                'radius' => 418.7471923828125,
            ),
            330 => 
            array (
                'id' => 2831,
                'name' => 'Rajender Nagar',
                'city_id' => '1',
                'lat' => 28.6372353,
                'long' => 77.18236379999999,
                'radius' => 1298.2989501953125,
            ),
            331 => 
            array (
                'id' => 2832,
                'name' => 'Rajendra Nagar',
                'city_id' => '1',
                'lat' => 28.6875186,
                'long' => 77.36529209999999,
                'radius' => 2662.1591796875,
            ),
            332 => 
            array (
                'id' => 2833,
                'name' => 'Rajendra Place',
                'city_id' => '1',
                'lat' => 28.6432533,
                'long' => 77.17799250000002,
                'radius' => 361.67730712890625,
            ),
            333 => 
            array (
                'id' => 2834,
                'name' => 'Rajgarh Colony',
                'city_id' => '1',
                'lat' => 28.6616183,
                'long' => 77.27458680000001,
                'radius' => 458.8563232421875,
            ),
            334 => 
            array (
                'id' => 2835,
                'name' => 'Rajiv Nagar',
                'city_id' => '1',
                'lat' => 28.7250664,
                'long' => 77.0568062,
                'radius' => 418.7471923828125,
            ),
            335 => 
            array (
                'id' => 2836,
                'name' => 'Rajouri Garden',
                'city_id' => '1',
                'lat' => 28.6415294,
                'long' => 77.1209145,
                'radius' => 1413.048583984375,
            ),
            336 => 
            array (
                'id' => 2837,
                'name' => 'Ram Nagar',
                'city_id' => '1',
                'lat' => 28.6802872,
                'long' => 77.2958239,
                'radius' => 933.2537841796875,
            ),
            337 => 
            array (
                'id' => 2838,
                'name' => 'Ramakrishna Puram',
                'city_id' => '1',
                'lat' => 28.5660075,
                'long' => 77.1767435,
                'radius' => 2236.966064453125,
            ),
            338 => 
            array (
                'id' => 2839,
                'name' => 'Ramesh Nagar',
                'city_id' => '1',
                'lat' => 28.65109,
                'long' => 77.1326969,
                'radius' => 1009.0982666015625,
            ),
            339 => 
            array (
                'id' => 2840,
                'name' => 'Ramkrishnapuram',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            340 => 
            array (
                'id' => 2841,
                'name' => 'Rampura',
                'city_id' => '1',
                'lat' => 28.6732479,
                'long' => 77.1526506,
                'radius' => 192.5063018798828,
            ),
            341 => 
            array (
                'id' => 2842,
                'name' => 'Ramteram Road',
                'city_id' => '1',
                'lat' => 28.6618851,
                'long' => 77.43052879999999,
                'radius' => 484.6374206542969,
            ),
            342 => 
            array (
                'id' => 2843,
                'name' => 'Rana Pratap Bagh',
                'city_id' => '1',
                'lat' => 28.6867499,
                'long' => 77.1909513,
                'radius' => 451.9972839355469,
            ),
            343 => 
            array (
                'id' => 2844,
                'name' => 'Rangpuri',
                'city_id' => '1',
                'lat' => 28.527879,
                'long' => 77.10988970000001,
                'radius' => 3133.960693359375,
            ),
            344 => 
            array (
                'id' => 2845,
                'name' => 'Rani Bagh Rd',
                'city_id' => '1',
                'lat' => 28.6155727,
                'long' => 77.07181709999999,
                'radius' => 1229.5635986328125,
            ),
            345 => 
            array (
                'id' => 2846,
                'name' => 'Rani Jhansi Road',
                'city_id' => '1',
                'lat' => 28.6622398,
                'long' => 77.2072602,
                'radius' => 1547.0643310546875,
            ),
            346 => 
            array (
                'id' => 2847,
                'name' => 'Ranjit Nagar',
                'city_id' => '1',
                'lat' => 28.6473089,
                'long' => 77.1579605,
                'radius' => 767.9022216796875,
            ),
            347 => 
            array (
                'id' => 2848,
                'name' => 'Red Fort',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            348 => 
            array (
                'id' => 2849,
                'name' => 'Rohini-Sector 13',
                'city_id' => '1',
                'lat' => 28.7225368,
                'long' => 77.12775859999999,
                'radius' => 1560.234619140625,
            ),
            349 => 
            array (
                'id' => 2850,
                'name' => 'Rohini-Sector 14',
                'city_id' => '1',
                'lat' => 28.7112672,
                'long' => 77.1326969,
                'radius' => 1217.753662109375,
            ),
            350 => 
            array (
                'id' => 2851,
                'name' => 'Rohini-Sector 2',
                'city_id' => '1',
                'lat' => 28.6975436,
                'long' => 77.10177089999999,
                'radius' => 815.1835327148438,
            ),
            351 => 
            array (
                'id' => 2852,
                'name' => 'Rohini-Sector 3',
                'city_id' => '1',
                'lat' => 28.7077393,
                'long' => 77.10758919999999,
                'radius' => 106.31661987304688,
            ),
            352 => 
            array (
                'id' => 2853,
                'name' => 'Rohini-Sector 9',
                'city_id' => '1',
                'lat' => 28.7161663,
                'long' => 77.1240672,
                'radius' => 1146.7191162109375,
            ),
            353 => 
            array (
                'id' => 2854,
                'name' => 'Rohini Sec-16',
                'city_id' => '1',
                'lat' => 28.7419484,
                'long' => 77.1240672,
                'radius' => 541.0272827148438,
            ),
            354 => 
            array (
                'id' => 2855,
                'name' => 'Rohini Sector 1',
                'city_id' => '1',
                'lat' => 28.7047976,
                'long' => 77.095297,
                'radius' => 981.33251953125,
            ),
            355 => 
            array (
                'id' => 2856,
                'name' => 'Rohini Sector 10',
                'city_id' => '1',
                'lat' => 28.7210643,
                'long' => 77.1154368,
                'radius' => 1299.84521484375,
            ),
            356 => 
            array (
                'id' => 2857,
                'name' => 'Rohini Sector 11',
                'city_id' => '1',
                'lat' => 28.7360107,
                'long' => 77.11076179999999,
                'radius' => 315.17059326171875,
            ),
            357 => 
            array (
                'id' => 2858,
                'name' => 'Rohini Sector 15',
                'city_id' => '1',
                'lat' => 28.7309194,
                'long' => 77.1277312,
                'radius' => 1335.529296875,
            ),
            358 => 
            array (
                'id' => 2859,
                'name' => 'Rohini Sector 16',
                'city_id' => '1',
                'lat' => 28.7419484,
                'long' => 77.1240672,
                'radius' => 541.0272827148438,
            ),
            359 => 
            array (
                'id' => 2860,
                'name' => 'Rohini Sector 17',
                'city_id' => '1',
                'lat' => 28.7408388,
                'long' => 77.1125599,
                'radius' => 1051.8157958984375,
            ),
            360 => 
            array (
                'id' => 2861,
                'name' => 'Rohini Sector 18',
                'city_id' => '1',
                'lat' => 28.7430568,
                'long' => 77.13557329999999,
                'radius' => 966.4451904296875,
            ),
            361 => 
            array (
                'id' => 2862,
                'name' => 'Rohini Sector 2',
                'city_id' => '1',
                'lat' => 28.6975436,
                'long' => 77.10177089999999,
                'radius' => 815.1835327148438,
            ),
            362 => 
            array (
                'id' => 2863,
                'name' => 'Rohini Sector 24',
                'city_id' => '1',
                'lat' => 28.7284523,
                'long' => 77.0881034,
                'radius' => 1539.563720703125,
            ),
            363 => 
            array (
                'id' => 2864,
                'name' => 'Rohini Sector 3',
                'city_id' => '1',
                'lat' => 28.7077393,
                'long' => 77.10758919999999,
                'radius' => 106.31661987304688,
            ),
            364 => 
            array (
                'id' => 2865,
                'name' => 'Rohini Sector 4',
                'city_id' => '1',
                'lat' => 28.7065313,
                'long' => 77.1021305,
                'radius' => 304.7259216308594,
            ),
            365 => 
            array (
                'id' => 2866,
                'name' => 'Rohini Sector 5',
                'city_id' => '1',
                'lat' => 28.71123399999999,
                'long' => 77.10466799999999,
                'radius' => 293.326171875,
            ),
            366 => 
            array (
                'id' => 2867,
                'name' => 'Rohini Sector 6',
                'city_id' => '1',
                'lat' => 28.7112223,
                'long' => 77.1082342,
                'radius' => 345.1924133300781,
            ),
            367 => 
            array (
                'id' => 2868,
                'name' => 'Rohini Sector 7',
                'city_id' => '1',
                'lat' => 28.7090361,
                'long' => 77.1130847,
                'radius' => 190.392578125,
            ),
            368 => 
            array (
                'id' => 2869,
                'name' => 'Rohini Sector 8',
                'city_id' => '1',
                'lat' => 28.7020337,
                'long' => 77.12379279999999,
                'radius' => 690.2389526367188,
            ),
            369 => 
            array (
                'id' => 2870,
                'name' => 'Rohini Sector 9',
                'city_id' => '1',
                'lat' => 28.7161663,
                'long' => 77.1240672,
                'radius' => 1146.7191162109375,
            ),
            370 => 
            array (
                'id' => 2871,
                'name' => 'Rohtak Road',
                'city_id' => '1',
                'lat' => 28.6785107,
                'long' => 77.0987732,
                'radius' => 154.82330322265625,
            ),
            371 => 
            array (
                'id' => 2872,
                'name' => 'Rohtash Nagar East',
                'city_id' => '1',
                'lat' => 28.6654148,
                'long' => 77.2927883,
                'radius' => 527.9404296875,
            ),
            372 => 
            array (
                'id' => 2873,
                'name' => 'Rohtash Nagar West',
                'city_id' => '1',
                'lat' => 28.6074901,
                'long' => 77.0724558,
                'radius' => 171.70396423339844,
            ),
            373 => 
            array (
                'id' => 2874,
                'name' => 'Roop Nagar',
                'city_id' => '1',
                'lat' => 28.6855831,
                'long' => 77.2009932,
                'radius' => 698.3335571289062,
            ),
            374 => 
            array (
                'id' => 2875,
                'name' => 'Roshan Pura',
                'city_id' => '1',
                'lat' => 28.6013521,
                'long' => 76.9769082,
                'radius' => 970.414306640625,
            ),
            375 => 
            array (
                'id' => 2876,
                'name' => 'Roshanara Road',
                'city_id' => '1',
                'lat' => 28.6777029,
                'long' => 77.20514969999999,
                'radius' => 285.846435546875,
            ),
            376 => 
            array (
                'id' => 2877,
                'name' => 'Sadar Bazaar',
                'city_id' => '1',
                'lat' => 28.6569553,
                'long' => 77.2122028,
                'radius' => 1533.7364501953125,
            ),
            377 => 
            array (
                'id' => 2878,
                'name' => 'Sadar Thana Road',
                'city_id' => '1',
                'lat' => 28.6544806,
                'long' => 77.21133429999999,
                'radius' => 471.9549865722656,
            ),
            378 => 
            array (
                'id' => 2879,
                'name' => 'Sadatpur',
                'city_id' => '1',
                'lat' => 28.7258733,
                'long' => 77.2627855,
                'radius' => 838.110107421875,
            ),
            379 => 
            array (
                'id' => 2880,
                'name' => 'Safdarjanj Enclave',
                'city_id' => '1',
                'lat' => 28.5632857,
                'long' => 77.1911547,
                'radius' => 1209.8717041015625,
            ),
            380 => 
            array (
                'id' => 2881,
                'name' => 'Safdarjung Development Area',
                'city_id' => '1',
                'lat' => 28.5506847,
                'long' => 77.2005212,
                'radius' => 725.3720092773438,
            ),
            381 => 
            array (
                'id' => 2882,
                'name' => 'Safdarjung Enclave',
                'city_id' => '1',
                'lat' => 28.5632857,
                'long' => 77.1911547,
                'radius' => 1209.8717041015625,
            ),
            382 => 
            array (
                'id' => 2883,
                'name' => 'Sagar Pur',
                'city_id' => '1',
                'lat' => 28.6041009,
                'long' => 77.0976165,
                'radius' => 1308.9874267578125,
            ),
            383 => 
            array (
                'id' => 2884,
                'name' => 'Sagarpur West',
                'city_id' => '1',
                'lat' => 28.5984641,
                'long' => 77.09481079999999,
                'radius' => 1905.066650390625,
            ),
            384 => 
            array (
                'id' => 2885,
                'name' => 'Sahibabad',
                'city_id' => '1',
                'lat' => 28.6653643,
                'long' => 77.3493347,
                'radius' => 3992.495849609375,
            ),
            385 => 
            array (
                'id' => 2886,
                'name' => 'Sahibabad Industrial Area',
                'city_id' => '1',
                'lat' => 28.6754258,
                'long' => 77.3448995,
                'radius' => 2020.79345703125,
            ),
            386 => 
            array (
                'id' => 2887,
                'name' => 'Sahibabad Industrial Area Site 4',
                'city_id' => '1',
                'lat' => 28.6609173,
                'long' => 77.3410569,
                'radius' => 3410.393798828125,
            ),
            387 => 
            array (
                'id' => 2888,
                'name' => 'Saini Enclave',
                'city_id' => '1',
                'lat' => 28.6527655,
                'long' => 77.3060567,
                'radius' => 234.90509033203125,
            ),
            388 => 
            array (
                'id' => 2889,
                'name' => 'Sainik Farm',
                'city_id' => '1',
                'lat' => 28.5068824,
                'long' => 77.211229,
                'radius' => 3622.868408203125,
            ),
            389 => 
            array (
                'id' => 2890,
                'name' => 'Saiyad Ul Ajaib',
                'city_id' => '1',
                'lat' => 28.517186,
                'long' => 77.20171189999999,
                'radius' => 1348.571044921875,
            ),
            390 => 
            array (
                'id' => 2891,
                'name' => 'Saket',
                'city_id' => '1',
                'lat' => 28.5245787,
                'long' => 77.206615,
                'radius' => 1110.3472900390625,
            ),
            391 => 
            array (
                'id' => 2892,
                'name' => 'Samaipur',
                'city_id' => '1',
                'lat' => 28.7417561,
                'long' => 77.1448662,
                'radius' => 504.73931884765625,
            ),
            392 => 
            array (
                'id' => 2893,
                'name' => 'Samaypur',
                'city_id' => '1',
                'lat' => 28.7484487,
                'long' => 77.1438812,
                'radius' => 1316.0479736328125,
            ),
            393 => 
            array (
                'id' => 2894,
                'name' => 'Samaypur Badli',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            394 => 
            array (
                'id' => 2895,
                'name' => 'Sangam Vihar',
                'city_id' => '1',
                'lat' => 28.498909,
                'long' => 77.2389974,
                'radius' => 2435.02880859375,
            ),
            395 => 
            array (
                'id' => 2896,
                'name' => 'Sanjay Colony/Ghaziabad',
                'city_id' => '1',
                'lat' => 28.6725833,
                'long' => 77.3936947,
                'radius' => 615.492431640625,
            ),
            396 => 
            array (
                'id' => 2897,
                'name' => 'Sanjay Gandhi Memorial Nagar',
                'city_id' => '1',
                'lat' => 28.403512,
                'long' => 77.28936060000001,
                'radius' => 1536.5328369140625,
            ),
            397 => 
            array (
                'id' => 2898,
                'name' => 'Sanjay Gandhi Transport Nagar',
                'city_id' => '1',
                'lat' => 28.7387115,
                'long' => 77.1499544,
                'radius' => 1089.6624755859375,
            ),
            398 => 
            array (
                'id' => 2899,
                'name' => 'Sansad Marg',
                'city_id' => '1',
                'lat' => 28.6254283,
                'long' => 77.2142044,
                'radius' => 865.3584594726562,
            ),
            399 => 
            array (
                'id' => 2900,
                'name' => 'Sant Nagar',
                'city_id' => '1',
                'lat' => 28.6894699,
                'long' => 77.13312619999999,
                'radius' => 365.37353515625,
            ),
            400 => 
            array (
                'id' => 2901,
                'name' => 'Sarai Julena',
                'city_id' => '1',
                'lat' => 28.5600653,
                'long' => 77.27176419999999,
                'radius' => 309.7474670410156,
            ),
            401 => 
            array (
                'id' => 2902,
                'name' => 'Sarai Khwaja',
                'city_id' => '1',
                'lat' => 28.4791347,
                'long' => 77.30731329999999,
                'radius' => 971.9365234375,
            ),
            402 => 
            array (
                'id' => 2903,
                'name' => 'Sarai Rohila',
                'city_id' => '1',
                'lat' => 28.6653838,
                'long' => 77.18881329999999,
                'radius' => 1360.5528564453125,
            ),
            403 => 
            array (
                'id' => 2904,
                'name' => 'Sarai Rohilla',
                'city_id' => '1',
                'lat' => 28.6653838,
                'long' => 77.18881329999999,
                'radius' => 1360.5528564453125,
            ),
            404 => 
            array (
                'id' => 2905,
                'name' => 'Saraswati Vihar',
                'city_id' => '1',
                'lat' => 28.6964967,
                'long' => 77.1250482,
                'radius' => 1086.18115234375,
            ),
            405 => 
            array (
                'id' => 2906,
                'name' => 'Sardar Bazar',
                'city_id' => '1',
                'lat' => 28.6569553,
                'long' => 77.2122028,
                'radius' => 1533.7364501953125,
            ),
            406 => 
            array (
                'id' => 2907,
                'name' => 'Sarita Vihar',
                'city_id' => '1',
                'lat' => 28.5279579,
                'long' => 77.289785,
                'radius' => 2141.71484375,
            ),
            407 => 
            array (
                'id' => 2908,
                'name' => 'Sarojani Nagar',
                'city_id' => '1',
                'lat' => 28.5757137,
                'long' => 77.1990075,
                'radius' => 1159.5203857421875,
            ),
            408 => 
            array (
                'id' => 2909,
                'name' => 'Sarojani Nagar Market',
                'city_id' => '1',
                'lat' => 28.5772672,
                'long' => 77.19632159999999,
                'radius' => 215.9276885986328,
            ),
            409 => 
            array (
                'id' => 2910,
                'name' => 'Sarojini Nagar',
                'city_id' => '1',
                'lat' => 28.5757137,
                'long' => 77.1990075,
                'radius' => 1159.5203857421875,
            ),
            410 => 
            array (
                'id' => 2911,
                'name' => 'Sarvapriya Vihar',
                'city_id' => '1',
                'lat' => 28.542767,
                'long' => 77.20674269999999,
                'radius' => 556.7974853515625,
            ),
            411 => 
            array (
                'id' => 2912,
                'name' => 'Sarvodaya Enclave',
                'city_id' => '1',
                'lat' => 28.5372066,
                'long' => 77.2011857,
                'radius' => 524.0743408203125,
            ),
            412 => 
            array (
                'id' => 2913,
                'name' => 'Satya Niketan',
                'city_id' => '1',
                'lat' => 28.5875609,
                'long' => 77.1690067,
                'radius' => 257.1275939941406,
            ),
            413 => 
            array (
                'id' => 2914,
                'name' => 'Savita Vihar',
                'city_id' => '1',
                'lat' => 28.6609622,
                'long' => 77.3188016,
                'radius' => 263.70941162109375,
            ),
            414 => 
            array (
                'id' => 2915,
                'name' => 'Savitri Nagar',
                'city_id' => '1',
                'lat' => 28.539235,
                'long' => 77.2186001,
                'radius' => 402.5438537597656,
            ),
            415 => 
            array (
                'id' => 2916,
                'name' => 'Sector 1-Noida',
                'city_id' => '1',
                'lat' => 28.5900173,
                'long' => 77.3116215,
                'radius' => 629.2427368164062,
            ),
            416 => 
            array (
                'id' => 2917,
                'name' => 'Sector 10-Noida',
                'city_id' => '1',
                'lat' => 28.5904833,
                'long' => 77.3317246,
                'radius' => 609.1842041015625,
            ),
            417 => 
            array (
                'id' => 2918,
                'name' => 'Sector 10 Noida',
                'city_id' => '1',
                'lat' => 28.5904833,
                'long' => 77.3317246,
                'radius' => 609.1842041015625,
            ),
            418 => 
            array (
                'id' => 2919,
                'name' => 'Sector 11-Noida',
                'city_id' => '1',
                'lat' => 28.5985755,
                'long' => 77.3338783,
                'radius' => 815.2772216796875,
            ),
            419 => 
            array (
                'id' => 2920,
                'name' => 'Sector 11-Noida',
                'city_id' => '1',
                'lat' => 28.5985755,
                'long' => 77.3338783,
                'radius' => 815.2772216796875,
            ),
            420 => 
            array (
                'id' => 2921,
                'name' => 'Sector 12-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4748793,
                'long' => 77.0325884,
                'radius' => 2007.422119140625,
            ),
            421 => 
            array (
                'id' => 2922,
                'name' => 'Sector 12-Noida',
                'city_id' => '1',
                'lat' => 28.5962491,
                'long' => 77.3396212,
                'radius' => 926.8165893554688,
            ),
            422 => 
            array (
                'id' => 2923,
                'name' => 'Sector 12 Noida',
                'city_id' => '1',
                'lat' => 28.5962491,
                'long' => 77.3396212,
                'radius' => 926.8165893554688,
            ),
            423 => 
            array (
                'id' => 2924,
                'name' => 'Sector 14-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4707417,
                'long' => 77.0463719,
                'radius' => 1495.214599609375,
            ),
            424 => 
            array (
                'id' => 2925,
                'name' => 'Sector 14 Gurgaon',
                'city_id' => '1',
                'lat' => 28.4707417,
                'long' => 77.0463719,
                'radius' => 1495.214599609375,
            ),
            425 => 
            array (
                'id' => 2926,
                'name' => 'Sector 15-Noida',
                'city_id' => '1',
                'lat' => 28.5820607,
                'long' => 77.3109035,
                'radius' => 674.975341796875,
            ),
            426 => 
            array (
                'id' => 2927,
                'name' => 'Sector 15 A-Noida',
                'city_id' => '1',
                'lat' => 28.5760515,
                'long' => 77.3080313,
                'radius' => 1044.6044921875,
            ),
            427 => 
            array (
                'id' => 2928,
                'name' => 'Sector 15 Noida',
                'city_id' => '1',
                'lat' => 28.5820607,
                'long' => 77.3109035,
                'radius' => 674.975341796875,
            ),
            428 => 
            array (
                'id' => 2929,
                'name' => 'Sector 15-I-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4621359,
                'long' => 77.0463719,
                'radius' => 1016.4268798828125,
            ),
            429 => 
            array (
                'id' => 2930,
                'name' => 'Sector 15-II-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4589898,
                'long' => 77.0434934,
                'radius' => 1322.3426513671875,
            ),
            430 => 
            array (
                'id' => 2931,
                'name' => 'Sector 16-Noida',
                'city_id' => '1',
                'lat' => 28.5773799,
                'long' => 77.31449359999999,
                'radius' => 560.7459716796875,
            ),
            431 => 
            array (
                'id' => 2932,
                'name' => 'Sector 16 A-Noida',
                'city_id' => '1',
                'lat' => 28.5679882,
                'long' => 77.3137756,
                'radius' => 1159.4720458984375,
            ),
            432 => 
            array (
                'id' => 2933,
                'name' => 'Sector 16 Noida',
                'city_id' => '1',
                'lat' => 28.5773799,
                'long' => 77.31449359999999,
                'radius' => 560.7459716796875,
            ),
            433 => 
            array (
                'id' => 2934,
                'name' => 'Sector 17-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4791609,
                'long' => 77.0593246,
                'radius' => 1556.8111572265625,
            ),
            434 => 
            array (
                'id' => 2935,
                'name' => 'Sector 18-Noida',
                'city_id' => '1',
                'lat' => 28.570317,
                'long' => 77.3218196,
                'radius' => 634.781494140625,
            ),
            435 => 
            array (
                'id' => 2936,
                'name' => 'Sector 18-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4945045,
                'long' => 77.0692827,
                'radius' => 2142.17822265625,
            ),
            436 => 
            array (
                'id' => 2937,
                'name' => 'Sector 18 Gurgaon',
                'city_id' => '1',
                'lat' => 28.4945045,
                'long' => 77.0692827,
                'radius' => 2142.17822265625,
            ),
            437 => 
            array (
                'id' => 2938,
                'name' => 'Sector 18 Noida',
                'city_id' => '1',
                'lat' => 28.570317,
                'long' => 77.3218196,
                'radius' => 634.781494140625,
            ),
            438 => 
            array (
                'id' => 2939,
                'name' => 'Sector 19-Noida',
                'city_id' => '1',
                'lat' => 28.5774092,
                'long' => 77.3223915,
                'radius' => 1010.6768798828125,
            ),
            439 => 
            array (
                'id' => 2940,
                'name' => 'Sector 19 Noida',
                'city_id' => '1',
                'lat' => 28.5774092,
                'long' => 77.3223915,
                'radius' => 1010.6768798828125,
            ),
            440 => 
            array (
                'id' => 2941,
                'name' => 'Sector 2-Noida',
                'city_id' => '1',
                'lat' => 28.5846875,
                'long' => 77.31592959999999,
                'radius' => 658.5308227539062,
            ),
            441 => 
            array (
                'id' => 2942,
                'name' => 'Sector 2 Noida',
                'city_id' => '1',
                'lat' => 28.5846875,
                'long' => 77.31592959999999,
                'radius' => 658.5308227539062,
            ),
            442 => 
            array (
                'id' => 2943,
                'name' => 'Sector 20-Noida',
                'city_id' => '1',
                'lat' => 28.5839608,
                'long' => 77.3310067,
                'radius' => 664.9925537109375,
            ),
            443 => 
            array (
                'id' => 2944,
                'name' => 'Sector 21-Noida',
                'city_id' => '1',
                'lat' => 28.5875737,
                'long' => 77.3350992,
                'radius' => 577.9723510742188,
            ),
            444 => 
            array (
                'id' => 2945,
                'name' => 'Sector 22-Gurgaon',
                'city_id' => '1',
                'lat' => 28.507241,
                'long' => 77.06404859999999,
                'radius' => 847.4868774414062,
            ),
            445 => 
            array (
                'id' => 2946,
                'name' => 'Sector 22-Noida',
                'city_id' => '1',
                'lat' => 28.597062,
                'long' => 77.34823519999999,
                'radius' => 1070.845458984375,
            ),
            446 => 
            array (
                'id' => 2947,
                'name' => 'Sector 22 Noida',
                'city_id' => '1',
                'lat' => 28.597062,
                'long' => 77.34823519999999,
                'radius' => 1070.845458984375,
            ),
            447 => 
            array (
                'id' => 2948,
                'name' => 'Sector 23-Gurgaon',
                'city_id' => '1',
                'lat' => 28.5110641,
                'long' => 77.0630248,
                'radius' => 2332.9248046875,
            ),
            448 => 
            array (
                'id' => 2949,
                'name' => 'Sector 24-Noida',
                'city_id' => '1',
                'lat' => 28.5892406,
                'long' => 77.348953,
                'radius' => 568.800048828125,
            ),
            449 => 
            array (
                'id' => 2950,
                'name' => 'Sector 25-Noida',
                'city_id' => '1',
                'lat' => 28.583792,
                'long' => 77.3388291,
                'radius' => 578.4508056640625,
            ),
            450 => 
            array (
                'id' => 2951,
                'name' => 'Sector 25 A-Noida',
                'city_id' => '1',
                'lat' => 28.5859654,
                'long' => 77.34464609999999,
                'radius' => 592.1600952148438,
            ),
            451 => 
            array (
                'id' => 2952,
                'name' => 'Sector 26-Noida',
                'city_id' => '1',
                'lat' => 28.5792792,
                'long' => 77.3345961,
                'radius' => 680.6890258789062,
            ),
            452 => 
            array (
                'id' => 2953,
                'name' => 'Sector 26 Noida',
                'city_id' => '1',
                'lat' => 28.5792792,
                'long' => 77.3345961,
                'radius' => 680.6890258789062,
            ),
            453 => 
            array (
                'id' => 2954,
                'name' => 'Sector 27-Noida',
                'city_id' => '1',
                'lat' => 28.5750829,
                'long' => 77.328135,
                'radius' => 766.1546630859375,
            ),
            454 => 
            array (
                'id' => 2955,
                'name' => 'Sector 27 Noida',
                'city_id' => '1',
                'lat' => 28.5750829,
                'long' => 77.328135,
                'radius' => 766.1546630859375,
            ),
            455 => 
            array (
                'id' => 2956,
                'name' => 'Sector 28-Noida',
                'city_id' => '1',
                'lat' => 28.5718356,
                'long' => 77.3317246,
                'radius' => 633.227783203125,
            ),
            456 => 
            array (
                'id' => 2957,
                'name' => 'Sector 29-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4669448,
                'long' => 77.06652,
                'radius' => 1458.0191650390625,
            ),
            457 => 
            array (
                'id' => 2958,
                'name' => 'Sector 29 Noida',
                'city_id' => '1',
                'lat' => 28.5692377,
                'long' => 77.3345961,
                'radius' => 707.8945922851562,
            ),
            458 => 
            array (
                'id' => 2959,
                'name' => 'Sector 3-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4909088,
                'long' => 77.01758319999999,
                'radius' => 1925.271240234375,
            ),
            459 => 
            array (
                'id' => 2960,
                'name' => 'Sector 3-Noida',
                'city_id' => '1',
                'lat' => 28.5801879,
                'long' => 77.3180866,
                'radius' => 613.847412109375,
            ),
            460 => 
            array (
                'id' => 2961,
                'name' => 'Sector 3 Noida',
                'city_id' => '1',
                'lat' => 28.5801879,
                'long' => 77.3180866,
                'radius' => 613.847412109375,
            ),
            461 => 
            array (
                'id' => 2962,
                'name' => 'Sector 30-Noida',
                'city_id' => '1',
                'lat' => 28.5739477,
                'long' => 77.33890339999999,
                'radius' => 742.9412841796875,
            ),
            462 => 
            array (
                'id' => 2963,
                'name' => 'Sector 31-Gurgaon',
                'city_id' => '1',
                'lat' => 28.453807,
                'long' => 77.04925039999999,
                'radius' => 1089.730224609375,
            ),
            463 => 
            array (
                'id' => 2964,
                'name' => 'Sector 31-Noida',
                'city_id' => '1',
                'lat' => 28.576709,
                'long' => 77.3453639,
                'radius' => 949.6619873046875,
            ),
            464 => 
            array (
                'id' => 2965,
                'name' => 'Sector 31 Gurgaon',
                'city_id' => '1',
                'lat' => 28.453807,
                'long' => 77.04925039999999,
                'radius' => 1089.730224609375,
            ),
            465 => 
            array (
                'id' => 2966,
                'name' => 'Sector 31 Noida',
                'city_id' => '1',
                'lat' => 28.576709,
                'long' => 77.3453639,
                'radius' => 949.6619873046875,
            ),
            466 => 
            array (
                'id' => 2967,
                'name' => 'Sector 32-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4472372,
                'long' => 77.04061469999999,
                'radius' => 875.556884765625,
            ),
            467 => 
            array (
                'id' => 2968,
                'name' => 'Sector 33-Noida',
                'city_id' => '1',
                'lat' => 28.5892678,
                'long' => 77.3568485,
                'radius' => 690.1111450195312,
            ),
            468 => 
            array (
                'id' => 2969,
                'name' => 'Sector 34-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4282635,
                'long' => 77.0075055,
                'radius' => 1597.1868896484375,
            ),
            469 => 
            array (
                'id' => 2970,
                'name' => 'Sector 34-Noida',
                'city_id' => '1',
                'lat' => 28.5838004,
                'long' => 77.3597194,
                'radius' => 855.7462768554688,
            ),
            470 => 
            array (
                'id' => 2971,
                'name' => 'Sector 35-Noida',
                'city_id' => '1',
                'lat' => 28.5798759,
                'long' => 77.3561307,
                'radius' => 829.59814453125,
            ),
            471 => 
            array (
                'id' => 2972,
                'name' => 'Sector 37-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4378989,
                'long' => 76.9980138,
                'radius' => 2022.80419921875,
            ),
            472 => 
            array (
                'id' => 2973,
                'name' => 'Sector 37-Noida',
                'city_id' => '1',
                'lat' => 28.5670458,
                'long' => 77.3417748,
                'radius' => 875.8566284179688,
            ),
            473 => 
            array (
                'id' => 2974,
                'name' => 'Sector 37 Gurgaon',
                'city_id' => '1',
                'lat' => 28.4378989,
                'long' => 76.9980138,
                'radius' => 2022.80419921875,
            ),
            474 => 
            array (
                'id' => 2975,
                'name' => 'Sector 39-Noida',
                'city_id' => '1',
                'lat' => 28.5720533,
                'long' => 77.3568485,
                'radius' => 1291.93896484375,
            ),
            475 => 
            array (
                'id' => 2976,
                'name' => 'Sector 4-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4739868,
                'long' => 77.0115008,
                'radius' => 1204.832763671875,
            ),
            476 => 
            array (
                'id' => 2977,
                'name' => 'Sector 4-Noida',
                'city_id' => '1',
                'lat' => 28.5839319,
                'long' => 77.32310939999999,
                'radius' => 560.28076171875,
            ),
            477 => 
            array (
                'id' => 2978,
                'name' => 'Sector 4 Gurgaon',
                'city_id' => '1',
                'lat' => 28.4739868,
                'long' => 77.0115008,
                'radius' => 1204.832763671875,
            ),
            478 => 
            array (
                'id' => 2979,
                'name' => 'Sector 4 Noida',
                'city_id' => '1',
                'lat' => 28.5839319,
                'long' => 77.32310939999999,
                'radius' => 560.28076171875,
            ),
            479 => 
            array (
                'id' => 2980,
                'name' => 'Sector 40-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4498494,
                'long' => 77.0566887,
                'radius' => 831.28662109375,
            ),
            480 => 
            array (
                'id' => 2981,
                'name' => 'Sector 40-Noida',
                'city_id' => '1',
                'lat' => 28.563175,
                'long' => 77.35397739999999,
                'radius' => 766.8218383789062,
            ),
            481 => 
            array (
                'id' => 2982,
                'name' => 'Sector 41-Noida',
                'city_id' => '1',
                'lat' => 28.5639862,
                'long' => 77.3625903,
                'radius' => 924.0213012695312,
            ),
            482 => 
            array (
                'id' => 2983,
                'name' => 'Sector 41 Noida',
                'city_id' => '1',
                'lat' => 28.5639862,
                'long' => 77.3625903,
                'radius' => 924.0213012695312,
            ),
            483 => 
            array (
                'id' => 2984,
                'name' => 'Sector 44-Noida',
                'city_id' => '1',
                'lat' => 28.5529427,
                'long' => 77.33674979999999,
                'radius' => 1500.275146484375,
            ),
            484 => 
            array (
                'id' => 2985,
                'name' => 'Sector 47-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4264124,
                'long' => 77.0478112,
                'radius' => 1492.8133544921875,
            ),
            485 => 
            array (
                'id' => 2986,
                'name' => 'Sector 49-Noida',
                'city_id' => '1',
                'lat' => 28.5621974,
                'long' => 77.3740732,
                'radius' => 1270.0198974609375,
            ),
            486 => 
            array (
                'id' => 2987,
                'name' => 'Sector 49 Noida',
                'city_id' => '1',
                'lat' => 28.5621974,
                'long' => 77.3740732,
                'radius' => 1270.0198974609375,
            ),
            487 => 
            array (
                'id' => 2988,
                'name' => 'Sector 5-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4794366,
                'long' => 77.01758319999999,
                'radius' => 995.9081420898438,
            ),
            488 => 
            array (
                'id' => 2989,
                'name' => 'Sector 5-Noida',
                'city_id' => '1',
                'lat' => 28.5888843,
                'long' => 77.3223915,
                'radius' => 813.5094604492188,
            ),
            489 => 
            array (
                'id' => 2990,
                'name' => 'Sector 5 Gurgaon',
                'city_id' => '1',
                'lat' => 28.4794366,
                'long' => 77.01758319999999,
                'radius' => 995.9081420898438,
            ),
            490 => 
            array (
                'id' => 2991,
                'name' => 'Sector 5 Noida',
                'city_id' => '1',
                'lat' => 28.5888843,
                'long' => 77.3223915,
                'radius' => 813.5094604492188,
            ),
            491 => 
            array (
                'id' => 2992,
                'name' => 'Sector 50-Noida',
                'city_id' => '1',
                'lat' => 28.573405,
                'long' => 77.37120259999999,
                'radius' => 1561.4810791015625,
            ),
            492 => 
            array (
                'id' => 2993,
                'name' => 'Sector 50 Noida',
                'city_id' => '1',
                'lat' => 28.573405,
                'long' => 77.37120259999999,
                'radius' => 1561.4810791015625,
            ),
            493 => 
            array (
                'id' => 2994,
                'name' => 'Sector 51-Noida',
                'city_id' => '1',
                'lat' => 28.578603,
                'long' => 77.36546109999999,
                'radius' => 1607.68798828125,
            ),
            494 => 
            array (
                'id' => 2995,
                'name' => 'Sector 51 Noida',
                'city_id' => '1',
                'lat' => 28.578603,
                'long' => 77.36546109999999,
                'radius' => 1607.68798828125,
            ),
            495 => 
            array (
                'id' => 2996,
                'name' => 'Sector 52-Noida',
                'city_id' => '1',
                'lat' => 28.5874806,
                'long' => 77.3683319,
                'radius' => 960.6018676757812,
            ),
            496 => 
            array (
                'id' => 2997,
                'name' => 'Sector 53-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4396185,
                'long' => 77.0971527,
                'radius' => 1421.4461669921875,
            ),
            497 => 
            array (
                'id' => 2998,
                'name' => 'Sector 53-Noida',
                'city_id' => '1',
                'lat' => 28.5898088,
                'long' => 77.3625903,
                'radius' => 948.4418334960938,
            ),
            498 => 
            array (
                'id' => 2999,
                'name' => 'Sector 54-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4382322,
                'long' => 77.11112140000002,
                'radius' => 1748.50390625,
            ),
            499 => 
            array (
                'id' => 3000,
                'name' => 'Sector 55-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4280506,
                'long' => 77.1096829,
                'radius' => 1011.6534423828125,
            ),
        ));
        \DB::table('areas')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'name' => 'Sector 55-Noida',
                'city_id' => '1',
                'lat' => 28.6049178,
                'long' => 77.3489877,
                'radius' => 747.7468872070312,
            ),
            1 => 
            array (
                'id' => 3002,
                'name' => 'Sector 56-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4262171,
                'long' => 77.09676499999999,
                'radius' => 1424.6583251953125,
            ),
            2 => 
            array (
                'id' => 3003,
                'name' => 'Sector 56-Noida',
                'city_id' => '1',
                'lat' => 28.6022574,
                'long' => 77.3424926,
                'radius' => 760.7672729492188,
            ),
            3 => 
            array (
                'id' => 3004,
                'name' => 'Sector 57-Noida',
                'city_id' => '1',
                'lat' => 28.603341,
                'long' => 77.35397739999999,
                'radius' => 761.3560791015625,
            ),
            4 => 
            array (
                'id' => 3005,
                'name' => 'Sector 57 Noida',
                'city_id' => '1',
                'lat' => 28.603341,
                'long' => 77.35397739999999,
                'radius' => 761.3560791015625,
            ),
            5 => 
            array (
                'id' => 3006,
                'name' => 'Sector 58-Noida',
                'city_id' => '1',
                'lat' => 28.6067511,
                'long' => 77.3597194,
                'radius' => 920.1143188476562,
            ),
            6 => 
            array (
                'id' => 3007,
                'name' => 'Sector 58 Noida',
                'city_id' => '1',
                'lat' => 28.6067511,
                'long' => 77.3597194,
                'radius' => 920.1143188476562,
            ),
            7 => 
            array (
                'id' => 3008,
                'name' => 'Sector 59-Noida',
                'city_id' => '1',
                'lat' => 28.6075627,
                'long' => 77.3683319,
                'radius' => 586.0966796875,
            ),
            8 => 
            array (
                'id' => 3009,
                'name' => 'Sector 6-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4745274,
                'long' => 77.0282194,
                'radius' => 142.12794494628906,
            ),
            9 => 
            array (
                'id' => 3010,
                'name' => 'Sector 6-Noida',
                'city_id' => '1',
                'lat' => 28.593565,
                'long' => 77.3188016,
                'radius' => 702.9157104492188,
            ),
            10 => 
            array (
                'id' => 3011,
                'name' => 'Sector 6 Noida',
                'city_id' => '1',
                'lat' => 28.593565,
                'long' => 77.3188016,
                'radius' => 702.9157104492188,
            ),
            11 => 
            array (
                'id' => 3012,
                'name' => 'Sector 60-Noida',
                'city_id' => '1',
                'lat' => 28.6024748,
                'long' => 77.36761419999999,
                'radius' => 700.9332885742188,
            ),
            12 => 
            array (
                'id' => 3013,
                'name' => 'Sector 61-Noida',
                'city_id' => '1',
                'lat' => 28.5960875,
                'long' => 77.3683319,
                'radius' => 826.4104614257812,
            ),
            13 => 
            array (
                'id' => 3014,
                'name' => 'Sector 61 Noida',
                'city_id' => '1',
                'lat' => 28.5960875,
                'long' => 77.3683319,
                'radius' => 826.4104614257812,
            ),
            14 => 
            array (
                'id' => 3015,
                'name' => 'Sector 62-Noida',
                'city_id' => '1',
                'lat' => 28.6207641,
                'long' => 77.3639292,
                'radius' => 2597.8310546875,
            ),
            15 => 
            array (
                'id' => 3016,
                'name' => 'Sector 62 Noida',
                'city_id' => '1',
                'lat' => 28.6207641,
                'long' => 77.3639292,
                'radius' => 2597.8310546875,
            ),
            16 => 
            array (
                'id' => 3017,
                'name' => 'Sector 63 Noida',
                'city_id' => '1',
                'lat' => 28.6266412,
                'long' => 77.3848031,
                'radius' => 1815.87255859375,
            ),
            17 => 
            array (
                'id' => 3018,
                'name' => 'Sector 7-Gurgaon',
                'city_id' => '1',
                'lat' => 28.4659505,
                'long' => 77.0073496,
                'radius' => 1504.9852294921875,
            ),
            18 => 
            array (
                'id' => 3019,
                'name' => 'Sector 7-Noida',
                'city_id' => '1',
                'lat' => 28.596026,
                'long' => 77.31449359999999,
                'radius' => 650.5746459960938,
            ),
            19 => 
            array (
                'id' => 3020,
                'name' => 'Sector 8-Noida',
                'city_id' => '1',
                'lat' => 28.5951643,
                'long' => 77.328135,
                'radius' => 979.8753662109375,
            ),
            20 => 
            array (
                'id' => 3021,
                'name' => 'Sector 8 Noida',
                'city_id' => '1',
                'lat' => 28.5951643,
                'long' => 77.328135,
                'radius' => 979.8753662109375,
            ),
            21 => 
            array (
                'id' => 3022,
                'name' => 'Sector 9-Noida',
                'city_id' => '1',
                'lat' => 28.5872077,
                'long' => 77.32741709999999,
                'radius' => 608.4888916015625,
            ),
            22 => 
            array (
                'id' => 3023,
                'name' => 'Sector 9 Noida',
                'city_id' => '1',
                'lat' => 28.5872077,
                'long' => 77.32741709999999,
                'radius' => 608.4888916015625,
            ),
            23 => 
            array (
                'id' => 3024,
                'name' => 'Sector10-Faridabad',
                'city_id' => '1',
                'lat' => 28.3767392,
                'long' => 77.3252633,
                'radius' => 710.2792358398438,
            ),
            24 => 
            array (
                'id' => 3025,
                'name' => 'Sector11-Faridabad',
                'city_id' => '1',
                'lat' => 28.3704165,
                'long' => 77.3220128,
                'radius' => 279.3514099121094,
            ),
            25 => 
            array (
                'id' => 3026,
                'name' => 'Sector12-Faridabad',
                'city_id' => '1',
                'lat' => 28.3834671,
                'long' => 77.3234873,
                'radius' => 1081.3746337890625,
            ),
            26 => 
            array (
                'id' => 3027,
                'name' => 'Sector14-Faridabad',
                'city_id' => '1',
                'lat' => 28.3947823,
                'long' => 77.3338783,
                'radius' => 1026.0660400390625,
            ),
            27 => 
            array (
                'id' => 3028,
                'name' => 'Sector15-Faridabad',
                'city_id' => '1',
                'lat' => 28.3952729,
                'long' => 77.3238274,
                'radius' => 895.367919921875,
            ),
            28 => 
            array (
                'id' => 3029,
                'name' => 'Sector15 Faridabad',
                'city_id' => '1',
                'lat' => 28.3952729,
                'long' => 77.3238274,
                'radius' => 895.367919921875,
            ),
            29 => 
            array (
                'id' => 3030,
                'name' => 'Sector15A-Faridabad',
                'city_id' => '1',
                'lat' => 28.3953413,
                'long' => 77.3159276,
                'radius' => 890.57080078125,
            ),
            30 => 
            array (
                'id' => 3031,
                'name' => 'Sector15A Faridabad',
                'city_id' => '1',
                'lat' => 28.3953413,
                'long' => 77.3159276,
                'radius' => 890.57080078125,
            ),
            31 => 
            array (
                'id' => 3032,
                'name' => 'Sector16-Faridabad',
                'city_id' => '1',
                'lat' => 28.4138045,
                'long' => 77.3223915,
                'radius' => 755.3086547851562,
            ),
            32 => 
            array (
                'id' => 3033,
                'name' => 'Sector16 Faridabad',
                'city_id' => '1',
                'lat' => 28.4138045,
                'long' => 77.3223915,
                'radius' => 755.3086547851562,
            ),
            33 => 
            array (
                'id' => 3034,
                'name' => 'Sector16A-Faridabad',
                'city_id' => '1',
                'lat' => 28.4089726,
                'long' => 77.3160664,
                'radius' => 1320.73583984375,
            ),
            34 => 
            array (
                'id' => 3035,
                'name' => 'Sector17-Faridabad',
                'city_id' => '1',
                'lat' => 28.4073009,
                'long' => 77.3295708,
                'radius' => 1277.9971923828125,
            ),
            35 => 
            array (
                'id' => 3036,
                'name' => 'Sector19-Faridabad',
                'city_id' => '1',
                'lat' => 28.4241063,
                'long' => 77.31299299999999,
                'radius' => 1409.92138671875,
            ),
            36 => 
            array (
                'id' => 3037,
                'name' => 'Sector21C-Faridabad',
                'city_id' => '1',
                'lat' => 28.4314078,
                'long' => 77.29670329999999,
                'radius' => 1263.39599609375,
            ),
            37 => 
            array (
                'id' => 3038,
                'name' => 'Sector23-Faridabad',
                'city_id' => '1',
                'lat' => 28.3581024,
                'long' => 77.2951057,
                'radius' => 1579.080322265625,
            ),
            38 => 
            array (
                'id' => 3039,
                'name' => 'Sector24-Faridabad',
                'city_id' => '1',
                'lat' => 28.3591846,
                'long' => 77.30659519999999,
                'radius' => 1809.2220458984375,
            ),
            39 => 
            array (
                'id' => 3040,
                'name' => 'Sector24 Faridabad',
                'city_id' => '1',
                'lat' => 28.3591846,
                'long' => 77.30659519999999,
                'radius' => 1809.2220458984375,
            ),
            40 => 
            array (
                'id' => 3041,
                'name' => 'Sector25-Faridabad',
                'city_id' => '1',
                'lat' => 28.3362036,
                'long' => 77.30659519999999,
                'radius' => 1556.2607421875,
            ),
            41 => 
            array (
                'id' => 3042,
                'name' => 'Sector27A-Faridabad',
                'city_id' => '1',
                'lat' => 28.4346373,
                'long' => 77.30731329999999,
                'radius' => 917.0287475585938,
            ),
            42 => 
            array (
                'id' => 3043,
                'name' => 'Sector28-Faridabad',
                'city_id' => '1',
                'lat' => 28.4343934,
                'long' => 77.3123396,
                'radius' => 905.2163696289062,
            ),
            43 => 
            array (
                'id' => 3044,
                'name' => 'Sector29-Faridabad',
                'city_id' => '1',
                'lat' => 28.4339049,
                'long' => 77.3223915,
                'radius' => 928.7459716796875,
            ),
            44 => 
            array (
                'id' => 3045,
                'name' => 'Sector31-Faridabad',
                'city_id' => '1',
                'lat' => 28.4454913,
                'long' => 77.3124067,
                'radius' => 866.9259033203125,
            ),
            45 => 
            array (
                'id' => 3046,
                'name' => 'Sector37-Faridabad',
                'city_id' => '1',
                'lat' => 28.4796854,
                'long' => 77.3122402,
                'radius' => 1162.1685791015625,
            ),
            46 => 
            array (
                'id' => 3047,
                'name' => 'Sector4-Ghaziabad',
                'city_id' => '1',
                'lat' => 28.6465998,
                'long' => 77.3395938,
                'radius' => 856.0391235351562,
            ),
            47 => 
            array (
                'id' => 3048,
                'name' => 'Sector5-Ghaziabad',
                'city_id' => '1',
                'lat' => 28.6613803,
                'long' => 77.37851619999999,
                'radius' => 736.646240234375,
            ),
            48 => 
            array (
                'id' => 3049,
                'name' => 'Sector59-Faridabad',
                'city_id' => '1',
                'lat' => 28.3090446,
                'long' => 77.3080313,
                'radius' => 2267.402587890625,
            ),
            49 => 
            array (
                'id' => 3050,
                'name' => 'Sector6-Faridabad',
                'city_id' => '1',
                'lat' => 28.5283578,
                'long' => 77.2211152,
                'radius' => 722.7099609375,
            ),
            50 => 
            array (
                'id' => 3051,
                'name' => 'Sector9-Faridabad',
                'city_id' => '1',
                'lat' => 28.3733754,
                'long' => 77.335314,
                'radius' => 1249.0654296875,
            ),
            51 => 
            array (
                'id' => 3052,
                'name' => 'Seelampur',
                'city_id' => '1',
                'lat' => 28.6640177,
                'long' => 77.2711667,
                'radius' => 1627.827880859375,
            ),
            52 => 
            array (
                'id' => 3053,
                'name' => 'Seemapuri Old',
                'city_id' => '1',
                'lat' => 28.680687,
                'long' => 77.33028879999999,
                'radius' => 517.6943969726562,
            ),
            53 => 
            array (
                'id' => 3054,
                'name' => 'Seikh Sarai',
                'city_id' => '1',
                'lat' => 28.5363155,
                'long' => 77.2218338,
                'radius' => 1180.028564453125,
            ),
            54 => 
            array (
                'id' => 3055,
                'name' => 'Seikh Sarai Phase 2',
                'city_id' => '1',
                'lat' => 28.5352404,
                'long' => 77.22937859999999,
                'radius' => 157.40216064453125,
            ),
            55 => 
            array (
                'id' => 3056,
                'name' => 'Sewa Nagar',
                'city_id' => '1',
                'lat' => 28.5765426,
                'long' => 77.2273572,
                'radius' => 657.3384399414062,
            ),
            56 => 
            array (
                'id' => 3057,
                'name' => 'Shadipur',
                'city_id' => '1',
                'lat' => 28.651027,
                'long' => 77.1562196,
                'radius' => 1215.2828369140625,
            ),
            57 => 
            array (
                'id' => 3058,
                'name' => 'Shahdara',
                'city_id' => '1',
                'lat' => 28.69875679999999,
                'long' => 77.2925771,
                'radius' => 8022.56005859375,
            ),
            58 => 
            array (
                'id' => 3059,
                'name' => 'Shahpur Jat',
                'city_id' => '1',
                'lat' => 28.5490509,
                'long' => 77.2138142,
                'radius' => 525.5347290039062,
            ),
            59 => 
            array (
                'id' => 3060,
                'name' => 'Shakarpur',
                'city_id' => '1',
                'lat' => 28.6279488,
                'long' => 77.2786205,
                'radius' => 1120.029052734375,
            ),
            60 => 
            array (
                'id' => 3061,
                'name' => 'Shakarpur Extension',
                'city_id' => '1',
                'lat' => 28.6318871,
                'long' => 77.2843333,
                'radius' => 290.2987976074219,
            ),
            61 => 
            array (
                'id' => 3062,
                'name' => 'Shakarpur Khas',
                'city_id' => '1',
                'lat' => 28.6275525,
                'long' => 77.2764329,
                'radius' => 1343.02099609375,
            ),
            62 => 
            array (
                'id' => 3063,
                'name' => 'Shakti Nagar',
                'city_id' => '1',
                'lat' => 28.6800116,
                'long' => 77.1976346,
                'radius' => 1432.5845947265625,
            ),
            63 => 
            array (
                'id' => 3064,
                'name' => 'Shakur Basti',
                'city_id' => '1',
                'lat' => 28.6817707,
                'long' => 77.1285101,
                'radius' => 3411.7490234375,
            ),
            64 => 
            array (
                'id' => 3065,
                'name' => 'Shakur Pur',
                'city_id' => '1',
                'lat' => 28.6846245,
                'long' => 77.1338497,
                'radius' => 2291.90673828125,
            ),
            65 => 
            array (
                'id' => 3066,
                'name' => 'Shakurpur',
                'city_id' => '1',
                'lat' => 28.6846245,
                'long' => 77.1338497,
                'radius' => 2291.90673828125,
            ),
            66 => 
            array (
                'id' => 3067,
                'name' => 'Shakurpur Colony',
                'city_id' => '1',
                'lat' => 28.6868623,
                'long' => 77.14707829999999,
                'radius' => 780.1834106445312,
            ),
            67 => 
            array (
                'id' => 3068,
                'name' => 'Shalimar Bagh',
                'city_id' => '1',
                'lat' => 28.7164134,
                'long' => 77.15458459999999,
                'radius' => 2533.169677734375,
            ),
            68 => 
            array (
                'id' => 3069,
                'name' => 'Shalimar Garden',
                'city_id' => '1',
                'lat' => 28.689047,
                'long' => 77.335314,
                'radius' => 1488.5240478515625,
            ),
            69 => 
            array (
                'id' => 3070,
                'name' => 'Shalimar Garden Extention 1',
                'city_id' => '1',
                'lat' => 28.6902392,
                'long' => 77.3403391,
                'radius' => 671.8167114257812,
            ),
            70 => 
            array (
                'id' => 3071,
                'name' => 'Shalimar Garden Extention 2',
                'city_id' => '1',
                'lat' => 28.6902704,
                'long' => 77.3456568,
                'radius' => 992.7183837890625,
            ),
            71 => 
            array (
                'id' => 3072,
                'name' => 'Shalimar Park',
                'city_id' => '1',
                'lat' => 28.6666874,
                'long' => 77.2846924,
                'radius' => 219.36416625976562,
            ),
            72 => 
            array (
                'id' => 3073,
                'name' => 'Shankar Nagar',
                'city_id' => '1',
                'lat' => 28.6641791,
                'long' => 77.27715119999999,
                'radius' => 185.93849182128906,
            ),
            73 => 
            array (
                'id' => 3074,
                'name' => 'Shanti Niketan',
                'city_id' => '1',
                'lat' => 28.5779173,
                'long' => 77.16936609999999,
                'radius' => 576.0076904296875,
            ),
            74 => 
            array (
                'id' => 3075,
                'name' => 'Sharda Puri',
                'city_id' => '1',
                'lat' => 28.6473,
                'long' => 77.1305395,
                'radius' => 714.4695434570312,
            ),
            75 => 
            array (
                'id' => 3076,
                'name' => 'Shardhanand Marg',
                'city_id' => '1',
                'lat' => 28.6507192,
                'long' => 77.22053389999999,
                'radius' => 765.2620239257812,
            ),
            76 => 
            array (
                'id' => 3077,
                'name' => 'Shastri Nagar',
                'city_id' => '1',
                'lat' => 28.6746196,
                'long' => 77.18017569999999,
                'radius' => 1409.0516357421875,
            ),
            77 => 
            array (
                'id' => 3078,
                'name' => 'Shastri Park',
                'city_id' => '1',
                'lat' => 28.7677797,
                'long' => 77.1850079,
                'radius' => 1901.9910888671875,
            ),
            78 => 
            array (
                'id' => 3079,
                'name' => 'Sheik Sarai',
                'city_id' => '1',
                'lat' => 28.5363155,
                'long' => 77.2218338,
                'radius' => 1180.028564453125,
            ),
            79 => 
            array (
                'id' => 3080,
                'name' => 'Sheikh Sarai',
                'city_id' => '1',
                'lat' => 28.5363155,
                'long' => 77.2218338,
                'radius' => 1180.028564453125,
            ),
            80 => 
            array (
                'id' => 3081,
                'name' => 'Sheikh Sarai Part 1',
                'city_id' => '1',
                'lat' => 28.5363155,
                'long' => 77.2218338,
                'radius' => 1180.028564453125,
            ),
            81 => 
            array (
                'id' => 3082,
                'name' => 'Shiv Nagar',
                'city_id' => '1',
                'lat' => 28.629508,
                'long' => 77.0945777,
                'radius' => 618.5143432617188,
            ),
            82 => 
            array (
                'id' => 3083,
                'name' => 'Shiv Puri',
                'city_id' => '1',
                'lat' => 28.7456898,
                'long' => 77.1406069,
                'radius' => 449.6138000488281,
            ),
            83 => 
            array (
                'id' => 3084,
                'name' => 'Shivalik',
                'city_id' => '1',
                'lat' => 28.5340242,
                'long' => 77.2053054,
                'radius' => 1358.8619384765625,
            ),
            84 => 
            array (
                'id' => 3085,
                'name' => 'Shivpuri',
                'city_id' => '1',
                'lat' => 28.7456898,
                'long' => 77.1406069,
                'radius' => 449.6138000488281,
            ),
            85 => 
            array (
                'id' => 3086,
                'name' => 'Shreshtha Vihar',
                'city_id' => '1',
                'lat' => 28.6579588,
                'long' => 77.3173656,
                'radius' => 314.3025817871094,
            ),
            86 => 
            array (
                'id' => 3087,
                'name' => 'Sikandarpur',
                'city_id' => '1',
                'lat' => 28.4794221,
                'long' => 77.1068059,
                'radius' => 1161.628662109375,
            ),
            87 => 
            array (
                'id' => 3088,
                'name' => 'Silampur',
                'city_id' => '1',
                'lat' => 28.6640177,
                'long' => 77.2711667,
                'radius' => 1627.827880859375,
            ),
            88 => 
            array (
                'id' => 3089,
                'name' => 'Siri Fort Road',
                'city_id' => '1',
                'lat' => 28.5552825,
                'long' => 77.2225326,
                'radius' => 619.1962890625,
            ),
            89 => 
            array (
                'id' => 3090,
                'name' => 'Sirkiwalan',
                'city_id' => '1',
                'lat' => 28.6518345,
                'long' => 77.22372000000001,
                'radius' => 84.21573638916016,
            ),
            90 => 
            array (
                'id' => 3091,
                'name' => 'Sitaram Bazar',
                'city_id' => '1',
                'lat' => 28.6459528,
                'long' => 77.23117169999999,
                'radius' => 396.35968017578125,
            ),
            91 => 
            array (
                'id' => 3092,
                'name' => 'Sohna Road',
                'city_id' => '1',
                'lat' => 28.4341091,
                'long' => 77.0357757,
                'radius' => 1341.210693359375,
            ),
            92 => 
            array (
                'id' => 3093,
                'name' => 'Sonipat',
                'city_id' => '1',
                'lat' => 28.99308229999999,
                'long' => 77.0150735,
                'radius' => 20637.494140625,
            ),
            93 => 
            array (
                'id' => 3094,
                'name' => 'South City 1',
                'city_id' => '1',
                'lat' => 28.4583384,
                'long' => 77.06652,
                'radius' => 1616.3140869140625,
            ),
            94 => 
            array (
                'id' => 3095,
                'name' => 'South Extension 1',
                'city_id' => '1',
                'lat' => 28.618651,
                'long' => 77.0544675,
                'radius' => 117.47037506103516,
            ),
            95 => 
            array (
                'id' => 3096,
                'name' => 'South Extension 2',
                'city_id' => '1',
                'lat' => 28.5666032,
                'long' => 77.2201326,
                'radius' => 1011.357177734375,
            ),
            96 => 
            array (
                'id' => 3097,
                'name' => 'South Extension Part 1',
                'city_id' => '1',
                'lat' => 28.5732907,
                'long' => 77.2219418,
                'radius' => 858.7623901367188,
            ),
            97 => 
            array (
                'id' => 3098,
                'name' => 'South Extension Part 2',
                'city_id' => '1',
                'lat' => 28.5666032,
                'long' => 77.2201326,
                'radius' => 1011.357177734375,
            ),
            98 => 
            array (
                'id' => 3099,
                'name' => 'South Patel Nagar',
                'city_id' => '1',
                'lat' => 28.6445818,
                'long' => 77.168632,
                'radius' => 40.600921630859375,
            ),
            99 => 
            array (
                'id' => 3100,
                'name' => 'Srinivaspuri',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            100 => 
            array (
                'id' => 3101,
                'name' => 'Subhash Nagar',
                'city_id' => '1',
                'lat' => 28.6339059,
                'long' => 77.12098379999999,
                'radius' => 1323.0723876953125,
            ),
            101 => 
            array (
                'id' => 3102,
                'name' => 'Sukhdev Vihar',
                'city_id' => '1',
                'lat' => 28.5570172,
                'long' => 77.2762863,
                'radius' => 1152.30029296875,
            ),
            102 => 
            array (
                'id' => 3103,
                'name' => 'Sukhrali',
                'city_id' => '1',
                'lat' => 28.4770788,
                'long' => 77.0600442,
                'radius' => 705.067138671875,
            ),
            103 => 
            array (
                'id' => 3104,
                'name' => 'Sultan Puri',
                'city_id' => '1',
                'lat' => 28.6979416,
                'long' => 77.0659264,
                'radius' => 2960.241943359375,
            ),
            104 => 
            array (
                'id' => 3105,
                'name' => 'Sultanpur',
                'city_id' => '1',
                'lat' => 28.4964056,
                'long' => 77.1643337,
                'radius' => 1539.5965576171875,
            ),
            105 => 
            array (
                'id' => 3106,
                'name' => 'Sultanpuri',
                'city_id' => '1',
                'lat' => 28.6979416,
                'long' => 77.0659264,
                'radius' => 2960.241943359375,
            ),
            106 => 
            array (
                'id' => 3107,
                'name' => 'Sundar Nagar',
                'city_id' => '1',
                'lat' => 28.6024006,
                'long' => 77.2422103,
                'radius' => 2291.2822265625,
            ),
            107 => 
            array (
                'id' => 3108,
                'name' => 'Sunder Nagari',
                'city_id' => '1',
                'lat' => 28.6949907,
                'long' => 77.3223915,
                'radius' => 653.3419189453125,
            ),
            108 => 
            array (
                'id' => 3109,
                'name' => 'Sunder Vihar',
                'city_id' => '1',
                'lat' => 28.6641293,
                'long' => 77.0895421,
                'radius' => 718.2412109375,
            ),
            109 => 
            array (
                'id' => 3110,
                'name' => 'Supreme Court',
                'city_id' => '1',
                'lat' => 28.6222424,
                'long' => 77.2394376,
                'radius' => 370.08447265625,
            ),
            110 => 
            array (
                'id' => 3111,
                'name' => 'Surajmal Vihar',
                'city_id' => '1',
                'lat' => 28.6598215,
                'long' => 77.30497,
                'radius' => 1251.229248046875,
            ),
            111 => 
            array (
                'id' => 3112,
                'name' => 'Surya Nagar',
                'city_id' => '1',
                'lat' => 28.6668637,
                'long' => 77.328135,
                'radius' => 1668.8065185546875,
            ),
            112 => 
            array (
                'id' => 3113,
                'name' => 'Sushant Lok',
                'city_id' => '1',
                'lat' => 28.4634412,
                'long' => 77.07675569999999,
                'radius' => 2256.52587890625,
            ),
            113 => 
            array (
                'id' => 3114,
                'name' => 'Sushant Lok Phase 1',
                'city_id' => '1',
                'lat' => 28.6353011,
                'long' => 77.2248008,
                'radius' => 313.4692077636719,
            ),
            114 => 
            array (
                'id' => 3115,
                'name' => 'Sushant Lok Phase II',
                'city_id' => '1',
                'lat' => 28.4255615,
                'long' => 77.0873907,
                'radius' => 1210.5985107421875,
            ),
            115 => 
            array (
                'id' => 3116,
                'name' => 'Swasthya Vihar',
                'city_id' => '1',
                'lat' => 28.6401136,
                'long' => 77.28792419999999,
                'radius' => 1102.2940673828125,
            ),
            116 => 
            array (
                'id' => 3117,
                'name' => 'Tagore Garden',
                'city_id' => '1',
                'lat' => 28.648876,
                'long' => 77.1096829,
                'radius' => 924.1373901367188,
            ),
            117 => 
            array (
                'id' => 3118,
                'name' => 'Taimoor Nagar',
                'city_id' => '1',
                'lat' => 28.5731624,
                'long' => 77.2699686,
                'radius' => 540.978515625,
            ),
            118 => 
            array (
                'id' => 3119,
                'name' => 'Tank Road',
                'city_id' => '1',
                'lat' => 28.650156,
                'long' => 77.1830615,
                'radius' => 511.904296875,
            ),
            119 => 
            array (
                'id' => 3120,
                'name' => 'Tigri',
                'city_id' => '1',
                'lat' => 28.5114847,
                'long' => 77.2397968,
                'radius' => 552.6995239257812,
            ),
            120 => 
            array (
                'id' => 3121,
                'name' => 'Tilak Marg',
                'city_id' => '1',
                'lat' => 28.6202934,
                'long' => 77.2365901,
                'radius' => 681.1829223632812,
            ),
            121 => 
            array (
                'id' => 3122,
                'name' => 'Timarpur',
                'city_id' => '1',
                'lat' => 28.7003675,
                'long' => 77.2207566,
                'radius' => 1690.476806640625,
            ),
            122 => 
            array (
                'id' => 3123,
                'name' => 'Tis Hazari',
                'city_id' => '1',
                'lat' => 28.6645599,
                'long' => 77.214933,
                'radius' => 1080.7554931640625,
            ),
            123 => 
            array (
                'id' => 3124,
                'name' => 'Tis Hazari Court',
                'city_id' => '1',
                'lat' => 28.6645599,
                'long' => 77.214933,
                'radius' => 1080.7554931640625,
            ),
            124 => 
            array (
                'id' => 3125,
                'name' => 'Tolstoy Marg',
                'city_id' => '1',
                'lat' => 28.6263446,
                'long' => 77.2210411,
                'radius' => 610.6456909179688,
            ),
            125 => 
            array (
                'id' => 3126,
                'name' => 'Tri Nagar',
                'city_id' => '1',
                'lat' => 28.6779655,
                'long' => 77.1580929,
                'radius' => 2380.215087890625,
            ),
            126 => 
            array (
                'id' => 3127,
                'name' => 'Trilokpuri',
                'city_id' => '1',
                'lat' => 28.6045961,
                'long' => 77.3067772,
                'radius' => 2299.453369140625,
            ),
            127 => 
            array (
                'id' => 3128,
                'name' => 'Tughlakabad Extension',
                'city_id' => '1',
                'lat' => 28.5205239,
                'long' => 77.2570535,
                'radius' => 1844.87158203125,
            ),
            128 => 
            array (
                'id' => 3129,
                'name' => 'Tughlaqabad',
                'city_id' => '1',
                'lat' => 28.5142911,
                'long' => 77.2601181,
                'radius' => 199.6811981201172,
            ),
            129 => 
            array (
                'id' => 3130,
                'name' => 'Tughlaqabad Extension',
                'city_id' => '1',
                'lat' => 28.5037965,
                'long' => 77.2913209,
                'radius' => 641.5860595703125,
            ),
            130 => 
            array (
                'id' => 3131,
                'name' => 'Turab Nagar',
                'city_id' => '1',
                'lat' => 28.6597924,
                'long' => 77.4338014,
                'radius' => 213.3978729248047,
            ),
            131 => 
            array (
                'id' => 3132,
                'name' => 'Turkman Gate',
                'city_id' => '1',
                'lat' => 28.6409802,
                'long' => 77.2329712,
                'radius' => 766.3131713867188,
            ),
            132 => 
            array (
                'id' => 3133,
                'name' => 'Uday Park',
                'city_id' => '1',
                'lat' => 28.5601003,
                'long' => 77.2193187,
                'radius' => 248.62303161621094,
            ),
            133 => 
            array (
                'id' => 3134,
                'name' => 'Udyog Nagar',
                'city_id' => '1',
                'lat' => 28.5861356,
                'long' => 77.19722,
                'radius' => 180.93084716796875,
            ),
            134 => 
            array (
                'id' => 3135,
                'name' => 'Udyog Vihar',
                'city_id' => '1',
                'lat' => 28.4984141,
                'long' => 77.08492489999999,
                'radius' => 2171.384033203125,
            ),
            135 => 
            array (
                'id' => 3136,
                'name' => 'Udyog Vihar-Industrial Area Phase 2',
                'city_id' => '1',
                'lat' => 28.507285,
                'long' => 77.089409,
                'radius' => 199.6869659423828,
            ),
            136 => 
            array (
                'id' => 3137,
                'name' => 'Udyog Vihar-Industrial Area Phase 3',
                'city_id' => '1',
                'lat' => 28.5010632,
                'long' => 77.082813,
                'radius' => 199.69210815429688,
            ),
            137 => 
            array (
                'id' => 3138,
                'name' => 'Udyog Vihar-Industrial Area Phase 4',
                'city_id' => '1',
                'lat' => 28.4760993,
                'long' => 77.0443591,
                'radius' => 199.71267700195312,
            ),
            138 => 
            array (
                'id' => 3139,
                'name' => 'Udyog Vihar Industrial Area Phase 2',
                'city_id' => '1',
                'lat' => 28.507285,
                'long' => 77.089409,
                'radius' => 199.6869659423828,
            ),
            139 => 
            array (
                'id' => 3140,
                'name' => 'Udyog Vihar Industrial Area Phase 3',
                'city_id' => '1',
                'lat' => 28.5010632,
                'long' => 77.082813,
                'radius' => 199.69210815429688,
            ),
            140 => 
            array (
                'id' => 3141,
                'name' => 'Udyog Vihar Industrial Area Phase 4',
                'city_id' => '1',
                'lat' => 28.4760993,
                'long' => 77.0443591,
                'radius' => 199.71267700195312,
            ),
            141 => 
            array (
                'id' => 3142,
                'name' => 'Udyog Vihar Industrial Area VI',
                'city_id' => '1',
                'lat' => 28.4376088,
                'long' => 77.0003067,
                'radius' => 948.7297973632812,
            ),
            142 => 
            array (
                'id' => 3143,
                'name' => 'Udyog Vihar Phase 4',
                'city_id' => '1',
                'lat' => 28.4941463,
                'long' => 77.0809093,
                'radius' => 1648.026123046875,
            ),
            143 => 
            array (
                'id' => 3144,
                'name' => 'Udyog Vihar Phase 5',
                'city_id' => '1',
                'lat' => 28.5007526,
                'long' => 77.08585169999999,
                'radius' => 515.8953857421875,
            ),
            144 => 
            array (
                'id' => 3145,
                'name' => 'Vaishali',
                'city_id' => '1',
                'lat' => 28.6072942,
                'long' => 77.0834273,
                'radius' => 219.5972900390625,
            ),
            145 => 
            array (
                'id' => 3146,
                'name' => 'Vaishali Sector 1',
                'city_id' => '1',
                'lat' => 28.6356338,
                'long' => 77.3388511,
                'radius' => 956.0153198242188,
            ),
            146 => 
            array (
                'id' => 3147,
                'name' => 'Vaishali Sector 2',
                'city_id' => '1',
                'lat' => 28.6386244,
                'long' => 77.3403391,
                'radius' => 567.3634033203125,
            ),
            147 => 
            array (
                'id' => 3148,
                'name' => 'Vaishali Sector 3',
                'city_id' => '1',
                'lat' => 28.641221,
                'long' => 77.33746769999999,
                'radius' => 930.997314453125,
            ),
            148 => 
            array (
                'id' => 3149,
                'name' => 'Vaishali Sector 4',
                'city_id' => '1',
                'lat' => 28.6465998,
                'long' => 77.3395938,
                'radius' => 856.0391235351562,
            ),
            149 => 
            array (
                'id' => 3150,
                'name' => 'Vaishali Sector 5',
                'city_id' => '1',
                'lat' => 28.642684,
                'long' => 77.3453639,
                'radius' => 785.6585693359375,
            ),
            150 => 
            array (
                'id' => 3151,
                'name' => 'Vasant Enclave',
                'city_id' => '1',
                'lat' => 28.5731142,
                'long' => 77.1603796,
                'radius' => 332.7091979980469,
            ),
            151 => 
            array (
                'id' => 3152,
                'name' => 'Vasant Kunj',
                'city_id' => '1',
                'lat' => 28.5273352,
                'long' => 77.1515453,
                'radius' => 3459.040771484375,
            ),
            152 => 
            array (
                'id' => 3153,
                'name' => 'Vasant Kunj-Sector A',
                'city_id' => '1',
                'lat' => 28.5141683,
                'long' => 77.170085,
                'radius' => 1087.2794189453125,
            ),
            153 => 
            array (
                'id' => 3154,
                'name' => 'Vasant Kunj-Sector B',
                'city_id' => '1',
                'lat' => 28.5274118,
                'long' => 77.1585822,
                'radius' => 1421.1851806640625,
            ),
            154 => 
            array (
                'id' => 3155,
                'name' => 'Vasant Kunj-Sector C',
                'city_id' => '1',
                'lat' => 28.5378671,
                'long' => 77.1454007,
                'radius' => 1428.3006591796875,
            ),
            155 => 
            array (
                'id' => 3156,
                'name' => 'Vasant Kunj-Sector D',
                'city_id' => '1',
                'lat' => 28.5254842,
                'long' => 77.1433249,
                'radius' => 2821.487060546875,
            ),
            156 => 
            array (
                'id' => 3157,
                'name' => 'Vasant Kunj Sector A',
                'city_id' => '1',
                'lat' => 28.5141683,
                'long' => 77.170085,
                'radius' => 1087.2794189453125,
            ),
            157 => 
            array (
                'id' => 3158,
                'name' => 'Vashisht Park',
                'city_id' => '1',
                'lat' => 28.6085535,
                'long' => 77.0971203,
                'radius' => 481.1783142089844,
            ),
            158 => 
            array (
                'id' => 3159,
                'name' => 'Vasundhara',
                'city_id' => '1',
                'lat' => 28.6636281,
                'long' => 77.3697672,
                'radius' => 3040.600341796875,
            ),
            159 => 
            array (
                'id' => 3160,
                'name' => 'Vigyan Vihar',
                'city_id' => '1',
                'lat' => 28.6606745,
                'long' => 77.3119806,
                'radius' => 299.5482177734375,
            ),
            160 => 
            array (
                'id' => 3161,
                'name' => 'Vijay Enclave',
                'city_id' => '1',
                'lat' => 28.6039811,
                'long' => 77.07444439999999,
                'radius' => 988.4244384765625,
            ),
            161 => 
            array (
                'id' => 3162,
                'name' => 'Vijay Nagar',
                'city_id' => '1',
                'lat' => 28.6914526,
                'long' => 77.2024306,
                'radius' => 554.5425415039062,
            ),
            162 => 
            array (
                'id' => 3163,
                'name' => 'Vikas Marg',
                'city_id' => '1',
                'lat' => 28.6374535,
                'long' => 77.29176799999999,
                'radius' => 168.64236450195312,
            ),
            163 => 
            array (
                'id' => 3164,
                'name' => 'Vikaspuri',
                'city_id' => '1',
                'lat' => 28.6387532,
                'long' => 77.0738028,
                'radius' => 2364.04638671875,
            ),
            164 => 
            array (
                'id' => 3165,
                'name' => 'Vinod Nagar',
                'city_id' => '1',
                'lat' => 28.6232934,
                'long' => 77.2975675,
                'radius' => 1904.617431640625,
            ),
            165 => 
            array (
                'id' => 3166,
                'name' => 'Vinod Nagar East',
                'city_id' => '1',
                'lat' => 28.6229205,
                'long' => 77.3086902,
                'radius' => 948.4931030273438,
            ),
            166 => 
            array (
                'id' => 3167,
                'name' => 'Vinod Nagar West',
                'city_id' => '1',
                'lat' => 28.624646,
                'long' => 77.2986963,
                'radius' => 733.307373046875,
            ),
            167 => 
            array (
                'id' => 3168,
                'name' => 'Vishnu Garden',
                'city_id' => '1',
                'lat' => 28.6519345,
                'long' => 77.0940718,
                'radius' => 1591.6087646484375,
            ),
            168 => 
            array (
                'id' => 3169,
                'name' => 'Vishwas Nagar',
                'city_id' => '1',
                'lat' => 28.6613249,
                'long' => 77.29612709999999,
                'radius' => 1338.31494140625,
            ),
            169 => 
            array (
                'id' => 3170,
                'name' => 'Vivek Vihar',
                'city_id' => '1',
                'lat' => 28.6712458,
                'long' => 77.3176541,
                'radius' => 960.8310546875,
            ),
            170 => 
            array (
                'id' => 3171,
                'name' => 'Wazir Nagar',
                'city_id' => '1',
                'lat' => 28.5714723,
                'long' => 77.2257859,
                'radius' => 360.29638671875,
            ),
            171 => 
            array (
                'id' => 3172,
                'name' => 'Wazirabad',
                'city_id' => '1',
                'lat' => 28.7336221,
                'long' => 77.21902279999999,
                'radius' => 2749.0263671875,
            ),
            172 => 
            array (
                'id' => 3173,
                'name' => 'Wazirpur',
                'city_id' => '1',
                'lat' => 28.7002168,
                'long' => 77.1637899,
                'radius' => 2204.478515625,
            ),
            173 => 
            array (
                'id' => 3174,
                'name' => 'Wazirpur Colony',
                'city_id' => '1',
                'lat' => 28.7002168,
                'long' => 77.1637899,
                'radius' => 2204.478515625,
            ),
            174 => 
            array (
                'id' => 3175,
                'name' => 'Wazirpur Industrial Area',
                'city_id' => '1',
                'lat' => 28.6999815,
                'long' => 77.1643337,
                'radius' => 1237.488525390625,
            ),
            175 => 
            array (
                'id' => 3176,
                'name' => 'West Patel Nagar',
                'city_id' => '1',
                'lat' => 28.6518267,
                'long' => 77.1644665,
                'radius' => 826.4185791015625,
            ),
            176 => 
            array (
                'id' => 3177,
                'name' => 'Yamuna Vihar',
                'city_id' => '1',
                'lat' => 28.7009403,
                'long' => 77.2721047,
                'radius' => 1162.1124267578125,
            ),
            177 => 
            array (
                'id' => 3178,
                'name' => 'Yojana Vihar',
                'city_id' => '1',
                'lat' => 28.6621239,
                'long' => 77.31592959999999,
                'radius' => 578.5634765625,
            ),
            178 => 
            array (
                'id' => 3179,
                'name' => 'Yusuf Sarai',
                'city_id' => '1',
                'lat' => 28.5586804,
                'long' => 77.20818009999999,
                'radius' => 393.4046936035156,
            ),
            179 => 
            array (
                'id' => 3180,
                'name' => 'Zakir Nagar',
                'city_id' => '1',
                'lat' => 28.5691392,
                'long' => 77.2786314,
                'radius' => 618.55322265625,
            ),
            180 => 
            array (
                'id' => 3181,
                'name' => 'Zamrudpur',
                'city_id' => '1',
                'lat' => 28.5571147,
                'long' => 77.2369229,
                'radius' => 456.89483642578125,
            ),
            181 => 
            array (
                'id' => 3182,
                'name' => 'A K Market',
                'city_id' => '1',
                'lat' => 28.6393528,
                'long' => 77.0740746,
                'radius' => 251.43919372558594,
            ),
            182 => 
            array (
                'id' => 3183,
                'name' => 'Aliganj',
                'city_id' => '1',
                'lat' => 28.5762179,
                'long' => 77.2229116,
                'radius' => 345.3233337402344,
            ),
            183 => 
            array (
                'id' => 3184,
                'name' => 'Alipur',
                'city_id' => '1',
                'lat' => 28.7972263,
                'long' => 77.13313629999999,
                'radius' => 3350.824951171875,
            ),
            184 => 
            array (
                'id' => 3185,
                'name' => 'Amar Colony',
                'city_id' => '1',
                'lat' => 28.5617318,
                'long' => 77.242679,
                'radius' => 470.89801025390625,
            ),
            185 => 
            array (
                'id' => 3186,
                'name' => 'Amberhai',
                'city_id' => '1',
                'lat' => 28.5782314,
                'long' => 77.0496102,
                'radius' => 186.2845916748047,
            ),
            186 => 
            array (
                'id' => 3187,
                'name' => 'Anandwas',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            187 => 
            array (
                'id' => 3188,
                'name' => 'Ansari Nagar',
                'city_id' => '1',
                'lat' => 28.5689135,
                'long' => 77.17224089999999,
                'radius' => 1905.60498046875,
            ),
            188 => 
            array (
                'id' => 3189,
                'name' => 'APS Colony',
                'city_id' => '1',
                'lat' => 28.5748868,
                'long' => 77.1377306,
                'radius' => 665.9156494140625,
            ),
            189 => 
            array (
                'id' => 3190,
                'name' => 'A F Palam',
                'city_id' => '1',
                'lat' => 28.5900637,
                'long' => 77.08878279999999,
                'radius' => 2501.962158203125,
            ),
            190 => 
            array (
                'id' => 3191,
                'name' => 'Arjun Garh',
                'city_id' => '1',
                'lat' => 28.475239,
                'long' => 77.1175451,
                'radius' => 1638.0306396484375,
            ),
            191 => 
            array (
                'id' => 3192,
                'name' => 'Ashoka Park Extension',
                'city_id' => '1',
                'lat' => 28.6713873,
                'long' => 77.1518797,
                'radius' => 327.9194641113281,
            ),
            192 => 
            array (
                'id' => 3193,
                'name' => 'Auchandi',
                'city_id' => '1',
                'lat' => 28.8227365,
                'long' => 76.9926789,
                'radius' => 2080.93115234375,
            ),
            193 => 
            array (
                'id' => 3194,
                'name' => 'Aaya Nagar',
                'city_id' => '1',
                'lat' => 28.4720443,
                'long' => 77.1329417,
                'radius' => 3523.1708984375,
            ),
            194 => 
            array (
                'id' => 3195,
                'name' => 'Badosarai',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            195 => 
            array (
                'id' => 3196,
                'name' => 'Bagrola',
                'city_id' => '1',
                'lat' => 28.5715292,
                'long' => 77.0729954,
                'radius' => 415.203125,
            ),
            196 => 
            array (
                'id' => 3197,
                'name' => 'Bakhtawarpur',
                'city_id' => '1',
                'lat' => 28.8242148,
                'long' => 77.1721541,
                'radius' => 2841.2373046875,
            ),
            197 => 
            array (
                'id' => 3198,
                'name' => 'Bakkarwala',
                'city_id' => '1',
                'lat' => 28.6665007,
                'long' => 77.01637149999999,
                'radius' => 2545.315673828125,
            ),
            198 => 
            array (
                'id' => 3199,
                'name' => 'Bakoli',
                'city_id' => '1',
                'lat' => 28.8141928,
                'long' => 77.1456402,
                'radius' => 2080.66552734375,
            ),
            199 => 
            array (
                'id' => 3200,
                'name' => 'Balbir Nagar',
                'city_id' => '1',
                'lat' => 28.6837177,
                'long' => 77.29043779999999,
                'radius' => 645.7763671875,
            ),
            200 => 
            array (
                'id' => 3201,
                'name' => 'Bank Street',
                'city_id' => '1',
                'lat' => 28.6514394,
                'long' => 77.1931563,
                'radius' => 720.9158935546875,
            ),
            201 => 
            array (
                'id' => 3202,
                'name' => 'Baprola',
                'city_id' => '1',
                'lat' => 28.6397833,
                'long' => 77.0080007,
                'radius' => 2572.825927734375,
            ),
            202 => 
            array (
                'id' => 3203,
                'name' => 'Baroda House',
                'city_id' => '1',
                'lat' => 28.6170514,
                'long' => 77.2300971,
                'radius' => 223.77020263671875,
            ),
            203 => 
            array (
                'id' => 3204,
                'name' => 'Bharthal',
                'city_id' => '1',
                'lat' => 28.5428042,
                'long' => 77.0491436,
                'radius' => 2914.246337890625,
            ),
            204 => 
            array (
                'id' => 3205,
                'name' => 'Barwala',
                'city_id' => '1',
                'lat' => 28.7618856,
                'long' => 77.0636419,
                'radius' => 534.9564819335938,
            ),
            205 => 
            array (
                'id' => 3206,
                'name' => 'Bengali Market',
                'city_id' => '1',
                'lat' => 28.628811,
                'long' => 77.2332297,
                'radius' => 108.65211486816406,
            ),
            206 => 
            array (
                'id' => 3207,
                'name' => 'Bhagat Singh Market',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            207 => 
            array (
                'id' => 3208,
                'name' => 'Bhorgarh',
                'city_id' => '1',
                'lat' => 28.8277124,
                'long' => 77.0860672,
                'radius' => 2500.015625,
            ),
            208 => 
            array (
                'id' => 3209,
                'name' => 'Birla Lines',
                'city_id' => '1',
                'lat' => 28.601883,
                'long' => 77.2143334,
                'radius' => 45.703529357910156,
            ),
            209 => 
            array (
                'id' => 3210,
                'name' => 'BSF Camp Tigri',
                'city_id' => '1',
                'lat' => 28.5108979,
                'long' => 77.2386927,
                'radius' => 199.68399047851562,
            ),
            210 => 
            array (
                'id' => 3211,
                'name' => 'BTPS Badarpur Thermal Power Station',
                'city_id' => '1',
                'lat' => 28.5076585,
                'long' => 77.3001537,
                'radius' => 199.68666076660156,
            ),
            211 => 
            array (
                'id' => 3212,
                'name' => 'CGO Complex',
                'city_id' => '1',
                'lat' => 28.5893143,
                'long' => 77.2362044,
                'radius' => 707.0325927734375,
            ),
            212 => 
            array (
                'id' => 3213,
                'name' => 'Chandan Hola',
                'city_id' => '1',
                'lat' => 28.4696332,
                'long' => 77.1844619,
                'radius' => 846.7233276367188,
            ),
            213 => 
            array (
                'id' => 3214,
                'name' => 'Chand Nagar',
                'city_id' => '1',
                'lat' => 28.6485532,
                'long' => 77.09889369999999,
                'radius' => 648.1876220703125,
            ),
            214 => 
            array (
                'id' => 3215,
                'name' => 'Chandpur',
                'city_id' => '1',
                'lat' => 28.7575861,
                'long' => 77.004626,
                'radius' => 2461.94775390625,
            ),
            215 => 
            array (
                'id' => 3216,
                'name' => 'Chhatarpur',
                'city_id' => '1',
                'lat' => 28.4958562,
                'long' => 77.1848254,
                'radius' => 2801.85693359375,
            ),
            216 => 
            array (
                'id' => 3217,
                'name' => 'Chaukhandi',
                'city_id' => '1',
                'lat' => 28.6472126,
                'long' => 77.0924196,
                'radius' => 1493.18701171875,
            ),
            217 => 
            array (
                'id' => 3218,
                'name' => 'Chhawla',
                'city_id' => '1',
                'lat' => 28.562109,
                'long' => 77.0023039,
                'radius' => 3017.236572265625,
            ),
            218 => 
            array (
                'id' => 3219,
                'name' => 'Chilla',
                'city_id' => '1',
                'lat' => 28.5959804,
                'long' => 77.3026459,
                'radius' => 225.0421600341797,
            ),
            219 => 
            array (
                'id' => 3220,
                'name' => 'Constitution House',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            220 => 
            array (
                'id' => 3221,
                'name' => 'CRPF Jharoda Kalan',
                'city_id' => '1',
                'lat' => 28.6362024,
                'long' => 76.9559616,
                'radius' => 199.58045959472656,
            ),
            221 => 
            array (
                'id' => 3222,
                'name' => 'Dada Ghosh Bhawan',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            222 => 
            array (
                'id' => 3223,
                'name' => 'Dareeba',
                'city_id' => '1',
                'lat' => 28.6552556,
                'long' => 77.2342286,
                'radius' => 113.00691223144531,
            ),
            223 => 
            array (
                'id' => 3224,
                'name' => 'Dargah Sharif',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            224 => 
            array (
                'id' => 3225,
                'name' => 'Daryapur Kalan',
                'city_id' => '1',
                'lat' => 28.8127154,
                'long' => 77.0091686,
                'radius' => 199.4340362548828,
            ),
            225 => 
            array (
                'id' => 3226,
                'name' => 'Daulatpur',
                'city_id' => '1',
                'lat' => 28.5468584,
                'long' => 76.95977049999999,
                'radius' => 1836.072021484375,
            ),
            226 => 
            array (
                'id' => 3227,
                'name' => 'D C Goyla',
                'city_id' => '1',
                'lat' => 28.5809067,
                'long' => 77.0290995,
                'radius' => 1365.4105224609375,
            ),
            227 => 
            array (
                'id' => 3228,
                'name' => 'D C Nangli Sakravati',
                'city_id' => '1',
                'lat' => 28.620305,
                'long' => 77.00128819999999,
                'radius' => 2411.85791015625,
            ),
            228 => 
            array (
                'id' => 3229,
                'name' => 'Delhi Engineering College',
                'city_id' => '1',
                'lat' => 28.677782,
                'long' => 77.26127199999999,
                'radius' => 199.54603576660156,
            ),
            229 => 
            array (
                'id' => 3230,
                'name' => 'Delhi Industrail Area',
                'city_id' => '1',
                'lat' => 28.7886691,
                'long' => 77.0593246,
                'radius' => 3548.4501953125,
            ),
            230 => 
            array (
                'id' => 3231,
                'name' => 'Delhi Patel Nagar',
                'city_id' => '1',
                'lat' => 28.6544346,
                'long' => 77.16888,
                'radius' => 2054.55712890625,
            ),
            231 => 
            array (
                'id' => 3232,
                'name' => 'Delhi Sadar Bazar',
                'city_id' => '1',
                'lat' => 28.6569553,
                'long' => 77.2122028,
                'radius' => 1533.7364501953125,
            ),
            232 => 
            array (
                'id' => 3233,
                'name' => 'Delhi University',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            233 => 
            array (
                'id' => 3234,
                'name' => 'Deoli',
                'city_id' => '1',
                'lat' => 28.4962152,
                'long' => 77.2376414,
                'radius' => 1993.5242919921875,
            ),
            234 => 
            array (
                'id' => 3235,
                'name' => 'Dera',
                'city_id' => '1',
                'lat' => 28.4360317,
                'long' => 77.1761621,
                'radius' => 4559.05224609375,
            ),
            235 => 
            array (
                'id' => 3236,
                'name' => 'Dhansa',
                'city_id' => '1',
                'lat' => 28.5544853,
                'long' => 76.8650289,
                'radius' => 1812.484130859375,
            ),
            236 => 
            array (
                'id' => 3237,
                'name' => 'Dichaon Kalan',
                'city_id' => '1',
                'lat' => 28.6413612,
                'long' => 76.9840178,
                'radius' => 3333.415283203125,
            ),
            237 => 
            array (
                'id' => 3238,
                'name' => 'Dindarpur',
                'city_id' => '1',
                'lat' => 28.5925362,
                'long' => 76.9938274,
                'radius' => 281.9156494140625,
            ),
            238 => 
            array (
                'id' => 3239,
                'name' => 'District Court',
                'city_id' => '1',
                'lat' => 28.6222424,
                'long' => 77.2394376,
                'radius' => 370.08447265625,
            ),
            239 => 
            array (
                'id' => 3240,
                'name' => 'DK Mohan Garden',
                'city_id' => '1',
                'lat' => 28.6216186,
                'long' => 77.0396921,
                'radius' => 124.42023468017578,
            ),
            240 => 
            array (
                'id' => 3241,
                'name' => 'Bazar Road',
                'city_id' => '1',
                'lat' => 28.7388719,
                'long' => 77.0111905,
                'radius' => 264.1477966308594,
            ),
            241 => 
            array (
                'id' => 3242,
                'name' => 'Old Seemapuri',
                'city_id' => '1',
                'lat' => 28.680687,
                'long' => 77.33028879999999,
                'radius' => 517.6943969726562,
            ),
            242 => 
            array (
                'id' => 3243,
                'name' => 'Technology Bhavan',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            243 => 
            array (
                'id' => 3244,
                'name' => 'Tehkhand Edso',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            244 => 
            array (
                'id' => 3245,
                'name' => 'Teliwara',
                'city_id' => '1',
                'lat' => 28.6614155,
                'long' => 77.2142885,
                'radius' => 326.99737548828125,
            ),
            245 => 
            array (
                'id' => 3246,
                'name' => 'Tikri Kalan',
                'city_id' => '1',
                'lat' => 28.6823459,
                'long' => 76.9671865,
                'radius' => 1325.1561279296875,
            ),
            246 => 
            array (
                'id' => 3247,
                'name' => 'Tikri Khurd',
                'city_id' => '1',
                'lat' => 28.8351692,
                'long' => 77.1182324,
                'radius' => 1948.4244384765625,
            ),
            247 => 
            array (
                'id' => 3248,
                'name' => 'Tilak Nagar East',
                'city_id' => '1',
                'lat' => 28.6390693,
                'long' => 77.0867741,
                'radius' => 2183.45751953125,
            ),
            248 => 
            array (
                'id' => 3249,
                'name' => 'Tilangpur Kotla',
                'city_id' => '1',
                'lat' => 28.6466279,
                'long' => 77.02571499999999,
                'radius' => 1377.18408203125,
            ),
            249 => 
            array (
                'id' => 3250,
                'name' => 'Tughlakabad Railway Colony',
                'city_id' => '1',
                'lat' => 28.5068569,
                'long' => 77.28936060000001,
                'radius' => 1841.15966796875,
            ),
            250 => 
            array (
                'id' => 3251,
                'name' => 'Udyog Bhawan',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            251 => 
            array (
                'id' => 3252,
                'name' => 'Ujwa',
                'city_id' => '1',
                'lat' => 28.5626845,
                'long' => 76.9153281,
                'radius' => 1258.1597900390625,
            ),
            252 => 
            array (
                'id' => 3253,
                'name' => 'Union Public Service Commission',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            253 => 
            array (
                'id' => 3254,
                'name' => 'Karala',
                'city_id' => '1',
                'lat' => 28.7406198,
                'long' => 77.0362967,
                'radius' => 1847.1922607421875,
            ),
            254 => 
            array (
                'id' => 3255,
                'name' => 'Kanya',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            255 => 
            array (
                'id' => 3256,
                'name' => 'Kangan Heri',
                'city_id' => '1',
                'lat' => 28.5461863,
                'long' => 76.9901874,
                'radius' => 2338.37548828125,
            ),
            256 => 
            array (
                'id' => 3257,
                'name' => 'Kamla Nagar',
                'city_id' => '1',
                'lat' => 28.6809111,
                'long' => 77.2045867,
                'radius' => 781.5259399414062,
            ),
            257 => 
            array (
                'id' => 3258,
                'name' => 'IIT Hauz Khas',
                'city_id' => '1',
                'lat' => 28.5449756,
                'long' => 77.19262839999999,
                'radius' => 199.65586853027344,
            ),
            258 => 
            array (
                'id' => 3259,
                'name' => 'Jaffarpur Kalan',
                'city_id' => '1',
                'lat' => 28.5901698,
                'long' => 76.920915,
                'radius' => 1689.5479736328125,
            ),
            259 => 
            array (
                'id' => 3260,
                'name' => 'Khaira',
                'city_id' => '1',
                'lat' => 28.5968675,
                'long' => 76.97146409999999,
                'radius' => 1468.870361328125,
            ),
            260 => 
            array (
                'id' => 3261,
                'name' => 'Khampur',
                'city_id' => '1',
                'lat' => 28.8248251,
                'long' => 77.1320616,
                'radius' => 2211.843017578125,
            ),
            261 => 
            array (
                'id' => 3262,
                'name' => 'Khajuri Khas',
                'city_id' => '1',
                'lat' => 28.7100319,
                'long' => 77.2603927,
                'radius' => 1334.2386474609375,
            ),
            262 => 
            array (
                'id' => 3263,
                'name' => 'Khera Dabur',
                'city_id' => '1',
                'lat' => 28.5837995,
                'long' => 76.93690629999999,
                'radius' => 3531.661376953125,
            ),
            263 => 
            array (
                'id' => 3264,
                'name' => 'Khera Kalan',
                'city_id' => '1',
                'lat' => 28.7718685,
                'long' => 77.1169901,
                'radius' => 2506.708984375,
            ),
            264 => 
            array (
                'id' => 3265,
                'name' => 'Khera Khurd',
                'city_id' => '1',
                'lat' => 28.7753285,
                'long' => 77.09741170000001,
                'radius' => 2127.003662109375,
            ),
            265 => 
            array (
                'id' => 3266,
                'name' => 'Kidwai Nagar East',
                'city_id' => '1',
                'lat' => 28.5718613,
                'long' => 77.2110547,
                'radius' => 833.6385498046875,
            ),
            266 => 
            array (
                'id' => 3267,
                'name' => 'Kidwai Nagar West',
                'city_id' => '1',
                'lat' => 28.5714501,
                'long' => 77.20674269999999,
                'radius' => 375.8204345703125,
            ),
            267 => 
            array (
                'id' => 3268,
                'name' => 'Kirby Place',
                'city_id' => '1',
                'lat' => 28.6166063,
                'long' => 77.1300404,
                'radius' => 2032.015869140625,
            ),
            268 => 
            array (
                'id' => 3269,
                'name' => 'Krishi Bhawan',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            269 => 
            array (
                'id' => 3270,
                'name' => 'Krishna Market',
                'city_id' => '1',
                'lat' => 28.5748327,
                'long' => 77.242087,
                'radius' => 1905.49462890625,
            ),
            270 => 
            array (
                'id' => 3271,
                'name' => 'Ladpur',
                'city_id' => '1',
                'lat' => 28.7376773,
                'long' => 76.99587319999999,
                'radius' => 3058.742919921875,
            ),
            271 => 
            array (
                'id' => 3272,
                'name' => 'Lady Hardinge Medical College',
                'city_id' => '1',
                'lat' => 28.634208,
                'long' => 77.2125679,
                'radius' => 199.5821075439453,
            ),
            272 => 
            array (
                'id' => 3273,
                'name' => 'Lajpat Nagar',
                'city_id' => '1',
                'lat' => 28.5676955,
                'long' => 77.2432721,
                'radius' => 1748.4527587890625,
            ),
            273 => 
            array (
                'id' => 3274,
                'name' => 'Lal Kuan Edso',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            274 => 
            array (
                'id' => 3275,
                'name' => 'Lampur',
                'city_id' => '1',
                'lat' => 28.8516453,
                'long' => 77.0593246,
                'radius' => 2344.479736328125,
            ),
            275 => 
            array (
                'id' => 3276,
                'name' => 'Laxmi Bai Nagar',
                'city_id' => '1',
                'lat' => 28.5780204,
                'long' => 77.2087952,
                'radius' => 803.234375,
            ),
            276 => 
            array (
                'id' => 3277,
                'name' => 'L M Nagar Industrial Area',
                'city_id' => '1',
                'lat' => 28.6850198,
                'long' => 77.0981743,
                'radius' => 2104.212890625,
            ),
            277 => 
            array (
                'id' => 3278,
                'name' => 'Lodhi Colony Market',
                'city_id' => '1',
                'lat' => 28.5860181,
                'long' => 77.2279415,
                'radius' => 208.1551055908203,
            ),
            278 => 
            array (
                'id' => 3279,
                'name' => 'Loni Road Housing Complex',
                'city_id' => '1',
                'lat' => 28.6966598,
                'long' => 77.2946083,
                'radius' => 199.53038024902344,
            ),
            279 => 
            array (
                'id' => 3280,
                'name' => 'L R Market',
                'city_id' => '1',
                'lat' => 28.6577391,
                'long' => 77.2358452,
                'radius' => 206.1138458251953,
            ),
            280 => 
            array (
                'id' => 3281,
                'name' => 'Madipur Slum Quarters',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            281 => 
            array (
                'id' => 3282,
                'name' => 'Madipur Village',
                'city_id' => '1',
                'lat' => 28.6721246,
                'long' => 77.12047129999999,
                'radius' => 460.69537353515625,
            ),
            282 => 
            array (
                'id' => 3283,
                'name' => 'Mahabir Nagar',
                'city_id' => '1',
                'lat' => 28.6342693,
                'long' => 77.0845064,
                'radius' => 505.778564453125,
            ),
            283 => 
            array (
                'id' => 3284,
                'name' => 'Maidangarhi',
                'city_id' => '1',
                'lat' => 28.4997988,
                'long' => 77.195326,
                'radius' => 2198.75732421875,
            ),
            284 => 
            array (
                'id' => 3285,
                'name' => 'Majradabas',
                'city_id' => '1',
                'lat' => 28.7700127,
                'long' => 76.9971205,
                'radius' => 3130.35009765625,
            ),
            285 => 
            array (
                'id' => 3286,
                'name' => 'Malcha Marg',
                'city_id' => '1',
                'lat' => 28.6015642,
                'long' => 77.185807,
                'radius' => 342.0317687988281,
            ),
            286 => 
            array (
                'id' => 3287,
                'name' => 'Malikpur',
                'city_id' => '1',
                'lat' => 28.5521976,
                'long' => 76.9004959,
                'radius' => 3071.74072265625,
            ),
            287 => 
            array (
                'id' => 3288,
                'name' => 'Mandawali Fazalpur',
                'city_id' => '1',
                'lat' => 28.6267547,
                'long' => 77.2889129,
                'radius' => 713.3880615234375,
            ),
            288 => 
            array (
                'id' => 3289,
                'name' => 'Mandi',
                'city_id' => '1',
                'lat' => 28.4451711,
                'long' => 77.1443973,
                'radius' => 2584.6826171875,
            ),
            289 => 
            array (
                'id' => 3290,
                'name' => 'Mangolpuri',
                'city_id' => '1',
                'lat' => 28.6925367,
                'long' => 77.08842369999999,
                'radius' => 2495.02197265625,
            ),
            290 => 
            array (
                'id' => 3291,
                'name' => 'Mansarovar Park',
                'city_id' => '1',
                'lat' => 28.6813447,
                'long' => 77.2994144,
                'radius' => 468.9191589355469,
            ),
            291 => 
            array (
                'id' => 3292,
                'name' => 'Masjidmoth Greater Kailash',
                'city_id' => '1',
                'lat' => 28.5436935,
                'long' => 77.2390784,
                'radius' => 1371.64599609375,
            ),
            292 => 
            array (
                'id' => 3293,
                'name' => 'Masoodpur',
                'city_id' => '1',
                'lat' => 28.528944,
                'long' => 77.15211140000001,
                'radius' => 611.3885498046875,
            ),
            293 => 
            array (
                'id' => 3294,
                'name' => 'Master Prithvinath Marg',
                'city_id' => '1',
                'lat' => 28.6564211,
                'long' => 77.200272,
                'radius' => 101.48716735839844,
            ),
            294 => 
            array (
                'id' => 3295,
                'name' => 'Matiala',
                'city_id' => '1',
                'lat' => 28.6094086,
                'long' => 77.05432499999999,
                'radius' => 1481.091796875,
            ),
            295 => 
            array (
                'id' => 3296,
                'name' => 'Maurya Enclave',
                'city_id' => '1',
                'lat' => 28.7024578,
                'long' => 77.1350397,
                'radius' => 1903.1793212890625,
            ),
            296 => 
            array (
                'id' => 3297,
                'name' => 'MBS Nagar',
                'city_id' => '1',
                'lat' => 28.6450229,
                'long' => 77.08588970000001,
                'radius' => 222.14073181152344,
            ),
            297 => 
            array (
                'id' => 3298,
                'name' => 'Mitraon',
                'city_id' => '1',
                'lat' => 28.6056141,
                'long' => 76.944141,
                'radius' => 2015.2236328125,
            ),
            298 => 
            array (
                'id' => 3299,
                'name' => 'Mubarakpur Dabas',
                'city_id' => '1',
                'lat' => 28.7092886,
                'long' => 77.0328196,
                'radius' => 1573.757080078125,
            ),
            299 => 
            array (
                'id' => 3300,
                'name' => 'Multani Dhanda',
                'city_id' => '1',
                'lat' => 28.6478483,
                'long' => 77.2110547,
                'radius' => 324.92755126953125,
            ),
            300 => 
            array (
                'id' => 3301,
                'name' => 'Mundela Kalan',
                'city_id' => '1',
                'lat' => 28.6119148,
                'long' => 76.8949702,
                'radius' => 2372.64208984375,
            ),
            301 => 
            array (
                'id' => 3302,
                'name' => 'Nangal Dewat',
                'city_id' => '1',
                'lat' => 28.5254846,
                'long' => 77.1384496,
                'radius' => 472.46588134765625,
            ),
            302 => 
            array (
                'id' => 3303,
                'name' => 'Nangal Thakran',
                'city_id' => '1',
                'lat' => 28.8084707,
                'long' => 77.0053459,
                'radius' => 723.2361450195312,
            ),
            303 => 
            array (
                'id' => 3304,
                'name' => 'Naraina Village',
                'city_id' => '1',
                'lat' => 28.6201123,
                'long' => 77.1384496,
                'radius' => 1379.8153076171875,
            ),
            304 => 
            array (
                'id' => 3305,
                'name' => 'Nasirpur',
                'city_id' => '1',
                'lat' => 28.5997845,
                'long' => 77.0913021,
                'radius' => 1036.2288818359375,
            ),
            305 => 
            array (
                'id' => 3306,
                'name' => 'Nathupura',
                'city_id' => '1',
                'lat' => 28.7657595,
                'long' => 77.18333489999999,
                'radius' => 1165.802490234375,
            ),
            306 => 
            array (
                'id' => 3307,
                'name' => 'National Physical Laboratory',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            307 => 
            array (
                'id' => 3308,
                'name' => 'Nauroji Nagar',
                'city_id' => '1',
                'lat' => 28.5674849,
                'long' => 77.19524349999999,
                'radius' => 555.8764038085938,
            ),
            308 => 
            array (
                'id' => 3309,
                'name' => 'Naya Bans',
                'city_id' => '1',
                'lat' => 28.7855015,
                'long' => 77.093139,
                'radius' => 576.9783935546875,
            ),
            309 => 
            array (
                'id' => 3310,
                'name' => 'Nehru Nagar',
                'city_id' => '1',
                'lat' => 28.5638667,
                'long' => 77.2608101,
                'radius' => 104.69175720214844,
            ),
            310 => 
            array (
                'id' => 3311,
                'name' => 'New Delhi',
                'city_id' => '1',
                'lat' => 28.6139391,
                'long' => 77.2090212,
                'radius' => 26852.39453125,
            ),
            311 => 
            array (
                'id' => 3312,
                'name' => 'New Delhi GPO',
                'city_id' => '1',
                'lat' => 28.4976771,
                'long' => 77.1890502,
                'radius' => 90.12387084960938,
            ),
            312 => 
            array (
                'id' => 3313,
                'name' => 'New Multan Nagar',
                'city_id' => '1',
                'lat' => 28.6810457,
                'long' => 77.10896369999999,
                'radius' => 1447.8184814453125,
            ),
            313 => 
            array (
                'id' => 3314,
                'name' => 'New Usmanpur',
                'city_id' => '1',
                'lat' => 28.68183789999999,
                'long' => 77.257894,
                'radius' => 1332.1868896484375,
            ),
            314 => 
            array (
                'id' => 3315,
                'name' => 'NI Area',
                'city_id' => '1',
                'lat' => 28.5284706,
                'long' => 77.2186713,
                'radius' => 199.66949462890625,
            ),
            315 => 
            array (
                'id' => 3316,
                'name' => 'NIE Campus',
                'city_id' => '1',
                'lat' => 28.5387984,
                'long' => 77.19383909999999,
                'radius' => 199.6609649658203,
            ),
            316 => 
            array (
                'id' => 3317,
                'name' => 'Nilothi',
                'city_id' => '1',
                'lat' => 28.6511815,
                'long' => 77.0593246,
                'radius' => 1984.268798828125,
            ),
            317 => 
            array (
                'id' => 3318,
                'name' => 'Nimri',
                'city_id' => '1',
                'lat' => 28.6829674,
                'long' => 77.1736794,
                'radius' => 998.6858520507812,
            ),
            318 => 
            array (
                'id' => 3319,
                'name' => 'Nirankari Colony',
                'city_id' => '1',
                'lat' => 28.7165478,
                'long' => 77.20638339999999,
                'radius' => 616.2279052734375,
            ),
            319 => 
            array (
                'id' => 3320,
                'name' => 'Nirman Bhavan',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            320 => 
            array (
                'id' => 3321,
                'name' => 'Nizampur',
                'city_id' => '1',
                'lat' => 28.7167134,
                'long' => 76.9671865,
                'radius' => 2707.38818359375,
            ),
            321 => 
            array (
                'id' => 3322,
                'name' => 'North Avenue',
                'city_id' => '1',
                'lat' => 28.6706706,
                'long' => 77.1284374,
                'radius' => 529.4982299804688,
            ),
            322 => 
            array (
                'id' => 3323,
                'name' => 'NSIT Dwarka',
                'city_id' => '1',
                'lat' => 28.6080516,
                'long' => 77.03618709999999,
                'radius' => 199.60374450683594,
            ),
            323 => 
            array (
                'id' => 3324,
                'name' => 'Okhla Canal Edbo',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            324 => 
            array (
                'id' => 3325,
                'name' => 'Rani Khera',
                'city_id' => '1',
                'lat' => 28.7040152,
                'long' => 77.0132643,
                'radius' => 1555.540283203125,
            ),
            325 => 
            array (
                'id' => 3326,
                'name' => 'Raota',
                'city_id' => '1',
                'lat' => 28.5237806,
                'long' => 76.90226539999999,
                'radius' => 2649.743408203125,
            ),
            326 => 
            array (
                'id' => 3327,
                'name' => 'Rashtrapati Bhavan',
                'city_id' => '1',
                'lat' => 28.6141527,
                'long' => 77.1959622,
                'radius' => 946.6574096679688,
            ),
            327 => 
            array (
                'id' => 3328,
                'name' => 'Rewla Khanpur',
                'city_id' => '1',
                'lat' => 28.5647261,
                'long' => 76.98144099999999,
                'radius' => 2925.336181640625,
            ),
            328 => 
            array (
                'id' => 3329,
                'name' => 'Rithala',
                'city_id' => '1',
                'lat' => 28.7191961,
                'long' => 77.1006616,
                'radius' => 1106.5592041015625,
            ),
            329 => 
            array (
                'id' => 3330,
                'name' => 'Rohtash Nagar',
                'city_id' => '1',
                'lat' => 28.6775157,
                'long' => 77.2883811,
                'radius' => 793.7317504882812,
            ),
            330 => 
            array (
                'id' => 3331,
                'name' => 'RR Hospital',
                'city_id' => '1',
                'lat' => 28.5836503,
                'long' => 77.1578737,
                'radius' => 199.62391662597656,
            ),
            331 => 
            array (
                'id' => 3332,
                'name' => 'Sadiq Nagar',
                'city_id' => '1',
                'lat' => 28.5555867,
                'long' => 77.2255594,
                'radius' => 895.4115600585938,
            ),
            332 => 
            array (
                'id' => 3333,
                'name' => 'Safdarjung Airport',
                'city_id' => '1',
                'lat' => 28.5834551,
                'long' => 77.21110259999999,
                'radius' => 199.62408447265625,
            ),
            333 => 
            array (
                'id' => 3334,
                'name' => 'Samalkha',
                'city_id' => '1',
                'lat' => 28.5342052,
                'long' => 77.087384,
                'radius' => 532.6397705078125,
            ),
            334 => 
            array (
                'id' => 3335,
                'name' => 'Sanoth',
                'city_id' => '1',
                'lat' => 28.8146777,
                'long' => 77.0740891,
                'radius' => 1799.362060546875,
            ),
            335 => 
            array (
                'id' => 3336,
                'name' => 'Himmatpuri',
                'city_id' => '1',
                'lat' => 28.6036798,
                'long' => 77.304441,
                'radius' => 558.5509643554688,
            ),
            336 => 
            array (
                'id' => 3337,
                'name' => 'Hiran Kudna',
                'city_id' => '1',
                'lat' => 28.6731361,
                'long' => 76.9984049,
                'radius' => 2501.607177734375,
            ),
            337 => 
            array (
                'id' => 3338,
                'name' => 'Holambi Kalan',
                'city_id' => '1',
                'lat' => 28.80659039999999,
                'long' => 77.09681359999999,
                'radius' => 1950.53369140625,
            ),
            338 => 
            array (
                'id' => 3339,
                'name' => 'Indira Gandhi National Open University',
                'city_id' => '1',
                'lat' => 28.4969984,
                'long' => 77.20360029999999,
                'radius' => 199.69544982910156,
            ),
            339 => 
            array (
                'id' => 3340,
                'name' => 'Indira Park',
                'city_id' => '1',
                'lat' => 28.595988,
                'long' => 77.0999726,
                'radius' => 340.9930114746094,
            ),
            340 => 
            array (
                'id' => 3341,
                'name' => 'Indraprastha',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            341 => 
            array (
                'id' => 3342,
                'name' => 'Issapur',
                'city_id' => '1',
                'lat' => 28.5763063,
                'long' => 76.8652686,
                'radius' => 3329.798095703125,
            ),
            342 => 
            array (
                'id' => 3343,
                'name' => 'Hamdard Nagar',
                'city_id' => '1',
                'lat' => 28.5153091,
                'long' => 77.2498549,
                'radius' => 532.7166137695312,
            ),
            343 => 
            array (
                'id' => 3344,
                'name' => 'Hari Nagar Ashram',
                'city_id' => '1',
                'lat' => 28.5736253,
                'long' => 77.2559612,
                'radius' => 497.1899108886719,
            ),
            344 => 
            array (
                'id' => 3345,
                'name' => 'Hastal Village',
                'city_id' => '1',
                'lat' => 28.6377129,
                'long' => 77.0490264,
                'radius' => 2150.118408203125,
            ),
            345 => 
            array (
                'id' => 3346,
                'name' => 'Ganeshpura',
                'city_id' => '1',
                'lat' => 28.6775654,
                'long' => 77.16217689999999,
                'radius' => 437.676513671875,
            ),
            346 => 
            array (
                'id' => 3347,
                'name' => 'Hareveli',
                'city_id' => '1',
                'lat' => 28.8340849,
                'long' => 77.0067332,
                'radius' => 1948.5089111328125,
            ),
            347 => 
            array (
                'id' => 3348,
                'name' => 'Gheora',
                'city_id' => '1',
                'lat' => 28.6901066,
                'long' => 76.9939826,
                'radius' => 2281.85107421875,
            ),
            348 => 
            array (
                'id' => 3349,
                'name' => 'Dhulsiras',
                'city_id' => '1',
                'lat' => 28.5641729,
                'long' => 77.0413344,
                'radius' => 1942.488037109375,
            ),
            349 => 
            array (
                'id' => 3350,
                'name' => 'Election Commission',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            350 => 
            array (
                'id' => 3351,
                'name' => 'Fatehpur Beri',
                'city_id' => '1',
                'lat' => 28.4576531,
                'long' => 77.1795558,
                'radius' => 1983.8861083984375,
            ),
            351 => 
            array (
                'id' => 3352,
                'name' => 'Gadaipur',
                'city_id' => '1',
                'lat' => 28.4892931,
                'long' => 77.1499544,
                'radius' => 1142.29833984375,
            ),
            352 => 
            array (
                'id' => 3353,
                'name' => 'Ghalibpur',
                'city_id' => '1',
                'lat' => 28.5312088,
                'long' => 76.88650849999999,
                'radius' => 1827.160400390625,
            ),
            353 => 
            array (
                'id' => 3354,
                'name' => 'Green Park Market',
                'city_id' => '1',
                'lat' => 28.5618637,
                'long' => 77.20584439999999,
                'radius' => 160.2620849609375,
            ),
            354 => 
            array (
                'id' => 3355,
                'name' => 'Guru Teg Bahadur Hospital',
                'city_id' => '1',
                'lat' => 28.6838431,
                'long' => 77.3107991,
                'radius' => 199.54100036621094,
            ),
            355 => 
            array (
                'id' => 3356,
                'name' => 'Gymkhana Club',
                'city_id' => '1',
                'lat' => 28.598096,
                'long' => 77.2042274,
                'radius' => 435.64373779296875,
            ),
            356 => 
            array (
                'id' => 3357,
                'name' => 'Ghoga',
                'city_id' => '1',
                'lat' => 28.83000909999999,
                'long' => 77.0471403,
                'radius' => 1925.3109130859375,
            ),
            357 => 
            array (
                'id' => 3358,
                'name' => 'Ghonda',
                'city_id' => '1',
                'lat' => 28.6903201,
                'long' => 77.2656588,
                'radius' => 1191.1739501953125,
            ),
            358 => 
            array (
                'id' => 3359,
                'name' => 'Ghuman Hera',
                'city_id' => '1',
                'lat' => 28.5319993,
                'long' => 76.9239727,
                'radius' => 2836.767822265625,
            ),
            359 => 
            array (
                'id' => 3360,
                'name' => 'Ghokalpuri',
                'city_id' => '1',
                'lat' => 28.703423,
                'long' => 77.2840105,
                'radius' => 2175.13134765625,
            ),
            360 => 
            array (
                'id' => 3361,
                'name' => 'Goverdhan Bihari Colony',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            361 => 
            array (
                'id' => 3362,
                'name' => 'Jharoda Majra',
                'city_id' => '1',
                'lat' => 28.728185,
                'long' => 77.2088041,
                'radius' => 1999.2054443359375,
            ),
            362 => 
            array (
                'id' => 3363,
                'name' => 'Jhatikra',
                'city_id' => '1',
                'lat' => 28.5209051,
                'long' => 76.9640111,
                'radius' => 2504.104248046875,
            ),
            363 => 
            array (
                'id' => 3364,
                'name' => 'Jhilmil',
                'city_id' => '1',
                'lat' => 28.6756754,
                'long' => 77.3124536,
                'radius' => 199.5477752685547,
            ),
            364 => 
            array (
                'id' => 3365,
                'name' => 'JNU New Campus',
                'city_id' => '1',
                'lat' => 28.5393186,
                'long' => 77.1635512,
                'radius' => 199.66053771972656,
            ),
            365 => 
            array (
                'id' => 3366,
                'name' => 'Johripur',
                'city_id' => '1',
                'lat' => 28.7174577,
                'long' => 77.2851341,
                'radius' => 1005.65966796875,
            ),
            366 => 
            array (
                'id' => 3367,
                'name' => 'Jwala Heri',
                'city_id' => '1',
                'lat' => 28.6672035,
                'long' => 77.1028498,
                'radius' => 297.1747741699219,
            ),
            367 => 
            array (
                'id' => 3368,
                'name' => 'Jwalapuri',
                'city_id' => '1',
                'lat' => 28.6781308,
                'long' => 77.078751,
                'radius' => 658.7171630859375,
            ),
            368 => 
            array (
                'id' => 3369,
                'name' => 'Kadipur',
                'city_id' => '1',
                'lat' => 28.7735014,
                'long' => 77.16179530000001,
                'radius' => 2673.799560546875,
            ),
            369 => 
            array (
                'id' => 3370,
                'name' => 'Kakrola',
                'city_id' => '1',
                'lat' => 28.5984354,
                'long' => 77.0220207,
                'radius' => 3316.61669921875,
            ),
            370 => 
            array (
                'id' => 3371,
                'name' => 'Kalyanvas',
                'city_id' => '1',
                'lat' => 28.6201344,
                'long' => 77.3116215,
                'radius' => 405.1801452636719,
            ),
            371 => 
            array (
                'id' => 3372,
                'name' => 'Guru Gobind Singh Marg',
                'city_id' => '1',
                'lat' => 28.65848879999999,
                'long' => 77.1928082,
                'radius' => 1388.7645263671875,
            ),
            372 => 
            array (
                'id' => 3373,
                'name' => 'Gurukul',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            373 => 
            array (
                'id' => 3374,
                'name' => 'Hazrat Nizamuddin',
                'city_id' => '1',
                'lat' => 28.5889755,
                'long' => 77.2535077,
                'radius' => 199.61952209472656,
            ),
            374 => 
            array (
                'id' => 3375,
                'name' => 'Hiranki',
                'city_id' => '1',
                'lat' => 28.7988215,
                'long' => 77.1793661,
                'radius' => 2580.57568359375,
            ),
            375 => 
            array (
                'id' => 3376,
                'name' => 'H.S.Sangh',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            376 => 
            array (
                'id' => 3377,
                'name' => 'Pandwala Kalan',
                'city_id' => '1',
                'lat' => 28.565424,
                'long' => 76.9634382,
                'radius' => 529.2071533203125,
            ),
            377 => 
            array (
                'id' => 3378,
                'name' => 'Onkar Nagar',
                'city_id' => '1',
                'lat' => 28.6745616,
                'long' => 77.1607391,
                'radius' => 400.9073181152344,
            ),
            378 => 
            array (
                'id' => 3379,
                'name' => 'Padam Nagar',
                'city_id' => '1',
                'lat' => 28.6661765,
                'long' => 77.18913409999999,
                'radius' => 397.2444763183594,
            ),
            379 => 
            array (
                'id' => 3380,
                'name' => 'Palam Airport',
                'city_id' => '1',
                'lat' => 28.5561624,
                'long' => 77.0999578,
                'radius' => 199.64663696289062,
            ),
            380 => 
            array (
                'id' => 3381,
                'name' => 'Palla',
                'city_id' => '1',
                'lat' => 28.8436202,
                'long' => 77.1849609,
                'radius' => 3227.1826171875,
            ),
            381 => 
            array (
                'id' => 3382,
                'name' => 'Pandara Road',
                'city_id' => '1',
                'lat' => 28.6059896,
                'long' => 77.2307423,
                'radius' => 501.5567321777344,
            ),
            382 => 
            array (
                'id' => 3383,
                'name' => 'Paprawat',
                'city_id' => '1',
                'lat' => 28.5803203,
                'long' => 76.97870759999999,
                'radius' => 2216.175048828125,
            ),
            383 => 
            array (
                'id' => 3384,
                'name' => 'Parliament House',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            384 => 
            array (
                'id' => 3385,
                'name' => 'Paryavaran Complex',
                'city_id' => '1',
                'lat' => 28.514317,
                'long' => 77.20171189999999,
                'radius' => 580.3057861328125,
            ),
            385 => 
            array (
                'id' => 3386,
                'name' => 'Patel Nagar',
                'city_id' => '1',
                'lat' => 28.6544346,
                'long' => 77.16888,
                'radius' => 2054.55712890625,
            ),
            386 => 
            array (
                'id' => 3387,
                'name' => 'Patrachar Vidyalaya',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            387 => 
            array (
                'id' => 3388,
                'name' => 'Pehlad Pur',
                'city_id' => '1',
                'lat' => 28.7379205,
                'long' => 77.0792268,
                'radius' => 1598.2728271484375,
            ),
            388 => 
            array (
                'id' => 3389,
                'name' => 'Pehladpur',
                'city_id' => '1',
                'lat' => 28.7379205,
                'long' => 77.0792268,
                'radius' => 1582.31298828125,
            ),
            389 => 
            array (
                'id' => 3390,
                'name' => 'Pinto Park',
                'city_id' => '1',
                'lat' => 28.578238,
                'long' => 77.101508,
                'radius' => 199.62840270996094,
            ),
            390 => 
            array (
                'id' => 3391,
                'name' => 'Pooth Khurd',
                'city_id' => '1',
                'lat' => 28.7717871,
                'long' => 77.0491938,
                'radius' => 1947.6983642578125,
            ),
            391 => 
            array (
                'id' => 3392,
                'name' => 'Power House',
                'city_id' => '1',
                'lat' => 28.5076585,
                'long' => 77.3001537,
                'radius' => 199.68666076660156,
            ),
            392 => 
            array (
                'id' => 3393,
                'name' => 'Pragati Vihar',
                'city_id' => '1',
                'lat' => 28.5869347,
                'long' => 77.23381859999999,
                'radius' => 1026.878662109375,
            ),
            393 => 
            array (
                'id' => 3394,
                'name' => 'Prashant Vihar',
                'city_id' => '1',
                'lat' => 28.7157406,
                'long' => 77.1351454,
                'radius' => 954.8416137695312,
            ),
            394 => 
            array (
                'id' => 3395,
                'name' => 'Pratap Market',
                'city_id' => '1',
                'lat' => 28.5565663,
                'long' => 77.1742424,
                'radius' => 22.555208206176758,
            ),
            395 => 
            array (
                'id' => 3396,
                'name' => 'Punjab Khor',
                'city_id' => '1',
                'lat' => 28.7766011,
                'long' => 76.9630025,
                'radius' => 1828.464599609375,
            ),
            396 => 
            array (
                'id' => 3397,
                'name' => 'Pushpa Bhavan',
                'city_id' => '1',
                'lat' => 28.5277757,
                'long' => 77.23337529999999,
                'radius' => 130.3070831298828,
            ),
            397 => 
            array (
                'id' => 3398,
                'name' => 'Pooth Kalan',
                'city_id' => '1',
                'lat' => 28.7110774,
                'long' => 77.078751,
                'radius' => 484.29925537109375,
            ),
            398 => 
            array (
                'id' => 3399,
                'name' => 'Qutabagarh',
                'city_id' => '1',
                'lat' => 28.8008376,
                'long' => 76.9605607,
                'radius' => 2231.378173828125,
            ),
            399 => 
            array (
                'id' => 3400,
                'name' => 'Raghubar Pura',
                'city_id' => '1',
                'lat' => 28.6606438,
                'long' => 77.2678499,
                'radius' => 166.35592651367188,
            ),
            400 => 
            array (
                'id' => 3401,
                'name' => 'Rail Bhawan',
                'city_id' => '1',
                'lat' => 28.6158245,
                'long' => 77.2115936,
                'radius' => 199.59732055664062,
            ),
            401 => 
            array (
                'id' => 3402,
                'name' => 'Rajokri',
                'city_id' => '1',
                'lat' => 28.5125329,
                'long' => 77.11098129999999,
                'radius' => 2629.32958984375,
            ),
            402 => 
            array (
                'id' => 3403,
                'name' => 'Ranhola',
                'city_id' => '1',
                'lat' => 28.65612849999999,
                'long' => 77.0406828,
                'radius' => 1651.8311767578125,
            ),
            403 => 
            array (
                'id' => 3404,
                'name' => 'Satbari',
                'city_id' => '1',
                'lat' => 28.4787481,
                'long' => 77.1939062,
                'radius' => 2625.127685546875,
            ),
            404 => 
            array (
                'id' => 3405,
                'name' => 'Sat Nagar',
                'city_id' => '1',
                'lat' => 28.647464,
                'long' => 77.1837597,
                'radius' => 359.5687255859375,
            ),
            405 => 
            array (
                'id' => 3406,
                'name' => 'Satyawati Nagar',
                'city_id' => '1',
                'lat' => 28.6883683,
                'long' => 77.18518069999999,
                'radius' => 373.94073486328125,
            ),
            406 => 
            array (
                'id' => 3407,
                'name' => 'Shahbad Daulatpur',
                'city_id' => '1',
                'lat' => 28.7494317,
                'long' => 77.1125599,
                'radius' => 1339.26123046875,
            ),
            407 => 
            array (
                'id' => 3408,
                'name' => 'Kancharapalem',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            408 => 
            array (
                'id' => 3409,
                'name' => 'Delhi Ncr',
                'city_id' => '1',
                'lat' => 28.7040592,
                'long' => 77.10249019999999,
                'radius' => 41440.375,
            ),
            409 => 
            array (
                'id' => 3410,
                'name' => 'Shivaji Park',
                'city_id' => '1',
                'lat' => 28.6732317,
                'long' => 77.1319777,
                'radius' => 474.4324645996094,
            ),
            410 => 
            array (
                'id' => 3411,
                'name' => 'Signal Enclave',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            411 => 
            array (
                'id' => 3412,
                'name' => 'Govind Pura',
                'city_id' => '1',
                'lat' => 28.5413852,
                'long' => 77.263863,
                'radius' => 320.5941162109375,
            ),
            412 => 
            array (
                'id' => 3413,
                'name' => 'Kasturba Nagar',
                'city_id' => '1',
                'lat' => 28.5777976,
                'long' => 77.2243977,
                'radius' => 540.9524536132812,
            ),
            413 => 
            array (
                'id' => 3414,
                'name' => 'Katewara',
                'city_id' => '1',
                'lat' => 28.8038224,
                'long' => 76.9769917,
                'radius' => 1915.20654296875,
            ),
            414 => 
            array (
                'id' => 3415,
                'name' => 'S J Enclave',
                'city_id' => '1',
                'lat' => 28.5829644,
                'long' => 77.16217689999999,
                'radius' => 981.7108154296875,
            ),
            415 => 
            array (
                'id' => 3416,
                'name' => 'Shakur Basti Depot',
                'city_id' => '1',
                'lat' => 28.6789354,
                'long' => 77.1141315,
                'radius' => 199.54507446289062,
            ),
            416 => 
            array (
                'id' => 3417,
                'name' => 'Shastri Bhavan',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            417 => 
            array (
                'id' => 3418,
                'name' => 'Siraspur',
                'city_id' => '1',
                'lat' => 28.7619156,
                'long' => 77.1390725,
                'radius' => 2551.023681640625,
            ),
            418 => 
            array (
                'id' => 3419,
                'name' => 'Sonia Vihar',
                'city_id' => '1',
                'lat' => 28.7332472,
                'long' => 77.2495891,
                'radius' => 4224.29736328125,
            ),
            419 => 
            array (
                'id' => 3420,
                'name' => 'South Avenue',
                'city_id' => '1',
                'lat' => 28.6083048,
                'long' => 77.1991805,
                'radius' => 362.546142578125,
            ),
            420 => 
            array (
                'id' => 3421,
                'name' => 'Sriniwaspuri',
                'city_id' => '1',
                'lat' => 28.5660932,
                'long' => 77.25297479999999,
                'radius' => 1209.11572265625,
            ),
            421 => 
            array (
                'id' => 3422,
                'name' => 'Station Road Delhi',
                'city_id' => '1',
                'lat' => 28.6828824,
                'long' => 77.1282451,
                'radius' => 164.17152404785156,
            ),
            422 => 
            array (
                'id' => 3423,
                'name' => 'Subroto Park',
                'city_id' => '1',
                'lat' => 28.5797808,
                'long' => 77.15139239999999,
                'radius' => 1407.861572265625,
            ),
            423 => 
            array (
                'id' => 3424,
                'name' => 'Subzi Mandi',
                'city_id' => '1',
                'lat' => 28.6694461,
                'long' => 77.2045867,
                'radius' => 916.5339965820312,
            ),
            424 => 
            array (
                'id' => 3425,
                'name' => 'Surehra',
                'city_id' => '1',
                'lat' => 27.2176184,
                'long' => 78.1849427,
                'radius' => 4649.5302734375,
            ),
            425 => 
            array (
                'id' => 3426,
                'name' => 'Swami Ramthirth Nagar',
                'city_id' => '1',
                'lat' => 28.6459845,
                'long' => 77.2025257,
                'radius' => 199.57235717773438,
            ),
            426 => 
            array (
                'id' => 3427,
                'name' => 'Tajpur Kalan',
                'city_id' => '1',
                'lat' => 28.8373807,
                'long' => 77.1718195,
                'radius' => 1729.1397705078125,
            ),
            427 => 
            array (
                'id' => 3428,
                'name' => 'Talimabad',
                'city_id' => '1',
                'lat' => 28.5048895,
                'long' => 77.2534469,
                'radius' => 945.0303344726562,
            ),
            428 => 
            array (
                'id' => 3429,
                'name' => 'TB Hospital',
                'city_id' => '1',
                'lat' => 28.5287017,
                'long' => 77.18917239999999,
                'radius' => 199.66929626464844,
            ),
            429 => 
            array (
                'id' => 3430,
                'name' => 'Jagjit Nagar',
                'city_id' => '1',
                'lat' => 28.6693976,
                'long' => 77.2491365,
                'radius' => 846.4052734375,
            ),
            430 => 
            array (
                'id' => 3431,
                'name' => 'Jaitpur Edbo',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            431 => 
            array (
                'id' => 3432,
                'name' => 'Janata Market',
                'city_id' => '1',
                'lat' => 28.6397668,
                'long' => 77.1229884,
                'radius' => 314.5212707519531,
            ),
            432 => 
            array (
                'id' => 3433,
                'name' => 'Jat Khore',
                'city_id' => '1',
                'lat' => 28.787561,
                'long' => 76.9743873,
                'radius' => 490.5526428222656,
            ),
            433 => 
            array (
                'id' => 3434,
                'name' => 'Jaunapur',
                'city_id' => '1',
                'lat' => 28.4670968,
                'long' => 77.1525034,
                'radius' => 3835.356201171875,
            ),
            434 => 
            array (
                'id' => 3435,
                'name' => 'Jaunti',
                'city_id' => '1',
                'lat' => 28.7491802,
                'long' => 76.96881789999999,
                'radius' => 2664.013916015625,
            ),
            435 => 
            array (
                'id' => 3436,
                'name' => 'Jharoda Kalan',
                'city_id' => '1',
                'lat' => 28.6525882,
                'long' => 76.9504542,
                'radius' => 4361.29052734375,
            ),
            436 => 
            array (
                'id' => 3437,
                'name' => 'Jeevan Park',
                'city_id' => '1',
                'lat' => 28.6169331,
                'long' => 77.07183289999999,
                'radius' => 642.240966796875,
            ),
            437 => 
            array (
                'id' => 3438,
                'name' => 'Secretariat North',
                'city_id' => '1',
                'lat' => 28.6151947,
                'long' => 77.2059342,
                'radius' => 217.2322540283203,
            ),
            438 => 
            array (
                'id' => 3439,
                'name' => 'Shahbad Mohammadpur',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            439 => 
            array (
                'id' => 3440,
                'name' => 'Singhu',
                'city_id' => '1',
                'lat' => 28.8543318,
                'long' => 77.12940340000002,
                'radius' => 2045.025146484375,
            ),
            440 => 
            array (
                'id' => 3441,
                'name' => 'Subhash Nagar West',
                'city_id' => '1',
                'lat' => 28.6339059,
                'long' => 77.12098379999999,
                'radius' => 1323.0723876953125,
            ),
            441 => 
            array (
                'id' => 3442,
                'name' => 'V. K. Nagar',
                'city_id' => '1',
                'lat' => 28.575519,
                'long' => 77.219309,
                'radius' => 199.63064575195312,
            ),
            442 => 
            array (
                'id' => 3443,
                'name' => 'Shahdara Mandi',
                'city_id' => '1',
                'lat' => 28.67425739999999,
                'long' => 77.31916060000002,
                'radius' => 115.34546661376953,
            ),
            443 => 
            array (
                'id' => 3444,
                'name' => 'Rajghat Power House',
                'city_id' => '1',
                'lat' => 28.638884,
                'long' => 77.25481599999999,
                'radius' => 199.5782470703125,
            ),
            444 => 
            array (
                'id' => 3445,
                'name' => 'Sabhapur',
                'city_id' => '1',
                'lat' => 28.7471106,
                'long' => 77.24886,
                'radius' => 1834.4755859375,
            ),
            445 => 
            array (
                'id' => 3446,
                'name' => 'Air Force Station Tughlakabad',
                'city_id' => '1',
                'lat' => 28.5083041,
                'long' => 77.25919379999999,
                'radius' => 825.3762817382812,
            ),
            446 => 
            array (
                'id' => 3447,
                'name' => 'Ajmeri Gate Extension',
                'city_id' => '1',
                'lat' => 28.6295233,
                'long' => 77.3123396,
                'radius' => 2863.65966796875,
            ),
            447 => 
            array (
                'id' => 3448,
                'name' => 'Bagdola',
                'city_id' => '1',
                'lat' => 28.5715292,
                'long' => 77.0729954,
                'radius' => 415.203125,
            ),
            448 => 
            array (
                'id' => 3449,
                'name' => 'Kazipur',
                'city_id' => '1',
                'lat' => 28.5777366,
                'long' => 76.8811726,
                'radius' => 3047.02783203125,
            ),
            449 => 
            array (
                'id' => 3450,
                'name' => 'SP School Edso',
                'city_id' => '1',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            450 => 
            array (
                'id' => 3451,
                'name' => 'Sri Nagar Colony',
                'city_id' => '1',
                'lat' => 28.6804628,
                'long' => 77.186798,
                'radius' => 161.74905395507812,
            ),
            451 => 
            array (
                'id' => 3452,
                'name' => 'S T Road',
                'city_id' => '1',
                'lat' => 28.5045299,
                'long' => 77.2719317,
                'radius' => 64.94636535644531,
            ),
            452 => 
            array (
                'id' => 3453,
                'name' => 'Zakhira',
                'city_id' => '1',
                'lat' => 28.6665152,
                'long' => 77.1664905,
                'radius' => 602.558349609375,
            ),
            453 => 
            array (
                'id' => 3454,
                'name' => 'Bawdhan',
                'city_id' => '2',
                'lat' => 18.5156035,
                'long' => 73.7819051,
                'radius' => 5706.78857421875,
            ),
            454 => 
            array (
                'id' => 3455,
                'name' => 'Rambagh Colony',
                'city_id' => '2',
                'lat' => 18.6010217,
                'long' => 73.7897043,
                'radius' => 428.1517028808594,
            ),
            455 => 
            array (
                'id' => 3456,
                'name' => 'Shivtirth',
                'city_id' => '2',
                'lat' => 18.4666292,
                'long' => 73.7852467,
                'radius' => 205.65406799316406,
            ),
            456 => 
            array (
                'id' => 3457,
                'name' => 'Mayur Colony',
                'city_id' => '2',
                'lat' => 18.5039834,
                'long' => 73.81617469999999,
                'radius' => 530.7412719726562,
            ),
            457 => 
            array (
                'id' => 3458,
                'name' => 'Dahanukar Colony',
                'city_id' => '2',
                'lat' => 18.4956151,
                'long' => 73.8110279,
                'radius' => 672.6207275390625,
            ),
            458 => 
            array (
                'id' => 3459,
                'name' => 'Earandwane',
                'city_id' => '2',
                'lat' => 18.5085936,
                'long' => 73.831721,
                'radius' => 1616.5115966796875,
            ),
            459 => 
            array (
                'id' => 3460,
                'name' => 'Hoppi Colony',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            460 => 
            array (
                'id' => 3461,
                'name' => 'Khadakmal Ali',
                'city_id' => '2',
                'lat' => 18.5040436,
                'long' => 73.85716239999999,
                'radius' => 204.2611083984375,
            ),
            461 => 
            array (
                'id' => 3462,
                'name' => 'Phule Peth',
                'city_id' => '2',
                'lat' => 18.5036227,
                'long' => 73.8698398,
                'radius' => 827.3853149414062,
            ),
            462 => 
            array (
                'id' => 3463,
                'name' => 'Lohiya Nagar',
                'city_id' => '2',
                'lat' => 18.5051349,
                'long' => 73.8665321,
                'radius' => 290.86468505859375,
            ),
            463 => 
            array (
                'id' => 3464,
                'name' => 'Tadiwala Road',
                'city_id' => '2',
                'lat' => 18.5340784,
                'long' => 73.8738475,
                'radius' => 473.4094543457031,
            ),
            464 => 
            array (
                'id' => 3465,
                'name' => 'Mundwa',
                'city_id' => '2',
                'lat' => 18.5321814,
                'long' => 73.9331528,
                'radius' => 3518.891357421875,
            ),
            465 => 
            array (
                'id' => 3466,
                'name' => 'Magarpatta City',
                'city_id' => '2',
                'lat' => 18.5158057,
                'long' => 73.9271644,
                'radius' => 1252.5382080078125,
            ),
            466 => 
            array (
                'id' => 3467,
                'name' => 'Hadapsar Gaonthan',
                'city_id' => '2',
                'lat' => 18.5256662,
                'long' => 73.8524005,
                'radius' => 2057.322509765625,
            ),
            467 => 
            array (
                'id' => 3468,
                'name' => 'Satavwadi',
                'city_id' => '2',
                'lat' => 18.4953248,
                'long' => 73.9484731,
                'radius' => 1025.808349609375,
            ),
            468 => 
            array (
                'id' => 3469,
                'name' => 'Ramtekdi',
                'city_id' => '2',
                'lat' => 18.5040461,
                'long' => 73.9161418,
                'radius' => 550.236083984375,
            ),
            469 => 
            array (
                'id' => 3470,
                'name' => 'Sayyadnagar',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            470 => 
            array (
                'id' => 3471,
                'name' => 'Mohammadwadi',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            471 => 
            array (
                'id' => 3472,
                'name' => 'Kausar Bagh',
                'city_id' => '2',
                'lat' => 18.4729798,
                'long' => 73.8927424,
                'radius' => 206.73910522460938,
            ),
            472 => 
            array (
                'id' => 3473,
                'name' => 'Meethanagar',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            473 => 
            array (
                'id' => 3474,
                'name' => 'Saulisberry Park',
                'city_id' => '2',
                'lat' => 18.4926135,
                'long' => 73.87572,
                'radius' => 1016.3479614257812,
            ),
            474 => 
            array (
                'id' => 3475,
                'name' => 'Maharshi Nagar',
                'city_id' => '2',
                'lat' => 18.4855746,
                'long' => 73.8610191,
                'radius' => 972.6087036132812,
            ),
            475 => 
            array (
                'id' => 3476,
                'name' => 'Janta Vasahat',
                'city_id' => '2',
                'lat' => 18.4901977,
                'long' => 73.8397009,
                'radius' => 1351.6168212890625,
            ),
            476 => 
            array (
                'id' => 3477,
                'name' => 'Suncity',
                'city_id' => '2',
                'lat' => 18.4763714,
                'long' => 73.8132337,
                'radius' => 740.6057739257812,
            ),
            477 => 
            array (
                'id' => 3478,
                'name' => 'Sehkar Nagar',
                'city_id' => '2',
                'lat' => 18.4756393,
                'long' => 73.8544034,
                'radius' => 323.4742736816406,
            ),
            478 => 
            array (
                'id' => 3479,
                'name' => 'Lower Indra Nagar',
                'city_id' => '2',
                'lat' => 18.4682455,
                'long' => 73.8624119,
                'radius' => 238.21595764160156,
            ),
            479 => 
            array (
                'id' => 3480,
                'name' => 'Upper Super Indra Nagar',
                'city_id' => '2',
                'lat' => NULL,
                'long' => NULL,
                'radius' => NULL,
            ),
            480 => 
            array (
                'id' => 3481,
                'name' => 'Rajiv Ganghi Nagar',
                'city_id' => '2',
                'lat' => 18.4600305,
                'long' => 73.8694723,
                'radius' => 431.2211608886719,
            ),
            481 => 
            array (
                'id' => 3482,
                'name' => 'Datta Nagar',
                'city_id' => '2',
                'lat' => 18.4474077,
                'long' => 73.8483676,
                'radius' => 620.8086547851562,
            ),
            482 => 
            array (
                'id' => 3483,
                'name' => 'Kundwa',
                'city_id' => '2',
                'lat' => 18.4770906,
                'long' => 73.89068689999999,
                'radius' => 3355.790283203125,
            ),
            483 => 
            array (
                'id' => 3484,
                'name' => 'Dhanori',
                'city_id' => '2',
                'lat' => 18.5835002,
                'long' => 73.8864876,
                'radius' => 3219.89404296875,
            ),
            484 => 
            array (
                'id' => 3485,
                'name' => 'Nagpurchal',
                'city_id' => '2',
                'lat' => 18.5629553,
                'long' => 73.89372709999999,
                'radius' => 405.41064453125,
            ),
            485 => 
            array (
                'id' => 3486,
                'name' => 'Chandan Nagar',
                'city_id' => '2',
                'lat' => 18.5635511,
                'long' => 73.9325552,
                'radius' => 1284.615478515625,
            ),
            486 => 
            array (
                'id' => 3487,
                'name' => 'Somnath Nagar',
                'city_id' => '2',
                'lat' => 18.5581835,
                'long' => 73.9216532,
                'radius' => 561.1700439453125,
            ),
        ));
        
        
    }
}