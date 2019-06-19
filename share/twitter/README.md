# Synopsis
Thanks for your interest in using some of the tools used by Checkmate Concevoir. This document aims to highlight how
Checkmate Concevoir sends tweets during signups. This file has has been dcoumented to the best of our knowledge to 
help you get started with services available.

# Usage Overview
The following topics are covered
* [Getting Started]()
* [Twitter Developer]()
* [Send tweets]()
* [Congrats]()
* [Introducing Checkmate Vivus]()
* [License]()

# Getting started
To get started you'll need a few things, composer and the twitter composer project on your server. To install this 
launch your command line connect to your host.

```
# Connect to your server using ssh
ssh -p 2222 yourusername@yourdomain.com

# Enter your password: 

# Install composer using the following code
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '48e3236262b34d30969dca3c37281b3b4bbe3221bda826ac6a9a62d6444cdb0dcd0615698a5cbe587c3f0fe57a54d8f5') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Once completed, download the PHP TwitterOAuth REST API. To do this, using composer run the following code in your command line
```
composer require abraham/twitteroauth
```
Now that you've set the foundation to send tweets from your server let's get setup the twitter API

# Twitter app
Create your twitter app on http://developer.twitter.com/en/apps, and get your save your keys and tokens. This tokens include
your consumer api keys and access tokens which will be used for request.

# Code To Send Tweets
To start sending tweets, create a your php file in yourproject folder and write the following codes right. 
```
// Import the class
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// Define vars
define('TWITTER_USERNAME', 'YOUR_USERNAME');
define('CONSUMER_KEY', 'YOUR_CONSUMER_KEY');
define('CONSUMER_SECRET', 'YOUR_CONSUMER_KEY');
define('ACCESS_TOKEN', 'YOUR_ACCESS_TOKEN');
define('ACCESS_TOKEN_SECRET', 'YOUR_ACCESS_TOKEN_SECRET');

// Make connection
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);

Prepare tweet variable
// If you are just posting a tweet 
    $tweetData = array(
    "status"=> "This is what I would like to tweet, Checkmate!",
    "in_reply_to_status_id"=> "@Checkmate_Co",
    );
        
// If you are using a media you'll have to upload it first then 
// apply it to a tweet. Replace the above tweet with
$media1 = $connection->upload('media/upload', ['media' => "https://urlToImage.png"]);
        
$tweetData = array(
"status"=> "This is what I would like to tweet, Checkmate!",
"in_reply_to_status_id"=> "@Checkmate_Co",
'media_ids' => implode(',', [$media1->media_id_string])
);

// Send tweet!
$content = $connection->get("account/verify_credentials");
    $status = $connection->post("statuses/update", $tweetData);
```

# Hello Checkmate Vivus
Here at Checkmate Concevoir we've done the heavy duty so you can focus on your business. You can send or schedule tweets for later using our API, to do this connect your twitter to [Checkmate Vivus](https://www.checkmateconcevoir.com/vivus/interface/settings) and request your API token. Once done, write the code in your file.

```
$url = 'https://www.checkmateconcevoir.com/vivus/interface/API/public/share';
    $myvars = "post=YOUR_TWEET&";
    $myvars .= "key=YOUR_KEY&";
    $myvars .= "type=twitter";
    
    /* 
    You can send image and schedule the post for later
    Uncomment this section to apply this vars
    $myvars .= "ptime=MM-DD-YYYY";
    $myvars .= "img=www.URLTOIMAGE.png";
    */
    
    $ch = curl_init($url);
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
```
That's all! Simple right!

# Congrats
Congratulations you've successfully implemented the twitter API to your code. If you are running into problems feel free to email
dev@checkmateconcevoir.com or better yet you can make use of the checkmateconcevoir.com/vivus/ platform to send and schedule tweets.

# License
The codes and all related text in this doucment are licensed unde the BCD license. Redistribution and use in source and
binary forms are permitted provided the copyright notive and this paragraphic is duplicated in all such forms, documentations,
advertising materials and the use acknowledges that the it was developed by Checkmate Concevoir ltd. Checkmate Concevoir may
not be used to endorse or products derived from this code without specific prior witter perfimssion from the authors of Checkmate
Concevoir ltd. This code is provided as is and without any express or implied warranties, including without limitation, the implied
warranties of merchantability and fitness for a particular purpose disclaimed. 
