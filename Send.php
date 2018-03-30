<?php 
   class Send extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
				$this->load->library('email');
      } 







// PHP Mailer function
Public function index()
{
//   require_once BASEPATH.'../third_party/phpMailer/PHPMailerAutoload.php'; //This is the 
			$mail = new PHPMailer;
// 			$mail->SMTPDebug = 3;                               // Enable verbose debug output

			$mail->isSMTP(true);                                      // Set mailer to use SMTP
			$mail->Host = 'your@mail.com';  				  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = '********';              // SMTP username
			$mail->Password = '*******';                 // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom(' ', ' IIT Kharagpur');
			$mail->addAddress('email address', 'name of recipeint');     // Add a recipient
			$mail->addReplyTo('', '');

			$mail->isHTML(true);                                  // Set email format to HTML
		
			$mail->Subject = 'Megalith 2018 Campus Ambassador Programme';
			$mail->Body    = '	Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy Lorem ipsum dolor sit amet, consetetu
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
      
      
      
      ';       
			
			$mail->AltBody = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy e';
		
			if(!$mail->send()) {
		/* 		echo 'Message not sent.'; */
				echo "not peace";
			} else {
		/* 		echo 'message  sent'; */
				echo "peace";
			}
		 
		 
		 
}		 
		 
		 
	 }
		 
		 
