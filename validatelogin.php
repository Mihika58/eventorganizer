<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate login</title>
</head>
<body style="background-color:pink;">

    <?php
    session_start();

        $DB_SERVER = 'localhost';
        $DB_USERNAME = 'root';
        $DB_PASSWORD = '';
        $DB_NAME = 'eventmanagement';

        $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

        if(!$conn){
            die('Connection failed: '. mysqli_connect_error());
        }

        $username = $password = $err = '';

        if ($_SERVER['REQUEST_METHOD']=='POST'){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = '';

            if(!(empty(trim($username)) || empty(trim($password)))){
                try{
                    $query = "select username, password from logininfo where username = '$username'";
                    $result = mysqli_query($conn, $query);
                }
                catch (Exception){
                    echo("Error occured..");
                }
                
                if(mysqli_num_rows($result) > 0 ){
                    $row = $result->fetch_array();
                    $checkusername = $row['username'];
                    $checkpassword = $row['password'];

                    if($checkusername==$username && $checkpassword==$password){
                        header("Location: index.php");
                    }
                    else{
                        echo '<script>alert("Username or Password is incorrect...")</script>';
                    }
                    
                }
                else{
                    echo '<script>alert("You Don\'t have account please Create one...")</script>';
                }
            }
            else{
                echo '<script>alert("Username or Password field should not be empty...")</script>';
            }
    }

    $conn->close();
    session_destroy();
    ?>


    <center>
        <a href="./logineventpage.php">
            <button style="margin-top: 25%; height:50px;">Back To Login</button>
        </a>
    </center>

</body>
</html>