<!-- Name Field -->
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Text', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('text', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('name') }}
        </span>
    </div>
</div>

<!-- Email Field -->
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Body', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::textArea('body', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('email') }}
        </span>
    </div>
</div>

<!-- Email Field -->
<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    {!! Form::label('email', 'Due', ['class' => 'col-sm-3 control-label']) !!}
    <div class="col-sm-6">
        {!! Form::text('due', null, ['class' => 'form-control']) !!}
        <span class="help-block text-danger">
            {{ $errors -> first('email') }}
        </span>
    </div>
</div>

<div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
</div>
