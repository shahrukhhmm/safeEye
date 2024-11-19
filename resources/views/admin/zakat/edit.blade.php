@include('admin.component.header')
@include('admin.component.topnav')
@include('admin.component.navbar')

<div class="content-body">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-uppercase">{{ __('SE.update_zakat_status') }}</h4>

                        <form action="{{ route('admin.zakat.update', $zakatRecord->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="status">{{ __('SE.zakat_payment_status') }}</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="unpaid" {{ $zakatRecord->status == 'unpaid' ? 'selected' : '' }}>{{ __('SE.unpaid') }}</option>
                                    <option value="paid" {{ $zakatRecord->status == 'paid' ? 'selected' : '' }}>{{ __('SE.paid') }}</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">{{ __('SE.submit') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.component.footer')
