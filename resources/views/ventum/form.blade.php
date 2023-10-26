
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('product_id') }}</label>
    <div>
        {{ Form::text('product_id', $ventum->product_id, ['class' => 'form-control' .
        ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Product Id']) }}
        {!! $errors->first('product_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">ventum <b>product_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('cantidda') }}</label>
    <div>
        {{ Form::text('cantidda', $ventum->cantidda, ['class' => 'form-control' .
        ($errors->has('cantidda') ? ' is-invalid' : ''), 'placeholder' => 'Cantidda']) }}
        {!! $errors->first('cantidda', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">ventum <b>cantidda</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('fecha_venta') }}</label>
    <div>
        {{ Form::text('fecha_venta', $ventum->fecha_venta, ['class' => 'form-control' .
        ($errors->has('fecha_venta') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Venta']) }}
        {!! $errors->first('fecha_venta', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">ventum <b>fecha_venta</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio_unitario') }}</label>
    <div>
        {{ Form::text('precio_unitario', $ventum->precio_unitario, ['class' => 'form-control' .
        ($errors->has('precio_unitario') ? ' is-invalid' : ''), 'placeholder' => 'Precio Unitario']) }}
        {!! $errors->first('precio_unitario', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">ventum <b>precio_unitario</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
