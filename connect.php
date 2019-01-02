<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$optradio = $_POST['optradio'];
$phone = $_POST['phone'];
$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($name)||!empty($email)||!empty($optradio)||!empty($phone)||!empty($username)||!empty($password)){

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "priish_triall2";

    //create a connection
    $conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);

    if($conn->connect_error){
        die("Connection Failed");
    }
    else{
        echo "Connection Successfull";}}
//     if(mysqli_connect_error()){
//         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
//     }   else {
//         $SELECT = "SELECT email From registration Where email = ? Limit 1";
//         $INSERT = "INSERT Into registration (name, email, optradio, phone, username, password) values(?,?,?,?,?,?)";

//         //Prepare statement
//         $stmt = $conn->prepare($SELECT);
//         $stmt->bind_param("s",$email);  
//         $stmt->execute();
//         $stmt->bind_result($email);
//         $stmt->store_result();
//         $rnum = $stmt->num_rows;

//         if (rnum==0){
//             $stmt->close();

//             $stmt = $conn->prepare($INSERT);
//             $stmt->bind_param("sssiss",$name,$email,$optradio,$phone,$username,$password);
//             $stmt->execute();
//             echo "New record inserted succesfully!";
//         }   else {
//             echo "Someone already registered using this email.";
//         }
//         $stmt->close();
//         $conn->close();

//     }

// }   else{
//     echo "All fields are required";
//     die();
// }
?>

<!-- 
$con = new mysqli ("localhost","root","","admission");
if($con->connect_error){
	die("Connection Failed");
}
else{
	echo "Connection Successfull";
	// $Fname = $_POST['Fname'];
	// $Mname = $_POST['Mname'];
	// $Lname = $_POST['Lname'];
	// $gender = $_POST['gender'];
	// $address = $_POST['address'];
	// $city = $_POST['city'];
	// $District = $_POST['District'];
	// $State = $_POST['State'];
	// $pincode = $_POST['pincode'];
	// $Mnumber = $_POST['Mnumber'];
	// $email = $_POST['email'];
	// $IXpercent = $_POST['IXpercent'];
	// $Xpercent = $_POST['Xpercent'];
	// //echo "$Fname <br> $Mname <br> $Lname <br> $gender <br> $address <br> $city <br> $District <br> $State <br> $pincode <br> $Mnumber <br> $email <br> $IXpercent <br> $Xpercent";
	// $query = "insert into form10 values (NULL , '$Fname','$Mname','$Lname','$gender','$address','$city','$District','$State','$pincode','$Mnumber','$email','$IXpercent',$Xpercent);" ;
	// $con->query($query);
	// echo "<script> alert('Form Saved Successfully'); window.location = 'nevnav.html'; </script>";
}
$con->close(); -->
