var RequestFilePage = {
  init: function () {
    $("#downloadform").click(function (e) {
      console.log("wew");
      var requestfile = $(this).attr("requestfile");

      e.preventDefault();
      swal(
        {
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Log Out",
          cancelButtonText: "Cancel",
          closeOnConfirm: false,
          closeOnCancel: false,
        },
        function (isConfirm) {
          if (isConfirm) {
            RequestFilePage.requestfile(requestfile);
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        }
      );
    });
  },

  requestfile: function (requestType) {
    $.ajax({
      type: "POST",
      url: API_URL + "/request-file",
      data: {requestType},

      success: function (res) {
        console.log("res ", res);

        if (res.success) {
          // location.href=  SITE_URL;
          var link = document.createElement("a");
          document.body.appendChild(link);
          link.href = url;
          link.target = "_blank";
          link.download = "Request Form";
          link.click();
        }
      },
    });
  },
};

RequestFilePage.init();
