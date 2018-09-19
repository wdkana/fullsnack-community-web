<?php
if(!isset($_SESSION)){
	session_start();
}
class User_controller{

	//validating user...
	public function validate()
	{
		if(isset($_SESSION['logged-in']) && $_SESSION['logged-in'] == "valid")
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function register()
	{
		if($_POST):
			require_once '../../model/User_model.php';
			require_once '../../library/App_library.php';
			$user = new User();
			$setup_member = new App_library();
			$member_id = $setup_member->get_code('collection_member');

			$email = htmlentities($_POST['email']);
			$password = htmlentities($_POST['password']);
			$confirm_password = htmlentities($_POST['confirm_password']);
			$hash = sha1(md5( rand(0,1000) ));

			if($password != $confirm_password):
				?>
					<script type="text/javascript">
						alert('password tidak sama...');
						window.location.replace('http://localhost/fullsnack.org/p/register/');
					</script>
				<?php
			
			else:
			$user->set_Email($email);
			$user->set_Password($password);
			$user->set_MemberId($member_id);
			$user->set_Hash($hash);

			$status = $user->register_check();

			if($status == 0)
			{
				$user->register();
				$setup_member->send_email($email, $hash);	
	     	}
	     	else
	     	{
	     		?>
	     		<script type="text/javascript">
	     			alert('Please use another email account for registration');
	     		</script>
	     		<?php
	     	}
	 		endif;
		endif;
	}

	public function login()
	{	
		if(isset($_POST['login']))
		{

			require_once '../../../model/User_model.php';
			$user = new User();

			$email = $_POST['email'];
			$password = $_POST['password'];

			$user->set_Email($email);
			$user->set_Password($password);

			$status_check = $user->check_user_status();
				if($status_check == 'confirmed'):
					$status = $user->login();
			
					if($status == 1):
						$_SESSION['logged-in'] ="valid";
						$_SESSION['email'] = $user->get_Email();
						header("location:http://localhost/fullsnack.org/p/users/profile/");			
	     			endif;

	     		elseif($status_check == 'unconfirm'):
	     			?>
	     			<script type="text/javascript">
	     				alert('Tolong Konfirmasi Akun Terlebih dahulu :)');
	     			</script>
	     			<?php
	     		else:
	     			?>
			     	<script type="text/javascript">
	    		 		alert('Invalid Account');
	     			</script>
	     			<?php
	 			endif;
			}
		}


	public function logout()
	{
		if(isset($_POST['logout'])):
			session_unset();
			session_destroy();
			header('location://localhost/fullsnack.org/p/users/login/');
		endif;
	}


}

?>