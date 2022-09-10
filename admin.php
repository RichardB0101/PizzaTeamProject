<?php
include_once 'header.php';
require_once 'database/dB_Connection.php';
?>

<h2 class="mt-3 text-center">Admin control panel</h2>
        <div class="mt-5 w-100">
            <table class="table text-light bg-dark">
                <tr>
                    <th>User_ID</th>
                    <th>Username</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Password</th>
                    
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
                <form action='assets/CRUD/update_form.php' method='GET'>
                <input type='hidden' name='update_id' value=" . $rows['user_id'] . " />
                <td><button type='submit' class='btn btn-primary'>Edit</button></td>
                </form>
                <form action='assets/CRUD/delete.php' method='GET'>
                <input type='hidden' name='del_id' value=" . $rows['user_id'] . " />
                <td><button type='submit' class='btn btn-danger'>Delete</button></td>
                </form>
                
            </tr>      
            ";
                }
                ?>

            </table>
            <h5 class="text-danger">Note, that if you add use using this form, password will not be encrypted!</h5>    
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
            <form action="assets/CRUD/unsetCart.php" class="form ms-5" method="POST">
                <button type="submit" class="btn btn-danger">Clear shopping cart</button>
            </form>


        </div>

    </body>

    </html>