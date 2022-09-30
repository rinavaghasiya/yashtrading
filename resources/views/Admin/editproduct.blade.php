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
                <div  style="float: left;">
                       <button type="submit" class="btn btn-primary"><a href="{{ url('showproduct') }}" style="color: white;">Show Products</a></button> 
                    </div>
                      <br><br>
                    <div class="login-content">
                        <div class="login-logo">
                            <h4>Edit Products</h4>
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
            <form class="form-horizontal" action="{{ url('editmyitem') }}" method="post" enctype='multipart/form-data' >
            {{ csrf_field() }}
        <div class="form-group">
        <input type="hidden" class="form-control" name="id" id="id" value="{{ $data->id }}">
        <div class="form-group row">
            <label class="col-form-label">Product Image</label>
            <div class="col-sm-8">
            <img id="blah" src="{{ url('public/item_img') }}/{{ $data->item_img }}" alt="" height="100" width="100" />
                        <br>
            <input class="file" data-preview-file-type="text" type = 'file' id="imgInp" name="image[]" value ="{{$data->item_img}}" />

            <input type="hidden" name="oldimg" id="oldimg" value="{{ $data->item_img }}">
              
                <div id="item_img_preview"></div>
                </div>
                </div>
                <br>
        
                <div class="form-group row">
                    <label class="col-form-label">Price</label>
                    <input type="text" name="price" id="price" class="form-control" onkeypress="return isNumber(event)" 
                    aria-label="Amount " value="{{$data->price}}">
                      <!-- <p id="Price_validate"></p> -->
                </div>

                <br>
                <div class="form-group row">
                <label for="" class="col-form-label">Product Description</label>
                <textarea class="form-control" id="description" name="description" >{{$data->description}}</textarea>
                </div>
                <br>
                <div class="form-group row">
                <div class="offset-sm-0 col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button> <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
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

function readURL(input, imgControlName) 
        {
          if (input.files && input.files[0]) 
          {
            var reader = new FileReader();
            reader.onload = function(e) 
            {
             
              $(imgControlName).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
          }
        }

    $("#imgInp").change(function() {
      var imgControlName = "#blah";
      readURL(this, imgControlName);
    
    });

function checkNum(event)
{

   if ((event.keyCode > 64 && event.keyCode < 91) || (event.keyCode > 96 && event.keyCode < 123) || event.keyCode == 8)
      return true;
   else
   {
       return false;
   }

}

   
// function check_price()
// {

//    var price = $("#price").val();

//    if(price !== '')
//    {

//       if(price.length<=0)
//       {
//       document.getElementById('Price_validate').innerHTML = "<font color=red>Price Must be Grater than 0 </font>";
//       $("#price").css("border","1px solid red");
//       error_mobile = true;
//       }
//        else
//        {
//        document.getElementById('Price_validate').innerHTML = "<font color=green></font>";
//        $("#price").css("border","1px solid lightblue");
//        error_mobile = false;
//        }
//     }
//     else
//     {
//        document.getElementById('Price_validate').innerHTML = "<font color=red>Please Enter Price!</font>";
//        $("#price").css("border","1px solid red");
//        error_mobile = true;
//     }
// }

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
$("#price").focusout(function()
   {
    check_price();
   });


</script>
  @endsection


