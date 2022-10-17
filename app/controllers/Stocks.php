<?php
class Stocks extends Controller {

  public function __construct() {
    $this->stockModel = $this->model('Stock');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $stocks = $this->stockModel->getStocks();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($stocks as $value){
      $rows .= "<tr>
                  <td>$value->Id</td>
                  <td>" . htmlentities($value->Name, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->NetWorth, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->MyAge, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->Company, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td> <a href=' ". URLROOT . "/stocks/update/$value->id'>update</a></td>
                  <td> <a href=' ". URLROOT . "/stocks/delete/$value->Id'>delete</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Stockoverzicht</h1>',
      'stocks' => $rows
    ];
    $this->view('stocks/index', $data);
  }

  public function update($id) {

  }
  public function delete($Id) {
    $this->stockmodel->deleteStock($Id);

    $data =[
      'deleteStatus' => "het record met id = $Id is gedelete"
    ];
    $this->view("stocks/delete", $data);
    header("Refresh:2; url=" . URLROOT . "/stocks/index");
  }
}

?>