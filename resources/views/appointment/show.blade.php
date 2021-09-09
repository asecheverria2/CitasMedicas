<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Appointment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('appointments.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Paciente Id:</strong>
                            {{ $appointment->paciente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Doctor Id:</strong>
                            {{ $appointment->doctor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad Id:</strong>
                            {{ $appointment->especialidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $appointment->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Hora:</strong>
                            {{ $appointment->fecha_hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
