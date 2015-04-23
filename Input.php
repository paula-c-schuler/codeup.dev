<?php
// EXERCISE 7.3.3 COMPLETED -- STATIC inside CLASSES

class Input
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
        if (isset($_REQUEST[$key])) {
            return ($_REQUEST[$key]);
        } else {
        return $default;
        }
    }
// EXERCISE TODAY 9.2.1
    public static function getString($key)
    {
        if ($_REQUEST[$key]) 
        {
           $input = $_REQUEST[$key];
           if (empty($input))
           {
                throw new Exception ('Please enter data');
           }
           // throw new Exception ('Please enter data');
        }       

            // throw new Exception ('Please enter data');
            
        // } elseif (!is_string($_POST[$key])) 
        // {
        //     throw new Exception ('Please enter data');
        // } 
    }


    public static function getNumber($key)
    {
        if(empty($_POST[$key]))
        {
            throw new Exception ('Please enter numerical information.');
        } elseif (!is_string($_POST[$key]))
        {
            throw new Exception ('Numbers required for this information field.');
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}