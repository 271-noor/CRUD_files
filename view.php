<?php
include "config.php";
$sql= "SELECT * FROM `mobile`";
$result=$conn->query($sql);
?>

<!DOCTYPE html>
<html>
    <head><title>View Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2>Users</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Ram</th>
                        <th>Rom</th>
                        <th>Mrp</th>
                    </tr>
</thead>
<tbody>
    <?php
        if ($result->num_rows>0) {
            while ($row=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Ram'];?></td>
                    <td><?php echo $row['Rom'];?></td>
                    <td><?php echo $row['Mrp'];?></td>

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id'];?>" >Edit</a>
                    &nbsp;&nbsp;
                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'];?>" >Delete</a>
                    </td>
                </tr>

    <?php  }
}
?>
    </tbody>
    </table>
</div>
</body>
</html>