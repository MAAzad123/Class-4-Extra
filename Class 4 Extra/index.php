<?php
// $studentname = 'Azad';
// $studentemail = 'monsurahmadazad@gamil.com';
// $studentphone = '1307888554';
// $studentbloodgroup = 'A+';
// $studentstatus = 'true';
// echo $studentstatus;

// index Array

// $student = Array ("Azad", "monsurahmad@gmail.com", 1307888554, "A+", true);
// echo '<pre>';
// print_r ($student); 
// echo অ্যারে প্রিন্ট করে না
echo '</pre>';

// echo '<pre>';
// print_r ($student [0]);
// echo '</pre>';

// echo ($student[2]);

// Associative Array

// $student = [
//   'name' => "Azad",
//   'email' => "monsurahmadazad@gamil.com",
//   'phone' => 1307888554,
//   'bloodgorrp' => "A+",
//   'status' => "true"
// ];
// // echo '<pre>';
// // print_r ($student);
// // echo '</pre>';

// echo $student['email'];

// Multidimentional Array

$student= [
  'user1'=> [
      'id'=> '01',
      'name' => 'M.A.Azad',
      'email' => 'maazad554@gamil.com',
    'social_link' => [
        'facebook' => 'www.facebook.com',
        'twitter' => 'www.facebook.com', 
        'youtube' => 'www.youtube.com'
      ]
    ],
  'user2'=> [
    'id'=> '02',
    'name' => 'Mr. Azad',
    'email' => 'mrazad@gamil.com',
  ],
  'user3'=> [
    'id'=> '03',
    'name' => 'Monsur',
    'email' => 'maazad554@gamil.com',
  ]
];
// echo '<pre>';
// print_r ($student ['user1']['email']);
// echo '</pre>';
// var_dump($student['user1'] ['social_link']) ;
// echo $student['user1'] ['social_link'] ['facebook'];

$user = [
  'id'=> 0,
  'name'=> 'habu bhai',
  'email'=> 'MAZAD@gmail.com '
];
echo '<br>';
echo strtolower($user ['email']);
echo '<br>';
echo ucwords($user['name']);
