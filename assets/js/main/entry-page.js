var EntryPage = {
  init: function () {
    $("#signin-form").submit(function (e) {
      e.preventDefault();
      var formData = new FormData($(this)[0]);
      EntryPage.signin(formData);
    });
  },
  signin: function (formData) {
    $.ajax({
      type: "POST",
      url: API_URL + "/signin",
      data: formData,
      contentType: false,
      cache: false,
      processData: false,
      success: function (res) {
        console.log("res ", res);
      },
    });
  },
};

EntryPage.init();
