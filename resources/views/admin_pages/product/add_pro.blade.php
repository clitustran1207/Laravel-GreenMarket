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
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" placeholder="" data-a-sign="$ " class="form-control autonumber" required>
                            <span class="font-14 text-muted">e.g. "$ 1,234,567,890,123"</span>
                        </div>
                        <div class="form-group">
                            <label for="promotion_price">Promotion Price</label>
                            <input type="text" placeholder="" data-a-sign="$ " class="form-control autonumber">
                            <span class="font-14 text-muted">e.g. "$ 1,234,567,890,123"</span>
                        </div>
                        <div class="form-group">
                            <label for="promotion_item">Promotion Item</label>
                            <input type="text" class="form-control" id="promotion_item" placeholder="Enter Promotion Item">
                        </div>
                        <div class="form-group">
                            <label for="summary">Summary</label>
                            <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="The Summary content has a limit of 225 chars." required></textarea>
                        </div>
                        <div class="form-group" style="margin: 0">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Today Deal</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="form-group">
                            <label for="seo_keyword">SEO Keywords</label>
                            <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="The SEO keywords content has a limit of 225 chars." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="seo_description">SEO Description</label>
                            <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="The SEO description content has a limit of 225 chars." required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image" style="margin-bottom: 0.8rem">Image</label>
                            <p><i class="typcn typcn-image"></i> Image 1</p>
                            <input type="file" class="filestyle" data-placeholder="No file" data-buttonname="btn btn-primary">
                            <p><i class="typcn typcn-image"></i> Image 2</p>
                            <input type="file" class="filestyle" data-placeholder="No file" data-buttonname="btn btn-primary">
                            <p><i class="typcn typcn-image"></i> Image 3</p>
                            <input type="file" class="filestyle" data-placeholder="No file" data-buttonname="btn btn-primary">
                            <p><i class="typcn typcn-image"></i> Image 4</p>
                            <input type="file" class="filestyle" data-placeholder="No file" data-buttonname="btn btn-primary">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                        <div class="card-box">
                            <h4 class="m-b-30 m-t-0 header-title">Product Detail Information</h4>
                            <form method="post">
                                <textarea id="elm1" name="area"></textarea>
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
@endsection