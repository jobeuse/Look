@extends('layout.web')
@section('content')   
  <x-nav/>
	<!-- Main Start -->
	<div class="main-section">
    	<div class="page-section" style="background:url(assets/extra-images/user-bg-img.jpg) no-repeat;background-size:cover;min-height:175px;margin-top:-30px;margin-bottom:-129px;"></div>
		<div class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="cs-user-account-holder">
							<div class="row"> 
							<x-middlenav/>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-user-section-title">
                                    	<div class="d-flex flex-row"> 
                                    			<div class="flex-grow-1"> 
                                    			</div>
                                    			<div>
                                    				<button type="button" class="btn btn-primary"
                                    				data-toggle="modal" data-target="#newemployee" aria-hidden="true"><i class="icon-plus"></i> New Employee</button>
                                    				<x-newemployee/>
                                    			</div> 
                                    	</div> 
                                    </div>
                                </div> 
						          <ul class="cs-featurelisted-car">
						          	@if($employees)  
						          	  <form action="{{ route('employees.update',$employees) }}" method="post" class="row" enctype="multipart/form-data">
					                        @csrf
					                        <div class="col-lg-12">
					                            <label>Names</label>
					                            <input type="text" class="form-control" id="cs-username" placeholder="Type desired username" value="{{$employees->name}}" name="name" required>
					                        </div>
					                        <div class="col-lg-12">
					                            <label>Email</label>
					                            <input type="text" class="form-control" id="cs-email" placeholder="Type desired email" value="{{$employees->email}}" name="email" required>
					                        </div>
					                        <div class="col-lg-12">
					                            <label>Phone</label>
					                            <input type="text" class="form-control" id="cs-phone" placeholder="Type desired phone" value="{{$employees->phone}}" name="phone" required>


					                        </div>
					                        <div class="col-lg-12">
					                            <label>Specialist</label>
					                            <select class="form-control" id="cs-special" name="special" required>
					                                <option>choose service</option>
					                            </select>
					                        </div>
					                        <div class="col-lg-12">
					                            <label>About</label>
					                             <textarea  class="form-control" id="cs-about" name="about" required >{{$employees->about}}</textarea>
					                        </div>
					                        <div class="col-lg-12">
					                            <label>image</label>
					                             <input type="file" value="{{$employees->image}}" class="form-control" id="cs-file"   name="image" required>
					                        </div>
					                         <div class="col-lg-12 mt-3">
					                            <button class="btn btn-block btn-primary" type="submit">Save cahnges</button>
					                        </div> 
					                    </form>
						             @endif 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="page-section" style="background:#19171a;">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                       <div class="cs-ad" style="text-align:center; padding:55px 0 32px;">
                          <div class="cs-media">
                                <figure>
                                    <img src="assets/extra-images/cs-ad-img.jpg" alt="" />
                                </figure>
                        	</div>
                    	</div>
                    </div>
                </div>
            </div>
  		</div>
		
	</div>
	<!-- Main End --> 
@endsection
	 