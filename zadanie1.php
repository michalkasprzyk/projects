<?php

    $text = <<< SCHOOL
    ZSŁ - Zespół
    Szkół
    Łączności<br>

SCHOOL;
    echo $text;
    echo nl2br($text);

    $name = "jANuSz<br>";
    echo $name;
    echo strtolower($name);
    echo $name;
    $namee = strtolower($name);
    echo $namee;

    $data = "jAnUsz waLCZUk<br>";
    echo "<br>";
    echo $data;
    echo ucfirst($data);
    echo ucwords($data);
    echo "<br>";

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sit amet scelerisque orci. Vestibulum interdum venenatis quam, eu blandit augue hendrerit et. Duis non massa quis turpis laoreet euismod pellentesque ut erat. Proin tincidunt, ipsum sed pulvinar dapibus, risus odio accumsan nibh, a molestie felis turpis a augue. Vivamus lorem turpis, pretium vel tortor molestie, gravida congue velit. Sed a neque faucibus, sagittis justo vel, finibus justo. Fusce et tristique lectus. Maecenas laoreet sapien nisl, ac accumsan nunc dictum vitae. Curabitur ornare suscipit consectetur. Vestibulum ultrices placerat orci, ac dignissim ex iaculis sit amet. Ut quis porta sapien. Donec at erat lobortis, pellentesque velit ac, faucibus dolor. Nullam vel turpis pellentesque, dapibus nisi sit amet, iaculis nisi.";
    echo $lorem;
    echo "<br><br>";
    echo wordwrap($lorem,40,"<br>");
    echo "</br>";

    ob_clean();

    $name1 = "Łukasz";
    $name2 = "  Anna ";
    echo "Ilość znaków $name1 :".strlen($name1)."<br>";
    echo "Ilość znaków $name2 :".strlen($name2)."<br>";
    echo strlen(trim($name1));
    echo "<br>";

    $name3 = "amogusamogus";
    echo substr($name3, 3);
    echo "<br><br>";
    
    //$url = "https://www.wp.pl/";
    //header("Location: $url");

    echo str_replace("ch","*", "chodnik");

?>