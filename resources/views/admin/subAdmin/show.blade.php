{{-- @include('admin.component.header') --}}
{{-- @include('admin.component.style') --}}
{{-- @include('admin.component.topnav')
@include('admin.component.navbar') --}}



{{-- <div class="content-body">
    <div class="container-fluid mt-3">
        <h1>Invoice for Sale #{{ $sale->id }}</h1>
        <p>Buyer: {{ $sale->buyer_name }}</p> --}}
{{-- <p>Date: {{ $sale->created_at->format('Y-m-d H:i') }}</p> --}}

{{-- <table class="table">
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
</div> --}}

{{-- @include('admin.component.footer') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe-Eye</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 20px 40px;
            /* Adjusted padding */
            color: grey;
            position: relative;
        }

        .nav-logo {
            flex-shrink: 0;
        }

        .nav-logo img {
            width: 150px;
            /* Adjusted size */
            height: auto;
        }

        .nav-links {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
        }

        .nav-links ul {
            list-style: none;
            margin-bottom: 10px;
            display: flex;
            gap: 15px;
        }

        .nav-links li {
            font-size: 18px;
            color: grey;
            font-weight: bold;
        }

        .navbar::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 40px;
            /* Align with padding */
            right: 40px;
            /* Align with padding */
            height: 2px;
            background-color: lightgrey;
        }

        .qr-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            /* Adjusted padding */
            color: grey;
        }

        .qr-section .qr-code {
            flex-shrink: 0;
        }

        .qr-section .qr-code img {
            width: 120px;
            /* Adjusted size */
            height: auto;
        }

        .qr-section .qr-content {
            display: flex;
            flex-direction: column;
            margin-left: 20px;
        }

        .qr-content .row {
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: bold;
        }

        .invoice-dates {
            text-align: center;
            padding: 10px 40px;
            /* Adjusted padding */
            font-size: 16px;
            font-weight: bold;
            color: grey;
        }

        .table-wrapper {
            position: relative;
            padding: 20px 40px;
            /* Adjusted padding */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        table,
        th,
        td {
            border: 1px solid grey;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .line-below {
            position: absolute;
            bottom: -20px;
            left: 0;
            /* Align with padding */
            right: 0;
            /* Align with padding */
            height: 2px;
            background-color: lightgrey;
        }

        .footer {
            text-align: center;
            padding: 20px 40px;
            /* Adjusted padding */
            color: grey;
            margin-top: 30px;
        }

        .footer div {
            margin-bottom: 5px;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .navbar,
            .qr-section,
            .invoice-dates,
            .table-wrapper,
            .footer {
                page-break-inside: avoid;
            }

            .line-below {
                display: none;
                /* Hide the line below the table in print */
            }

            .footer {
                margin-top: 20px;
                /* Adjust footer margin for print */
            }
        }

        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
                /* Adjusted padding */
            }

            .nav-links {
                align-items: flex-start;
                width: 100%;
                margin-top: 20px;
            }

            .nav-links ul {
                flex-direction: column;
                width: 100%;
                gap: 0;
            }

            .nav-links li {
                display: block;
                width: 100%;
            }

            .navbar::after {
                width: calc(100% - 40px);
                /* Adjust underline for smaller screens */
                left: 20px;
                /* Adjusted alignment */
                right: 20px;
                /* Adjusted alignment */
            }

            .qr-section {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
            }

            .qr-section .qr-content {
                margin-top: 20px;
            }

            .table-wrapper {
                padding: 20px;
            }

            .line-below {
                left: 20px;
                right: 20px;
            }

            .footer {
                padding: 10px;
                margin-top: 20px;
                /* Adjust margin for smaller screens */
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="nav-logo">
            <img src="logo.png" alt="Not Found">
        </div>
        <div class="nav-links">
            <ul>
                <li>SAFE EYE TRADING</li>
            </ul>
            <ul>
                <li>Arabic Section</li>
            </ul>
            <ul>
                <li>RIYADH 12831 Saudi Arabia</li>
            </ul>
        </div>
    </nav>

    <section class="qr-section">
        <div class="qr-code">
            <img src="QR.jfif" alt="Not Found">
        </div>
        <div class="qr-content">
            <div class="row">LEZOF COMPANY LTD.</div>
            <div class="row">VAT Number: 310294957900003</div>
        </div>
    </section>

    <!-- Invoice Dates Section -->
    <section class="invoice-dates">
        <div>Invoice Date: 04/05/2024</div>
        <div>Delivery Date: 04/05/2024</div>
    </section>

    <!-- Table Section -->
    <section class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>TOTAL PRICE</th>
                    <th>VAT AMOUNT</th>
                    <th>AMOUNT</th>
                    <th>TAXES</th>
                    <th>UNIT PRICE</th>
                    <th>QUANTITY</th>
                    <th>DESCRIPTION</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>120000</td>
                    <td>55334</td>
                    <td>45345</td>
                    <td>642</td>
                    <td>3000</td>
                    <td>Normal</td>
                    <td>Charger</td>
                </tr>
                <tr>
                    <td>160000</td>
                    <td>55334</td>
                    <td>656353</td>
                    <td>653</td>
                    <td>2000</td>
                    <td>Excellent</td>
                    <td>Headphone</td>
                </tr>
                <tr>
                    <td>170000</td>
                    <td>753834</td>
                    <td>5633465</td>
                    <td>553</td>
                    <td>1000</td>
                    <td>Fine</td>
                    <td>Mouse</td>
                </tr>
            </tbody>
        </table>
        <div class="line-below"></div>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <div>Phone No: 123-456-7890</div>
        <div>Address: 123 Main St, Anytown, KSA</div>
    </footer>
</body>

</html>
