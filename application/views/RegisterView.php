<?php if ($this->session->userdata('username') == TRUE) { redirect(base_url()); } ?>
<div class="d-flex mt-5">
<div class="card mx-auto" style="width: 18rem;">
    <div class="card-body">
        <h3>Register</h3>
        <!-- Form Register -->
        <form method="POST" action="<?= site_url('RegisterController/register') ?>">
            <div class="mb-3">
                <label for="fullname">Nama Lengkap</label>
                <input type="text" class="form-control" id="fullname" placeholder="Nama Lengkap" name="fullname" required>
            </div>
            <div class="mb-3">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email" required>
            </div>
            <!-- Form Group for input username -->
            <div class="mb-3">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
            </div>
            <!-- Form Group for input password -->
            <div class="mb-3">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="passw" placeholder="Password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="norek">No. Rekening</label>
                <input type="text" class="form-control" id="norek" placeholder="No. Rekening" name="norek" required>
            </div>
            <div class="mb-3">
                <label for="nohp">No. handphone</label>
                <input type="text" class="form-control" id="nohp" placeholder="No. handphone" name="nohp" required>
            </div>
            <!-- Submit Button for complete the sign up -->
            <button type="submit" class="btn btn-primary" id="register">Sign Up</button>
        </form>
    </div>
</div>
</div>