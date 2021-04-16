<?php  
session_start();
include('include/model.php');
   
     class controller
    {
   
        function view_categories()
        {
          $ob = new model();
          $show=$ob->view_categories_sql();
          return $show; 
        }

        
////////////////// Portfolio Login Start

        function portfolio_view()
        {
          $c_id=$_REQUEST['c_id'];
          $ob = new model();
          $show_port=$ob->portfolio_view_sql($c_id);
          return $show_port;
        } 
        
////////////////// Feedback Login Ends

        function feedback_view()
        {
          $ob = new model();
          $show_feedback=$ob->feedback_view_sql();
          return $show_feedback;
         }


        function feedback_insert()
        {
          if(isset($_POST['submit']))
        {

          $name=$_POST['name'];
          $review=$_POST['review'];
          $image=$_FILES['image'];

              $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
              move_uploaded_file($_FILES['image']['tmp_name'],'admin/media/feedback/'.$image);

              $ob = new model();
              $run_feedback=$ob->feedback_insert_sql($name,$review,$image);
              
              if($run_feedback)
                  {
                      $_SESSION['STATUS'] ="Your Feedback is Sent Successfully!";
                      $_SESSION['STATUS_CODE'] ="success";
                   // header('location:all_services.php');
                  } 
                  else
                  {
                      $_SESSION['STATUS']="Your Feedback is Not Sent!";
                      $_SESSION['STATUS_CODE']="error";
                     // header('location:all_services.php');
                  }                    
            
        }
        
        }


//////////////////Feedback Logic Ends



///////////////Enquery Login Start
      function enquery_view()
        {
          $ob = new model();
          $show_enquery=$ob->enquery_view_sql();
          return $show_enquery;
         }
   
        function enquery_insert()
          {
              $name='';
              $email='';
              $mobile='';
              $msg='';
              $c_id='';
                
              if(isset($_POST['submit']))
              {
                $c_id=$_POST['c_id'];
                $name=$_POST['name'];
                $email=$_POST['email'];
                $mobile=$_POST['mobile'];
                $city=$_POST['city'];
                $msg=$_POST['msg'];

                $ob = new model();
                $run_enquery=$ob->enquery_insert_sql($c_id,$name,$email,$mobile,$city,$msg);
                

                  if($run_enquery)
                  {
                      $_SESSION['STATUS'] ="Your Enquery is Sent Successfully!";
                      $_SESSION['STATUS_CODE'] ="success";
                   // header('location:all_services.php');
                  } 
                  else
                  {
                      $_SESSION['STATUS']="Your Enquery is Not Sent!";
                      $_SESSION['STATUS_CODE']="error";
                     // header('location:all_services.php');
                  }
               
             }
          }
       
////////////////Enquery Login Ends




//////////////// Contact US Login Ends

         function contact_view()
          {
          $ob = new model();
          $show_contact=$ob->contact_view_sql();
          return $show_contact;
          }

          function contact_insert()
          {
              $name='';
              $email='';
              $mobile='';
              $msg='';
                
              if(isset($_POST['submit']))
              {
              $name=$_POST['name'];
              $email=$_POST['email'];
              $mobile=$_POST['mobile'];
              $msg=$_POST['msg'];

              $ob = new model();
              $run_contact=$ob->contact_insert_sql($name,$email,$mobile,$msg);
                  
                  if($run_contact)
                  {
                      $_SESSION['STATUS'] ="Your Message is Sent Successfully!";
                      $_SESSION['STATUS_CODE'] ="success";
                   // header('location:all_services.php');
                  } 
                  else
                  {
                      $_SESSION['STATUS']="Your Message is Not Sent!";
                      $_SESSION['STATUS_CODE']="error";
                     // header('location:all_services.php');
                  }
             

  
          }

        }

/////////////Contact Logic Ends 


/////////////Career Logic Starts
        function career_view()
        {
          $ob = new model();
          $show_career=$ob->career_view_sql();
          return $show_career;
        }
/////////////Career Logic Ends 





/////////////Career Applied Logic Starts

           function applied_insert()
          {
              $career_id='';
              $name='';
              $email='';
              $mobile='';
              $msg='';
                
              if(isset($_POST['submit']))
              {

              $career_id=$_REQUEST['career_id'];
              $name=$_POST['name'];
              $email=$_POST['email'];
              $mobile=$_POST['mobile'];
              $image=$_FILES['image'];

              $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
              move_uploaded_file($_FILES['image']['tmp_name'],'admin/media/resume/'.$image);

              $ob = new model();
              $run_applied=$ob->applied_insert_sql($career_id,$name,$email,$mobile,$image);

                if($run_applied)
                  {
                      $_SESSION['STATUS'] ="Your Job Application is Sent Successfully!";
                      $_SESSION['STATUS_CODE'] ="success";
                   // header('location:all_services.php');
                  } 
                  else
                  {
                      $_SESSION['STATUS']="Your Job Application is Not Sent!";
                      $_SESSION['STATUS_CODE']="error";
                     // header('location:all_services.php');
                  }
              }
        }
/////////////Career Applied Logic Ends


/////////////Gallery Logic Starts
  function gallery_view()
  {
    $ob = new model();
    $show_gallery=$ob->gallery_view_sql();
    return $show_gallery;
 }

/////////////Gallery Logic Ends

/////////////////////Search logic

  function search()
  {
    if(isset($_REQUEST['btnsearch']))
      {
      $txtsearch=$_REQUEST['search'];

        $ob = new model();
        $search=$ob->search_sql();
        return $search;
      }
  }
/////////////////////Search logic ends 


 }
 ?>