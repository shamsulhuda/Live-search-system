<!DOCTYPE html>

<html>

<head>

	<meta name="_token" content="{{ csrf_token() }}">



	<title>Live Search</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">

	

   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Insert Data</h4>
        </div>
        <div class="modal-body">

          <form action="create.new" method="POST">
          	@csrf

			  <div class="form-group">
			    <label for="exampleInputEmail1">Product title</label>
			    <input type="text" class="form-control" name="title" placeholder="Enter product title">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Description</label>
			    <input type="text" class="form-control" name="description" placeholder="Description">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Price</label>
			    <input type="number" class="form-control" name="price" placeholder="Input price">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

	

		<div class="row">

			
				<button type="button" class="btn btn-info btn-sm btn-float-right" data-toggle="modal" data-target="#myModal">Insert Data</button>


				

		</div>

	</div>



</body>

</html>