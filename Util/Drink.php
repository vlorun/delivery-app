<?php
/**
 * Drink Class Extends Items Class
 */


class Drink extends Items  {
// properties specific to food items
    const MAX_UNIT_SIZE = 5;
    const PREFIX = 'DR_';


    public function __construct(){
        // init values from parent
        parent::__construct();
        // override where needed
        $this->category = 'drink';
        // change units to litres
        $this->unit = 'l';
    }

    /**
     * @param $name
     * @param $description
     * @param $price
     * @param $unitSize
     * @param array $attributes
     */
    public function saveItem($name, $description, $price, $unitSize, array $attributes){
        // init validation variable
        $validate = true;

        // validate parameters against drink specific
        // constraints and logic


        if ($validate){
            // build $item array
            // then attempt save

            $result = $this->save($item);

            // return: $result
        }else {
            // return: false
        }


    }

    /**
     * implements specific validation or logic for deleting drink items
     * uses parent class delete method
     */
    public function deleteItem(){
        // todo
    }

    /**
     * implements specific validation or logic for updating drink items
     * uses parent class update method
     */
    public function updateItem(){
        // todo
    }

}// END DRINK CLASS