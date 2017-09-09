<?php

// include the file containing the key and username for event gallery and title
include_once("required.php");

echo("
<div class='id='intro''>
<h3 style='align: center'>Gallery</h3>
</div>
  <div class='row 50% uniform'>");

$ch = curl_init("https://www.checkmateconcevoir.com/vivus/interface/API/public/gallery/" . $key . "/" . $username . "");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

// Set the parameters for arrays
$id = array();
$title = array(); // title of the image
$image = array(); // url for the image
$description = array(); // image description

// Clear json file and print it in text format
// source [https://stackoverflow.com/questions/4343596/parsing-json-file-with-php]
$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($result, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

// Used for looping as seen below
$x = 0;

// Loop through post provided by each outlet
foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        // echo "$x $key:\n";
        //echo $x;
    } else {

        //echo "$x $key => $val\n";
        
        if($key == "id"){
        array_push($id, $val);
        }
        if($key == "title"){
        array_push($title, $val);
        }
        if($key == "imgUrl"){
        array_push($image, $val);
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

// break to prevent excessive output. 
// Checkmate Vivus currently produces 30-60 results.
// Visit our github page to get the latest release number.
if($x === 9){
    break;
    }

echo("<div class='4u'><span class='image fit'><img src='" . $image[$x] . "' alt='' /></span></div>");
}




?>