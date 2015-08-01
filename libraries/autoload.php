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
		$data = file_get_contents($url);
		
		$jasonDecode = json_decode($data,true);
		$length=count($jasonDecode);
		

		
		//print_r($jasonDecode[0]);
		//echo 'group_number:'.$group_number.'<br>';
		//echo 'position:'.$position;
		if($position > 0)
		{$last=$position+5;}
		else
		{$last=$per_page;}
	
		if($length!=0)
		{
			for($a=$position;$a<$last;$a++)
			{
				$id=$jasonDecode[$a]['ID'];
				$title=$jasonDecode[$a]['title'];
				$author=$jasonDecode[$a]['author']['username'];
				$content=$jasonDecode[$a]['content'];
				$countIntro=mb_strlen($content,'utf8');

				if($category == "tab8"){
					//擷取活動標題、內容
					$activityData = file_get_contents($title,false);
					preg_match("/<title>(.*)<\/title>/s",$activityData, $match);
					$activityTitle = $match[1];
					$metatag = get_meta_tags($title);
					$description = $metatag["description"];
					//擷取活動圖片
					libxml_use_internal_errors(true);
					$doc = new DomDocument();
					$doc->loadHTML(file_get_contents($title));
					$xpath = new DOMXPath($doc);
					$query = '//*/meta[starts-with(@property, \'og:image\')]';
					$metas = $xpath->query($query);
					foreach ($metas as $meta) {
					$photo = $meta->getAttribute('content');
				}



				}

					if($countIntro>=500)
					{
						$end = $countIntro/2 ;
						$newIntro=mb_substr($content,0,$end,"UTF-8");
						$more="...[<a href=\"http://140.116.252.149/postpage.html#/post/$id\">查看更多</a>]";
					}
					else
					{
						$newIntro=$content;
						$more='';
					}
				
				$lasteditTime=$jasonDecode[$a]['modified_gmt'];
				
				
				if($id!=""&& $category != "tab8")
				{
				echo'<div class="col-md-12" style="border:0px solid;margin-top:15px;">';
					echo'<div class="page-header">';
							echo"<span style=\"display:inline;\"><h4><a href=\"http://140.116.252.149/postpage.html#/post/$id\">$title</a></h4></span>";
							echo'<span style="font-size:10px;display:inline;">發布者:'.$author.' , 最後編輯時間:'.$lasteditTime.'</span>';
					echo'</div>';
					echo'<div class="content">';
						echo $newIntro.'<br>';
						echo $more;
					echo'</div>';
				echo'</div><br>';
				}
				else if($id!="" && $category == "tab8"){
					echo'<div class="mdl-card mdl-shadow--2dp demo-card-wide" >';
						echo'<div style=" width:60%; background-color: green; display: inline-block; ">';
							echo'<div class="mdl-card__title" >';
												echo'<h2><small><a href='.$title.'>'.$activityTitle.'</a></small><br>';
												echo'<span style="font-size:20px; "> Date:'.$lasteditTime.'</span>';
							echo'</div>';
							echo'<div class="mdl-card__supporting-text">';											
											echo '<p>'.$description.'</p>';
							echo'</div>';
						echo'</div>';
						echo'<div style="float:right;width:40%;background-color: purple;display: inline-block;">';
							echo  '<img style=" width:100%; margin: 0px auto;" src="'.$photo.'"/>';
						echo'</div>';
					echo'</div>';
				}
			
			}
		}
		else
		{
			echo'<div class="col-md-12" style="border:0px solid;margin-top:15px;">';
					echo'<div class="content" style="padding:10px 10px 10px 10px;">';
						echo'<span style="font-size:25px;"><center><b>此分類目前無任何文章，敬請期待。。。</b></center></span>';
					echo'</div>';
			echo'</div><br>';			
		}
	}
	else
	{
		echo 'error';
	}

?>