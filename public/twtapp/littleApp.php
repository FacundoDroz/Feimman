<?php
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
/*
$settings = array(
'oauth_access_token' => "YOUR_OAUTH_ACCESS_TOKEN",
'oauth_access_token_secret' => "YOUR_OAUTH_ACCESS_TOKEN_SECRET",
'consumer_key' => "YOUR_CONSUMER_KEY",
'consumer_secret' => "YOUR_CONSUMER_SECRET"
);
*/

$settings = array(
'oauth_access_token' => "1064149057-yr366MKQMHNJ4NH4KCcdtBlE58JfpLLZgVA6nTu",
'oauth_access_token_secret' => "px1HqsQ75SB0yUZh25ffTR2nq2xpXTwqIYBzDpSPMr0",
'consumer_key' => "usbce2YHSEwmkLouKDhygA",
'consumer_secret' => "RVgpvenz4BYMYxf02jeLqZ7TopGhWIkLkvZw8Jlqw"
);



//$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$url = "https://api.twitter.com/1.1/";

$requestMethod = "GET";
if (isset($_GET['user'])) {$user = $_GET['user'];} else {$user = "iagdotme";}
if (isset($_GET['count'])) {$user = $_GET['count'];} else {$count = 5;}

$getfield = '?screen_name=$user&count=$count';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);

var_dump($string);
die();
foreach($string as $items)
    {
        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
    }
?>