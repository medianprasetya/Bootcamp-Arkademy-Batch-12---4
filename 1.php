<!-- no.1
Buatlah sebuah method/function untuk me-return biodata asli Anda, dengan ketentuan sebagai berikut:
name (String)
age (Number)
address (String)
hobbies (Array)
is_married (Boolean)
list_school (Array of Object) with key name, year_in, year_out, and major (if any, if no set “null” )
skills (Array of Obj) with key skill_name and level (beginner, advanced, expert)
interest_in_coding (Boolean)
Return value harus berformat JSON dan sesuai ketentuan di atas.
Pada readme sebutkan kegunaan JSON pada REST API.
Berikut adalah contoh dari JSON format: https://api.bukalapak.com/v2/products/f3vi.json 
-->

<?php
 error_reporting(0);

// 5.buat array 'list_school' dan 'skills' di luar fungsi dan di panggil di fungsi biodata
// List Schoolnya
    $listschool = array(
        [
         'name' => 'SMK Negeri 2 Cilegon',
         'year_in' => 2010,
         'year_out'=> 2013,
         'major'=>null
    ],
        [
            'name' => 'Universitas Banten Jaya',
            'year_in' => 2013,
            'year_out'=> 2017,
            'major'=>'Strata 1'
        ]);

// Untuk Skill
        $skill= array(
            [
            'skill_name'=>'HTML',
            'level'=>'Beginner'
            ],
            [
                'skill_name'=>'CSS',
                'level'=>'Beginner'
                ],
            [
                    'skill_name'=>'PHP',
                    'level'=>'Beginner'
                    ],
            );

//Untuk Fungsi
        // 0.buat fungsi biodata
    function biodata($listschool,$skill)
    {
        // 1.return array sesuai soal
        return(array(
            'name' => 'Median Prasetya',
            'age' => 24,
            'address' => 'Perum BCK Jl Bincarung 3',
            'hobbies' => array('Ngoprek', 'Fotografi', 'Desain Editor', 'Renang'),
            'is_married' => False,
            // 4. List_School dan sklills di pisah agar tidak bingung
            'list_school' => $listschool,
            'skills' => $skill,
            // 4. List_School dan sklills di pisah agar tidak bingung
            'interest_in_coding' => True
        ));
    }
    // 2.echo pakai json_encoded si fungsi untuk mendapatkan format json atau biar array bisa di tapilkan
    echo json_encode(biodata($listschool,$skill));


    ?>