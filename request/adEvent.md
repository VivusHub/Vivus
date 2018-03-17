# Synopsis 
We heard, we listened and we are came up with a solution! We understand we 
may not be able to track each visit to your site and organisers may give ambiguous 
result. To combat this this js file helps to track visits to your website.

# What does the js file do? Magic! 
It tracks website visits and compares them to the location of the user
and the time frame of the event or your ad campaign, yeah it's black mirror all over again!

# Code
Place the code below in your website and you are done
```
var key = 'YOUR_API_KEY';
var requestType = 'adEvent';

var xhttp = new XMLHttpRequest(); 
xhttp.onreadystatechange = function(){
   if (xhttp.readyState == 4 && xhttp.status == 200) {
      /* Perform additional setup or respond request as required*/
  };
  xhttp.open("GET", "https://www.checkmateconcevoir.com/vivus/interface/API/public2/k=" + a + "&t=" + requestType, true);
  xhttp.send();
}
```
# LICENSE
Copyright of Checkmate Concevoir 2017 - Present. All rights reserved.
This file falls under our 'Commercially available contents'
terms of use and is subjected to Vivus terms and conditions
https://www.checkmateconcevoir.com/vivus/interface/terms
