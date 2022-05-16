@extends('layouts.general')

@push('css')

@endpush

@section('title_page','Categoría')

@section('content_page')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
<div class="container shadow p-3 mb-5 bg-body rounded">
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <a class="btn btn-primary btn-sm" href="{{route('categories.create')}}">Crear nueva categoría</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td width="10px">
                                    <a href="{{route('categories.edit', $category)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <form action="{{route('categories.destroy', $category)}}" method="POST"
                                    onsubmit="return confirm('¿Estas seguro de eliminar esta categoría?')">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Sin registros</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush
