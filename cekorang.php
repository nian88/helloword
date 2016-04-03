<?php
session_start();
include "../konpik/koneksi.php";
$s=$pdo -> prepare("SELECT COUNT(*) FROM pembeli WHERE status='1'");$s->execute();$j=$s -> fetch();
if($j[0]>0){
    echo $j[0];
}
?>