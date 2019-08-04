<?php


Class Redis {
	function config()
	{
		// Parameters passed using a named array:
		$client = new Predis\Client([
		    'scheme' => 'tcp',
		    'host'   => 'localhost',
		    'port'   => 6379,
		    'database' => 1 // default is 0, you can put 1-15
		]);

		return $client;
	}
}

?>