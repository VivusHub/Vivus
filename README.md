# Synopsis
Vivus Hub family of apps is designed to helps users create and share live experiences. This repo has been fully documented to the best of our knowledge to help both organisers and developers get the best experience from our platform. If you need further help in any section please feel free to email us at support@vivushub.com.

- [Features](#features)
- [Usage Guide](#usage-guide)
 + [Get Key](#get-key)
 + [Create Event](#create-event)
 + [Event List](#event-list)
 + [Get Insight](#get-insight)
 + [Handle Ticket](#handle-ticket)
 + [Handle Promoter](#handle-promoter)
- [Endpoint Reference](#endpoint-reference) 
- [Credit](#credit)
- [License](#license)

## Usage Guide
### Get Key
This documentation assumes you already have an API access token or key, if you don't have one please login to [Vivus](https://www.vivushub.com/vivus/interface/settings?ref=github). You'll find your token under settings.


### Create Event
The graph API is HTTP-based, so it works with any languages that has an HTTP library such as cURL and more. An additional benefit is that you can use the Graph API library directly in your browser. 

To create an event you need the following parameters:
* `eventname` - The name of your event.
* `organiser` - The name of the organiser.
* `img` - Url to the event image.
* `tag` - Short promotion tag for your event.
* `desc` - Description of the event.
* `startdate` - Start time of the event, usually in dd-mm-yy H:i:s format.
* `enddate` - End time of the event, usually in dd-mm-yy H:i:s format.
* `location` - Location of the event short but descriptive e.g 1600 Pennsylvania Avenue NW Washington, D.C.
* `country` - The country where the eent is hosted.
* `rType` -  Request type, this variable only accepts `delete`, `update`, `create`.
* `key` - Your public API key.

When updating events, you are free to ignore variables you would like to miss out. Once request are made, json data is return back e.g 


```php 
// Endpoint Request
curl -i -X GET \
"https://www.vivushub.com/vivus/interface/API/public/event"

// Response 
{
    'status': 'Success', // Other response include fail
    'id': 'event-id'
}
```

### Event List
```php
// Endpoint Request
curl -i -X GET \
"https://www.vivushub.com/vivus/interface/API/public/list"

// Response 
```

### Get Insight
```php 
// Endpoint Request
curl -i -X GET \
"https://www.vivushub.com/vivus/interface/API/public/insight"

// Response 
```

### Handle Ticket
```php 
// Endpoint Request
curl -i -X POST \
"https://www.vivushub.com/vivus/interface/API/public/ticket"

// Response 
```

### Handle Promoter
Promoters allow you to reach a larger audience, we understand and we've leveraged this on Vivus. To handle promoters you need the following parameters: 
* `id` - Id of the promoter you would like to update.
* `username` - Username of the promoter.
* `eventid` - Id of the event, this can be found from your event list.
* `amount` - Amount you would like to pay the promoter. Take note, payouts are based on the currency of the event being hosted e.g if the the tickets are priced in pounds the promoter will be paid in pounds.
* `rType` - Request type, this variable only accepts `delete`, `update`, `create`, `list`.

```php 
// Endpoint Request
curl -i -X POST \
"https://www.vivushub.com/vivus/interface/API/public/partners"

// Create, Update, Delete
{
    'status': 'success',
    'promoter': 'username',
    'id': 'id'
}

// Listing
{
    'result': [
        {
            'id': '',
            'promoter': '',
            'amount': ''
            'timeRegistered': ''
        }
    ]
}
```
## Endpoint Reference
Handle event:
```php 
// Endpoint Request
curl -i -X GET \
"https://www.vivushub.com/vivus/interface/API/public/event"
```
Show hosted even:
```php
// Endpoint Request
curl -i -X GET \
"https://www.vivushub.com/vivus/interface/API/public/list"
```
Handle insights:
```php 
// Endpoint Request
curl -i -X GET \
"https://www.vivushub.com/vivus/interface/API/public/insight"
```
Handle tickets:
```php 
// Endpoint Request
curl -i -X POST \
"https://www.vivushub.com/vivus/interface/API/public/ticket"
```
Partners: 
```php 
// Endpoint Request
curl -i -X POST \
"https://www.vivushub.com/vivus/interface/API/public/partners"
```
## Credits
Vivus Hub API is owned and maintained by [Vivus Hub ltd](https://www.vivushub.com/vivus/?ref=github&adFor=events). You can follow us on Twitter at [VivusHub](https://www.twitter.com/vivushub) to get project updates or fork this repo.

## License
The codes and all related text in this documentation falls under [Vivus Hub Content and Commercially available contents licence agreement](https://www.vivushub.com/vivus/interface/terms) and in some cases the GNU when applicable. In the event of a conflict between our terms and the GNU license, Vivus Hub terms takes precedent.
