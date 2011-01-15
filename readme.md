# EMAIL TEMPLATE for WOLF CMS

Full installation and usage instructions are available at [Project 79][0].

## Usage

[Brief overview - see Documentation for full instructions]

1. Enable plugin: 
   - unzip archive, rename "wolf_email_contact" to "email_contact" (remove "wolf_");
   - copy the "/email_contact" directory with ALL its contents to your /wolf/plugins/ directory;
   - go to the Administration > Plugins page, and check the "Enabled" box;
   - FULL instructions are now given from the Email Template link in the Admin page.
2. Create page for form (e.g., "Contact").
3. Create child of that page for template (e.g. "Template"), with
   Layout set to "-none-" and Page Type set to "Email template", 
   and Status set to "Hidden".
4. Create sibling to Template for Success message (set to "Hidden").
5. Create sibling to Template for Fail message (set to "Hidden").

## Development Roadmap/Wishlist

- add error checking (non-destructive)
- i18n for text strings
- enable auto-create of pages/system

## Changelog

0.3.0 - 2010mmdd

+ enhance documentation
+ add security checks to plugin files
+ add "honeypot" spam trap

## History

This plugin was originally created by [Mika Tuupola for Frog CMS][1]. After
Wolf CMS forked from Frog, development of this plugin ceased. With the 
permission of the original author, development of Email Template for Wolf
began in June 2010.

In fact, since there was no Frog-specific code in the plugin, there was
nothing to "port"! But Email Template is an excellent base from which to
extend this useful system.

[0]: http://project79.net/projects/email-template
[1]: http://www.appelsiini.net/projects/email_template
