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

/* Security measure */
if (!defined('IN_CMS')) { exit(); }

/**
 * Credit: EmailTemplateController is built on SkeletonController 
 */

class EmailTemplateController extends PluginController {

    public function __construct() {
        $this->setLayout('backend');
        $this->assignToLayout('sidebar', new View('../../plugins/email_template/views/sidebar'));
    }

    public function index() {
        $this->documentation();
    }

    public function documentation() {
        $this->display('email_template/views/documentation');
    }

}
