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

More information about the `loading` attribute:
- Description: [https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img#attr-loading](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img#attr-loading).
- HTML Specification: [https://html.spec.whatwg.org/multipage/embedded-content.html#attr-img-loading](https://html.spec.whatwg.org/multipage/embedded-content.html#attr-img-loading).
- Currently the `loading` attribute is supported in the following browsers: [https://caniuse.com/#feat=loading-lazy-attr](https://caniuse.com/#feat=loading-lazy-attr).


## Configuration

### Initial setup the plugin

- [Download the latest version of the plugin](https://github.com/zero-24/plg_content_imagelazyloading/releases/latest)
- Install the plugin using `Upload & Install`
- Enable the plugin `Conent - ImageLazyloading` from the plugin manager

Now the inital setup is completed and the plugin is running.

### Option descriptions

## Update Server

Please note that my update server only supports the latest version running the latest version of Joomla and atleast PHP 7.0.
Any other plugin version I may have added to the download section don't get updates using the update server.

## Issues / Pull Requests

You have found an Issue, have a question or you would like to suggest changes regarding this extension?
[Open an issue in this repo](https://github.com/zero-24/plg_content_imagelazyloading/issues/new) or submit a pull request with the proposed changes.

## Translations

You want to translate this extension to your own language? Check out my [Crowdin Page for my Extensions](https://joomla.crowdin.com/zero-24) for more details. Feel free to [open an issue here](https://github.com/zero-24/plg_content_imagelazyloading/issues/new) on any question that comes up.

## Beyond this repo

This plugin is intended as backport for the lazyload features added in Joomla 4.0. 

## Special Thanks

David Jardin - @snipersister<br>
Felix Arntz - @felixarntz - https://github.com/WordPress/wp-lazy-loading

For giving the inspiration for the plugin and the input and feedback on the actual implementation. Thanks :+1:

## Joomla! Extensions Directory (JED)

This plugin can also been found in the Joomla! Extensions Directory: [ImageLazyloading by zero24](https://extensions.joomla.org/extension/imagelazyloading/)

## Release steps

- `build/build.sh`
- `git commit -am 'prepare release ImageLazyloading 1.0.x'`
- `git tag -s '1.0.x' -m 'ImageLazyloading 1.0.x'`
- `git push origin --tags`
- create the release on GitHub
- `git push origin master`

## Crowdin

### Upload new strings

`crowdin upload sources`

### Download translations

`crowdin download --skip-untranslated-files --ignore-match`
