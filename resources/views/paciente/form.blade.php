<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Id Paciente') }}
            <input class="form-control" id="usuario_id" name="usuario_id" type="text" placeholder="{{ Auth::user()->name }}" aria-label="default input example"  readonly="readonly" value={{ Auth::user()->id }} >
            {!! $errors->first('usuario_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cédula') }}
            {{ Form::number('cedula', $paciente->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('direccion', $paciente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        {{ Form::label('Sexo') }}
        <div class="form-check">
                    <input class="form-check-input" type="radio" value=1 name="sexo" id="sexo">
                    <label class="form-check-label" for="sexo">
                        Masculino    
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value=2 name="sexo" id="sexo" checked>
                    <label class="form-check-label" for="sexo">
                        Femenino
                    </label>
                </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::number('edad', $paciente->edad, ['class' => 'form-control' . ($errors->has('edad') ? ' is-invalid' : ''), 'placeholder' => 'Edad']) }}
            {!! $errors->first('edad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha de Nacimiento') }}
            <input type="date" class="form-control" name="fecha_nacimiento" placeholder="Fecha Nacimiento" required="required" value="{{old('fecha_nacimiento')}}">
            
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $paciente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>