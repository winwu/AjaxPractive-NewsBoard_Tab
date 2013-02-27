<?php
include('db_connection.php');
if( isset($_POST['category']) && $_POST['category']!=="" && isset($_POST['title']) && $_POST['title']!=="" &&  isset($_POST['content']) && $_POST['content']!=="" && isset($_GET['submited'])){
 $new_title = $_POST['title'];
 $new_category = $_POST['category'];
 $news_date = date("Y-m-d H:i:s"); 
 $new_content = $_POST['content'];
 $news_sql = "INSERT INTO news (`title` ,`content` ,`date` ,`category`) VALUES (
 '$new_title', '$new_content', '$news_date', '$new_category')";
 $result = mysql_query($news_sql) or die(mysql_error());
 //echo "成功送出!";
?>
<script>
 location.href = "index.php"; 
</script>
<?php 
}
$category = array('Life','socity','Sport','Fun','Health');

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>仿yahoo首頁新聞效果</title>
  <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="style.css">
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>
<h1>NewsBoard Practice</h1>
<h2>related..PHP,MySQL,Ajax,jQuery</h2>
   <form id="news_frm" action="?submited=1" method="POST">
    <h3>Add New News</h3>
        <label for="">Category:</label>
        <select name="category" id="frm_category">
        <?php
        foreach($category as $v){
          echo  '<option value="'.$v.'">'.$v.'</option>';
        }?>
        </select>
      <label for="">Title:</label><input type="text" name="title" id="frm_title"/>
      <label for="">content:</label><textarea name="content" id="frm_content"></textarea><br>
      <input type="submit" value="Submit" class="button">
   </form>
  <div id="news_interface">
    <ul class="hd">
    <?php
    foreach($category as $v){
      echo  '<li class="" value="'.$v.'">'.$v.'</li>';
    }?>
    </ul>
    <div class="bd">
    <?php
    $show_news_sql = "SELECT * FROM news WHERE category='Life' ORDER BY DATE desc LIMIT 2";
    $show_news_sql_result = mysql_query($show_news_sql) or die(mysql_error());
    while($r = mysql_fetch_array($show_news_sql_result)){
      echo '<h3>'.$r['title'].'</h3>
           <p>'.$r['content'].'</p>';
    }
    $record_count = mysql_num_rows($show_news_sql_result); 
    if($record_count<1){
      echo 'No Data....';
    }
    ?>
      <!--div id="loading_div" style="display:none">
      <img src="ajax_loader.gif" alt="" />
      </div-->
    </div><!--bd-->
  </div><!--news_interface-->
  <script type="text/javascript" src="news.js"></script>
</body>
</html>
