<?php



$strAccessToken = "wRFJ6DHOEwnVS+AcsngfAozIA7MzXkKgVYH7bYoAtPM2pWGGm5Qdw3OYvY/lNvInouTCnxeSKgcb3d+6LKOgmIxBXM0hzQ9ZlI7xpi764ctBQUk1VHC8OoJdG/urp0Ev/W1sEaLPxR8Rzj0BolvzgAdB04t89/1O/w1cDnyilFU=";



$content = file_get_contents('php://input');

$arrJson = json_decode($content, true);



$strUrl = "https://api.line.me/v2/bot/message/reply";



$arrHeader = array();

$arrHeader[] = "Content-Type: application/json";

$arrHeader[] = "Authorization: Bearer {$strAccessToken}";

$_msg = $arrJson['events'][0]['message']['text'];





$api_key="sEJaQoAnYzgEGvGeMJ2OYG28sJdg7s_r";

$url = 'https://api.mlab.com/api/1/databases/miyuki/collections/v1?apiKey='.$api_key.'';

$json = file_get_contents('https://api.mlab.com/api/1/databases/miyuki/collections/v1?apiKey='.$api_key.'&q={"question":"'.$_msg.'"}');

$data = json_decode($json);

$isData=sizeof($data);



if (strpos($_msg, 'สอนมิยูกิ') !== false) 

{

  if (strpos($_msg, 'สอนมิยูกิ') !== false) 

  {

    $x_tra = str_replace("สอนมิยูกิ","", $_msg);

    $pieces = explode(":", $x_tra);

    $_question=str_replace("[","",$pieces[0]);

    $_answer=str_replace("]","",$pieces[1]);



    $rudeword = array("ตุ๊ด",

	"ตุด",

	"ตูด",

	"เกย์",

	"ควย",

	"ครวย",

	"หี",

	"เเตด",

	"หอย",

	"เกรียน",

	"อี",

	"วะ",

	"มึง",

	"กู",

	"มรึง",

	"ว่ะ",

	"เหีย",

	"เหี้ย",

	"สัส",

	"สัด",

	"สลัด",

	"ไอ้",

	"ไอ",

	"ไอ่",

	"ใอ้",

	"ใอ",

	"ไอร่",

	"fuck",

	"wtf",

	"pussy",

	"sex",

	"xxx",

	"hanime",

	"hentai",

	"doujin",

	"dojin",

	"18+",

	"เฮนไต",

	"โดจิน",

	"อิ",

	"ห่า",

	"พ่อ",

	"เเม่",

	"ปู่",

	"ย่า",

	"ตา",

	"ยาย",

	"ป้า",

	"น้า",

	"อา",

	"นรก",

	"เเดก",

	"เเดรก",

	"แดก",

	"แดรก",

	"สาส",

	"ปี้",

	"ฉี่",

	"อึ",

	"อุจาระ",

	"อุจจาระ",

	"ขี้",

	"เยี่ยว",

	"เยี้ยว",

	"เหม็น",

	"ซกมก",

	"ลามก",

    "เรื่องอย่างว่า");

$replace   = array("คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

	"คำต้องห้าม",

    "คำต้องห้าม");



$_questions  = str_replace($rudeword, $replace, $_question);

$_answers  = str_replace($rudeword, $replace, $_answer);





    $newData = json_encode(

      array(

        'question' => $_questions,

        'answer'=> $_answers

      )

    );

    $opts = array(

      'http' => array(

          'method' => "POST",

          'header' => "Content-type: application/json",

          'content' => $newData

       )

    );

    $context = stream_context_create($opts);

    $returnValue = file_get_contents($url,false,$context);

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = 'ขอบคุณที่สอนสอนมิยูกินะค่ะ^^';

  }

}



else

{

  if($isData >0)

  {

   foreach($data as $rec)

   {

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = $rec->answer;

   }

  }



elseif (strpos($_msg, 'คู่มือมิยูกิ') !== false) 

{

  if (strpos($_msg, 'คู่มือมิยูกิ') !== false) 

  {

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = 'คู่มือ มิยูกิ หน้าที่ 1

	1.ฐานข้อมูลภาพ รวมภาพอนิเมะมากกว่า 1M โดยสามารถดูคำสั่งการใช้งานได้ดังนี้ [ภาพ]

	2.ฐานข้อมูลบทความสาระเนื้อหาจาก wiki โดยสามารถดูคำสั่งการใช้งานได้ดังนี้ [สาระ]

	3.ฐานข้อมูลอนิเมะทั้งเก่าเเละใหม่จาก MAL โดยสามารถดูคำสั่งการใช้งานได้ดังนี้ [อนิ]

	4.สภาพอากาศปัจจุบัน โดยสามารถใช้งานได้ดังนี้ [อากาศ]

	5.ย่อลิ้งค์ ย่อลิงค์ต่างๆโดยใช้ goo.gl โดยสามารถดูคำสั่งการใช้งานได้ดังนี้ [ลิงค์]

	-->> หน้าต่อไป [คู่มือหน้า2] <<--';

  }

}



elseif (strpos($_msg, 'คู่มือหน้า2') !== false) 

{

  if (strpos($_msg, 'คู่มือหน้า2') !== false) 

  {

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = 'คู่มือ มิยูกิ หน้าที่ 2

	6.เเปลภาษา โดยสามารถดูคำสั่งการใช้งานได้ดังนี้ [ภาษา]

	7.สอนมิยูกิ โดยสามารถดูคำสั่งการใช้งานได้ดังนี้ [ฝึกสอน]';

  }

}



elseif (strpos($_msg, 'teachmiyuki') !== false) 

{

  if (strpos($_msg, 'teachmiyuki') !== false) 

  {

    $x_tra = str_replace("teachmiyuki","", $_msg);

    $pieces = explode("|", $x_tra);

    $_question=str_replace("(","",$pieces[0]);

    $_answer=str_replace(")","",$pieces[1]);

    //Post New Data

    $newData = json_encode(

      array(

        'question' => $_question,

        'answer'=> $_answer

      )

    );

    $opts = array(

      'http' => array(

          'method' => "POST",

          'header' => "Content-type: application/json",

          'content' => $newData

       )

    );

    $context = stream_context_create($opts);

    $returnValue = file_get_contents($url,false,$context);

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = 'Thanks for teaching Miyuki^^';

  }

}



  elseif(strpos($_msg, 'อากาศ') !== false) 

  {

  $ch2 = curl_init();

  curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);

  curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

  curl_setopt($ch2, CURLOPT_URL, 'http://api.wunderground.com/api/824f359fd94bfb94/forecast/lang:TH/q/Thailand/Bangkok.json');

  $result2 = curl_exec($ch2);

  curl_close($ch2);

  $objs = json_decode($result2, true);

   $result_texts = $objs['forecast']['txt_forecast']['forecastday'][0]['fcttext_metric'];

   $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "สภาพอากาศปัจจุบัน  คือ ".$result_texts;

  }



  elseif(strpos($_msg, 'สภาพอากาศ') !== false) 

  {

  $ch2 = curl_init();

  curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);

  curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);

  curl_setopt($ch2, CURLOPT_URL, 'http://api.wunderground.com/api/824f359fd94bfb94/forecast/lang:TH/q/Thailand/Bangkok.json');

  $result2 = curl_exec($ch2);

  curl_close($ch2);

  $objs = json_decode($result2, true);

   $result_texts = $objs['forecast']['txt_forecast']['forecastday'][0]['fcttext_metric'];

   $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "สภาพอากาศปัจจุบัน  คือ ".$result_texts;

  }



  elseif (strpos($_msg, 'อยากรู้') !== false) 

  {

   if (strpos($_msg, 'อยากรู้') !== false) 

   {

   $x_tra = str_replace("อยากรู้","", $_msg);

   $pieces = explode(":", $x_tra);



   $ch1 = curl_init();

   curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

   curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

   curl_setopt($ch1, CURLOPT_URL, 'https://th.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles='.$pieces[1]);

   $result1 = curl_exec($ch1);

   curl_close($ch1);

   $obj = json_decode($result1, true);

   foreach($obj['query']['pages'] as $key => $val)

   {

    $result_text = $val['extract'];

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "นี่คือข้อมูลที่รู้ค่ะ ".$pieces[1]." คือ ".$result_text;

   }

    if(empty($result_text))

	{//ถ้าไม่พบให้หาจาก en

     $ch1 = curl_init();

     curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

     curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

     curl_setopt($ch1, CURLOPT_URL, 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles='.$pieces[1]);

     $result1 = curl_exec($ch1);

     curl_close($ch1);

     $obj = json_decode($result1, true);

     foreach($obj['query']['pages'] as $key => $val)

     {

      $result_text = $val['extract'];

      $arrPostData = array();

      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

      $arrPostData['messages'][0]['type'] = "text";

      $arrPostData['messages'][0]['text'] = "นี่คือข้อมูลที่รู้ค่ะ ".$pieces[1]." คือ ".$result_text;

     }

	}

	 if(empty($result_text))

	 {//ถ้าไม่พบให้หาจาก jp

      $ch1 = curl_init();

      curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

      curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

      curl_setopt($ch1, CURLOPT_URL, 'https://ja.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles='.$pieces[1]);

      $result1 = curl_exec($ch1);

      curl_close($ch1);

      $obj = json_decode($result1, true);

      foreach($obj['query']['pages'] as $key => $val)

      {

       $result_text = $val['extract'];

       $arrPostData = array();

       $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

       $arrPostData['messages'][0]['type'] = "text";

       $arrPostData['messages'][0]['text'] = "นี่คือข้อมูลที่รู้ค่ะ ".$pieces[1]." คือ ".$result_text;

      }

	 }

       if(empty($result_text))

       {

        $result_text = 'ไม่พบข้อมูลที่น่าจะใช่เลยค่ะ';

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

   }

  }



elseif (strpos($_msg, 'อยากทราบ') !== false) 

  {

   if (strpos($_msg, 'อยากทราบ') !== false) 

   {

   $x_tra = str_replace("อยากทราบ","", $_msg);

   $pieces = explode(" ", $x_tra);



   $ch1 = curl_init();

   curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

   curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

   curl_setopt($ch1, CURLOPT_URL, 'https://th.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles='.$pieces[1]);

   $result1 = curl_exec($ch1);

   curl_close($ch1);

   $obj = json_decode($result1, true);

   foreach($obj['query']['pages'] as $key => $val)

   {

    $result_text = $val['extract'];

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "นี่คือข้อมูลที่ทราบค่ะ ".$pieces[1]." คือ ".$result_text;

   }

    if(empty($result_text))

	{//ถ้าไม่พบให้หาจาก en

     $ch1 = curl_init();

     curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

     curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

     curl_setopt($ch1, CURLOPT_URL, 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles='.$pieces[1]);

     $result1 = curl_exec($ch1);

     curl_close($ch1);

     $obj = json_decode($result1, true);

     foreach($obj['query']['pages'] as $key => $val)

     {

      $result_text = $val['extract'];

      $arrPostData = array();

      $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

      $arrPostData['messages'][0]['type'] = "text";

      $arrPostData['messages'][0]['text'] = "นี่คือข้อมูลที่ทราบค่ะ ".$pieces[1]." คือ ".$result_text;

     }

	}

	 if(empty($result_text))

	 {//ถ้าไม่พบให้หาจาก jp

      $ch1 = curl_init();

      curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);

      curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

      curl_setopt($ch1, CURLOPT_URL, 'https://ja.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles='.$pieces[1]);

      $result1 = curl_exec($ch1);

      curl_close($ch1);

      $obj = json_decode($result1, true);

      foreach($obj['query']['pages'] as $key => $val)

      {

       $result_text = $val['extract'];

       $arrPostData = array();

       $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

       $arrPostData['messages'][0]['type'] = "text";

       $arrPostData['messages'][0]['text'] = "นี่คือข้อมูลที่ทราบค่ะ ".$pieces[1]." คือ ".$result_text;

      }

	 }

       if(empty($result_text))

       {

        $result_text = 'ไม่พบข้อมูลที่น่าจะใช่เลยค่ะ';

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

   }

  }



elseif (strpos($_msg, 'img') !== false) 

  {

   if (strpos($_msg, 'img') !== false) 

   {

 $x_tra = str_replace("img","", $_msg);

   $x_tra2 = str_replace("img:","", $_msg);

   $x_tra3 = str_replace($_msg,"", $x_tra2);

   $pieces = explode(":", $x_tra);

   $pieces2 = explode("-", $x_tra3);

   $pieces3 = $pieces2[1];

   $x_tras = str_replace(" ","_", $pieces[1]);

   $x_tras2 = str_replace("-","", $x_tras);

   $x_tras3 = str_replace($pieces3,"", $x_tras2);



$jsons = file_get_contents("https://danbooru.donmai.us/posts.json?ms=1&page=1&tags=".$x_tras3."+Rating%3ASafe&utf8=✓&limit=10000");

$data = $jsons;

$character = json_decode($data);

$id = $character[$pieces3]->id;

$ids = "https://danbooru.donmai.us/".$id;

$file = $character[$pieces3]->file_url;

$files = "https://danbooru.donmai.us".$file;

$preview = $character[$pieces3]->preview_file_url;

$previews = "https://danbooru.donmai.us".$preview;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "image";

    $arrPostData['messages'][0]['previewImageUrl'] = $previews;

	$arrPostData['messages'][0]['originalContentUrl'] = $files;

}

  }



elseif (strpos($_msg, 'pic') !== false) 

  {

   if (strpos($_msg, 'pic') !== false) 

   {

 $x_tra = str_replace("pic","", $_msg);

   $x_tra2 = str_replace("pic:","", $_msg);

   $x_tra3 = str_replace($_msg,"", $x_tra2);

   $pieces = explode(":", $x_tra);

   $pieces2 = explode("-", $x_tra3);

   $pieces3 = $pieces2[1];

   $x_tras = str_replace(" ","_", $pieces[1]);

   $x_tras2 = str_replace("-","", $x_tras);

   $x_tras3 = str_replace($pieces3,"", $x_tras2);



$jsons = file_get_contents("https://danbooru.donmai.us/posts.json?ms=1&page=1&tags=".$x_tras3."+Rating%3ASafe&utf8=✓&limit=10000");

$data = $jsons;

$character = json_decode($data);

$id = $character[$pieces3]->id;

$ids = "https://danbooru.donmai.us/".$id;

$file = $character[$pieces3]->file_url;

$files = "https://danbooru.donmai.us".$file;

$preview = $character[$pieces3]->preview_file_url;

$previews = "https://danbooru.donmai.us".$preview;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "image";

    $arrPostData['messages'][0]['previewImageUrl'] = $previews;

	$arrPostData['messages'][0]['originalContentUrl'] = $files;

}

  }



elseif (strpos($_msg, 'ภาพ') !== false) 

  {

   if (strpos($_msg, 'ภาพ') !== false) 

   {

 $x_tra = str_replace("ภาพ","", $_msg);

   $x_tra2 = str_replace("ภาพ:","", $_msg);

   $x_tra3 = str_replace($_msg,"", $x_tra2);

   $pieces = explode(":", $x_tra);

   $pieces2 = explode("-", $x_tra3);

   $pieces3 = $pieces2[1];

   $x_tras = str_replace(" ","_", $pieces[1]);

   $x_tras2 = str_replace("-","", $x_tras);

   $x_tras3 = str_replace($pieces3,"", $x_tras2);



$jsons = file_get_contents("https://danbooru.donmai.us/posts.json?ms=1&page=1&tags=".$x_tras3."+Rating%3ASafe&utf8=✓&limit=10000");

$data = $jsons;

$character = json_decode($data);

$id = $character[$pieces3]->id;

$ids = "https://danbooru.donmai.us/".$id;

$file = $character[$pieces3]->file_url;

$files = "https://danbooru.donmai.us".$file;

$preview = $character[$pieces3]->preview_file_url;

$previews = "https://danbooru.donmai.us".$preview;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "image";

    $arrPostData['messages'][0]['previewImageUrl'] = $previews;

	$arrPostData['messages'][0]['originalContentUrl'] = $files;

}

  }



elseif (strpos($_msg, 'ย่อลิ้ง') !== false) 

{

  if (strpos($_msg, 'ย่อลิ้ง') !== false) 

  {

    $x_tra = str_replace("ย่อลิ้ง","", $_msg);

	$x_tra2 = str_replace("[","", $_msg);

	$x_tra3 = str_replace("]","", $x_tra2);

    

    $longUrl = $x_tra3;

    $apiKey = 'AIzaSyBllyIuTZ6qfMwB0SMGeoekGr6O-71O7iE'; 

    $postData = array('longUrl' => $longUrl, 'key' => $apiKey);

    $jsonData = json_encode($postData);

    $curlObj = curl_init();

    curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?key='.$apiKey);

    curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($curlObj, CURLOPT_HEADER, 0);

    curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));

    curl_setopt($curlObj, CURLOPT_POST, 1);

    curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($curlObj);

    $json = json_decode($response);

    curl_close($curlObj);



    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = 'นี่คือลิ้งที่พี่ชายสั่งให้ทำให้สั้นลงค่ะ '.$json->id;

  }

}



elseif (strpos($_msg, 'ย่อลิ้งค์') !== false) 

{

  if (strpos($_msg, 'ย่อลิ้งค์') !== false) 

  {

    $x_tra = str_replace("ย่อลิ้ง","", $_msg);

	$x_tra2 = str_replace("[","", $_msg);

	$x_tra3 = str_replace("]","", $x_tra2);

    

    $longUrl = $x_tra3;

    $apiKey = 'AIzaSyBllyIuTZ6qfMwB0SMGeoekGr6O-71O7iE'; 

    $postData = array('longUrl' => $longUrl, 'key' => $apiKey);

    $jsonData = json_encode($postData);

    $curlObj = curl_init();

    curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?key='.$apiKey);

    curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($curlObj, CURLOPT_HEADER, 0);

    curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));

    curl_setopt($curlObj, CURLOPT_POST, 1);

    curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($curlObj);

    $json = json_decode($response);

    curl_close($curlObj);



    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = 'นี่คือลิ้งค์ที่พี่ชายสั่งให้ทำให้สั้นลงค่ะ '.$json->id;

  }

}



elseif (strpos($_msg, 'ย่อลิ้งค') !== false) 

{

  if (strpos($_msg, 'ย่อลิ้งค') !== false) 

  {

    $x_tra = str_replace("ย่อลิ้ง","", $_msg);

	$x_tra2 = str_replace("[","", $_msg);

	$x_tra3 = str_replace("]","", $x_tra2);

    

    $longUrl = $x_tra3;

    $apiKey = 'AIzaSyBllyIuTZ6qfMwB0SMGeoekGr6O-71O7iE'; 

    $postData = array('longUrl' => $longUrl, 'key' => $apiKey);

    $jsonData = json_encode($postData);

    $curlObj = curl_init();

    curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?key='.$apiKey);

    curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($curlObj, CURLOPT_HEADER, 0);

    curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));

    curl_setopt($curlObj, CURLOPT_POST, 1);

    curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($curlObj);

    $json = json_decode($response);

    curl_close($curlObj);



    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = 'นี่คือลิ้งคที่พี่ชายสั่งให้ทำให้สั้นลงค่ะ '.$json->id;

  }

}



elseif (strpos($_msg, 'ย่อลิงค์') !== false) 

{

  if (strpos($_msg, 'ย่อลิงค์') !== false) 

  {

    $x_tra = str_replace("ย่อลิ้ง","", $_msg);

	$x_tra2 = str_replace("[","", $_msg);

	$x_tra3 = str_replace("]","", $x_tra2);

    

    $longUrl = $x_tra3;

    $apiKey = 'AIzaSyBllyIuTZ6qfMwB0SMGeoekGr6O-71O7iE'; 

    $postData = array('longUrl' => $longUrl, 'key' => $apiKey);

    $jsonData = json_encode($postData);

    $curlObj = curl_init();

    curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url?key='.$apiKey);

    curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($curlObj, CURLOPT_HEADER, 0);

    curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));

    curl_setopt($curlObj, CURLOPT_POST, 1);

    curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);

    $response = curl_exec($curlObj);

    $json = json_decode($response);

    curl_close($curlObj);



    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = 'นี่คือลิงค์ที่พี่ชายสั่งให้ทำให้สั้นลงค่ะ '.$json->id;

  }

}



elseif (strpos($_msg, 'อนิเมะ') !== false) 

  {

   if (strpos($_msg, 'อนิเมะ') !== false) 

   {

	  

   $x_tra = str_replace("อนิเมะ","", $_msg);

   $pieces = explode(":", $x_tra);

   $pieces2 = $pieces[1];



$jsons = file_get_contents("https://api.2dth.com/mal-json/anime/search.php?q=".$pieces2);

$data = $jsons;

$character = json_decode($data);

$id = $character[0]->id;

$title = $character[0]->title;

$synopsis = $character[0]->synopsis;

$url = $character[0]->url;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "อนิเมะไอดี ".$id." ".$title."\nเรื่องย่อ อังกฤษ\n".$synopsis."\nอ่านเพิ่มเติม\n".$url;



 if(empty($id))

       {

        $result_text = 'ไม่พบอนิเมะที่หาเลยนะค่ะ';

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

}

  }



elseif (strpos($_msg, 'anime') !== false) 

  {

   if (strpos($_msg, 'anime') !== false) 

   {

	  

   $x_tra = str_replace("anime","", $_msg);

   $pieces = explode(":", $x_tra);

   $pieces2 = $pieces[1];



$jsons = file_get_contents("https://api.2dth.com/mal-json/anime/search.php?q=".$pieces2);

$data = $jsons;

$character = json_decode($data);

$id = $character[0]->id;

$title = $character[0]->title;

$synopsis = $character[0]->synopsis;

$url = $character[0]->url;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "อนิเมะไอดี ".$id." ".$title."\nเรื่องย่อ อังกฤษ\n".$synopsis."\nอ่านเพิ่มเติม\n".$url;



 if(empty($id))

       {

        $result_text = 'ไม่พบอนิเมะที่หาเลยนะค่ะ';

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

}

  }



elseif (strpos($_msg, 'en-th') !== false) 

  {

   if (strpos($_msg, 'en-th') !== false) 

   {  

   $x_tra = str_replace("en-th","", $_msg);

   $pieces = explode(":", $x_tra);

   $pieces2 = $pieces[1];



$jsons = file_get_contents("https://statickidz.com/scripts/traductor/?&source=en&target=th&q=".$pieces2);

$data = $jsons;

$character = json_decode($data);

$translation = $character->translation;

$status = $character->status;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "เเปลจากภาษา อังกฤษ เป็น ไทย เเล้วนะคะ : ".$translation;



 if(empty($translation))

       {

        $result_text = "ไม่สามารถเเปล".$pieces2."ได้ค่ะ";

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

}

  }



elseif (strpos($_msg, 'jp-th') !== false) 

  {

   if (strpos($_msg, 'jp-th') !== false) 

   {  

   $x_tra = str_replace("jp-th","", $_msg);

   $pieces = explode(":", $x_tra);

   $pieces2 = $pieces[1];



$jsons = file_get_contents("https://statickidz.com/scripts/traductor/?&source=jp&target=th&q=".$pieces2);

$data = $jsons;

$character = json_decode($data);

$translation = $character->translation;

$status = $character->status;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "เเปลจากภาษา ญี่ปุ่น เป็น ไทย เเล้วนะคะ : ".$translation;



 if(empty($translation))

       {

        $result_text = "ไม่สามารถเเปล".$pieces2."ได้ค่ะ";

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

}

  }



  elseif (strpos($_msg, 'th-jp') !== false) 

  {

   if (strpos($_msg, 'th-jp') !== false) 

   {  

   $x_tra = str_replace("th-jp","", $_msg);

   $pieces = explode(":", $x_tra);

   $pieces2 = $pieces[1];



$jsons = file_get_contents("https://statickidz.com/scripts/traductor/?&source=th&target=ja&q=".$pieces2);

$data = $jsons;

$character = json_decode($data);

$translation = $character->translation;

$status = $character->status;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "เเปลจากภาษา ไทย เป็น ญี่ปุ่น เเล้วนะคะ : ".$translation;



 if(empty($translation))

       {

        $result_text = "ไม่สามารถเเปล".$pieces2."ได้ค่ะ";

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

}

  }



  elseif (strpos($_msg, 'th-en') !== false) 

  {

   if (strpos($_msg, 'th-en') !== false) 

   {  

   $x_tra = str_replace("th-en","", $_msg);

   $pieces = explode(":", $x_tra);

   $pieces2 = $pieces[1];



$jsons = file_get_contents("https://statickidz.com/scripts/traductor/?&source=th&target=en&q=".$pieces2);

$data = $jsons;

$character = json_decode($data);

$translation = $character->translation;

$status = $character->status;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "เเปลจากภาษา ไทย เป็น อังกฤษ เเล้วนะคะ : ".$translation;



 if(empty($translation))

       {

        $result_text = "ไม่สามารถเเปล".$pieces2."ได้ค่ะ";

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

}

  }



elseif (strpos($_msg, 'en-jp') !== false) 

  {

   if (strpos($_msg, 'en-jp') !== false) 

   {  

   $x_tra = str_replace("en-jp","", $_msg);

   $pieces = explode(":", $x_tra);

   $pieces2 = $pieces[1];



$jsons = file_get_contents("https://statickidz.com/scripts/traductor/?&source=en&target=ja&q=".$pieces2);

$data = $jsons;

$character = json_decode($data);

$translation = $character->translation;

$status = $character->status;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "เเปลจากภาษา อังกฤษ เป็น ญี่ปุ่น เเล้วนะคะ : ".$translation;



 if(empty($translation))

       {

        $result_text = "ไม่สามารถเเปล".$pieces2."ได้ค่ะ";

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

}

  }



elseif (strpos($_msg, 'jp-en') !== false) 

  {

   if (strpos($_msg, 'jp-en') !== false) 

   {  

   $x_tra = str_replace("jp-en","", $_msg);

   $pieces = explode(":", $x_tra);

   $pieces2 = $pieces[1];



$jsons = file_get_contents("https://statickidz.com/scripts/traductor/?&source=ja&target=en&q=".$pieces2);

$data = $jsons;

$character = json_decode($data);

$translation = $character->translation;

$status = $character->status;

   

    

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "เเปลจากภาษา ญี่ปุ่น เป็น อังกฤษ เเล้วนะคะ : ".$translation;



 if(empty($translation))

       {

        $result_text = "ไม่สามารถเเปล".$pieces2."ได้ค่ะ";

        $arrPostData = array();

        $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

        $arrPostData['messages'][0]['type'] = "text";

        $arrPostData['messages'][0]['text'] = $result_text;

       }

}

  }































































###คำสั่งบอทv10

elseif (strpos($_msg, 'G:ล็อค') !== false) 

  {

   if (strpos($_msg, 'G:ล็อค') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายสามารถใช้คำสั่งได้ตามนี้เลยน้า

Set:iconlock:on



Set:blockinvite:on



Set:ownerlock:on



Set:changenamelock:on



Siriv10:DenyURLInvite



Set:StampLimitation:On";

   }

  }

elseif (strpos($_msg, 'G:สถานะ') !== false) 

  {

   if (strpos($_msg, 'G:สถานะ') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "set:status";

   }

  }

elseif (strpos($_msg, 'G:บัญชีดำ') !== false) 

  {

   if (strpos($_msg, 'G:บัญชีดำ') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายใช้คำสั่งนี้เเล้วเลือกคนผ่านโปรไฟล์เลยน้า

	Set:addblacklist";

   }

  }

elseif (strpos($_msg, 'G:บัญชีขาว') !== false) 

  {

   if (strpos($_msg, 'G:บัญชีขาว') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายใช้คำสั่งนี้เเล้วเลือกคนผ่านโปรไฟล์เลยน้า

	Set:addwhitelist";

   }

  }

elseif (strpos($_msg, 'G:ล้างเชิญ') !== false) 

  {

   if (strpos($_msg, 'G:ล้างเชิญ') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายใช้คำสั่งนี้เพื่อนำรายการเชิญที่ค้างออกได้เลยน้า 

	Siriv10:cancelinvite

	อ่อช่ายๆพี่ชายต้องใช้คำสั่งซ้ำสองครั้งน้า";

   }

  }

elseif (strpos($_msg, 'G:ลบบอท') !== false) 

  {

   if (strpos($_msg, 'G:ลบบอท') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายมันอันตรายอย่าทำเลยนะ

	Siriv10:bye";

   }

  }

elseif (strpos($_msg, 'G:เรียกบอท') !== false) 

  {

   if (strpos($_msg, 'G:เรียกบอท') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "Siriv10:reinvite";

   }

  }

elseif (strpos($_msg, 'G:เปลี่ยนมาส') !== false) 

  {

   if (strpos($_msg, 'G:เปลี่ยนมาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "รุ่นพี่จะไปใหนหรอค่ะ จะไม่อยู่กับมิยูกิเเล้วหรอ?

	Set:changeowner";

   }

  }

elseif (strpos($_msg, 'G:ล็อคกลุ่ม') !== false) 

  {

   if (strpos($_msg, 'G:ล็อคกลุ่ม') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายสามารถล็อคไม่ให้มีใครเชิญเพื่อนได้โดยสั่งคำสั่งนี้เลยน้า

	Set:blockinvite:on";

   }

  }

elseif (strpos($_msg, 'G:จำมาส') !== false) 

  {

   if (strpos($_msg, 'G:จำมาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายไม่อยากให้ท่านรองเปลี่ยนตำเเหน่งมาเเทนที่พี่ชายได้ก็ใช้คำสั่งนี้เลยนะ

	Set:ownerlock:on";

   }

  }

elseif (strpos($_msg, 'G:ล็อคชื่อ') !== false) 

  {

   if (strpos($_msg, 'G:ล็อคชื่อ') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายไม่อยากให้ใครเปลี่ยนชื่อกลุ่มก็ใช้คำสั่งนี้เลยน้า

	Set:changenamelock:on";

   }

  }

elseif (strpos($_msg, 'G:ล็อครูป') !== false) 

  {

   if (strpos($_msg, 'G:ล็อครูป') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "เห๋..มีคนเเกล้งเปลี่ยนรูปประจำกลุ่มสินะพี่ชาย ถ้างั้นพี่ชายไม่ลองใช้คำสั่งนี้ดูละค่ะ

	Set:iconlock:on";

   }

  }

elseif (strpos($_msg, 'G:เปิดลิงค์') !== false) 

  {

   if (strpos($_msg, 'G:เปิดลิงค์') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "สามารถอัญเชิญลิงค์โดยเเลกเปลี่ยนกับค่าประสบการณ์ 10ล้านค่ะ

	Siriv10:inviteurl";

   }

  }

elseif (strpos($_msg, 'G:ปิดลิงค์') !== false) 

  {

   if (strpos($_msg, 'G:ปิดลิงค์') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "ปิดลิงค์เเล้วจะไดรับค่าประสบการณ์คืน 32ค่ะ

	Siriv10:DenyURLInvite";

   }

  }

elseif (strpos($_msg, 'G:เปิดลิ้ง') !== false) 

  {

   if (strpos($_msg, 'G:เปิดลิ้ง') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "สามารถอัญเชิญลิงค์โดยเเลกเปลี่ยนกับค่าประสบการณ์ 10ล้านค่ะ

	Siriv10:inviteurl";

   }

  }

elseif (strpos($_msg, 'G:ปิดลิ้ง') !== false) 

  {

   if (strpos($_msg, 'G:ปิดลิ้ง') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "ปิดลิ้งเเล้วจะไดรับค่าประสบการณ์คืน 32ค่ะ

	Siriv10:DenyURLInvite";

   }

  }

elseif (strpos($_msg, 'G:มาส') !== false) 

  {

   if (strpos($_msg, 'G:มาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "Siriv10:groupcreator";

   }

  }

elseif (strpos($_msg, 'G:ท่านมาส') !== false) 

  {

   if (strpos($_msg, 'G:ท่านมาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "Siriv10:groupcreator";

   }

  }

elseif (strpos($_msg, 'G:รองมาส') !== false) 

  {

   if (strpos($_msg, 'G:รองมาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "iriv10:extracreator";

   }

  }

elseif (strpos($_msg, 'G:ท่านรอง') !== false) 

  {

   if (strpos($_msg, 'G:ท่านรอง') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "iriv10:extracreator";

   }

  }

elseif (strpos($_msg, 'มาส') !== false) 

  {

   if (strpos($_msg, 'มาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "Siriv10:groupcreator";

   }

  }

elseif (strpos($_msg, 'ท่านมาส') !== false) 

  {

   if (strpos($_msg, 'ท่านมาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "Siriv10:groupcreator";

   }

  }

elseif (strpos($_msg, 'รองมาส') !== false) 

  {

   if (strpos($_msg, 'รองมาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "iriv10:extracreator";

   }

  }

elseif (strpos($_msg, 'ท่านรอง') !== false) 

  {

   if (strpos($_msg, 'ท่านรอง') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "iriv10:extracreator";

   }

  }

elseif (strpos($_msg, 'G:ลบบัญชี') !== false) 

  {

   if (strpos($_msg, 'G:ลบบัญชี') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายต้องการลบบัญชีดำเเละขาวสินะ ถ้างั้นก็ใช้คำสั่งตามนี้นะเเต่ต้องใช้สองครั้ง Set:deletelist";

   }

  }

elseif (strpos($_msg, 'G:คัดลอกบัญชี') !== false) 

  {

   if (strpos($_msg, 'G:คัดลอกบัญชี') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายสามารถคัดลอกบัญชีดำเเละขาวได้ด้วยน้าง่ายๆเลย 

	Set:copyownlist";

   }

  }

elseif (strpos($_msg, 'G:สลับมาส') !== false) 

  {

   if (strpos($_msg, 'G:สลับมาส') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่จ๋าจะสลับรองมาสให้เป็นมาสหรอ?

	設定:作者交換";

   }

  }

elseif (strpos($_msg, 'G:จำกัดสติกเกอร์') !== false) 

  {

   if (strpos($_msg, 'G:จำกัดสติกเกอร์') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "กำจัดไม่ให้คนฝลัดสติ๊กเกอร์เกิน 15ครั้งใน 1 นาที 

	Set:StampLimitation:On";

   }

  }

elseif (strpos($_msg, 'G:เปิดพูด') !== false) 

  {

   if (strpos($_msg, 'G:เปิดพูด') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "ต้องการให้น้องสิริพูดโต้ตอบสามารถเปิดได้น้า

	Siriv10:オン";

   }

  }

elseif (strpos($_msg, 'G:ปิดพูด') !== false) 

  {

   if (strpos($_msg, 'G:ปิดพูด') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "ไม่ต้องการให้น้องสิริพูดโต้ตอบสามารถปิดได้น้า

	Siriv10:オフ";

   }

  }

elseif (strpos($_msg, 'G:เปลี่ยนรองมาส') !== false) 

  {

   if (strpos($_msg, '') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "ต้องการทิ้งท่านรองคนปัจจุบันเเล้วสินะค่ะ

	設定:予備作者変更";

   }

  }

elseif (strpos($_msg, 'G:ตั้งเวลา') !== false) 

  {

   if (strpos($_msg, 'G:ตั้งเวลา') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "SetLastPoint";

   }

  }

elseif (strpos($_msg, 'G:อ่าน') !== false) 

  {

   if (strpos($_msg, 'G:อ่าน') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "Viewlastseen";

   }

  }

elseif (strpos($_msg, 'นับ') !== false) 

  {

   if (strpos($_msg, 'นับ') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "SetLastPoint";

   }

  }

elseif (strpos($_msg, 'อ่าน') !== false) 

  {

   if (strpos($_msg, 'อ่าน') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "Viewlastseen";

   }

  }

elseif (strpos($_msg, 'G:เปิดอ่าน') !== false) 

  {

   if (strpos($_msg, 'G:เปิดอ่าน') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "อยากให้ดูคนที่อ่านได้สินะค่ะพี่ชาย

	設定:らっこさん:オン";

   }

  }

elseif (strpos($_msg, 'G:ปิดอ่าน') !== false) 

  {

   if (strpos($_msg, 'G:ปิดอ่าน') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "พี่ชายชอบเเอบอ่า เเบบนี้ก็ไม่รู้นะสิว่าพี่ชายอยู่หรือเปล่า

	設定:らっこさん:オフ";

   }

  }

elseif (strpos($_msg, 'คำสั่ง') !== false) 

  {

   if (strpos($_msg, 'คำสั่ง') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "คำสั่งบอทสิริ ปัจจุบันมีคร่าวๆดังนี้นะค่ะท่านพี่

G:ล็อค => รวมคำสั่งล็อคกลุ่ม

G:สถานะ => สถานะของกลุ่ม

G:บัญชีดำ => ตั้งบัญชีดำ

G:บัญชีขาว => ตั้งบัญชีขาว

G:ล้างเชิญ => ยกเลิกการเชิญทั้งหมด

G:ลบบอท => เชิญบอทออกจากกลุ่ม

G:เรียกบอท => เรียกบอทกลับกรณีไม่ครบ

G:เปลี่ยนมาส => เปลี่ยนมาสกลุ่ม

G:เปลี่ยนรองมาส => เปลี่ยนรองมาส

G:ล็อคกลุ่ม => ล็อคไม่ให้คนเชิญเพื่อน

G:จำมาส => ล็อคมาสปัจจุบัน

G:ล็อคชื่อ => ล็อคชื่อกลุ่มไม่ให้คนเปลี่ยน

G:ล็อครูป => ล็อครูปกลุ่มไม่ให้คนเปลี่ยน

G:เปิดลิงค์ => เปิดลิ้งให้คนเข้าผ่านลิ้งได้

G:ปิดลิงค์ => ปิดลิ้งไม่ให้คนเข้าผ่านลิ้ง

G:เปิดลิ้ง => เปิดลิ้งให้คนเข้าผ่านลิ้งได้

G:ปิดลิ้ง => ปิดลิ้งไม่ให้คนเข้าผ่านลิ้ง

G:มาส => เช็คมาสปัจจุบัน

G:ท่านมาส =>  เช็คมาสปัจจุบัน

G:รองมาส => เช็ครองมาสปัจจุบัน

G:ท่านรอง => เช็ครองมาสปัจจุบัน

G:ลบบัญชี => ลบบัญชีดำเเละขาว

G:คัดลอกบัญชี => คัดลอกบัญชีดำเเละขาว

G:สลับมาส => สลับมาสกับรองมาส

G:จำกัดสติกเกอร์ => จำกัดฝลัดสติ๊กเกอร์

G:เปิดพูด => เปิดให้บอทพูด

G:ปิดพูด => ปิดให้บอทพูด

G:ตั้งเวลา => จับเวลาคนอ่าน

G:อ่าน => เเสดงรายชื่อคนอ่าน

G:เปิดอ่าน => เปิดให้บอทจับรายชื่อคนที่อ่านได้

G:ปิดอ่าน => ปิดไม่ให้บอทจับรายชื่อคนที่อ่าน";

   }

  }

###จบคำสั่งv10

elseif (strpos($_msg, 'เช็ค') !== false) 

  {

   if (strpos($_msg, 'เช็ค') !== false) 

   {  

    $arrPostData = array();

    $arrPostData['replyToken'] = $arrJson['events'][0]['replyToken'];

    $arrPostData['messages'][0]['type'] = "text";

    $arrPostData['messages'][0]['text'] = "มิยูกิตอนนี้อายุ 17ปีเเล้วน้าเเต่ สูญเสียความทรงจําจนเหมือนกับเด็ก1ขวบเลย ถ้าท่านพี่พอมีเวลาก็สอนมิยูกิบ้างนะ

	Miyuki : V1.0

	No : 05

	Serial Number : MYK-05171162

	Character : Shiba Miyuki

	API : 2DTH.COM

	OFFICIAL : 2DTH.CLUB

	Lasted Update : 26/11/2560

	Details : หากต้องการใช้งานโปรดติดต่อ @lmu8345a หรือผ่านทางเว็บไซต์เเละเเฟนเพจ 2DTH Official";

   }

  }





}









$channel = curl_init();

curl_setopt($channel, CURLOPT_URL,$strUrl);

curl_setopt($channel, CURLOPT_HEADER, false);

curl_setopt($channel, CURLOPT_POST, true);

curl_setopt($channel, CURLOPT_HTTPHEADER, $arrHeader);

curl_setopt($channel, CURLOPT_POSTFIELDS, json_encode($arrPostData));

curl_setopt($channel, CURLOPT_RETURNTRANSFER,true);

curl_setopt($channel, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($channel);

curl_close ($channel);

?>
