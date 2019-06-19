# Synopsis
Thanks for your interest in using some of the tools used by Checkmate Concevoir in send and scheduling tweets on the Checkmate Vivus platform. This file has has been dcoumented to the best of our knowledge to help you get started with services supporting the twitter API.

# Usage Overview
The following topics are covered:
* [Getting Started](#Getting-Started)
* [Twitter Developer](#Twitter-App)
* [Send tweets](#Send-Tweets)
* [Introducing Checkmate Vivus](#Checkmate-Vivus)
* [Congrats](#Congrats)
* [License](#License)

# Getting Started
To get started you'll need a few things, composer and the twitter PHP oauth. To install this, launch the command line on your Mac to connect to your server via ssh.

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

Once completed, download the PHP TwitterOAuth REST API. To do this, using composer run the following line of code in your command line
```
composer require abraham/twitteroauth
```
Now that you've set the foundation on your server, let's get you started in creating your twitter app.

# Twitter App
To create your twitter app visit [Twitter Developer](http://developer.twitter.com/en/apps), fill in the requirements and save the keys and tokens provided. This tokens should include your consumer api keys and access tokens which will be used to send and request data via twitter API.

# Send Tweets
To start sending tweets, create a php file in your project folder and write the following codes right at the top. 
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
That's all you need to get started in sending tweets. If you don't want be concerned about the nucks and crannies of the twitter api, you can make use of the Checkmate Vivus share API which requires less lines of code, 11 to be exact!

# Checkmate Vivus
Here at Checkmate Concevoir we've done the heavy duty so you can focus on your business. You can send or schedule tweets for later using our API, to do this connect your twitter to [Checkmate Vivus](https://www.checkmateconcevoir.com/vivus/interface/settings), request your API token and write the following lines of code in your file.

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
That's all! Simple right?

# Congrats
Congratulations you've successfully implemented the twitter API to your code. If you are running into problems feel free to email
dev@checkmateconcevoir.com or better yet you can make use of the checkmateconcevoir.com/vivus/ platform to send and schedule tweets.

# License
The codes and all related text in this doucment are licensed unde the BCD license.
Copyright 2019 Checkmate Concevoir ltd.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:
   * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
   * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
