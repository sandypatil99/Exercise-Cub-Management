<?php
$con = mysqli_connect("localhost", "root", "", "loginsystem");
if (isset($_POST['login_submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "select * from logintb where username='$username' and password='$password'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) == 1)
    {
        header("Location:admin-panel.php");

    }
    else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
}
if (isset($_POST['pat_submit']))
{
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $tainername = $_POST['tainername'];
    $query = "insert into memberdetails(fname,email,contact,tainername)values('$fname','$email','$contact','$tainername')";
    $result = mysqli_query($con, $query);
    if ($result)
    {
        echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
}
if (isset($_POST['tra_submit']))
{
    $Name = $_POST['Name'];
    $phone = $_POST['phone'];
    $query = "insert into Trainer(Name,phone) values('$Name','$phone')";
    $result = mysqli_query($con, $query);
    if ($result)
    {
        echo "<script>alert('Trainer added.')</script>";
        echo "<script>window.open('trainer.php','_self')</script>";
    }
}
if (isset($_POST['pay_submit']))
{
    $customer_name = $_POST['customer_name'];
    $packname = $_POST['packname'];
    $Amount = $_POST['Amount'];
    $payment_type = $_POST['payment_type'];
  
    $query = "insert into payment(Amount,packname,payment_type,customer_name)values('$Amount','$packname','$payment_type','$customer_name')";
    $result = mysqli_query($con, $query);
    if ($result)
    {
        echo "<script>alert('Payment sucessfull.')</script>";
        echo "<script>window.open('payment.php','_self')</script>";
    }
}

function get_member_details()
{
    global $con;
    $query = "select * from memberdetails";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result))
    {
        $id = $row['id'];
        $fname = $row['fname'];
        $email = $row['email'];
        $contact = $row['contact'];
        $tainername = $row['tainername'];
 
        echo "<tr>
             <td>$id</td>
            <td>$fname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$tainername</td>
        </tr>";
    }
}
function get_package()
{
    global $con;
    $query = "select * from Package";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result))
    {
        $Package_id = $row['Package_id'];
        $Package_name = $row['Package_name'];
        $Amount = $row['Amount'];
        echo "<tr>
        <td>$Package_id</td>
        <td>$Package_name</td>
            <td>$Amount</td>
            
        </tr>";

    }
}
function get_trainer()
{
    global $con;
    $query = "select * from Trainer";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result))
    {
        $Trainer_id = $row['Trainer_id'];
        $Name = $row['Name'];
        $phone = $row['phone'];
        echo "<tr>
        <td>$Trainer_id</td>
        <td>$Name</td>
            <td>$phone</td>
            
        </tr>";

    }
}
function get_payment()
{
    global $con;
    $query = "select * from Payment";
    $result = mysqli_query($con, $query);
    while ($row = mysqli_fetch_array($result))
    {
        $pid = $row['pid'];
        $Amount = $row['Amount'];
        $payment_type = $row['payment_type'];
        $customer_name = $row['customer_name'];

        echo "<tr>
        <td>$pid</td>
        <td>$customer_name</td>
        <td>$Amount</td>
        <td>$payment_type</td>
    </tr>";

    }
}

?>
