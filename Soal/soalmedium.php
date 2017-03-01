<?php
include("koneksi.php");
$arr = array();
$q = mysql_query("select * from low WHERE type='Himpunan' order by rand() limit 5");
        while ($row = mysql_fetch_assoc($q)) {
            $temp = array(
                "soal_id" => $row['id'],
				"soal"=>$row['soal'],
				"a"=>$row['a'],
				"b"=>$row['b'],
                "c" => $row['c'],
                "jawaban" => $row['jwaban'],
				"gambar" => "http://192.168.43.8/Game/Quiz/gambar/".$row['gambar'].""
            );
            array_push($arr, $temp);
        }	
	$data = json_encode($arr);
    $data = str_replace("\\", "", $data);
    echo "{\"daftar_soal\":" . $data . "}";
?>