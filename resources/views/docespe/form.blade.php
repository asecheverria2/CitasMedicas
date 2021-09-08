<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            <label>Doctor</label>
            <br>
            <select name="doctor_id"  required="required">
            <br>
                @foreach($doctores as $doctor)

                        <option value="{{$doctor->id}}">{{$doctor->user->name}}</option> 
                
                @endforeach
            
            </select>
        </div>
        <div class="form-group">
            <label>Especialidad</label>
            <br>
            <select name="especialidad_id"  required="required">
            <br>
                @foreach($especialidades as $especialidad)

                        <option value="{{$especialidad->id}}">{{$especialidad->nombre}}</option> 
                
                @endforeach
            
            </select>
        </div>
        

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>