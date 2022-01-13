 <div class="modal fade" id="user-sign-in" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h4>User Sign in</h4>
                <div class="cs-login-form">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="input-holder">
                            <label for="cs-username-1"> <strong>USERNAME</strong> <i class="icon-user-plus2"></i>
                                <input type="text" class="" id="cs-username-1" placeholder="Type desired username" name="email">
                              
                            </label>  
                            @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="input-holder">
                            <label for="cs-login-password-1"> <strong>Password</strong> <i class="icon-unlock40"></i>
                                <input type="password" name="password" id="cs-login-password-1" placeholder="******">
                            </label>
                            @error('password')
                                <strong class="text-danger">{{ $message }}</strong>
                            @enderror
                        </div> 
                        <div class="input-holder"> <a class="btn-forgot-pass" data-dismiss="modal" data-target="#user-forgot-pass" data-toggle="modal" href="javascript:;" aria-hidden="true"><i class=" icon-question-circle"></i> Forgot password?</a> </div>
                        <div class="input-holder">
                            <input class="cs-color csborder-color" type="submit" value="SIGN IN">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="cs-separator"><span>or</span></div>
                <div class="cs-user-social"> <em>Signin with your Social Networks</em>
                    <ul>
                        <li><a href="#" data-original-title="facebook"><i class="icon-facebook-f"></i>facebook</a></li>
                        <li><a href="#" data-original-title="twitter"><i class="icon-twitter4"></i>twitter</a></li>
                        <li><a href="#" data-original-title="google-plus"><i class="icon-google4"></i>google</a></li>
                    </ul>
                </div>
                <div class="cs-user-signup"> <i class="icon-user-plus2"></i> <strong>Not a Member yet? </strong> <a class="cs-color" data-dismiss="modal" data-target="#user-sign-up" data-toggle="modal" href="javascript:;" aria-hidden="true">Signup Now</a> </div>
            </div>
        </div>
    </div>
</div>