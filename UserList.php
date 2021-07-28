<?php 
    require "DbConnect.php";
    $userList= getAllUsers();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User List</title>
        <script src="External.js"></script>
    </head>
    <body>
        <h1>User list</h1>
        <hr>
        
        <input type="text" name="userName" id="userName">
       
        <button onclick="fetch()">Search</button>     

        <table id="b">
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Date of birth</th>
                <th>Religion</th>
                <th>Email</th>
                <th>UserName</th>
            </tr>
            
                <?php
                    for ($i=0; $i < count($userList); $i++) { 
                        echo "<tr>";
                        echo "<td>".$userList[$i]["id"]."</td>";
                        echo "<td>".$userList[$i]["firstName"]."</td>";
                        echo "<td>".$userList[$i]["lastName"]."</td>";
                        echo "<td>".$userList[$i]["gender"]."</td>";
                        echo "<td>".$userList[$i]["dob"]."</td>";
                        echo "<td>".$userList[$i]["religion"]."</td>";
                        echo "<td>".$userList[$i]["email"]."</td>";
                        echo "<td>".$userList[$i]["userName"]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            
        </table>
        
    
        
        
        <br>

       
        <br>
        <a href="Home.php">Home</a>
        <br>
        <a href="Logout.php">Log out</a>
    </body>
</html>