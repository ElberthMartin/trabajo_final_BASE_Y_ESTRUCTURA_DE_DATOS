
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
    <label class="form-label">   {{ Form::label('cantidad') }}</label>
    <div>
        {{ Form::text('cantidad', $ventum->cantidad, ['class' => 'form-control' .
        ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'cantidad']) }}
        {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">ventum <b>cantidad</b> instruction.</small>
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
