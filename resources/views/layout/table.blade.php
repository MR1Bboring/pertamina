@extends('main')
@section('conten')
            <div class="row">
              <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data Tamu</h4>
                    <p class="card-description"><code></code>
                    </p>
                    <table class="table table-bordered">
                      <thead class="container">
                        <tr>
                          <th> No </th>
                          <th> tanggal </th>
                          <th> jam masuk </th>
                          <th> jam keluar </th>
                          <th> nama </th>
                          <th> instansi</th>
                          <th> no hp </th>
                          <th> yang di kunjungi </th>
                          <th> no visitor </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($studentlist as $data)
                        <tr class="table-info">

                               <th>{{ $data->id }}</th> 
                               <th>{{ $data->tanggal }}</th>
                               <th> {{ $data->jam_masuk }} </th>
                               <th> {{ $data->jam_keluar }}  </th>
                               <th> {{ $data->Nama }}  </th>
                               <th> {{ $data->instansi }} </th>
                               <th> {{ $data->No_hp }} </th>
                               <th> {{ $data->dikunjungi }} </th>
                               <th> {{ $data->No_visitor }} </th>
                               <th><a href="#">
                                <img src="{{ asset('assets/images/print.png ') }}" height="1px">
                              </a></th>
                            </tr>
                            @endforeach
                        {{-- <tr class="table-warning">
                          <td> 2 </td>
                          <td> Adhwa </td>
                          <td> SMKN 1 Garut </td>
                          <td> Ke ICT </td>
                          <td> PKL </td>
                        </tr> --}}
                        {{-- <tr class="table-danger">
                          <td> 3 </td>
                          <td> Refi </td>
                          <td> SMKN 1 Garut </td>
                          <td> Ke ICT </td>
                          <td> PKL </td>
                        </tr> --}}
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection