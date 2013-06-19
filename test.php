

<?php
												  $to = "er.anil.jaiswal@gmail.com";
												   $subject = "$_POST[subject]";
												   $message = "$_POST[message] \r\n $_POST[name]";
												   $header = "From:$_POST[email] \r\n";
												   $retval = mail ($to,$subject,$message,$header);
												   if( $retval == true )  
												   {
												      echo "Message sent successfully...";
												   }
												   else
												   {
												      echo "Message could not be sent...";
												   }
												?>