<x-app-layout>

    <x-slot name="title">
        <h1>Add Product</h1>
        <div id="response" class="alert alert-success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <div class="message"></div>
        </div>

        <div class="container pt-10" style="padding-left: 10px;"> <!-- Added pt-2 for top padding -->
            <div class="row justify-content-center"> <!-- Center the form within the row -->
                <div class="col-lg-10 col-md-10 col-sm-10"> <!-- Adjusted to a smaller column size -->
                    <div class="card shadow rounded-3">
                        <p class="card-title py-2 bg-success" style="padding-left: 20px; height:50px;"></p>

                        <!-- Product Form -->
                        <form id="product_form">
                            @csrf <!-- Include CSRF token for Laravel -->
                            <div class="card-body">
                                <input type="hidden" name="code" value="" id="editcode">

                                <div class="mb-3 row">
                                    <!-- Product Name -->
                                    <label for="productName" class="col-lg-5 col-md-4 col-sm-12 col-form-label required">Product Name:</label>
                                    <div class="col-lg-5 col-md-8 col-sm-12">
                                        <input type="text" id="productName" name="productName" class="form-control" placeholder="Enter Product Name">
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <!-- Product Description -->
                                    <label for="productDescription" class="col-lg-5 col-md-4 col-sm-12 col-form-label required">Product Description:</label>
                                    <div class="col-lg-5 col-md-8 col-sm-12">
                                        <textarea id="productDescription" name="productDescription" class="form-control" placeholder="Enter Product Description" rows="3" style="resize:none;"></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <!-- Price -->
                                    <label for="price" class="col-lg-5 col-md-4 col-sm-12 col-form-label required">Price:</label>
                                    <div class="col-lg-5 col-md-8 col-sm-12">
                                        <input type="text" id="price" name="price" class="form-control" placeholder="Enter Price" step="0.01" min="0">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="mt-5 text-center">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </x-slot>
</x-app-layout>
