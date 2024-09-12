@extends('layouts.main')

@section('hero')
    <div>HERO HOME</div>
@endsection

@section('content')
<table class="table">
@foreach ($trains as $train)
  <tbody>
    <tr>
      <td>{{$train->id}}</td>
      <td>{{$train->azienda}}<</td>
      <td>{{$train->stazione_di_partenza}}</td>
      <td>{{$train->stazione_di_arrivo}}</td>
      <td>{{$train->orario_di_partenza}}</td>
      <td>{{$train->orario_di_arrivo}}</td>
      <td>{{$train->codice_treno}}</td>
      <td>{{$train->numero_carrozze}}</td>
      <td>{{$train->in_orario}}</td>
      <td>{{$train->cancellato}}</td>
      <td>{{$train->created_at}}</td>
      <td>{{$train->updated_at}}</td>

    </tr>
@endforeach
  </tbody>
</table>

@endsection
