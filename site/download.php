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
  $c = oci_connect('cisco', 'cisco','(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=10.11.2.24)(PORT=1521))
(CONNECT_DATA=(SERVER=DEDICATED) (SERVICE_NAME = PRODDB)))');
  // Use a "bootstrap" identifier for this administration page
  oci_set_client_identifier($c, 'admin');

  $s = oci_parse($c, 'select * from OR_FL_USERS where EMAIL = :un_bv and PASSWORD = :pw_bv');
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
                
            	<div align="right"> <a href="http://10.11.2.111/site/login.php" style="text-decoration: none;"><img src="images/logout.gif" align="">Log Out</a></div><br />
                
				<!--MAIN CONTENT TABLE-->
				
                <table><tbody><tr>
                        <td valign="top"><img src="../site/images/cloupia_cloud_management_environment_large.png" width="520" height="349" alt="image"></td>
                        
						<td>
                            <p>Cisco UCS Director delivers unified management for industry-leading shared infrastructure solutions based on Cisco UCS and Cisco Nexus fabric. Cisco UCS Director complements shared infrastructure solutions with unified management and centralized automation and orchestration to deliver increased IT efficiency and reductions in total cost of ownership.</p><br />
<p>Cisco UCS Director is a unified management solution that enhances the value of shared infrastructure solutions, which bring together compute, network, and storage resources. Together, Cisco UCS Director and shared infrastructures improve IT agility, protect investments, simplify deployment of new services, and optimize asset use.</p><br />
<p>Cisco UCS Director allows IT to continue their drive towards data center transformation and innovation with holistic management, centralized automation and orchestration across virtual and physical infrastructure layers. Cisco UCS Director delivers effective unified shared infrastructure management through these capabilities:</p>

<ul>
<li>Centralized management console, which provides a comprehensive view of the shared infrastructure stack</li>
<li>Native performance monitoring across all shared infrastructure resources to quickly address over or under-utilized resources before they compromise service</li>
<li>Support for EMC VSPEX, NetApp FlexPod & ExpressPod and VCE Vblock</li>
<li>Model-based orchestration to build and execute repeatable workflows without custom scripts</li>
<li>Ability to manage virtualized and non-virtualized environments running side-by-side</li>
<li>Fast time to value: installation to production in less than four hours without any service engagement</li>
</ul>

                        </td>
                    </tr></tbody>
				</table>
                    
                <br /><br />


<div id="tabbed_box_1" class="tabbed_box">
	<div class="tabbed_area">
		<ul class="tabs">
			<li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">SOFTWARE</a></li>
			<li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">SUPPORT</a></li>
			<li><a href="javascript:tabSwitch('tab_3', 'content_3');" id="tab_3" style="display:none;">Pages</a></li>
		</ul>
        
		
		<!-- CONTENT TAB 1-->
        <div id="content_1" class="content">
			<p style="margin:10px 0px 5px 10px;"><strong>Download:</strong></p>
			<p style="margin-left:10px;">Click on the links in the table to download the content.</p><br />

			<center>
			<table class="table-formatted-vborders">
				<tbody><tr><th>Release Date</th><th>Description</th><th>File Name</th><th>File Size</th><th>MD5 Checksum</th></tr>
				
				<tr><td>10/Oct/2013</td>
					<td>PSIRT-1865589052 Fix for Cisco UCS Director Baremetal Agent 4.0</td>
					<td>PSIRT-1865589052-Fix.zip</td>
					</td><td>0.00 MB <br />(4697 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/8c2e4162cf666fce3bc7a59c54fef009" target="_blank">8c2e4162cf666fce3bc7a59c54fef009</a></td>
				</tr>
				
				<tr><td>05/Oct/2013</td>
					<td>Cisco UCS Director 4.0 Patch (Patch need to be applied on top of 4.0)</td>
					<td>cucsd_patch_4_0_1_1.zip</td>
					<td>639.65 MB <br />(670724314 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/b708655accc43d7e21ed2451364fbbe0" target="_blank" class="confirmation">b708655accc43d7e21ed2451364fbbe0</a></td>
				</tr>
				
				
				<tr style="text-align:center">
					<td>&lowast;&lowast;&lowast;</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
				
				<tr><td>16/Sep/2013</td>
					<td>Cisco UCS Director Baremetal Agent 4.0 (HyperV Appliance)</td>
					<td>CUCSD_BMA_4_0_0_2_hyperv_GA.zip</td>
					<td>6999.19 MB <br />(7339179721 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/d8f3457dea582ff648a94c9941959ed7" target="_blank" class="confirmation">d8f3457dea582ff648a94c9941959ed7</a></td>
				</tr>
				
				<tr><td>12/Sep/2013</td>
					<td>Cisco UCS Director 4.0 HOTFIX Patch (Patch need to be applied on top of 4.0.0.2)</td>
					<td>cucsd_patch_4_0_0_3.zip</td>
					<td>593.17 MB <br />(621979480 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/d6f3949d8e3c3f653a354361ea3c92c4" target="_blank" class="confirmation">d6f3949d8e3c3f653a354361ea3c92c4</a></td>
				</tr>
			
				<tr style="text-align:center">
					<td>&lowast;&lowast;&lowast;</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				
				<tr><td>16/Aug/2013</td>
					<td>Cisco UCS Director 4.0 (VMWare vSphere OVF Appliance)</td>
					<td>CUCSD_4_0_0_2_GA.zip</td>
					<td>2225.96 MB <br />(2334091475 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/0021e7f09d1d75d3241e6c04f0a881d5" target="_blank" class="confirmation">0021e7f09d1d75d3241e6c04f0a881d5</a></td>
				</tr>
				
				<tr><td>16/Aug/2013</td>
					<td>Cisco UCS Director 4.0 (HyperV Appliance)</td>
					<td>CUCSD_4_0_0_2_HYPERV_GA.zip</td>
					<td>4160.18 MB <br />(4362269663 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/924dc74be79375503844e7a840726d56" target="_blank" class="confirmation">924dc74be79375503844e7a840726d56</a></td>
				</tr>
				
				<tr><td>16/Aug/2013</td>
					<td>Cisco UCS Director Baremetal Agent 4.0 (VMWare vSphere OVF Appliance)</td>
					<td>CUCSD_BMA_4_0_0_2_GA.zip</td>
					<td>4588.86 MB <br />(4811770292 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/fdbed15f9ac6756961992bd9b6b10300" target="_blank" class="confirmation">fdbed15f9ac6756961992bd9b6b10300</a></td>
				</tr>
				
				<tr><td>16/Aug/2013</td>
					<td>Cisco UCS Director 4.0 Patch (Upgrade Patch To Earlier 3.4 Release - HyperV Environment)</td>
					<td>cucsd_4_0_0_2_hyerpv_patch.zip</td>
					<td>688.42 MB <br />(721856729 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/ed98c126469ef0c317c84f7cbb68757c" target="_blank" class="confirmation">ed98c126469ef0c317c84f7cbb68757c</a></td>
				</tr>
				
				<tr><td>16/Aug/2013</td>
					<td>Cisco UCS Director 4.0 Patch (Upgrade Patch To Earlier 3.4 Release - VMWare vSphere)</td>
					<td>cucsd_patch_4_0_0_2.zip</td>
					<td>595.37 MB <br />(624292625 bytes)</td>
					<td><a href="http://Orion.mediusdownloads.com/d9d08368d2e4b586b9ada09147133f98" target="_blank" class="confirmation">d9d08368d2e4b586b9ada09147133f98</a></td>
				</tr>
				
			</tbody></table>
			</center>
        </div>
		<!-- END CONTENT TAB 1-->	
		
		
		
		<!-- CONTENT TAB 2-->
        <div id="content_2" class="content">
        	<p style="color: #0F465C; font-size: 12px; margin: 10px 0px 5px 10px;"><strong>Cisco UCS Director 4.0 Support Matrix</strong></p><br />
			<p style="font-size: 12px; margin-left: 10px; margin-bottom: 5px;"><a href="http://www.cisco.com/en/US/docs/unified_computing/ucs/ucs-director/compatibility-matrix/4-0/UCSDirector-CompatibilityMatrix-40.html" target="_blank">Compatibility Matrix for Cisco UCS Director, Release 4.0</a></p>
			<p style="font-size: 10px; margin-left: 12px;">Last updated: August 2013</p><br />

			<p style="font-size: 12px; margin-left: 10px;">This document provides information regarding the physical and virtual devices and software supported by Cisco UCS Director. The information has been segmented into different functional areas and is organized by vendor within each functional area.</p><br />
			<p style="font-size: 12px; margin-left: 10px;">Additional documentation:</p><br />
			
			<ul>
            	<li><a href="http://www.cisco.com/en/US/prod/collateral/ps10265/ps13050/ciscocloupia_so.pdf" target="_blank">Cisco UCS Director <img src="../site/images/logo_pdf.png" /></a></li>
<li><a href="http://www.cisco.com/en/US/prod/collateral/ps10265/ps13050/solution_overview_c22-727580.html" target="_blank">UCS Director and FlexPods</a></li>
<li><a href="http://www.cisco.com/en/US/prod/collateral/ps10265/ps13050/solution_overview_c22-727577.html" target="_blank">Converged Infrastructure with UCS Director</a></li>
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





