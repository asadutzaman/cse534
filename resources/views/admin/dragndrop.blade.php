@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
@section('content')
@php
header('Access-Control-Allow-Origin: *');
@endphp
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
        $.ajax({
            type: "GET",
            url: "http://127.0.0.1:8000/manualdiv",
            dataType: "html",
            success: function(response){
                $("#maincontainer").html(response);
            }
        });
    }
    function addform(clicked_id) {
        $.ajax({
            type: "GET",
            url: "addform",
            dataType: "html", 
            success: function(result){
                $("#div1").html(result);
            }
        });
    }
    function media(clicked_id) {
        $.ajax({
            type: "GET",
            url: "media",
            dataType: "html", 
            success: function(result){
                $("#media").html(result);
            }
        });
    }

    function saveform() {
        // alert("t");
        var title = document.getElementById("title").value;
        $("#savedform").append("&nbsp; <button class='btn btn-info'>" + title);
        
        values=$("#sample_form").serialize();//alert(values);
        alert(values);
        $.ajax({
            url: "fromsave",
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType:"json",
            data: values,
            success: function(){
                alert(result);
            },
            error: function(){
                alert(console.log);
            }
        });


        
        document.getElementById("maincontainer").innerHTML = "";
    }

    function showDiv(select){
        if(select.value==1){
            document.getElementById('hidden_div').style.display = "block";
        } else{
            document.getElementById('hidden_div').style.display = "none";
        }
    } 
    function cancelForm() {
        document.getElementById("maincontainer").innerHTML = "";
    }

</script>


</div><!-- /container -->

  
@endsection