@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE PERFILES')
@section('contentlist')


<body bgcolor="#FFFFFF" text="#000000">
<p>
{!! Form::open(['route'=>'proyecto.index','method'=>'GET','data-parsley-validate'=>"",'class'=>'card card-sm']) !!}
<input type="text" name="TITULO_PERFIL" id="tt" class='form-control form-control-lg form-control-borderless'data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Buscar Perfil">
{!! Form::submit('Buscar', ['class'=>'btn btn-lg btn-warning btn_White']) !!}
{!! Form::submit('Resaltar', ['class'=>'btn btn-lg btn-warning btn_White','onclick' => 'resaltar()']) !!}
<span id="aa"> </span></p>
<p> 
<!--
<div class="row justify-content-center">
  <div class="col-12">
      {!! Form::open(['route'=>'proyecto.index','method'=>'GET','data-parsley-validate'=>"",'class'=>'card card-sm']) !!}
        <div class="card-body row no-gutters align-items-center">
            <div class="col">
              {!! Form::text('TITULO_PERFIL', null, ['class'=>'form-control form-control-lg form-control-borderless', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Buscar Perfil"]) !!}
            </div>
            <div class="col-auto">
              {!! Form::submit('Buscar', ['class'=>'btn btn-lg btn-warning btn_White']) !!}
            </div>
            --end of col->
        </div>
      {!! Form::close() !!}
  </div>
  <!--end of col->
</div>-->


<div class="table-responsive">
  <table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Título</th>
        <th scope="col">Estudiante</th>
        <th scope="col">Tutor</th>
        <th scope="col">Carrera</th>
        <th scope="col">Tribunal</th>
        <th scope="col">
          <div class="text-center">
            <h3>
              <a href='{{ route('proyecto.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
              </a>
            </h3>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($proyectos as $proyecto)
      @if ($proyecto->CICLO == 'en progreso')
      <tr>
        <td>{{ $proyecto -> id}}</td>
        <td>
          {{ $proyecto -> TITULO_PERFIL}} 
        </td>
        <td>{{ $proyecto -> estudiante->pluck('full_name', 'id')->implode(' ')}} </td>
        <td>
          @foreach ($proyecto->estudiante as $e)
          @foreach ($e->profesional as $p)
              {{ $p->NOM_PROF.' '.$p->AP_PAT_PROF.' '.$p->AP_MAT_PROF.',' }}
          @endforeach
          @endforeach
        </td>
        <td>
          {{$proyecto -> carrera -> NOM_CARRERA}}
        </td>
        <td>
          @foreach ($proyecto->profesional as $tribunal)

              @if ($tribunal->pivot->motivo_id==1)

                {{ $tribunal->NOM_PROF.' '.$tribunal->AP_PAT_PROF.' '.$tribunal->AP_MAT_PROF.','}}

              @endif

          @endforeach
        </td>
        <td>
          <div class="btn-group">
             <a href='{{ route('proyecto.show',$proyecto->id)}}' class="btn btn-default"> Ver Perfil </a>
             <button type="button" class="btn btn-warning btn_White dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <span class="sr-only">Toggle Dropdown</span>
             </button>
             <div class="dropdown-menu">
               <a href='{{ route('proyecto.edit',$proyecto->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                <i class="fas fa-pencil-alt btn-warning"aria-hidden="true"></i>
              </a>
                
             <!-- <a href='download/formularioPerfil.pdf' download="formularioPerfil.pdf" data-toggle="tooltip" data-placement="right"  title="Descarga Formulario de Aprobacion">
                <i class="fas fa-gavel btn-warning"aria-hidden="true"></i>
              </a>-->

              <!--<a href='{{ route('tribunal.asignar',$proyecto->id) }}' data-toggle="tooltip" data-placement="right" title="Asignar tribunales">
                <i class="fas fa-gavel b/,tn-warning" aria-hidden="true"></i>
              </a>-->
              <a href='{{ route('proyecto.finalizar',$proyecto->id) }}' data-toggle="tooltip" data-placement="right" title="finalizar ciclo">
                <i class="fa fa-clipboard btn-warning" aria-hidden="true"></i>
              </a>
              <a href='{{ url('proyecto/ocultar',$proyecto->id)}}' onclick="return confirm('¿Esta seguro de eliminar este Proyecto?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
                <i class="fas fa-trash-alt btn-warning" aria-hidden="true"></i>
              </a>
             </div>
          </div>
        </td>
      </tr>
      @endif
      @endforeach
    </tbody>
  </table>
</div>
{!!$proyectos->render("pagination::bootstrap-4")!!}

<script>
var texto="";
function resaltar(){
var encontro=0;
var donde=0;
valor=document.getElementById('tt').value;
reemplazar=RegExp(valor,"i");
por="<span style=\u0022background-Color:yellow;\u0022>"+valor+"</span>";
if(texto==""){texto=document.body.innerHTML};
txt=texto.split(">");
for (x=0;x<txt.length;x++){
desde=(txt[x].indexOf("<")!=-1)?txt[x].indexOf("<"):0;
tempP=txt[x].slice(0,desde);
tempU=txt[x].slice(desde);
tempPx=tempP.split(" ");
for(y=0;y<tempPx.length;y++){
if(tempPx[y].search(reemplazar)!=-1){
tempPx[y]=tempPx[y].replace(reemplazar,por);
encontro+=1;
}
}
txt[x]=tempPx.join(" ")+tempU;
}
document.body.innerHTML=txt.join(">");
//alert((encontro==0)?"No se encontro ''"+valor+"''":"Se encontraton "+encontro+" coincidencias");
encontro=null;
donde=null;
}
</script>


</p>
<p></p>          
</div>
</body>

@endsection
