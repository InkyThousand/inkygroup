<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 27.11.2015
 * Time: 17:28
 */
class Inkygroup_Reinexp_Block_Adminhtml_Slider_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('inkyslider/slider')->getCollection();

        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $helper = Mage::helper('inkygroup_reinexp');

        $this->addColumn('slide_id', array(
            'header' => $helper->__('Slider ID'),
            'index' => 'slide_id'
        ));

        $this->addColumn('name', array(
            'header' => $helper->__('Name'),
            'index' => 'name',
            'type' => 'text',
        ));

        $this->addColumn('alt', array(
            'header' => $helper->__('Alt'),
            'index' => 'alt',
            'type' => 'text',
        ));

        $this->addColumn('imagefile', array(
            'header' => $helper->__('Imagefile'),
            'index' => 'imagefile',
            'type' => 'text',
        ));

        $this->addColumn('status', array(
            'header' => $helper->__('Status'),
            'index' => 'status',
            'type' => 'bool',
        ));

        return parent::_prepareColumns();
    }

}