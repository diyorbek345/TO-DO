<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>To do</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <style>
      .form {
        background-color: #e7e9eb;
        padding: 30px;
        border-radius: 20px;
      }
    </style>
  </head>
  <body>
    <div class="container mt-3">
      <form action="action.php " method="post" class="form">
        <label for="text" class="form-label">Text:</label>
        <input type="text" name="task" class="form-control mt-3 mb-3" />
        <button name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <div class="container mt-5">
      <?php 
        require_once 'db.php';
        $sql = "SELECT * FROM tasks";
        $result = $conn->query($sql);
        echo "<h1>Tasks:</h1>";
        while($row = $result->fetch()){
          echo "<p>" . $row['task'] . "</p>";
        }
      ?>

    </div>
  </body>
</html>
