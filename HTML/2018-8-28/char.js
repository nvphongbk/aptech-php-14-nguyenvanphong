$(document).ready(function () {
    $("#js-btn").click(function () {
      $.get("data.json", function (data, status) {
        console.log(data);
        if (status === "success") {
          $("#js-div-table").append('<table id="js-table" class="table"></table>');
          $("#js-table").append('<thead id="js-thead"></thead>');
          $("#js-thead").append('<tr id="js-tr-head"></tr>');
          $("#js-tr-head").append('<th>#</th><th>Name</th><th>Email</th>');
          var tbody = '<tbody></tbody>'
          $("#js-thead").after(tbody);
          var users = data.users;
          console.log(data.users)
          users.forEach(function (user, index) {
            var trbody = '<tr id="js-tr-body-' + index + '"></tr</tr>';
            $('tbody').append(trbody);
            var thbody = '<th>' + user.id + '</th>';
            var tdbody = '<td>' + user.name + '</td><td>' + user.email + '</td>';
            $('#js-tr-body-' + index).append(thbody, tdbody);
          })
        }
      })
    });
  })