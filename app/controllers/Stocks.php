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
                  <td>$value->id</td>
                  <td>" . htmlentities($value->name, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->total, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . number_format($value->price, 0, ',', '.') . "</td>
                  <td>" . htmlentities($value->cat, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td> <a href=' ". URLROOT . "/stocks/update/$value->id'>update</a></td>
                  <td> <a href=' ". URLROOT . "/stocks/delete/$value->id'>delete</a></td>
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
}

?>