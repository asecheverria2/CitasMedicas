<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Paciente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pacientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $paciente->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $paciente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $paciente->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $paciente->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $paciente->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $paciente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $paciente->usuario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
