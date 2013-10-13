<!DOCTYPE HTML SYSTEM>
    <head>
        <title>Prueba template</title>
        <meta charset="utf-8">
		<link href="styles/inlines.css" type="text/css" rel="stylesheet">
        <link href="styles/t1_core.bundle.css" type="text/css" rel="stylesheet">
		<link href="styles/t1_more.bundle.css" type="text/css" rel="stylesheet">

    </head>

<body>
<?php
require_once('TwitterAPIExchange.php');
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
'oauth_access_token' => "1064149057-yr366MKQMHNJ4NH4KCcdtBlE58JfpLLZgVA6nTu",
'oauth_access_token_secret' => "px1HqsQ75SB0yUZh25ffTR2nq2xpXTwqIYBzDpSPMr0",
'consumer_key' => "usbce2YHSEwmkLouKDhygA",
'consumer_secret' => "RVgpvenz4BYMYxf02jeLqZ7TopGhWIkLkvZw8Jlqw"
);
//$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
//$url = "https://api.twitter.com/1.1/statuses/home_timeline.json";
$url = "https://api.twitter.com/1.1/search/tweets.json";

$requestMethod = "GET";
//$getfield = '?screen_name=apabl&count=5';
$getfield = '?count=6&q=haci';
$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
->buildOauth($url, $requestMethod)
->performRequest(),$assoc = TRUE);
/*echo "<pre>";
print_r($string);
echo "</pre>";
*/

foreach($string['statuses'] as $items)
    {
		echo "<hr>";
		echo "<img class=\"avatar1\" src=\""                   . $items['user']{'profile_image_url'}. "\">";
		echo "<span class=\"username js-action-profile-name\">". $items['user']{'screen_name'}      . "</span><br>";
        echo "<span class=\"js-tweet-text tweet-text\">"       . $items['text']                     . "</span><br>";
		echo "<span class=\"stream-item-footer\">"             . $items['source']                   . "</span>, ";
		echo "<span class=\"time\">"                           . $items['created_at']               . "</span><br>";
    }

/*
foreach($string as $items)
    {
		echo "<hr>";
		echo $items['user']{'screen_name'}."<br />";
        echo $items['created_at']."<br />";
        echo $items['text']."<br />";
		echo $items['source']."<br />";
    }
	*/

?>

</body>