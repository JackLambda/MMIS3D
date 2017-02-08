<?php

//essai comm

class articles_model extends CI_Model {

public function __construct()}
  parent::__construct();
  $this->load->database();
  }
public function touslestotos()
  {
  $query = $this->db->get('articles');
  return $query->result();
  }
  
 }
 ?>
