<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php print $header.' | '.$this->preference->item('site_name');?></title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/themes.css">
	
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
</head>
<script>
$(document).ready(function(){

/*
* NEW USER REGISTRATION
*/
	$("#forgotpassword-form").submit(function(){
		
	 var isValid = true;
	 var alertmsg = "";
   	 var emailid = $("#emailid").val();
	 //var emailidval = 
	 var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if (isValid == true){ 
		if (filter.test(emailid)){
			isValid = true;
		}
		else{
		   alertmsg = "Please enter valid email id";		   
		   isValid = false;
		}
	}		
		if (isValid == false){		
		    alert(alertmsg);
		    return false;
	    }else{
			return true;
		  }	
		
	});
	
/**
*FUNCTION FOR CANCEL
*REGISTRATION
*/
$("#cancel_register").click(function(){
   window.close();
});
	
});


</script>


<form class="well" id="forgotpassword-form" action="<?php echo base_url(); ?>index.php/auth/forgotpassword" method="post" style="margin: 5px 10px;">
  <div id="individual">
  <table width="100%" border="0">
   
   <tr>
     <td colspan="3" style="font-weight:bold;color:red;text-align:center;">
     <?php if(isset($emailmsg) && $emailmsg !=""){
			echo $emailmsg;
       }?>
	    </td>
	</tr>
  <tr><td colspan="3" style="text-align:center;font-weight:bold;">Forgot Password</td></tr>
   
  <?php if(isset($email_send_status) && $email_send_status == 1){?>
     <tr>
     <td colspan="3" style="font-weight:bold;color:red;text-align:center;">
	    <b>Change Password Request Received</b>
       An email is on its way with a link to reset your password. But hurry, it expires in 24 hours. 

	 </td>
	</tr>
  <?php }else{ ?>
  <tr>
    <td width="49%">Email Id<span style="color:red"> *</span></td>
       <td colspan="2"><input type="text" name="row[email]" id="emailid" value="<?php echo isset($emailid)?$emailid:'';?>" class="col-xs-8 col-md-8 required" placeholder="Email Id"></td>    
	  </tr>
  <tr>
    <td colspan="2" style="text-align:right">
	    <input type="submit" id="forgotpassword" style="margin-top:15px;font-weight: bold;" name="btn-reg" class="btn btn-primary btn-large" value="Submit"/>
	</td>
	 <td>
		<input type="button" id="cancel_register" style="margin-top:15px;font-weight: bold;" name="btn-reg" class="btn btn-primary btn-large" value="Cancel"/>
	  </td>
  </tr>
 <?php } ?> 
  
</table>
</div>
</form>

<!--<body class='login' style="height:110px;">
	<div class="col-md-7">
        <div class="page-header">
            <h3 style="text-align:center;">Forgot Password</h3>
        </div>
		 <?php if (isset($ser_statu) && $ser_statu == "user_exist"){ ?>
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
			<h4 class="alert-heading" style="text-align:center;">You have already Sign Up with this Certificate No.</h4>            
        </div>
        <?php } 
		
		 $tmp_success = $this->session->userdata('tmp_success');		 
		 if (isset($ser_statu) && $ser_statu == "not_exist"){ ?>
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
			<h4 class="alert-heading" style="text-align:center;">Certificate No Not Found</h4>
            
        </div>
        <?php } 
		    $user_registration = $this->session->userdata('user_registration');
			if(isset($user_registration_status) && $user_registration_status == "success"){			
			?>
				<script>
				    //window.open("<?php echo base_url(); ?>", "MsgregWindow");
				    //window.opener.location.reload();
					window.open("http://connect.triedge.in/", "MsgtloginWindow");
					window.close();
				</script>
			<?php } ?>
        <?php 		
		if (isset($error)): ?>        
        <?php endif; ?>  
</div>-->
