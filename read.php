<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
  <?php
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        require_once "config.php";

        $id = trim($_GET["id"]);
        $query = mysqli_query($conn, "SELECT * FROM sports WHERE ID = '$id'");

        if ($sport = mysqli_fetch_assoc($query)) {
            $name   = $sport["name"];
            $classification    = $sport["classification"];
            $description       = $sport["description"];
            $equipments   = $sport["equipments"];
            $rules    = $sport["rules"];
            $history       = $sport["history"];
        } else {
            header("location: read.php");
            exit();
        }

        mysqli_close($conn);
    } else {
        header("location: read.php");
        exit();
    }
  ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>Sports View</h1>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <p class="form-control-static"><?php echo $name ?></p>
                    </div>
                    <div class="form-group">
                        <label>Classification</label>
                        <p class="form-control-static"><?php echo $classification ?></p>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <p class="form-control-static"><?php echo $description ?></p>
                    </div>
                    <div class="form-group">
                        <label>Equipments</label>
                        <p class="form-control-static"><?php echo $equipments ?></p>
                    </div>
                    <div class="form-group">
                        <label>Rules</label>
                        <p class="form-control-static"><?php echo $rules ?></p>
                    </div>
                    <div class="form-group">
                        <label>History</label>
                        <p class="form-control-static"><?php echo $history ?></p>
                    </div>
                    <p><a href="indexSports.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>