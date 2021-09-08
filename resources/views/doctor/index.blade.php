<x-app-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Doctor') }}. {{ Auth::user()->name }} 
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
                                        
										<th>Cedula</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Usuario Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($doctors as $doctor)
                                        @if($doctor->usuario_id==Auth::user()->id)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                
                                                <td>{{ $doctor->cedula }}</td>
                                                <td>{{ $doctor->direccion }}</td>
                                                <td>{{ $doctor->telefono }}</td>
                                                <td>{{ $doctor->usuario_id }}</td>

                                                <td>
                                                    <form action="{{ route('doctors.destroy',$doctor->id) }}" method="POST">
                                                        
                                                        <a class="btn btn-sm btn-success" href="{{ route('doctors.edit',$doctor->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                        
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    @if($i!=1)
                                        <a class="btn btn-sm btn-success" href="{{ route('doctors.create') }}"><i class="fa fa-fw fa-edit"></i> Ingresa tus datos</a>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $doctors->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
