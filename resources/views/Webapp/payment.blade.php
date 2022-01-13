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
										<h4>Payments</h4>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="payment-list">
										<ul>
											<li>
												<div class="payment-label">
													<ul>
														<li>Packege</li>
														<li>Trans ID</li>
														<li>Date</li>
														<li>Payment</li>
														<li>Amount</li>
													</ul>
												</div>
											</li>
											<li>
												<div class="payment-content">
													<ul>
														@forelse($payments as $payment)
															<li><b>human trafficking</b><em style="color:#d94551;">Decline</em></li>
															<li>AB1352CC</li>
															<li>23.12.2014</li>
															<li><img src="assets/extra-images/payment-option-1.jpg" alt="" /></li>
															<li>$22.89</li>
														@endforelse
													</ul>
												</div>
											</li> 
										</ul>
									</div>
								</div>
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
	 