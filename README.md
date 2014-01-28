cim-xa
======

A distribution, by Titanium Opensystems, l.c., of the popular CodeIgniter framework. 
This distribution includes modern alternative object-oriented models and views and currently supports SQLite, MySQL, and PostgreSQL.
It stands on the shoulders of some PHP giants:  
Ellis Labs (CodeIgniter), Jamie Matthews (Paris, Idiorm), Paul M. Jones (Savant), Zend(Zend libraries), and others. 

<a href="http://ellislab.com/codeigniter/user-guide/toc.html">Documentation for CodeIgniter</a>

<a href="http://idiorm.readthedocs.org/en/latest/">Documentation for Idiorm Object Relational Mapper</a>

<a href="http://paris.readthedocs.org/en/latest/">Documentation for Paris Active Record Optional Add-on for Idiorm</a>

<a href="http://phpsavant.com/docs/">Documentation for Savant Templating</a> 
and see also <a href="http://devzone.zend.com/1542/creating-modular-template-based-interfaces-with-savant/">this article</a>.

Fee-based support and development work is available from Titanium Opensystems, l.c. -- <a href="//tinyurl.com/dbmsmax">see the website here</a>.

This distribution is licensed as a compilation work under the same terms as CodeIgniter. 

NOTES:
This distribution's configuration for CodeIgniter departs from the original as follows: 1-csrf_protection is set to: TRUE; 
2-index_page is set to: ' ' to support URLs without showing index.php; libraries have been added to the include path so the 
Zend libraries may be used easily [e.g.: require("Zend/Feed/Rss.php");]. 
If sessions are needed then PHP sessions should be used instead of CodeIgniter's. 
IMPORTANT: <a href="http://www.php.net/manual/en/session.security.php">See PHP session security details here</a>

USAGE:

MODELS -- USING IDIORM ALONE OR IDIORM+PARIS: <a href="http://j4mie.github.io/idiormandparis/">See the Idiorm and Paris story here</a>


CONTROLLERS AND VIEWS:

EXAMPLE OF CONTROLLER [Savant only, no database]

<?php

public function index()

{

	require_once '/savant/Savant3.php';

	$savant = new Savant3();
	
	$savant->addPath('template', './application/templates');

// NO MODELS YET SO USING AN ARRAY

	$data = array(

		array('artist' => 'Artist 1','title' => 'Song 1'),
		
		array('artist' => 'Artist 2','title' => 'Song 2'),
		
		array('artist' => 'Artist 3','title' => 'Song 3')
		
	);
	
	$savant->songs = $data;
	
	$savant->display('songs.php');
	
} 
    		
?>

EXAMPLE OF VIEW/TEMPLATE [Savant only, no database]

<?php 

if (is_array($this->songs)): ?>

	<table>
	
	<tr>
	
		<th>Artist</th>
		
		<th>Title</th>
		
	</tr>
	
	<?php foreach ($this->songs as $key => $val): ?>
	
	<tr>
	
		<td><?php echo $this->eprint($val['artist']); ?></td>
		
		<td><?php echo $this->eprint($val['title']); ?></td>
		
	</tr>
	
	<?php endforeach; ?>
	
	</table>
	
<?php else: ?>

	<p>No songs found.</p>
	
<?php endif; ?>


