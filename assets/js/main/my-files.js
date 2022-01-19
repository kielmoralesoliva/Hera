var MyFilePage = {
  init: function () {
    $("#my-files-form").on("submit", function (e) {
      e.preventDefault();
      $.ajax({
        url: API_URL + "/upload-my-files",
        type: "POST",
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (res) {
          if (res.success) {
            location.reload();
          }
        },
      });
    });

    $(document).on("click", ".delete-my-files", function (e) {
      e.preventDefault();
      var id = $(this).attr("data-attr-id");
      var fileName = $(this).attr("data-filename");
      swal(
        {
          title: "Delete file",
          text: "Would you like to delete this file?",
          type: "info",
          showCancelButton: true,
          confirmButtonText: "Delete",
          confirmButtonColor: "#5cb85c",
          cancelButtonText: "Cancel",
          cancelButtonColor: "#f44336",
          closeOnConfirm: false,
          closeOnCancel: false,
        },
        function (isConfirm) {
          if (isConfirm) {
            MyFilePage.deleteMyFile(id, fileName);
          } else {
            swal("Cancelled", "Ok Edi Don't", "error");
          }
        }
      );
    });
  },

  deleteMyFile: function (id, fileName) {
    $.ajax({
      type: "POST",
      url: API_URL + "/delete-my-files",
      data: {id, fileName},
      success: function (res) {
        console.log("res ", res);
        if (res.success) {
          location.reload();
        }
      },
    });
  },
};

MyFilePage.init();
