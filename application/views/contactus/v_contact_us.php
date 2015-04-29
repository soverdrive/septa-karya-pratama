<div class="container-fluid" style="margin-bottom:40px;">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-10 wow fadeInUp">
            <h1>Hubungi Kami</h1>
        </div>
        <form role="form" class="wow fadeInUp" action="hubungi/sendmail" method="POST">
            <div class="col-lg-offset-1 col-lg-5">
                <div class="form-group">
                    <label for="nama">Nama*</label>
                    <input type="text" required="required" class="form-control" name="nama" placeholder="nama">
                </div>
                <div class="form-group">
                    <label for="perusahaan">Perusahaan</label>
                    <input type="text" class="form-control" name="perusahaan" placeholder="perusahaan">
                </div>
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="text" required="required" class="form-control" name="email" placeholder="email">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label for="pesan">Pesan*</label>
                    <textarea type="text" required="required" class="form-control" rows="4" name="pesan"></textarea><br>
                    <label>Kolom bertanda (*) wajib diisi<label>
                </div>
                <div class="form-group" style="margin-top:-4px">
                    <input type="submit" class="btn btn-primary" name="submit_message" value="Kirim"> <?php echo $msg_status; ?>
                </div>
            </div>
        </form>
    </div>
</div>