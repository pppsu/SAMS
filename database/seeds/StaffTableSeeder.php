<?php

use Illuminate\Database\Seeder;
use App\Staff;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('staffs')->delete();

        $staffs = [
        [   "psu_passport"=>'19940001',
        "title"=>'Mr.',
        "firstname"=>'Adisak001',
        "lastname"=>'Intana',
        "role"=>'Advisor',
        "email"=>'adisak@email.com',
        "begin_date"=>'2017-03-15',
        "end_date"=>'2017-12-01'
        ],
        [   "psu_passport"=>'19940002',
        "title"=>'Mr.',
        "firstname"=>'Adisak002',
        "lastname"=>'Intana',
        "role"=>'Advisor',
        "email"=>'adisak@email.com',
        "begin_date"=>'2017-03-15',
        "end_date"=>'2017-12-01'
        ],
        [   "psu_passport"=>'19940003',
        "title"=>'Mr.',
        "firstname"=>'Adisak003',
        "lastname"=>'Intana',
        "role"=>'Advisor',
        "email"=>'adisak@email.com',
        "begin_date"=>'2017-03-15',
        "end_date"=>'2017-12-01'
        ],
        [   "psu_passport"=>'19940004',
        "title"=>'Mr.',
        "firstname"=>'Adisak004',
        "lastname"=>'Intana',
        "role"=>'Advisor',
        "email"=>'adisak@email.com',
        "begin_date"=>'2017-03-15',
        "end_date"=>'2017-12-01'
        ],
        [   "psu_passport"=>'19940005',
        "title"=>'Mr.',
        "firstname"=>'Adisak005',
        "lastname"=>'Intana',
        "role"=>'Advisor',
        "email"=>'adisak@email.com',
        "begin_date"=>'2017-03-15',
        "end_date"=>'2017-12-01'
        ],
        [  "psu_passport" => '5630215001',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu1@email.com',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215002',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu2@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215003',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu3@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215004',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu4@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215005',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu5@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215006',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu6@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215007',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu7@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215008',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu8@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215009',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu9@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215010',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu10@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215011',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215012',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215013',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215014',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215015',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215016',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215017',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215018',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215019',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215020',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215021',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215022',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215023',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630215024',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216001',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu1@email.com',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216002',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu2@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216003',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu3@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216004',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu4@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216005',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu5@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216006',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu6@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216007',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu7@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216008',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu8@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216009',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu9@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216010',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu10@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216011',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216012',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216013',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216014',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216015',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216016',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216017',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216018',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216019',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216020',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216021',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216022',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216023',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        [  "psu_passport" => '5630216024',
        "title" => 'Mr.',
        "firstname" => 'Adisak',
        "lastname" => 'Intana',
        "role" => 'Assistant to the President for Student Development',
        "email" => 'psu11@email.psu.ac.th',
        "begin_date" => '2017-05-02',
        "end_date" => '2018-05-02' ],
        
        ];

        foreach ($staffs as $s) {
            Staff::create($s);
        }

    }
}
