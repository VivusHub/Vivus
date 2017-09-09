<?php

echo("<!-- Posts -->
<section class='posts'>");

// include the file containing the key and username for event listing
include_once("required.php");
$action = "eventlist";
    
    // example url -> https://www.checkmateconcevoir.com/vivus/interface/API/public/eventlist/key/demo
    $ch = curl_init("https://www.checkmateconcevoir.com/vivus/interface/API/public/" . $action . "/" . $key . "/" . $username . "");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    
    // Set the parameters for arrays to be used to save information from the api
    $id = array(); // unique identifier for the event
    $eventname = array(); // event name
    $description = array(); // brief description about the event
    $image = array(); // images
    $eventdate = array(); // eventdate


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
         if($key == "img"){
        array_push($image, $val);
        }
        if($key == "date"){
        array_push($eventdate, $val);
        }
    }
        // Looping vars
        $x = $x + 1;
    }


    // array size of the news
    $arraySize = sizeof($id);

    // Then loop through the array values
    // Other projects require some additional parameter
    // to be used later hence why this section has been
    // added year but you might want to consider placing 
    // this section at the top i.e previoud foreach loop
    for ($x = 0; $x < $arraySize; $x++) {

    // Output result
    echo("<article>
		<div>
			<span class='date'>" . $eventdate[$x] . "</span>
			<h2>" . $eventname[$x] . "</h2>
		</div>
		<a href='#' class='image fit'>
		 <img src='" . $image[$x] . "' alt='' /></a>
		 <p>" . substr($description[$x], 0, 200) . "
		<ul class='actions'>
		  <li>
		    <a href='https://www.checkmateconcevoir.com/vivus/interface/eventpage?ei=" . $id[$x] . "' class='button'>More</a>
		  </li>
		</ul>
	</article>");
    }
 
 echo("<!-- Posts -->
</section>");   

?>