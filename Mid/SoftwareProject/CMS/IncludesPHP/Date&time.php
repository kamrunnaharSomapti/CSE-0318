<?php
date_default_timezone_set("Asia/Dhaka");
$CurrentTime = time();
$DateTime = strftime("%y-%m-%d %H:%M.%S",$CurrentTime);
echo $DateTime;


