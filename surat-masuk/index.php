<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Surat Masuk</title>
  </head>
  <body> 
    <div class="container">
        <div class="text">
        <p>Surat Masuk</p>
    </div>
                <div class="row" style="margin:auto;">
                  <div class="col-sm">
                        <form>
                            <div class="form-group row">
                             <label for="inputNumber" class="col-sm-4 col-form-label">No</label>
                             <div class="col-sm-7">
                             <input type="number" class="form-control" id="inputNumber">
                             </div>
                            </div>
                            <div class="form-group row">
                             <label for="inputTaggalLahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                             <div class="col-sm-5">
                             <input type="date" class="form-control" id="inputTanggalLahir">
                             </div>
                            </div>
                            <div class="form-group row">
                             <label for="inputSuratDari" class="col-sm-4 col-form-label">Surat dari</label>
                             <div class="col-sm-7">
                             <input type="text" class="form-control" id="inputSuratDari">
                             </div>
                            </div>
                            <div class="form-group row">
                             <label for="inputTanggalSurat" class="col-sm-4 col-form-label">Tanggal Surat</label>
                             <div class="col-sm-5">
                             <input type="date" class="form-control" id="inputTanggalSurat">
                             </div> 
                            </div>
                            <div class="form-group row">
                             <label for="inputNomorSurat" class="col-sm-4 col-form-label">Nomor Surat</label>
                             <div class="col-sm-7">
                             <input type="number" class="form-control" id="inputNomorSurat">
                             </div>
                            </div>
                            <div class="form-group row">
                             <label for="inputNomorSurat" class="col-sm-4 col-form-label">Subjek</label>
                             <div class="col-sm-8">
                             <select class="col-sm-7 custom-select" id="select">
                               <option value="">Undangan</option>
                               <option value="">Pemberitahuan</option>
                               <option value="">Permohonan</option>
                               <option value="">Penawaran</option>
                                <option value="">Kerjasama</option>
                            </select>
                             </div>
                           </div>
                        </div>
                      <div class="col-sm">
                        <div class="form-group row">
                         <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Perihal</label>
                         <div class="col-sm-7">
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                         </div>
                        </div>
                        <div class="form-group row">
                         <label for="inputDiterukanKepada" class="col-sm-5 col-form-label">Diteruskan Kepada</label>
                         <div class="col-sm-7">
                          <input type="text" class="form-control" id="inputDiterukanKepada">
                          </div>
                        </div>
                        <div class="form-group row">
                         <label for="inputTempat" class="col-sm-5 col-form-label">Tempat Pelaksanaan</label>
                         <div class="col-sm-6">
                         <input type="text" class="form-control" id="inputTempat">
                         </div>
                        </div>
                        <div class="form-group row">
                         <label for="inputTanggal" class="col-sm-5 col-form-label">Tanggal Pelaksanaan</label>
                         <div class="col-sm-5">
                         <input type="date" class="form-control" id="inputTanggal">
                         </div>
                        </div>   
                       <div class="form-group row">
                         <label for="exampleFormControlTextarea1" class="col-sm-5 col-form-label">Keterangan</label>
                         <div class="col-sm-7">
                         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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