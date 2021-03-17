@include('admin/inc/header')

<!-- Left Sidebar -->
@include('admin/inc/left-sidebar')

<!-- Right Sidebar -->
@include('admin/inc/right-sidebar')
    <!-- Main Content -->
    <section class="content">

        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 quick-links">
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i class="zmdi zmdi-home"></i></a>
                        </li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">{{lang('Setting')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="card">
                        <div class="header">
                        <h2><strong>{{lang('System ')}}</strong>{{lang('Settings')}}</h2>
                        </div>
                        <div class="body">
                            <form action="{{route('SettingSubmit')}}" method="POST" class="row"
                                  enctype="multipart/form-data" id="form">
                                {{csrf_field()}}
                                <div class="card">
                                    <div class="header">
                                    <h2>{{lang('Basic Information')}}</h2>
                                    </div>
                                    <div class="body">

                                        <div class="row clearfix">
                                            <div class="form-group col-md-4">
                                                <label for="" class="control-label"><small>{{lang('Name')}}</small></label>
                                                <input type="text" class="form-control" name="name"
                                                       value="{{$setting->app_name}}" placeholder="Name" required>
                                            </div>
                                            <div class="form-group col-md-8">
                                                <label for="" class="control-label"><small>{{lang('Description')}}</small></label>
                                                <textarea name="description" class="form-control">{{$setting->app_description}}</textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="" class="control-label"><small>{{lang('Tagline')}}</small></label>
                                                <input type="text" class="form-control" name="tagline"
                                                       value="{{$setting->tagline}}" placeholder="Tagline" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="" class="control-label"><small>{{lang('Meta Title')}}</small></label>
                                                <input type="text" class="form-control" name="meta_title"
                                                       value="{{$setting->meta_title}}" placeholder="Meta Title" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="" class="control-label"><small>{{lang('Meta Description')}}</small></label>
                                                <textarea name="meta_description" class="form-control">{{$setting->meta_description}}</textarea>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Address')}}</small></label>
                                                <input type="text" class="form-control" name="address"
                                                       value="{{$setting->address}}" placeholder="Address" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Email')}}</small></label>
                                                <input type="text" class="form-control" name="email"
                                                       value="{{$setting->email}}" placeholder="Email" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Phone')}}</small></label>
                                                <input type="text" class="form-control" name="phone"
                                                       value="{{$setting->phone}}" placeholder="Phone" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card">

                                    <div class="header">
                                    <h2>{{lang('Social Information')}}</h2>
                                    </div>
                                    <div class="body">

                                        <div class="row clearfix">
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Facebook URL')}}</small></label>
                                                <input type="text" class="form-control" placeholder="Facebook URL"
                                                       name="facebook" value="{{$setting->facebook}}" required>
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Twitter URL')}}</small></label>
                                                <input type="text" class="form-control" placeholder="Twitter URL"
                                                       name="twitter" value="{{$setting->twitter}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Linkedin URL')}}</small></label>
                                                <input type="text" class="form-control" placeholder="Linkedin URL"
                                                       name="linkedin" value="{{$setting->linkedin}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Youtube URL')}}</small></label>
                                                <input type="text" class="form-control" placeholder="Youtube URL"
                                                       name="youtube" value="{{$setting->youtube}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Instagram URL')}}</small></label>
                                                <input type="text" class="form-control" placeholder="Instagram URL"
                                                       name="instagram" value="{{$setting->instagram}}">
                                            </div>
                                            <div class="form-group col-md-4">
                                            <label for="" class="control-label"><small>{{lang('Pinterest URL')}}</small></label>
                                                <input type="text" class="form-control" placeholder="Pinterest URL"
                                                       name="pinterest" value="{{$setting->pinterest}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>

                                <div class="form-group offset-5">
                                <button class="btn btn-primary btn-round" type="submit">{{lang('Save')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('admin/inc/footer')
