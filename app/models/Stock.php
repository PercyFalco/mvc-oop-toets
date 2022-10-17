<?php
  class Stock{
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getStocks() {
      $this->db->query("SELECT * FROM `richestpeople`");

      $result = $this->db->resultSet();

      return $result;
    }
  }
?>