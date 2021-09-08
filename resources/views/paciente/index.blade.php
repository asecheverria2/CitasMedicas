<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Paciente') }}. {{ Auth::user()->name }} 
                            </span>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Cédula</th>
										<th>Dirección</th>
										<th>Sexo</th>
										<th>Edad</th>
										<th>Fecha Nacimiento</th>
										<th>Teléfono</th>
										<th>Usuario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pacientes as $paciente)
                                        @if($paciente->usuario_id==Auth::user()->id)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $paciente->cedula }}</td>
                                                <td>{{ $paciente->direccion }}</td>
                                                @if($paciente->sexo==1)
                                                    <td>Masculino</td>
                                                @else
                                                    <td>Femenino</td>
                                                @endif
                                                <td>{{ $paciente->edad }}</td>
                                                <td>{{ $paciente->fecha_nacimiento }}</td>
                                                <td>{{ $paciente->telefono }}</td>
                                                <td>{{ $paciente->usuario_id }}</td>

                                                <td>
                                                    <form action="{{ route('pacientes.destroy',$paciente->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-success" href="{{ route('pacientes.edit',$paciente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pacientes->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
