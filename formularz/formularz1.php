<?php
if(!isset($_POST['company']) ){
    echo "<script>history.back();</script>";
    exit();
}
if(!isset($_POST['f_name']) ){
    echo "<script>history.back();</script>";
    exit();
}
if(!isset($_POST['l_name']) ){
    echo "<script>history.back();</script>";
    exit();
}
if(!isset($_POST['email']) ){
    echo "<script>history.back();</script>";
    exit();
}
if(!isset($_POST['title']) ){
    echo "<script>history.back();</script>";
    exit();
}
if(!isset($_POST['phone']) ){
    echo "<script>history.back();</script>";
    exit();
}
if(!isset($_POST['terms']) ){
    echo "<script>history.back();</script>";
    exit();
}
    echo <<< DATA
    $_POST[company]<br>
    $_POST[f_name]<br>
    $_POST[l_name]<br>
    $_POST[email]<br>
    $_POST[title]<br>
    $_POST[phone]<br>
    $_POST[terms]<br>
    $_POST[session]<br>
DATA;
?>