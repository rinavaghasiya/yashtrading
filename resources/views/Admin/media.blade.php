@extends('Admin.admincontent')
@section('title')
Social Media
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
                            <h4>Edit SocialMedia Links</h4>
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
                           <form class="form-horizontal" action="{{ url('editsocialmedia') }}" method="post">
                          {{ csrf_field() }}

                          <input type="hidden" class="form-control" name="id" id="id" value="{{ $a->id }}">

                      <div class="form-group">
                      <label>Twitter</label>
                      <input type="text" class="form-control" placeholder="Twitter" name="twitter" id="twitter" value="{{ $a->twitter }}">
                      </div>

                      <div class="form-group">
                      <label>Facebook</label>
                      <input type="text" class="form-control" placeholder="Facebook" name="facebook" id="facebook" value="{{ $a->facebook }}">
                      </div>

                      <div class="form-group">
                      <label>Instagram</label>
                      <input type="text" class="form-control" placeholder="Instagram" name="instagram" id="instagram" value="{{ $a->instagram }}">
                      </div>

                      <div class="form-group">
                      <label>LinkedIn</label>
                      <input type="text" class="form-control" placeholder="LinkedIn" name="linkedin" id="linkedin" value="{{ $a->linkedin }}">
                      </div>

                    
                <div class="form-group row">
                        <div class="offset-sm-0 col-sm-10">
                         <button type="submit" class="btn btn-success">Save Link</button> <button type="reset" class="btn btn-danger">Cancel</button>
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



  @endsection


