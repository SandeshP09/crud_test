<?php
include('database.php');

$obj=new query();
$condition_arr=array('name'=>'maverick', 'email'=>'maverick@gmail.com');
//$result=$obj->getData('user');
//$result=$obj->insertData('user',$condition_arr);
//$result=$obj->deleteData('user',$condition_arr);
$result=$obj->updateData('user',$condition_arr, 'id',2);

?>