lakshya
=======



Media Uploads
===
[WP Read-Only](http://wordpress.org/extend/plugins/wpro/) plugin is included in the repository allowing the use of [S3](http://aws.amazon.com/s3/) for media uploads.

1. Activate the plugin under 'Plugins', if not already activated.
2. Input your Amazon S3 credentials in 'Settings'->'WPRO Settings'.


Usage
========

* Because a file cannot be written to Heroku's file system, updating and installing plugins or themes should be done locally and then pushed to Heroku.
* To run WordPress locally on Mac OS X try [MAMP](http://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP).



Custom Domains
==============

Heroku allows you to add custom domains to your site hosted with them.  To add your custom domain, enter in the follow commands.

    $ heroku domains:add www.example.com
    > Added www.example.com as a custom domain name to myapp.heroku.com

You'll also want to cover the non "www" side of the url.

    $ heroku domains:add example.com
    > Added example.com as a custom domain name to myapp.heroku.com

Once Heroku recognizes your custom domain(s) you'll then need to setup separate DNS A records for the following ip addresses to point to your domain:

    75.101.163.44
    75.101.145.87
    174.129.212.2

Once the DNS A records propagate, then simply test out your change by hitting the url in the browser to make sure you are good to go.  If you are in need of cheap DNS hosting then I would recommend [DNSimple](https://dnsimple.com/r/571e28804df06f).

The last step is updating your WordPress installation to recognize the new domain.  You'll need to open up the WordPress Admin Dashboard and go to Settings --> General.  From there just update the URL for the WordPress address and you're done.

If you find yourself running into problems, there is a guide posted in the Heroku Docs which can be found [here](https://devcenter.heroku.com/articles/custom-domains).
