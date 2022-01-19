var EmployeePage = {
  init: function () {
    $("#add-employee-form").submit(function (e) {
      e.preventDefault();

      console.log($(this).serialize());
      const serializeData = $(this)
        .serializeArray()
        .reduce(function (a, x) {
          a[x.name] = x.value;
          return a;
        }, {});
      EmployeePage.create(serializeData);
    });
  },
  create: function (formData) {
    console.log(formData);

    $.ajax({
      type: "POST",
      url: "api/add-employee-form",
      data: formData,
      success: function (res) {
        console.log("res ", res);
        if (res.success) {
          location.href=  SITE_URL;
        }
      },
    });
  },
};

EmployeePage.init();
