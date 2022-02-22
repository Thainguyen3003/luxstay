@extends('./admin/master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Năm phát hành
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Tạo năm</li>
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
              <h3 class="box-title">Tạo năm</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('createYear.post') }}" method="POST">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="inputName">Tên năm</label>
                  <input name="nameYear" type="text" class="form-control" id="slug" onkeyup="ChangeToSlug()">
                </div>
                <div class="form-group">
                    <label for="inputYear">Năm</label>
                    <input name="year" type="text" class="form-control" id="inputYear">
                  </div>
                <div class="form-group">
                  <label for="inputDesc">Mô tả năm</label>
                  <textarea name="descYear" type="text" class="form-control" id="inputDesc"></textarea>
                </div>
                <div class="form-group">
                  <label for="inputSlug">slug</label>
                  <input name="slugYear" type="text" class="form-control" id="convert_slug">
                </div>
                <div class="form-group">
                  <label>Trạng thái</label>
                  <select name="statusYear" class="form-control">
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
