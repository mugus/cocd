<?php
// include("./config/db.php");
include("./PHP/actions.php");

include 'includes/header.php'; ?>

<body>
  
  <?php include 'includes/navbar.php'; ?>

    <form action="./PHP/actions.php" method="post">
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <h2 style="color: #315C93!important;">Admin Invitation Box</h2>
            <p>Invite Mentor and Case Manager in this form</p>
            <hr><br>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Add Email..." autocomplete="false" name="email">
            </div>
            <div class="form-group">
              <label for="role">Roles:</label>
              <select name="role" class="form-control" id="password">
                <option value="">Select role</option>
                <option value="1">Case Manager</option>
                <option value="0">Mentor</option>
              </select>
            </div><hr><br>
            <input class="btn btn-block" style="background-color: #315C93!important;" type="submit" value="Send" name="invitation">
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    </form>

<?php include 'includes/footer.php'; ?>