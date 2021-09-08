<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Doctor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('doctors.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $doctor->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $doctor->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $doctor->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $doctor->usuario_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
