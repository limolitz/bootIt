<?php

if ($_GET["password"] != "hunter2") die("Access denied.");

# direct call
#system("/home/florin/bin/bootIt/wakeIt.sh");

# remote call
system("ssh netpiExt /home/florin/bin/bootIt/wakeIt.sh");
?>
