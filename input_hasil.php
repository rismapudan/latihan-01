    <!DOCTYPE html>
    <html lang="en">
      <head>
        <title>Formulir Mahasiswa</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
      </head>
      <body>
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center  mt-5 text-primary">Sistem Perhitungan Nilai Mahasiswa</h2>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-12">
              <h4 class="text-center text-dark mt-2 mb-5 text-secondary">-Univ UBSI Pontianak-</h4>
            </div>
          </div>
        </div>

        <div class="container">
          <form method="post" action="output_hasil.php">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="no_induk">No Induk Mahasiswa</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nim"
                    name="nim"
                    placeholder="Masukkan No Induk"
                    required
                  />
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label for="nama_lengkap">Nama Lengkap</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nama_lengkap"
                    name="nama"
                    placeholder="Masukkan Nama Lengkap"
                    required
                  />
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Waktu Kuliah</label>
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      name="waktu"
                      value="pagi"
                    />
                    <label class="form-check-label">Pagi/Siang</label>
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      name="waktu"
                      value="sore"
                    />
                    <label class="form-check-label">Sore/Malam</label>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="program_studi">Program Studi</label>
                  <select
                    name="prodi"
                    class="form-control"
                    id="program_studi"
                  >
                    <option disabled selected>-Pilih Program Studi-</option>
                    <option value="SI">Sistem Informasi</option>
                    <option value="IN">Teknik Iformatika</option>
                    <option value="AK">Akuntansi</option>
                    <!-- Tambahkan pilihan program studi lainnya -->
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="semester">Semester</label>
                  <input
                    placeholder="Semester"
                    type="number"
                    class="form-control"
                    id="semester"
                    name="semester"
                    required
                  />
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="kelas">Kelas</label>
                  <input
                    placeholder="Kelas"
                    type="text"
                    class="form-control"
                    id="kelas"
                    name="kelas"
                    required
                  />
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="jumlah_hadir">Jumlah Hadir</label>
                  <input
                    placeholder="Jumlah Hadir"
                    type="number"
                    class="form-control"
                    id="jumlah_hadir"
                    name="hadir"
                    required
                  />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nilai_tugas">Nilai Tugas</label>
                  <input
                    placeholder="Nilai Tugas"
                    type="number"
                    class="form-control"
                    id="nilai_tugas"
                    name="tugas"
                    required
                  />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nilai_uts">Nilai UTS</label>
                  <input
                    placeholder="Nilai Uts"
                    type="number"
                    class="form-control"
                    id="nilai_uts"
                    name="uts"
                    required
                  />
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="nilai_uas">Nilai UAS</label>
                  <input
                    placeholder="Nilai Uas"
                    type="number"
                    class="form-control text-center"
                    id="Nilai_uas"
                    name="uas"
                    required
                  />
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 text-right mt-3">
                <input
                  type="reset"
                  class="btn btn-light text-secondary border border-secondary"
                  value="Reset Nilai"
                />
                <input
                  type="submit"
                  class="btn btn-light text-primary border border-primary"
                  value="Simpan Nilai"
                />
              </div>
            </div>
          </form>
        </div>

        <script
          src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
          integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
          crossorigin="anonymous"
        ></script>
        <script
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
          integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
          crossorigin="anonymous"
        ></script>
      </body>
    </html>
  </body>
</html>