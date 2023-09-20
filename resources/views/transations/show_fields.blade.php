<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $transation->user_id }}</p>
</div>

<!-- Qrcode Ower Id Field -->
<div class="col-sm-12">
    {!! Form::label('qrcode_ower_id', 'Qrcode Ower Id:') !!}
    <p>{{ $transation->qrcode_ower_id }}</p>
</div>

<!-- Qrcode Id Field -->
<div class="col-sm-12">
    {!! Form::label('qrcode_id', 'Qrcode Id:') !!}
    <p>{{ $transation->qrcode_id }}</p>
</div>

<!-- Payment Method Field -->
<div class="col-sm-12">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{{ $transation->payment_method }}</p>
</div>

<!-- Message Field -->
<div class="col-sm-12">
    {!! Form::label('message', 'Message:') !!}
    <p>{{ $transation->message }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $transation->amount }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $transation->status }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $transation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $transation->updated_at }}</p>
</div>

