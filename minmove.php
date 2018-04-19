<?php

if(isset($_GET['str'])){
    $str = $_GET['str'];
    $res = substr($str,1).substr($str,0,1);
    echo "<p>RESULT: ".$res."</p>";
    echo "<p>COUNT: ".strlen($str)."</p>";
}

?>

<form action="minmove.php" method="get">
    Input string<input type="text" name="str"  pattern="[a-z]{1,10000}" title="English alphabet (‘a’ .. ‘z’)" >
    <input type="submit" value="rotate"><br>
</form>




