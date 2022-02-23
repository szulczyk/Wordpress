<h1>Stay in Touch</h1>
<hr/>
<form>
	<input type="text" id="enter-mail" value="Enter your Email"></input>
	<input type="submit" id="subscribe" class="button" value="Subscribe">
</form>
<?
$email = $_POST["email"]; 
	$message = $_POST["message"];

	$header = "From: $email \nContent-Type:".
			  ' text/plain;charset="UTF-8"'.
			  "\nContent-Transfer-Encoding: 8bit";

	 if(mail($to, "$subject", $message", $header)){
		echo "Wiadomość wysłana poprawnie";
	}
?>