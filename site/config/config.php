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

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('autogit.branch',         'live');
c::set('autogit.remote.name',    'kirbytest');
c::set('autogit.remote.branch',  'live'); // same as autogit.branch option
c::get('autogit.webhook.secret', 'jkergjjiopsbklj58efwef-75rfgw4');
c::get('autogit.webhook.url',    'autogit');
c::set('autogit.panel.user',     false);
c::set('autogit.user.name',      'movingwater');
c::set('autogit.user.email',     'info@movingwater.ch');
c::set('autogit.language',       'en');
c::set('autogit.translation', [
    'site.update'  => 'Changed site options',
    'page.create'  => 'Created page %s',
    'page.update'  => 'Updated page %s',
    'page.delete'  => 'Deleted page %s',
    'page.sort'    => 'Sorted page %s',
    'page.hide'    => 'Hid page %s',
    'page.move'    => 'Moved page %1$s to %2$s',
    'file.upload'  => 'Uploaded file %s',
    'file.replace' => 'Replaced file %s',
    'file.rename'  => 'Renamed file %s',
    'file.update'  => 'Updated file %s',
    'file.sort'    => 'Sorted file %s',
    'file.delete'  => 'Deleted file %s',
]);
