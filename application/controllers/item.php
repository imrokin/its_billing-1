<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
@author Anand Kumar Chaudhary
@phone 8882848810
*/
class Item extends CI_Controller {

private var $filter_add=array('i_name', 'i_quantity','i_cp','i_sp','i_purchasedfrom','i_purchasedate','i_weight','c_id','b_barcodestring');

private var $filter_update=array('i_id','i_name', 'i_quantity','i_cp','i_sp','i_purchasedfrom','i_purchasedate','i_weight','c_id','b_barcodestring');



function __construct(){
parent::__construct();

$this->load->library('form_validation');
$this->load->helper('array');
$this->load->model('item_model','',TRUE);

}

function index(){


echo $this->item_model->delete_item('1');

}

//Method responsilbe for adding new item to the database
function add_item(){

if ($this->form_validation->run())
      {
         //The incoming data is validated and is ready to be inserted into the database
         
         //$this->load->view('myform');
         if($this->item_model->add_item(elements($this->filter_add,$this->input->post(NULL, TRUE)))>0){
         echo "Item Added succesfully";
         
         }
         
      }
      else
      {
      //SOMETHING WRONG HAPPEND
         $this->load->view('formsuccess');
      }

}



//Method responsilbe for Updating existing item details.
function update_item(){

if ($this->form_validation->run())
      {
         //The incoming data is validated and is ready to be inserted into the database
         
         
         if($this->item_model->update_item(elements($this->filter_update, $this->input->post(NULL, TRUE)))>0){
         echo "Item Updated succesfully";
         
         }
         
      }
      else
      {
      //SOMETHING WRONG HAPPEND
         $this->load->view('formsuccess');
      }

}
//Method responsilbe for deleting existing item from db.
function delete_item(){
if ($this->form_validation->run())
      {
         //The incoming data is validated and is ready to be inserted into the database
         
         
         if($this->item_model->delete_item($this->input->post('i_id', TRUE))>0){
         echo "Item Deleted succesfully";
         
         }
         
      }
      else
      {
      //SOMETHING WRONG HAPPEND
         $this->load->view('formsuccess');
      }
}
//Method responsile for fetching item and its detail.
function get_item(){

if ($this->form_validation->run())
      {
         //The incoming data is validated and is ready to be inserted into the database
         
         
         if($result = $this->item_model->get_item_info($this->input->post('i_id', TRUE))){
         var_dump($result);
         
         }
         
      }
      else
      {
      //SOMETHING WRONG HAPPEND
         $this->load->view('formsuccess');
      }}


}

//End of file ./controller/item.php
