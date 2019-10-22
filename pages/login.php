<body class="login-img2-body">


    <div class="container">

      <form class="login-form" action="?user=loginproses" method="post">
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" required="required"
              name="txtUser" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" required="required"
                class="form-control" name="txtPassword" placeholder="Password">
            </div>
            <button name="btnLogin" class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            <!-- <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->
        </div>
      </form>
    </div>
</body>
