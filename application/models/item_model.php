<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
@desc This model file has all the methods related to ITEM,and its whole CRUD
 ,new methods used for item must b declared here only
 
 @author Anand Kumar Chaudhary
 @phone 8882848810
*/
class Item_model extends CI_Model {

var $item_table='its_item';

var $dummy_data=array(
'i_id'=>'1', 'i_name'=>'Lifebouy', 'i_quantity'=>'1', 'i_cp'=>'100', 'i_sp'=>'250', 'i_purchasedfrom'=>'Akash Tiwari', 'i_purchasedate'=>'Dummy date', 'i_weight'=>'3', 'c_id'=>'12', 'b_barcodestring'=>'232323'
);

//Inserts a single item
function add_item ($data){
$this->db->insert($this->item_table,$data);
return $this->db->affected_rows();
}

//Inserts items in bulk
function add_baqtch_item(){
$this->db->insert_batch($this->item_table, $data);
return $this->db->affected_rows();
}


//Gets item info
function get_item_info($item_id){

$query = $this->db->get_where($this->item_table, array('i_id' => $item_id));

if ($query->num_rows() > 0 ){
return $query->row();
} else{ 
return FALSE;
}
}



//Gets bulk item info
function get_batch_item_info(){}

//Updates single item info
function update_item($data){
$this->db->where('i_id', $data[i_id]);
$this->db->update($this->item_table, $data);
return $this->db->affected_rows(); 
}
//Updates batch item info
function update_batch_item($data){

$this->db->update_batch($this->item_table, $data, 'i_id');
return $this->db->affected_rows();
}
//Deletes  single item
function delete_item($item_id){
$this->db->delete($this->item_table, array('i_id' => $item_id)); 
return $this->db->affected_rows();
}
//Deletes items in batch...
function delete_batch_item(){}
}

//End of file /model/item_model.php
