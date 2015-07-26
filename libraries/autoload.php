<?php
	$per_page=3;
	if($_POST)
	{	
		//sanitize post value
		$group_number = filter_var($_POST["group_no"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
		
		if(!is_numeric($group_number)){
			header('HTTP/1.1 500 Invalid number!');
			exit();
		}
	
		//get current starting point of records
		$position = ($group_number * $per_page);
		
		$url="http://140.116.252.149/?json_route=/posts";
		$data = file_get_contents($url);
		
		$jasonDecode = json_decode($data,true);
		
		//print_r($jasonDecode[0]);
		
		$length=count($jasonDecode);
		
		
		for($a=$position;$a<=$per_page;$a++)
		{
			$id=$jasonDecode[$a]['ID'];
			$title=$jasonDecode[$a]['title'];
			$author=$jasonDecode[$a]['author']['username'];
			$content=$jasonDecode[$a]['content'];
			$countIntro=mb_strlen($content,'utf8');
				if($countIntro>=350)
				{
					$newIntro=mb_substr($content,0,345,"UTF-8");
					$newIntro.="...";
				}
				else
				{
					$newIntro=$rowsArticle->title;
				}
			
			$lasteditTime=$jasonDecode[$a]['modified_gmt'];
			
			
			echo'<div class="col-md-12" style="border:1px solid;margin-top:15px;">';
				echo'<div class="page-header">';
						echo"<h1><small>$title</small><br>";
						echo'<span style="font-size:10px;">發布者:'.$author.' , 最後編輯時間:'.$lasteditTime.'</span>';
				echo'</div>';
				echo'<div class="content">';
					echo $newIntro;
				echo'</div>';
			echo'</div>';
			
		}
	}

?>