"use strict";

$(function () {
  var $emptyCards = $("emptyCards");
  var $filledCards = $("filledCards");
  $("li", $emptyCards).draggable({
    cancel: "a.ui-icon",
    revert: "invalid",
    containment: "document",
    helper: "clone",
    cursor: "move"
  });
  $filledCards.droppable({
    accept: "#emptyCards",
    classes: {
      "ui-droppable-active": "ui-state-highlight"
    },
    drop: function drop(event, ui) {
      addCard(ui.draggable);
    }
  });

  function addCard($item) {
    $item.fadeOut(function () {
      var $list = $("ul", $filledCards).length ? $("ul", $filledCards) : $("<ul class='gallery ui-helper-reset'/>").appendTo($filledCards);
      $item.append(recycle_icon).appendTo($list).fadeIn(function () {
        $item.animate({
          width: "48px"
        }).find("img").animate({
          height: "36px"
        });
      });
    });
  }
});
$(function () {
  $("#draggable").draggable({
    revert: true
  });
});
$(function () {
  $("#draggable2").draggable({
    revert: true
  });
});
$("#droppable").droppable({
  accept: "#draggable",
  drop: function drop(event, ui) {
    $(this).addClass("ui-state-highlight").find("p").html("Card drag Successful");
    var txt;
    var person = prompt("Please enter your name:", "Harry Potter");

    if (person == null || person == "") {
      $(this).addClass("ui-state-highlight").find("p").html("User cancelled the prompt.");
    } else if (person == "Lionel Messi") {
      $(this).addClass("ui-state-highlight").find("p").html("Hello Retard! HAHA! I am such a Comedian!!");
    } else {
      $(this).addClass("ui-state-highlight").find("p").html("Hello " + person + " How are you today?");
    }
  }
});
$("#droppable2").droppable({
  accept: "#draggable2",
  drop: function drop(event, ui) {
    $(this).addClass("ui-state-highlight").find("p").html("Card drag Successful");
    var txt;
    var person = prompt("Please enter your name:", "Harry Potter");

    if (person == null || person == "") {
      $(this).addClass("ui-state-highlight").find("p").html("User cancelled the prompt.");
    } else if (person == "Lionel Messi") {
      $(this).addClass("ui-state-highlight").find("p").html("Hello Retard! HAHA! I am such a Comedian!!");
    } else {
      $(this).addClass("ui-state-highlight").find("p").html("Hello " + person + " How are you today?");
    }
  }
});