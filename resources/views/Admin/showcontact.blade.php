@extends('Admin.admincontent')
@section('title')
Show Address
@endsection
@section('body')


<html>
<!-- <style type="text/css">
 a {
    display: inline-block;
    padding-left:15px;
}
</style> -->
 
<body class="animsition">
<div class="page-wrapper">
<div class="page-container">
<div class="main-content">
<div class="section__content section__content--p30">
	

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
      {{ csrf_field() }}
	  <p  style="font-size:24px"><strong>ContactUs Detail</strong></p>
	<br><br>
	
        <div class="container-fluid">
			<div class="row">
			  <div class="col-md-12">
			 
				<div class="table-responsive m-b-20">
                    <table class="table table-borderless table-data3" id="myTable">
				        <thead>
				            <tr>
				            	<th><strong>Id</strong></th>
                                <th><strong>Name</strong></th>
                                <th><strong>Email</strong></th>
                                <th><strong>Subject</strong></th>
				     		 	<th><strong>Message</strong></th>
                        
				                <th><strong>Delete</strong></th>
				                <!-- <th><strong>Delete</strong></th> -->
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach ($data as $user)
				              <tr class="tr-shadow">
				              <td>{{$user->id}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->subject}}</td>
				                <td>{{$user->message}}</td>
                               
                              
				                <td>
				                	<a href ='deletecontact/{{ $user->id }}'><button type="submit" class="btn btn-primary">Delete</button></a> 
				               	</td>
				               	
			                 </tr>
		                 @endforeach
		                 @if(count($data)<=0)
                   <td colspan="10" style="color: red;"><center><b style="font-size: 20px;">Result Not Found</b></center></td>
                    @endif
				        </tbody>
				          
				    </table>

				</div>
                <div class="pagination-bar text-center" style="float: right;">
				<nav aria-label="Page navigation " class="d-inline-b">
					<ul class="pagination" role="navigation">
						<li class="page-item active">{{$data->appends(\Request::except('_token'))->render() }}</li>
					</ul>
				</nav>
				</div>

			</div>
			</div>
		</div>
	
</div>

</div>
</div>
</div>
</body>
</html>


@endsection