<?php

$curl = curl_init();

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://domain-da-pa-check.p.rapidapi.com/?target=www.garuda.website",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: domain-da-pa-check.p.rapidapi.com",
		"X-RapidAPI-Key: 1a0615ebf3msh1076b75bd089cd4p17eaa7jsn42cc1862836f"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$data = json_decode($response, true);
var_dump ($data);

$webname = $data[1]['body']['0']['target'];


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Garuda Authority</a>
        
          </div>
        </div>
    </nav>
    <br><br>
    <div class="container">
        <div class="input-group pt-7 mb-3">
            <input type="text" class="form-control" placeholder="Check authority" id="search-input">
            <button class="btn btn-outline-secondary" type="button" id="button-search">Check</button>
          </div>
    </div>

    <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Domain</th>
            <th scope="col">Domain Authority</th>
            <th scope="col">Page Authority</th>
            <th scope="col">Total BackLink</th>
            <th scope="col">Spam Score</th>
          </tr>
        </thead>
        <hr>
        <tbody>
          <tr>
            <th><?= $webname; ?></th>
            <td></td>
            <td>100</td>
            <td>1457468211</td>
            <td>13</td>
          </tr>
        </tbody>
      </table>
    </div>


        



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>