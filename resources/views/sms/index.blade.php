@extends('layouts.sms')

@section('content')
<ul class="breadcrumb">
    <li><a href="{{ url('sms/home') }}">Home</a></li>
    <li class="active">SMS</li>
</ul>
<div class="row">
    @if (Auth::guest())
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Send SMS</h3>
                </div>
                <div class="panel-body">
                    <div class="row">   
                        <div class="col-md-12">
                            <div class="flash-message">
                                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                    @if(Session::has('alert-' . $msg))

                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
                                    
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12">
                            <form class="form-horizontal" action="{{ url('sms') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <p class="help-block">Remaining Messages: {{ $remaining->sms }}</p>
                                <hr>
                                <fieldset>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="senderId">Select Sender id from list:</label>
                                        <div class="col-md-4">
                                            <select class="form-control" id="senderId" name="senderId" required>
                                                <option value="Nilsham" selected>Nilsham ✅</option>
                                                <option value="LocalEscape">LocalEscape ✅</option>
                                                <option value="LeBoutique">LeBoutique ✅</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="phoneNumber">Phone Number</label>
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <span class="input-group-addon">+960</span>
                                                <input id="phoneNumber" min="7" name="phoneNumber" type="tel" required>
                                            </div>
                                            <p class="help-block">Enter the number here, Must be a valid dhiraagu or ooredoo number.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="message">Message</label>
                                        <div class="col-md-6">
                                            <textarea style="font-size: 15px" class="form-control" rows="4" id="message" name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-11" style="text-align: center;">
                                            <ul id="sms-counter" style="list-style: none;">
                                                <li style="display: inline-block;"><b>Length:</b> <span class="length"></span></li>
                                                <li style="display: inline-block;"><b>Messages:</b> <span class="messages"></span></li>
                                                <li style="display: inline-block;"><b>Per Message:</b> <span class="per_message"></span></li>
                                                <li style="display: inline-block;"><b>Remaining:</b> <span class="remaining"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-8">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="reset" class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>    
                </div>        
            </div> 
        </div>
    @endif
</div>

@endsection

@section('js')
    <script src="/js/sms_counter.min.js"></script>
    <script>
        $('#message').countSms('#sms-counter')
    </script>
@endsection