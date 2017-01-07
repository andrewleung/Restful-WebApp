<?php
//header("Content-type: text/xml; charset=utf-8");

if (isset($_POST['page']) && isset($_POST['category'])) {
	$page = $_POST['page'];
	$category = $_POST['category'];
	$json = grap_content_by_url($page, $category);
	echo $json;
} else {
	exit;
}

function grap_content_by_url($page, $category)
{
    $return_value="";
	
	//var_dump($category);
	//var_dump(array('Engagement','Solitaires','Round'));
	//exit;
	
	$data = array('page' => $page, 'category' => $category);
	//$data = array('page' => $page, 'category' => array('Engagement','Solitaires','Round'));
	//$data = json_encode(array('page' => 1, 'category' => array('Engagement','Solitaires','Round')));
	$data = json_encode($data);

	$opts = array(
		'http' => array(
		'max_redirects' => 200,
			'method' => "POST",
			'header' =>	"Content-Type: application/json\r\n",
			'content' => $data			
						//"Accept: */*\r\n" .
						//"Accept-Language: en-us\r\n" .
						//"Accept-Encoding: gzip, deflate\r\n" .
						//"User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 2.0.50727; .NET CLR 1.1.4322)\r\n" .
						//"Content-Type: application/json\r\n" .
						//"Content-Length: " . strlen($data) . "\r\n" .
						//"Connection: Close\r\n",
			
		)
	);
	$context = stream_context_create($opts);
    $handle4 = fopen(trim("http://25.168.144.133:3000/products"), "r", false, $context);
	
    $grap_go_on=true;
    $old_reading_passage_content="";
    $passage_content_to_grap="";
    $reading_passage_content="";
    if ($handle4)
    {
		$pos = 0;
		$reading_passage_content="";
		while (!feof($handle4))
		{
			$pos = 0;
			$buffer = fgets($handle4, 4096);
			$reading_passage_content=$reading_passage_content . $buffer;
		}
		$return_value=$reading_passage_content;
    }
    else
    { 
		$return_value="no content";
    }
	return $return_value;
	
}
?>