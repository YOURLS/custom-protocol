# Plugin for YOURLS : Custom Protocols [![Listed in Awesome YOURLS!](https://img.shields.io/badge/Awesome-YOURLS-C5A3BE)](https://github.com/YOURLS/awesome-yourls/)

> This is an example plugin - build on it !

:bulb: This plugin requires YOURLS 1.6+

## What for

* If the user is known, this plugin adds custom protocol `blah://` to authorized protocols.
* If the user is unknown (using a public interface for instance) then this plugin restricts
authorized protocols to `http` and `https` only.

See [Public Shortening](https://docs.yourls.org/guide/advanced/public-shortening.html).

## How to

* In `/user/plugins`, create a new folder named `custom-protocols`
* Drop these files in that directory
* Edit this plugin to suit your needs
* Go to the Plugins administration page and activate the plugin 
* Have fun

