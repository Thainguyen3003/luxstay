@extends('./admin/master')

@section('content')
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Danh sách thể loại
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">Thể loại</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Bảng thể loại</h3>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control pull-right"
                                            placeholder="Search">

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i
                                                    class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th>Description</th>
                                        <th>Manage</th>
                                    </tr>
                                    @foreach ($listGenres as $genre)
                                        <tr>
                                            <td>{{ $genre->id }}</td>
                                            <td>{{ $genre->name }}</td>
                                            @if ( $genre->status == 1 )
                                                <td><span class="label label-success">Bật</span></td>
                                            @else
                                                <td><span class="label label-danger">Tắt</span></td>
                                            @endif
                                            
                                            <td>{{ $genre->description }}</td>
                                            <td style="font-size: 20px">
                                                <a class="fa fa-edit" href="{{ route('admin.pages.genre.editGenre', $genre->slug) }}"></a> 
                                                <a href="{{ route('deleteGenre', $genre->slug) }}" onclick="return confirm('Bạn muốn xóa ?')" class="fa fa-trash"></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Add the sidebar's background. This div must be placed
             immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->
@endsection
