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
	$("#signup-form").submit(function(){
		
		var isValid = true;
		var alertmsg = "";
		$('input[type="text"].required').each(function() {
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
/**
* mobile number validation
*/
var mobileno = $("#mobileno").val();
var filter = /^[0-9-+]+$/;
if (isValid == true){
	if (filter.test(mobileno) && mobileno.length == 10){
	  isValid = true;
	}
	else{
	   //alert("Please enter valid email id.");
	   alertmsg = "Please enter valid mobile no.";
	   isValid = false;
	}
}

if($('#passwordid').val() != $('#confpasswordid').val()) {
            alert("Password and Confirm Password don't match");
            return false;
			isValid = false;
        }

		
		if (isValid == false){		
		    alert(alertmsg);
		    return false;
	    }else{
		
			/*var cerno = $("#certificate_no").val();
			var $form = $(this);			
			$.ajax({
			  async: false,
			  type: "POST",
			  url: "<?php echo base_url(); ?>index.php/auth/authenticate_certificate_no",
			  data: {cerno:cerno},
			  //cache: false,
			  success: function(result){
				  if(result=="cer_exist"){
					 $("#wating_img").html("<img src='<?php echo base_url(); ?>assets/img/loader.gif' width='120px' height='80'>");				  
					 $form.submit();				     
				  }
				  else{
				   alert("Certificate No Exist");
				  return false;
				  }				
			  }
			});*/
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
<body class='login'>
<div class="wrapper1" style="height: 500px; left: 5%;
    margin: -90px -200px 50px; width: 800px;">

	<div class="col-md-7">
        <div class="page-header">
            <h3 style="text-align:center;">Register Account</h3>
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
            <!--<h4 class="alert-heading">Your account has been created. Please login to access training content!</h4>-->
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
        <div class="alert alert-error">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
            <h4 class="alert-heading">Warning!</h4>
			 <?php if (isset($error['duplicate'])): ?>
                <div>- <?php echo $error['duplicate']; ?></div>
            <?php endif; ?>
            <?php if (isset($error['username'])): ?>
                <div>- <?php echo $error['username']; ?></div>
            <?php endif; ?>
            <?php if (isset($error['password'])): ?>
                <div>- <?php echo $error['password']; ?></div>
            <?php endif; ?>  
			 <?php if (isset($error['fullname'])): ?>
                <div>- <?php echo $error['fullname']; ?></div>
            <?php endif; ?>
			 <?php if (isset($error['email'])): ?>
                <div>- <?php echo $error['email']; ?></div>
            <?php endif; ?>
			 <?php if (isset($error['phone'])): ?>
                <div>- <?php echo $error['phone']; ?></div>
            <?php endif; ?>
			 <?php if (isset($error['institute'])): ?>
                <div>- <?php echo $error['institute']; ?></div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
  <form class="well" id="signup-form" action="<?php echo base_url(); ?>index.php/auth/create_new_user" method="post" style="margin: 5px 10px;">
  <div id="individual">
  <table width="100%" border="0">
  <tr>
    <td width="32%" >
	  <label>Name<span style="color:red"> *</span></label><br/>
        <input type="text" name="row[fullname]" value="<?php echo isset($fullname)?$fullname:'';?>" class="col-xs-8 col-md-8 required" placeholder="Name">
		
		</td>
		
		<td width="32%" >
	  <label>Alias Name<span style="color:red"> *</span></label><br/>
        <input type="text" name="row[alias_name]" value="<?php echo isset($alias_name)?$alias_name:'';?>" class="col-xs-8 col-md-8 required" placeholder="Alias Name">
		
		</td>
		
    <td width="39%"><label>Email Id<span style="color:red"> *</span></label><br/>
        <input type="text" name="row[email]" id="emailid" value="<?php echo isset($email)?$email:'';?>" class="col-xs-8 col-md-8 required" placeholder="Email Id"></td>
    
	  </tr>
  <tr>
  <td width="29%"><label>Mobile No.<span style="color:red"> *</span></label><br/>
        <input type="text" id="mobileno" name="row[phone]" value="<?php echo isset($phone)?$phone:'';?>" class="col-xs-10 col-md-10 required" placeholder="Mobile No." maxlength="11">
</td>

    <td><label>Institute</label><br/>
        <?php 
		  //$institute = isset($institute)?$institute:'21186';
		 echo form_dropdown("row[institute]",array(''=>'--------------------------Select Institute--------------------------')+$institute,'','style="width:225px;"'); ?> </td>
		 
		 <td width="29%"><label>Company Name.</label><br/>
        <input type="text" id="companyname" name="row[company_name]" value="<?php echo isset($company_name)?$company_name:'';?>" class="col-xs-10 col-md-10" placeholder="Company Name.">
</td>
    </tr>
	
  <tr>
    <!--<td>
	<label>Desired Username<span style="color:red"> *</span></label><br/>
        <input type="text" name="row[username]" value="<?php echo isset($username)?$username:'';?>" class="col-xs-8 col-md-8 required" placeholder="Desired Username">
	</td>-->
    <td><label>Password<span style="color:red"> *</span></label><br/>
        <input type="password" name="row[password]" id="passwordid" class="col-xs-8 col-md-8 required" placeholder="Password"></td>
    <td><label>Confirm Password<span style="color:red"> *</span></label><br/>
        <input type="password" name="password2" id="confpasswordid" class="col-xs-10 col-md-10 required" placeholder="Confirm Password"></td>
	
   <td>
	<?php
     $cerno = $this->uri->segment(3);	
	 if(isset($cerno) && $cerno !=""){?>
	<label>Certificate No<span style=color:red"> *</span></label><br/>
        <input type="text" name="row[certificate_no]" value="<?php echo isset($cerno)?$cerno:'';?>" id="certificate_no" class="col-xs-8 col-md-8" readonly>
		<?php }else{?>
			<label>Certificate No<span style=color:red"> *</span></label><br/>
        <input type="text" name="row[certificate_no]" value="<?php echo isset($certificate_no)?$certificate_no:'';?>" id="certificate_no" class="col-xs-8 col-md-8 required" placeholder="Certificate No">

		<?php } ?>
	</td>
	
  </tr>
  
  <!--<tr>
    <td>
	<?php
     $cerno = $this->uri->segment(3);	
	 if(isset($cerno) && $cerno !=""){?>
	<label>Certificate No<span style=color:red"> *</span></label><br/>
        <input type="text" name="row[certificate_no]" value="<?php echo isset($cerno)?$cerno:'';?>" id="certificate_no" class="col-xs-8 col-md-8" readonly>
		<?php }else{?>
			<label>Certificate No<span style=color:red"> *</span></label><br/>
        <input type="text" name="row[certificate_no]" value="<?php echo isset($certificate_no)?$certificate_no:'';?>" id="certificate_no" class="col-xs-8 col-md-8 required" placeholder="Certificate No">

		<?php } ?>
	</td>   
     <td id="wating_img"> </td>	
  </tr>-->
 

  
  <tr>
    <td colspan="2" style="text-align:right">
	    <input type="submit" id="new_user_register" style="margin-top:15px;font-weight: bold;" name="btn-reg" class="btn btn-primary btn-large" value="Register"/>
	</td>
	 <td>
		<input type="button" id="cancel_register" style="margin-top:15px;font-weight: bold;" name="btn-reg" class="btn btn-primary btn-large" value="Cancel"/>
	  </td>
  </tr>
</table>
</div>
</form>
</div>

		
	</div>