<?php 
$config=require'config.php';
$db=new Database($config['database']);
$heading=' My Notes';


$notes=$db->query('select * from notes where user_id=1')->get();


 view("notes/index.view.php",[
    'heading'=>'My Notes',
    'notes'=>$notes
  ]);