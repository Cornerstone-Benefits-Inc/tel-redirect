<?php
if(isset($_GET['tel'])){
header("Location: tel:".$_GET['tel']);
exit();
}
