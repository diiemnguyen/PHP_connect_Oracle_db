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