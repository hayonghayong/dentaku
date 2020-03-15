
@extends('layouts.app')
@section('content')
<!-- 電卓 -->
<table class="cul" style="margin-top:20px;" >
    <tr>
        <td colspan="4" class="total">
            <input id="inputLabel">
        </td>
    </tr>
        <tr>
            <td colspan="3" class="ac">
            <button>AC</button>
            <input type=submit id="ichiji_save" class="ichiji_save" value="一時保存">
            </td>
            <td class="operator"><button>/</button></td>
        </tr>
        <tr>
            <td><button>7</button></td>
            <td><button>8</button></td>
            <td><button>9</button></td>
            <td class="operator"><button>*</button></td>
        </tr>
        <tr>
            <td><button>4</button></td>
            <td><button>5</button></td>
            <td><button>6</button></td>
            <td class="operator"><button>-</button></td>
        </tr>
        <tr>
            <td><button>1</button></td>
            <td><button>2</button></td>
            <td><button>3</button></td>
            <td class="operator"><button>+</button></td>
        </tr>
        <tr>
            <td colspan="2"><button>0</button></td>
            <td><button>.</button></td>
            <td class="operator"><button>=</button></td>
        </tr>
    </table>
</div>

<!-- 表示 -->
@if (count($goods) > 0)
<div class="ichiran">
<p class="title">登録物品一覧</p>
@foreach ($goods as $good)
<div class="text"id='{{ $good->weight }}'> {{ $good->name }}
</div> 
@endforeach
</div>
@endif

<p class="title">一時保存</p>
<span id="allClear">全て削除</span>
<div class="ichiji_save"></div>


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
@endsection

