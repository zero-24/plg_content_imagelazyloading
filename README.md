# ImageLazyloading Plugin

This Joomla Plugin sets the lazyloading attribute to images.

## Sponsoring and Donation

You want to support my work for the [development of my extensions](https://extensions.joomla.org/profile/profile/details/200189/) and my work for the [Joomla! Project](https://volunteers.joomla.org/joomlers/248-tobias-zulauf) you can give something back and sponsor me.

There are two ways to support me right now:
- This extension is part of [Github Sponsors](https://github.com/sponsors/zero-24/) by sponsoring me, you help me continue my oss work for the [Joomla! Project](https://volunteers.joomla.org/joomlers/248-tobias-zulauf), write bug fixes, improving features and maintain my extensions.
- You just want to send me an one-time donation? Great you can do this via [PayPal.me/zero24](https://www.paypal.me/zero24).

Thanks for your support!

## Features

This Joomla Plugin sets the lazyloading attribute to all images that passes the onContentPrepare Event to allow modern browsers to lazyload the images.

## Configuration

### Initial setup the plugin

- Download the latest version of the plugin: https://github.com/zero-24/plg_content_imagelazyloading/releases/latest
- Install the plugin using Upload & Install
- Enable the plugin from the plugin manager

Now the inital setup is completed and the plugin is running.

### Option descriptions

## Translations

This plugin is translated into the following languages:
- de-DE by @zero-24
- en-GB by @zero-24

You want to contribute a translation for an additional language? Feel free to create an Pull Request against the master branch.

## Update Server

Please note that my update server only supports the latest version running the latest version of Joomla and atleast PHP 7.0.
Any other plugin version I may have added to the download section don't get updates using the update server.

## Issues / Pull Requests

You have found an Issue or have an question / suggestion regarding the plugin, or do you want to propose code changes?
[Open an issue in this repo](https://github.com/zero-24/plg_content_imagelazyloading/issues/new) or submit a pull request with the proposed changes against the master branch.

## Beyond this repo

This plugin will be proposed as Plugin to the Joomla Core and will be part of the upcomming 4.0 Release. Please note that the core the plugin will be renamed to `plg_content_lazyload` and Joomla 4.0 core will ship with this plugin enabled by default. This plugin here acts as a backport for Joomla 3.

## Special Thanks

David Jardin - @snipersister - https://www.djumla.de/

For giving me the inspiration for the plugin and the feedback on the actual implementation. Thanks :+1:

## Joomla! Extensions Directory (JED)

This plugin can also been found in the Joomla! Extensions Directory: [ImageLazyloading by zero24](https://extensions.joomla.org/extension/imagelazyloading/)

## Release steps

- `build/build.sh`
- `git commit -am 'prepare release Lazyloading 1.0.x'`
- `git tag -s '1.0.x' -m 'Lazyloading 1.0.x'`
- `git push origin --tags`
- create the release on GitHub
- `git push origin master`
