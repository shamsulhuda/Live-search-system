<!DOCTYPE html>

<html>

<head>

	<meta name="_token" content="{{ csrf_token() }}">



	<title>Live Search</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>


	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->

</head>

<body>

	<div class="container">

	
		<div class="row">

			<div class="panel panel-default">

				<div class="panel-heading">

					<h3>Products info </h3>


				</div>
				<a href="{{url('/create')}}" class="btn btn-primary btn-sm">Create New product</a>

				<div class="panel-body">

				<div class="form-group">

					<input type="text" class="form-controller" id="search" name="search"></input>

				</div>

					<table class="table table-bordered table-hover">

					<thead>

						<tr>

							<th>ID</th>

							<th>Product Name</th>

							<th>Description</th>

							<th>Price</th>

						</tr>

					</thead>

					<tbody>

					</tbody>

				</table>

				</div>

			</div>

		</div>

	</div>

	<script type="text/javascript">

		$('#search').on('keyup',function(){

				$value=$(this).val();

			$.ajax({

				type : 'get',

				url : '{{URL::to('search')}}',

				data:{'search':$value},

				success:function(data){

				$('tbody').html(data);

			}

			});



		})

	</script>

	<script type="text/javascript">

		$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });

	</script>

</body>

</html>