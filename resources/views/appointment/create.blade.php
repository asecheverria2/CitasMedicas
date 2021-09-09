<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Cita</span>
                    </div>
                    <br>
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

                    </div>

                    @if (isset($_GET['submit'])) 
                    <div class="card-body">
                        <form method="POST" action="{{ route('appointments.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('appointment.form')

                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
