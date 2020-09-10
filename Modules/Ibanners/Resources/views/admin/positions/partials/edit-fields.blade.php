<div class='form-group{{ $errors->has('name') ? ' has-error' : '' }}'>
    {!! Form::label('name', trans('ibanners::position.form.name')) !!}
    {!! Form::text('name', old('name', $position->name), ['class' => 'form-control', 'placeholder' => trans('ibanners::position.form.name')]) !!}
    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
</div>

<div class='form-group{{ $errors->has('system_name') ? ' has-error' : '' }}'>
    {!! Form::label('system_name', trans('ibanners::position.form.system name')) !!}
    {!! Form::text('system_name', old('system_name', $position->system_name), ['class' => 'form-control', 'placeholder' => trans('ibanners::position.form.system name')]) !!}
    {!! $errors->first('System Name', '<span class="help-block">:message</span>') !!}
</div>

<div class="checkbox">
    <label for="active">
        <input id="active"
               name="active"
               type="checkbox"
               class="flat-blue"
               {{ (empty(old('active', $position->active))) ?: 'checked' }}
               value="1" />
        {{ trans('ibanners::position.form.active') }}
    </label>
</div>
