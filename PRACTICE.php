<?php
	echo "------------------ Bai 1 ------------------<br><br>";

	function hamTinhTong($a,$b) {
		global $tong;
		return $tong = $a + $b;
	} hamTinhTong(rand(0,1000),rand(0,1000));
	echo $tong . "<br>";

	echo "------------------ Bai 2 ------------------<br><br>";

	if ($tong % 2 == 0) {
		echo "So chan ! <br>";
	} else {
		echo "So le ! <br>";
		if ($tong % 3 == 0 ) {
			echo "Chia het cho 3 <br>";
		} else {
			echo "Khong chia het cho 3 <br>";
		}
	}

	echo "------------------ Bai 3 ------------------ <br><br>";

	$month = rand(1,12);
	$day = ["empty_array","31","29","31","29","31","29","29","31","29","29","29","28"];
	switch ($month) {
		case "$month":
			echo "Tháng $month có $day[$month] ngày <br>";
			break;

		default:
			echo "error! <br>";
			break;
	}

	echo "------------------ Bai 4 ------------------ <br><br>";

	$tong_ = strrev($tong);
	if ($tong < 1000) {
		echo "$tong < 1000<br>";
		echo "Số cuối cùng là " . substr($tong_,0,1) . "<br>";
		if (substr($tong_,0,1) % 2 == 0) {
			echo "Là số chẳn<br>";
		} else { 
			echo "Là số lẻ <br>"; }
			if (substr($tong_,0,1) % 3 == 0) { echo "Chia hết cho 3"; } else { echo "Không chia hết cho 3"; }
	} else {
		echo "$tong > 1000 (Không hợp lệ) <br>";
	}



?>