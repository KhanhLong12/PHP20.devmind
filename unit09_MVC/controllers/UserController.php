<?php 
	require_once "models/User.php";
	class UserController{
		function __construct(){
		}
		function list(){
			$model_obj = new user();
			$users= $model_obj->All();
			require_once 'views/user/list.php';
		}
		function detail(){
			$id = $_GET['id'];
			$model_obj = new user();
			$user= $model_obj->view($id);
			require_once 'views/user/detail.php';
		}
	}
 ?>