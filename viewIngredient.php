<?php


// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>

    <head>
        <title>Input</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity='sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin='anonymous'>

        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
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
                    <a href="#" class="nav-item nav-link">Home</a>
                    <a href="http://localhost/mealplanner/recipeAdd.php" class="nav-item nav-link active text-primary">Add Recipe</a>
                    <a href="http://localhost/mealplanner/meals.php" class="nav-item nav-link">Plan Weekly Meal</a>
                </div>
                <div class="navbar-nav ml-auto">
                    <a href="#" class="nav-item nav-link">Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                    <a href="http://localhost/mealplanner/logout.php" class="nav-item nav-link">Logout</a>
                </div>
            </div>
        </nav>

        <div class="container mt-5 text-center">
            <table id="ingredient_data" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>Ingredient Name</td>
                    </tr>
                </thead>
                <?php /*
                    $vnum = 1;
                    $vmax = 8;
                    while ($vnum <= $vmax) {
                        CREATE VIEW sSS as SELECT recID from breakfast WHERE (mealID=2);
                        CREATE VIEW mew as SELECT ingredientID from recIngredient WHERE (recID IN (SELECT * FROM sSS));
                        SELECT ingrName FROM ingredients WHERE (ingrID IN (SELECT * FROM mew));
                        $connect = mysqli_connect("localhost", "root", "", "mealplan");
                        $query = "CREATE VIEW sS$vnum as SELECT ingredientID FROM recIngredient WHERE (recID = $vnum)";
                        $query = "CREATE VIEW sSS$vnum as SELECT recID from breakfast WHERE (mealID = $vnum)";
                        $query2 = "CREATE VIEW mew$vnum as SELECT ingredientID from recIngredient WHERE (recID IN (SELECT * FROM sSS$vnum));";
                        $result = mysqli_query($connect, $query);
                        $result2 = mysqli_query($connect, $query2);
                        
                        
                        $iquery = "SELECT ingrName FROM ingredients WHERE (ingrID IN (SELECT * FROM sS$vnum))";
                        $iquery = "SELECT ingrName FROM ingredients WHERE (ingrID IN (SELECT * FROM mew$vnum));";
                        $iresult = mysqli_query($connect, $iquery);
                        while($row = mysqli_fetch_array($iresult)) {
                            echo $vnum;
                            echo '
                            <tr>
                                <td class="col-lg-6 text-info">'.$row["ingrName"].'</td>
                            </tr>';
                            $vnum++;
                        }
                    
                    }
                    
                 */?>
            </table>
        </div>
    </body>
</html>

<!--<script>
    $(document).ready(function() {
        $('#ingredient_data').DataTable();
    });
</script>-->