

<html lang='en'>
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <title>Internet banking</title>
    <style>
        h1 {
            font-size: 70px;

            margin-bottom: 10px;
            color: rgb(156, 66, 2);
            font-family: 'Times New Roman', Times, serif;
        }


        h1,
        p.ba {
            padding: 0px;
            margin: -10px;
        }

        p.h1,
        p.h2 {
            padding: 0;
            margin: 0;
        }

        p.h2 {
            text-align: center;
            font-size: 50px;
            margin-bottom: -10px;
            padding-left: 500px;
        }

        p.h1 {
            text-align: center;
            font-size: 45px;
            font-family: 'verdana';
            padding-bottom: 25px;
        }

        .sa {
            background-color: rgb(247, 223, 4);
        }

        #element1 {
            padding-left: 660px;
        }

        #element2 {
            float: left;
        }

        
        
       

        
        input[type=submit] {
            background-color: white;
            color: black;
            
        }

       
       

        #message {
            display: none;
            background: yellow;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            padding: 10px 35px;
            font-size: 18px;
        }

     
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }


        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }
        .aa{
             padding-left: 1200px;
             
        }
    </style>
</head>

<body style="background-image:url('2ndbg.jpg'); background-repeat: no-repeat; background-size:cover;">
    <div id="element2">
        <img src="symbol.jpg" style="width:90px;">
    </div>
    <div id="element1">
        <h1>BOS</h1>
        <p class="ba" style=" font-size:25px;"> Bank of Swiss</p>

    </div>
    <hr>

    <p class="h1">Personal Banking</p>
    <p class="h2">Login</p>
        <form method="post">
            
            <p style="font-size:30px; padding-left:900px; ">
            <label for="usrname">Username</label>
            <input type="text" id="usrname" name='usrname' style="width:250px; height:30px;" required>
            <br>
            <label for="psw">Password</label>
            <input type="password" id="psw" name='psw'  style="width:250px; height:30px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                required>
            <br>
            <p1 style="padding-left:250px;">
            <input type="submit" name="Submit" value="login">
            </p1>
            </p>



                   
<?php
if($_POST)
{
    $host = "127.0.0.1:3307";
    $user = "root";
    $pass = "";
    $db = "san1";
    $username = $_POST['usrname'];
    $password = $_POST['psw'];
    
    $conn = mysqli_connect($host, $user, $pass, $db);
    $query = "SELECT* from login where username = '$username' and password = '$password' ";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result)==1)
    {
        header('location: secondpage.php');
    }
    else{
        echo "<div style='padding-left:1050px'>";
        echo "Incorrect username/password </div>";
    
    }
}

?>

            <hr>
            <marquee direction="right" scrollamount="10" style="font-size:20px;"> The bank service will be closed from 5pm
                to 6pm </marquee>
            <hr>
    
        </form>
 

    

    <div id="message">
        <h3>Password must contain the following:</h3>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
    </div>

    <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

       
        myInput.onfocus = function () {
            document.getElementById("message").style.display = "block";
        }

    
        myInput.onblur = function () {
            document.getElementById("message").style.display = "none";
        }


        myInput.onkeyup = function () {
         
            var lowerCaseLetters = /[a-z]/g;
            if (myInput.value.match(lowerCaseLetters)) {
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

      
            var upperCaseLetters = /[A-Z]/g;
            if (myInput.value.match(upperCaseLetters)) {
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            var numbers = /[0-9]/g;
            if (myInput.value.match(numbers)) {
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

          
            if (myInput.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }
    </script>
    <div class="sa">
        <h2> <u><b>Guidelines</b></u> </h2>
        <ul>
            <li>In order to improve the quality of service available to customers in branches, the banks have been
                advised to ensure that full address / telephone number of the branch is invariably mentioned in the Pass
                Books / Statement of Accounts issued to account holders.</li>
            <li>
                Banks are therefore advised to invariably offer pass book facility to all its savings bank account
                holders (individuals) and in case the bank offers the facility of sending statement of account and the
                customer chooses to get statement of account, the banks must issue monthly statement of accounts.
            </li>
            <li> Banks are required to make the customer aware of both the options available to him i.e. dropping
                cheques in the drop-box or tendering them at the counters so that he can take an informed decision in
                this regard. Banks are therefore advised to invariably display on the cheque drop-box itself that
                'Customers can also tender the cheques at the counter and obtain acknowledgment on the pay-in-slips'.
            </li>
            <li>Banks are advised to give wide publicity and provide guidance to deposit account holders on the benefits
                of nomination facility and the survivorship clause.</li>
            <li>Banks with core banking solution are advised to provide “payable at par"/ "Multi-city” cheque issuance
                facility to all the eligible and requesting customers. </li>
            <li>The banks are required to display and update, on their websites, the details of certain service charges.
                They are also required to place service charges and fees on the homepage of their websites at a
                prominent place under the title of Service Charges and Fees so as to facilitate easy access to the bank
                customers. </li>
            <li>The banks are therefore, advised to ensure that none of their branches/staff refuse to accept lower
                denomination notes and / or coins and to issue strict instructions to all branches that the staff
                concerned should in no case refuse to accept small denomination notes and coins tendered at the
                counters. </li>
        </ul>

    </div>
    <hr>
    <div class="aa">
        <ul>
            <b>
        <li> email_id : sankethoppo@gmail.com </li>
        <li> contact us: 8904949728 </li>
            </b>
        </ul>
    </div>


</body>

</html>