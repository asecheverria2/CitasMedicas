
<x-app-layout>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Especialidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('especialidads.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $especialidad->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $especialidad->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
