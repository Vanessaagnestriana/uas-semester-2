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

        <div class="card card-primary">

            <div class="card-header">

                <h3 class="card-title"><?= $data['title']; ?></h3>

            </div>

            <form role="form" action="<?= base_url; ?>/blog/simpanBlog" method="POST" enctype="multipart/form-data">

                <div class="card-body">

                    <div class="form-group">

                        <label >Nama Judul Blog</label>

                        <input type="text" class="form-control" placeholder="masukkan judul..." name="nama_judul" required>

                    </div>

                    <div class="form-group">

                        <label >Nama Penulis Blog</label>

                        <input type="text" class="form-control" placeholder="masukkan penulis..." name="nama_penulis" required>

                    </div>

                    <div class="form-group">

                        <label >Tanggal Posting</label>

                        <input type="date" class="form-control" placeholder="masukkan tanggal..." name="tanggal" required>

                    </div>

                    <div class="form-group">

                        <label >Kategori Blog Mimika</label>

                        <select class="form-control" name="kategori_nama">

                            <option value="">Pilih Kategori</option>

                            <?php foreach ($data['kategori'] as $row) :?>

                                <option value="<?= $row['nama_kategori']; ?>"><?= $row['nama_kategori']; ?></option>

                            <?php endforeach; ?>

                        </select>

                    </div>



                    <div class="form-group">

                        <label >Jumlah Komentar </label>

                        <input type="number" class="form-control" placeholder="masukkan jumlah komentar..." name="komentar" required>

                    </div>



                </div>

                <div class="card-footer">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>

    </section>

</div>
