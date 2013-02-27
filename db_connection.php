<?php
mysql_connect('localhost','root','root');
mysql_select_db('news_board');
mysql_query("SER NAMES 'utf8'");
//set taiwan zone
date_default_timezone_set('Asia/Taipei');
?>