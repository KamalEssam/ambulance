@include('admin/inc/header')

<!-- Left Sidebar -->
@include('admin/inc/left-sidebar')

<!-- Right Sidebar -->
@include('admin/inc/right-sidebar')

<style>
    .dataTables_wrapper .dt-buttons{
        display: none;
    }
</style>

<!-- Main Content -->
<section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="{{url('')}}"><i class="zmdi zmdi-home"></i> {{\App\Setting::setting()->app_name}}</a></li>
                    <li class="breadcrumb-item active">Blog List</li>
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
            <div class="col-lg-12">
                <div class="card action_bar">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-5 col-md-5 col-6">

                            </div>
                            <div class="col-lg-7 col-md-7 col-3 text-right">
                                <a  data-toggle="modal" data-target="#largeModal" class="btn btn-neutral hidden-sm-down">
                                    <i class="zmdi zmdi-plus-circle"></i> Add faq
                                </a>


                                <button type="button" class="btn btn-neutral hidden-sm-down" onclick="$('.buttons-csv')[0].click();">
                                    <i class="zmdi zmdi-archive"></i>
                                </button>
                                <button type="button" class="btn btn-neutral hidden-sm-down" onclick="$('.buttons-print')[0].click();">
                                    <i class="zmdi zmdi-print"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>faq </strong> </h2>

                    </div>
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover dataTable js-plaintable">
                            <thead>
                            <tr>
                                <th># </th>
                                <th>Title </th>
                                <th>Type </th>
                                <th>Content </th>
                                <th>Status </th>
                                <th>Timestamp </th>
                                <th>Action </th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th># </th>
                                <th>Title </th>
                                <th>Type </th>
                                <th>Content </th>
                                <th>Status </th>
                                <th>Timestamp </th>
                                <th>Action </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($records??array() as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->content}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <a data-toggle="modal" data-target="#largeShowModal{{$item->id}}" class="btn btn-primary btn-sm" title="Show"><i class="zmdi zmdi-eye"> </i></a>
                                        <a data-toggle="modal" data-target="#largeEditModal{{$item->id}}" class="btn btn-primary btn-sm" title="Edit"><i class="zmdi zmdi-edit"> </i></a>
                                        <a class="btn btn-danger btn-icon btn-icon-mini" title="Delete ">
                                            {!! Form::open([
                                               'method'=>'DELETE',
                                               'url' => ['/admin/faq', $item->id],
                                               'style' => 'display:inline'
                                            ]) !!}
                                            {!! Form::button('<i class="zmdi zmdi-delete"></i> ', array(
                                                 'type' => 'submit',
                                                 'class' => 'btn btn-danger btn-xs btnper',
                                                'title' => 'Delete user',
                                                'onclick'=>'return confirm("???????????? ?????? ??????????????????????")'
                                                 )) !!}
                                            {!! Form::close() !!}
                                        </a>
                                    </td>
                                </tr>



                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>



<!-- Add Modal Start -->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card">
                    <div class="header">
                        <h2><strong>Add faq</strong></h2>
                    </div>
                    <div class="body">
                        <form action="{{url('admin/faq')}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for=""><small>Title</small></label>
                                        <input type="text" class="form-control" placeholder="Name" name="title">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label for="content"><small>Content</small></label>

                                        <textarea name="content" id="content" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">

                                        <label for=""><small>Type</small></label>
                                        <select name="type" class="form-control ms">
                                            <option value="accordian">Accordian</option>
                                            <option value="tab">Tab</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">

                                        <label for=""><small>Status</small></label>
                                        <select name="status" class="form-control ms">
                                            <option value="active">Active</option>
                                            <option value="deactive">Deactive</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info btn-round">SAVE CHANGES</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
<!--Edit Modal End-->


@foreach($records??array() as $item)


    <!-- Add Modal Start -->
    <div class="modal fade" id="largeEditModal{{$item->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Edit faq</strong></h2>
                        </div>
                        <div class="body">
                            <form action="{{url('admin/faq',$item->id)}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}

                                {{method_field('patch')}}
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for=""><small>Title</small></label>
                                            <input type="text" class="form-control" placeholder="Title" name="title" value="{{$item->title}}">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label for="content"><small>Content</small></label>

                                            <textarea name="content" id="content" class="form-control">{{$item->content}}</textarea>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">

                                            <label for=""><small>Type</small></label>
                                            <select name="type" class="form-control ms">
                                                <option {{$item->status=='accordian'? 'selected':''}} value="accordian">Accordian</option>
                                                <option {{$item->status=='tab'? 'selected':''}}  value="tab">Tab</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">

                                            <label for=""><small>Status</small></label>
                                            <select name="status" class="form-control ms">
                                                <option value="active">Active</option>
                                                <option value="deactive">Deactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-round">SAVE CHANGES</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!--Edit Modal End-->


    <!-- Show Modal Start -->
    <div class="modal fade" id="largeShowModal{{$item->id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Show faq</strong></h2>
                        </div>
                        <div class="body">
                            <table class="table">
                                <tr>
                                    <td>Title</td>
                                    <td>{{$item->title}}</td>
                                </tr>
                                <tr>
                                    <td>Content</td>
                                    <td>{{html_entity_decode($item->content)}}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{$item->status}}</td>
                                </tr>
                                <tr>
                                    <td>Create Date</td>
                                    <td>{{$item->created}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div>
    </div>
    <!--Edit Modal End-->

@endforeach



@include('admin/inc/footer')

