<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Dashboard</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <style type="text/css">
          .wrapper {
              width: 1200px;
              margin: 0 auto;
          }
      </style>
  </head>
  <body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">List of Sports</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add Sports</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // select all users
                    $data = "SELECT * FROM sports";
                    if($sports = mysqli_query($conn, $data)){
                        if(mysqli_num_rows($sports) > 0){
                            echo "<table class='table table-bordered table-striped'>
                                    <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Classification</th>
                                        <th>Description</th>
                                        <th>Equipments</th>
                                        <th>Rules</th>
                                        <th>History</th>
                                        <th>Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                                while($sport = mysqli_fetch_array($sports)) {
                                    echo "<tr>
                                            <td>" . $sport['id'] . "</td>
                                            <td>" . $sport['name'] . "</td>
                                            <td>" . $sport['classification'] . "</td>
                                            <td>" . $sport['description'] . "</td>
                                            <td>" . $sport['equipments'] . "</td>
                                            <td>" . $sport['rules'] . "</td>
                                            <td>" . $sport['history'] . "</td>
                                            <td>
                                              <a href='read.php?id=". $sport['id'] ."' title='View Sport' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
                                              <a href='edit.php?id=". $sport['id'] ."' title='Edit Sport' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                                              <a href='delete.php?id=". $sport['id'] ."' title='Delete Sport' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                                            </td>
                                          </tr>";
                                }
                                echo "</tbody>
                                </table>";
                            mysqli_free_result($sports);
                        } else{
                            echo "<p class='lead'><em>No records found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>