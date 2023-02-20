
<?php
// if condition
if(isset($_GET['search']))
{
    $query = $_GET['query'];
    $query = "SELECT * FROM `users` WHERE CONCAT(`id`, `fname`, `ltname`, `email`, `phone`) LIKE '%".$query."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}

// function
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <style>
            
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row py-5">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <form action="search.php" method="get">
                    <div class="row">
                    
                        <div class="col-md-6">
                             <div class="form-group">
                                <input type="text" name="query" placeholder=" Search student data"class="form-control">
                                
                             </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="submit" name="search" value="Filter"class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                    </form>
                <div class="col-md-3"></div>
            </div>
            </div>
       
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone <span><a href="#"class="btn btn-sm btn-success">Add Data</a></span></th>
                    </tr>
                    </thead>
                    <!-- populate table from mysql database -->
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['fname'];?></td>
                        <td><?php echo $row['ltname'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['phone'];?></td>
                    </tr>
                    <?php endwhile;?>
     </table>
            </div>
        </div>
    </div>
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    </body>
</html>