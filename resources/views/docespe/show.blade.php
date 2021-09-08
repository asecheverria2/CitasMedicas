<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Especialidad y doctores</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docespes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Doctor Id:</strong>
                            {{ $docespe->doctor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Especialidad Id:</strong>
                            {{ $docespe->especialidad_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
