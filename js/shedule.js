$(function() {
    $.ajax({
      url: "/trainings.json",
      dataType:'json'
    }).done(function(data){
      $("p.select").each(function(n,e){
        t = $(e).text();
        if (data[t].length > 0)
          $(e).before('<div class="popup" style="display:none"><b>'+t+'</b><p>'+data[t]+'</p></div>');
      });
    });

    var e = new Array();
    $.each($("p.select"), function(n, a) {
        t = $(a).text(), -1 == jQuery.inArray(t, e) && $('<option value="' + t + '">' + t + "</option>").appendTo(".styler"), e.push(t)
    });
    /* Ховеры колонок */
    // $('.day').hover(function(){
    //   $('.day').not(this).css('opacity','0.1');
    // },function(){
    //   $('.day').not(this).css('opacity','1');
    // });
}), $(document).on("change", ".styler", function() {
    var e = $(this).val();
    if ("default" == e) $.each($("p.select"), function(t, e) {
        $(e).parent().show();
    });
    else {
        new Array;
        $.each($("p.select"), function(n, a) {
            t = $(a).text(), t != e ? $(a).parent().hide() : $(a).parent().show()
        })
    }
});

$(document).on({
    mouseenter: function () {
        $(this).parent().find('.popup').show();
    },
    mouseleave: function () {
        $(this).parent().find('.popup').hide();
    }
}, "p.select");

$(document).on('click','.trainer',function(){
  var trainer = $(this).text();
  window.location.href = '/trainers?name='+trainer;
});
