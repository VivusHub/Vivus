# Synopsis

Checkmate Vivus is an events plus social network designed to provide a seamless way of socialising via events. This documentation has been fully documented to our knowledge to help both organisers, attendees, companies and developers get the best experience from our platform. If you need further help in any section please email dev@checkmateconcevoir.com and we would guide you through resolving any issues.

# Getting started
This documentation assumes you already have an API access token or key, if you don't have one login to [Vivus](https://www.checkmateconcevoir.com/vivus/login?redirectUrl=interface/home?ei=0&promoter=social) under setting and access your access token. An example of making a query using php is shown below:

```
    $action = "ActionType";
    $key = "AccessToken";
    $username = "Username";
    
    // example url -> https://www.checkmateconcevoir.com/vivus/interface/API/public/eventlist/key/demo
    $ch = curl_init("https://www.checkmateconcevoir.com/vivus/interface/API/public/$action/$key/$username");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    
    // Set the parameters for arrays
    $id = array();
    $eventname = array();
    $description = array();


    // Clear json file and print it in text format
    // source [https://stackoverflow.com/questions/4343596/parsing-json-file-with-php]
    $jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($result, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

    // Used for looping an other actions as seen below
    // You can remove this section but this was widely
    // implemented by other developers
    $x = 0;

    // Loop through post provided by each outlet
    foreach ($jsonIterator as $key => $val) {
        if(is_array($val)) {} 
        else {
        if($key == "id"){
            array_push($id, $val);
        }
        if($key == "eventname"){
            array_push($eventname, $val);
        }
        if($key == "details"){
            array_push($description, $val);
        }
    }
        // Looping vars
        $x = $x + 1;
    }


    // array size of the news
    $arraySize = sizeof($id);

    // Then loop through them
    for ($x = 0; $x < $arraySize; $x++) {

    // To output results e.g eventname
    echo("<h3>" . $eventname[$x] . "</h3>");
    echo("<p>" . $description[$x] . "</p>");
    
    // Link to the event
    echo("<p><a href='https://www.checkmateconcevoir.com/vivus/interface/eventpage?ei="
    . $id[$x] . "'>Here</a></p>");
    }
    
```

The `$action`, `$key`, `$username` are the key parameters needed in making queries array:

* `$action` - This variable states what action you would like to perform and the information you may need.
    *
* `$key` - This is your unique identifier which can be found under settings, for public use you can use 'key' but access may be restricted.
* `$username` - This states whose information you would like to access (in most cases it is the information tailored to your API).

# Contributors

To be part of the Checkmate Vivus team please send your cv to recruit@checkmateconcevoir.com to get started and be one of our official developers, due to the high volume of applicants we may take a few days to reply.

# License

The codes and all related text in this documentation remains an intellectual property of Checkmate Concevoir and is not meant to be copied, modified and sold in whole or in part without perimission expressely granted by Checkmate Concevoir. 
