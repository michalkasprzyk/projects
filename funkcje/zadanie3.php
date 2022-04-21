<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="main">
    <form method='post'>
        <input type="radio" name="geofig" value="cube">Sześcian</br></br>
        <input type="radio" name="geofig" value="rectangle">Prostokąt</br></br>
        <input type="submit" value="zatwierdź">
    </form>
    <?php
        if(isset($_POST['geofig'])){
            echo '<form action="zadanie3_1.php" method="post">';
            switch($_POST['geofig']){
                case 'cube':
                    echo '<input type="hidden" name="geofig" value="cube">';
                    echo '<input type="range" name="a" min="1" max="1000" id="sówak" onmousemove="zmiana()"><br><br>';
                    echo '<div id="blok1"></div><br>';
                break;

                case 'rectangle':
                    echo '<input type="hidden" name="geofig" value="rectangle">';
                    echo '<input type="text" name="a" placeholder="podaj bok a"><br><br>';
                    echo '<input type="text" name="b" placeholder="podaj bok b"><br><br>';
                break;
            }
            echo '<input type="submit" value="oblicz">';
            echo '</form>';
        }
        ?>
     </div>
     <style>
         #main{
             font-size: 20px;
         }
     </style>
     <script>
         function zmiana(){
         var a = document.getElementById("sówak").value;
         blok1.innerHTML=a;
         }
         sówak.addEventListener("click",zmiana);
     </script>
</body>
</html>