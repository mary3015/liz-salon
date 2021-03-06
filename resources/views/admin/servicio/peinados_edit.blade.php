@extends('layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2> <font color="white"><dt> Editar Peinado:   <strong>{{$peinado->nombre}}</strong> <strong>{{$peinado->apellido}}</strong></dt></font></h2>
                   <div class="clearfix"></div>
                </div>
                <div class="x_content">
                              <br />                 
                                </div>   <form method="post" action="{{ route('peinados.update', ['id' => $peinado->id]) }}" data-parsley-validate class="form-horizontal form-label-left">
                            
        
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{$peinado->nombre}}" id="nombre" name="nombre" class="form-control col-md-7 col-xs-12" >
                                @if ($errors->has('nombre'))
                                <span class="help-block">{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="precio">Precio<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" value="{{$peinado->precio}}" id="precio" name="precio" class="form-control col-md-7 col-xs-12">
                                    @if ($errors->has('precio'))
                                    <span class="help-block">{{ $errors->first('precio') }}</span>
                                    @endif
                                </div>
                            </div>


                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop