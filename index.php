<?php

/*
 * Email Template - Frog CMS behavior for Wolf
 *
 * Copyright (c) 2008-2009 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   http://www.appelsiini.net/
 */

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

Plugin::setInfos(array(
    'id'          => 'email_template',
    'title'       => 'Email template', 
    'description' => 'Provides mailer backend to your forms.', 
    'version'     => '0.2.1',
    'author'      => 'Mika Tuupola',
    'license'     => 'MIT',
    'update_url'  => 'http://www.appelsiini.net/download/frog-plugins.xml',
    'website'     => 'http://www.appelsiini.net/'
));

Behavior::add('Email_template', 'email_template/email_template.php');
