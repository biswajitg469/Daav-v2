<x-app-layout>
    <x-slot name="title">
        <h1 style="margin: 35px; font-size: 30px;">Manage Product</h1>
    </x-slot>
    <x-slot name="content">
        <div class="container mt-5" style="width:auto;">
            <!-- DataTable Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Product List</h3>
                </div>
                <div class="panel-body">
                    <!-- DataTable -->
                    <div class="box box-warning">
                        <div class="box-body">
                            <div class="container-fluid">
                                <div class="table">
                                    <table id="invoiceTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Product Name</th>
                                                <th>Product Description</th>
                                                <th>Amount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Sample Data (you can dynamically populate this via backend) -->
                                            <tr>
                                                <td>fbjkdehfuewf</td>
                                                <td>frgergtewgtrgtewtewtewgtwrggewgwrfg</td>
                                                <td>345423</td>
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
