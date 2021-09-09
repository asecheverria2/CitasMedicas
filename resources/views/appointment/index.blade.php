<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Citas Medicas') }}
                            </span>
                            @if(1==Auth::user()->role_id)
                             <div class="float-right">
                                <a href="{{ route('appointments.create',['id' => Auth::user()->id] ) }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva Cita') }}
                                </a>
                              </div>
                            @endif
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
                                        
										<th>Paciente</th>
										<th>Doctor</th>
										<th>Especialidad</th>
										<th>Descripcion</th>
										<th>Fecha Hora</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $appointment->paciente->user->name }}</td>
											<td>{{ $appointment->doctor->user->name }}</td>
											<td>{{ $appointment->especialidad->nombre }}</td>
											<td>{{ $appointment->descripcion }}</td>
											<td>{{ $appointment->fecha_hora }}</td>

                                            <td>
                                                <form action="{{ route('appointments.destroy',$appointment->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('appointments.show',$appointment->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @if(1==Auth::user()->role_id)
                                                    <a class="btn btn-sm btn-success" href="{{ route('appointments.edit',['id' => $appointment->id, 'idPac' => Auth::user()->id]) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endif
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $appointments->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
