<?php

class Manager_Controller
{
	
	function __construct()
	{
		$this->manage_model=new Manager_Model;
	}
	function postLater(){   //接收view端的迟到数组
		$later = array();
		$later=$_POST[""];
		$laterCount=count($later);
		$marker=0;
		for($j=0;$j<$laterCount;$j++)
		{
			if($later[$j]==="/")
			{
				array_slice($later, $marker,$j-1);
				$marker=$j+1;
				$this->manage_model->post_later($later);
			}
			
		}
		
	}

	function undone(){
		$this->manage_model->undone();
	}
}
?>