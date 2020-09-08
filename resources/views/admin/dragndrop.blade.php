@extends('layouts.app')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@section('content')
        <div class="container-fluid">
            <div class="clearfix"></div>
            <div class="form_builder">
                <div class="row" > 
                    <div class="col-sm-2">
                        <nav class="nav-sidebar">
                            <ul class="nav">
                                <li class="form_bal_textfield">
                                    <a href="javascript:;">Text Field <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_textarea">
                                    <a href="javascript:;">Text Area <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_select">
                                    <a href="javascript:;">Select <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_radio">
                                    <a href="javascript:;">Radio Button <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_checkbox">
                                    <a href="javascript:;">Checkbox <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_email">
                                    <a href="javascript:;">Email <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_number">
                                    <a href="javascript:;">Number <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_password">
                                    <a href="javascript:;">Password <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_date">
                                    <a href="javascript:;">Date <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                                <li class="form_bal_button">
                                    <a href="javascript:;">Button <i class="fa fa-plus-circle pull-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-5 bal_builder">
                        <div class="form_builder_area"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="col-md-12">
                            <form class="form-horizontal">
                                <div class=""></div>
                                <div class="form-group plain_html"><textarea rows="50" class="form-control"></textarea></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            //     }
            // });
$(document).ready(function(){



 

 $('#sample_form').on('submit', function(event){
  event.preventDefault();
  if($('#action').val() == 'Add')
  {
   $.ajax({
    url:"{{ route('chatbot.store') }}",
    method:"POST",
    data: new FormData(this),
    // data: {"_token": "{{ csrf_token() }}","id": id,"label": label, "answer":answer, "next_action":next_action},
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    {
     var html = '';
     if(data.errors)
     {
      html = '<div class="alert alert-danger">';
      for(var count = 0; count < data.errors.length; count++)
      {
       html += '<p>' + data.errors[count] + '</p>';
      }
      html += '</div>';
     }
     if(data.success)
     {
      html = '<div class="alert alert-success">' + data.success + '</div>';
      $('#sample_form')[0].reset();
      $('#user_table').DataTable().ajax.reload();
     }
     $('#form_result').html(html);
    }
   })
  }
 });

});
</script>
@endsection