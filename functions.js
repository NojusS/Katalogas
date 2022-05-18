
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


$(document).ready(function () {
  $(window).scroll(function () {
      if ($(this).scrollTop() > 10) {
          $('aboveNav').addClass('eile');
      }
      else {
          $('aboveNav').removeClass('eile');
      }
  });
  var width = $(window).width();
  $(window).resize(function () {
      if (width <= '720px') {
          $('aboveNav').addClass('eile');
      }
  });
})