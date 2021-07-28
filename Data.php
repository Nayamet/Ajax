<?php 

        require "DbConnect.php";

        $userName=$_GET['userName'];
        //$userName="Fahim";
        //$userName="";

        $data=getUser($userName);   
        //print_r($data);     

        if(count($data)>0)
        {
            echo "<tr>";
            echo "<th>Id</th>";
            echo "<th>UserName</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>".$data["0"]["id"]."</td>";
            echo "<td>".$data["0"]["userName"]."</td>";
             echo "</tr>";
        }
        else
        {
            echo "No data found";
        }


?>