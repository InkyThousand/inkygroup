<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 27.11.2015
 * Time: 16:22
 */
class Inkygroup_Reinexp_Model_Slider extends Mage_Core_Model_Abstract
{

    public function _construct()
    {
        parent::_construct();
        $this->_init('inkyslider/slider');
    }

}