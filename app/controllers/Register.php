<?php

class Register extends Controller {

	function __construct($controller, $action) {
		parent::__construct($controller, $action);
		$this->load_model('Users');
		$this->view->setLayout('default');
	}

	public function loginAction() {
		$validation = new Validate();
		if($_POST) {
			// form validation
			$validation->check($_POST, [
					'mail' => [
						'display' => "E-Mail-Adresse",
						'required' => true
					],
					'password' => [
						'display' => 'Passwort',
						'required' => true,
						'min' => 6
					]
			]);
			if($validation->passed()) {
				$user = $this->UsersModel->findByMail($_POST['mail']);
				if($user && password_verify(Input::get('password'), $user->password)) {
					$remember = (isset($_POST['remember_me']) && Input::get('remember_me')) ? true : false;
					$user->login($remember);
					Router::redirect('');
				}else{
					$validation->addError("There is an error with your mail or password.");
				}
			}
		}
		$this->view->displayErrors = $validation->displayErrors();
		$this->view->render('register/login');
	}

	public function logoutAction() {
		if(currentUser()) {
			currentUser()->logout();
		}
		Router::redirect('register/login');
	}

	public function registerAction() {
		$validation = new Validate();
		$posted_values = ['name'=>'', 'lastname'=>'', 'mail'=>'', 'password'=>'', 'confirm'=>''];
		if($_POST) {
			$posted_values = posted_values($_POST);
			// form validation
			$validation->check($_POST, [
					'name' => [
							'display' => "Vorname",
							'required' => true
					],
					'lastname' => [
							'display' => "Nachname",
							'required' => true
					],
					'mail' => [
							'display' => "E-Mail-Adresse",
							'required' => true,
							'unique' => 'users',
							'max' => 150,
							'valid_email' => true
					],
					'password' => [
							'display' => 'Passwort',
							'required' => true,
							'min' => 6
					],
					'confirm' => [
							'display' => 'Passwort erneut eingeben',
							'required' => true,
							'matches' => 'password'
					]
			]);

			if($validation->passed()) {
				$newUser = new Users();
				$newUser->registerNewUser($_POST);
				Router::redirect('register/login');
			}
		}
		$this->view->post = $posted_values;
		$this->view->displayErrors = $validation->displayErrors();
		$this->view->render('register/register');
	}
}
