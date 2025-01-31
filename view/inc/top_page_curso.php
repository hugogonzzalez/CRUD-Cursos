<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alta de Curso</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    	<script type="text/javascript">
        	$(function() {
        		$('.fecha').datepicker({
        			dateFormat: 'dd/mm/yy', 
        			changeMonth: true, 
        			changeYear: true, 
        			yearRange: '1900:2016',
        			onSelect: function(selectedDate) {
        			}
        		});
        	});
	    </script>
	    <link href="view/css/style.css" rel="stylesheet" type="text/css" />
	    <script src="module/curso/model/validate_curso.js"></script>
		<script type="text/javascript" src="view/js/utils.js"></script>

		<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

		 <!-- Favicons -->
		<link href="view/assets/img/favicon.png" rel="icon">
		<link href="view/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com" rel="preconnect">
		<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link href="view/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="view/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
		<link href="view/assets/vendor/aos/aos.css" rel="stylesheet">
		<link href="view/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
		<link href="view/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

		<!-- Main CSS File -->
		<link href="view/assets/css/main.css" rel="stylesheet">


    </head>
    <body>