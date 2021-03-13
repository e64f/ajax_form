<?php

ini_set('error_reporting', E_ALL ); 
ini_set('display_errors', 1); 

require_once('config.php');

@require_once("lib/godb.php");
$db = new goDB($config);
$db->query('SET NAMES "utf8"');


if (isset($_REQUEST['name'])) $name = $_REQUEST['name'];
if (isset($_REQUEST['phone'])) $phone = $_REQUEST['phone'];
if (isset($_REQUEST['email'])) $email = $_REQUEST['email'];

if (isset($_FILES['files'])) $files = $_FILES['files']; else $files = array();


$feedback_id = $db->query('INSERT INTO tbl_feedback (user_name, phone, email) VALUES (?, ?, ?);',
   array(
      $name,
      $phone,
      $email
   ),
   'id'
);

if (isset($files['name']) and count($files['name']) > 0) {
    $cnt = count($files['name']);
    for ($i=0;$i<$cnt;$i++) {
        $file_name = $files['name'][$i];
        $file_type = $files['type'][$i];
        $tmp_name = $files['tmp_name'][$i];

        $file_id = $db->query('INSERT INTO tbl_files (name, type, feedback_id) VALUES (?, ?, ?);',
            array(
                $file_name,
                $file_type,
                $feedback_id
            ),
            'id'
        );

        copy($tmp_name, "./files/".$file_id.".dat");


    }
}


