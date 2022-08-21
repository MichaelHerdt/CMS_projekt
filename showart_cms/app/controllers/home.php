<?php

Class Home extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Home";

 	 	$posts = $this->loadModel("posts");
 	 	$result = $posts->get_all();

 	 	$pagination = $this->loadModel("pagination");
 	 	$data['prev_page'] = $pagination->generate_link($pagination->current_page_number() - 1);
 	 	$data['next_page'] = $pagination->generate_link($pagination->current_page_number() + 1);


 	 	$data['posts'] = $result;
 	 	
		$this->view("index",$data);
	}

}