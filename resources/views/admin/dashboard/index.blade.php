@include('admin.component.header')
@include('admin.component.topnav')
@include('admin.component.navbar')



<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">

        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-1">
                    <div class="card-body">
                        <h3 class="card-title text-white">Users</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{$user}}</h2>
                           <a class="m-0 p-0" href="{{url('/user')}}"> <p class="text-white mb-0">User <i class="fa-solid fa-arrow-right m-2"></i></p></a>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-2">
                    <div class="card-body">
                        <h3 class="card-title text-white">Branches</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{$branch}}</h2>
                            <a href="{{url('/branch')}}"><p class="text-white mb-0">Branches <i class="fa-solid fa-arrow-right m-2"></i></p></a>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa-solid fa-code-branch"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-3">
                    <div class="card-body">
                        <h3 class="card-title text-white">Inventory</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{$inventory}}</h2>
                            <a href="{{url("/inventory")}}"><p class="text-white mb-0">Inventory <i class="fa-solid fa-arrow-right m-2"></i></p></a>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa-solid fa-warehouse"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card gradient-4">
                    <div class="card-body">
                        <h3 class="card-title text-white">Inventory Category</h3>
                        <div class="d-inline-block">
                            <h2 class="text-white">{{$category}}</h2>
                            <a href="{{url('/inventoryCategory')}}"><p class="text-white mb-0">Inventory Category <i class="fa-solid fa-arrow-right m-2"></i></p></a>
                        </div>
                        <span class="float-right display-5 opacity-5"><i class="fa-solid fa-layer-group"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-6">
                                    {{-- <h3>Inventory by Category</h3> --}}
                                    <div id="categoryInventoryChart" style="height: 370px; width: 100%;"></div>
                                </div>
                                <div class="col-md-6">
                                    {{-- <h3>Inventory by Branch</h3> --}}
                                    <div id="branchInventoryChart" style="height: 370px; width: 100%;"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            {{-- <h3>Inventory by Category</h3> --}}
                            <div id="branchSalesChart" style="height: 370px; width: 100%;"></div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- category wise sold graph --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            {{-- <h3>Category-Wise Items Sold</h3> --}}
                            <div id="categorySalesChart" style="height: 370px; width: 100%;"></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="row p-5">
                                <h1 class="text-center mt-5 display-5" style=" margin: 25px; color: #252424; font-family: sans-serif;" >Today Attendance</h1>

                                <div class="col-lg-4 col-md-6 col-sm-12" style="box-shadow: rgb(149 157 165 / 10%) 0px 8px 24px; margin-top: 20px; padding: 15px; border-radius: 25px;">
                                    <div class="small-box" style="background: white;">
                                        <div style="display: flex;">
                                            <div class="bg-circle" style="background: radial-gradient(#ffb6c1, transparent);">
                                                <i class="fas fa-user"
                                                    style="font-size: 20px;padding: 15px; color: white;">
                                                </i>
                                            </div>
                                            <div class="inner mx-3">
                                                <p class="card-heading" style="font-size: 15px;">Logged-in Users</p>
                                                <h3 class="card-text">{{@$numEmployeesStarted}}</h3>
                                            </div>

                                        </div>

                                    </div>
                                </div>



                                <div class="col-lg-4 col-md-6 col-sm-12" style="box-shadow: rgb(149 157 165 / 10%) 0px 8px 24px; margin-top: 20px; padding: 15px; border-radius: 25px;">
                                    <div class="small-box" style="background: white;">
                                        <div style="display: flex;">
                                            <div class="bg-circle" style="background: radial-gradient(#ffb6c1, transparent);">
                                                <i class="fas fa-user"
                                                    style="font-size: 20px;padding: 15px; color: white;">
                                                </i>
                                            </div>
                                            <div class="inner mx-3">
                                                <p class="card-heading" style="font-size: 15px;">On Break Users</p>
                                                <h3 class="card-text">{{@$numEmployeesOnBreak}}</h3>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6 col-sm-12" style="box-shadow: rgb(149 157 165 / 10%) 0px 8px 24px; margin-top: 20px; padding: 15px; border-radius: 25px;">
                                    <div class="small-box" style="background: white;">
                                        <div style="display: flex;">
                                            <div class="bg-circle" style="background: radial-gradient(#ffb6c1, transparent);">
                                                <i class="fas fa-user"
                                                    style="font-size: 20px;padding: 15px; color: white;">
                                                </i>
                                            </div>
                                            <div class="inner mx-3">
                                                <p class="card-heading" style="font-size: 15px;">Logged out Users</p>
                                                <h3 class="card-text">{{@$numEmployeesEnded}}</h3>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>




                            {{-- Today Activity --}}
                            <div class="row p-4">

                                <div class="col-sm-12 " >
                                    {{-- <h1 class="text-center mt-5 display-5 " >Today Activity</h1> --}}
                                    <table class="table " >
                                        <thead>
                                            <tr>
                                            <th scope="col" style="color: black; font-weight: 500; background-color: #0000001c;">Name</th>
                                            <th scope="col" style="color: black; font-weight: 500; background-color: #0000001c;">Location</th>
                                            <th scope="col" style="color: black; font-weight: 500; background-color: #0000001c;">Login time</th>
                                            <th scope="col" style="color: black; font-weight: 500; background-color: #0000001c;">Logout time</th>
                                            <th scope="col" style="color: black; font-weight: 500; background-color: #0000001c;">Break</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $employeeId => $employeeData)
                                                @foreach ($employeeData['activities'] as $activity)
                                                <tr>
                                                        <td>{{ $activity['name']}}</td>
                                                        <td>
                                                            <a target="_blank" href="https://www.google.com/maps?q={{ $activity['lat'] }},{{ $activity['lng'] }}">
                                                                {{ $activity['lat'] }}, {{ $activity['lng'] }}
                                                            </a>
                                                        </td>
                                                        <td>{{ $activity['startTime']->format('d-m-Y H:i:s') }}</td>
                                                        <td>{{ $activity['endTime'] ? $activity['endTime']->format('d-m-Y H:i:s') : '' }}</td>
                                                        <td>{{ $activity['totalBreakTime'] }} minutes</td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                        </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->


@include('admin.component.footer')


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script>
    window.onload = function() {
        // Category Inventory Pie Chart
        var categoryInventoryChart = new CanvasJS.Chart("categoryInventoryChart", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "Inventory by Category"
            },
            data: [{
                type: "doughnut",
                yValueFormatString: "#,##0.## items",
                indexLabel: "{label} ({y})",
                dataPoints: [
                    @foreach($categoryInventory as $data)
                    { label: "{{ $data->category->name }}", y: {{ $data->total }} },
                    @endforeach
                ]
            }]
        });

        // Branch Inventory Pie Chart
        var branchInventoryChart = new CanvasJS.Chart("branchInventoryChart", {
            animationEnabled: true,
            theme: "light1",
            title:{
                text: "Inventory by Branch"
            },
            data: [{
                type: "pie",
                yValueFormatString: "#,##0.## items",
                indexLabel: "{label} ({y})",
                dataPoints: [
                    @foreach($branchInventory as $data)
                    { label: "{{ $data->branch->name }}", y: {{ $data->total }} },
                    @endforeach
                ]
            }]
        });


        var branchchart = new CanvasJS.Chart("branchSalesChart", {
            animationEnabled: true,
            theme: "light2",
            title:{
                text: "Total Sales and Quantity Sold by Branch"
            },
            axisX: {
                title: "Branches"
            },
            axisY: [{
                title: "Total Sales (USD)",
                beginAtZero: true
            },{
                title: "Total Quantity Sold",
                beginAtZero: true,
                opposite: true
            }],
            data: [{
                type: "column",
                name: "Total Sales",
                showInLegend: true,
                yValueFormatString: "$#,##0",
                dataPoints: [
                    @foreach($branchNames as $index => $branchName)
                        { label: "{{ $branchName }}", y: {{ $totalSales[$index] }} },
                    @endforeach
                ]
            },{
                type: "line",  // This could also be "spline", "column", etc.
                name: "Total Quantity Sold",
                axisYType: "secondary",
                showInLegend: true,
                yValueFormatString: "#,##0 units",
                dataPoints: [
                    @foreach($branchNames as $index => $branchName)
                        { label: "{{ $branchName }}", y: {{ $totalQuantities[$index] }} },
                    @endforeach
                ]
            }]
        });


        var categorySalesChart = new CanvasJS.Chart("categorySalesChart", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "Total Quantity Sold by Category"
            },
            axisX: {
                title: "Categories"
            },
            axisY: {
                title: "Total Quantity Sold",
                beginAtZero: true
            },
            data: [{
                type: "area",
                yValueFormatString: "#,##0 items",
                indexLabel: "{y}",
                dataPoints: [
                    @foreach($categorySalesData as $data)
                    { label: "{{ $data->category_name }}", y: {{ $data->total_quantity_sold }} },
                    @endforeach
                ]
            }]
        });


        categorySalesChart.render();
        branchchart.render();
        categoryInventoryChart.render();
        branchInventoryChart.render();
    }
</script>
