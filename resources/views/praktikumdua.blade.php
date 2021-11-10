<!DOCTYPE html>
<html>

<head>
  <title>Praktikum dua</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    .borderan {
      border: 2px solid black;
      border-radius: 6px;
      background-color: #F2F2F2;
    }

    .isi {
      text-align: center;
      background-color: #023373;
      color: #F2F2F2;
      font-size: 24px;
      font-weight: 800;
      border-radius: 6px
    }

    body {
      background-color: #0D0D0D;
    }
  </style>
</head>

<body>
  <div class="container-sm my-4  oiii">

    <div class="borderan col-sm-6 offset-md-3 ">
      <div class="card">
        <div class="card-body isi">JavaScript Form Validation</div>
      </div>
      <form name="myform" action="https://youtu.be/dQw4w9WgXcQ" class="was-validated px-5 py-3" onsubmit="validation()">
        <div class="mb-3 mt-3">
          <label for="fullname" class="form-label">Fullname:</label>
          <input type="text" class="form-control" id="fullname" placeholder="Enter Fullname" name="fullname"
            pattern="[A-Za-z ']{1,48}" maxlength="48" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Enter your name.</div>
        </div>
        <div class="mb-3 mt-3">
          <label for="uname" class="form-label">Username:</label>
          <input type="text" class="form-control" id="uname" placeholder="Enter Username" name="uname"
            pattern="[A-Za-z]{6,8}" minlength="6" maxlength="8" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">6-8 Characters only.</div>
        </div>
        <div class="mb-3">
          <label for="pwd" class="form-label">Password:</label>
          <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" maxlength="8"
            required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Password must be 8 characters.</div>
        </div>
        <div class="mb-3 mt-3">
          <label for="emaill" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="daffaxxx@xxx.com" name="email" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Enter your email.</div>
        </div>
        <div class="mb-3 mt-3">
          <label for="state" class="form-label">State:</label>
          <select class="form-select" required id="state" name="state" aria-label="Default select example">
            <option value="">Please Choose</option>
            <option value="1">Indonesia</option>
            <option value="2">Malaysia</option>
            <option value="3">Singapore</option>
          </select>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Please choose a state.</div>
        </div>
        <div class="mb-3 mt-3">
          <label for="zip" class="form-label">Zip Code:</label>
          <input type="text" class="form-control" id="zip" placeholder="67****" name="zip" maxlength="6"
            pattern="[1-9]{6}" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">6 Numbers Only.</div>
        </div>
        <div class="mb-3 mt-3">
          <label for="address" class="form-label">Address:</label>
          <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Enter your address</div>
        </div>
        <button type="submit" class="btn btn-primary form-control my-4">Submit</button>
      </form>
      <script>
        var fullname = document.getElementById('fullname');
        fullname.oninvalid = function (eventF) {
          eventF.target.setCustomValidity('Your name should contain letters only');
        }
        fullname.oninput = function (thisF) {
          thisF.target.setCustomValidity('');
        }

        var username = document.getElementById('uname');
        username.oninvalid = function (eventU) {
          eventU.target.setCustomValidity('Username should contain 6-8 letters only');
        }
        username.oninput = function (thisU) {
          thisU.target.setCustomValidity('');
        }

        var password = document.getElementById('pwd');
        password.oninvalid = function (eventP) {
          eventP.target.setCustomValidity('Password');
        }
        password.oninput = function (thisP) {
          thisP.target.setCustomValidity('');
        }

        var email = document.getElementById('email');
        email.oninvalid = function (eventE) {
          eventE.target.setCustomValidity('Use the correct email format');
        }
        email.oninput = function (thisE) {
          thisE.target.setCustomValidity('');
        }

        var state = document.getElementById('state');
        state.oninvalid = function (eventS) {
          eventS.target.setCustomValidity('Please Choose the available state');
        }
        state.oninput = function (thisS) {
          thisS.target.setCustomValidity('');
        }

        var zip = document.getElementById('zip');
        zip.oninvalid = function (eventZ) {
          eventZ.target.setCustomValidity('Zip code can only contain 6 numbers');
        }
        zip.oninput = function (thisZ) {
          thisZ.target.setCustomValidity('');
        }

      </script>

    </div>
  </div>

  </div>
</body>

</html>