    <div id="splash_login" class="section">
      <h5 class="heading">Member Login/Sign Up</h5>
      <br>
<form action="../index.php" method="post" name="theForm" id="theForm">
          <div class="row">
              <label for="email">E-Mail</label>
              <input type="email" name="email" id="email" required>
          </div>
          <div class="row">
              <label for="pswd">Password</label>
              <input type="password" name="password" id="pswd" required>
          </div>
              <br>
              <br>
              <br>
          <div class="clear" style="margin-left: 100px; margin-bottom: 7px;">
              <input type="checkbox" name="remember" value="remember" id="remember">
              <label for="checkbox">Remember Me</label>
              <br>
          </div>
          <div style="margin-left: 15%;">
              <button type="submit" name="role" value="user" class="loginBtn">Login as User</button>
              <button type="submit" name="role" value="admin" class="signupBtn">Login as Admin</button>
                <br>
                <br>
                <a href="" class="right">Forgot your password</a>
                <br>
          </div>
      </form>
    </div>