<x-app-layout>

    <x-slot name="title">
        <div class="content-header" style="padding: 40px 15px 36px 15px;">
            <h1>Add Product Desing</h1>
            <div id="response" class="alert alert-success" style="display:none;">
                <a href="#" class="close" data-dismiss="alert">×</a>
                <div class="message"></div>
            </div>
            <div class="container-fluid">

            </div>
        </div>
    </x-slot>
    <x-slot name="content">
        <div class="row">
            <div class="container mt-5" style="width:auto;margin: 30px;">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Design Information</h4>
                        </div>
                        <div class="panel-body form-group form-group-sm">

                            <!-- HTML Form -->
                            <form method="" action="" id="">

                                <div class="row">
                                    <div class="col-xs-5">
                                        <!-- Design Name Input -->
                                        <input type="text" class="form-control" id="design_name" name="design_name"
                                            placeholder="Enter Design Name" required>
                                    </div>

                                    <div class="col-xs-5">
                                        <!-- Design Description Input -->
                                        <input type="text" class="form-control" id="design_desc" name="design_desc"
                                            placeholder="Enter Design Description" required>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-xs-11">
                                        <div class="col-xs-11 text-right">
                                            <!-- Add Design Button -->
                                            <button id="action_add_design" class="btn btn-success" data-loading-text="Adding...">
                                                Add Design
                                            </button>
                                        </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-app-layout>
<script>
    $('#action_add_design').click(function (e) {
        e.preventDefault();
        desing_add();

    });

    function desing_add() {
        // alert('hjvhv');
        // alert('gfdgfdgfdhgbfdgbfg');
        // var editcode = $('#editcode').val();
        var design_name = $('#design_name').val();
        // alert(customercode);
        var design_desc = $('#design_desc').val();
        // alert(vendorname);

        let fd = new FormData();
        // fd.append('editcode', editcode);
        fd.append('design_name', design_name);
        fd.append('design_desc', design_desc);

        fd.append('_token', '{{ csrf_token() }}');
        $.ajax({
            type: 'POST',
            url: 'desing_add',
            data: fd,
            processData: false,
            contentType: false,
            // success massage
            success: function(data) {
                if (data.status == 1) {
                    // alert('sdgsdgsdgdsg');
                    const msg = "Desing details save successfully";
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
                $('#pLoader').hide();

            }
        });
    }
</script>
