<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
  
    .card {
      margin-left: 100px;
      margin-top: 100px;
      margin-right: 100px;
    }
    #button {
      background-color: #2DB4ED;
    }
  </style>
  <title>MBOUTRECHT</title>
</head>

<body>
  <div id="registercard" class="card">
    <div class="card-body">
      <div class="Text" style="color: #2DB4ED;">
        <h2>Registeer je hier</h2>
      </div>
      <br>
      <br>

      <!-- The input for the email-->
      <div class="mb-3 row">
        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="Email" class="form-control" id="inputEmail" placeholder="Vul hier je emailadres in">
        </div>
      </div>
      <br>
    
      <!-- The input for the Password-->
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Wachtwoord</label>
        <div class="col-sm-10">
          <input type="inputPassword" class="form-control" id="inputPassword" placeholder="Vul hier je wachtwoord in">
        </div>
      </div>
      <!-- The input for the repeat Password-->
      <div class="mb-3 row">
        <label for="inputPasswordCheck" class="col-sm-2 col-form-label">Herhaal Wachtwoord</label>
        <div class="col-sm-10">
          <input type="inputPasswordCheck" class="form-control" id="inputPasswordCheck" placeholder="Herhaal je wachtwoord">
        </div>
      </div>
     
      <div class="col-12">
        <button id="button" type="submit" class="btn btn-success btn-lg btn-block">Activeer</button>
        
      </div>
    </div>

      <!-- Optional JavaScript; choose one of the two! -->

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>

