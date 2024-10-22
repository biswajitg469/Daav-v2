<x-app-layout>
    <x-slot name="title">
        <h1>Add Product</h1>
        <div id="response" class="alert alert-success " style="display:none; width: auto;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <div class="message"></div>
        </div>
        {{-- <x-slot name="content"> --}}
        <div class="row">
            <div class="container mt-5" style="width:auto;margin: 30px;">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Product Information</h4>
                        </div>
                        <div class="panel-body form-group form-group-sm">
                            <!-- Blade Form -->
                            <form method="POST" action="" id="add_product">
                                @csrf <!-- CSRF token for security -->

                                <input type="hidden" name="action" value="add_product">

                                <div class="row">
                                    <div class="col-xs-4">
                                        <label for="orderDate" class="form-label">Product Name</label>
                                        <!-- Product Name Input -->
                                        <input type="text" class="form-control" id="product_name" name="product_name"
                                            placeholder="Enter Product Name" required>
                                    </div>

                                    <div class="col-xs-4">
                                        <label for="orderDate" class="form-label">Product Description</label>
                                        <!-- Product Description Input -->
                                        <input type="text" class="form-control" id="product_desc" name="product_desc"
                                            placeholder="Enter Product Description" required>
                                    </div>

                                    <div class="col-xs-4">
                                        <label for="orderDate" class="form-label">Amount</label>
                                        <div class="input-group">
                                            <!-- Currency Symbol (use Blade to output the value) -->
                                            <input type="number" name="product_price" id="product_price" class="form-control"
                                                placeholder="0.00" required aria-describedby="sizing-addon1">
                                        </div>
                                    </div>
                                    {{-- <div class="row mt-6"> --}}
                                        <div class="col-xs-10">
                                            <!-- Add Product Button -->
                                            <button type="submit" id="action_add_product"
                                                class="btn btn-success float-right" data-loading-text="Adding...">
                                                Add Product
                                            </button>
                                        </div>
                                    {{-- </div> --}}
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </x-slot> --}}
    </x-slot>
</x-app-layout>
<script>
    $('#action_add_product').click(function (e) {
        // alert('11111111');
        e.preventDefault();
        product_add();

    });

    function product_add() {
        // alert('dfdfd');
        // var editcode = $('#editcode').val();
        var product_name = $('#product_name').val();
        var product_desc = $('#product_desc').val();
        var product_price = $('#product_price').val();


        let fd = new FormData();
        // fd.append('editcode', editcode);
        fd.append('product_name', product_name);
        fd.append('product_desc', product_desc);
        fd.append('product_price', product_price);

        fd.append('_token', '{{ csrf_token() }}');
        $.ajax({
            type: 'POST',
            url: 'product_add',
            data: fd,
            processData: false,
            contentType: false,
            // success massage
            success: function(data) {
                if (data.status == 1) {
                    // alert('sdgsdgsdgdsg');
                    const msg = "Product details save successfully";
                    // alert('sdgsdgsdgdsg');
                    // $.confirm({
                    //     title: 'Success!',
                    //     type: 'green',
                    //     icon: 'fa fa-check',
                    //     content: msg,
                    //     buttons: {
                    //         ok: function() {
                    //             window.location.href = "order_list";
                    //         },
                    //         // cancel: function() {
                    //         //     $.alert('Canceled!');
                    //         // },
                    //     }
                    // });
                }
                // else if (data.status == 2) {
                //     var msg =
                //         "<strong>SUCCESS: </strong>Order details updated successfully";
                //     $.confirm({
                //         title: 'Success!',
                //         type: 'green',
                //         icon: 'fa fa-check',
                //         content: msg,
                //         buttons: {
                //             ok: function() {
                //                 window.location.href = "order_list";
                //             }
                //         }
                //     });
                // }

            },

            error: function(jqXHR, textStatus, errorThrown) {
                $(".se-pre-con").fadeOut("slow");
                var msg = "";
                if (jqXHR.status !== 422 && jqXHR.status !== 400) {
                    msg += "<strong>" + jqXHR.status + ": " + errorThrown + "</strong>";
                } else {
                    if (jqXHR.responseJSON.hasOwnProperty('exception')) {
                        msg += "Exception: <strong>" + jqXHR.responseJSON.exception_message + "</strong>";
                    } else {
                        msg += "Error(s):<strong><ul>";
                        $.each(jqXHR.responseJSON['errors'], function(key, value) {
                            msg += "<li>" + value + "</li>";
                        });
                        msg += "</ul></strong>";
                    }
                }
                // $.alert({
                //     title: 'Error!!',
                //     type: 'red',
                //     icon: 'fa fa-warning',
                //     content: msg,
                // });
                // $('#pLoader').hide();

            }
        });
    }
</script>
