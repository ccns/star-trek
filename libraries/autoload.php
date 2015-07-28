<?php
	$per_page=5;
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
		
		//$opts = array('http'=>array('header' => "User-Agent:MyAgent/1.0\r\n"));
		//$context = stream_context_create($opts);
		
		$category=$_POST['group_type'];
		switch($category){
			case "tab1":
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%201";
				break;
			case "tab2":
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%202";
				break;
			case "tab3":
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%203";
				break;
			case "tab4":
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%204";
				break;
			case "tab5":
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%205";
				break;
			case "tab6":
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%206";
				break;
			case "tab7":
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%207";
				break;
			case "tab8":
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%208";
				break;
			default:
				$url="http://140.116.252.149/?json_route=/posts&filter[category_name]=category%201";
				break;				
		}
		//$url="http://140.116.252.149/?json_route=/posts";
		$data = file_get_contents($url,false,$context);
		
		$jasonDecode = json_decode($data,true);
		$length=count($jasonDecode);
		

		
		//print_r($jasonDecode[0]);
		//echo 'group_number:'.$group_number.'<br>';
		//echo 'position:'.$position;
		if($position > 0)
		{$last=$position+5;}
		else
		{$last=$per_page;}
	
		for($a=$position;$a<$last;$a++)
		{
			$id=$jasonDecode[$a]['ID'];
			$title=$jasonDecode[$a]['title'];
			$author=$jasonDecode[$a]['author']['username'];
			$content=$jasonDecode[$a]['content'];
			$countIntro=mb_strlen($content,'utf8');
				if($countIntro>=350)
				{
					$newIntro=mb_substr($content,0,345,"UTF-8");
					$newIntro.="...[<a href=\"http://140.116.252.149/postpage.html#/post/$id\">查看更多</a>]";
				}
				else
				{
					$newIntro=$rowsArticle->title;
				}
			
			$lasteditTime=$jasonDecode[$a]['modified_gmt'];
			
			
			if($id!="")
			{
			echo'<div class="col-md-12" style="border:1px solid;margin-top:15px;">';
				echo'<div class="page-header">';
						echo"<h1><small><a href=\"http://140.116.252.149/postpage.html#/post/$id\">$title</a></small><br>";
						echo'<span style="font-size:10px;">發布者:'.$author.' , 最後編輯時間:'.$lasteditTime.'</span>';
				echo'</div>';
				echo'<div class="content">';
					echo $newIntro;
				echo'</div>';
			echo'</div>';
			}
			
		}
	}
	else
	{
		echo 'error';
	}

?>