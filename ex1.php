<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h1 style="text-align: center">EXERCICI 1</h1>
<h3 style="text-align: center">De notes a literals</h3>
<div class="notes">
<?php
$notes = array(2.2,3.3,4.4,5.5,6.6,7.7,10 );
function literal($pNotes){
    foreach ($pNotes as $nota){
        if($nota >= 5){
            if($nota >=9){
                echo "Excel·lent $nota<br>";
            }
            elseif ($nota >=7){
                echo "Notable $nota<br>";
            }
            elseif($nota >=6){
                echo "Bé $nota<br>";
            }
            else{
                echo "Suficient $nota<br>";
            }

        }
        else{
            echo "Insuficient $nota<br>";
        }
    }
}
echo "<br><br>";
literal($notes);
?>
</div>
<style>
    .notes{
        text-align: center;
        background: black;
        color: white;
    }
    .notes hr{
        width: 25%;
        background: darkslategrey;
    }
</style>
</body>
</html>
