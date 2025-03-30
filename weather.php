<?php
ob_start();
header("Content-Type:text/html; charset=ansi");
$file_path1 = "climate.txt";
$fp1 = fopen($file_path1,"r");  //讀climate.txt
while (!feof($fp1)) {           //依序讀出存入陣列$posts3[]
    $posts3[] = fgets($fp1);
}
fclose($fp1);

for($i=1;$i<count($posts3)-1;$i++){     //php把它echo到網頁中
    echo '<p>'.$posts3[$i].'</p>';
}
ob_end_flush();
?>
