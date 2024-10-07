<x-app-layout>
    <x-slot name="title">
        <h1 style="margin: 35px; font-size: 30px;">Manage Design List</h1>
    </x-slot>
    <x-slot name="content">
        <div class="container mt-5" style="width:auto;">
            <!-- DataTable Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Manage Design</h3>
                </div>
                <div class="panel-body">
                    <!-- DataTable -->
                    <div class="box box-warning">
                        <div class="box-body">
                            <div class="container-fluid">
                                <div class="table">
                                    <table id="designTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Design Name</th>
                                                <th>Design Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Sample Data (you can dynamically populate this via backend) -->
                                            <tr>
                                                <td>fdhfdhdfhbfd</td>
                                                <td>dfhdfhfdhfdhdhger</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button>
                                                    {{-- <button class="btn btn-success btn-sm"><i class="fa fa-envelope"></i></button> --}}
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                    <button class="btn btn-info btn-sm"><i class="fa fa-download"></i></button>
                                                </td>
                                            </tr>
                                            <!-- Add more rows similarly -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>
</x-app-layout>
