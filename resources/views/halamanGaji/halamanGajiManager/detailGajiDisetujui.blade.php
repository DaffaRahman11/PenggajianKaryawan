<x-layout>
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>Detail Gaji Ditolak Milik {{ $gaji->LogGaji->gajiKaryawan->namaKaryawan }}</h4>
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
                    <li class="breadcrumb-item active">Detail Gaji Ditolak</li>
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
                    <div class="form theme-form">
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Nama Karyawan</label>
                            <input
                              class="form-control"
                              type="text"
                              id="gaji_IdKaryawan" name="gaji_IdKaryawan"
                              value="{{ $gaji->LogGaji->gajiKaryawan->namaKaryawan ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Divisi </label>
                            <input
                              class="form-control"
                              type="text"
                              id="gaji_IdKaryawan" name="gaji_IdKaryawan"
                              value="Divisi {{ $gaji->LogGaji->gajiKaryawan->karyawanDivisi->namaDivisi ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label>Gaji Pokok </label>
                            <input
                              class="form-control"
                              type="text"
                              id="gajiPokok" name="gajiPokok"
                              value="Rp. {{ $gaji->LogGaji->gajiPokok ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label>Bonus</label>
                            <input
                              class="form-control"
                              type="text"
                              id="bonus" name="bonus"
                              value="Rp. {{ $gaji->LogGaji->bonus ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label>Nominal PPH </label>
                            <input
                              class="form-control"
                              type="text"
                              id="nominalPPH" name="nominalPPH"
                              value="Rp. {{ $gaji->LogGaji->nominalPPH ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label>PPH ( % )</label>
                            <input
                              class="form-control"
                              type="text"
                              id="pph" name="pph"
                              value="{{ $gaji->LogGaji->pph ?? '-' }} "
                              disabled
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label>Periode Gaji</label>
                            <input
                              class="form-control"
                              type="text"
                              id="periodeGaji" name="periodeGaji"
                              value="{{ $gaji->LogGaji->periodeGaji ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="mb-3">
                            <label>Status Pengajuan</label>
                            <input
                              class="form-control"
                              type="text"
                              id="gaji_IdStatus" name="gaji_IdStatus"
                              value="{{ $gaji->LogGajiStatus->status ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Gaji Bersih </label>
                            <input
                              class="form-control"
                              type="text"
                              id="gajiBersih" name="gajiBersih"
                              value="Rp. {{ $gaji->LogGaji->gajiBersih ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <label>Catatan Penolakan</label>
                            <textarea
                                class="form-control"
                                id="catatan"
                                name="catatan"
                                rows="3"
                                disabled
                              >{{ $gaji->catatan ?? '-' }}
                            </textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="text-end">
                            <a class="btn btn-danger" href="/dashboardFinance/gajiDitolak">Kembali</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
</x-layout>