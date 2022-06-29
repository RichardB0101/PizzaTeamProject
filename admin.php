    <?php
    require_once("database/dB_Connection.php");

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>

    <body>
        <div class="w-100">
            <table class="table text-light bg-dark">
                <tr>
                    <th>User_ID</th>
                    <th>Fullname</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    
                </tr>
                <?php
                $result = mysqli_query($conn_full, "SELECT * FROM `users`");
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo "
            <tr>
                <td>" . $rows['user_id'] . "</td>
                <td>" . $rows['username'] . "</td>
                <td>" . $rows['fullname'] . "</td>
                <td>" . $rows['email'] . "</td>
                <td>" . $rows['password'] . "</td>
                <form action='update_form.php' method='GET'>
                <input type='hidden' name='update_id' value=" . $rows['user_id'] . " />
                <td><button type='submit' class='btn btn-primary'>Edit</button></td>
                </form>
                <form action='delete.php' method='GET'>
                <input type='hidden' name='del_id' value=" . $rows['user_id'] . " />
                <td><button type='submit' class='btn btn-danger'>Delete</button></td>
                </form>
                
            </tr>      
            ";
                }
                ?>

            </table>

            <h3>Add new user to database:</h3>
            <form action="assets/CRUD/create.php" class="form ms-5 w-25" method="POST">
                <input name="form_fullname" type="text" placeholder="Enter fullname"><br>
                <input name="form_username" type="text" placeholder="Enter username"><br>
                <input name="form_email" type="email" placeholder="Enter email"><br>
                <input name="form_password" type="text" placeholder="Enter password"><br>
                <button type="submit" class="btn btn-primary" style="width:205px;">Create new user</button>
            </form>
            <form action="assets/CRUD/delete_all.php" class="form ms-5" method="POST">
                <button type="submit" class="btn btn-danger">Clear all database records</button>
            </form>

        </div>

    </body>

    </html>