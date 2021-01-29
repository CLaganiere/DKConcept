<?php
	require_once("action/CommonAction.php");

	class LogoutAction extends CommonAction{
		public $signoutVal;
		public $errorSignout = false;

		public function __construct() {
			parent::__construct(CommonAction::$VISIBILITY_PUBLIC);
		}

		protected function executeAction() {

			session_unset();
			session_destroy();

			header("location:index.php");
			exit;
		}
	}
