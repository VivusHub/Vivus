
# Synopsis
This terminal allows users publish event via the post method regardless of if the event has been posted before. A few values are required such as name of the event, date, time and the likes while a default value is set for some parameters if empty. No avoid spam and abuse of this channel we've made some changes to the mumber of calls you can make with a given concesion and perform crons to check if 2 events are exactly the same.

- key: Access key `Required`  
   Key to access Checkmate Vivus database, can no be empty and should be copied as is.
   
- og: Organiser Name `Required`  
    Name of the Organiser, value can not be empty and should be in a string format.

- en: Event Name `Required`  
    Name of the Event, value can not be empty and should be in a string format.

- et: Event Type `Optional`  
    Event type, value can be empty but should be in a string format.

- ta: Tickets available `Optional`  
    Number of Tickets available, value can be empty. A default value of 300 is used. 

- lc: Location `Required`  
    Location of the event is required, value can not be empty and should be in a string format.

- ct: Country `Required`
   Country where the event is being hosted, required and should be in a string format.

- tg: Tags `Optional`  
    Tag for the event, value can be empty but if parsed it should be in a string format.

- img: Image Url `Required`  
    Image url is required and should be parsed in url format.

- pr: Ticket Price `Required`  
    Ticket price is required and should be parsed in number format.

- cr: Currency `Optional`  
    Currency for the ticket price, value can be empty. Default value is British Pounds.

- dt: Date `Required`  
    Date of the event is required and should be parsed in date format e.g DD-MM-YYYY.

- tm: Time `Required`  
    Time of the event is required and should be parsed in time format e.g HH:MM:SS.
    
# Making Request
 Example of it's usage can be found below.
 ```
 // set initial variables
 $oraniserName ="The best organiser";
 $eventName = "Example Event";
 $eventType = "entertainment";
 $ticketAvailable = 200;
 $location = "Manchester, Checkmate Vivus ville";
 $tag = "Thw best event yet";
 $img = "http://exampleimg.com/example.jpg";
 $ticketPrice = "5";
 $currency = "BP";
 $eventDate = "14-05-2020";
 $eventTime = "22:-00";
 
 
 // url request
// url request
$url = 'http://checkmateconcevoir.com/vivus/interface/API/public/organisers/createEvent.php';

// Post data
$myvars = "key=" . $key . "&og=" . $organiserName . "&en=" . $eventName . "&em=" . $organiserEmail . 
          "&et=" .  $eventType . 
        "&ta=" .  $ticketAvailable . "&lc=" .  $location . "&tg=" . $tag . "&ds=" . $description .
         "&img=" . $imgUrl . "&pr=" .  $ticketPrice . "&cr=" . $currency . 
         "&dt=" . $eventDate . "&tm=" . $eventTime . "&ct=" . $country;

// make POST request
$ch = curl_init($url);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
 ```

# Response
The request above responds with an array containing the following
```
{
  "username": null,
  "status": null,
  "link": null,
  "id": null
}
```
- Username: Username of the person who performed this action.
- Status: Status to show errors or if your request was successful.
- Link: If the action was successful a link is provided.
- id: And an ID for support.
