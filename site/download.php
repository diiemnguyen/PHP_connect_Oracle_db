<script>
function alertempty()
{
	  alert("PLEASE ENTER USERNAME AND PASSWORD !");
	  window.close();  
}
</script>

<!-- Include jQuery - see http://jquery.com -->
<script type="text/javascript">
    $('.confirmation').on('click', function () {
        return confirm('Are you sure?');
    });

</script>

<!-- Working for Tab change -->
<script>
function tabSwitch(new_tab, new_content) {
	
	document.getElementById('content_1').style.display = 'none';
	document.getElementById('content_2').style.display = 'none';
	document.getElementById('content_3').style.display = 'none';		
	document.getElementById(new_content).style.display = 'block';	
	

	document.getElementById('tab_1').className = '';
	document.getElementById('tab_2').className = '';
	document.getElementById('tab_3').className = '';		
	document.getElementById(new_tab).className = 'active';		

}
</script>	


<?php include("header.php"); ?>

<?php 

session_start();

if (!isset($_POST['username']) || !isset($_POST['password'])) {
  header('Location: login.php');
} else {
  // Check validity of the supplied username & password
  $c = oci_connect('user??', 'password??','(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=??)(PORT=1521))
(CONNECT_DATA=(SERVER=DEDICATED) (SERVICE_NAME = ??)))');
  // Use a "bootstrap" identifier for this administration page
  oci_set_client_identifier($c, 'admin');

  $s = oci_parse($c, 'select * from TABLE_CURRENT_USERS where EMAIL = :un_bv and PASSWORD = :pw_bv');
  oci_bind_by_name($s, ":un_bv", $_POST['username']);
  oci_bind_by_name($s, ":pw_bv", $_POST['password']);
  oci_execute($s);
  $r = oci_fetch_array($s, OCI_ASSOC);

  if ($r) {
    // The password matches: the user can use the application

    // Set the user name to be used as the client identifier in
    // future HTTP requests:
    $_SESSION['username'] = $_POST['username'];

    echo <<<EOD

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Download</title>
	<link rel="stylesheet" type="text/css" href="stylesheet/framework.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/boxy.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/sitecopy.css">
	
</head>
<body style="font-family: Arial, sans-serif;">
<p>

<table cellspacing="0" cellpadding="0" width="100%" border="0">
	<div id="framework-content-titles"><!--googleon: snippet-->
		<h2 class="title-page">Cisco UCS Director: Unified Management</h2>
	</div>

		
  	<tbody><tr><td style="padding-left:30px;padding-right:30px;padding-top:10px;">
	  
    	<div class="sitecopy">
          	<div class="item">
                
            	<div align="right"> <a href="http://localhost/site/login.php" style="text-decoration: none;"><img src="images/logout.gif" align="">Log Out</a></div><br />
                
				<!--MAIN CONTENT TABLE-->
				
                <table><tbody><tr>
                        <td valign="top"><img src="../site/images/sample_image.png" width="520" height="349" alt="image"></td>
                        
						<td>
                            <p>SAMPLE TEXT HERE</p>

                        </td>
                    </tr></tbody>
				</table>
                    
                <br /><br />


<div id="tabbed_box_1" class="tabbed_box">
	<div class="tabbed_area">
		<ul class="tabs">
			<li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">TAB 1</a></li>
			<li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">TAB 2</a></li>
			<li><a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3" style="display:none;">TAB 3</a></li>
		</ul>
        
		
		<!-- CONTENT TAB 1-->
        <div id="content_1" class="content">
			<p style="margin:10px 0px 5px 10px;"><strong>Title</strong></p>
			<p style="margin-left:10px;">Sample text</p><br />

			<center>
			<table class="table-formatted-vborders">
				<tbody><tr><th>UpDate</th><th>Description</th><th>File Name</th><th>File Size</th></tr>
				
				<tr><td>10/28/2013</td>
					<td>Sample description 1</td>
					<td>sample file name 1</td>
					</td><td>0.00 MB <br />(4697 bytes)</td>
				</tr>
				
				<tr><td>10/28/2013</td>
					<td>Sample description 2</td>
					<td>sample file name 2</td>
					<td>639.65 MB <br />(670724314 bytes)</td>
				</tr>
				
				
				<tr style="text-align:center">
					<td>&lowast;&lowast;&lowast;</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
				
				<tr><td>10/28/2013</td>
					<td>Sample description 3</td>
					<td>sample file name 3</td>
					<td>6999.19 MB <br />(7339179721 bytes)</td>
				</tr>
				
				<tr><td>10/28/2013</td>
					<td>Sample description 4</td>
					<td>sample file name 4</td>
					<td>593.17 MB <br />(621979480 bytes)</td>
				</tr>
			
				
				
			</tbody></table>
			</center>
        </div>
		<!-- END CONTENT TAB 1-->	
		
		
		
		<!-- CONTENT TAB 2-->
        <div id="content_2" class="content">
        	<p style="color: #0F465C; font-size: 12px; margin: 10px 0px 5px 10px;"><strong>Sample title</strong></p><br />
			<p style="font-size: 12px; margin-left: 10px; margin-bottom: 5px;">Sample text</p>
			<p style="font-size: 10px; margin-left: 12px;">Last updated: August 2013</p><br />

			<p style="font-size: 12px; margin-left: 10px;">This document provides information regarding the physical and virtual devices and software supported by Cisco UCS Director. The information has been segmented into different functional areas and is organized by vendor within each functional area.</p><br />
			<p style="font-size: 12px; margin-left: 10px;">Additional documentation:</p><br />
			
			<ul>
		            	<li>Sample list 1</li>
				<li>Sample list 2</li>
				<li>Sample list 3</li>
			</ul>
        </div>
		<!-- END CONTENT TAB 2-->	
			
			
		<!-- CONTENT TAB 3-->
        <div id="content_3" class="content">
        	
        </div>
		<!-- END CONTENT TAB 3-->
    
	
</div></div>
<!--  END DIV "tabbed_box_1" class="tabbed_box"  -->


            
			</div></div>

	</tbody></table>
											
											

</p>
</body>
EOD;

	// footer here after close echo<<<EOD
	include("footer.php");
	
	// open echo<<<EOD again
	echo <<<EOD
</html>	
EOD;

    exit;
  }
  else {
    // No rows matched so login failed
    header('Location: login.php');
  }
}


?>





