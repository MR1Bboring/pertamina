@extends('main')

@section('conten')
<div class="d-xl-flex justify-content-between align-items-start">
    <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
    <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
      <div class="dropdown ms-0 ml-md-4 mt-2 mt-lg-0">
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
          <h6 class="dropdown-header">Settings</h6>
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
        <ul class="nav nav-tabs tab-transparent" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#" role="tab" aria-selected="true"></a>
          </li>
        </ul>
      </div>
      <div class="tab-content tab-transparent-content">
        <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
          <div class="row">
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="mb-2 text-dark font-weight-normal">HARIAN</h5>
                  <h2 class="mb-4 text-dark font-weight-bold">932</h2>
                  <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                  <p class="mt-4 mb-0">Data Masuk</p>
                  <h3 class="mb-0 font-weight-bold mt-2 text-dark">30%</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="mb-2 text-dark font-weight-normal">Mingguan</h5>
                  <h2 class="mb-4 text-dark font-weight-bold">756</h2>
                  <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                  <p class="mt-4 mb-0">Data Masuk</p>
                  <h3 class="mb-0 font-weight-bold mt-2 text-dark">20%</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="mb-2 text-dark font-weight-normal">Bulanan</h5>
                  <h2 class="mb-4 text-dark font-weight-bold">100</h2>
                  <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                  <p class="mt-4 mb-0">Data Masuk</p>
                  <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body text-center">
                  <h5 class="mb-2 text-dark font-weight-normal">Tahunan</h5>
                  <h2 class="mb-4 text-dark font-weight-bold">4250</h2>
                  <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                  <p class="mt-4 mb-0">Data Masuk</p>
                  <h3 class="mb-0 font-weight-bold mt-2 text-dark">70%</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection