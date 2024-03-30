<?php
if(isset($_GET['tel'])){
header("Location: tel:+1".$_GET['tel']);
exit();
}
