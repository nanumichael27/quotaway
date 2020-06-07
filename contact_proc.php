<?php
    include 'connection.php';
    session_start();

    if($_POST['contact']){
        unset($_POST['contact']);
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $message = $_POST['count'];
        

        $contact = R::dispense('contact');
        $contact->name = $name;
        $contact->email = $email;
        $contact->datein = date('D-M-Y/ h-i-s');
        $contact->message - $message;
        $id = R::store($contact);//Returns ID of the newly stored
        if($id){
            
        $to      = 'info@quotawayservices.com'; // Send email to our user
        $subject = 'New Contact E-Mail'; // Give the email a subject 
        $message = 'Name: '.$name. "\r\n"
                .'Email :'.$email."\r\n"
                .'Phone Number :'.$tel."\r\n"
                .'Message :'.$count."\r\n";                 
        $headers = 'From:admin@quotawayservices.com' . "\n"; // Set from headers
        mail($to, $subject, $message, $headers);
            echo 'success';
        }
    }

    
    
?>


<?php       				
//     if(isset($_POST['create'])){
// 	unset($_POST['create']);
// 	$email =mysqli_real_escape_string($dtech,trim($_POST['email']));
// 	$fname = mysqli_real_escape_string($dtech,trim($_POST['fname']));
// 	$tel = mysqli_real_escape_string($dtech,trim($_POST['tel']));
// 	$count = mysqli_real_escape_string($dtech,trim($_POST['count']));
// 	$datein = date('D-M-Y/ h-i-s');  
//     $query_email = mysqli_query($dtech,"select * from contacts where email ='$email' ") or
//      die(mysqli_error($dtech));
// 	if(mysqli_num_rows($query_email) > 0){
// 		echo '<div class="alert alert-danger"><center>
// 		<span class="glyphicon glyphicon-remove"></span><hr/>
// 		 You have already applied.</center>
// 		</div>';
// 	}
// else {
// $insert = mysqli_query($dtech,"insert into contacts (fname,tel,email,count,datein)
//  value('$fname','$tel','$email','$count','$datein')") or
//   die(mysqli_error($dtech)); 

// if($insert){

// $to      = 'info@quotawayservices.com'; // Send email to our user
// $subject = 'New Contact E-Mail'; // Give the email a subject 
// $message = 'Name: '.$fname. "\r\n"
//            .'Email :'.$email."\r\n"
// 		   .'Phone Number :'.$tel."\r\n"
// 		   .'Message :'.$count."\r\n";
                     
// $headers = 'From:admin@quotawayservices.com' . "\n"; // Set from headers

// mail($to, $subject, $message, $headers);
//     echo'<div class="alert alert-success">
//     <center><h3>
//            Your Message have been Received, We will be in touch with you very soon. 
//     </h3></center>
// 		 <hr/>
//         </div>';
// }

// else {
// 	echo '<div class="alert alert-danger"><center>
// 		<br/>
// 		OOps, something went wrong,please try again.</center>
// 		</div>';
// }

// }       				
  
// }
?> 