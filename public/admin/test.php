<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>UltrasBot</title>

	<!-- Bootstrap core CSS -->
	<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

	<!-- Custom styles for this template -->
	<link href="css/simple-sidebar.css" rel="stylesheet">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script> -->
	<style>
		html,
		body {
			max-width: 100%;
			overflow-x: hidden;
		}

		.droptarget {
			float: left;
			min-height: 100px;
			min-width: 200px;
			border: 1px solid black;
			margin: 15px;
			padding: 10px;
			border: 1px solid #aaaaaa;
		}

		[contentEditable=true]:empty:not(:focus):before {
			content: attr(data-text);
		}

		.savedfromclass {
			min-height: 100px;
			min-width: 200px;
			border: 1px solid black;
		}
	</style>
</head>

<body>
	<div class="d-flex" id="wrapper">

		<!-- Sidebar -->
		<div class="bg-light border-right" id="sidebar-wrapper">
			<div class="sidebar-heading">test </div>
			<div class="list-group list-group-flush">
				<a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
				<a href="#" class="list-group-item list-group-item-action bg-light">Messages</a>
				<a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
				<a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
				<a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
				<a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
			</div>
		</div>
		<!-- /#sidebar-wrapper -->

		<!-- Page Content -->
		<div id="page-content-wrapper">

			<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
				<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
								data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Something else here</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<div class="container">

<div class="row">
    <div class="col-md-3">
        <div class="droptarget" ondrop="drop(event)" ondragover="allowDrop(event)">
            <p ondragstart="dragStart(event)" draggable="true" id="dragtarget"><button>Text input <i
            class="fa fa-bars" aria-hidden="true"></i></button></p>
        </div>
    </div>
    <div class="ol-md-4">
        <div id="maincontainer" contenteditable=true data-text="Drop here..." class="droptarget"
            ondrop="drop(event)" ondragover="allowDrop(event)"></div>
    </div>
    <div class="col-md-5">
        <div id="savedform" calss="savedfromclass"></div>
    </div>

</div>
<script>
    function dragStart(event) {
        event.dataTransfer.setData("Text", event.target.id);
    }

    function allowDrop(event) {
        event.preventDefault();
    }

    function drop(event) {
        var response = '';
        $.ajax({ type: "GET",   
                url: "http://www.google.de",   
                async: false,
                success : function(text)
                {
                    response = text;
                }
        });

        alert(response);
    }
    // function addform(clicked_id) {
    //     $.ajax({
    //         type: "GET",
    //         url: "addform",
    //         dataType: "html", 
    //         success: function(result){
    //             $("#div1").html(result);
    //         }
    //     });
    // }
    // function media(clicked_id) {
    //     $.ajax({
    //         type: "GET",
    //         url: "media",
    //         dataType: "html", 
    //         success: function(result){
    //             $("#media").html(result);
    //         }
    //     });
    // }
    
    // function saveform() {
    //     // alert("t");
    //     var title = document.getElementById("title").value;
    //     $("#savedform").append("&nbsp; <button class='btn btn-info'>" + title);
        
    //     values=$("#sample_form").serialize();//alert(values);
    //     $.ajax({
    //         url: "fromsave",
    //         type: "POST",
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         dataType:"json",
    //         data: values,
    //         success: function(){
    //             alert(result);
    //         },
    //         error: function(){
    //             alert(console.log);
    //         }
    //     });
    //     document.getElementById("maincontainer").innerHTML = "";
    // }

    // function showDiv(select){
    //     if(select.value==1){
    //         document.getElementById('hidden_div').style.display = "block";
    //     } else{
    //         document.getElementById('hidden_div').style.display = "none";
    //     }
    // } 
    // function cancelForm() {
    //     document.getElementById("maincontainer").innerHTML = "";
    // }

</script>


</div><!-- /container -->

			<!-- Bootstrap core JavaScript -->
			
</body>

</html>