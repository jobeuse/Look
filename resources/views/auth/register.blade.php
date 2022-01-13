<!-- Modal -->
<div class="modal fade" id="user-sign-up" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>Create Account</h4>
                <div class="cs-login-form">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="input-holder">
                            <label for="cs-username"> <strong>USERNAME</strong> <i class="icon-user-plus2"></i>
                                <input type="text" class="" id="cs-username" placeholder="Type desired username" name="name">
                            </label>
                             @error('name')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror 
                        </div>
                        <div class="input-holder">
                            <label for="cs-email"> <strong>Email</strong> <i class="icon-envelope"></i>
                                <input type="email" class="" id="cs-email" placeholder="Type desired email" name="email">
                            </label>
                             @error('email')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror 
                        </div>
                        <div class="input-holder">
                            <label for="cs-login-password"> <strong>Password</strong> <i class="icon-unlock40"></i>
                                <input type="password" name="password" id="cs-login-password" placeholder="******">
                            </label>
                             @error('password')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror 
                        </div>
                        <div class="input-holder">
                            <label for="cs-confirm-password"> <strong>confirm password</strong> <i class="icon-unlock40"></i>
                                <input type="password" name="password_confirmation" class="form-control"id="cs-confirm-password" placeholder="******">
                            </label> 
                            @error('password_confirmation')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror 
                        </div>
                        <div class="input-holder">
                            <input class="cs-color csborder-color" type="submit" value="Create Account">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer"> <a data-dismiss="modal" data-target="#user-sign-in" data-toggle="modal" href="javascript:;" aria-hidden="true">Already have account</a>
                <div class="cs-separator"><span>or</span></div>
                <div class="cs-user-social"> <em>Signin with your Social Networks</em>
                    <ul>
                        <li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
                        <li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
