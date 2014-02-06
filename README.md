CIM-ACCELERANT [A.K.A. CIM-XA]
==============================

A distribution, by Titanium Opensystems, l.c., including the popular CodeIgniter framework and many extensions. You may find this 
distribution helpful if your situation includes one or more of the following:
- You need PDO for cross-DBMS compatibility or HipHopVM [HHVM] compatibility 
- You need HTML email 
- You need login/authorization 
- You need support for SQL prepared statements 
- You simply prefer a more mainstream ORM approach
- You need a very quick CRUD system [with one or more cruds per page]
- You need MongoDB support [FoundationDB coming soon]
- You need strong Excel data support
- You need a powerful rule engine
- You need a job queue facility [i.e.:batch/asynchronous processing]
- You need debugging via Chrome Console
- You need straightforward template inheritance
- You need a cURL library
- You need phpseclib [for more security choices]

This distribution includes 100% PHP, zero-compilation, object-oriented data and presentation layers [CodeIgniter views remain usable if desired], 
supports SQLite, MySQL, and PostgreSQL [with prepared statements through PDO] and also includes the Grocery [CRUD], PHPExcel and Zend libraries 
[auth, mail, permissions, etc., loadable and usable as if they were CodeIgniter libraries], as well as ChromePHP [for testing] 
and PHPTI for simple painless template inhertiance. MongoDB support is included using CodeIgniter active record systax [i.e.: not Idiorm]. 
This distribution therefore stands on the shoulders of some PHP giants including Ellis Labs (CodeIgniter), Jamie Matthews (Paris, Idiorm), 
Paul M. Jones (Savant), Zend(Zend libraries), Adam Shaw (phpti), Alex Bilbie (MongoDB library) and others. 

Useful External Resources
-----------------
<a href="http://ellislab.com/codeigniter/user-guide/toc.html">Documentation for CodeIgniter</a>

<a href="http://idiorm.readthedocs.org/en/latest/">Documentation for Idiorm Object Relational Mapper</a>

<a href="http://paris.readthedocs.org/en/latest/">Documentation for Paris Active Record [Optional] Add-on for Idiorm</a> While 
Paris is included in this distribution it is not necessary to use for the database layer--it merely provides an alternative 
abstraction. The sample code in application/controllers/songs.php uses Idiorm only.
SHOULD I USE IDIORM ALONE OR IDIORM+PARIS? <a href="http://j4mie.github.io/idiormandparis/">See the Idiorm and Paris story here</a>

<a href="http://phpsavant.com/docs/">Documentation for [optional] Savant Templating</a> and see also: 
<a href="http://devzone.zend.com/1542/creating-modular-template-based-interfaces-with-savant/">this article</a>. 
While Savant is included in this distribution, it is not mandatory to use Savant for presentation -- CodeIgniter views may be used. 
The sample code in application/controllers/songs.php has an example of each type of view. If used, CodeIgniter views are located 
in the usual directory. To use the PHPTI inheritance features see the <a href="http://phpti.com/">PHPTI Template Inheritance Site</a>. 
Job queue functionality is based on the following projeects: 
<a href="https://github.com/hussaintamboli/Celery-CI">Celery-CI</a> [housed in /application/libraries]
<a href="https://github.com/gjedeer/celery-php">Celery-PHP</a> 
<a href="http://www.php.net/manual/en/amqp.setup.php">AMQP</a> 
<a href="http://www.toforge.com/2011/01/run-celery-tasks-from-php/">Run Celery Tasks Article</a>

Support
-------
Fee-based support and development work is available from Titanium Opensystems, l.c. -- <a href="//tinyurl.com/dbmsmax">see the website here</a>.

LICENSE
-------
THIS DISTRIBUTION IS LICENSED AS A COMPILATION WORK UNDER THE SAME TERMS AS SET FORTH IN 
<A HREF="HTTP://ELLISLAB.COM/CODEIGNITER/USER-GUIDE/LICENSE.HTML">THE CODEIGNITER LICENSE</A>. THE INDIVIDUAL COMPONENTS ARE SUBJECT TO THEIR 
RESPECTIVE LICENSES. ALL TRADEMARKS ARE THE PROPERTY OF THEIR RESPECTIVE OWNERS AND TITANIUM OPENSYSTEMS HAS NO AFFILIATION WITH ANY OF THEM. 
BY USING THIS DISTRIBUTION IN WHOLE OR PART YOU CONSENT TO ALL APPLICABLE LICENSE TERMS, INCLUDING WITHOUT LIMITATION, THIS PARAGRAPH.

Notes
-----
Libraries are housed in / or in /application/libraries, except as noted in the various README files in /. 
This distribution's configuration for CodeIgniter departs from the original as follows: 1-csrf_protection is set to: TRUE
[CSRF protection may be turned off for a particular function, such as a web service, with: $CFG =& load_class('Config', 'core');
$CFG->set_item('csrf_protection', FALSE);] and also departs with: 
2-index_page is set to: ' ' to support URLs without showing index.php. This distribution's Savant departs from the original 
in that it assumes the path to templates is set to application/templates and the sample code reflects this assumption. 
A database connection string configuration for Idiorm is located in application/config/idiorm.php which you may include in your 
controller constructor, otherwise Idiom expects it coded inline. This string must reflect your database server attributes as 
described in the Idiorm documentation. To use Grocery CRUD requires defining CodeIgniter's database connection in 
application/config/database.php. IMPORTANT: If sessions are needed then PHP or Zend sessions should be used instead of CodeIgniter's. 
IMPORTANT: <a href="http://www.php.net/manual/en/session.security.php">See PHP session security details here</a>

Sample Code
-----------
THERE IS A SMALL SAMPLE CONTROLLER in application/controllers/site.php including examples of several forms of usage. There is also a 
sample controller for job queues in application/controllers/jobq.php.

