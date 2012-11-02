This is an example on how to the configure the very **basics of a Magento
extension** (extension initialisation, blocks, controllers, event observers,
helpers, installation/upgrade scripts, models, translations).

Please understand that the goal of this extension is not to show advanced usages
(rewrites of blocks/controllers/helpers/models, backend modifications, resource
models, ...) or to demonstrate solutions for specific problems.

How to use
==========

You can use this as a starting point or learning resource for your own
extension.

Please replace these placeholders with your own information everywhere:

-   "Emzee": this is the vendor name. Use something like your personal,
    organisation or company name. This could be the namespace for all of your
    extensions.

-   "ExampleExtension": this is the extension name. Use a name that clearly
    states what your extension does.

Use only the parts of the configuration and the files that you really need. I.e.
if you don't need a controller in your extension, then don't configure a
controller and don't add a controller file.

Installation
============

If you want to include this extension in a Magento installation for testing, you
can either copy the `app` directory to your Magento installation or you use the
excellent tool modman (<https://github.com/colinmollenhour/modman>) by Colin
Mollenhour.


