<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher::flash(); ?>
    </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
  <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#forModal">
    Tambah Data Mahasiswa
</button>
  </div>
</div>

<div class="row mb-3">
  <div class="col-lg-6">
  <form action="<?=BASEURL; ?>/mahasiswa/cari" method="post">
  <div class="input-group">
    <input type="text" class="form-control" placeholder="Masukkan Nama" aria-label="Masukkan Nama" aria-describedby="Masukkan Nama" name="keyword" id="keyword" autocomplete="off">
    <div class="input-group-append">
      <button class="btn btn-outline-secondary" type="submit" id="button-addition2">Search</button>
    </div>
  </div>
</form>
  </div>
</div>

    <div class="row">
        <div class="col-lg-6">
            <!-- Button trigger modal -->


<br><br>

<h3>Daftar Mahasiswa</h3>
<ul class="list-group">
    <?php foreach($data['mhs'] as $mhs):  ?>
        <li class="list-group-item "><?=$mhs['nama']; ?>
        <a href="<?=BASEURL; ?>/mahasiswa/hapus/<?=$mhs['id']?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?')">Hapus</a>
        <a href="<?=BASEURL; ?>/mahasiswa/ubah/<?=$mhs['id']?>" class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?=$mhs["id"]; ?>">Ubah</a>
        <a href="<?=BASEURL; ?>/mahasiswa/detail/<?=$mhs['id']?>" class="badge badge-info float-right ml-1">Detail</a>
    </li>
        <?php endforeach; ?>    
    </ul>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Input Nama">
        </div>
        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="number" class="form-control" id="nrp" name="nrp" placeholder="Input Nama">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Input Nama">
        </div>
        <div class="form-group">
    <label for="jurusan">Example select</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknik Industri">Teknik Industri</option>
      <option value="Teknik Mekanik">Teknik Mekanik</option>
      <option value="Teknik Kedokteran">Teknik Kedokteran</option>
    </select>
  </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>