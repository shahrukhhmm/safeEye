@include('admin.component.header')
@include('admin.component.topnav')
@include('admin.component.navbar')

<div class="content-body">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-uppercase">{{ __('SE.all_zakat_records') }}</h4>

                        @if($zakatRecords->isNotEmpty())
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th>{{ __('SE.year') }}</th>
                                        <th>{{ __('SE.total_income') }}</th>
                                        <th>{{ __('SE.total_zakat') }} (2.5%)</th>
                                        <th>{{ __('SE.zakat') }}</th>
                                        <th>{{ __('SE.details') }}</th>
                                        <th>{{ __('SE.action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($zakatRecords as $zakatRecord)
                                        <tr>
                                            <td>{{ $zakatRecord->year }}</td>
                                            <td>{{ number_format($zakatRecord->total_income, 2) }}</td>
                                            <td>{{ number_format($zakatRecord->zakat_amount, 2) }}</td>
                                            <td>{{ ucfirst($zakatRecord->status) }}</td>
                                            <td>
                                                <!-- Button to trigger modal with branch details -->
                                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#detailsModal{{ $zakatRecord->id }}">
                                                    {{ __('SE.view_details') }}
                                                </button>

                                                <!-- Modal for branch details -->
                                                <div class="modal fade" id="detailsModal{{ $zakatRecord->id }}" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="detailsModalLabel">  {{ __('SE.branch_details_for_year') }} {{ $zakatRecord->year }}</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                @php
                                                                    $branchData = json_decode($zakatRecord->branch_data, true);
                                                                @endphp
                                                                @if($branchData)
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>  {{ __('SE.branch_name') }}</th>
                                                                                <th>{{ __('SE.total_inventory') }}</th>
                                                                                <th>{{ __('SE.total_price') }}</th>
                                                                                <th>{{ __('SE.zakat') }} (2.5%)</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach($branchData as $data)
                                                                                <tr>
                                                                                    <td>{{ $data['branch_name'] }}</td>
                                                                                    <td>{{ $data['total_inventory'] }}</td>
                                                                                    <td>{{ number_format($data['total_price'], 2) }}</td>
                                                                                    <td>{{ number_format($data['zakat'], 2) }}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                @else
                                                                    <p>{{ __('SE.    no_branch_data_available') }}</p>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.zakat.edit', $zakatRecord->id) }}" class="btn btn-primary">
                                                    {{ __('SE.update_status') }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>{{ __('SE.no_zakat_records_found') }}</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.component.footer')
