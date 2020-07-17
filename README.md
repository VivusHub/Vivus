# Synopsis
Vivus Hub family of apps is designed to help users create and share live experiences. This repo has been fully documented to the best of our knowledge to help both organisers and developers get the best experience from our platform. If you need further help please email us at support@vivushub.com.

- [Features](#features)
- [Usage Guide](#usage-guide)
 - [Get Key](#get-key)
 - [Create Event](#create-event)
 - [Event List](#event-list)
 - [Get Insight](#get-insight)
 - [Handle Ticket](#handle-ticket)
 - [Handle Promoter](#handle-promoter)
 - [Installation](#installation)
- [Endpoint Reference](#endpoint-reference) 
- [Credit](#credit)
- [License](#license)

## Usage Guide
The Graph API is HTTP-based, so it works with any languages that has an HTTP library such as cURL and more. An additional benefit is that you can use the Graph API library directly in your browser. 

### Get Key
This documentation assumes you already have an API access token or key. If you don't have one please log in to [Vivus](https://www.vivushub.com/vivus/interface/settings?ref=github). You'll find your token under settings.

### Create Event
Vivus Hub gives you high flexiblity when creating and updating your event. To update create or modify your event using our API you need the following arguments:
* `eventname` [String] - The name of your event.
* `organiser` [String] - The name of the organiser.
* `img` [String] - Url to the event image.
* `tag` [String] - Short promotion tag for your event.
* `desc` [String] - Description of the event.
* `startdate` [datetime] - Start time of the event, usually in dd-mm-yy H:i:s format.
* `enddate` [datetime] - End time of the event, usually in dd-mm-yy H:i:s format.
* `location` [String] - Location of the event short but descriptive e.g 1600 Pennsylvania Avenue NW Washington, D.C.
* `country` [String] - The country where the event is hosted.
* `rType` [String] -  Request type, this variable only accepts `delete`, `update`, `create`.
* `key` [String] - Your public API key.

When updating events, you are free to ignore variables you would like to miss out. Once a request is made, JSON data is returned back e.g 


```php 
// Endpoint Request
curl -i -X GET \
"https://www.api.vivushub.com/event"

// Response 
{
    'status': 'Success', // Other response include fail
    'id': 'event-id'
}
```

### Event List
To get a list of your events current hosted on Vivus Create, you need the following parameters:
* `id` [String] - ID of the event if you are updating or deleting an event.
* `username` [String] - Your username.
* `pgn` [String] - Offset the return event list by this number.
* `rType` [String] -  Request type, this variable only accepts `delete`, `update`, `create`.
* `key` [String] - Your public API Key.
```php
// Endpoint Request
curl -i -X GET \
"https://www.api.vivushub.com/list"

// Response 
{
    'status': 'success',
    'result': [
        {
            'id': '',
            'username': '',
            'eventname': '',
            'organiser': '',
            'location': '',
            'Country': '',
            'iso': '',
            'startdate': '',
            'enddate': '',
            'rType': ''
        }
    ]
}
```
For security reasons, ticket creation, updates and deletetion requires a different endpoints. 
### Get Insight
```php 
// Endpoint Request
curl -i -X GET \
"https://www.api.vivushub.com/insight"

// Response 
```

### Handle Ticket
```php 
// Endpoint Request
curl -i -X POST \
"https://www.api.vivushub.com/ticket"

// Response 
```

### Handle Promoter
Promoters allow you to reach a larger audience, we understand and we've leveraged this on Vivus. To handle promoters you need the following parameters: 
* `id` [String] - Id of the promoter you would like to update.
* `username` [String] - Username of the promoter.
* `eventid` [String] - Id of the event, this can be found from your event list.
* `amount` [String] - Amount you would like to pay the promoter. Take note, payouts are based on the currency of the event being hosted e.g if the tickets are priced in pounds the promoter will be paid in pounds.
* `rType` [String] - Request type, this variable only accepts `delete`, `update`, `create`, `list`.

```php 
// Endpoint Request
curl -i -X POST \
"https://www.api.vivushub.com/partners"

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
            'amount': '',
            'timeRegistered': ''
        }
    ]
}
```
## Installation
### PHP installation
The Vivus Hub SDK uses composer to manage dependencies. Visit the <a href="https://getcomposer.org/download/" target="_blank">composer documentation</a> to learn how to install composer.

Add the following to your `composer.json` file:

```json
{
    "require": {
        "vivus-hub/php-sdk": "1.0"
    }
}
```
then install it through composer:

```shell
php composer.phar install --no-dev
```

This SDK and its dependencies will be installed under `./vendor`.

## Endpoint Reference
Handle event:
```php 
// Endpoint Request
curl -i -X GET \
"https://www.api.vivushub.com/event"
```
Show hosted even:
```php
// Endpoint Request
curl -i -X GET \
"https://www.api.vivushub.com/list"
```
Handle insights:
```php 
// Endpoint Request
curl -i -X GET \
"https://www.api.vivushub.com/insight"
```
Handle tickets:
```php 
// Endpoint Request
curl -i -X POST \
"https://www.api.vivushub.com/ticket"
```
Partners: 
```php 
// Endpoint Request
curl -i -X POST \
"https://www.api.vivushub.com/partners"
```
## Credits
Vivus Hub API is owned and maintained by [Vivus Hub ltd](https://www.vivushub.com/vivus/?ref=github&adFor=events). You can follow us on Twitter at [VivusHub](https://www.twitter.com/vivushub).

## License
The codes and all related text in this documentation fall under [Vivus Hub commercially available contents agreement](https://www.vivushub.com/vivus/interface/terms) and in some cases the MIT License when applicable. In the event of a conflict between our terms and the MIT License, Vivus Hub terms take precedent.