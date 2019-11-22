@extends('backend.layouts.app')

@section('page-title')
Profile
@endsection

@section('content')
<div class="main-content container-fluid">
        <h2>Account Info</h2>


    <div class="row">
        <!-- User Info -->
        <div class="col-lg-5">
            <div class="user-display ">
                <div class="user-display-bg bg-blue"><img height="150px" src='{{ asset("images/image_1.jpg") }}'></div>
                <div class="user-display-bottom">
                <div class="user-display-avatar"><img src="{{ Storage::url(auth()->user()->image) }}" alt="Avatar"></div>
                <div class="user-display-info">
                    <div class="name">{{ auth()->user()->name }}</div>
                    <div class="nick"><span class="mdi mdi-account"></span> Asd</div>
                </div>
                <div class="row user-display-details invisible">
                    <div class="col-4">
                    <div class="title">Issues</div>
                    <div class="counter">26</div>
                    </div>
                    <div class="col-4">
                    <div class="title">Commits</div>
                    <div class="counter">26</div>
                    </div>
                    <div class="col-4">
                    <div class="title">Followers</div>
                    <div class="counter">26</div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- User About -->

        <div class="col-lg-7">
            <div class="user-info-list card">
                <div class="card-header card-header-divider">About Me<span class="card-subtitle">{{ auth()->user()->about }}</span></div>
                    <div class="card-body">
                        <table class="no-border no-strip skills">
                        <tbody class="no-border-x no-border-y">
                            <tr>
                                <td class="icon"><span class="mdi mdi-smartphone-android"></span></td>
                                <td class="item">Mobile<span class="icon s7-phone"></span></td>
                                <td>{{ auth()->user()->phone }}</td>
                            </tr>
                            <tr>
                                <td class="icon"><span class="mdi mdi-globe-alt"></span></td>
                                <td class="item">Location<span class="icon s7-map-marker"></span></td>
                                <td>{{ auth()->user()->address }}</td>
                            </tr>
                           
                        </tbody>
                        </table>
                </div>
            </div>
        </div>

        <!-- User Edit -->

        <div class="col-md-12 fuelux">
                <h1>Account settings</h1>
                <div class="block-wizard">
                  <div class="wizard wizard-ux" id="wizard1">
                    <div class="steps-container">
                      <ul class="steps" style="margin-left: 0">
                        <li class="active" data-step="1">General options<span class="chevron"></span></li>
                        <li data-step="2">Advanced options<span class="chevron"></span></li>
                        <li data-step="3">Other options<span class="chevron"></span></li>
                      </ul>
                    </div>
                    <div class="actions">
                      <button class="btn btn-xs btn-prev btn-secondary" type="button" disabled="disabled"><i class="icon mdi mdi-chevron-left"></i>  Prev</button>
                      <button class="btn btn-xs btn-next btn-secondary" type="button" data-last="Finish">Next<i class="icon mdi mdi-chevron-right"></i></button>
                    </div>
                    <div class="step-content">
                      <div class="step-pane active" data-step="1">
                        <div class="container p-0">

                                @if(Session::has('success'))
                                <div class="alert alert-success p-3 mt-1">{{ session('success') }}</div>
                                @endif

                          <form class="form-horizontal group-border-dashed" action="{{ route('users.update', ['id' => auth()->user()->id]) }}" data-parsley-namespace="data-parsley-" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Your Name</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                <input class="form-control @error('name') is-invalid @enderror" value="{{ auth()->user()->name }}" name='name' type="text" placeholder="Your name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Your E-Mail</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{ auth()->user()->email }}" name='email' placeholder="Your E-Mail">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Your phone</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input class="form-control @error('phone') is-invalid @enderror" value="{{ auth()->user()->phone }}" name='phone' type="text" placeholder="Your Phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Your Address</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <input class="form-control @error('address') is-invalid @enderror" value="{{ auth()->user()->address }}" name='address' type="text" placeholder="Your Address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
    

                            <div class="form-group row">
                                <label class="col-12 col-sm-3 col-form-label text-sm-right" for="inputTextarea3">About</label>
                                <div class="col-12 col-sm-8 col-lg-6">
                                    <textarea class="form-control @error('about') is-invalid @enderror" name='about' id="inputTextarea3">{{ auth()->user()->about }}</textarea>
                                    @error('about')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-12 offset-3 col-sm-6 text-right">
                                    <button class="btn btn-space btn-success btn-lg btn-block" type="submit">Save Changes</button>
                                </div>
                            </div>


                          </form>

                          <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary btn-space wizard-next" data-wizard="#wizard1">Next Step</button>
                            </div>
                           </div>

                        </div>
                      </div>
                      <div class="step-pane" data-step="2">

                        <form class="form-horizontal  group-border-dashed" action="{{ route('users.update', ['id' => auth()->user()->id]) }}" data-parsley-namespace="data-parsley-" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group row">
                                    <div class="col-sm-7">
                                        <h3 class="wizard-title">Change The Password</h3>
                                    </div>
                                </div>
                                <!-- Changing The Password -->


                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Password</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                    <input class="form-control @error('pass') is-invalid @enderror" name='password' type="password" placeholder="Enter Your password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-12 col-sm-3 col-form-label text-left text-sm-right">Verify Password</label>
                                    <div class="col-12 col-sm-8 col-lg-6">
                                    <input class="form-control @error('password_conformation') is-invalid @enderror" name='password_conformation' type="password" placeholder="Enter Your Password Again">
                                    @error('password_conformation')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
                                </div>
    
                    
                                <div class="form-group row">
                                        <div class="col-12 offset-3 col-sm-6 text-right">
                                            <button class="btn btn-space btn-success btn-lg btn-block" type="submit">Save Password</button>
                                        </div>
                                </div>
                        </form>

                        <div class="form-group row">
                                <div class="col-sm-12">
                                <button class="btn btn-secondary btn-space wizard-previous" data-wizard="#wizard1">Previous</button>
                                <button class="btn btn-primary btn-space wizard-next" data-wizard="#wizard1">Next Step</button>
                                </div>
                        </div>

                      </div>

                      <div class="step-pane" data-step="3">
                        <form class="form-horizontal group-border-dashed" action="{{ route('users.update', ['id' => auth()->user()->id]) }}" data-parsley-namespace="data-parsley-" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') 

                            <div class="form-group row">
                                <div class="col-sm-7">
                                <h3 class="wizard-title">Change The Image</h3>
                                </div>
                            </div>

   
                          <!-- Changing The Image -->

                          <div class="form-group row">
                                  <div class="col-12 col-sm-6">
                                    <input class="inputfile form-control @error('about') is-invalid @enderror" accept='image/*' onchange='openFile(event)' id="image" type="file" name="image" data-multiple-caption="{count} files selected" multiple="">
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <label class="btn-light" style="width: 80px;height: 80px;border-radius: 50px;" for="image">
                                        <img id="img_btn" src="{{ Storage::url(auth()->user()->image) }}" style="margin-left: -10px;width: 80px;height: 80px;border-radius: 50px; " alt="">
                                        <i class="mdi mdi-upload" style="color: white;position: absolute;top: 30px;left: 50px;font-size:30px;"></i>
                                  </div>
                          </div>

                          <div class="form-group row">
                                <div class="col-12 offset-3 col-sm-6 text-right">
                                    <button class="btn btn-space btn-success btn-lg btn-block" type="submit">Save The Image</button>
                                </div>
                          </div>
                        </form>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-secondary btn-space wizard-previous" data-wizard="#wizard1">Previous</button>
                            </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            
    </div>
</div>
@endsection

@push('css')

@endpush

@push('js')
<script src="{{ asset('lib/fuelux/js/wizard.js') }}"></script>
<script>
    $(document).ready(function() {
        App.wizard();

        // File Reader For Profile Image



    });

    var openFile = function(event) {
            var input = event.target;

            var reader = new FileReader();
            reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('img_btn');
            output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
    };

</script>
@endpush