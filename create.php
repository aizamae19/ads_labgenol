<?php
require_once "config.php";

$name = $classification = $description = $equipments = $rules = $history = "";
$name_error = $classification_error = $description_error = $equipments_error = $rules_error = $history_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    if (empty($name)) {
        $name_error = "Name is required.";
    } elseif (!filter_var($name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $name_error = "Name is invalid.";
    } else {
        $name = $name;
    }

    $classification = trim($_POST["classification"]);
    if (empty($classification)) {
        $classification_error = "Classification is required.";
    } elseif (!filter_var($classification, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $classification_error = "Classification is invalid.";
    } else {
        $classification = $classification;
    }

    $description = trim($_POST["description"]);
    if (empty($description)) {
        $description_error = "Description is required.";
    } elseif (!filter_var($description, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $description_error = "Please enter a description.";
    } else {
        $description = $description;
    }

    $equipments = trim($_POST["equipments"]);
    if (empty($equipments)) {
        $equipments_error = "Equipments is required.";
    } elseif (!filter_var($equipments, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $equipments_error = "Equipments is invalid.";
    } else {
        $equipments = $equipments;
    }

    $rules = trim($_POST["rules"]);
    if (empty($rules)) {
        $rules_error = "Rules is required.";
    } elseif (!filter_var($rules, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $rules_error = "Rules is invalid.";
    } else {
        $rules = $rules;
    }

    $history = trim($_POST["history"]);
    if (empty($history)) {
        $history_error = "History is required.";
    } elseif (!filter_var($history, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))) {
        $history_error = "History is invalid.";
    } else {
        $history = $history;
    }

    if (empty($name_error_err) && empty($classification_error) && empty($description_error) && empty($equipments_error) && empty($rules_error) && empty($history_error)) {
          $sql = "INSERT INTO `sports` (`name`, `classification`, `description`, `equipments`, `rules`, `history`) VALUES ('$name', '$classification', '$description', '$equipments', '$rules', '$history')";

          if (mysqli_query($conn, $sql)) {
              header("location: indexSports.php");
          } else {
               echo "Something went wrong. Please try again later.";
          }
      }
    mysqli_close($conn);
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Sports</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
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
                    <div class="page-header">
                        <h2>Create Sports</h2>
                    </div>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_error)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($classification_error)) ? 'has-error' : ''; ?>">
                            <label>Classification</label>
                            <select name="classification" id="classification" class="form-control" value="<?php echo $classification; ?>" style="text-align: center;">
                                <option value="Combat">Combat</option>
                                <option value="Individual Aesthetic">Individual Aesthetic</option>
                                <option value="Individual Aiming">Individual Aiming</option>
                                <option value="Racing">Racing</option>
                                <option value="Net or Court">Net or Court</option>
                                <option value="Invasion">Invasion</option>
                                <option value="Fielding">Fielding</option>
                                <option value="Target">Target</option>
                            </select>
                            <span class="help-block"><?php echo $classification_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($description_error)) ? 'has-error' : ''; ?>" >
                            <label>Description</label>
                            <input type="text" name="description" class="form-control" value="<?php echo $description; ?>">
                            <span class="help-block"><?php echo $description_error;?></span>
                        </div>
                        
                        <div class="form-group <?php echo (!empty($equipments_error)) ? 'has-error' : ''; ?>">
                            <label>Equipments</label>
                            <input type="text" name="equipments" class="form-control" value="<?php echo $equipments; ?>">
                            <span class="help-block"><?php echo $equipments_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($rules_error)) ? 'has-error' : ''; ?>">
                            <label>Rules</label>
                            <input type="text" name="rules" class="form-control" value="<?php echo $rules; ?>">
                            <span class="help-block"><?php echo $rules_error;?></span>
                        </div>

                        <div class="form-group <?php echo (!empty($history_error)) ? 'has-error' : ''; ?>">
                            <label>History</label>
                            <input type="text" name="history" class="form-control" value="<?php echo $history; ?>">
                            <span class="help-block"><?php echo $history_error;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="indexSports.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>