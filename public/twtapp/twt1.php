<?php
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "1064149057-yr366MKQMHNJ4NH4KCcdtBlE58JfpLLZgVA6nTu",
'oauth_access_token_secret' => "px1HqsQ75SB0yUZh25ffTR2nq2xpXTwqIYBzDpSPMr0",
'consumer_key' => "usbce2YHSEwmkLouKDhygA",
'consumer_secret' => "RVgpvenz4BYMYxf02jeLqZ7TopGhWIkLkvZw8Jlqw"
);
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";
$getfield = '?screen_name=facundodroz&count=2';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
echo "<pre>";
print_r($string);


/*foreach($string as $items)
    {
        echo $items['created_at']."<br />";
        echo $items['text']."<br />";
    }
    */echo "</pre>";
?>
