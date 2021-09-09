<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre del Paciente') }}
            <input class="form-control" id="pacient" name="pacient" type="text" placeholder="{{ Auth::user()->name }}" aria-label="default input example"  readonly="readonly" >
            {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id del Paciente:') }}
            <input class="form-control" id="paciente_id" name="paciente_id" type="text" placeholder="{{ Auth::user()->name }}" aria-label="default input example"  readonly="readonly" value={{ $pacient->id }} >
            {!! $errors->first('paciente_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            <label>Especialidad</label>
            <br>
            <select name="especialidad_id"  required="required">
            <br>
                @foreach($especialidads as $especialidad)

                        <option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option> 
                
                @endforeach 
            
            </select>
        </div>
        
        <div class="form-group">
            <label>Doctor</label>
            <br>
            <select name="doctor_id"  required="required">
            <br>
                
                    @foreach($docespes as $docespe)
                      
                            <option value="{{$docespe->doctor_id}}">{{$docespe->name}}</option> 
                        
                    @endforeach
                
            
            </select>
        </div>

        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $appointment->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('fecha y hora') }}
            <input type="datetime-local" class="form-control" name="fecha_hora" placeholder="fecha_hora" required="required" value={{$appointment->fecha_hora}}>
            
            {!! $errors->first('fecha_hora', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>