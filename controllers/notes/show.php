<?php 
$heading='Note';
$config=require'config.php';
$db=new Database($config['database']);


$note=$db->query('select *from notes where id=:id',['id'=>$_GET['id']])->findOrFall();

$currentUserId=1;
authorize($note['user_id']===$currentUserId);
view("notes/show.view.php",[
    'heading'=>'My Note',
    'notes'=>$note
  ]);
