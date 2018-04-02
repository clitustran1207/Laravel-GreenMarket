@extends('admin_layout')
@section('css')
    <!-- Plugin Css-->
    <link rel="stylesheet" href="admin/plugins/magnific-popup/css/magnific-popup.css" />
    <link rel="stylesheet" href="admin/plugins/jquery-datatables-editable/dataTables.bootstrap4.min.css" />
@endsection
@section('title')
    Edit Category
@endsection
@section('breadcrumbs')
    {{Breadcrumbs::render('edit_category')}}
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title"><b>Buttons example</b></h4>
                <p class="text-muted font-13 m-b-30">
                    The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                </p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="m-b-30">
                            <button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline"></i></button>
                        </div>
                    </div>
                </div>

                <table class="table table-colored-bordered table-bordered-danger table-striped add-edit-table" id="datatable-editable">
                    <thead>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeC">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 5.5
                        </td>
                        <td>Win 95+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>Internet
                            Explorer 6
                        </td>
                        <td>Win 98+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        <td>AOL browser (AOL desktop)</td>
                        <td>Win XP</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 1.5</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 2.0</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Firefox 3.0</td>
                        <td>Win 2k+ / OSX.3+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape 7.2</td>
                        <td>Win 95+ / Mac OS 8.6-9.2</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Browser 8</td>
                        <td>Win 98SE+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Netscape Navigator 9</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.1</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.2</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.3</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.4</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.5</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.6</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.7</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Mozilla 1.8</td>
                        <td>Win 98+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Seamonkey 1.1</td>
                        <td>Win 98+ / OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Gecko</td>
                        <td>Epiphany 2.20</td>
                        <td>Gnome</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.2</td>
                        <td>OSX.3</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 1.3</td>
                        <td>OSX.3</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.0</td>
                        <td>Win 95+ / OSX.1+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 7.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.0</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 8.5</td>
                        <td>Win 95+ / OSX.2+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.0</td>
                        <td>Win 95+ / OSX.3+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.2</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera 9.5</td>
                        <td>Win 88+ / OSX.3+</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Opera for Wii</td>
                        <td>Wii</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Nokia N800</td>
                        <td>N800</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Presto</td>
                        <td>Nintendo DS browser</td>
                        <td>Nintendo DS</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeC">
                        <td>KHTML</td>
                        <td>Konqureror 3.1</td>
                        <td>KDE 3.1</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>KHTML</td>
                        <td>Konqureror 3.3</td>
                        <td>KDE 3.3</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>KHTML</td>
                        <td>Konqureror 3.5</td>
                        <td>KDE 3.5</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeX">
                        <td>Tasman</td>
                        <td>Internet Explorer 4.5</td>
                        <td>Mac OS 8-9</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeC">
                        <td>Tasman</td>
                        <td>Internet Explorer 5.1</td>
                        <td>Mac OS 7.6-9</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeC">
                        <td>Tasman</td>
                        <td>Internet Explorer 5.2</td>
                        <td>Mac OS 8-X</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Misc</td>
                        <td>NetFront 3.1</td>
                        <td>Embedded devices</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeA">
                        <td>Misc</td>
                        <td>NetFront 3.4</td>
                        <td>Embedded devices</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeX">
                        <td>Misc</td>
                        <td>Dillo 0.8</td>
                        <td>Embedded devices</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeX">
                        <td>Misc</td>
                        <td>Links</td>
                        <td>Text only</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeX">
                        <td>Misc</td>
                        <td>Lynx</td>
                        <td>Text only</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeC">
                        <td>Misc</td>
                        <td>IE Mobile</td>
                        <td>Windows Mobile 6</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeC">
                        <td>Misc</td>
                        <td>PSP browser</td>
                        <td>PSP</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <tr class="gradeU">
                        <td>Other browsers</td>
                        <td>All others</td>
                        <td>-</td>
                        <td class="actions">
                            <a href="#" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></a>
                            <a href="#" class="hidden on-editing save-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Save"><i class="fa fa-save"></i></a>
                            <a href="#" class="hidden on-editing cancel-row" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cancel"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end: page -->
    </div> 
    <!-- end Panel -->
@endsection
@section('js')
    <!-- MODAL -->
    <div id="dialog" class="modal-block mfp-hide">
        <section class="card p-20">
            <header class="panel-heading">
                <h4 class="panel-title mt-0">Are you sure?</h4>
            </header>
            <div class="panel-body">
                <div class="modal-wrapper">
                    <div class="modal-text">
                        <p>Are you sure that you want to delete this row?</p>
                    </div>
                </div>

                <div class="row m-t-20">
                    <div class="col-md-12 text-right">
                        <button id="dialogConfirm" class="btn btn-success waves-effect waves-light">Confirm</button>
                        <button id="dialogCancel" class="btn btn-danger waves-effect">Cancel</button>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <!-- Examples -->
    <script src="admin/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="admin/plugins/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="admin/plugins/tiny-editable/mindmup-editabletable.js"></script>
    <script src="admin/plugins/tiny-editable/numeric-input-example.js"></script>

    <script src="admin/assets/pages/jquery.datatables.editable.init.js"></script>

    <script>
        $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    </script>
@endsection