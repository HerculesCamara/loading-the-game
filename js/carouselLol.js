function moveToSelectedLol(elementLol) {

  if (elementLol == "nextLol") {
    var selectedLol = $(".selectedLol").next();
  } else if (elementLol == "prevLol") {
    var selectedLol = $(".selectedLol").prev();
  } else {
    var selectedLol = elementLol;
  }

  var nextLol = $(selectedLol).next();
  var prevLol = $(selectedLol).prev();
  var prevSecondLol = $(prevLol).prev();
  var nextSecondLol = $(nextLol).next();

  $(selectedLol).removeClass().addClass("selectedLol");

  $(prevLol).removeClass().addClass("prevLol");
  $(nextLol).removeClass().addClass("nextLol");

  $(nextSecondLol).removeClass().addClass("nextRightSecondLol");
  $(prevSecondLol).removeClass().addClass("prevLeftSecondLol");

  $(nextSecondLol).nextAll().removeClass().addClass('hideRightLol');
  $(prevSecondLol).prevAll().removeClass().addClass('hideLeftLol');

}

// Eventos teclado
$(document).keydown(function(e) {
    switch(e.which) {
        case 37: // left
        moveToSelectedLol('prevLol');
        break;

        case 39: // right
        moveToSelectedLol('nextLol');
        break;

        default: return;
    }
    e.preventDefault();
});

$('#carouselLol div').click(function() {
  moveToSelectedLol($(this));
});

$('#prevLol').click(function() {
  moveToSelectedLol('prevLol');
});

$('#nextLol').click(function() {
  moveToSelectedLol('nextLol');
});
