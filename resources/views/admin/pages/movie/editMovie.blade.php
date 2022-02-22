@extends('./admin/master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Phim
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Sửa Phim</li>
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
              <h3 class="box-title">Sửa Phim</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('editMovie.post') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputID">ID Phim</label>
                  <input name="idMovie" type="text" class="form-control" id="inputID" value="{{ $movie->id }}" readonly>
                </div>
                <div class="form-group">
                  <label for="inputName">Tên Phim</label>
                  <input name="nameMovie" type="text" class="form-control" id="slug" onkeyup="ChangeToSlug()" value="{{ $movie->name }}">
                </div>
                <div class="form-group">
                  <label for="inputDesc">Mô tả Phim</label>
                  <textarea name="descMovie" type="text" class="form-control" id="inputDesc">{{ $movie->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Chọn ảnh bìa</label>
                    <input name="image" type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="form-group">
                  <label for="inputSlug">slug</label>
                  <input name="slugMovie" type="text" class="form-control" id="convert_slug" value="{{ $movie->slug }}">
                </div>
                <div class="form-group">
                    <label>Quốc gia</label>
                    <select name="country_id" class="form-control">
                        @foreach ($countries as $key => $country)
                            <option value="{{ $country->id }}" {{ $country->id == $key ? "selected" : '' }} >{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Danh mục</label>
                    <select name="category_id" class="form-control">
                        @foreach ($categories as $key => $category)
                            <option value="{{ $category->id }}" {{ $category->id == $key ? "selected" : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label>Trạng thái</label>
                  <select name="statusMovie" class="form-control">
                    @if ($movie->status == 1)
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
