<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ $title }} | Sipenbuk</title>
		@include('admin.partials.head')
	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			
			@include('admin.partials.navbar')

			@include('admin.partials.aside')

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				@yield('content')
			</div>
			<!-- /.content-wrapper -->

			@include('admin.partials.footer')
		</div>
		<!-- ./wrapper -->

		@include('admin.partials.script')
	</body>
</html>
