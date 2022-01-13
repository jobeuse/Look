@extends('layout.web')
@section('content')  
<div class="wrapper"> 
   <x-nav/>
<!-- Main Start -->
    <div class="main-section">
        <div class="page-section" style="background:url(assets/extra-images/user-bg-img.jpg) no-repeat;background-size:cover;min-height:175px;margin-top:-30px;margin-bottom:-129px;">   
        </div>
        <div class="page-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cs-user-account-holder">
                            
                            <div class="row">
                               <x-middlenav/>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-user-section-title">
                                        <h4>Genral Settings</h4>
                                    </div>
                                </div> 
                                <form  action="#">
                                <div class="cs-field-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <input type="text" placeholder="" >
                                        </div>
                                    </div>
                                </div>  
                                <div class="cs-field-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Email Address</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <input type="text" placeholder="" >
                                        </div>
                                    </div>
                                </div> 
                                <div class="cs-field-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Country</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <select data-placeholder="Select Make" tabindex="1" class="chosen-select">
                                            <option>Rwanda</option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="cs-field-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>City</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <select data-placeholder="Select Make" tabindex="1" class="chosen-select">
                                            <option >Kigali </option> 
                                        </select>
                                    </div>
                                </div>  
                                <div class="cs-field-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Phone number</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <input type="text" placeholder="" >
                                        </div>
                                    </div>
                                </div> 
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-seprator"></div>
                                </div>
                                <div class="cs-field-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <h6>Update password</h6>
                                    </div>
                                </div>
                                <div class="cs-field-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Password</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <input type="text" placeholder="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="cs-field-holder">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label>Confirm password</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="cs-field">
                                            <input type="text" placeholder="" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cs-seprator"></div>
                                </div> 
                                <div class="cs-field-holder">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
                                        <div class="cs-field">
                                        <div class="cs-btn-submit">
                                            <button type="submit" class="btn">Save </button> 
                                        </div></div>
                                    </div>
                                </div>
                                </form>
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
</div>
@endsection