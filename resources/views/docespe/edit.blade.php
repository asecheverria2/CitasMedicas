<x-app-layout>)
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('docespes.update', $docespe->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('docespe.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
