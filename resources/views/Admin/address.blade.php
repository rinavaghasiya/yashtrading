@extends('Admin.admincontent')
@section('title')
Profile
@endsection
@section('body')
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
        <div class="main-content">
        <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <h4>Edit Address</h4>
                        </div>
                        <div class="login-form">

                           @if(Session::has('message'))
                      <div class="alert alert-success">
                          <i class="fa-lg fa fa-warning"></i>
                          {!! session('message') !!}
                      </div>
                      @elseif(Session::has('error'))
                      <div class="alert alert-danger">
                          <i class="fa-lg fa fa-warning"></i>
                          {!! session('error') !!}
                      </div>
                      @endif
                           <form class="form-horizontal" action="{{ url('adressedit') }}" method="post">
                          {{ csrf_field() }}
                      <div class="form-group">
                        <input type="hidden" class="form-control" name="id" id="id" value="{{ $a->id }}">
                      <label>Address</label>
                      <textarea class="form-control" id="textarea" name="address" placeholder="Address">{{ $a->address }}</textarea>

                      </div>

                      <div class="form-group">
                      <label>Email </label>
                      <input type="text" class="form-control" placeholder="Email" name="email" id="email" value="{{ $a->email }}"><p id="email_validation"></p>
                      </div>
                      
                      <div class="form-group">
                    <label >Phone Number</label>
                    <input type="text" name="phone"  id="phone" class="form-control" placeholder="Phone Number" maxlength="10" value="{{ $a->phone }}" onkeypress="return isNumber(event)"  /><p id="Mobile_validate"></p> 
                </div>
                <div class="form-group row">
                        <div class="offset-sm-0 col-sm-10">
                         <button type="submit" class="btn btn-success">Save Address</button> <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                      </div>
                </form>
                   
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script type ="text/javascript">

 $("#email").focusout(function()
   {
      var email = $("#email").val();
   if(email == '')
   {

      $("#email").css({"border-color": "red","border-style":"solid"});
      document.getElementById("email_validation").innerHTML = "<font style=color:red> Please enter email</font>";
   }
   else if(email !='')
   {
      var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z]{2,4})+$/;
      if(!regex.test(email))
      {
         $("#email").css({"border-color": "red","border-style":"solid"});
      document.getElementById("email_validation").innerHTML = "<font style=color:red>Enter valid email</font>";
      }
      else
      {
         $("#email").css({"border-color": "black","border-style":"solid"});
      document.getElementById("email_validation").innerHTML = "<font style=color:white></font>";
      }
   }
});

function isNumber(evt)
{
   evt = (evt) ? evt : window.event;
   var charCode = (evt.which) ? evt.which : evt.keyCode;
   if (charCode > 31 && (charCode < 48 || charCode > 57)) 
   {
      return false;
   }
   return true;
}

function check_mobile()
{

   var mobile = $("#phone").val();

   if(mobile !== '')
   {

      if(mobile.length!=10)
      {
      document.getElementById('Mobile_validate').innerHTML = "<font color=red>Please Enter 10 digit Mobile Number!</font>";
      $("#phone").css("border","1px solid red");
      error_mobile = true;
      }
       else
       {
       document.getElementById('Mobile_validate').innerHTML = "<font color=green></font>";
       $("#phone").css("border","1px solid lightblue");
       error_mobile = false;
       }
    }
    else
    {
       document.getElementById('Mobile_validate').innerHTML = "<font color=red>Please Enter Mobile Number!</font>";
       $("#phone").css("border","1px solid red");
       error_mobile = true;
    }
}

$("#phone").focusout(function()
   {
    check_mobile();
   });


</script>
  @endsection


