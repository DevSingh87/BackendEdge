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
$("#resetpassword-form").submit(function(){
	
var isValid = true;
var alertmsg = "";

$('input[type="password"].required').each(function() {
	if ($.trim($(this).val()) == '') {
		isValid = false;
		alertmsg = "Please check mandatory fileds";
		$(this).css({
			"border": "1px solid red",
			"background": "#FFCECE"
		});						
	}
	else {
		$(this).css({
			"border": "",
			"background": ""
		});
	}
});

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
<?php 
//echo '<pre>';
//print_r($userinfo);
//die;  
  $emailid = isset($userinfo[0]['email'])?$userinfo[0]['email']:'';
  $userid = isset($userinfo[0]['id'])?$userinfo[0]['id']:'';
?>


<form class="well" id="resetpassword-form" action="<?php echo base_url(); ?>index.php/auth/resetpassword" method="post" style="margin: 5px 10px; width:650px;">
  <div id="individual" style="width:650px;">
  <table width="650px;" border="0">
   <tr>
     <td colspan="3" style="font-weight:bold;color:red;text-align:center;">
     <?php if(isset($emailmsg) && $emailmsg !=""){
			echo $emailmsg;
       }?>
	    </td>
	</tr>
  <tr><td colspan="3" style="text-align:center;font-weight:bold;">Reset Password</td></tr>
  <tr>
    <td width="49%">Email Id</td>
       <td colspan="2">
	    <input type="text" name="emailid" id="emailid" value="<?php echo isset($emailid)?$emailid:'';?>" class="col-xs-8 col-md-8 required" readonly>
		<input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
		</td>    
	  </tr>
  <tr>
  <tr>
    <td width="49%">New Password<span style="color:red"> *</span></td>
       <td colspan="2"><input type="password" name="password" id="password" value="" class="col-xs-8 col-md-8 required" placeholder="Password"></td>    
	  </tr>
  <tr>
  <tr>
    <td width="49%">Conform Password<span style="color:red"> *</span></td>
       <td colspan="2"><input type="password" name="confpassword" id="confpassword" value="" class="col-xs-8 col-md-8 required" placeholder="Conform Password"></td>    
	  </tr>
  <tr>
    <td colspan="2" style="text-align:right">
	    <input type="submit" id="resetpassword" style="margin-top:15px;font-weight: bold;" name="btn-reg" class="btn btn-primary btn-large" value="Submit"/>
	</td>
	 <td>
		<input type="button" id="cancel_register" style="margin-top:15px;font-weight: bold;" name="btn-reg" class="btn btn-primary btn-large" value="Cancel"/>
	  </td>
  </tr>
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
