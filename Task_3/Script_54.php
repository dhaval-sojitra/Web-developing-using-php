<?php

$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Dhaval',
    'last_name' => 'Sojitra',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Keval',
    'last_name' => 'Vadadoriya',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Jaydeep',
    'last_name' => 'Kakadiya',
  )
);

$last_names = array_column($a, 'last_name');
print_r($last_names);
?>