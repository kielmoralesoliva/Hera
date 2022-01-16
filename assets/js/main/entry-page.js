var EntryPage = {
  init: function () {
    $("#signin-form").submit(function (e) {
      e.preventDefault();
      const serializeData = $(this)
        .serializeArray()
        .reduce(function (a, x) {
          a[x.name] = x.value;
          return a;
        }, {});
      EntryPage.signin(serializeData);
    });
  },
  signin: function (formData) {
    $.ajax({
      type: "POST",
      url: API_URL + "/signin",
      data: formData,
      success: function (res) {
        console.log("res ", res);
      },
    });
  },
};

EntryPage.init();
