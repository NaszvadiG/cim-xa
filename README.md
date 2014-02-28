*CIM-ACCELERANT [A.K.A. CIM-XA]*
==============================

A distribution, by Titanium Opensystems, l.c., including the popular CodeIgniter framework (Version 2.1.4) and many extensions. 
You may find this distribution helpful if your situation includes one or more of the following:

- You need PDO for cross-DBMS compatibility [Idiorm] 
- You need easy-to-use support for SQL prepared statements [Idiorm]
- You need or simply prefer a more mainstream ORM approach {Idiorm, optionally, Paris]
- You need a fully RESTful server implementation capability*
- You need to integrate with JavaScript or a JS MVC framework**
- You need simple template inheritance without messy compile steps [PHPTI]
- You need simple templates that auto-escape output [Savant3]
- You need complex templates -- themes, modules, partial views [CI-Template]
- You need web analytics done your way [Piwik]
- You need login/authorization [a provided CI example or Zend]
- You need a very quick yet theme-able CRUD constuction tool [Grocery]
- You need MongoDB support 
- You need strong Excel data support [PHPExcel]
- You need a basic PHP rule engine [PHPRuler]
- You need a job queue facility [Celery + AmqPHP]
- You need debugging via Chrome Console {PHPChrome]
- You need a cURL library [PHPcURL]
- You need to send HTML email [Zend]
- You need to format HTML email or other non-browser views [Savant]***

 *see <a href="https://github.com/sfthurber/CodeIgniter-AngularJS-App">sample angularjs/CodeIgniter-AngularJS application</a>; see also 
 <a href="http://www.ng-newsletter.com/posts/angular-on-mobile.html">The Definitive Guide to Angular on Mobile</a>. 

 **ie: Ember loads and instantiates Javascript controllers based upon which CI controller is active and 
passes information from PHP to your Javascript without printing data into the DOM. From there you 
can also launch into a larger JS framework such as Angular.

 ***If you also need a css inliner, see: beaker.mailchimp.com/inline-css

Intro
-----------------

This distribution includes zero-compilation, object-oriented data and presentation layers together with Bootstrap 3.0 and many themes, 
supports SQLite, MySQL, and PostgreSQL [with prepared statements through PDO] and also includes the Grocery [CRUD], PHPExcel and Zend libraries 
[auth, mail, permissions, etc., loadable and usable as if they were CodeIgniter libraries], as well as ChromePHP [for testing] 
and PHPTI for simple painless template inhertiance. MongoDB support is included using CodeIgniter active record systax [i.e.: not Idiorm]. 
This distribution stands on the shoulders of some PHP giants including Ellis Labs (CodeIgniter), Jamie Matthews (Paris, Idiorm), 
Paul M. Jones (Savant), Zend(Zend libraries), Adam Shaw (phpti), Alex Bilbie (MongoDB library) and others. 

Some Useful External Resources
-----------------

<a href="http://ellislab.com/codeigniter/user-guide/toc.html">Documentation for CodeIgniter</a>

<a href="https://github.com/philsturgeon/codeigniter-restserver">RESTful Server Tutorial for CodeIgniter by Phil Sturgeon</a>

<a href=http://stackoverflow.com/questions/14994391/how-do-i-think-in-angularjs-if-i-have-a-jquery-background?rq=1">Why 
you may need a JS MVC framework [see the first answer for an excellent introduction]</a>

<a href="http://idiorm.readthedocs.org/en/latest/">Documentation for Idiorm Object Relational Mapper</a>

<a href="http://paris.readthedocs.org/en/latest/">Documentation for Paris Active Record [Optional] Add-on for Idiorm</a> 

While Paris is included in this distribution it is not necessary to use for the database layer--it merely provides an alternative 
abstraction. The sample code in application/controllers/songs.php uses Idiorm only.
SHOULD I USE IDIORM ALONE OR IDIORM+PARIS? <a href="http://j4mie.github.io/idiormandparis/">See the Idiorm and Paris story here</a>

<a href="http://phpsavant.com/docs/">; and documentation for [optional] Savant Templating</a>; see also: 
<a href="http://devzone.zend.com/1542/creating-modular-template-based-interfaces-with-savant/">this article</a>. 

While Savant is included in this distribution, it is not mandatory to use it for presentation -- CodeIgniter views may be used. 
The sample code in application/controllers/site.php has examples of CI and Savant views. If used, CodeIgniter views are located 
in the usual directory. 

<a href="http://phpti.com/">Documentation for [optional] PHPTI Template Inheritance</a>. 

Job queue functionality requires enabling Python and is based on the following projeects: 
<a href="https://github.com/hussaintamboli/Celery-CI">Celery-CI</a> [housed in /application/libraries]
<a href="https://github.com/gjedeer/celery-php">Celery-PHP</a> 
<a href="http://www.php.net/manual/en/amqp.setup.php">AMQP</a> 
<a href="http://www.toforge.com/2011/01/run-celery-tasks-from-php/">Run Celery Tasks Article</a>

Installation Notes
-----

Libraries are housed in / or in /application/libraries, except as noted in the various README files in /. 
This distribution's configuration for CodeIgniter departs from the original as follows: 
- csrf_protection is set to: TRUE [CSRF protection may be turned off for a particular function, such as a web service, with: 
$CFG =& load_class('Config', 'core'); $CFG->set_item('csrf_protection', FALSE);] 
- index_page is set to: ' ' to support URLs without showing index.php and .htaccess is coded accordingly. 
- there is an optional auth system, using MY_Bouncer in application/core, which is bypassed for any class that doesn't 
extend MY-Bouncer. So For example, login.php can run without first logging in because class Login extends CI_Controller. 
But site.php cannot run [as-written] without first logging in because class Site extends MY_Bouncer.

Other considerations:
- If you use CI's Encryption class or CI's Session class you MUST set an encryption key.  See application/config/config.php
- this distribution's Savant departs from the original in that it assumes the path to templates is set to application/templates 
and the sample code reflects this assumption. 
- a database connection string configuration for Idiorm is located in application/config/idiorm.php which you may include in your 
controller constructor, otherwise Idiom expects it coded inline. This string must reflect your database server attributes as 
described in the Idiorm documentation. 
- to use CI models or Grocery CRUD requires defining CodeIgniter's database connection in application/config/database.php. 

Sample Code
-----------
THERE IS A SMALL SAMPLE CONTROLLER in application/controllers/site.php including examples of several forms of usage. There is also a 
sample controller for job queues in application/controllers/jobq.php.

LICENSE
-------
**THIS DISTRIBUTION IS LICENSED AS A COMPILATION WORK UNDER THE SAME TERMS AS SET FORTH IN 
<A HREF="http://ellislab.com/codeigniter/user-guide/license.html">THE CODEIGNITER LICENSE</A>. THE INDIVIDUAL COMPONENTS ARE SUBJECT TO THEIR 
RESPECTIVE LICENSES. ALL TRADEMARKS ARE THE PROPERTY OF THEIR RESPECTIVE OWNERS AND TITANIUM OPENSYSTEMS HAS NO AFFILIATION WITH ANY OF THEM. 
BY USING THIS DISTRIBUTION IN WHOLE OR PART YOU CONSENT TO ALL APPLICABLE LICENSE TERMS, INCLUDING WITHOUT LIMITATION, THIS PARAGRAPH.**

Optional Commercial Support
-------
Fee-based support and development work is available from Titanium Opensystems, l.c. -- 
<a href="//my-titaniumcloud.rhcloud.com">see the website here</a>.

