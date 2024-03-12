@extends('../dashboardLayouts.master')
@section('body')

<div class="dashboardProperties">
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('adminDashboard') }}"><i class="metismenu-icon pe-7s-rocket"></i> Dashboard</a></li>
        <li class="breadcrumb-item active">Features</li>
    </ol>

    <div class="table_header">
        <div class="left">
            <form class="bulk">
                <select required>
                    <option value="">Bulk Actions</option>
                    <option value="delete">Delete</option>
                </select>
                <button type="submit" name="submit">Filters</button>
            </form>
            <form>
                <input type="text" name="search" placeholder="Search..." required>
                <a class="cross"><i class="fas fa-times"></i></a>
                <button type="submit" name="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="right">
            <ul>
                <li>
                    <a data-toggle="modal" data-target=".addFeature"><i class="fa fa-plus"></i>Feature</a>
                </li>
                <li>
                    <a><i class="fa fa-download"></i>Export<i class="fa fa-angle-down"></i></a>
                    <ul class="sub">
                        <li><a><i class="fas fa-file-csv"></i> CSV</a></li>
                        <li><a><i class="fas fa-file-excel"></i> Excel</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('dashboardFeatures') }}">Reload</a>
                </li>
            </ul>
        </div>
    </div>
    <table class="table table-striped table-hover vertical-middle dataTable no-footer dtr-inline" id="botble-real-estate-tables-property-table">
        <thead>
            <tr role="row">
                <th><input class="table-check-all" type="checkbox" /></th>
                <th>Title</th>
                <th>Status</th>
                <th>Created At</th>
                <th>Operations</th>
            </tr>
        </thead>
        <tbody>
            <tr role="row" class="odd">
                <td>
                    <div class="text-start">
                        <div class="checkbox checkbox-primary table-checkbox">
                            <input type="checkbox" class="checkboxes" name="id[]" value="17" />
                        </div>
                    </div>
                </td>
                <td><a href="">Parking</a></td>
                <td><span class="status success">Published</span></td>
                <td>October 18, 2022</td>
                <td>
                    <div class="table-actions">
                        <a href="" class="btn btn-icon btn-sm btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-icon btn-sm btn-danger deleteDialog">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr role="row" class="even">
                <td>
                    <div class="text-start">
                        <div class="checkbox checkbox-primary table-checkbox">
                            <input type="checkbox" class="checkboxes" name="id[]" value="17" />
                        </div>
                    </div>
                </td>
                <td><a href="">Parking</a></td>
                <td><span class="status success">Published</span></td>
                <td>October 18, 2022</td>
                <td>
                    <div class="table-actions">
                        <a href="" class="btn btn-icon btn-sm btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-icon btn-sm btn-danger deleteDialog">
                            <i class="fa fa-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>


</div>

@endsection