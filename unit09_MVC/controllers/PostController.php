<?php 
require 'models/Post.php';
	class PostController{
		function __construct(){
		}
		function list(){
			$model_obj = new Post();
			$posts = $model_obj->All();
			require 'views/post/list.php';
		}
	}
 ?>