<?php
$methods = array(
  array(
      'name'=>'cube',
      'alt'=>'Renault',
      'imagefile'=>'001.jpg',
      'status'=>'1'
  ),
  array(
      'name'=>'cubeRandom',
      'alt'=>'Maserati',
      'imagefile'=>'002.jpg',
      'status'=>'1'
  ),
  array(
      'name'=>'block',
      'alt'=>'Nissan',
      'imagefile'=>'003.jpg',
      'status'=>'1'
  ),
  array(
      'name'=>'cubeStop',
      'alt'=>'Aston Martin',
      'imagefile'=>'004.jpg',
      'status'=>'1'
  )
);
foreach ($methods as $method) {
    Mage::getModel('inkyslider/slider')
        ->setData($method)
        ->save();
}