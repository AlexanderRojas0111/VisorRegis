<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $qrcode->user_id }}</p>
</div>

<!-- Webside Field -->
<div class="col-sm-12">
    {!! Form::label('webside', 'Webside:') !!}
    <p>{{ $qrcode->webside }}</p>
</div>

<!-- Company Name Field -->
<div class="col-sm-12">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $qrcode->company_name }}</p>
</div>

<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $qrcode->product_name }}</p>
</div>

<!-- Product Url Field -->
<div class="col-sm-12">
    {!! Form::label('product_url', 'Product Url:') !!}
    <p>{{ $qrcode->product_url }}</p>
</div>

<!-- Product Urlimagepath Field -->
<div class="col-sm-12">
    {!! Form::label('product_urlImagePath', 'Product Urlimagepath:') !!}
    <p><img src="{{ asset($qrcode->product_urlImagePath) }}" width="30%"  ></p>
</div>

<!-- Callback Url Field -->
<div class="col-sm-12">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    <p>{{ $qrcode->callback_url }}</p>
</div>

<!-- Qrcode Path Field -->
<div class="col-sm-12">
    {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
    <p><img src="{{ asset($qrcode->qrcode_path) }}" width="20%"></p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $qrcode->amount }}</p>
</div>

