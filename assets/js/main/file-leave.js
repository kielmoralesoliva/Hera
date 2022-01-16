var FileLeavePage = {
  init: function () {
    $("#file-leave").submit(function (e) {
      console.log("wew");
      e.preventDefault();
      const serializeData = $(this)
        .serializeArray()
        .reduce(function (a, x) {
          a[x.name] = x.value;
          return a;
        }, {});
      FileLeavePage.fileLeave(serializeData);
    });
  },
  fileLeave: function (formData) {
    console.log("serializeData", formData);
    $.ajax({
      type: "POST",
      url: API_URL + "/file-leave",
      data: formData,
      success: function (res) {
        console.log("res ", res);

        if (!res.success) {
          swal(
            "Wrong Credentials!",
            "Username or Password is incorrect!",
            "error"
          );
        }
      },
    });
  },
};

FileLeavePage.init();
