@extends('./admin/master')

@section('content')
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Danh sách tập phim
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Tables</a></li>
                    <li class="active">tập phim</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Bảng tập phim</h3>

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
                                        <th>Episode</th>
                                        <th>Phim</th>
                                        <th>Description</th>
                                        <th>Manage</th>
                                    </tr>
                                    @foreach ($listEpisodes as $episode)
                                        <tr>
                                            <td>{{ $episode->id }}</td>
                                            <td>{{ $episode->name }}</td>
                                            <td>{{ $episode->episode }}</td>
                                            <td>{{ $episode->movie_id }}</td>
                                            <td>{{ $episode->description }}</td>
                                            <td style="font-size: 20px">
                                                <a class="fa fa-edit" href="{{ route('admin.pages.episode.editEpisode', $episode->slug) }}"></a> 
                                                <a href="{{ route('deleteEpisode', $episode->slug) }}" onclick="return confirm('Bạn muốn xóa ?')" class="fa fa-trash"></button>
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
