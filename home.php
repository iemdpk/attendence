<?php
require('conn.php');
session_start();
$username = $_SESSION['noker'];
echo "hello world".$username;
$sql_query = "SELECT * FROM `$username`";
$run = mysqli_query($con,$sql_query);
?>

<html>
    <head>
        <title>Deepak Mishra</title>
        <link rel="stylesheet" type="text/css" href="css/main.css" >
        </head>
    <body class="deepak">
       
        <table class="main-table"> 
            <!------main-banner-->
            <tr>
            <th class="banner">
                <img src="picture/main.png"></th></tr>
    <!--ending--->
        <tr>
            <table class="main-list">
                <tr>
                    <!-----student list--->
            <td class="picture"><!---main-table-->
                    <div>
                    <table class="student_chart">
                    <tr>
                    <td><h2 class="chatai">Check</h2></td>
                    <td><h2 class="chatai">FullName</h2></td>
                    <td><h2 class="chatai">Father Name</h2></td>
                    <td><h2 class="chatai">Mobile Number</h2></td>
                    </tr>
                    <form action="sendsms.php" method="post">
                        <?php
                        while($pass = mysqli_fetch_array($run))
                        {
                      echo '<tr>'.
                      '<td><h2 class="chatai"><input type="checkbox" name="chk[]" value="'.$pass['id'].'"></h2></td>'.
                        '<td><h2 class="chatai">'.$pass['name'].'</h2></td>'.
                        '<td><h2 class="chatai">'.$pass['fname'].'</h2></td>'.
                        '<td><h2 class="chatai">'.$pass['mobile'].'</h2></td>'.
                        '</tr>';
                        }
                        ?>
                        
                      </table>
                </div>
                <table class="send">
                <tr><td><input class="send" type="submit" value="send Message"></td></tr>
                </table>
                </form>
            </td>
            <!----stduent data--->
            <td class="registration">
                <table class="student">
                    <form action="insert.php" method="POST">
                            <tr>
                                    <td class="heading">Student Add</td>
                                    <td class="heading"></td>
                                    
                                </tr> 
                        <tr>
                            <td>Student Name</td>
                            <td><input type="text" name="student_name"></td>
                        </tr>
                        <tr>
                                <td>Fathers Name</td>
                                <td><input type="text" name="fathers_name"></td>
                            </tr>
                            <tr>
                                    <td>Mobile number</td>
                                    <td><input type="text" name="number"></td>
                                </tr>
                                <tr>
                                        <td>Section</td>
                                        <td><input type="text" name="sec"></td>
                                    </tr>
                                    <tr>
                                            <td>Year</td>
                                            <td><input type="text" name="year"></td>
                                        </tr>
                                        <tr>
                                                <td><input type="submit" value="Insert"></td></form>
                                                <form action="log.php" method="post">
                                                <td><input type="submit" value="Log Out" name="log"></td>
                                                </form>
                                                
                                            </tr>
                                        
                                        
                                            <tr>
                                                    <td class="heading"></td>
                                                    <td class="heading"></td>
                                            </tr>
                                            <tr>
                                                    <td class="heading">Search</td>
                                                    <td class="heading"></td>
                                                    
                                                </tr> 
                                        
                                        <tr>
                                                <td>Year</td>
                                                <td><h2>2</h2></td>
                                            </tr>
                                            <tr>
                                                    <td>Section</td>
                                                    <td><h2>A</h2></td>
                                                </tr>
                                                <tr>
                                                        <td>Mobile</td>
                                                        <td><h2>8789033735</h2></td>
                                                    </tr>
                                                    
                                   
                </table>
                
            </td>
        </tr>
            </table>
        </tr>
        </table>
    </body>
</html>