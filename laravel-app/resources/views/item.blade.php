@extends('layouts.main')

@section('title', "Listado de items")

@section('content')
    <a class="btn btn-success" href="{{ route('items.create') }}"> Crear un nuevo item</a>
    <div class="row">
        <table class="table table-bordered border-primary">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Unidad</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Importe materiales</th>
                    <th scope="col">Importe mano de obra</th>
                    <th scope="col">Total</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($items as $item)
                <tr>
                    <th>{{ $item->item }}</th>
                    <td>{{ $item->unidad }}</td>    
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->importe_materiales }}</td>
                    <td>{{ $item->importe_mano_obra }}</td>
                    <td>{{ $item->total }}</td>
                    <td><a class="btn btn-primary" href="{{ route('item.show', $item->id) }}">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>   
    </div>
@endsection