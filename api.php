<?php
header('Content-type: text/javascript');
$key = "AIzaSyB6g2cfcRB1MOmonsfsHGl9CeRkQmaH2fM";


  if(isset($_GET['lat']) && isset($_GET['lon'])){
    $lat = $_GET['lat'];
    $lon = $_GET['lon'];
  }

$ch = curl_init();

function get_request($url){

global $ch;

  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

    if ($response === false) {
         throw new Exception(curl_error($ch), curl_errno($ch));
     }

return $response;

}

if(isset($_GET['next_page_token'])){
$pagetoken = $_GET['next_page_token'];

  $url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?key='.$key.'&pagetoken='.$pagetoken;
  echo get_request($url);

exit;
}


if( isset($_GET['city']) ){



  $city = $_GET['city'].$_GET['state'];

  $url = "https://maps.googleapis.com/maps/api/place/findplacefromtext/json?key=$key&input=$city&inputtype=textquery&fields=geometry&language=en";


  $response = json_decode( get_request($url) )->candidates[0]->geometry->location;

  $lat =$response->lat;
  $lon = $response->lng;



}

  $url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?key='.$key.'&location='.$lat.','.$lon.'&radius=33000&type=bar';



  $response = get_request($url);


  echo( $response );
  curl_close($ch);
