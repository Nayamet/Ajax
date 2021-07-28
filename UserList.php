<?php 
    require "DbConnect.php";
    $userList= getAllUsers();
    
    // if(!empty($_GET['uid']) and !empty($userName))
    // {
    //     $response=delete($_GET['uid'],$_GET['userName']);
    //     if($response)
    //     {
    //         $userList= getAllUsers();
    //     }
    // }
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
                <th>UserName</th>
            </tr>
            
                <?php
                    for ($i=0; $i < count($userList); $i++) { 
                        echo "<tr>";
                        echo "<td>".$userList[$i]["id"]."</td>";
                        echo "<td>".$userList[$i]["userName"]."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            
        </table>
        
    
        <!-- <script>
            function fetch()
            {
                var userName=document.getElementById("userName").value;
                let b=document.getElementById("b");

                if(userName.length==0)
                {
                    //b.innerHTML='Empty'
                }
                else
                {
                    var XML= new XMLHttpRequest();
                    XML.onreadystatechange = function()
                    {
                        if(XML.status==200)
                        {
                            b.innerHTML=XML.responseText; 
                        }
                    };
                    XML.open('GET','Data.php?userName=' +userName,true);
                    XML.send();
                }
                
               

                
            }   

        </script> -->
        
        <br>

        <?php 
            // if(count($userList)>0)
            // {
            //     echo "<table>";
            //     echo "<tr>";
            //     echo "<th>Id</th>";
            //     echo "<th>UserName</th>";
            //     echo "<th>Action</th>";
            //     echo "</tr>";
            //     for ($i=0; $i < count($userList); $i++) { 
            //         echo "<tr>";
            //         echo "<td>".$userList[$i]["id"]."</td>";
            //         echo "<td>".$userList[$i]["userName"]."</td>";
            //         echo "<td>"."<a href='".$_SERVER['PHP_SELF'] . "?uid=".$userList[$i]["id"] 
            //         . "&userName=" .$userList[$i]["userName"]."' >Delete</a>"."</td>";
            //         echo "</tr>";
            //     }
            //     echo "</table>";
            // }
            // else
            // {
            //     echo "<h2>No record founds</h2>";
            // }

            
        ?>
        <br>
        <a href="Home.php">Home</a>
        <br>
        <a href="Logout.php">Log out</a>
    </body>
</html>