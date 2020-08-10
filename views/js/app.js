$(document).ready(function () {
  $(".parent-container").magnificPopup({
    delegate: "a",
    type: "image",
    mainClass: "mfp-with-zoom",
    gallery: {
      enabled: true,
    },
    zoom: {
      enabled: true,
      duration: 300,
      easing: "ease-in-out",
      opener: function (openerElement) {
        return openerElement.is("img")
          ? openerElement
          : openerElement.find("img");
      },
    },
  });

  $(".carousel").carousel();
  AOS.init();
});

$("#dataForm").click(function () {
  var name = $("#name").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var service = $("#service").val();
  var area = $("#area").val();
  var subject = $("#subject").val();
  var message = $("#message").val();

  if (name === "") {
    // $("#name").addClass("is-invalid");
  }
  if (email === "") {
    $("#email").addClass("is-invalid");
  }
  if (phone === "") {
    $("#phone").addClass("is-invalid");
  }
  if (service === "") {
    $("#service").addClass("is-invalid");
  }
  if (area === "") {
    $("#area").addClass("is-invalid");
  }
  if (subject === "") {
    $("#subject").addClass("is-invalid");
  }
  if (message === "") {
    $("#message").addClass("is-invalid");
  }

  console.log(service);

  data =
    "name=" +
    name +
    "&email=" +
    email +
    "&phone=" +
    phone +
    "&service=" +
    service +
    "&area=" +
    area +
    "&subject=" +
    subject +
    "&message=" +
    message;

  $.ajax({
    url: "views/modules/ajax_form.php",
    method: "POST",
    data: data,
    success: function (response) {
      // $("#response").html(response);
      alert(response);
    },
  });
});
