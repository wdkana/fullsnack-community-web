<?php
include('Config.php');

class Model{
	private $classname;
	protected $member_id;
	protected $password;
	protected $email;
	protected $hash;

	function __construct()
	{
		$database = new Config();
	}

	public function login()
	{
		$email = $this->get_Email();
		$pass = $this->get_Password();
		$password = sha1(md5($pass));

		$sql = "SELECT * FROM collection_member where member_email = '$email' and member_password = '$password' and member_status = 'confirmed'";
		$query = mysql_query($sql);
		$num_rows = mysql_num_rows($query);
		return $num_rows;
	}

	public function check_user_status()
	{
		$email = $this->get_Email();
		$pass = $this->get_Password();
		$password = sha1(md5($pass));

		$sql = "SELECT member_status FROM collection_member where member_email = '$email' and member_password = '$password' ";
		$query = mysql_query($sql);
		if($query){
		while ($row = mysql_fetch_array($query)) {
			$status = $row['member_status'];
			return $status;
		}
		}
	}

	public function register_check()
	{
		$email = $this->get_Email();

		$sql = "SELECT * FROM collection_member where member_email = '$email'";
		$query = mysql_query($sql);
		$num_rows = mysql_num_rows($query);
		return $num_rows;
	}

	public function register()
	{
		$member_id = $this->get_MemberId();
		$email = $this->get_Email();
		$pass = $this->get_Password();
		$password = sha1(md5($pass));
		$hash = $this->get_Hash();
		
		$sql = "INSERT INTO `collection_member`(`no`, `member_id`, `member_email`, `member_password`, `member_hash`, `member_status`) VALUES (null, '$member_id', '$email', '$password', '$hash', 'unconfirm')";
		$query = mysql_query($sql);
		return $query;
	}

	public function validating_email_confirmation()
	{
		$email = $this->get_Email();
		$hash = $this->get_Hash();

		$sql = "SELECT * FROM collection_member where member_email = '$email' AND member_hash = '$hash'";
		$query = mysql_query($sql);
		$num_rows = mysql_num_rows($query);
		return $num_rows;
	}

	public function email_confirmation()
	{
		$email = $this->get_Email();
		$hash = $this->get_Hash();

		$sql = "UPDATE collection_member SET member_status = 'confirmed' WHERE member_email = '$email' AND member_hash = '$hash'";
		$query = mysql_query($sql);
		return $query;

	}

}

class User extends Model{	

	final public function get_MemberId()
	{
		return $this->member_id;
	}

	final public function get_Password()
	{
		return $this->password;
	}

	final public function get_Email()
	{
		return $this->email;
	}

	final public function get_Hash()
	{
		return $this->hash;
	}

	public function set_MemberId($id)
	{
		$this->member_id = $id;
	}

	public function set_Password($password)
	{
		$this->password = $password;
	}

	public function set_Email($email)
	{
		$this->email = $email;
	}

	public function set_Hash($hash)
	{
		$this->hash = $hash;
	}

}