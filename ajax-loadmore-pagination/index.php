<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Ajax Pagination</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Load More Pagination</h1>
    </div>

    <div id="table-data">
      <table id="loadData" border="1" width="100%" cellspacing="0" cellpadding="10px">
        <tr>
          <th width="100px">Id</th>
          <th>Name</th>
        </tr>
      </table>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      function loadTable(page) {
        $.ajax({
          url: "ajax-pagination.php",
          type: "POST",
          data: {
            page_no: page
          },
          success: function(data) {
            if (data) {
              $("#pagination").remove();
              $("#table-data").append(data);
            } else {
              $("#loadmoreBtn").html("End");
              $("#loadmoreBtn").prop("disabled", "true");
            }

          }
        });
      }
      loadTable();

      $(document).on("click", "#loadmoreBtn", function() {
        $("#loadmoreBtn").html("Loading....");

        var page_id = $(this).data("id");

        loadTable(page_id);
      });
    });
  </script>
</body>

</html>