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
<div class="row">
<h3 align="center">Manage Student Details</h3>
<table border="1" align="center">
   <tr>
       <!-- <td> <input type="button" id="display" value="Display All Data" /> </td> -->
   </tr>
</table>
<!-- <div id="responsecontainer" align="center"> -->
</div>
<script>
    function dragStart(event) {
        event.dataTransfer.setData("Text", event.target.id);
    }

    function allowDrop(event) {
        event.preventDefault();
    }

    function drop(event) {
        $("#maincontainer").append("\
            <div class='form-group col-md-12'>\
            <label class='control-label'>Node Name:</label> <input class='form-control' type='text' name='label' id='nodeName'>\
            <label class='control-label' id=''>Select type: </label>\
            <select class='form-control input-md' id='test' name='form_select' onchange='showDiv(this)'>\
                <option value='0'>URL</option>\
                <option value='1'>Message</option>\
            </select>\
            <div id='hidden_div' style='display:none;'> <label class='control-label'>Message:</label><input type='text' name='help' id='help' class='form-control'></div>\
            <label class='control-label'>URL:</label> <input type='text' name='help' id='help' class='form-control'>\
            <div id='responsecontainer'></div>\
            <label class='control-label' id=''>Next Action: </label>\
            <select class='form-control input-md' id='color'>\
                <option>Yes</option>\
                <option>No</option>\
                <option>Pending</option>\
            </select>\
            <hr/>\
            </div>\
            <div id='dynamic_field'></div>\
            <button class='btn btn-info' id='1' onClick='saveform(this.id)'>Save</button><button onClick='cancelForm(this.id)' class='btn btn-danger'>Cancel</button>\
            <button type='button' onClick='addform(this.id)' class='btn btn-success'>Add More</button>\
        ");
    }
    function addform(clicked_id) {
        // $('#dynamic_field').append('\
        // <label class="control-label">Content</label> <input class="form-control" type="text">\
        // <label class="control-label">URL</label> <input class="form-control" type="text">\
        // <label class="control-label" id="">Next Action: </label>\
        // <select class="form-control input-md">\
        //     <option>Yes</option>\
        //     <option>No</option>\
        //     <option>Pending</option>\
        // </select><hr/>\
        // ');
        $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "manualdiv",
        dataType: "html",   //expect html to be returned
        success: function(response){
            $("#responsecontainer").html(response);
            //alert(response);
        }

    });
    }

    function saveform() {
        var nodeName = document.getElementById("nodeName").value;
        $("#savedform").append("&nbsp; <button class='btn btn-info'>" + nodeName);
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
<script type="text/javascript">

 $(document).ready(function() {

    $("#display").click(function() {

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "manualdiv",
        dataType: "html",   //expect html to be returned
        success: function(response){
            $("#responsecontainer").html(response);
            //alert(response);
        }

    });
});
});

</script>

</div><!-- /container -->

  
@endsection