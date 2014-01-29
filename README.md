CIM-XA
======

A distribution, by Titanium Opensystems, l.c., of the popular CodeIgniter framework. 
This distribution includes modern alternative object-oriented data and presentation layers [CodeIgniter views remain usable if desired] 
and it currently supports SQLite, MySQL, and PostgreSQL.
It stands on the shoulders of some PHP giants:  
Ellis Labs (CodeIgniter), Jamie Matthews (Paris, Idiorm), Paul M. Jones (Savant), Zend(Zend libraries), and others. 

<a href="http://ellislab.com/codeigniter/user-guide/toc.html">Documentation for CodeIgniter</a>

<a href="http://idiorm.readthedocs.org/en/latest/">Documentation for Idiorm Object Relational Mapper</a>

<a href="http://paris.readthedocs.org/en/latest/">Documentation for Paris Active Record [Optional] Add-on for Idiorm</a>

<a href="http://phpsavant.com/docs/">Documentation for [optional] Savant Templating</a>;  
see also: <a href="http://devzone.zend.com/1542/creating-modular-template-based-interfaces-with-savant/">this article</a>. 
While Savant is included in this distribution, it is not mandatory to use Savant for view -- CodeIgniter views may be used. 
The sample code application/controllers/songs.php has an example of each type of view. If used, CodeIgniter views are located 
in the usual directory.

Fee-based support and development work is available from Titanium Opensystems, l.c. -- <a href="//tinyurl.com/dbmsmax">see the website here</a>.

This distribution is licensed as a compilation work under the same terms as set forth in 
<a href="http://ellislab.com/codeigniter/user-guide/license.html">the CodeIgniter License</a>.

NOTES:
This distribution's configuration for CodeIgniter departs from the original as follows: 1-csrf_protection is set to: TRUE; 
2-index_page is set to: ' ' to support URLs without showing index.php; libraries have been added to the include path so the 
Zend libraries may be used easily [e.g.: require("Zend/Feed/Rss.php");]. This distribution's Savant departs from the original 
in that it has the default path to templates set to application/templates. A database connection string configuration for 
Idiorm is located in application/config/idiorm.php which you may include in your controller constructor, otherwise Idiom will 
need it coded inline. This string must reflect your database server attributes as described in the Idiorm documentation. 
IMPORTANT: If sessions are needed then PHP sessions should be used instead of CodeIgniter's. 
IMPORTANT: <a href="http://www.php.net/manual/en/session.security.php">See PHP session security details here</a>

SHOULD I USE IDIORM ALONE OR IDIORM+PARIS? <a href="http://j4mie.github.io/idiormandparis/">See the Idiorm and Paris story here</a>

THERE IS A SMALL SAMPLE CONTROLLER in application/controllers/site.php with a related view in application/templates/songs.php

SAMPLE CONTROLLER CODE USING SAVANT WITH IDIORM [WITHOUT THE PARIS ADD-ON]:

$data = new Savant3();

$data->songs = ORM::for_table('songs') ->order_by_asc('artist') ->find_many();
			
$data->display('songs.php');
 
