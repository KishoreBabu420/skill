<?php


define('ADMIN_MAIL',"manoj@prismberry.com");


    contactForm();

   
function contactForm(){    
  
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$phone = strip_tags($_POST['phone']);
    $qmsg = strip_tags($_POST['message']);
    $page = strip_tags($_POST['page']);

	
	if($name!="" && $email!="")
	{

	     
	        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	        {
	            echo 'Please provide valid email';
	            return ;
			}
			
			
			if(!capValidate()){
 				echo 'capcha validation failed';
	            return ;
			}
			
			
			$recipients = ADMIN_MAIL;
			$subject = "Contact us Enquiry from - ".$name;
			$message = '<html><body style="margin: 0; padding: 0;" bgcolor="#ffffff">';
			$headers = 'MIME-Version: 1.0'."\n";
			$headers .= 'Content-Type: text/html; charset=ISO-8859-1'."\n";
			$headers .= 'From: Hackient Admin<no-reply@hackient.com>'."\n";
			$message .= '<div>Team,<br/><br/>You have received new Contact Form Enquiry. Please find the contact details mentioned below.<br/><br/>';
			$message .= '<table style="width:100%; border:1px solid #E3E3E3; border-collapse:collapse; font-family:arial; font-size:14px; line-height:20px;">';
			$message .= '<tr>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;"> Name</td>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;">'.$name.'</td>
						</tr>';
			
			$message .= '<tr>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;">Email</td>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;">'.$email.'</td>
						</tr>';
				
			$message .= '<tr>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;">Phone</td>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;">'.$phone.'</td>
						</tr>';
				
			$message .= '<tr>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;">Page</td>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;">'.$page.'</td>
						</tr>';
			
			$message .= '<tr>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;"> Message</td>
							<td style="width:30%; padding:10px;border:1px solid #E3E3E3;">'.$qmsg.'</td>
						</tr>';
		
			$message .='</table><br /><p>Have a great day!</p>';
			$message .='</div></body></html>';

			if(mail($recipients, $subject, $message, $headers))
			{
				$subject = 'Thank you from hackient.com';
				$to = $email;
				$message = '<html><body style="margin: 0; padding: 0;" bgcolor="#ffffff">';
			
				$headers = 'MIME-Version: 1.0'."\n";
				$headers .= 'Content-Type: text/html; charset=ISO-8859-1'."\n";
				$headers .= 'From: Hackient Admin<no-reply@hackient.com>'."\n";
				$message .= '<div>Dear '.$name.',<br/><br/>Thank you for contacting. We have received your information and will get back to you shortly.<br/><br/>';
			
	    		$message .='
	    		<br />
	    		<p>Have a great day ahead!</p>';
	    		$message .='</div></body></html>';
				if(mail($to, $subject, $message, $headers))
				{
    				echo 1;
    				return ;
				}
	        }
			else
			{
				echo "Email Issue";
				return ;
			}
		
	
	}
	else{
		echo "Please Fill All Mandatory Fields";
		return ;
	}
    
    
}


	function validate_mobile($mobile)
    {
        return preg_match('/^[0-9\-]+$/', $mobile);
    }
    
    
	function capValidate(){


		// Google reCaptcha secret key
		$secretKey  = "6LfX55EbAAAAAInxpbaceQvhRHFTEwAleYCWmyAd";

		$statusMsg = '';
	    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
	        
	        
	        
	        $data = array(
            'secret' => $secretKey,
            'response' =>$_POST['g-recaptcha-response']
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);
        $responseData = json_decode($response);
		        if($responseData->success){
		            //Contact form submission code goes here ...
		  
		            $statusMsg = 1;
		        }else{
		            $statusMsg = 0;
		        }
		    }else{
		        $statusMsg = 0;
		    }
	

		return $statusMsg;

	}



?>