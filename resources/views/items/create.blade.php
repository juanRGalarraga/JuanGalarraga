@extends('layouts.main')
@section('title', "Crear un nuevo item")
@section('content') 
<div class="row justify-content-center">
    <div class="col-6">
        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Crear un nuevo item</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Item</label>
                        <input type="text" class="form-control" name="item">
                    </div>
                    <div class="form-group">
                        <label for="">Cantidad</label>
                        <input type="number" class="form-control" name="cantidad">
                    </div>
                    <div class="form-group">
                        <label for="">Unidad</label>
                        <input type="text" class="form-control" name="unidad">
                    </div>
                    <div class="form-group">
                        <label for="">Costo materiales</label>
                        <input type="number" class="form-control" name="importe_materiales">
                    </div>
                    <div class="form-group">
                        <label for="">Costo mano de obra</label>
                        <input type="number" class="form-control" name="importe_mano_obra">
                    </div>
                    <div class="form-group">
                        <label for="">Total</label>
                        <input type="number" class="form-control" name="total">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-block btn-success" type="submit">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection