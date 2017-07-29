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

    // Used for looping as seen below
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
