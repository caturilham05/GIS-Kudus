<section>
    <div class="jumbotron">
        <div id="flash-data" data-berhasil="<?= $this->session->flashdata('success') ?>"></div>
        <div class="flex-container aduan">
            <div class="row">
                <div class="col-md-8 mt-5">
                    <h1 class="text-center">Sistem Informasi Geografis</h1>
                    <h5 class="display-3 text-center">Sistem Pengaduan Jaringan Dalam Bentuk Geospasial.</h5>
                    <div class="text-center tombol">
                    <?php if ($this->session->userdata('username')) { ?>
                        <a class="btn btn-danger btn-lg  my-4" href="<?= site_url('form-pengaduan') ?>">Form Pengaduan</a>
                    <?php }else{ ?>
                        <a class="btn btn-danger btn-lg  my-4" href="<?= site_url('auth-login') ?>">Silahkan Login Untuk Melakukan Pengaduan</a>
                    <?php } ?>
                    </div>
                </div>
                <div class="garis__line"></div>
                <div class=" col-md-3 carosel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <!-- image slider statis dari folder -->
                            <div class="carousel-item active">
                                <img src="<?= base_url('assets/img/index.jpg') ?>" class="d-block w-200" alt="...">
                            </div>
                            <!-- image slider statis dari folder -->
                            <?php foreach ($gambar as $data) : ?>
                                <!-- image slider dinamis dari database -->
                                <?php if (!$data->active) { ?>
                                    <div class="carousel-item">
                                        <img src="<?= base_url('uploads/' . $data->gambar) ?>" class="d-block w-200" alt="...">
                                    </div>
                            <?php
                                }
                            endforeach ?>
                            <!-- image slider dinamis dari database -->
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <h4 class="tulisan text-center">Tentang Sistem Informasi Geografis Pengaduan Jaringan</h4>
    <center>
        <div class="garisan mb-5"></div>
    </center>
    <div class="row col-12 mb-5">
        <div class="container-fluid d-flex">
            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa incidunt quae praesentium nulla, totam est libero facilis nihil minus. Soluta culpa dolorum laborum repudiandae voluptates voluptate officiis nam vitae earum cupiditate maxime architecto adipisci nobis dolore ipsam quo eius ipsum praesentium ad odit aliquam, mollitia eaque fugit voluptatem. Explicabo, optio culpa! Consequuntur debitis nisi doloremque magni eveniet laudantium cum blanditiis tenetur esse vitae suscipit repudiandae vel sunt enim, harum explicabo. Eligendi debitis quae, quo impedit aspernatur tempora quod fugiat doloribus numquam ab ipsam nulla dolorum iste adipisci repellendus inventore esse. Tenetur amet autem minima provident fugiat voluptas consectetur architecto nesciunt delectus! Soluta accusamus provident molestias maiores, tempore fuga architecto corporis! Sint optio doloremque, autem dicta dolore veniam excepturi iusto atque sapiente cupiditate eligendi nisi, dolorem ipsa, totam dolor pariatur! Tenetur odit numquam nostrum consequatur totam corrupti repellendus, quis aliquid fuga necessitatibus harum autem enim nemo similique, voluptas obcaecati. Autem fugit iusto ducimus porro, fugiat sapiente mollitia optio aliquid exercitationem, magnam illum perferendis recusandae, sed pariatur voluptate quia doloribus iure doloremque voluptates fuga vitae tempora ipsum. Deleniti cum ea nemo nulla repellendus officiis reprehenderit! Perferendis similique tempora, doloremque maiores temporibus odit delectus dignissimos et eos aliquid reiciendis harum eum sed aut.</p>
        </div>
    </div>
</section>