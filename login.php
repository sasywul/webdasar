<?php
session_start();
if(isset($_POST["username"]) && isset($_POST["password"])){
$username=$_POST["username"];
$password=$_POST["password"];

echo "username :" .$username;
echo "password :" .$password;

if($username=="usm" && $password =="123"){
    $_SESSION["username"]="usm";
    header("Location:dashboard.php");
    }
}


?>

<html>
    <head>
        <title>Login Page</title>
        <style type="text/css">
                body{
                    display: flex;
                    justify-content: center;
                    background-image: url("");
                }
                button {
                background-color: rgb(96, 218, 14);
                padding: 10px;
                cursor: pointer;
                border-radius: 10px;
            }
            button:hover{   
                background-color: rgb(33, 88, 19);
                
            }
            input{
                padding: 7px;
                border-radius: 10px;
            }
            table{
                border: 5px solid green;
                padding: 20px;
                border-radius: 10px;
                background-color: aqua;
            }
        </style>
    </head>
    <body>
        <form method="post" action="login.php">
        <table>
            <tr>
                <td colspan="2" style="text-align: center;" >LOGIN</td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"/></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"/></td>
            </tr>
            <tr>
                <td colspan="2" ><input type="checkbox" />Ingatkan saya</td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><button type="submit" >SUBMIT</button></td>
            </tr>
        </table>
        </form>
    </body>
</html>