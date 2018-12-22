@extends('menu.menulist')
@section('titulo1list', 'FORMULARIO')
@section('titulo2list', 'DE APROBACION')
@section('contentlist')

 {!!Form::model($proyecto,['route'=>  ['proyecto.show',$proyecto->id],'method'=>'POST','files'=> true])!!}
<p>UNIVERSIDAD MAYOR DE SAN SIMÓN  
FACULTAD DE CIENCIAS Y TECNOLOGÍA
</p>
<h1 class="text-center"><strong>FORMULARIO APROBACIÓN TEMA DE PROYECTO FINAL</strong><br/></h1>
<p class="text-right"><strong>SELLO<br/> No.... </strong> 
<p><strong>Nombre Estudiante:</strong>&nbsp;&nbsp;{{ $proyecto -> estudiante->pluck('full_name', 'id')->implode(' ')}}<br/></p>
<p><strong>Tutor:</strong>&nbsp;&nbsp; 
	@foreach ($proyecto->estudiante as $e)
          @foreach ($e->profesional as $p)
              {{ $p->NOM_PROF.' '.$p->AP_PAT_PROF.' '.$p->AP_MAT_PROF.'' }}
          @endforeach
          @endforeach</p>
<p><strong>Carrera:</strong>&nbsp;&nbsp;{{$proyecto -> carrera -> NOM_CARRERA}}</p>
<p><strong>Gestion de Aprobacion:</strong>&nbsp;&nbsp;{{$proyecto -> GESTION_LIMITE}}</p>
<table style="border-collapse: collapse;" border="1" width="100%">
<tr>	
<td height="40" rowspan="1"><strong>Titulo:&nbsp;&nbsp;</strong>{{$proyecto -> TITULO_PERFIL}}</td></tr>
<tr>
<td height="40"><strong>Modalidad:</strong>&nbsp;&nbsp;{{$proyecto -> modalidad -> NOM}}</td>
</tr>	
<td height="40"><strong>Area:</strong>&nbsp;&nbsp;{{ $proyecto -> area -> NOMBRE_AREA }}</td>
</tr>	
<tr>
<td height="60"><strong>Objetivo General:</strong>&nbsp;&nbsp;{{$proyecto->OBJ_GRAL}}</td></tr>
<tr> 
<td height="80"><strong>Objetivo Especificos:</strong>&nbsp;&nbsp;{{$proyecto->OBJ_ESP}}</td></tr> 
<tr>
<td height="80"><strong>Descripcion:</strong>&nbsp;&nbsp;{{$proyecto->DESCRIPCION}}</td> </tr>
</table>
	



</table>
<table style="border-collapse: collapse;" border="1" width="100%">	
<tr>	
<td height="40" rowspan="3"> </td></tr>
</tr>
<tr>	
<td height="40" rowspan="3"> </td></tr>
<td height="40" rowspan="3"> </td></tr>  

<table style="border-collapse: collapse;" border="1" width="100%">	
<tr>	
<td height="40" rowspan="3"><strong>Director de Carrera:</strong>&nbsp;&nbsp; Lic Henry Villarroel </td></tr>
</tr>
<tr>	
<td height="40" rowspan="3"><strong>Tutor:</strong>&nbsp;&nbsp; 
	@foreach ($proyecto->estudiante as $e)
          @foreach ($e->profesional as $p)
              {{ $p->NOM_PROF.' '.$p->AP_PAT_PROF.' '.$p->AP_MAT_PROF.'' }}
          @endforeach
          @endforeach    </td></tr>
<td height="40" rowspan="3"><strong>Estudiante:</strong>&nbsp;&nbsp;{{ $proyecto -> estudiante->pluck('full_name', 'id')->implode(' ')}} </td></tr>

<table style="border-collapse: collapse;" border="1" width="100%">	
<tr>	
<td height="40" rowspan="2">Registrador por:&nbsp;&nbsp;admi</td></tr>
</tr>
<tr>	
<td height="40" >Fecha:&nbsp;&nbsp;     </td></tr>
</tr>
</table>    

        
</table>
<!--
<p>
Procedimiento:<br/>
1. El estudiante llena el formulario (formato digital) e imprime dos originales<br/>
2. El responsable (dependiendo de la modalidad puede ser el docente de la materia o encargado de
trabajos dirigidos) revisa los formularios impresos, verificando que se llenaron de forma correcta<br/>
3. El estudiante firma los formularios<br/>
4. El tutor revisa los formularios y los firma (El tutor es quien aprueba con el VoBo del revisor y el
docente de la materia)<br/>
5. El responsable firma los formularios<br/>
6. El director de carrera firma los formularios<br/>
7. El estudiante presenta ambos formularios al encargado de registrar la aprobación de tema de
proyecto final, junto con una copia digital del formulario aprobado y firmado<br/>
8. El encargado de registrar la aprobación, firma y sella ambos formularios, carga el formulario en el
sistema y devuelve uno de los originales al estudiante<br/>
9. El estudiante entrega una copia del formulario con todas las firmas y sellos al responsable (docente
o encargado de trabajos dirigidos)<br/>
Observaciones:<br/>
1. La vigencia del proyecto es de dos gestiones semestrales computables a partir de la gestión siguiente
a la gestión de aprobación impresa en el formularios<br/>
2. El tutor es quien aprueba (con su firma en el formulario) el tema de proyecto final con el VoBo del
revisor y el docente de la materia<br/>
3. Si el formulario se llena por cambio de tema verificar:<br/>
• Si el tema anterior era un trabajo dirigido, el estudiante no puede optar por otro trabajo
dirigido en el nuevo tema<br/>
• Si el estudiante ya cambió anteriormente de tema, no puede cambiar por tercera vez su
propuesta de tema (de acuerdo a reglamento vigente)<br/>
</p> -->


{!!Form::close()!!}


@stop