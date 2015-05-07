<?php
/**
 * Food Class Extends Items Class
 */


class Food extends Items {
    // properties specific to food items
    const MAX_UNIT_SIZE = 15;
    const PREFIX = 'FD_';

    public function __construct(){
        // init values from parent
        parent::__construct();
        // override where needed
        $this->category = 'food';
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

        // validate parameters against food specific
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
     * implements specific validation or logic for deleting food items
     * uses parent class delete method
     */
    public function deleteItem(){
        // todo
    }

    /**
     * implements specific validation or logic for updating food items
     * uses parent class update method
     */
    public function updateItem(){
        // todo
    }

}// END FOOD CLASS