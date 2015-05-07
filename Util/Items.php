<?php
/**
 * The Items Class is a base for all item types
 * It defines all shared methods and variables
 * for other sub-items classes
 * */


abstract class Items {
    // Attributes
    // reused within all sub classes
    const TABLE_NAME = 'items';
    // default result set for queries
    const RESULT_SIZE = 30;


    protected $dbh = null;
    protected $category = null;
    // string units are defined here so value in
    // database can be agnostic
    protected $unit = 'kg';

    function __construct() {
       // get the database connection
       // try /catch statement would be handled within DB class Zend/ Pdo
       $this->dbh = DB::getConnection;
    }

    /**
     * Method for retrieving an individual item
     * @param $fID
     */
    public function getItemByID($fID){
        // expects value of parameter to be integer, and validates
        // runs select query to retrieve item array,
        // return: value is either empty array on failure or item property array on success

    }

    /**
     * Gets all the items from the items table
     */
    public function getAllItems(array $filter, array $sort, $result_size = null){
        // build SQL query then execute
        // if category is/ isn't null then update or ignore WHERE clause accordingly
        // add filters and /or sort (ORDER BY) clause
        // size of result can be specified or default value is used
        // return hex array with item fid as key(s)
    }

    /**
     * saves item and and returns last insert id
     * @param array $item
     */
    protected function save(array $item) {
        // expects associative array of table columns and value pairs
        // saves item and and returns last insert id on success
        // return bool FALSE on failure
    }

    /**
     * deletion of item
     * @param int $fID
     */
    protected function delete($fID) {
        // attempts deletion of item and and returns integer of modified table rows
    }

    /**
     * update an item
     * @param int $fid
     * @param array $values
     */
    protected function update($fid, array $values) {
        // attempts update an item and based on $fid
        // updates are based on a associative array of table columns and value pairs
    }

}// END ITEMS CLASS


class ItemsTest extends PHPUnit_Framework_TestCase
{
    public function testGetAllItems()
    {
        $items = new Items();
        $this->assertEquals(is_array($items->getAllItems(array(), array())));

    }
}