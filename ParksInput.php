<?php
// *** EXERCISE 7.3.3 COMPLETED -- STATIC inside CLASSES ***
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
// EXERCISE TODAY 9.2.1
    public static function getString($key)
    {
        echo "In getString";
        $keyValue = static::get($key);
        if  (!is_string($keyValue)){
            throw new Exception ('Please enter better data.');
        } else {
            return $keyValue;
        }       
    }
    

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