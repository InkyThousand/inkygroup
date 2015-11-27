<?php

$installer = $this;
$installer->startSetup();

$table = $installer->getConnection()
    ->newTable($installer->getTable('inkyslider/table_slider'))
    ->addColumn(
        'slide_id',Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
            'unsigned' => true,
            'nullable' => false,
            'primary' => true,
            'identity' => true,
        ), 'Slide No.'
    )
    ->addColumn(
        'name', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
            'nullable'=>false,
        ), 'Name Slide'
    )
    ->addColumn(
        'alt', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
            'nullable'=>false,
        ), 'Alt of Image'
    )
    ->addColumn(
        'imagefile', Varien_Db_Ddl_Table::TYPE_VARCHAR, null, array(
            'nullable'=>false,
        ), 'Image file Name'
    )
    ->addColumn(
        'status', Varien_Db_Ddl_Table::TYPE_BOOLEAN, null, array(
            'nullable' => true,
            'default' => 1,
         ), 'Status'
    )
    ->setComment('Inkygroup First Blogpost Method Table - Maintains admin editable custom blog-post');
$installer->getConnection()->createTable($table);
$installer->endSetup();