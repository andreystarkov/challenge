<?

	function generateBullshit($rows = 2){

		$words = array("подбородки", "«появились»", "исключительно", "вследствие", "уменьшения", "лиц", "заданную", "пользователем", "субдукцию");
		$names = array("капитан", "америка", "человек", "паук", "владимир", "сергей", "черная", "вдова");

		for($p=0;$p<$rows;$p++){
			if($p==0){ $class = " first-loaded"; }
			$out .= "<div class='row".$class."'>";
			for($i=0;$i<=3;$i++){
				$content = "";
				for($v=0;$v<=rand(4,5);$v++){
					$content .= $words[rand(0,count($words))]." ";
				}
				$name = $names[rand(1,count($names))]." ".$names[rand(1,count($names))];
				$string = "<div class='3u item item-loaded'><div class='image'><img src='img/samples/item-".rand(1,4).".jpg' alt='...'><div class='status'><span></span></div></div><div class='author'><div class='avatar'><img src='img/samples/avatar.jpg' alt='...'></div><a href='#' class='name'>".$name."</a><span>создал вызов ".rand(1,30)." мар 2015</span></div><div class='caption'>".$content."</div><div class='option-icons'>".
				"<div class='row'><div class='4u users'><i class='icon fa fa-users icon-users'></i><span>".rand(1, 99)."</span></div><div class='4u level'><i class='icon icon-level none'></i><span>2/10</span></div><div class='4u likes'><i class='icon fa fa-heart icon-like'></i><span>".rand (1, 99)."</span></div></div></div></div>";
				$out .= $string;
			}
			$out .= "</div>";
		}
		echo $out;
	}

	$page = $_POST['page'];

	sleep(2);

	generateBullshit(2);

?>