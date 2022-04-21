<?php
    require_once 'cube.php';
    require_once 'rectangle.php';

    if(isset($_POST['geofig'])){
        switch($_POST['geofig']){
            case 'cube':
                $a=$_POST['a'];
                echo cube($a);
                break;

            case 'rectangle';
                $a=$_POST['a'];
                $b=$_POST['b'];
                echo rectangle($a,$b);
                echo '<br>';
                break;
        }
    }
    echo '<br>';
?>
    <form action="zadanie3.php" method="post"><input type="submit" value="Cofnij"></form>
    