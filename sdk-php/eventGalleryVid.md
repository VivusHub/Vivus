
```
$ch = curl_init("https://www.checkmateconcevoir.com/vivus/interface/API/public/eventvid/key/guildfordcasino");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

// Set the parameters for arrays
$id = array();
$eventid = array();
$VideoUrl = array();

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
        if($key == "eventid"){
        array_push($eventid, $val);
        }
        if($key == "videoUrl"){
        array_push($videoUrl, $val);
        }


    }
    
    // Looping vars
    $x = $x + 1;
}


// array size of the news
$arraySize = sizeof($id);

// Then loop through them
for ($x = 0; $x < $arraySize; $x++) {

echo("<!-- 4:3 aspect ratio -->
<div class='embed-responsive embed-responsive-4by3'>
  <iframe class='embed-responsive-item' src='" . $videoUrl[$x] . "'></iframe>
</div>");

}
```
