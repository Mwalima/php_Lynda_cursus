<?php
/**
 * Created by IntelliJ IDEA.
 * User: stplus
 * Date: 25-10-2016
 * Time: 16:32
 */
/**
 * Class AddressPark
 */
class AddressPark extends Address {
   
    public function display(){        
        $output = '<div style="background-color:PaleGreen;">';
        $output .= parent::display();
        $output .="</div>";
        return $output;
                
    }
    /**
     * initialization
     */
     protected function _init() {
        $this->_setAddressTypeId(Address::ADDRESS_TYPE_PARK);
    }

}