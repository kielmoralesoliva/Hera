var HRAllRequestPage = {
  init: function () {
    $(document).on("click", ".btn-approved-request", function (e) {
      e.preventDefault();
      var requestId = $(this).attr("data-request-id");
      swal(
        {
          title: "Approve request",
          text: "Would you like to approve your request?",
          type: "info",
          showCancelButton: true,
          confirmButtonText: "Approve",
          confirmButtonColor: "#5cb85c",
          cancelButtonText: "Cancel",
          cancelButtonColor: "#f44336",
          closeOnConfirm: false,
          closeOnCancel: false,
        },
        function (isConfirm) {
          if (isConfirm) {
            console.log("requestIds", requestId);
            HRAllRequestPage.approveRequest(requestId);
          } else {
            swal("Cancelled", "Ok Edi Don't", "error");
          }
        }
      );
    });
  },
  approveRequest: function (requestId) {
    $.ajax({
      type: "POST",
      url: API_URL + "/approve-request-file",
      data: {requestId},
      success: function (res) {
        console.log("res ", res);
        if (res.success) {
          location.reload();
        }
      },
    });
  },
};

HRAllRequestPage.init();
