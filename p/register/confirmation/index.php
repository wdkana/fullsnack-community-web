<?php

session_start();
$data = $_SESSION['confirmation-email'];

if(!isset($data) && $data != 1){
	header("location:http://fullsnack.org");
}

include '../../../model/User_model.php';
$user = new User();


$email = $_GET['email'];
$hash = $_GET['hash'];


if(isset($email) && isset($hash)){


$user->set_Email($email);
$user->set_Hash($hash);

$validate_user = $user->validating_email_confirmation();

include '../../../controller/User_controller.php';
$users = new User_controller();

$session = $users->validate();

if($session == true){
  header("location: http://localhost/fullsnack.org/p/users/profile");
}

if($validate_user == 1){
	$confirm_user = $user->email_confirmation();
		if($confirm_user){
			$_SESSION['user_email'] = $user->get_Email();
			$_SESSION['userisvalid'] = TRUE;
			header('location:http://localhost/fullsnack.org/p/register/confirmation/userisvalid.php');
		}else{
			?>
				<script type="text/javascript">
					alert('Maaf, terjadi kesalahan...');
				</script>
			<?php
		}
}else{
	?>
		<script type="text/javascript">
			alert('Maaf, terjadi kesalahan...');
		</script>
	<?php
}
}
?>