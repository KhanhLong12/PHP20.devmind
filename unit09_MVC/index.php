<?php 
	$mod = isset($_GET['mod'])?$_GET['mod']:'blog';
	$act = isset($_GET['act'])?$_GET['act']:'blog';
	switch ($mod) {
		case 'category':
			require_once 'controllers/CategoryController.php';
			$controller_obj = new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				case 'add':
					$controller_obj->add();
					break;
				case 'add_process':
					echo "- Add_process";
					break;
				case 'edit':
					echo "- Edit";
					break;
				case 'edit_process':
					echo "- Edit_process";
					break;
				default:
					echo "404";
					break;
			}
			break;
		case 'post':
		require_once 'controllers/PostController.php';
		$controller_obj = new PostController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					echo "detail";
					break;
				case 'add':
					echo "- Add";
					break;
				case 'add_process':
					echo "- Add_process";
					break;
				case 'edit':
					echo "- Edit";
					break;
				case 'edit_process':
					echo "- Edit_process";
					break;
				default:
					echo "404";
					break;
			}
			break;
		case 'user':
			require_once 'controllers/UserController.php';
			$controller_obj= new UserController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					$controller_obj->detail();
					break;
				case 'add':
					echo "- Add";
					break;
				case 'add_process':
					echo "- Add_process";
					break;
				case 'edit':
					echo "- Edit";
					break;
				case 'edit_process':
					echo "- Edit_process";
					break;
				default:
					echo "404";
					break;
			}
			break;
		default:
			echo "404";
			break;
	}
 ?>