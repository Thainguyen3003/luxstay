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
        <li class="active">Sửa tập phim</li>
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
              <h3 class="box-title">Sửa tập phim</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('editEpisode.post') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputID">ID tập phim</label>
                  <input name="idEpisode" type="text" class="form-control" id="inputID" value="{{ $episode->id }}" readonly>
                </div>
                <div class="form-group">
                  <label for="inputName">Tên tập phim</label>
                  <input name="nameEpisode" type="text" class="form-control" id="slug" value="{{ $episode->name }}" onkeyup="ChangeToSlug()">
                </div>
                <div class="form-group">
                  <label for="inputDesc">Mô tả tập phim</label>
                  <textarea name="descEpisode" type="text" class="form-control" id="inputDesc">{{ $episode->description }}</textarea>
                </div>
                <div class="form-group">
                  <label for="inputSlug">slug</label>
                  <input name="slugEpisode" type="text" class="form-control" id="convert_slug" value="{{ $episode->slug }}">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Cập nhật</button>
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
