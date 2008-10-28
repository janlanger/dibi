<h1>Nette::Debug & dibi example</h1>


<p>Dibi can display and log exceptions via Nette::Debug. You first need to install Nette Framework. You can download it from here:</p>

<ul>
	<li>Nette Framework: http://nettephp.com
</ul>

<?php

require_once 'Nette/Debug.php';
require_once '../dibi/dibi.php';


// enable Nette::Debug
Debug::enable();


dibi::connect(array(
	'driver'   => 'sqlite',
	'database' => 'sample.sdb',
));



// throws error
dibi::query('SELECT FROM [customers] WHERE [customer_id] < %i', 38);
