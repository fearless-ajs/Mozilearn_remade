<div>
    <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
        <div class="modal-content" id="registermodal">
            <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>

            @if(Auth::user())
                <div class="modal-body">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h6 style="text-align: center;">You are logged in.</h6>
                        <hr>
                        <p class="mt-2" style="text-align: center;">{{Auth::user()->name}}</p>
                        <p class="mt-2" style="text-align: center;">{{Auth::user()->email}}</p>

                    </div>

                </div>
            @else
                <div class="modal-body">
                    <h4 class="modal-header-title">Log In</h4>

                    <p class="mt-2" style="text-align: center;">Enter your mozisha credentials</p>
                    <div class="login-form">
                        <form wire:submit.prevent="authenticateUser">

                            <div class="form-group">
                                <label>Mozisha Email</label>
                                <input type="text" wire:model.lazy="email" class="form-control {{$errors->has('email')? 'is-invalid' : '' }}" placeholder="Mozisha account email">
                                @error('email') <span style="color: crimson; font-size: 10px;">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" wire:model.lazy="password" class="form-control {{$errors->has('password')? 'is-invalid' : '' }}" placeholder="*******">
                                @error('password') <span style="color: crimson; font-size: 10px;">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <button wire:loading.remove wire:target="authenticateUser" type="submit" class="btn btn-md full-width pop-login">Login</button>
                                <button wire:loading  wire:target="authenticateUser" type="submit" class="btn btn-md full-width pop-login"><i class="fa fa-spinner fa-spin"></i> &nbsp; Processing...</button>
                            </div>

                        </form>
                    </div>

                    <div class="social-login mb-3">
                        <ul>
                            <li>
                                <input id="reg" class="checkbox-custom" name="reg" type="checkbox">
                                <label for="reg" class="checkbox-custom-label">Save Password</label>
                            </li>
                            <li><a href="https://mozisha.com/reset" target="_blank" class="theme-cl">Forget Password?</a></li>
                        </ul>
                    </div>

                    <div class="text-center">
                        <p class="mt-2">Haven't Any Mozisha Account? <a href="https://mozisha.com/account" target="_blank" class="link">Click here</a></p>
                    </div>
                </div>
            @endif


        </div>
    </div>
</div>
