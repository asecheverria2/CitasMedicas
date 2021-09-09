<x-app-layout>
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Cita</span>
                    </div>
                    <div class="card-body">
                        <form method="GET" action=" ">
                        <div class="form-group">
                            
                                <label>Especialidad</label>
                                <br>
                                <select name="select2"  required="required">
                                <br>
                                    @foreach($especialidades as $especialidad)
                                        @if(isset($select)&&($select==$especialidad->id))
                                            <option value="{{$id=$especialidad->id}}"selected>{{$especialidad->nombre}}</option> 
                                        @else
                                            <option value="{{$id=$especialidad->id}}">{{$especialidad->nombre}}</option>
                                        @endif
                                    
                                    @endforeach
                                
                                </select>
                            
                        </div>
                        <br>
                        <button  class="btn btn-success"  name='submit' type="submit" value="Act">Continuar</button>
                        </form>
                    <div class="card-body">
                        <form method="POST" action="{{ route('appointments.update', $appointment->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('appointment.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
