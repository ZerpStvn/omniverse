$(document).ready(function () {
  AOS.init({
    duration: 800,
    easing: "ease",
    offset: 200,
    once: false,
  });

  $("#content-placeholder").text("Our mission is to...");
  $('#second-list-corner > li[data-content="Mission"]').addClass("selected");
  $("#second-list-corner > li").click(function () {
    $("#second-list-corner > li").removeClass("selected");
    $(this).addClass("selected");

    var contentToShow = $(this).data("content");

    var content = "";
    if (contentToShow === "Mission") {
      content = "Our mission is to...";
    } else if (contentToShow === "Vision") {
      content = "hello!";
    } else if (contentToShow === "core-value") {
      content = "Hi";
    }

    $("#content-placeholder").text(content);
  });
  $("#myModal").modal({
    backdrop: "static",
    keyboard: false,
    show: false,
  });
  $("#btn_scheduler").click(function () {
    $("#myModal").modal("show");
  });
});
