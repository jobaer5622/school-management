<div class="footer">
		<p class="text-center">2022 @ Design And Development By Sk Jobaer Siddiki</p>
	</div>
	
<div id="gotoup"><img src="img/up.png" width="50" height="50" /></div>
</div>
</body>
</html>
<script type="application/javascript">
$(window).scroll(function(){
	if($(this).scrollTop()>500){
		$("#gotoup").fadeIn();		
		}else{
		$("#gotoup").fadeOut();			
			}	
	});
$("#gotoup").click(function(){
	$("html, body").animate({scrollTop:0}, 800);	
	});
</script>