<!-- Desain Card untuk form login -->
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h3>Login</h3>
        <!--  Form Login -->
        <form method="POST" action="<?= site_url('LoginController/login') ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="passw" placeholder="Password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary" id="login">Login</button>
        </form>
        <!--  Form Login end -->
        <a href="">Lupa password?</a>
    </div>
</div>
<!--  Desain Card End -->