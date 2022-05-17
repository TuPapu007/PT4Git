/*Funcion Primavera QUitar añadir */
$("#pills-primavera-tab").click(function () {
  //   alert("Handler for .click() called.");
  $(".classquit").removeClass("active");
  $("#pills-primavera-tab").addClass("active");
});

$("#pills-verano-tab").click(function () {
  //   alert("Handler for .click() called.");
  $(".classquit").removeClass("active");
  $("#pills-verano-tab").addClass("active");
});

$("#pills-otoño-tab").click(function () {
  //   alert("Handler for .click() called.");
  $(".classquit").removeClass("active");
  $("#pills-otoño-tab").addClass("active");
});

$("#pills-invierno-tab").click(function () {
  //   alert("Handler for .click() called.");
  $(".classquit").removeClass("active");
  $("#pills-invierno-tab").addClass("active");
});

$(".div_hover_0").on("click", function () {
  if ($(".div_oculto_0").hasClass("div_oculto")) {
    $(".div_oculto_0").removeClass("div_oculto");
    $(".div_oculto_0").addClass("class_active");
    // console.log("Class is active");
  } else if ($(".div_oculto_0").hasClass("class_active")) {
    $(".div_oculto_0").removeClass("class_active");
    $(".div_oculto_0").addClass("div_oculto");
    // console.log("Class is not active");
  }
  //   alert("Handler for .click() called.");
});

$(".div_hover_1").on("click", function () {
  if ($(".div_oculto_1").hasClass("div_oculto")) {
    $(".div_oculto_1").removeClass("div_oculto");
    $(".div_oculto_1").addClass("class_active");
    // console.log("Class is active");
  } else if ($(".div_oculto_1").hasClass("class_active")) {
    $(".div_oculto_1").removeClass("class_active");
    $(".div_oculto_1").addClass("div_oculto");
    // console.log("Class is not active");
  }
  // alert("Handler for .click() called.");
});

$(".div_hover_2").on("click", function () {
  if ($(".div_oculto_2").hasClass("div_oculto")) {
    $(".div_oculto_2").removeClass("div_oculto");
    $(".div_oculto_2").addClass("class_active");
    // console.log("Class is active");
  } else if ($(".div_oculto_2").hasClass("class_active")) {
    $(".div_oculto_2").removeClass("class_active");
    $(".div_oculto_2").addClass("div_oculto");
    // console.log("Class is not active");
  }
  // alert("Handler for .click() called.");
});

$(".div_hover_3").on("click", function () {
  if ($(".div_oculto_3").hasClass("div_oculto")) {
    $(".div_oculto_3").removeClass("div_oculto");
    $(".div_oculto_3").addClass("class_active_spe");
    // console.log("Class is active");
  } else if ($(".div_oculto_3").hasClass("class_active_spe")) {
    $(".div_oculto_3").removeClass("class_active_spe");
    $(".div_oculto_3").addClass("div_oculto");
    // console.log("Class is not active");
  }
  // alert("Handler for .click() called.");
});

(function ($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on("click", function (e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(".sidebar").hasClass("toggled")) {
      $(".sidebar .collapse").collapse("hide");
    }
  });

  // Close any open menu accordions when window is resized below 768px
  $(window).resize(function () {
    if ($(window).width() < 768) {
      $(".sidebar .collapse").collapse("hide");
    }

    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $(".sidebar .collapse").collapse("hide");
    }
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $("body.fixed-nav .sidebar").on(
    "mousewheel DOMMouseScroll wheel",
    function (e) {
      if ($(window).width() > 768) {
        var e0 = e.originalEvent,
          delta = e0.wheelDelta || -e0.detail;
        this.scrollTop += (delta < 0 ? 1 : -1) * 30;
        e.preventDefault();
      }
    }
  );

  // Smooth scrolling using jQuery easing
  $(document).on("click", "a.scroll-to-top", function (e) {
    var $anchor = $(this);
    $("html, body")
      .stop()
      .animate(
        {
          scrollTop: $($anchor.attr("href")).offset().top,
        },
        1000,
        "easeInOutExpo"
      );
    e.preventDefault();
  });
})(jQuery); // End of use strict

//Esconder MOstrar Filtro
var inival = $("#input_text_shearh").val();
$("#input_text_shearh").change(function () {
  if ($("#input_text_shearh").val() != inival) {
    // alert("El campo ha cambiado");
    $(".boton_desaparesco").css("opacity", "1");
    $(".boton_desaparesco").click(function () {
      $("#div_filtro").css("display", "block");
    });
  }
  if ($("#input_text_shearh").val() == "") {
    // alert("El campo vacio");
    $(".boton_desaparesco").css("opacity", "0");
    $("#div_filtro").css("display", "none");
  }
});
