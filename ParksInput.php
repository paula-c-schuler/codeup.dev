<?php
// *** EXERCISE 7.3.3 STATIC INSIDE CLASSES ***
// *** EXERCISE 9.2.1 Add getNumber() and getString()
// *** EXERCISE 9.3.2 TRY AND CATCH.
// *** EXERCISE 9.3.3 CUSTOM EXCEPTIONS, EXTENDING EXCEPTIONS.


class ParksInput
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        if (isset($_REQUEST[$key])) {
            return true;
        } else {
        return false;
        }
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */

    public static function get($key, $default = null)
    {
        return isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default;
    }


    public static function getString($key, $min = 2, $max = 100)
    {
        $keyValue = static::get($key);
        if  (!is_string($key)) {
                throw new InvalidArgumentException ('Please enter valid data.');
        }
        if (!is_numeric($min) || !is_numeric($max)) {
                throw new InvalidArgumentException ('Minimum or maximum values must be numeric.');
        } 
        if (empty($keyValue)) {
            throw new OutOfRangeException ("You need to enter at least two characters for your information.");
        }
        if (is_numeric($keyValue) || !is_string($keyValue)) {
            throw new DomainException ('Please enter in English alphabetical characters');
        }
        if (strlen($keyValue) < $min || strlen($keyValue) > $max) {
            throw new RangeException ('Enter information between 2 and 100 characters.');
        }
    }   
// MOVE NUMBER SPECIFIC MESSAGES TO THE METHOD BELOW 
    

    public static function getNumber($key)
    {
        if(empty($keyValue))
        {
            throw new Exception ('Please enter numerical information.');
        } elseif (!is_numeric($keyValue))
        {
            throw new Exception ('Numbers required for this information field.');
        }
        return trim($keyValue);
    }



    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}