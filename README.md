# Synopsis

Checkmate Vivus is an events plus social network designed to provide a seamless way of socialising via events. This documentation has been fully documented to our knowledge to help both organisers, attendees, companies and developers get the best experience from our platform. If you need further help in any section please email support@checkmateconcevoir.com and we would guide you through resolving any issues.

# Getting started
This documentation assumes you already have an API access token or key, if you don't have one login in to [Vivus](https://www.checkmateconcevoir.com/vivus/login?redirectUrl=interface/home?ei=0&promoter=social) under setting and access your access token. An example of making a query using php is shown below:

    $action = "ActionType";
    $key = "AccessToken";
    $username = "Username";
    $ch = curl_init("https://www.checkmateconcevoir.com/vivus/interface/API/public/$action/$key/$username");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);

The `$action`, `$key`, `$username` are they key parameters needed in making queries array:

* `$action` - e.g eventlist, analytics etc states the information you would like to perform.
* `$key` - This is your unique identifier which can be found under settings. For public use you can use 'key' but access may be restricted.
* `$username` - This states whose information you would like to access (in most cases it is the information tailored to your API).

# Contributors

To be part of the checkmate team please send your cv to recruit@checkmateconcevoir.com to get started an be one of our official developers, due to the high volume of applicants we may take a few days to reply.

# License

The codes and all related text in this documentation remains an intellectual property of Checkmate Concevoir and is not meant to be copied, modified and sold in whole or in part without perimission expressely granted by Checkmate Conceovoir. To get a license please email support@checkmateconcevoir.com or visit checkmateconcevoir.com to request a licence.
