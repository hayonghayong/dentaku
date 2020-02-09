@extends('layouts.app')
@section('content')
<div class="ichiran">
<p class="title">登録物品一覧</p>
<table class="table table-striped task-table" id="table">
<tbody>
@foreach ($goods as $good)
<tr>
<td class="table-text">
<div class="allText"id='{{ $good->weight }}'> {{ $good->name }}
</div> 
</td>

<!-- 更新ボタン -->
<td>
<form action="{{ url('goodsedit/'.$good->id) }}" method="POST"> {{ csrf_field() }}
<button type="submit" class="update">
更新 
</button>
</form>
</td>

<!--削除ボタン --> 
<td>
<form action="{{ url('good/'.$good->id) }}" method="POST"> {{ csrf_field() }}
{{ method_field('DELETE') }}
<button type="submit" class="danger"> 削除
</button>
</form>
</td> 
</tr>
@endforeach
</tbody> 
</table>
<a class="btn btn-link pull-right" href="{{ url('/') }}"> トップページに戻る
</a> 
</div>
@endsection