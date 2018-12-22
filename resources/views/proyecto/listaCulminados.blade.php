@extends('menu.menulist')
@section('titulo1list', 'LISTA')
@section('titulo2list', 'DE PROYECTOS FINALIZADOS')
@section('contentlist')



<div class="table-responsive">
  <table class="table" id="table_id">
    <thead class="thead-light">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Título</th>
        <th scope="col">Estudiante</th>
        <th scope="col">Tutor</th>
        <th scope="col">Tribunal</th>
      </tr>
    </thead>
    <tbody>
      @foreach($proyectos as $proyecto)
      @if ($proyecto->CICLO !='en progreso')
      <tr>
          <td>{{ $proyecto -> id}} </td>
          <td>{{ $proyecto -> TITULO_PERFIL}} </td>
          <td>{{ $proyecto -> estudiante->pluck('full_name', 'id')->implode(' ')}} </td>
          <td>
              @foreach ($proyecto->estudiante as $e)
              @foreach ($e->profesional as $p)
                
                {{-- @if () --}}
                  {{ $p->NOM_PROF.' '.$p->AP_PAT_PROF.' '.$p->AP_MAT_PROF.',' }}

                {{-- @endif --}}
              @endforeach
              @endforeach
            </td>
            <td>
                @foreach ($proyecto->profesional as $tribunal)
                  @if ($tribunal->pivot->motivo_id==1)

                    {{ $tribunal->NOM_PROF.' '.$tribunal->AP_PAT_PROF.' '.$tribunal->AP_MAT_PROF.','}}

                  @endif
                @endforeach
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
</div>
@endsection
