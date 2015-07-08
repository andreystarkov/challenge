<?


	function generateBullshit($rows = 2){

		$words = array("подбородки", "«появились»", "исключительно", "вследствие", "уменьшения", "лиц", "заданную", "пользователем", "субдукцию");
		$names = array("капитан", "америка", "человек", "паук", "владимир", "сергей", "черная", "вдова");

		for($p=0;$p<$rows;$p++){

			for($i=0;$i<=2;$i++){
				$content = "";
				for($v=0;$v<=rand(4,5);$v++){
					$content .= $words[rand(0,count($words))]." ";
				}
				$name = $names[rand(1,count($names))]." ".$names[rand(1,count($names))];
				$string = "<div class='comment'><div class='avatar'><img src='img/samples/avatar.png' alt='...'></div>".
				"<b class='name'>".$name."</b><div class='text'>".$content."</div>".
				"<span class='date'>".rand(1,30)." Мар 2015</span></div>";
				$out .= $string;
			}
		}
		echo $out;
	}

	sleep(2);

	generateBullshit(1);

?>