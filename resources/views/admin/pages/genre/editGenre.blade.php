@extends('./admin/master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thể loại phim
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Sửa thể loại</li>
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
              <h3 class="box-title">Sửa thể loại</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('editGenre.post') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputId">ID thể loại</label>
                  <input name="idGenre" type="text" class="form-control" id="inputId" value="{{ $genre->id }}" readonly>
                </div>
                <div class="form-group">
                  <label for="inputName">Tên thể loại</label>
                  <input name="nameGenre" type="text" class="form-control" id="slug" onkeyup="ChangeToSlug()" value="{{ $genre->name }}" >
                </div>
                <div class="form-group">
                  <label for="inputDesc">Mô tả thể loại</label>
                  <textarea name="descGenre" type="text" class="form-control" id="inputDesc">{{ $genre->description }}</textarea>
                </div>
                <div class="form-group">
                  <label for="inputSlug">slug</label>
                  <input name="descSlug" type="text" class="form-control" id="convert_slug" value="{{ $genre->slug }}">
                </div>
                <div class="form-group">
                  <label>Trạng thái</label>
                  <select name="statusGenre" class="form-control">
                    @if ($genre->status == 1)
                      <option value="1" selected>Bật</option>
                      <option value="0">Tắt</option>
                    @else
                      <option value="1">Bật</option>
                      <option value="0" selected>Tắt</option>
                    @endif
                  </select>
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
