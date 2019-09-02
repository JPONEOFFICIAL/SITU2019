<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Surat Keluar</title>
  </head>
  <body>
        <div class="container">
                <div class="text">
                <p>Surat Keluar</p>
            </div>
                        <div class="row" style="margin:auto;">
                          <div class="col-sm">
                                <form>
                                    <div class="form-group row">
                                     <label for="inputNumber" class="col-sm-4 col-form-label">No.Urut</label>
                                     <div class="col-sm-7">
                                     <input type="number" class="form-control" id="inputNumber">
                                     </div>
                                    </div>
                                    <div class="form-group row">
                                     <label for="inputTaggal" class="col-sm-4 col-form-label">Tanggal</label>
                                     <div class="col-sm-5">
                                     <input type="date" class="form-control" id="inputTanggal">
                                     </div>
                                    </div>
                                    <div class="form-group row">
                                     <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
                                     <div class="col-sm-7">
                                     <input type="text" class="form-control" id="inputNama">
                                     </div>
                                    </div>
                                    <div class="form-group row">
                                     <label for="inputJenisKelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                     <div class="col-sm-7">
                                        <select class="col-sm-7 custom-select" id="select">
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                            <option value="">Tidak ada kelamin</option>
                                        </select>
                                     </div> 
                                    </div>
                                </div>
                              <div class="col-sm">
                                <div class="form-group row">
                                 <label for="inputNIS" class="col-sm-5 col-form-label">NIS</label>
                                 <div class="col-sm-7">
                                  <input type="number" class="form-control" id="inputNIS">
                                  </div>
                                </div>
                                <div class="form-group row">
                                 <label for="inputKelas" class="col-sm-5 col-form-label">Kelas</label>
                                 <div class="col-sm-6">
                                 <input type="text" class="form-control" id="inputKelas">
                                 </div>
                                </div>
                                <div class="form-group row">
                                 <label for="inputSuratPindah" class="col-sm-5 col-form-label">No. Surat Pindah</label>
                                 <div class="col-sm-7">
                                 <input type="number" class="form-control" id="inputSuratPindah">
                                 </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPindah" class="col-sm-5 col-form-label">Pindah ke</label>
                                  <div class="col-sm-6">
                                  <input type="text" class="form-control" id="inputPindah">
                                  </div>
                               </div>  
                                 <button type="button" id="tombol-login" class="btn btn-primary btn-sm">Upload</button>
                               <button type="button" id="tombol-login1" class="btn btn-secondary btn-sm">Download</button>
                               </form>
                          </div>
                        </div>
                   </div>   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>