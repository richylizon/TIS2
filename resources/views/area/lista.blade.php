@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE AREAS')
@section('contentlist')

<body bgcolor="#FFFFFF" text="#000000">
<p>
{!! Form::open(['route'=>'area.index','method'=>'GET','data-parsley-validate'=>"",'class'=>'card card-sm']) !!}
<input type="text" name="NOMBRE_AREA" id="tt" class='form-control form-control-lg form-control-borderless'data-parsley-pattern="^[a-zA-Z ]+$" placeholder="Buscar Area">
{!! Form::submit('Buscar', ['class'=>'btn btn-lg btn-warning btn_White']) !!}
{!! Form::submit('Resaltar', ['class'=>'btn btn-lg btn-warning btn_White','onclick' => 'resaltar()']) !!}
<span id="aa"> </span></p>
<p> 

<!--
<div class="row justify-content-center">
  <div class="col-12">
      {!! Form::open(['route'=>'area.index','method'=>'GET','data-parsley-validate'=>"",'class'=>'card card-sm']) !!}
        <div class="card-body row no-gutters align-items-center">
            <div class="col">
              {!! Form::text('NOMBRE_AREA', null, ['class'=>'form-control form-control-lg form-control-borderless', 'data-parsley-pattern'=>"^[a-zA-Z ]+$",'placeholder'=>"Buscar Area"]) !!}
            </div>
            <div class="col-auto">
             {!! Form::submit('Buscar', ['class'=>'btn btn-lg btn-warning btn_White']) !!}
             'onclick' => 'resaltar()']
            </div>-->
            <!--end of col-->
   <!--     </div>
      {!! Form::close() !!}
  </div>

</div>-->

<div class="table-responsive">
<table id="mytable" class="table table-bordered table-striped">
    <thead class="thead-light">
      <tr>
          <th scope="col">Codigo</th>
          <th scope="col">Nombre</th>
          <th scope="col">Descripcion</th>
          <th></th>
          <th></th>          
          <th scope="col">
            <div class="text-center">
              <h3>
                <a href='{{ route('area.create')}}' data-toggle="tooltip" data-placement="right" title="Registar">
                  <i class="fas fa-plus-square btn-warning" aria-hidden="true" ></i>
                </a>
              </h3>
            </div>
          </th>
        </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
      <tr>
        <td>{{ $area -> id}} </td>
        <td>{{ $area -> NOMBRE_AREA}} </td>
        <td>{{ $area -> DESC_AREA}} </td>

 </p>
<p></p>        
        <td>
            <div class="text-center">
              <h4>
                <a href='{{ route('area.edit',$area->id)}}' data-toggle="tooltip" data-placement="right" title="Editar">
                  <i class="fas fa-pencil-alt btn-warning"aria-hidden="true"></i>
                </a>
              </h4>
            </div>
        </td>
        <td>
            <div class="text-center">
              <h4>
                <a href='{{ route('subarea.recibe',$area->id) }}' data-toggle="tooltip" data-placement="right" title="Registar Subarea">
                  <i class="fas fa-plus-square btn-warning" aria-hidden="true"></i>
                </a>
              </h4>
            </div>
        </td>
        <td>
            <div class="text-center">
                <h4>
                  <a href='{{ url('area/ocultar',$area->id)}}' onclick="return confirm('¿Esta seguro de eliminar esta Area?')" data-toggle="tooltip" data-placement="right" title="Eliminar">
                      <i class="fas fa-trash-alt btn-warning" aria-hidden="true"></i>
                  </a>
              </h4>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
{!!$areas->render("pagination::bootstrap-4")!!}


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

