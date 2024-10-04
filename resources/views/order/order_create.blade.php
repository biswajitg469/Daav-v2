<x-app-layout>
    <x-slot name="title">
        <h1 style="margin: 35px; font-size: 26px;">Order Create</h1> <!-- Added top margin to create gap -->
    </x-slot>

    <x-slot name="content">
        <div class="container">
            <div class="card mt-10"> <!-- Adjusted margin-top to give space between heading and form -->
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="orderDate" class="form-label">Order Date</label>
                                <input type="date" class="form-control" id="orderDate" name="orderDate" required>
                            </div>
                            <div class="col-md-4">
                                <label for="cuttingDate" class="form-label">Cutting Date</label>
                                <input type="date" class="form-control" id="cuttingDate" name="cuttingDate" required>
                            </div>
                            <div class="col-md-4">
                                <label for="deliveryDate" class="form-label">Delivery Date</label>
                                <input type="date" class="form-control" id="deliveryDate" name="deliveryDate" required>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-success">Add Order</button> <!-- Button aligned to right -->
            </div>
        </div>
    </x-slot>
</x-app-layout>
