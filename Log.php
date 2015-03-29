<?php  
// *** EXERCISE 7.3 COMPLETED, WORKING ***
// *** EXERCISE 7.3.1  COMPLETED  CONSTRUCTORS/DESTRUCTORS,   ***
// *** EXERCISE 7.3.3  COMPLETED  AUTHENTICATION WRAPPER ***
class Log 
{
	public $filename = '$prefix-YYYY-MM-DD.log';
	public $handle;

	// constructor is first function, good practice
	public function __construct ($prefix = 'log') 
	// $prefix = 'log' is how a default is set for a function,
	// if a parameter is not actually passed for $prefix.
	{
		date_default_timezone_set('America/Chicago');
		$this->filename = $prefix . ' ' . date("Y-m-d-s") . '-.log';
		$this->handle = fopen($this->filename, 'a+');
	}

	public function logMessage($logLevel, $message) 
	{
		$fileDate = date('Y-m-d');
		$time = date('h:i:s');

	    fwrite($this->handle, PHP_EOL . $fileDate . ' ' . $time . ' [' . $logLevel . '], ' . $message);
	}

	public function info($message) 
	{
		$this->logMessage('INFO', $message);
	}

	public function error($message) 
	{
		$this->logMessage("ERROR", $message);
	}

	public function __destruct()
	{
		fclose($this->handle);
		echo ("This is closed.");
	}

}

?>