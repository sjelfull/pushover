# Pushover plugin for Craft CMS

Send messages from Craft to Pushover

![Screenshot](resources/icon.png)

## Installation

To install Pushover, follow these steps:

1. Download & unzip the file and place the `pushover` directory into your `craft/plugins` directory
2. Install plugin in the Craft Control Panel under Settings > Plugins
3. The plugin folder should be named `pushover` for Craft to see it.

Pushover works on Craft 2.4.x and Craft 2.5.x.

## Pushover Overview

Pushover makes it easy to get real-time notifications on your Android, iPhone, iPad, and Desktop (Pebble, Android Wear, and Apple Watch, too!). Sign up at [pushover.net](https://pushover.net)

## Configuring Pushover

Copy pushover.php into Craft's config directory and add the necessary details below.

```php
<?php
return [
    // You can find this key in your account on Pushover.net
    'userKey' => ''
    // You have to create an app under Your Applications to get the API token
    'apiToken' => ''
];
```

## Using Pushover

```twig
{{ craft.pushover.send({
    title: 'Failed deployment
    message: 'Deployment to xxx.xxx.xxx.xx failed',
    sound: 'spacealarm',
    priority: 'emergency',
    date: now,
    url: 'https://site.com',
    urlTitle: 'Site',
    callback: 'https://callback.url/endpoint',
    retry: 60,
}) }}
```

For more information about the different options, [check the API docs](https://pushover.net/api).

### Supported option values:

*sound*
* pushover
* bike
* bugle
* cashregister
* classical
* cosmic
* falling
* gamelan
* incoming
* intermission
* magic
* mechanical
* pianobar
* siren
* spacealarm
* tugboat
* alien
* climb
* persistent
* echo
* updown
* none

*priority*
* lowest
* low
* normal
* high
* emergency

## Pushover Roadmap

* Update readme with more examples

Brought to you by [Superbig](https://superbig.co)
