<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Ingrese el nombre de una vacante">
    </div>

    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha límite</th>
                    <th colspan="2"></th>
                </tr>
            </thead>

            <tbody>
                @foreach($vacancies as $vacancy)
                <tr>
                    <td>{{$vacancy->name}}</td>
                    <td>{{$vacancy->description}}</td>
                    <td>{{$vacancy->end}}</td>
                    <!-- <td>$vacancy-></td> -->


                    <td width="10px">
                        <a class="btn btn-primary btn-sm" href="{{route('admin.vacancies.edit', $vacancy)}}">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.vacancies.destroy', $vacancy)}}" method="POST">
                            <!-- Token -->
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{-- para usar la paginación --}}
    @if ($vacancies->count())
    <div class="div card-footer">
        {{$vacancies->links()}}
    </div>
    @else
    <div class="card-body">
        <strong>No existen registros</strong>
    </div>
    @endif
</div>