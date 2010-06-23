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
 * Credit: Email Template is built on components of the Skeleton plugin 
 */

?>

<h1><?php echo __('Documentation'); ?></h1>

<h2>Introduction</h2>

<p>If you are reading this documentation we can safely assume you have installed and enabled the Email Template plugin! The instructions below describe the steps required to make it work.</p>

<p>The <strong>Email Template</strong> plugin extends the Wolf CMS "behavior" system. It requires setting up the <strong>form page</strong>, and adding to it three child pages: one for your <strong>email template</strong> itself, and two for <strong>responses</strong> messages (success, and fail).</p>

<p>These instructions assume you are setting up a contact form. You can of course make adjustments if you are using Email Template for other purposes.</p>

<h2>1. The Mail form</h2>

<p>Create a new page as a child of the root (Homepage), and call it "Contact". Set the filter to "-none-", and copy the following text into the body of the page:</p>

<pre style="padding:4px;background-color:#eee;">
&lt;div id="emailform">
&lt;p>&lt;form method="post" action="/contact/template&lt;?php echo URL_SUFFIX; ?>">
&lt;p>&lt;label for="name">Name:&lt;/label> &lt;input name="name" type="text" />&lt;/p>
&lt;p>&lt;label for="email">Email:&lt;/label> &lt;input name="email" type="text" />&lt;/p>
&lt;p>&lt;label for="subject">Subject:&lt;/label> &lt;input name="subject" type="text" />&lt;/p>
&lt;p>&lt;label for="message">Message:&lt;/label>&lt;textarea name="message">&lt;/textarea>&lt;/p>
&lt;br />
&lt;p class="trip">&lt;input name="trip" type="text" />&lt;/p>
&lt;input name="success" value="/contact/success&lt;?php echo URL_SUFFIX; ?>" type="hidden" />
&lt;input name="failure" value="/contact/fail&lt;?php echo URL_SUFFIX; ?>" type="hidden" />
&lt;p class="submit">&lt;input type="submit" value="Send" />&lt;/p>
&lt;/form>
&lt;/div>
</pre>

<p>Save the page.</p>

<h2>2. The Email template</h2>

<p>Create a new page as a child of your new Contact page, and call it "Template". Use the following settings for the page:</p>

<ul>
<li><strong>Page Layout</strong>: none</li>
<li><strong>Page Type</strong>: Email template</li>
<li><strong>Text filter</strong>: -none-</li>
</ul>

<p>Copy the following text into the body of the page:</p>

<pre style="padding:4px;background-color:#eee;">
To: Me &lt;myname@mymail.com>
From: &lt;?php print $_POST['name']; ?> &lt;&lt;?php print $_POST['email']; ?>>
Subject: &lt;?php print $_POST['subject']; ?> [Wolf Contact]

1. CONTACT INFO

Name: &lt;?php print $_POST['name']; ?>

Email: &lt;?php print $_POST['email'] . "\r"; ?>

2. MESSAGE

&lt;?php print $_POST['message']; ?>

--
Sent by &lt;?php print $_SERVER['REMOTE_ADDR']; ?>
</pre>


<p>Make sure you put the email address you want the form sent to in the first line. You can also edit the "[Wolf Contact]" identifier in the subject line.</p>

<p>Set the page Status to "<strong>Hidden</strong>", and save the page.</p>


<h2>3. Response messages</h2>

<p>Create two more "child" pages to Contact: call one "Success", and the other "Fail". (You can of course change these names, but then you will also need to adjust the page name values given in the form in step #1). Put whatever appropriate messages you want your users to see under those two conditions.</p>

<p><strong>Make sure you set the status of both response pages to "Hidden".</strong></p>


<h2>4. Add CSS rules</h2>

<p>You will probably want to have style rules for your form. One option is given below, but one particular CSS instruction is <strong>required</strong>. You will notice the form created in step #1 has this line:</p>

<pre style="padding:4px;background-color:#eee;">
&lt;p class="trip">&lt;input name="trip" type="text" />&lt;/p>
</pre>

<p>This is a "honeypot" field; since it is hidden, only a "robot" would fill in a value. Any such message is simply killed, giving some simple but effective spam prevention.</p> 

<p>Include the following lines in your site's CSS file to hide it, and style your form:</p>

<pre style="padding:4px;background-color:#eee;">
/* -------------------- 
 * Email form styling
 ------------------- */   

#emailform .trip {
  display:  none;
  visibility: hidden;
}
#emailform label {
  width:  95px;
  display:  inline-block;
  vertical-align: top;
  clear: both;
}
#emailform input.text, #emailform textarea {
  width:  400px;
  padding: 2px;
}
#emailform textarea {
  height:  115px;
}
#emailform input.submit {
  display: block;
  margin-left: 250px;
  width:  auto;
}
</pre>

<p>The <strong>first</strong> instruction is the one needed to hide the "honeypot" field.</p>

<p style="padding:4px;background-color:#cfc;"><strong>Your Email Template system is now ready for use.</strong></p>
