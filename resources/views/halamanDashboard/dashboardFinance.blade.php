<x-layout>
  <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>Dashboard Divisi Finance</h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">
                        <svg class="stroke-icon">
                          <use
                            href="{{ asset('/assets/svg/icon-sprite.svg#stroke-home') }}"
                          ></use></svg
                      ></a>
                    </li>
                    <li class="breadcrumb-item">Dashboard</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row size-column">
              <div class="col-xxl-3 col-sm-6 box-col-6">
                <div class="card height-equal">
                  <div class="card-header card-no-border total-revenue">
                    <h4>Daftar Karyawan</h4>
                    <a href="product.html">View All</a>
                  </div>
                  <div class="card-body pt-0">
                    <div class="new-user">
                      <ul>
                        @foreach ( $karyawanDashboardFinances as $karyawanDashboardFinance )
                        <li>
                          <div class="space-common d-flex user-name">
                            <img
                              class="img-40 rounded-circle img-fluid me-2"
                              src="{{ asset('/assets/images/user/22.png') }}"
                              alt="user"
                            />
                            <div class="common-space w-100">
                              <div>
                                <h6>
                                  <a
                                    class="f-w-500 f-14"
                                    href="user-profile.html"
                                    >{{ $karyawanDashboardFinance->namaKaryawan }}</a
                                  >
                                </h6>
                                <span class="f-light f-w-500 f-12">Divisi {{ $karyawanDashboardFinance->karyawanDivisi->namaDivisi }}</span>
                              </div>
                              <div class="product-sub">
                                <div class="dropdown">
                                  <div
                                    id="dropdownMenuButtonicon31"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                    role="menu"
                                  >
                                    <svg class="invoice-icon">
                                      <use
                                        href="{{ asset('/assets/svg/icon-sprite.svg#more-vertical') }}"
                                      ></use>
                                    </svg>
                                  </div>
                                  <div
                                    class="dropdown-menu dropdown-menu-end"
                                    aria-labelledby="dropdownMenuButtonicon31"
                                  >
                                    <span class="dropdown-item"
                                      >Last Month </span
                                    ><span class="dropdown-item">Last Week</span
                                    ><span class="dropdown-item"
                                      >Last Day
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-5 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header card-no-border total-revenue">
                    <h4>Pengajuan Gaji Terbaru</h4>
                    <a href="product.html">View All</a>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-order table-responsive custom-scrollbar">
                      <table class="w-100 tranaction-table" >
                        <thead>
                          <tr>
                            <th>Nama Karyawan</th>
                            <th>Gaji Bersih</th>
                            <th>Bulan</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ( $pengajuanDashboardFinances as $pengajuanDashboardFinance )  
                          <tr>
                            <td>
                              <div class="product-name">
                                <a class="f-14 f-w-500" href="product.html"
                                  >{{ $pengajuanDashboardFinance->gajiKaryawan->namaKaryawan }}</a
                                >
                              </div>
                            </td>
                            <td class="f-14 f-w-500">{{ $pengajuanDashboardFinance->gajiBersih }}</td>
                            <td class="f-14 f-w-500">Juni 2025</td>
                            <td>
                              <div class="txt-warning">
                                <span class="f-w-500 f-13">{{ $pengajuanDashboardFinance->gajiStatus->status }}</span>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-5 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header card-no-border total-revenue">
                    <h4>Gaji Terbayar</h4>
                    <a href="product.html">View All</a>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-order table-responsive custom-scrollbar">
                      <table class="w-100 tranaction-table" >
                        <thead>
                          <tr>
                            <th>Nama Karyawan</th>
                            <th>Gaji Bersih</th>
                            <th>Bulan</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ( $terbayarDashboardFinances as $terbayarDashboardFinance )  
                          <tr>
                            <td>
                              <div class="product-name">
                                <a class="f-14 f-w-500" href="product.html"
                                  >{{ $terbayarDashboardFinance->gajiKaryawan->namaKaryawan }}</a
                                >
                              </div>
                            </td>
                            <td class="f-14 f-w-500">{{ $terbayarDashboardFinance->gajiBersih }}</td>
                            <td class="f-14 f-w-500">Juni 2025</td>
                            <td>
                              <div class="txt-secondary">
                                <span class="f-w-500 f-13">{{ $terbayarDashboardFinance->gajiStatus->status }}</span>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-5 col-xl-6 box-col-6">
                <div class="card">
                  <div class="card-header card-no-border total-revenue">
                    <h4>Pengajuan Ditolak</h4>
                    <a href="product.html">View All</a>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-order table-responsive custom-scrollbar">
                      <table class="w-100 tranaction-table" >
                        <thead>
                          <tr>
                            <th>Nama  Karyawan</th>
                            <th>Gaji Bersih</th>
                            <th>Bulan</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ( $ditolakDashboardFinances as $ditolakDashboardFinance )  
                          <tr>
                            <td>
                              <div class="product-name">
                                <a class="f-14 f-w-500" href="product.html"
                                  >{{ $ditolakDashboardFinance->gajiKaryawan->namaKaryawan }}</a
                                >
                              </div>
                            </td>
                            <td class="f-14 f-w-500">{{ $ditolakDashboardFinance->gajiBersih }}</td>
                            <td class="f-14 f-w-500">Juni 2025</td>
                            <td>
                              <div class="txt-secondary">
                                <span class="f-w-500 f-13">{{ $ditolakDashboardFinance->gajiStatus->status }}</span>
                              </div>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
</x-layout>