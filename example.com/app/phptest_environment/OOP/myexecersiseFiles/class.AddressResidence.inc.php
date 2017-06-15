<?php
/**
 * Created by IntelliJ IDEA.
 * User: stplus
 * Date: 25-10-2016
 * Time: 16:29
 */
/**
 * Class AddressResidence
 */
class AddressResidence extends Address {
    /**
     * initialization
     */
     protected function _init() {
        $this->_setAddressTypeId(Address::ADDRESS_TYPE_RESIDENCE);
    }
}