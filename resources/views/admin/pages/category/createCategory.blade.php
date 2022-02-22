@extends('./admin/master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh mục phim
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Tạo danh mục</li>
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
              <h3 class="box-title">Tạo danh mục</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('createCategory.post') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputName">Tên danh mục</label>
                  <input name="nameCategory" type="text" class="form-control" id="slug" onkeyup="ChangeToSlug()">
                </div>
                <div class="form-group">
                  <label for="inputDesc">Mô tả danh mục</label>
                  <textarea name="descCategory" type="text" class="form-control" id="inputDesc"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputSlug">slug</label>
                  <input name="descSlug" type="text" class="form-control" id="convert_slug">
                </div>
                <div class="form-group">
                  <label>Trạng thái</label>
                  <select name="statusCategory" class="form-control">
                    <option value="1">Bật</option>
                    <option value="0">Tắt</option>
                  </select>
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
