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
    /**
     *overriding class
     * @var type string
     */
    public $country_name = "Australia";
    /**
     * initialization
     */
     protected function _init() {
        $this->_setAddressTypeId(Address::ADDRESS_TYPE_PARK);
    }

}