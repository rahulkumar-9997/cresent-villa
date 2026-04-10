function showNotificationAll(type, title, message) {
  var notificationHtml = `
        <div class="custom-notification ${type}" style="position: fixed; top: 20px; right: 20px; z-index: 9999; padding: 15px 20px; border-radius: 5px; color: white; font-weight: bold; box-shadow: 0 2px 10px rgba(0,0,0,0.2); animation: slideIn 0.3s ease-out;">
            <div style="display: flex; align-items: center; gap: 10px;">
                <span>${type === "success" ? "✅" : "⚠️"}</span>
                <div>
                    ${title ? "<strong>" + title + "</strong><br>" : ""}
                    ${message}
                </div>
                <button onclick="this.parentElement.parentElement.remove()" style="background: none; border: none; color: white; margin-left: 15px; cursor: pointer;">✕</button>
            </div>
        </div>
    `;

  if (!$("#notification-styles").length) {
    $("head").append(`
            <style id="notification-styles">
                @keyframes slideIn {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                .custom-notification.success { background: linear-gradient(135deg, #28a745, #20c997); }
                .custom-notification.warning { background: linear-gradient(135deg, #ffc107, #fd7e14); }
                .custom-notification.error { background: linear-gradient(135deg, #dc3545, #c82333); }
                .custom-notification.info { background: linear-gradient(135deg, #17a2b8, #138496); }
                .custom-notification { transition: all 0.3s ease; }
                .custom-notification:hover { transform: translateX(-5px); }
            </style>
        `);
  }
  $("body").append(notificationHtml);
  setTimeout(function () {
    $(".custom-notification").fadeOut(300, function () {
      $(this).remove();
    });
  }, 5000);
}

$(document)
  .off("submit", "#productEnquiryForm")
  .on("submit", "#productEnquiryForm", function (event) {
    event.preventDefault();
    var form = $(this);
    var submitButton = form.find('button[type="submit"]');
    $(".form-control").removeClass("is-invalid");
    $(".invalid-feedback").remove();
    submitButton
      .prop("disabled", true)
      .html(
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Submitting...',
      );
    var formData = new FormData(this);
    $.ajax({
      url: form.attr("action"),
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function (response) {
        submitButton.prop("disabled", false).html("Send Message");
        if (response.status === "success") {
          showNotificationAll("success", "Success!", response.message);
          form[0].reset();
          $(".form-control").removeClass("is-valid");
          localStorage.setItem("modalClosed", "true");
          $("#commoanModal").modal("hide");
        } else if (response.status === "error") {
          if (response.errors) {
            $.each(response.errors, function (key, value) {
              var inputField = $("#" + key);
              inputField.addClass("is-invalid");
              inputField.after(
                '<div class="invalid-feedback">' + value[0] + "</div>",
              );
            });
            showNotificationAll(
              "warning",
              "Validation Error",
              "Please fix the errors above",
            );
          } else {
            showNotificationAll(
              "error",
              "Error!",
              response.message || "An error occurred!",
            );
          }
        } else {
          showNotificationAll(
            "error",
            "Error!",
            response.message || "An unexpected error occurred!",
          );
        }
      },
      error: function (xhr) {
        submitButton.prop("disabled", false).html("Send Message");

        try {
          var response = JSON.parse(xhr.responseText);

          if (response && response.errors) {
            $.each(response.errors, function (key, value) {
              var inputField = $("#" + key);
              inputField.addClass("is-invalid");
              inputField.after(
                '<div class="invalid-feedback">' + value[0] + "</div>",
              );
            });
            showNotificationAll(
              "warning",
              "Validation Error",
              "Please fix the errors above",
            );
          } else if (response && response.message) {
            showNotificationAll("error", "Error!", response.message);
          } else {
            showNotificationAll(
              "error",
              "Error!",
              "Network error! Please check your connection.",
            );
          }
        } catch (e) {
          showNotificationAll(
            "error",
            "Error!",
            "An error occurred! Please try again.",
          );
        }
      },
    });
  });
