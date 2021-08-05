<?php
function Redirect_to($New_Location){
    header("location:".$New_Location);
    exit;
}
?>