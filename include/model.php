<?php 
include('include/connection.php');

class model extends db_connect
{
	
	function __construct()
	{
		$ob = new parent();
		$this->con=$ob->connection();
	}


////////////////// Categoreis Sql start


	function view_categories_sql()
	{
		$view_cat=mysqli_query($this->con,"SELECT * FROM categories where status=1 order by c_id desc");
		return $view_cat;
	}
	
////////////////// Categoreis Sql Ends

////////////////// Portfolio Sql start

	function portfolio_view_sql($c_id)
	{
		$view_port=mysqli_query($this->con,"select * from portfolio as p,categories as c where p.c_id=c.c_id and p.c_id='$c_id' and p.status=1 order by p_id");
		return $view_port;
	}


////////////////// Portfolio Sql Ends

////////////////// Feedback Sql start

    function feedback_view_sql()
    {
    	$feedback_view=mysqli_query($this->con,"SELECT * FROM `feedback` where status=1 order by id desc");
    	return $feedback_view;
    }


	function feedback_insert_sql($name,$review,$image)
	{
	 $insert_feedback=mysqli_query($this->con,"INSERT INTO `feedback`(name,review,image) VALUES ('$name','$review','$image')");
	}

////////////////// Feedback Sql Ends

////////////////// enquery Sql Starts

	function enquery_insert_sql($c_id,$name,$email,$mobile,$city,$msg)
	{
	 $insert_enquery=mysqli_query($this->con,"INSERT INTO `enquery` (c_id,name,email,mobile,city,msg) VALUES ('$c_id','$name','$email','$mobile','$city','$msg')");
	}
	
////////////////// enquery Sql Ends

////////////////// Contact Sql Starts

	function contact_view_sql()
	{
		$view_contact=mysqli_query($this->con,"SELECT * FROM contact order by id desc");
		return $view_contact;
	}

	function contact_insert_sql($name,$email,$mobile,$msg)
	{
		$insert_name=mysqli_query($this->con,"INSERT INTO `contact` (name,email,mobile,msg) VALUES ('$name','$email','$mobile','$msg')");
	}	

////////////////// Contact Sql Ends


////////////////// career Sql Starts

	function career_view_sql()
	{
		$view_career=mysqli_query($this->con,"SELECT * FROM career where status=1 order by career_id desc");
		return $view_career;
	}	

////////////////// career Sql Ends

//////////////////career_applied Sql Starts

	function applied_insert_sql($career_id,$name,$email,$mobile,$image)
	{
		 $ins="INSERT INTO `career_applied` (career_id,name,email,mobile,image) VALUES ('$career_id','$name','$email','$mobile','$image')";
		$insert_applied=mysqli_query($this->con,$ins);
	}	

//////////////////Career applied sql Ends


//////////////////Gallery sql Starts
	function gallery_view_sql()
	{
		$view_gallery=mysqli_query($this->con,"SELECT * FROM gallery where status=1 order by id desc");
		return $view_gallery;
	}	

//////////////////Gallery sql Ends


///////////////////Search sql starts
	
	function search_sql()
	{
		$search_run="select * from categories where c_name like '%$txtsearch%' or description like '%$txtsearch%' and status=1";
		$search_res=mysqli_query($this->con,$search_run);
		return $search_res;
	}
	
///////////////////Search sql ends



}
?>

