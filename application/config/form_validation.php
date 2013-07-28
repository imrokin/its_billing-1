<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
This file contains all the validation rules in form of array.
CONTROLLER/METHOD
*/

$config = array(
           'item/add_item' => array(
                                    array(
                                            'field' => 'i_name',
                                            'label' => 'Item Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_quantity',
                                            'label' => 'Quantity',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_cp',
                                            'label' => 'Cost Price',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_sp',
                                            'label' => 'Selling Price',
                                            'rules' => 'required'
                                         )
                                    array(
                                            'field' => 'i_purchasedfrom',
                                            'label' => 'Purchased From',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_purchasedate',
                                            'label' => 'Date of Purchase',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_weight',
                                            'label' => 'Weight of Item',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'c_id',
                                            'label' => 'Category ID',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'b_barcodestring',
                                            'label' => 'Barcode String',
                                            'rules' => 'required'
                                         )
                                    ),
         'item/update_item' => array(
                                    array(
                                            'field' => 'i_name',
                                            'label' => 'Item Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_quantity',
                                            'label' => 'Quantity',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_cp',
                                            'label' => 'Cost Price',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_sp',
                                            'label' => 'Selling Price',
                                            'rules' => 'required'
                                         )
                                    array(
                                            'field' => 'i_purchasedfrom',
                                            'label' => 'Purchased From',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_purchasedate',
                                            'label' => 'Date of Purchase',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_weight',
                                            'label' => 'Weight of Item',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'c_id',
                                            'label' => 'Category ID',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'b_barcodestring',
                                            'label' => 'Barcode String',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'i_id',
                                            'label' => 'Item ID',
                                            'rules' => 'required'
                                         )
                                    ),
               'item/delete_item' => array(
                                    array(
                                            'field' => 'i_id',
                                            'label' => 'Item ID',
                                            'rules' => 'required'
                                         ),
               'item/get_item' => array(
                                    array(
                                            'field' => 'i_id',
                                            'label' => 'Item ID',
                                            'rules' => 'required'
                                         )
               
               
               );
