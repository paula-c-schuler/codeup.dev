<?php 

require_once 'model_pdo_test.php';


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

    // /*
    //  * Persist the object to the database
    //  */
    // public function save()
    // {
        //     // Ben suggested, Ryan explained:
        //     // Perform a query to see if a record with the same name exists
        // if(empty($this->attributes['name'])){
        //     // if attributes array does not have 'name', then it calls an insert function
        // $this->insert();
        // } else {
        //     $this->update();
        // }
        // }
        // protected function insert()
        // {
        //     $query = 'INSERT INTO users columnName VALUES (:)'
        //     // prepare
        //     // bind
        //     // execute
        // }

        // protected function update()
        // {
        //     // prepare our update
        //     // bind
        //     // execute
        // }

    //     // @TODO: Ensure there are attributes before attempting to save

    //     // @TODO: Perform the proper action - if the `id` is set, this is an update, if not it is a insert

    //     // @TODO: Ensure that update is properly handled with the id key

    //     // @TODO: After insert, add the id back to the attributes array so the object can properly reflect the id

    //     // @TODO: You will need to iterate through all the attributes to build the prepared query

    //     // @TODO: Use prepared statements to ensure data security
    // }

    /*
     * Find a record based on an id
     */
    public static function find($id)
    {
        // Get connection to the database
        self::dbConnect();

        // @TODO: Create select statement using prepared statements
        $query = 'SELECT * FROM happy_thoughts WHERE id = :id';
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
        $result = self::$dbc->query('SELECT * FROM happy_thoughts')->fetchAll(PDO::FETCH_ASSOC);
        
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


// set
$model->firstName = 'Paula';
$model->lastName = 'Schuler';
$model->email = 'abc@abc.com';


// get
echo $model->email . PHP_EOL;
// var_dump($model);


// NTS: static function requires :: 
// Model::find('1');
// Model::all();
// $all = Model::all();
// var_dump($all);








?>
