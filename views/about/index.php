<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1><?= $data['title']; ?></h1>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="card">

            <div class="card-header">

                <h3 class="card-title"><?= $data['title']; ?></h3>

            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-md-2 text-right">

                        Nama :

                    </div>

                    <div class="col-md-10 text-left">

                        <?= $data['nama']; ?>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-2 text-right">

                        Progam Study :

                    </div>

                    <div class="col-md-10 text-left">

                        <?= $data['prodi']; ?>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-2 text-right">

                        Github :

                    </div>

                    <div class="col-md-10 text-left">

                        <a href="<?= $data['github']; ?>"><?= $data['github']; ?></a>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>
