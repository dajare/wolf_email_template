<?php

/* **
 * Email Template - Wolf CMS behavior
 *
 * Copyright (c) 2008-2009 Mika Tuupola
 * Copyright (c) 2010 David Reimer
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   http://adajer.byethost5.com/
 *
 * Based on the Frog CMS plugin by Mika Tuupola
 *   http://www.appelsiini.net/
 *
 ** */


/* **
 * NOTE THAT THE SECURITY MEASURE BELOW REQUIRES WOLF
 * VERSION THAT IS > r150, WHICH WAS POST-0.6.0 RELEASE
 ** */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

Plugin::setInfos(array(
    'id'          => 'email_template',
    'title'       => 'Email template', 
    'description' => 'Provides mailer backend for your forms.', 
    'version'     => '0.3.0',
    'author'      => 'Mika Tuupola & David Reimer',
    'license'     => 'MIT',
    'require_wolf_version' => '0.6.0',
    'update_url'  => 'http://subversion.assembla.com/svn/wolf_tools/trunk/xml/plugin_versions.xml',
    'website'     => 'http://adajer.byethost5.com/'
));

Behavior::add('Email_template', 'email_template/email_template.php');

Plugin::addController('email_template', __('Email Template'), 'administrator', false);
