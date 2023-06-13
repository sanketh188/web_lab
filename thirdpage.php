<html>

<head>
    <title>Internet banking</title>
    <style>
        h1 {
            font-size: 70px;
            text-align: center;
            margin-bottom: 10px;
            color: rgb(156, 66, 2);
            font-family: 'Times New Roman', Times, serif;
        }

        h1,
        p.ba {
            padding: 0px;
            margin: -10px;
        }
        .container{
            padding: 25px; 
        background-color: rgb(255, 255, 8);
        }

        #element1 {
            float: center;
        }

        #element2 {
            float: left;
        }
        .aa{
             padding-left: 1200px;
             
        }
    </style>
</head>

<body style="background-image:url('3rdbg.jpg'); background-repeat: no-repeat; background-size: cover;">

    <div id="element2">
        <img src="symbol.jpg" style="width:90px;">
    </div>
    <div id="element1">
        <h1>BOS</h1>
        <p class="ba" style="text-align:center; font-size:25px;"> Bank of Swiss</p>
    </div>
    <hr>

    <h2 style="text-align:center; font-size:40px"> Money Transfer</h2>
    <div class="container">
    <p style="font-size:30px;"> Receivers details</p>
    <form  method="post">
        <p style="font-size:25px;"><b>Account holder name</b>
            <br>
            <input type="text" name="acname" placeholder="Name" style="width:350px; height:30px" required>
            <br><br>
            <b>Account number</b> <br> <input type="text"name="acnum" placeholder="acc number" style="width:350px; height:30px" required>
            <br><br>
            <b>IFSC code</b> <br> <input type="text" name="ifsc" placeholder="Ifsc code" style="width:350px; height:30px" required>
            <br><br>
            <b>Amount</b> <br> <input type="text" name="amt" placeholder="rupees" style="width:350px; height:30px" required>

            <br><br>
            
                <input type="submit" name="submit" value="SEND">
            
        </div>


        <?php
        if ($_POST) {
            $host = "127.0.0.1:3307";
            $user = "root";
            $pass = "";
            $db = "transfer";
            $accname = $_POST['acname'];
            $accnum = $_POST['acnum'];

            $conn = mysqli_connect($host, $user, $pass, $db);
            $query = "SELECT* from details where acc_name = '$accname' and acc_no = '$accnum' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) == 1) {
                header('location: reg.php');
            } else {
                
                echo "Incorrect details";
            }
        }

?>
        <hr>
    <div class="aa">
        <ul>
            <b>
        <li> email_id : sankethoppo@gmail.com </li>
        <li> contact us: 8904949728 </li>
            </b>
        </ul>
    </div>


    </form>
</body>

</html>