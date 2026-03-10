<?php
$nothing = "<h1 style='color:red'>Nothing</h1>"; 
$to = "<h2 style='color:orange'>to</h2>";
$see = "<h3 style='color:green'>see</h3>";
$here = "<h4 style='color:purple'>here.</h4>";
//<h1>,<h2> 블록 나누기(줄 바꿈)

$color = 'blue';

$text = "<h1 style= 'color: $color'>";
$text .= "Nothing to see here.";
$text .= "</h1>";
// .= 하면 결합 . 없이 = 만 사용하면 덮어쓰기

echo $text;
echo $nothing .''. $to .''. $see .''. $here;
?>

<!DOCTYPE html>
<html>
    <head>
        <title> kim's PHP Page!</titel>
    </head>
    <body>
        <h1 style="font-size:48pt">
            nothing to see here!
            <?= $text ?>
        </h1>
    </body>
</html>
