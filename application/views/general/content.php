<?php
$this->load->view('general/header');
$this->load->view('general/navigation');
$this->load->view('general/sidebar');

//dummy_content just to show at what position (i.e after sidebar and before footer) our content has to be loaded.



$this->load->view('general/dummy_content');
//or <?php echo $data; 

$this->load->view('general/footer');
?>
