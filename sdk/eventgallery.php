
   $actionType = "gallery";
   $key = "key"
   $username = "demo";
   
   $ch = curl_init("https://www.checkmateconcevoir.com/vivus/interface/API/public/ $actionType/$key/$username");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   $result = curl_exec($ch);

   // Set the parameters for arrays
   $id = array();
   $title = array();
   $image = array();
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
       if(is_array($val)) {
           // echo "$x $key:\n";
           //echo $x;
       } 
       else {
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

   // Then loop through them
   for ($x = 0; $x < $arraySize; $x++) {

   echo("<li><a href='#'><img class='img-responsive' width='300' height='200'
   src='" . $image[$x] . "' alt='checkmate-vivus-api-provided-images'><h3>" . $title[$x] . "</h3></a></li>");

   }
