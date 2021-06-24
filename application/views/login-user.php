<section>
    <div class="jumbotron">
        <div class="flex-container aduan">
            <div class="row">
                <div class="col-md-7 mt-5">
                    <h1 class="text-center">Sistem Informasi Geografis</h1>
                    <h5 class="display-3 text-center">Sistem Pengaduan Jaringan Dalam Bentuk Geospasial.</h5>
                </div>
                <div class="garis__line__login"></div>
                <div class="col-md-4 area__login">
                    <h2 class="text-center " style="font-size: 50px; margin-bottom: 30px"><b>Login</b></h2>
                    <form action="<?php echo site_url('auth-login') ?>" method="post">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="username" placeholder="username" />
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                            <?= form_error('username') ?>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Password" />
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <?= form_error('password') ?>
                        </div>
                        <button type="submit" name="login" class="btn btn-danger btn-lg">Masuk</button>
                    </form>
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