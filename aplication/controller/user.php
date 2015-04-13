<?php 
class user extends core_controller {

	function __construct() {
       $this->data['css'] = array('public/bootstrap/css/bootstrap.min.css', 'public/css/login.css' );
       
		$this->load_model('muser');
   }

	function action(){
		$data['users'] = $this->muser->getUsers();
		$this->data['content'] = $this->load_view('users_view', $data, true);
		$this->load_view('templates/template', $this->data);
	}

	function register(){
		if (isset($_POST['username']) && isset($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];

			$this->load_model('muser');
			$this->muser->insertUser($name, $lastname, $username, $password, $email);

			$this->redirect('user');
		} else {
			$this->data['content'] = $this->load_view('register_user_view', array(), true);
			$this->load_view('templates/template', $this->data);
		}
	}

	function logout($uno, $dos){
		echo $uno.' y '.$dos;
	}

}