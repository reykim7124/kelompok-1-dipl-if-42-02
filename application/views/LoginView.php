<!-- Desain Card untuk form login -->
<div class="d-flex mt-5">
    <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
            <h3>Login</h3>
            <!--  Form Login -->
            <form method="POST" action="<?= site_url('LoginController/login') ?>">
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="passw" placeholder="Password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary" id="login">Login</button>
            </form>
            <!--  Form Login end -->
            <div class="d-flex justify-content-between mt-2">
                <span class="text-primary">Lupa password?</span>
                <a href="<?= base_url('RegisterController') ?>" class="text-primary">Daftar akun</a>
            </div>
        </div>
    </div>
</div>
<!--  Desain Card End -->