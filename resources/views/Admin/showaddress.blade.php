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
	  <p  style="font-size:24px"><strong>Address</strong></p>
	<br><br>
	
        <div class="container-fluid">
			<div class="row">
			  <div class="col-md-12">
			 
				<div class="table-responsive m-b-20">
                    <table class="table table-borderless table-data3" id="myTable">
				        <thead>
				            <tr>
				            	<th><strong>Id</strong></th>
				     		 	<th><strong>Address</strong></th>
                                  <th><strong>Phone</strong></th>
                                  <th><strong>Email</strong></th>
				                <th><strong>Edit</strong></th>
				                <!-- <th><strong>Delete</strong></th> -->
				            </tr>
				        </thead>
				        <tbody>
				        	@foreach ($data as $user)
				              <tr class="tr-shadow">
				              <td>{{$user->id}}</td>
				                <td>{{$user->address}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
				                <td>
				                	<a href ='adressedit/{{ $user->id }}'><button type="submit" class="btn btn-primary">Edit</button></a> 
				               	</td>
				               	
			                 </tr>
		                 @endforeach
		                 @if(count($data)<=0)
                   <td colspan="10" style="color: red;"><center><b style="font-size: 20px;">Result Not Found</b></center></td>
                    @endif
				        </tbody>
				          
				    </table>

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