<?php
include('db_connection.php');
//sleep(1); 
$category = isset($_GET["category"]) ? $_GET["category"] : ''; 

$sql = 'SELECT `title`,`content` FROM news WHERE category = "'.$category.'" ORDER BY DATE desc LIMIT 2';
$result = mysql_query($sql);
$ary_data = array();
while($row = mysql_fetch_assoc($result)){
  $ary_data[] = $row;
}

//var_dump($row);
#print_r($ary_data);
  $record_count = mysql_num_rows($result); 
  if($record_count<1){
    //無資料回傳no data
    $ary=array('msg'=>'no data');
  }else{
    //若有這筆資料則回傳success
    $ary=array('msg'=>'success', 'data'=>$ary_data);
  } 
  
  die( 
    json_encode($ary)
  );