<?php 
// EXERCISE 9.2.4 complete 
// EXERCISE 9.2.5      Late Static Binding


class Model
{

	// add protected static property $table, to be used to determine which database Model is using.
	protected static $table = 'model'; 

    // Array to store our key/value data
    private $attributes = [];

// Add a static method named getTableName() that returns the value of the static property $table
    public static getTableName() {
    	return self::$table; 
    }

    // Magic setter to populate $data array
    public function __set($name, $value)
    {
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





