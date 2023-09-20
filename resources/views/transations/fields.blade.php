<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Qrcode Ower Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qrcode_ower_id', 'Qrcode Ower Id:') !!}
    {!! Form::text('qrcode_ower_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Qrcode Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qrcode_id', 'Qrcode Id:') !!}
    {!! Form::text('qrcode_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Payment Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    {!! Form::text('payment_method', null, ['class' => 'form-control','maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::text('message', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::text('amount', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>