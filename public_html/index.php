<?php
$output = 'Please enter your email for launch notification:';
if (isset($_GET["action"])) {
  $output = "You will be notified soon";
  $email = $_GET["email"];
  mail("tom@brandandbusiness.com",'Wildstone Notify Me','someone wants to be notified $email');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>::..Welcome to the Wild Stone Website..::</title>
<link rel="stylesheet" type="text/css" href="css/main.css" media="all" />
<!--[if lte IE 6]>
<script type="text/javascript" src="js/supersleight-min.js"></script>
<![endif]-->
<script type="text/javascript">

function validateEmail(email) { 
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
} 

function submitform()
{
   email = form1.elements["email"].value;
  result = validateEmail(email);
   if (result == true)	
  		document.form1.submit();
	else
		alert('Please enter a valid email address');
}
</script>

</head>
<body>
<div class="wrapper"> 
  <!--Header Area Top starts from here -->
  
  <div class="header_tp clearfix"> 
    <!--Header Area Top Inner starts from here -->
    <div class="header_tp_in clearfix"></div>
    <!--Header Area Top Inner ends from here --> 
  </div>
  <!--Header Area Top ends from here --> 
  <!--Header Area Bottom start from here -->
  
  <!--Header Area Bottom ends from here --> 
  
  <!-- Story Area starts from here --> 
  
  <!-- Story Area ends from here --> 
  <!-- Contanier Starts from here -->
  <div class="contanier clearfix"> 
    <!-- Contanier Starts from here -->
     <!-- Contanier Inner Starts from here -->
    <div class="contanier_in clearfix">
    <!-- Coming Soon Starts from here -->
    <div class="coming_soon clearfix">
     <!-- Coming Soon Left Area Starts from here -->
    <div class="coming_soon_L">
    
    <h1><?php echo $output; ?></h1>
    <!-- Notify Me Starts from here -->
    <div class="notify_me">
    
    <div class="notify_me_L"></div>
    
    <div class="notify_me_C">
     <form name="form1" id="forn1" action="index.php">
    <input type="hidden" name="action" value="doit">

     <input name="email" id="email" type="text" value=""/>
    </form> 
    </div>
   <div class="notify_me_R"></div>
    
    
    </div>
     <!-- Notify Me Ends from here -->
    <a href="javascript:submitform();" title="">Notify me</a>
    
    <!--<p><span>*</span> Don't worry, your details are safe with us.</p>-->
    </div>
    <!-- Coming Soon Left Area ends from here -->
    <!-- Coming Soon Right Area Starts from here -->
    <div class="coming_soon_R">
    
    <ul>
    <li><span>Wildstone Property Limited</span>
    
    <a href="#" title="">Email: damian@wildstone.co.uk</a></li>
     <li><span>Wildstone Planning</span><a href="#" title="">Email: philip@wildstone.co.uk</a></li>
      <li class="last"><span>Tel: 020 7313 9571</span><a href="#" title="">103 Freston Road, London, W11 4BD</a></li>
    
    </ul>
    </div>
    <!-- Coming Soon Right Area Starts from here -->
    
    </div>
     <!-- Coming Soon Starts from here -->
    
     </div>
      <!--Contanier Inner ends from here -->
    <!--Contanier Starts from here --> 
  </div>
  <!-- Contanier ends from here --> 
  <!--Footer starts from here --> 
  
  <!--Footer ends from here --> 
</div>
</body>
</html>