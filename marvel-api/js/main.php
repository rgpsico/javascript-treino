<?php
/**


//$terceiro = $content;




	
	//print_r($re['results']);
   // print_r($re->offset);


/*

echo $re[0][0];
print_r($re[results][id]);
print_r($re['results']['id']);
print_r($re->vote_count);
echo $re->vote_count;
$segundo = $primeiro->Character;



* Author: Sundeep Joseph Machado
* Website: www.sundeepmachado.com
* Purpose: Example to query Marvel API using PHP
*/
// To create a new TimeStamp
$date = new DateTime();
$timestamp=$date->getTimestamp();
 
//Add your keys here. It would be better if you include them from an external file in production.

// Add the timestamp to the keys
//$string=$timestamp.$keys;
//Generate MD5 digest, also hash is faster than md5 function
//$md5=hash('md5', $string);
// create a new cURL resource


$ch = curl_init();
// set URL and other appropriate options
// Query Iron Man by passing value in name parameter
//http://gateway.marvel.com/v1/public/comics?ts=1&apikey=43634ab5f5b50782274a50ec7e7d9811&hash=4761558e45170642234948dc70f24c20
//
curl_setopt($ch, CURLOPT_URL, "http://gateway.marvel.com/v1/public/comics?ts=1&apikey=43634ab5f5b50782274a50ec7e7d9811&hash=4761558e45170642234948dc70f24c20");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json')                                                                       
);   
// grab URL and pass it to the browser
 //Execute curl
$output= curl_exec($ch) ;//or die(curl_error()); 
//Format JSON output


 $teste =  str_replace('\\/', '/', $output);
// close cURL resource, and free up system resources


 $jsonobj = json_decode($output);
 //$content   = file_get_contents($output);
 $jsonarray = json_decode($output,true);



$data = $jsonarray['data'];
$results = $jsonarray;



//print_r($data['results']);

function img(){
$i+=1;
	$img = $data['results'][$i]['thumbnail']['path'].'.jpg';
	$i++;

	return $img;
}




$title = $data['results'][0]['title'];






?>