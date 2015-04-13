<?php 
// EXERCISE 9.2.4 complete 


// GENERIC VERSION 
class Model
{
    // Array to store our key/value data
    private $attributes = [];

    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        // Set the key to hold $value in $attributes
        // THIS IS USING SET magically, not calling it specifically
        $this->attributes[$name] = $value;
    }

    public function _get()
    	if _get(array_key_exists($name, $this->attributes)){
    		return $this->attributes[$key];
    	} else 
    	{
    		return null;
    	}
}

$model = new Model;
$model->test = 'something';

echo $model->test'



