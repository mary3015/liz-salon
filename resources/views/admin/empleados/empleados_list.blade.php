@extends('layout')

@section('content'  )
<div class="" >

    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2><font color="white">Lista de empleados <a href="{{route('empleados.create')}}" class="btn btn-primary btn"><i class="fa fa-plus"></i>Nuevo </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content text-center " >
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                                <th>Email</th>                                
                                <th>Contraseña</th>
                                <th>Acción</th>
                            
                            </tr>
                        </thead>
                           <tbody>
                            @if (count($empleado))
                            @foreach($empleado as $row)
                            <tr>
                                <td>{{$row->documento}}</td>
                                <td>{{$row->nombre}}</td>
                                <td>{{$row->apellido}}</td>
                                <td>{{$row->direccion}}</td>
                                <td>{{$row->telefono}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->contrasena}}</td>
                                <td>
                                   <a href="{{ route('empleados.edit', ['id' => $row->documento]) }}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> Editar </a></i> </a>
                                   <a href="{{ route('empleados.show', ['id' => $row->documento]) }}" class="btn btn-danger btn-xs"><i class="fa fa-chevron-left"></i> Eliminar </a></i> </a>
                               </td
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop