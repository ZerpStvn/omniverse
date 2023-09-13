$(document).ready(function () {
  AOS.init({
    duration: 800,
    easing: "ease",
    offset: 200,
    once: false,
  });

  $("#content-placeholder").text(
    "To be an excellent green energy management and marketing solutions provider in the country"
  );
  $("#core-title").text("Vission");
  $('#second-list-corner > li[data-content="Vision"]').addClass("selected");
  $("#second-list-corner > li").click(function () {
    $("#second-list-corner > li").removeClass("selected");
    $(this).addClass("selected");

    var contentToShow = $(this).data("content");

    var content = "";
    var tittlecontent = "";
    if (contentToShow === "Mission") {
      tittlecontent = "Mission";
      content =
        "To provide lifetime value of efficient and affordable green energy resource to our ";
      ("");
    } else if (contentToShow === "Vision") {
      tittlecontent = "Vision";
      content =
        "To be an excellent green energy management and marketing solutions provider in the country";
    } else if (contentToShow === "core-value") {
      tittlecontent = "Core Values";
      content =
        " Customer Centricity Integrity, Accountability & Responsibility, Sustainability., Compassionate Service, Environmental Consciousness, Innovation";
    }

    $("#core-title").text(tittlecontent);
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
  $(".sliderwrap").slick({
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    arrowPrev: "",
    arrowNext: "",
    cssEase: "linear",
  });
});
