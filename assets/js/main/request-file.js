var RequestFilePage = {
  init: function () {
    $("#downloadWSE,#downloadSALN,#downloadPDS,#downloadLF,#downloadRSF,#downloadLIBF,#downloadDPNPCF").click(function (e) {
      console.log("wew");
      var requestfile = $(this).attr("requestfile");
      var downloadlink = $(this).attr("downloadlink");
      var documenttype = $(this).attr("documenttype");


      e.preventDefault();
      swal(
        {
          title: "Confirm Request/Download File",
          text: "Your data will be uploaded in the requests.",
          type: "success",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Request Form",
          cancelButtonText: "Cancel",
          closeOnConfirm: false,
          closeOnCancel: false,
        },
        function (isConfirm) {
          if (isConfirm) {


            RequestFilePage.requestfile(requestfile,downloadlink,documenttype);




          } else {
            swal("Cancelled", "You cancelled your download:)", "error");
          }
        }
      );
    });
  },

  requestfile: function (requestType,downloadlink,documenttype) {
    $.ajax({
      type: "POST",
      url: API_URL + "/request-file",
      data: {requestType},

      success: function (res) {
        console.log("res ", res);

        if (res.success) {
          location.href=  SITE_URL;
          var link = document.createElement("a");
          document.body.appendChild(link);
          link.href = downloadlink;
          link.target = "_blank";
          link.download = documenttype;
          link.click();
        }
      },
    });
  },
};

RequestFilePage.init();
