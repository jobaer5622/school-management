<?php include("inc/header.php"); ?>

	<div class="main_content">
		<div class="row">
			<div class="col-md-9 float-left border">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                        
                                        <div class="card border-primary rounded-0">
                                            <div class="card-header p-0">
                                                <div class="bg-info text-white text-center py-2">
                                                    <h3><i class="fa fa-envelope"></i> Send a Massage</h3>
                                               </div> 
                                            </div>
                                            <div id="state"></div>
                                             <form  name="myform" method="post" onsubmit="return validatefrom();">
                                            
                                            <div class="card-body p-3">                
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Type Your Name">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                        </div>
                                                        <input type="text" class="form-control" id="email" name="email" placeholder="example@email.com">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                        </div>
                                                        <textarea class="form-control" placeholder="Enter Massage" name="massage" id="massage"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div class="text-center">
                                                    <input type="submit" value="Send" class="btn btn-info btn-block rounded-0 py-2">
                                                </div>
                                            </div>
                
                                        </div>
                                    </form>
                
                
                                </div>
                    </div>
                </div>  



  
			</div>
			
			<div class="col-md-3 float-right">					
				<?php include("inc/sidebar.php"); ?>					  
			</div>

		</div>		
		  
	</div>
	<?php include("inc/footer.php"); ?>

	<script>
      
      function validatefrom(){
	var name    = document.myform.name;
	var email   = document.myform.email;
	var massage   = document.myform.massage;
	
		if(name.value == ""){
		document.getElementById("state").innerHTML = "<p style='margin:10px 0  0 30px;color:red;'>Please Enter Your Name</p>";
		return false;
		}
        if(email.value == ""){
		document.getElementById("state").innerHTML = "<p style='margin:10px 0  0 30px;color:red;'>Please Enter E-mail Address</p>";
		return false;
		}
        if(email.value.indexOf("@", 0)<0){
            document.getElementById("state").innerHTML = "<p style='margin:10px 0  0 30px;color:red;'>Please Enter Correct E-mail Address</p>";
		return false;
		}
		
		if(email.value.indexOf(".", 0)<0){
		document.getElementById("state").innerHTML = "<p style='margin:10px 0  0 30px;color:red;'>Please Enter Correct E-mail Address</p>";
		return false;
		}

        if(massage.value == ""){
		document.getElementById("state").innerHTML = "<p style='margin:10px 0  0 30px;color:red;'>Please Enter Your massage</p>";
		return false;
		}
}   
	</script>