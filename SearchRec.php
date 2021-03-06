<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>Search Recipe</title>
    <link rel="stylesheet" href="proj.css">
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a href="#" class="navbar-brand">
                MealPlanner
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="http://localhost/mealplanner/welcome.php" class="nav-item nav-link">Home</a>
                    <a href="http://localhost/mealplanner/recipeAdd.php" class="nav-item nav-link">Add Recipe</a>
                    <a href="http://localhost/mealplanner/meals.php" class="nav-item nav-link ">Plan Weekly Meal</a>
                    <a href="http://localhost/mealplanner/viewmeals.php" class="nav-item nav-link">View Meals, Ingredients & Shopping List</a>
                    <a href="http://localhost/mealplanner/searchRec.php" class="nav-item nav-link active text-primary">Search Recipe</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="#" class="nav-item nav-link text-info">Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                    <a href="http://localhost/mealplanner/logout.php" class="nav-item nav-link text-danger">Logout</a>
                </div>
            </div>
        </nav>

    <div class="container col-lg-5 mx-auto">
        <form class="main-form "  method="POST" action="http://localhost/mealplanner/search.php">

            <br>
            <br>

            <!-- First Name -->
            <div class="">
                <label class="" >Recipe Name:</label>
                <div class="">
                    <input type="text" class="form-control" id="uname" name="uname"
                        placeholder="Enter recipe name ">
                </div>
            </div>

            <div class="mt-3">
                <div class="">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </div>
        </form>
    </div>

    

   <!--DELIMITER //
 CREATE PROCEDURE GetSalary(IN personName varchar(5))
 BEGIN
 SELECT person_name, salary FROM works where person_name=personName;
END //
DELIMITER ;-->

       <!--DELIMITER //
 CREATE PROCEDURE GetNamess (IN name varchar(50))
 BEGIN
 SELECT password  FROM users where username=name;
END //
DELIMITER ; -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>