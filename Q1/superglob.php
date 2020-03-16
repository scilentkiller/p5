<?php

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

echo $_SERVER['REMOTE_ADDR'];
echo "<br>";
if (!empty($_SERVER['HTTPS'])) {
    echo "it is enabled from http";
}
else
echo "it is enabled from https";


?>
