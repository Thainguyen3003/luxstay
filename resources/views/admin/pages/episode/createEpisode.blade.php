@extends('./admin/master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Tập phim
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Forms</a></li>
                <li class="active">Tập phim</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tạo tập phim</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('createEpisode.post') }}" method="POST">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Phim</label>
                                    <select name="movie_id" class="form-control">
                                        @foreach ($listMovies as $movie)
                                            <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">Tên tập phim</label>
                                    <input name="nameEpisode" type="text" class="form-control" id="inputName">
                                </div>
                                <div class="form-group">
                                    <label for="inputEpisode">Tập phim</label>
                                    <input name="episode" type="text" class="form-control" id="inputEpisode">
                                </div>
                                <div class="form-group">
                                    <label for="inputDesc">Mô tả tập phim</label>
                                    <textarea name="descEpisode" type="text" class="form-control"
                                        id="inputDesc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputLink">link</label>
                                    <input name="linkEpisode" type="text" class="form-control" id="inputLink">
                                </div>
                                <div class="form-group">
                                    <label for="inputSlug">slug</label>
                                    <input name="slugEpisode" type="text" class="form-control" id="inputSlug">
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Tạo</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
