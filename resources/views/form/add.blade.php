<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Register</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <style>
            .ftext {
                font-weight:bold;
            }

            .e-color {
                color:red;
            }
        </style>
    <head>
    <body>
        <div class="container">
	        <div class="panel panel-default">
                <div class="panel-heading text-center"><h1>Form Registration</h1></div>
	                <div class="panel-body">
                        <form method="POST" action="{{ url('/image-store/create') }}" accept-charset="UTF-8" class="form-horizontal form" enctype="multipart/form-data">
                        </br>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
	  		                    <div class="col-md-6 ftext">                                    
                                        <div class="fileinput fileinput-new input-group control-group after-add-doc overflow-hidden" data-provides="fileinput" required>                                            
                                            <span class="input-group-addon btn btn-default btn-file">
                                            <label class="control-label">Select Image<span class="e-color">*</span></label>                    
                                            <input class="file_upload" type="file" id="file_uploads" name="image" required >                  
                                        </div>                                    
                                </div>
                            </div>                                 
                            <div class="row">                                
                                <div class="col-md-3">
                                </div>
	  		                    <div class="col-md-6 ftext">
                                    <label class="control-label">First Name<span class="e-color">*</span></label>                                  
                                    <input type="text" id="first_name" placeholder="Enter First Name" class="form-control" name="first_name" value="" required> 
                                    @if ($errors->has('first_name'))
                                        <span class="help-block"><strong>{{ $errors->first('first_name') }}</strong></span>
                                    @endif
                                </div>	  		                     		
	  	                    </div>
                              </br>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6 ftext">
                                    <label class="control-label">Last Name<span class="e-color">*</span></label>                                  
                                    <input type="text" id="last_name" placeholder="Enter Last Name" class="form-control" name="last_name" value="" required> 
                                    @if ($errors->has('last_name'))
                                        <span class="help-block"><strong>{{ $errors->first('last_name') }}</strong></span>
                                    @endif
                                </div>
	  		                    </div>	  		
	  	                    </div>
                              </br>
                            <div class="row">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6 ftext">
                                    <label for="address_address">Address</label>
                                    <input type="text" id="address" name="address" class="form-control map-input">
                                    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                    <input type="hidden" name="address_longitude" id="address-longitude" value="0" /> 
                                    @if ($errors->has('address'))
                                        <span class="help-block"><strong>{{ $errors->first('address') }}</strong></span>
                                    @endif
                                </div>
	  		                    </div>	  		
	  	                    </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
    </body>
</html>        
