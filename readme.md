Plugin for YOURLS 1.6+: Custom Protocols

# What for

If the user is known, this plugin adds custom protocol `blah://` to authorized protocols.

If the user is unknown (using a public interface for instance) then this plugin restricts
authorized protocols to `http` and `https` only.

See [Public Shortening](https://github.com/YOURLS/YOURLS/wiki/Public-Shortening).

# How to

* In `/user/plugins`, create a new folder named `custom-protocols`
* Drop these files in that directory
* Go to the Plugins administration page and activate the plugin 
* Have fun

