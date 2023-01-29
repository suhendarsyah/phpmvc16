<?php


class Peternak_model
{

  private $table = 'tblaporanonline';
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }




  public function getPeternak()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->resultset();
  }

  public function getPeternakbyid()
  {
    $this->db->query('SELECT * FROM ' . $this->table);
    return $this->db->single();
  }
}
