<?php
include("dbconnect.php");
$link = DBconnect();
$result = mysqli_query($link,"select user_pw from users where user_id =".$_POST["id"]);
$row = mysqli_fetch_array($result);
if ($_POST["pw"] == $row["user_pw"] ) {
  echo "Ongi etorri!";
}else {
  header("Location: sessions_form.php?mal=1");
}
 ?>
