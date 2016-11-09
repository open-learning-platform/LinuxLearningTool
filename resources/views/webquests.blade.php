@extends('master')
@section('content')

<div class="panel panel-default">
  <div class="panel-heading"><b>Webquests</b></div>
  <div class="panel-body">
    <table class="table">
      <tr>
        <th>Themen</th>
      </tr>
      @foreach ($webquests as $webquest)
      <tr>
        <td>{{ $webquest->thema }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>

@stop
