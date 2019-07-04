<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ALOUINI MAHDI</title>
  </head>
  <body>

  	<h1>Liste HOTEL</h1>
  	<table class="table table-dark">
	  <thead>
	    <tr>
	      <th scope="col">ID Hotel</th>
	      <th scope="col">Nom Hotel</th>
	      <th scope="col">Region</th>
	      <th scope="col">Emails</th>
          <th scope="col">Telephone</th>
	    </tr>
	  </thead>
	  <tbody>

	  	<?php
			$xml=simplexml_load_file("hotel.xml") or die("Error: Cannot create object");

			foreach($xml->children() as $produit) { 
			   
			    echo "<tr> <td> <a href='index.php?id=" . $produit->id_hotel . "'>" . $produit->id_hotel . "</a></td>"; 
			    echo "<td>" . $produit->libelle_hotel . "</td>";
			    echo "<td>" . $produit->region . "</td>";
			    echo "<td>" . $produit->email . "</td>";
			    echo "<td>" . $produit->tel . "</td>";
			    "</tr>";

			  } 
		?>


	  </tbody>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
