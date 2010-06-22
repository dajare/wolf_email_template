<?php

/*
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
 */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

Plugin::setInfos(array(
    'id'          => 'email_template',
    'title'       => 'Email template', 
    'description' => 'Provides mailer backend to your forms.', 
    'version'     => '0.3.0',
    'author'      => 'Mika Tuupola & David Reimer',
    'license'     => 'MIT',
    'update_url'  => 'http://www.appelsiini.net/download/frog-plugins.xml',
    'website'     => 'http://adajer.byethost5.com/'
));

Behavior::add('Email_template', 'email_template/email_template.php');
