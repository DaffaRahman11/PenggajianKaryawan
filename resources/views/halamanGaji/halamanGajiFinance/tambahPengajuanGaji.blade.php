<x-layout>
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>Tambah Pengajuan Gaji</h4>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">
                        <svg class="stroke-icon">
                          <use
                            href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"
                          ></use></svg
                      ></a>
                    </li>
                    <li class="breadcrumb-item">Gaji</li>
                    <li class="breadcrumb-item active">Tambah Pengajuan Gaji</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <form>
                    @csrf
                    <div class="form theme-form">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Nama Karyawan</label>
                            <select class="form-select">
                              <option>Hourly</option>
                              <option>Fix price</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label>Gaji Pokok (Rp.)</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Enter project Rate"
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label>Bonus (Rp.)</label>
                            <input
                              class="form-control"
                              type="text"
                              placeholder="Enter project Rate"
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="text-end">
                            <a class="btn btn-success me-3" href="#">Add</a
                            ><a class="btn btn-danger" href="#">Cancel</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
</x-layout>