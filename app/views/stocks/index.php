<div class="center"> 
<?php echo $data["title"]; ?>
</div>


<table>
  <!-- <style>
    table {
     margin-left: 550px;
     font-size: larger;
    }
    th {
      text-align: center;
      text-decoration: underline;
    }
    tbody {
      text-align: center;
    }
    a {
      margin-left: 650px;
      font-size: larger;
      color: blue;
    }
    .center {
      margin-left: 550px;
    }
  </style> -->
  <thead>
    <th>id</th>
    <th>name</th>
    <th>total</th>
    <th>price</th>
    <th>cat</th>
    <th>update</th>
    <th>delete</th>
  </thead>
  <tbody>
    <?=$data['stocks']?>
  </tbody>
</table>

<a href="<?=URLROOT;?>/homepages/index">terug</a>

