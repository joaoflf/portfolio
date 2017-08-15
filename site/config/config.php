<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/
c::set('panel.install', true);
c::set('license', 'put your license key here');
c::set('plugin.ga.id', 'UA-104371707-1');
/*

---------------------------------------
Theme Configuration
---------------------------------------

*/

// c::set('feed.postNumber', 10);
// c::set('disqus.shortname', 'your-disqus-shortname');
// c::get('google-analytics.tackingid', 'UA-XXXXXXXX-X');

c::set('blog.postPerPage', 3);
c::set('aristotheme.widget', true);

c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'EN',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  )
));

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

