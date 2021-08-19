<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/latihan.css">
    <script async src="js/jquery-3.2.1.slim.min.js"></script>
    <script async src="js/popper.min.js"></script>
    <script async src="js/bootstrap.js"></script>
    <script async src="js/BigData.js"></script>	
	<title>VesselGo | Login</title>
</head>
	<body class="bg-dark">
        <div class="container-fluid position-relative" style="top: 50px">
        	<form action="proses.php" method="post" name="FormSignUp" class="ml-3">
	        	<div class="form-row">
	        		<div class="offset-1 col-5">
	        			<div class="text-light h6">First Name</div>
	        			<input type="text" name="First_Name" class="form-control">
	        		</div>
	        		<div class="col-5">
						<div class="text-light h6">Last Name</div>
	        			<input type="text" name="Last_Name" class="form-control">
	        		</div>
	        	</div>
	        	<div class="form-row mt-3">
	        		<div class="offset-1 col-10">
	                	<div class="form-group">
		                	<div class="text-light h6">No. Telp / Handphone</div>
		                	<input type="telp" name="No_Telp" class="form-control" placeholder="0813 - &times&times&times&times - &times&times&times&times" required/>
	                	</div>
                	</div>
	        	</div>
	        	<div class="form-row">
	        		<div class="offset-1 col-10">
	                	<div class="form-group">
		                	<div class="text-light h6">Email Address</div>
		                	<input type="email" name="Alamat_Email" class="form-control" placeholder="someone@gmail.com" required/>
		               	</div>
	               	</div>
	            </div>
	        	<div class="form-row">
	        		<div class="offset-1 col-10">	            
                		<div class="form-group">
	                		<div class="text-light h6">Birth Of Date</div>
	                		<input type="date" name="Birth_Of_Date" class="form-control" required/>
	                	</div>
	                </div>
	            </div>
	        	<div class="form-row">
	        		<div class="offset-1 col-10">	            
                		<div class="form-group">
	                		<div class="text-light h6">Status Pernikahan</div>
	                		<input list="Status_Nikah" name="Status_Pernikahan" class="form-control" required/>
	                			<datalist id="Status_Nikah">
	                				<option value="Sudah menikah"></option>
	                				<option value="Belum menikah"></option>
	                				<option value="Cerai"></option>
	                			</datalist>
	                	</div>	                	
	                </div>
	            </div>
	        	<div class="form-row">
	        		<div class="offset-1 col-10">	            
		               	<div class="text-light h6 ml-0">Status Pekerjaan</div>
                		<div class="form-check form-check-inline mb-3 custom-radio custom-control">                			
			                <input type="radio" name="status_pekerjaan" value="Sudah bekerja" class="custom-control-input" id="sudahbekerja" required/>
	                		<label class="text-light mr-4 h6 custom-control-label" for="sudahbekerja">Sudah bekerja</label>	                		
		                	<div class="ml-4 d-inline-block">
			                	<input type="radio" name="status_pekerjaan" class="custom-control-input" value="Belum bekerja" id="belumbekerja" required/>
		                		<label class="text-light mr-4 h6 custom-control-label" for="belumbekerja">Belum bekerja</label>
		                	</div>
		                	<div class="ml-4 d-inline-block">
			                	<input type="radio" name="status_pekerjaan" class="custom-control-input" value="Karyawan PNS" id="KaryawanPNS" required/>
			                	<label class="text-light h6 ml-2 custom-control-label" for="KaryawanPNS">Karyawan PNS</label>
		                	</div>
	                	</div>	        			
	        		</div>
	        	</div>
	        	<div class="form-row">
	        		<div class="offset-1 col-10">	            
                		<div class="form-group">
	                		<div class="text-light h6">Password</div>
	                		<input type="password" name="Nama_Lengkap" class="form-control" required/>
                		</div>	        			
	        		</div>	        		            
	        	</div>
	        	<div class="form-row">
	        		<div class="offset-1 col-10">	            
                		<div class="form-group">
	                		<div class="text-light h6">Re-Type Password</div>
	                		<input type="password" name="Nama_Lengkap" class="form-control" required/>
	                	</div>
	        		</div>
	        	</div>
	        	<div class="form-row">
	        		<div class="offset-1 col-10">	            
                		<div class="form-check mt-3 custom-control custom-checkbox">
		                	<input type="checkbox" name="ceklist_persetujuan" class="form-check-input custom-control-input" id="checkboxPersetujuan" required/>
		                	<label for="checkboxPersetujuan" class="custom-control-label text-light h6 ml-2">Dengan ini saya menyatakan tunduk terhadap segala syarat & peraturan yang ada di perusahaan ini</label>
	                	</div>
	        		</div>
	        	</div>	        	
	        	<div class="form-row">
	        		<div class="offset-1 col-10">
	                	<div class="form-group mt-5">
	                		<input type="submit" name="SUBMIT" value="Submit" class="btn btn-danger mr-lg-3 mr-4 pr-5 pl-5">
	                		<input type="reset" name="RESET" value="Reset" class="btn btn-primary ml-lg-3 ml-4 pr-5 pl-5">
	                	</div>              		        			
	        		</div>
	        	</div>
        	</form>
            <div class="row">
<!--                 <div class="offset-0 col-12 bg-secondary rounded">

                	<form action="proses.php" method="post" name="FormSignUp" class="mr-3 ml-3">

                		<div class="form-group">
	                		<div class="text-light h6">Upload Photo</div>
	                		<input type="file" name="Your_Photo" class="form-control-file" required/>
	                	</div>


                	</form>

                </div> -->
            </div>
        </div>
	</body>
</html>