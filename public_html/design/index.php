<?php
if (isset($_GET["action")) {
  $output = "You will be notified soon";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function submitform()
{
  document.myform.submit();
}
</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>::..Welcome to the Wild Stone Website..::</title>
<link rel="stylesheet" type="text/css" href="http://projects.tekkiwebsolutions.com/harjot/Wildstone/css/main.css" media="all" />
<!--[if lte IE 6]>
<script type="text/javascript" src="js/supersleight-min.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper"> 
  <!--Header Area Top starts from here -->
  <div class="header_tp clearfix"> 
    <!--Header Area Top Inner starts from here -->
    <div class="header_tp_in clearfix"> <span class="all">WILDSTONE Property &amp; Planning</span> </div>
    <!--Header Area Top Inner ends from here --> 
  </div>
  <!--Header Area Top ends from here --> 
  <!--Header Area Bottom start from here -->
  <div class="header_bt clearfix"> 
    <!--Header Area Bottom start from here -->
    <div class="header_bt_in clearfix"> 
      <!--Header Area Bottom Left start from here -->
      <div class="header_bt_in_L">
        <h1>NEW WEBSITE</h1>
        <h2>COMING SOON</h2>
      </div>
      <!--Header Area Bottom Left Ends from here --> 
      <!--Header Area Bottom Right start from here -->
      <div class="header_bt_in_R"> <a href="#" title=""><img src="http://projects.tekkiwebsolutions.com/harjot/Wildstone/images/logo.png" alt="" title="" /></a> </div>
      <!--Header Area Bottom Right ends from here --> 
      
    </div>
    <!--Header Area Bottom ends from here --> 
  </div>
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
    
    <h1>Fill in your email and we will notify you when we launch:</h1>
    <!-- Notify Me Starts from here -->
    <div class="notify_me">
    
    <div class="notify_me_L"></div>
    
    <div class="notify_me_C">
    <form action="<?php echo $PHP_SELF; ?>">
    <input type="hidden" name="action" value="doit">

     <input type="text" value=""/>
    </form>
    </div>
   <div class="notify_me_R"></div>
    
    
    </div>
     <!-- Notify Me Ends from here -->
    <a href="javscript:submitform();" title="">Notify me</a>
    <?php echo $output; ?>
    
    <p><span>*</span> Don't worry, your details are safe with us.</p>
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