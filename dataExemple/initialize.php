<?php
include_once "./../dataExemple/dataGenerator.php";
if($data == null){
  $data = new Data(40,1);

}
var_dump($data->SelectBook(0));
