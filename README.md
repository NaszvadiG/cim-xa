*CIM-ACCELERANT [A.K.A. CIM-XA]*
==============================

A distribution, by Titanium Opensystems, l.c., including the popular CodeIgniter framework (Version 2.1.4) and many extensions. 
You may find this distribution helpful if your situation includes one or more of the following:
<li>You need phpseclib [for more security choices]</li>
<li>You need HTML email -- if you also need a css inliner, see: beaker.mailchimp.com/inline-css</li>
- You need PDO for cross-DBMS compatibility or HipHopVM [Idiorm] 
- You need support for SQL prepared statements [Idiorm]
- You need or simply prefer a more mainstream ORM approach {Idiorm, optionally, Paris]
- You need an integrated full-feature JavaScript MVC framework [Ember]
- You need templates with inheritance without compile steps [Ember or PHPTI]
- You need templates that auto-escape output [Ember or Savant3]
- You need web analytics done your way [Piwik]
- You need login/authorization [Zend]
- You need a very quick yet theme-able CRUD constuction tool [Grocery]
- You need MongoDB support 
- You need strong Excel data support [PHPExcel]
- You need a basic PHP rule engine [PHPRuler]
- You need a job queue facility [Celery]
- You need debugging via Chrome Console {PHPChrome]
- You need a cURL library [PPHPcURL]
- You need more security choices [PHPSecLib]
- You need HTML email [Zend]
-- if you also need a css inliner, see: beaker.mailchimp.com/inline-css

This distribution places CI's directory structure above the webroot. The assumed webroot is www but that name may be changed to fit the 
installation. The webroot contains CI's index.php and any non-CI content for the installation. CI's index.php contains path modifications 
to reflect the CI directory structure placement. All of this is done for security reasons. Ci's directory structure is otherwise undisturbed 
for eas of maintenance.
This distribution includes 100% PHP, zero-compilation, object-oriented data and presentation layers [CodeIgniter views remain usable if desired], 
supports SQLite, MySQL, and PostgreSQL [with prepared statements through PDO] and also includes the Grocery [CRUD], PHPExcel and Zend libraries 
[auth, mail, permissions, etc., loadable and usable as if they were CodeIgniter libraries], as well as ChromePHP [for testing] 
and PHPTI for simple painless template inhertiance. MongoDB support is included using CodeIgniter active record systax [i.e.: not Idiorm]. 
This distribution therefore stands on the shoulders of some PHP giants including Ellis Labs (CodeIgniter), Jamie Matthews (Paris, Idiorm), 
Paul M. Jones (Savant), Zend(Zend libraries), Adam Shaw (phpti), Alex Bilbie (MongoDB library) and others. 

Some Useful External Resources
-----------------

<a href="http://ellislab.com/codeigniter/user-guide/toc.html">Documentation for CodeIgniter</a>

<a href=http://stackoverflow.com/questions/14994391/how-do-i-think-in-angularjs-if-i-have-a-jquery-background?rq=1">Why 
you may need a JS MVC framework [see the first answer for an excellent introduction]</a>

<a href="http://idiorm.readthedocs.org/en/latest/">Documentation for Idiorm Object Relational Mapper</a>

<a href="http://paris.readthedocs.org/en/latest/">Documentation for Paris Active Record [Optional] Add-on for Idiorm</a> 

While Paris is included in this distribution it is not necessary to use for the database layer--it merely provides an alternative 
abstraction. The sample code in application/controllers/songs.php uses Idiorm only.
SHOULD I USE IDIORM ALONE OR IDIORM+PARIS? <a href="http://j4mie.github.io/idiormandparis/">See the Idiorm and Paris story here</a>

<a href="http://edmundask.github.io/codeigniter-twiggy/">Documentation for [optional] Twiggy Templating</a>.
<a href="http://phpsavant.com/docs/">; and documentation for [optional] Savant Templating</a>; see also: 
<a href="http://devzone.zend.com/1542/creating-modular-template-based-interfaces-with-savant/">this article</a>. 

While Twiggy and Savant are included in this distribution, it is not mandatory to use either for presentation -- CodeIgniter views may be used. 
The sample code in application/controllers/songs.php has an example of CI and Savant views. If used, CodeIgniter views are located 
in the usual directory. 

<a href="http://phpti.com/">Documentation for [optional] PHPTI Template Inheritance</a>. 

Job queue functionality requires enabling Python and is based on the following projeects: 
<a href="https://github.com/hussaintamboli/Celery-CI">Celery-CI</a> [housed in /application/libraries]
<a href="https://github.com/gjedeer/celery-php">Celery-PHP</a> 
<a href="http://www.php.net/manual/en/amqp.setup.php">AMQP</a> 
<a href="http://www.toforge.com/2011/01/run-celery-tasks-from-php/">Run Celery Tasks Article</a>

Notes
-----
Libraries are housed in / or in /application/libraries, except as noted in the various README files in /. 
This distribution's configuration for CodeIgniter departs from the original as follows: 
- csrf_protection is set to: TRUE[CSRF protection may be turned off for a particular function, such as a web service, with: 
$CFG =& load_class('Config', 'core'); $CFG->set_item('csrf_protection', FALSE);] 
- index_page is set to: ' ' to support URLs without showing index.php. 

Other considerations:
- IMPORTANT: <a href="http://www.php.net/manual/en/session.security.php">See PHP session security details here</a>. 
- if sessions are needed then PHP or Zend sessions should be used instead of CodeIgniter's. 
- If you use CI's Encryption class or CI's Session class you MUST set an encryption key.  See application/config/config.php
- this distribution's Savant departs from the original in that it assumes the path to templates is set to application/templates 
and the sample code reflects this assumption. 
- a database connection string configuration for Idiorm is located in application/config/idiorm.php which you may include in your 
controller constructor, otherwise Idiom expects it coded inline. This string must reflect your database server attributes as 
described in the Idiorm documentation. 
- to use Grocery CRUD requires defining CodeIgniter's database connection in application/config/database.php. 

Sample Code
-----------
THERE IS A SMALL SAMPLE CONTROLLER in application/controllers/site.php including examples of several forms of usage. There is also a 
sample controller for job queues in application/controllers/jobq.php and an example for Twiggy in application/controllers/twiggyTest.php.

LICENSE
-------
**THIS DISTRIBUTION IS LICENSED AS A COMPILATION WORK UNDER THE SAME TERMS AS SET FORTH IN 
<A HREF="http://ellislab.com/codeigniter/user-guide/license.html">THE CODEIGNITER LICENSE</A>. THE INDIVIDUAL COMPONENTS ARE SUBJECT TO THEIR 
RESPECTIVE LICENSES. ALL TRADEMARKS ARE THE PROPERTY OF THEIR RESPECTIVE OWNERS AND TITANIUM OPENSYSTEMS HAS NO AFFILIATION WITH ANY OF THEM. 
BY USING THIS DISTRIBUTION IN WHOLE OR PART YOU CONSENT TO ALL APPLICABLE LICENSE TERMS, INCLUDING WITHOUT LIMITATION, THIS PARAGRAPH.**

Support
-------
Fee-based support and development work is available from Titanium Opensystems, l.c. -- 
<a href="//my-titaniumcloud.rhcloud.com">see the website here</a>.

