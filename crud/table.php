<?php
include_once("db.php");
$query = "SELECT * FROM user  ORDER BY id DESC";
$results=mysqli_query($conn,$query);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Admin Panel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      .hrow{
    background-color:#004085;
    color:whitesmoke;
  }

    </style>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container-fluid">
  <div class="row hrow">
  <div class="col-sm-9"><h3 ><i class="fa fa-male" aria-hidden="true"></i> AdminPanel</h3></div>  
  <div class="col-sm-3"><a href="insert.php" class="  btn btn-success  " role="button" ><i class="fa fa-plus" aria-hidden="true"></i> Add New User</a> </div>
  </div>     
  </div><br>

  
  <div class="col-sm-12">
    <h5 class="card-title"><i class="fa fa-fw fa-search"></i> Find User</h5>
    <form method="post" action="searching.php" >
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    
                    <input type="text" name="search" required=""  class="form-control"  placeholder="Search by name">
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    
                <button type="submit" name="submit"   class=" btn btn-primary"   placeholder="Search by name" ><i class="fa fa-fw fa-search"></i> Search </button>
                    <!-- <div><a href="search.php"  type="submit" name="submit" value="search" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Search</a></div> -->
                </div>
            </div>
        </div>
    </form>
</div> 
<br>
      <table class="table table-striped table-inverse table-responsive">
          <thead class="thead-inverse">
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Confirm Password</th>
                  <th>Action </th>
              </tr>
              </thead>
              <?php
              foreach ($results as $resul) {
                  echo "<tr>";
                  echo "<td>" .$resul['id']. "</td>";
                  echo "<td>" .$resul['username']. "</td>";
                  echo "<td>" .$resul['email']. "</td>";
                  echo "<td>" .$resul['password']. "</td>";
                  echo "<td>" .$resul['cnfpassword']. "</td>";
                  echo "<td>";
                  echo "<a href='read.php?id=". $resul['id'] ."' title='View Record' data-toggle='tooltip'><span class='btn btn-primary' >View</span></a>";
                  echo "<a href='update.php?id=". $resul['id'] ."' title='Update Record' data-toggle='tooltip'><span class='btn btn-warning'>Update&nbsp</span></a>";
                  echo "<a href='delete.php?id=". $resul['id'] ."' title='Delete Record' data-toggle='tooltip'><span class='btn btn-danger'>Delete&nbsp</span></a>";
                  echo "</td>";
                  echo "</tr>";
              }
              ?>
      </table>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>