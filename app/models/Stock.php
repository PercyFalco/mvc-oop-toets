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

    public function deleteStock($Id) {
      $this->db->query("DELETE FROM richestpeople Where id = :id");
      $this->db->bind("id", $Id, PDO::PARAM_INT);
      return $this->db->execute();

    }
  }
?>