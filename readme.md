Plugin for YOURLS 1.6+: Custom Procols

# What for

Out of the box, YOURLS 1.6 allows shortening URLs with various common protocols such 
as `ftp://`, `mailto:` or `facetime://`.

If you're running a public interface where anyone can shorten links, you will want to restrict
those protocols to, maybe, `http` and `https`.

You may also need to shorten URLs with a custom protocol for a particular need, say `leet://`.

This plugin shows how to manage the list of allowed protocols.

# How to

* In `/user/plugins`, create a new folder named `custom-protocols`
* Drop these files in that directory
* Go to the Plugins administration page and activate the plugin 
* Have fun

# Edit to suit your needs

This plugin is a sample. Fork it and customize it to suit your needs.