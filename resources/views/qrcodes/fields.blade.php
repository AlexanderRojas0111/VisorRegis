<!-- User Id Field -->
{!! Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control', 'required',]) !!}

<!-- Webside Field -->
<div class="form-group col-sm-6">
   {!! Form::label('webside', 'Webside:') !!}
    {!! Form::text('webside', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255, 'placeholder' => 'https://']) !!}
</div>

<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Product Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_name', 'Product Name:') !!}
    {!! Form::text('product_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Product Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_url', 'Product Url:') !!}
    {!! Form::text('product_url', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Product Urlimagepath Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_urlImagePath', 'Product Urlimagepath:') !!}
    {!! Form::file('product_urlImagePath', null, ['class' => 'form-control-file', 'accept'=>'jpg, .png', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Callback Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    {!! Form::text('callback_url', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Qrcode Path Field -->
{{--<div class="form-group col-sm-6">
    {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
    {!! Form::text('qrcode_path', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>--}}

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control', 'required']) !!}
</div>