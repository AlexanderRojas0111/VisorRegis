<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="transations-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Qrcode Ower Id</th>
                <th>Qrcode Id</th>
                <th>Payment Method</th>
                <th>Message</th>
                <th>Amount</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($transations as $transation)
                <tr>
                    <td>{{ $transation->user_id }}</td>
                    <td>{{ $transation->qrcode_ower_id }}</td>
                    <td>{{ $transation->qrcode_id }}</td>
                    <td>{{ $transation->payment_method }}</td>
                    <td>{{ $transation->message }}</td>
                    <td>{{ $transation->amount }}</td>
                    <td>{{ $transation->status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['transations.destroy', $transation->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('transations.show', [$transation->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('transations.edit', [$transation->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $transations])
        </div>
    </div>
</div>
