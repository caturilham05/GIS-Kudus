<?php if($this->session->flashdata('success')) { ?>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('success') ?>"></div>
    <?= $this->session->flashdata('success') ?>
<?php } ?>