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
                                    				<div class="cs-field-holder">
						                                <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
						                                    <div class="cs-field">
						                                        <div class="cs-btn-submit">
						                                            <i class="icon-plus"></i><input type="submit" value=" New Employee" 
                                    				data-toggle="modal" data-target="#newemployee" aria-hidden="true">
						                                        </div>
						                                    </div>
						                                </div>
						                            </div>
                                    				<x-newemployee/>
                                    			</div> 
                                    	</div> 
                                    </div>
                                </div> 
						          <ul class="cs-featurelisted-car">
						          	@if($employees) 
						          		@forelse($employees as $employee) 
						              <li class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						               <div class="cs-media">
						                 <figure><a href="#"><img src="{{ asset('images/'.$employee->image) }}" alt="" class="img-thumbnail" /></a></figure>
						               </div>
						               <div class="cs-text"> 
						                 <h6><a href="#">{{$employee->name}}</a></h6>
						                 <div class="post-options">
						                   <span>created at <em>{{ $employee->created_at->format('Y-m-D') }}</em></span>
						                   <span><a href="#"> {{ $employee->email }}</a></span></a></span>
						                 </div>
						                 <div class="cs-post-types">
						                   <div class="cs-post-list">
						                       <div class="cs-edit-post">
						                         <span>Action<i class=" icon-angle-down"></i></span>
						                       </div>
						                       <div class="cs-list d-flex flex-row">
						                         <a href="{{ route('employees.edit',$employee) }}" class="btn bg-light" data-toggle="tooltip" data-placement="top" title="Edit {{ $employee->name }}"><i class=" icon-clone"></i></a> 
						                         <form method="POST" action="{{ route('employees.destroy',$employee->id)}}">
						                         	@csrf
						                         	<button type="submit" class="btn"  data-toggle="tooltip" data-placement="top" title="Delete {{ $employee->name }}"><i class="icon-trash-o"></i></button></form>
						                       </div>
						                   </div>  
						                 </div>
						               </div>
						              </li>
						              @empty
						              	no employee added
						              	@endforelse
						             @endif
						          </ul>
			
						          <div class="cs-load-more"><a href="#" class="loadmore-btn">Load more</a></div>
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
	 