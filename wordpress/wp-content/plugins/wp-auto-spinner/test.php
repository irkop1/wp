<?php 

function api($text,$quality,$email,$pass)

{

   if(isset($text) && isset($quality) && isset($email) && isset($pass))

   {

      $text = urlencode($text);

      $ch = curl_init('http://wordai.com/users/turing-api.php');

      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

      curl_setopt ($ch, CURLOPT_POST, 1);

      curl_setopt ($ch, CURLOPT_POSTFIELDS, "s=$text&quality=$quality&email=$email&pass=$pass&output=json");

      $result = curl_exec($ch);

      curl_close ($ch);

      return $result;

   }

   else

   {

      return 'Error: Not All Variables Set!';

   }

}

//The variable quality can currently be 'Regular', 'Unique', 'Very Unique', 'Readable', or 'Very Readable'

$start = time();
echo api(stripslashes('Here is an example.'),'Regular','marc.deschenaux@gmail.com','Alia$2607');

echo '<br>Request took:' . ( time() - $start ) . ' seconds';