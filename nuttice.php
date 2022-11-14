<?php include_once("inc/header.php"); ?>


	<div class="main_content">
		<div class="row">
			<div class="col-md-9 float-left border">
<h3 class="text-center">All Nuttice</h3>
                <table  class="table table-bordered">
                    <tr>
                      <th class="text-center" width="10%">Sl No</th>
                      <th class="text-center" width="70%">Nuttice Title</th>
                      <th class="text-center" width="20%">Date</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td><a href="">Maria Anders</a></td>
                      <td>01-01-2022</td>
                    </tr>
                  </table>                				

                  <nav aria-label="...">
                    <ul class="pagination justify-content-center">
                      <li class="page-item">
                        <span class="page-link">Previous</span>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item" aria-current="page">
                        <span class="page-link">2</span>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
  
			</div>
			
			<div class="col-md-3 float-right">					
				<?php include("inc/sidebar.php"); ?>
			</div>

		</div>
		


		
		  
	</div>
	<?php include("inc/footer.php"); ?>