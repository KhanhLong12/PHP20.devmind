<?php 
require_once 'models/Category.php';
	class CategoryController{
		function __construct(){
		}
		function list(){
			$model_obj = new Category();
			$categories = $model_obj->All();
			require_once 'views/category/list.php';
			
		}
		function add(){
			echo "-method: Add";
		}
	}
 ?>