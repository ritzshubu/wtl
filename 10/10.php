<?php
session_start();


if (!isset($_SESSION))
{
$_SESSION["count"] =0;
echo "<p>Counter Started</p>\n";
}
else { 
    $_SESSION["count"]++;
}
//unset($_SESSION['views']);  
//session_destroy(); 

$a=$_SESSION[count];

if($_SESSION[count]>5)
{
    echo "<p>Counter reached the maximum limit.</p>";
    while($_SESSION["count"]){
            $_SESSION["count"]--;
}
}

echo "<p>This page has been viewed <b>$_SESSION[count]</b> times.</p>".
"<p> RELOAD this page to increment</p>";

?>
