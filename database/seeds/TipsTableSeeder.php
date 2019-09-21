<?php

use Illuminate\Database\Seeder;

class TipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tips')->delete();
        
        \DB::table('tips')->insert(array (
            0 => 
            array (
                'id' => 1,
                'message' => 'Dengue is caused by female mosquito: AEDES AEGYPTI.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'message' => 'Dengue mosquito bites in the day time indoor as well as outdoor.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'message' => 'Denue is a vector borne disease, cannot spread via human contact.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'message' => 'When a pregnant woman is infected with dengue during childbirth,she can passon the infection to her newborn baby.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'message' => 'One should not take in asprin or any other painkillers during dengue fever, as it leads to platlets reduction.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'message' => 'Dengue mosquito cannot fly over a height of 5 feets.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'message' => 'When on the last stage of the fever ,results in pneumonia leading to death.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'message' => 'Dengue mosquito has white spots on its body.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'message' => 'Dengue breeds only in fresh water bodies.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'message' => 'Dengue infection occurs in two forms: Dengue fever and haemorrhagic fever.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'message' => 'Dengue fever is severe flue like illness that affects older children and adults but rarely causes death.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'message' => 'Dengue haemorragic fever is a more severe form which causes bleeding and rare shocks.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'message' => 'Black stools, bleeding on the skin ,sweating, cold skin are the danger signs.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'message' => 'Put one tablesppon of petrol in standing water to avoid breeding of mosquitoes.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'message' => 'Dengue can reduce the platlets from 4 lakhs to the value as less as 1500 platlets in humans.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'message' => 'Dengue is attracted towards the body heat of a human body.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'message' => '  Dengue fever is marked by the onset of sudden high fever,severe headache and pain behind the eyes,muscles and joints.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'message' => '  The first symptoms of the disease occur about 5-7 days after an infected bite.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'message' => '  Dengue mosquitoes breed in stored exposed water collections.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'message' => '  Wear full sleeve clothes and long dresses to cover the limbs.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'message' => 'Use mosquito coils and electic vapour mats during the daytime to prevent dengue.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'message' => '  Repellent – care should be taken in using repellents on small children and the elderly.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'message' => '  Use mosquito coils and electic vapour mats during the daytime to prevent dengue.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'message' => '  Curtains can also be treated with insecticides.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'message' => '  There should be no water in coolers when not in use.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'message' => '  Remove water from refrigerator drip pans every other day.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'message' => '  All stored water containers should be kept covered all the time.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'message' => '  Discard solid waste and objects where water collects.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'message' => '  Give nutritious food and fluids to drink to the patients.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'message' => '  Doctors and health workers treating cases of dengue fever should also notify the health authorities.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'message' => '  Myth : Wearing black clothing does not equate to a person getting bitten.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'message' => '  Myth: You cannot get dengue twice.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'message' => '  Dengvaxia is the world’s first vaacine to cure dengue.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'message' => '  Postive IgM and IgG tests for dengue.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'message' => '  Myth : Goat milk can cure dengue.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'message' => '  Highest no. Of dengue cases reported in Delhi is 5234 in year 2017.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'message' => '  Highest no. Of dengue cases reported in India is 11,230 in year 2017.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'message' => '  Kerela and Banglore are on the top list of deaths due to dengue.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'message' => 'Delhi is the third most dengue affected city.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'message' => 'children died due to dengue in 2017, i,e. the highest recorded data till date.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'message' => '  With every 4 males ,1 female dies due to dengue fever.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'message' => '  Manila, South East Asia is the first city where dengue was observed.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'message' => '  Dengue was first observed in year 1950-1953 in South East Asia.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'message' => '  Benjamin Rush reported the first ever casestudy about dengue.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'message' => '  In 1789 Dengue was reported as breakbone fever.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'message' => '  Sanofi Pasteur brought us the vaccine for dengue.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'message' => '  Dengvaxia is also denoted as CYD-TVD.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'message' => '  One should take three dose of dengvaxia on an interval of 0/6/12',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'message' => '  Babies infected with dengue are at higher risk for a severe case of the disease.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'message' => '  Male Aedes are not bloodsuckers, they survive on plant’s nectare',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'message' => 'Dengue mosquitoes prefer O-type blood',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'message' => 'Mosquitoes can sense carbon dioxide from upto 100 feet away, that is why they circulate around us and our head wheere we exhale.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}