# ImageLazyloading Plugin

This Joomla Plugin sets the lazyloading attribute to images and iframes.

## Features

This Joomla Plugin sets the lazyloading attribute to all images and iframes that passes the onContentPrepare Event to allow modern browsers to lazyload them.

More information about the `loading` attribute:
- Description: [https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img#attr-loading](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img#attr-loading).
- HTML Specification: [https://html.spec.whatwg.org/multipage/embedded-content.html#attr-img-loading](https://html.spec.whatwg.org/multipage/embedded-content.html#attr-img-loading).
- Currently the `loading` attribute is supported in the following browsers: [https://caniuse.com/#feat=loading-lazy-attr](https://caniuse.com/#feat=loading-lazy-attr).


## Configuration

### Initial setup the plugin

- [Download the latest version of the plugin](https://github.com/zero-24/plg_content_imagelazyloading/releases/latest)
- Install the plugin using `Upload & Install`
- Enable the plugin `Conent - ImageLazyloading` from the plugin manager
- (optional) Enable the option for iframes within the setting if desired

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

This plugin was intended as backport for the lazyload features added in Joomla 4.0 but where later replaced in the core by a more native integration. You can find more details on the differences at this magazine article: [Using native lazyloading on your website](https://magazine.joomla.org/all-issues/january-2021/using-native-lazyloading-on-your-website)

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
