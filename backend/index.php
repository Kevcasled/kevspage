<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

 = [
    'name' => 'Kevin Castellon',
    'role' => 'Full Stack Developer',
    'email' => 'kevincastellonledezma@gmail.com',
    'github' => 'https://github.com/Kevcasled',
    'skills' => ['PHP', 'React', 'Laravel', 'Docker', 'Jenkins']
];

echo json_encode();
