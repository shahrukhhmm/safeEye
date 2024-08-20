@include('admin.component.header')
{{-- @include('admin.component.style') --}}
@include('admin.component.topnav')
@include('admin.component.navbar')

<div class="content-body">
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="col-md-8 p-5">
                            <h4>SALE FORM</h4>

                            <!-- Search Form -->
                            <form id="searchForm" class="mb-4">
                                <div class="input-group">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Search for products...">
                                    <div class="input-group-append">
                                        <button type="button" id="searchButton" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </form>

                            <!-- Inventory Form -->
                            <form action="{{ route('sales.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="buyer_name">Buyer Name</label>
                                    <input type="text" name="buyer_name" class="form-control" required>
                                </div>

                                @foreach ($inventories as $inventory)
                                <div class="form-group" id="product-{{ $inventory->id }}">
                                    <input type="checkbox" name="inventory_ids[]" value="{{ $inventory->id }}">
                                    <label>{{ $inventory->name }} - {{ $inventory->price }} USD</label>
                                    <input type="number" name="quantities[]" placeholder="Quantity" min="1" max="{{ $inventory->quantity }}" class="form-control">
                                    <input type="hidden" name="prices[]" value="{{ $inventory->price }}">
                                </div>
                                @endforeach

                                <div class="d-flex justify-content-center">

                                    <button type="submit" class="btn btn-primary">Create Bill</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.component.footer')

<script>
    document.getElementById('searchButton').addEventListener('click', function() {
        const searchValue = document.getElementById('searchInput').value.toLowerCase();
        const productElements = document.querySelectorAll('[id^="product-"]');

        for (let productElement of productElements) {
            const label = productElement.querySelector('label').innerText.toLowerCase();
            if (label.includes(searchValue)) {
                productElement.scrollIntoView({ behavior: 'smooth' });
                break;
            }
        }
    });
</script>
