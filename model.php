<?php 

require_once 'model_pdo_test.php';

$users = [
    ['email' => 'jason@codeup.com',   'name' => 'Jason Straughan'],
    ['email' => 'chris@codeup.com',   'name' => 'Chris Turner'],
    ['email' => 'michael@codeup.com', 'name' => 'Michael Girdley']
];


class Model 
{

    protected static $dbc;
    protected static $table;
    // "the setter is tied into the attributes array"
    public $attributes = array();

    /*
     * Constructor
     */
    public function __construct()
    {
        self::dbConnect();
    }

    /*
     * Connect to the DB
     */
    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            // @TODO: Connect to database
            self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            echo self::$dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";
            echo "good connection" . "\n";
            
        }
    }

    /*
     * Get a value from attributes based on name
     */
    public function __get($name)
    {
        // @TODO: Return the value from attributes with a matching $name, if it exists
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        return null;
    }

    /*
     * Set a new attribute for the object
     */
    public function __set($name, $value)
    {
        // @TODO: Store name/value pair in attributes array
        $this->attributes[$name] = $value;
    }





    /*
     * Persist the object to the database
     "Save is a thin veneer, decides if it needs to update or insert." 
     "In insert and update, you have to be very careful about what you are assigning."
     "I feel SQL code should be in the child files, not model." Ben
     */
    public function save()
    {
        // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert
        if(isset($this->id)){
            return $this->update();
            
        } else {
            return $this->insert();
        }
    }

    // @TODO: Ensure there are attributes(unique identifiers, keys, etc) before attempting to save
    // This means communicate with user if they need to enter valid data, to ensure there are attributes
    // QQQQQQQQQQ 
    // I am confused as to where the timing of this function goes 
    //      since it is suggested we update() or insert() right away in save().
    // This has not been tested.  
    // protected function ensureData($value, $name, $maxLength)
    // {
    //     if(empty($value))
    //     {
    //         throw new Exception('Invalid. We need your name, please.');
    //     } elseif (strlen($value) > $maxLength)
    //     {
    //         throw new Exception('You have only 50 characters available for your name. Please adjust.');
    //     } else 
    //         function test_input($value) 
    //         {
    //         $value = trim($value);
    //         $value = stripslashes($value);
    //         $value = htmlspecialchars($value);
    //         return $this->value;
    //         echo 'Input is good.' . PHP_EOL;
    //         $inputValid = $this->value;
    //         }
    //     {
    //     return = $this->value;
    //     }
    // }
            


     // protected function update()
        // {
        //     // prepare our update
        //     // bind
        //     // execute
        // }
    
    protected function insert()
        {

            $query = 'INSERT INTO users (id) VALUES (:id)';

            // prepare
            $stmt = self::$dbc->prepare($query);
            
            // bind
            


            
            
                // @TODO: Ensure that update is properly handled with the id key
                $stmt->bindValue(':email', $user['email'], PDO::PARAM_STR);
                $stmt->bindValue(':name',  $user['name'],  PDO::PARAM_STR);

                $stmt->execute();
              
        
        }



        // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id
        // This means to call the last inserted line and return the value of that call

        // @TODO: You will need to iterate through all the attributes to build the prepared query
        // BEN SAID IT IS A BAD IDEA 

        

    /*
     * Find a record based on an id
     */

    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = 'SELECT * FROM parks WHERE id = :id';
        // its taking the place of a variable and then we resolve the value down here
        $stmt = self::$dbc->prepare($query);
        $stmt->execute(array(':id' => $id));
        
        // @TODO: Store the resultset in a variable named $result
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // The following code will set the attributes on the calling object based on the result variable's contents
        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }



    /*
     * Find all records in a table
     */
    public static function all()
    {
        self::dbConnect();

        // @TODO: Learning from the previous method, return all the matching records
        $result = self::$dbc->query('SELECT * FROM parks')->fetchAll(PDO::FETCH_ASSOC);
        
        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }


}

$model = new Model();

// IF ONE ADDS THIS WAY TO THE MODEL CLASS, THEN WHERE DOES THE DATA GO? WHICH TABLE? 
// set
$model->name = 'Paula';
$model->email = 'abc@abc.com';

// get
echo $model->email . PHP_EOL;

// save
// var_dump($users);

// find
Model::find('1');

// all
// Model::all();
$all = Model::all();
// var_dump($all);








?>
