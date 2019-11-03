
$(document).ready(function(){
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 2000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.floor(now));
        }
    });
});

});

var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


$(document).ready(function() {
  $("#showHide").click(function() {
    if ($(".password").attr("type") == "password") {
      $(".password").attr("type", "text");

    } else {
      $(".password").attr("type", "password");
    }
  });
  var scroller = $('.scroll');
  scroller.click(function(event){
    event.preventDefault();
    $('body,html').animate({
        scrollTop: $(this.hash).offset().top
    },2000);
  });

});
