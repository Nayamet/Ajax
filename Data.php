<?php 

        require "DbConnect.php";

        $userName=$_GET['userName'];
        //$userName="Fahim";
        //$userName="";

        if(!empty($userName))
        {
                $data=getUser($userName);

            //print_r($data);     

            if(count($data)>0)
            {
                echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>firstName</th>";
                echo "<th>lastName</th>";
                echo "<th>gender</th>";
                echo "<th>date of birth</th>";
                echo "<th>religion</th>";
                echo "<th>email</th>";
                echo "<th>UserName</th>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>".$data["0"]["id"]."</td>";
                echo "<td>".$data["0"]["firstName"]."</td>";
                echo "<td>".$data["0"]["lastName"]."</td>";
                echo "<td>".$data["0"]["gender"]."</td>";
                echo "<td>".$data["0"]["dob"]."</td>";
                echo "<td>".$data["0"]["religion"]."</td>";
                echo "<td>".$data["0"]["email"]."</td>";
                echo "<td>".$data["0"]["userName"]."</td>";
                echo "</tr>";
            }
            else
            {
                echo "No data found";
            }
        }
        else
        {
            $userList= getAllUsers();
                echo "<tr>";
                echo "<th>Id</th>";
                echo "<th>firstName</th>";
                echo "<th>lastName</th>";
                echo "<th>gender</th>";
                echo "<th>date of birth</th>";
                echo "<th>religion</th>";
                echo "<th>email</th>";
                echo "<th>UserName</th>";
                echo "</tr>";
                echo "<tr>";
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

        }
        


?>