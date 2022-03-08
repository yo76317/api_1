<?php
$page=file_get_contents("https://boxoffice.tfi.org.tw/api/export?start=2022/02/14&end=2022/02/20");
echo $page;

?>