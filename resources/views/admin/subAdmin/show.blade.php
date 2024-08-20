{{-- @include('admin.component.header') --}}
{{-- @include('admin.component.style') --}}
{{-- @include('admin.component.topnav')
@include('admin.component.navbar') --}}

<div class="content-body">
    <div class="container-fluid mt-3">
        <h1>Invoice for Sale #{{ $sale->id }}</h1>
        <p>Buyer: {{ $sale->buyer_name }}</p>
        {{-- <p>Date: {{ $sale->created_at->format('Y-m-d H:i') }}</p> --}}

        <table class="table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sale->saleItems as $item)
                <tr>
                    <td>{{ $item->inventory->name }}</td>
                    <td>{{ $item->quantity_sold }}</td>
                    <td>{{ $item->price }} USD</td>
                    <td>{{ $item->quantity_sold * $item->price }} USD</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <p>Total Amount: {{ $sale->total_price }} USD</p>



    </div>
</div>

{{-- @include('admin.component.footer') --}}

