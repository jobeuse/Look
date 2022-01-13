<!-- Modal -->
<div class="modal fade" id="newemployee" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                   <h4>Create Account</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body"> 
                <div class="cs-login-form">
                    <form action="{{ route('employees.store') }}" method="post" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <label>Names</label>
                            <input type="text" class="form-control" id="cs-username" placeholder="Type desired username" name="name" required>
                        </div>
                        <div class="col-lg-12">
                            <label>Email</label>
                            <input type="text" class="form-control" id="cs-email" placeholder="Type desired email" name="email" required>
                        </div>
                        <div class="col-lg-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" id="cs-phone" placeholder="Type desired phone" name="phone" required>


                        </div>
                        <div class="col-lg-12">
                            <label>Specialist</label>
                            <select class="form-control" id="cs-special" name="special" required>
                                <option>choose service</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label>About</label>
                             <textarea  class="form-control" id="cs-about" name="about" required></textarea>
                        </div>
                        <div class="col-lg-12">
                            <label>image</label>
                             <input type="file" class="form-control" id="cs-file"   name="image" required>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="cs-seprator"></div>
                        </div>
                         <div class="col-lg-12 mt-5">
                            <div class="cs-field-holder">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-md-12">
                                    <div class="cs-field">
                                        <div class="cs-btn-submit">
                                            <input type="submit" value="SUBMIT & CONTINUE" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div> 
        </div>
    </div>
</div>
