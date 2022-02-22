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
                <li class="active">Phim</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tạo phim</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('createMovie.post') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="inputName">Tên phim</label>
                                    <input name="nameMovie" type="text" class="form-control" id="slug" onkeyup="ChangeToSlug()">
                                </div>
                                <div class="form-group">
                                    <label for="inputDesc">Mô tả phim</label>
                                    <textarea name="descMovie" type="text" class="form-control" id="inputDesc"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Chọn ảnh bìa</label>
                                    <input name="image" type="file" id="exampleInputFile">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="form-group">
                                    <label for="inputSlug">slug</label>
                                    <input name="slugMovie" type="text" class="form-control" id="convert_slug">
                                </div>
                                <div class="form-group">
                                    <label>Quốc gia</label>
                                    <select name="country_id" class="form-control">
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select name="category_id" class="form-control">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Trạng thái</label>
                                    <select name="statusMovie" class="form-control">
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
