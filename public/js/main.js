
// 普通の計算
$(function () {
  $('button').click(function () {
    var pushed = $(this).text();
    console.log(pushed)
    var inputLabel = $('#inputLabel');
    if (pushed == '=')
    {
      // 計算
      inputLabel.val(eval(inputLabel.val()));
    } else if (pushed == 'AC')
    {
      // クリア
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

// 一時保存
$(function () {
  $("#ichiji_save").click(function () {
    var pushed = $("#inputLabel").val();
    console.log(pushed)
    var today = new Date();
    var inputLabel = $('#inputLabel');
    localStorage.setItem(today, pushed);
    const html = '<tr><td class="ichiji">' + pushed + '<button id="save_clear">削除</button>' + '</td></tr>';
    $(".ichiji_save").append(html);
    inputLabel.val('0');

    // 一時保存削除
      $("#save_clear").on("click",function () {
        localStorage.removeItem(today);
        $(".ichiji").empty();
      });

    // 一時保存を電卓に表示
      $(".ichiji").click(function () {
        let save_text = $(this).text();
        console.log(save_text);
        let str = save_text.replace("削除","");
        console.log(str);
        $("#inputLabel").val(str);
      });
    });
  });



