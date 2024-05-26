@extends('layouts.admin')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Datatable</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Basic Datatable</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Tournament name</th>
                                        <th>Round</th>
                                        <th>Winner name</th>
                                        <th>Team 1 name</th>
                                        <th>Team 2 name</th>
                                        <th>Team 1 score</th>
                                        <th>Team 2 score</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td>New York</td>
                                        <td>27</td>
                                        <td>2011/01/25</td>
                                        <td>$112,000</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                   <tr>
                                        <th>Tournament name</th>
                                        <th>Round</th>
                                        <th>Winner name</th>
                                        <th>Team 1 name</th>
                                        <th>Team 2 name</th>
                                        <th>Team 1 score</th>
                                        <th>Team 2 score</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
            Content body end
        ***********************************-->
@endsection
