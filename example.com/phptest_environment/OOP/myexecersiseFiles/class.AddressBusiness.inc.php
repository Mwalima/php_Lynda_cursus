<?php
/**
 * Created by IntelliJ IDEA.
 * User: mwalima
 * Date: 25-10-2016
 * Time: 16:29
 */

/**
 * Class AddressBusiness
 */
class AddressBusiness extends Address {
    
    /**
     * initialization
     */
     protected function _init() {
        $this->_setAddressTypeId(Address::ADDRESS_TYPE_BUSINESS);
    }
}