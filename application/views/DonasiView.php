<?php if ($this->session->userdata('username') != TRUE || $this->session->userdata('role') != 'user') { redirect(base_url()); } ?>
<div class="d-flex justify-content-center my-5">
  <i class="far fa-credit-card text-primary" style="font-size: 6rem;"></i>
</div>

<div></div>