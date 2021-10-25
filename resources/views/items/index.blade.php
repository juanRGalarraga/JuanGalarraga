@extends('layouts.main')

@section('title', "Listado de items")

@section('content')
    <div class="row">
        <a class="btn btn-success" href="{{ route('items.create') }}"/> Crear un nuevo item</a>

        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Item</th>
                    <th scope="col">Unidad</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Importe materiales</th>
                    <th scope="col">Importe mano de obra</th>
                    <th scope="col">Total</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <th>{{ $item->id }}</th>
                    <th>{{ $item->item }}</th>
                    <td>{{ $item->unidad }}</td>    
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->importe_materiales }}</td>
                    <td>{{ $item->importe_mano_obra }}</td>
                    <td>{{ $item->total }}</td>
                    <td>
                        <form action="{{ route('items.delete',$item) }}" method="POST">   
                            <a class="btn btn-info" href="{{ route('items.show',$item) }}">Mostrar</a>    
                            @csrf
                            @method('DELETE')      
                            <button type="submit" class="btn btn-danger">Borrar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
@endsection