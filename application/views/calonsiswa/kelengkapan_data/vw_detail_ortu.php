<!-- Page Content -->
<h2 class="h3 mb-2 text-gray-800">
  <?= $judul; ?>
</h2>
<hr>
<!-- DataTables Example -->
<div class="card mb-3">

  <div class="card-body">
    <div class="row">
      <div class="col-md-8">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($orangtua as $us): ?>
                <tr>
                  <td colspan="3"><b>DATA ORANGTUA</b></td>
                </tr>
                <tr>
                  <td>Nama Ayah</td>
                  <td>
                    <?= $us['nama_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td>NIK Ayah</td>
                  <td>
                    <?= $us['nik_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Tempat Lahir Ayah</td>
                  <td>
                    <?= $us['tempat_lahir_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Lahir Ayah </td>
                  <td>
                      <?= strftime('%d %B %Y', strtotime($us['tgl_lahir_ayah'])); ?>
                  </td>
                </tr>
                <tr>
                  <td>Pendidikan Terakhir Ayah</td>
                  <td>
                    <?= $us['pendidikan_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Pekerjaan Ayah</td>
                  <td>
                    <?= $us['pekerjaan_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td> Golongan Ayah (jika PNS)</td>
                  <td>
                    <?= $us['golongan_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Penghasilan Ayah</td>
                  <td>
                    <?= $us['penghasilan_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Keterangan Ayah</td>
                  <td>
                    <?= $us['keterangan_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Email Ayah</td>
                  <td>
                    <?= $us['email_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td> No HP Ayah</td>
                  <td>
                    <?= $us['no_hp_ayah']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Nama Ibu</td>
                  <td>
                    <?= $us['nama_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>NIK Ibu</td>
                  <td>
                    <?= $us['nik_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Tempat Lahir Ibu</td>
                  <td>
                    <?= $us['tempat_lahir_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Lahir Ibu </td>
                  <td>
                    <?= strftime('%d %B %Y', strtotime($us['tgl_lahir_ibu'])); ?>
                  </td>
                </tr>
                <tr>
                  <td>Pendidikan Terakhir Ibu</td>
                  <td>
                    <?= $us['pendidikan_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Pekerjaan Ibu</td>
                  <td>
                    <?= $us['pekerjaan_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Penghasilan Ibu</td>
                  <td>
                    <?= $us['penghasilan_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Golongan Ibu (Jika PNS)</td>
                  <td>
                    <?= $us['golongan_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Keterangan Ibu</td>
                  <td>
                    <?= $us['keterangan_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Email Ibu</td>
                  <td>
                    <?= $us['email_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>No HP Ibu</td>
                  <td>
                    <?= $us['no_hp_ibu']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Jumlah Tanggungan Orang Tua</td>
                  <td>
                    <?= $us['jml_tanggungan']; ?>
                  </td>
                </tr>
                <tr>
                  <td>Alamat Orang Tua</td>
                  <td>
                    <?= $us['alamat_ortu']; ?>
                  </td>
                </tr>
                <?php $i++; ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>