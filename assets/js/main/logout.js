var LogOutPage = {
    init: function () {
        $("#logout").click(function (e) {
        console.log("wew");
        e.preventDefault();
        swal({
            title: "Are you sure?",
            text: "You will not be able to recover this imaginary file!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Log Out",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: false
        }, function (isConfirm) {
            if (isConfirm) {
                LogOutPage.logout();
                
            } else {
                swal("Cancelled", "Your imaginary file is safe :)", "error");
            }
        });

      });
    },
    logout: function () {
      $.ajax({
        type: "POST",
        url: API_URL + "/logout",
        success: function (res) {
          console.log("res ", res);
  
          if (res.success) {
          location.href=  SITE_URL;
          }
        },
      });
    },
  };
  
  LogOutPage.init();
  