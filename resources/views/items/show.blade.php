@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-6">
        <form action="{{ route('items.update', $item) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-header">
                    <h3>{{ $item->item }}</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Item</label>
                        <input type="text" class="form-control" name="item" value="{{ $item->item }}">
                    </div>
                    <div class="form-group">
                        <label for="">Cantidad</label>
                        <input type="text" class="form-control" name="cantidad" value="{{ $item->cantidad }}">
                    </div>
                    <div class="form-group">
                        <label for="">Unidad</label>
                        <input type="text" class="form-control" name="unidad" value="{{ $item->unidad }}">
                    </div>
                    <div class="form-group">
                        <label for="">Costo materiales</label>
                        <input type="text" class="form-control" name="importe_materiales" value="{{ $item->importe_materiales }}">
                    </div>
                    <div class="form-group">
                        <label for="">Costo mano de obra</label>
                        <input type="text" class="form-control" name="importe_mano_obra" value="{{ 
                    $item->importe_mano_obra }}">
                    </div>
                    <div class="form-group">
                        <label for="">Total</label>
                        <input type="text" class="form-control" name="total" value="{{ $item->total }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-block btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection