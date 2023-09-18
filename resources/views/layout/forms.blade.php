@extends('main')
@section('conten')
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Isi form</h4>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputTanggal">Tangal</label>
                        <input type="date" class="form-control" id="exampleInputtanggal" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputJamMasuk">Jam Masuk</label>
                        <input type="time" class="form-control" id="exampleInputJamMasuk" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputJamKeluar">Jam Keluar</label>
                        <input type="time" class="form-control" id="exampleInputJamKeluar" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNama1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputNama1" placeholder="Masuk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputAlamat">Instansi/ Alamat</label>
                        <input type="text" class="form-control" id="exampleInputAlamat" placeholder="Masuk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNoHp">No Hp</label>
                        <input type="text" class="form-control" id="exampleInputNoHp" placeholder="Masuk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputKunjungi">Yang Dikunjungi</label>
                        <input type="text" class="form-control" id="exampleInputKunjungi" placeholder="Masuk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputKeperluan">Keperluan</label>
                        <input type="text" class="form-control" id="exampleInputKeperluan" placeholder="Masuk">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputVisitor">No Vusitor</label>
                        <input type="text" class="form-control" id="exampleInputVisitor" placeholder="Masuk">
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Masukan Data</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection