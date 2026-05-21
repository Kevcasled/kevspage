<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = [
    'name' => 'Kevin Castellon',
    'role' => 'Full Stack Developer 2026',
    'email' => 'kevincastellonledezma@gmail.com',
    'github' => 'https://github.com/Kevcasled',
    'skills' => ['PHP', 'React', 'Laravel', 'Docker', 'Jenkins']
];

echo json_encode($data);
