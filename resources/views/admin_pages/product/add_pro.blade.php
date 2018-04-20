@extends('admin_layout')
@section('css')
    <!-- Plugins css-->
    <link href="admin/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
    <link href="admin/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="admin/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
@endsection
@section('title')
    Add new product
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('add_product')}}
@endsection
@section('content')    
    <div class="card-box">
        <form action="{{route('addPro')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category" required>
                                        <option value="">--None--</option>
                                        @foreach($category as $cate)
                                            <option value="{{$cate->cate_id}}">{{$cate->cate_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category">Brand</label>
                                    <select class="form-control" name="brand" id="brand">
                                        <option value="">--Select Category first--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="price">Price</label>
                                    <input type="text" placeholder="Enter Price" name="price" data-a-sign="VNĐ " class="form-control autonumber" required>
                                    <span class="font-14 text-muted">e.g. "VNĐ 1,234,567"</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="promotion_price">Promotion Price</label>
                                    <input type="text" placeholder="Enter Promotion Price" name="promotion_price" data-a-sign="VNĐ " class="form-control autonumber">
                                    <span class="font-14 text-muted">e.g. "VNĐ 1,234,567"</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="promotion_item">Promotion Item</label>
                            <input type="text" class="form-control" id="promotion_item" name="promotion_item" placeholder="Enter Promotion Item">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Quantity</label>
                                    <input type="text" class="form-control" name="quantity" placeholder="Enter Quantity" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p style="font-size: 14px;color: #313a46;letter-spacing: 0.01em;font-family:Nunito Sans;">Status</p>
                                    <div class="radio radio-success form-check-inline">
                                        <input type="radio" id="inlineRadio1" value="1" name="status" checked>
                                        <label for="inlineRadio1"> Đang kinh doanh </label>
                                    </div>
                                    <div class="radio radio-danger form-check-inline">
                                        <input type="radio" id="inlineRadio2" value="0" name="status">
                                        <label for="inlineRadio2"> Ngừng kinh doanh </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="summary">Summary</label>
                            <textarea id="textarea" name="summary" class="form-control" maxlength="225" rows="3" placeholder="The Summary content has a limit of 225 chars." required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox1" type="checkbox" name="today" value="1">
                                <label for="checkbox1">Today Deal</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="form-group">
                            <label for="seo_keyword">SEO Keywords</label>
                            <textarea id="textarea" name="seo_keywords" class="form-control" maxlength="225" rows="3" placeholder="The SEO keywords content has a limit of 225 chars." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="seo_description">SEO Description</label>
                            <textarea id="textarea" name="seo_description" class="form-control" maxlength="225" rows="3" placeholder="The SEO description content has a limit of 225 chars." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <p><i class="typcn typcn-image"></i> Thumbnail</p>
                            <input type="file" name="thumbnail" class="filestyle" data-placeholder="No file" data-buttonname="btn btn-primary">
                            @for($i = 1; $i<=3; $i++)
                            <p><i class="typcn typcn-image"></i> Detail {{$i}}</p>
                            <input type="file" name="Image[]" class="filestyle" data-placeholder="No file" data-buttonname="btn btn-primary">
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card-box">
                        <h4 class="m-b-30 m-t-0 header-title">Product Detail Information</h4>
                        <form method="post">
                            <textarea id="elm1" name="detail"></textarea>
                        </form>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary waves-effect w-md waves-light">Submit</button>
                <a href="{{route('proList')}}"><button type="button" class="btn btn-secondary waves-effect w-md waves-light m-l-5">Return</button></a>
            </div>
        </form>
    </div>
@endsection
@section('js')
    <script src="admin/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
    <script src="admin/plugins/autoNumeric/autoNumeric.js" type="text/javascript"></script>
    
    <script src="admin/plugins/select2/js/select2.min.js" type="text/javascript"></script>
    <script src="admin/plugins/bootstrap-select/js/bootstrap-select.js" type="text/javascript"></script>
    <script src="admin/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
    <script src="admin/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
    <script src="admin/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

    <!--Wysiwig js-->
    <script src="admin/plugins/tinymce/tinymce.min.js"></script>
    <!-- Init Js file -->
    <script type="text/javascript" src="admin/assets/pages/jquery.form-advanced.init.js"></script>
    <!-- Parsley js -->
    <script type="text/javascript" src="admin/plugins/parsleyjs/parsley.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
            $('.autonumber').autoNumeric('init');
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            if($("#elm1").length > 0){
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height:500,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]
                });
            }
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#category').change(function(){
                var id = $(this).val();
                $.ajax({
                    url: 'admincp/load-brand/'+id,
                    type: "get",
                    data: {
                        id: id,
                    },
                    success: function(result){
                        // console.log(result);
                        $('#brand').html(result);
                    }
                });
            });
        });
    </script>
@endsection