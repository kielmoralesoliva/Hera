var EmployeePage = {
    init: function () {
      $("#add-employee-form").submit(function (e) {
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        EmployeePage.create(formData);
      });
    },
    create: function (formData) {
        console.log(formData);

      $.ajax({
        type: "POST",
        url: "api/add-employee-form",
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
  
  EmployeePage.init();
  