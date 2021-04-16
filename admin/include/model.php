<?php 
include('include/connection.php');

class model extends db_connect
{
	
	function __construct()
	{
		$ob = new parent();
		$this->con=$ob->connection();
	}

	function admin_login_sql($email,$password)
	{		
     	$run=mysqli_query($this->con,"SELECT * FROM `admin_user` WHERE email='$email'and password='$password'");
	    return $run;	
	}




////////////////// Categoreis Sql start

	function view_categories_sql()
	{
		$view_cat=mysqli_query($this->con,"SELECT * FROM categories order by c_id desc");
		return $view_cat;
	}

	function delete_categories_sql($c_id)
	{
		$delete_sql="DELETE FROM `categories` WHERE c_id='$c_id'";
        mysqli_query($this->con,$delete_sql);
	}

	function insert_catergories_sql($c_name,$description,$image,$status)
	{	
		
		$insert_cat=mysqli_query($this->con,"INSERT INTO `categories`(c_name,description,image,status) VALUES ('$c_name','$description','$image','1')");
	}

	function edit_categories_sql($c_id)
   	{
   		  $select="select * from categories where c_id='$c_id'";
          $data=mysqli_query($this->con,$select);
          return $data;
   	}

   	function update_categories_image_sql($c_id,$c_name,$image,$description)
   	{	
   		$update_sql_image=mysqli_query($this->con,"UPDATE `categories` SET c_name='$c_name',description='$description',image='$image' WHERE c_id='$c_id'");
	}
	function update_categories_sql($c_id,$c_name)
   	{
    	  $update_sql=mysqli_query($this->con,"UPDATE `categories` SET c_name='$c_name',description='$description' WHERE c_id='$c_id'");
	}

	function status_categories_sql($status,$c_id)
	{
		 $update_status="UPDATE `categories` SET status='$status' WHERE c_id='$c_id'";
         mysqli_query($this->con,$update_status);
        
	}

////////////////// Categoreis Sql Ends






////////////////// Portfolio Sql start

	function portfolio_view_sql()
	{
		$view_port=mysqli_query($this->con,"SELECT portfolio.*,categories.c_name FROM portfolio,categories where portfolio.c_id=categories.c_id  order by portfolio.p_id desc");
		return $view_port;
	}

	function portfolio_delete_sql($p_id)
	{
		$delete_port="DELETE FROM `portfolio` WHERE p_id='$p_id'";
        mysqli_query($this->con,$delete_port);
	}


   	function portfolio_status_sql($status,$p_id)
	{
		$portfolio_status="UPDATE `portfolio` SET status='$status' WHERE p_id='$p_id'";
        mysqli_query($this->con,$portfolio_status);
	}

	function portfolio_insert_sql($c_id,$path)
	{
		  $in="insert into portfolio (c_id,file) values('$c_id','$path')";
                mysqli_query($this->con,$in);
                
	}



////////////////// Portfolio Sql Ends








////////////////// Feedback Sql start

    function feedback_view_sql()
    {
    	$feedback_view=mysqli_query($this->con,"SELECT * FROM `feedback` order by id desc");
    	return $feedback_view;
    }

    function feedback_delete_sql($id)
    {
    	 $delete_feedback="DELETE FROM `feedback` WHERE id='$id'";
        mysqli_query($this->con,$delete_feedback);	
    }

    function feedback_status_sql($status,$id)
	{
		$feedback_status="UPDATE `feedback` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$feedback_status);
	}

	function feedback_insert_sql($name,$review,$image)
	{
	 $insert_feedback=mysqli_query($this->con,"INSERT INTO `feedback`(name,review,image) VALUES ('$name','$review','$image')");
	}

	function feedback_edit_sql($id)
   	{
   		  $select_feedback="select * from feedback where id='$id'";
          $data_feedback=mysqli_query($this->con,$select_feedback);
          return $data_feedback;
   	}

   	function feedback_update_image_sql($id,$name,$review,$image)
   	{	
   		$feed_sql_image=mysqli_query($this->con,"UPDATE `feedback` SET name='$name',review='$review',image='$image' WHERE id='$id'");
	}
	function feedback_update_sql($id,$name,$review)
   	{
    	  $feed_sql=mysqli_query($this->con,"UPDATE `feedback` SET name='$name',review='$review' WHERE id='$id'");
	}
////////////////// Feedback Sql Ends






////////////////// enquery Sql Starts

	function enquery_view_sql()
	{
		$view_enquery=mysqli_query($this->con,"SELECT enquery.*,categories.c_name FROM enquery,categories where enquery.c_id=categories.c_id  order by enquery.id desc");
		return $view_enquery;
	}	

	function enquery_delete_sql($id)
    {
    	$delete_enquery="DELETE FROM `enquery` WHERE id='$id'";
        mysqli_query($this->con,$delete_enquery);	
    }

    function enquery_status_sql($status,$id)
	{
		$enquery_status="UPDATE `enquery` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$enquery_status);
	}
////////////////// enquery Sql Ends



////////////////// Contact Sql Starts

	function contact_view_sql()
	{
		$view_contact=mysqli_query($this->con,"SELECT * FROM contact order by id desc");
		return $view_contact;
	}	

	function contact_delete_sql($id)
    {
    	$delete_contact="DELETE FROM `contact` WHERE id='$id'";
        mysqli_query($this->con,$delete_contact);	
    }

    function contact_status_sql($status,$id)
	{
		$contact_status="UPDATE `contact` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$contact_status);
	}
////////////////// Contact Sql Ends


////////////////// career Sql Starts

	function career_view_sql()
	{
		$view_career=mysqli_query($this->con,"SELECT * FROM career order by career_id desc");
		return $view_career;
	}	

	function career_delete_sql($career_id)
    {
    	$delete_career="DELETE FROM `career` WHERE career_id='$career_id'";
        mysqli_query($this->con,$delete_career);	
    }

    function career_status_sql($status,$career_id)
	{
		$career_status="UPDATE `career` SET status='$status' WHERE career_id='$career_id'";
        mysqli_query($this->con,$career_status);
	}



	function career_insert_sql($job_name,$description,$experience,$location)
	{
	 $insert_career=mysqli_query($this->con,"INSERT INTO `career`(job_name,description,experience,location) VALUES ('$job_name','$description','$experience','$location')");
	}

	function career_edit_sql($career_id)
   	{
   		  $select_career="select * from career where career_id='$career_id'";
          $data_career=mysqli_query($this->con,$select_career);
          return $data_career;
   	}

	function career_update_sql($career_id,$job_name,$description,$experience,$location)
   	{
    	   $career_sql=mysqli_query($this->con,"UPDATE `career` SET job_name='$job_name',description='$description',experience='$experience',location='$location' WHERE career_id='$career_id'"); 
    }
    
////////////////// career Sql Ends




//////////////////career_applied Sql Starts
	function career_applied_view_sql($career_id)
	{
		$view_career_applied=mysqli_query($this->con,"select * from career_applied as a,career as c where a.career_id=c.career_id and a.career_id='$career_id' order by id");
		return $view_career_applied;
	}	

	function career_applied_delete_sql($id)
    {
    	$delete_career_applied="DELETE FROM `career_applied` WHERE id='$id'";
        mysqli_query($this->con,$delete_career_applied);	
    }

     function career_applied_status_sql($status,$id)
	{
		$career_status="UPDATE `career_applied` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$career_status);
	}


//////////////////Career applied sql Ends






//////////////////Gallery sql Starts
	function gallery_view_sql()
	{
		$view_gallery=mysqli_query($this->con,"SELECT * FROM gallery order by id desc");
		return $view_gallery;
	}	

	function gallery_delete_sql($id)
    {
    	$delete_gallery="DELETE FROM `gallery` WHERE id='$id'";
        mysqli_query($this->con,$delete_gallery);	
    }

    function gallery_status_sql($status,$id)
	{
		$gallery_status="UPDATE `gallery` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$gallery_status);
	}

	function gallery_insert_sql($path)
	{
		 $in="insert into gallery (file) values('$path')";
        mysqli_query($this->con,$in);
    }



//////////////////Gallery sql Ends



}
?>

