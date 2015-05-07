<?php
/**
 * Created by PhpStorm.
 * User: KingM
 * Date: 29/04/15
 * Time: 21:17
 */

class Order {
    // properties
    const TABLE_NAME = 'orders';
    const TABLE_ITEMS_NAME = 'order_items';
    // different order states
    const STATE_BASKET = 'basket';
    const STATE_ORDERED = 'placed';
    const STATE_TRAN = 'transit';
    const STATE_DEL = 'delivered';

    // order ID
    protected $oid = null;
    // store ID
    // #to do store class
    protected $sid = null;
    // user ID
    protected $uid = null;

    // always expects an order id
    // when instantiated
    public function __construct($oid){
        // queries the database for matching order
        // based on oid
        // or creates new order if oid parameter is equal to 0
        // updates class variables accordingly
    }

    public static function getBasket() {
        // queries db for most recent order
        // with state defined as "STATE_BASKET"
        // if found returns a new Order Object
        // if not found saves a new order with current uid and state set as "STATE_BASKET"
        // and returns new Order object
    }

    /**
     * Gets all Orders
     * @param int $uid
     * @param int $sid
     * @param array $sort
     */
    public static function getAllOrders($uid = 0, $sid = 0, array $sort) {
        // gets all orders for user
        // or / and all for store
        // based on parameters
        // returns an array of order id's
    }

    public static function getOrderDetails($oid){
        // returns an array of order details and meta attributes
        // on success
        // returns an empty array on failure
    }

    // #could simply pass in an item id also
    // #but is possible there could be some validation/ application logic required
    // #such as checking item type (food/ Drink) before adding to order
    // makes sure that item object is expected class type
    public function addItem(Items $item, $quantity){
        // validates/ applies application logic
        // adds item to order
    }

    public function removeItem($fid){
        // deletes item from order
    }

    public function updateItem($fid, $quantity){
        // updates quantity against item
        // checks current item quantity an if equal to zero
        // removes item from ordered items list
    }

    public function placeOrder($sid, $address, array $paymentDetails, $deliveryNotes){
        // places the order and sets the store id
        // changes the order state to "STATE_ORDERED"
    }


}// END ORDER CLASS

class OrderTest extends PHPUnit_Framework_TestCase
{
    public function testGetBasket()
    {

        $this->assertEquals(is_a(Order::getBasket(), 'Order');

    }
}