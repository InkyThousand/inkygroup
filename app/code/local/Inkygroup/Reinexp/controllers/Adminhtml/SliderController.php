<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 27.11.2015
 * Time: 11:53
 */
class Inkygroup_Reinexp_Adminhtml_SliderController extends Mage_Adminhtml_Controller_Action
{

    public function indexAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('reinexp');

        $contentBlock = $this->getLayout()->createBlock('inkygroup_reinexp/adminhtml_slider');
        $this->_addContent($contentBlock);

        $this->renderLayout();

    }
}