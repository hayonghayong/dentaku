@extends('layouts.app')
@section('content')

 {{ Auth::user()->name }} さんの便利電卓
<br>
<!-- 電卓 -->
<div class="container"></div>
<table border="1" cellspacing="0">
    <tr>
        <td colspan="4">
            <input id="inputLabel">
        </td>
    </tr>
        <tr>
            <td colspan="3">
            <button>AC</button>
            <input type=submit id="ichiji_save" value="一時保存">
            </td>
            <td><button>/</button></td>
        </tr>
        <tr>
            <td><button>7</button></td>
            <td><button>8</button></td>
            <td><button>9</button></td>
            <td><button>*</button></td>
        </tr>
        <tr>
            <td><button>4</button></td>
            <td><button>5</button></td>
            <td><button>6</button></td>
            <td><button>-</button></td>
        </tr>
        <tr>
            <td><button>1</button></td>
            <td><button>2</button></td>
            <td><button>3</button></td>
            <td><button>+</button></td>
        </tr>
        <tr>
            <td colspan="2"><button>0</button></td>
            <td><button>.</button></td>
            <td><button>=</button></td>
        </tr>
    </table>
</div>

 新規物品登録画面

<!-- 登録フォーム -->
<form action="{{ url('goods') }}" method="POST" class="form- horizontal">
{{ csrf_field() }}
物品名
<input type="text" name="name" class="form-control">
重さ
<input type="text" name="weight" class="form-control">
<button type="submit" class="btn btn-danger"> Save
</button>
</form>

<!-- 表示 -->
@if (count($goods) > 0)
<!-- @if ($goods->count() > 0) -->
登録物品一覧
<table class="table table-striped task-table">
<tbody>
@foreach ($goods as $good)
<tr>
<td class="table-text">
<div class="text"id='{{ $good->weight }}'> {{ $good->name }}
</div> 
</td>

<!-- 更新ボタン -->
<td>
<form action="{{ url('goodsedit/'.$good->id) }}" method="POST"> {{ csrf_field() }}
<button type="submit" class="btn btn-primary">
更新 
</button>
</form>
</td>

<!--削除ボタン --> 
<td>
<form action="{{ url('good/'.$good->id) }}" method="POST"> {{ csrf_field() }}
{{ method_field('DELETE') }}
<button type="submit" class="btn btn-danger"> 削除
</button>
</form>
</td> 
</tr>
@endforeach
</tbody> 
</table>
@endif

一時保存
<div class="ichiji_save">
</div>

<!-- Jquery -->
<script>
$(function(){
    $('.text').click(function(){
        let text=$(this).attr('id');
        console.log(text);
        var pushed=text;
        var inputLabel = $('#inputLabel');
    if (pushed == '=')
    {
      // 計算
    inputLabel.val(eval(inputLabel.text()));
    } else if (pushed == 'AC')
    {
      // 全てクリア
    inputLabel.val('0');
    } else
    {
    if (inputLabel.val() == '0')
    {
        inputLabel.val(pushed);
    } else
    {
    inputLabel.val(inputLabel.val() + pushed);
    }
    }
    });
});
</script>

@endif
@endsection


