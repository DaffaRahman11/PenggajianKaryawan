<x-layout>
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h4>Detail Pengajuan Gaji {{ $gaji->gajiKaryawan->namaKaryawan }}</h4>
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
                    <li class="breadcrumb-item active">Detail Pengajuan Gaji</li>
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
                              value="{{ $gaji->gajiKaryawan->namaKaryawan ?? '-' }}"
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
                              value="Divisi {{ $gaji->gajiKaryawan->karyawanDivisi->namaDivisi ?? '-' }}"
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
                              value="Rp. {{ $gaji->gajiPokok ?? '-' }}"
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
                              value="Rp. {{ $gaji->bonus ?? '-' }}"
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
                              value="Rp. {{ $gaji->nominalPPH ?? '-' }}"
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
                              value="{{ $gaji->pph ?? '-' }} "
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
                              value="{{ $gaji->periodeGaji ?? '-' }}"
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
                              value="{{ $gaji->gajiStatus->status ?? '-' }}"
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
                              value="Rp. {{ $gaji->gajiBersih ?? '-' }}"
                              disabled
                            />
                          </div>
                        </div>
                      </div>
                      <form action="/dashboardManager/prosesGajiManager" method="POST">
                      @csrf
                      <div class="row">
                        <div class="col">
                          <div class="mb-3">
                            <input type="hidden" name="gaji_id" value="{{ $gaji->id }}">
                            <label>Catatan Penolakan</label>
                            <textarea
                                class="form-control"
                                id="catatan"
                                name="catatan"
                                rows="3"
                                placeholder="Tuliskan Alasan Pengajuan Diterima atau Ditolak"
                              ></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="text-end">
                            <button class="btn btn-success me-3" type="submit" name="tombol_submit" value="terima">
                              Terima
                            </button>
                            <button class="btn btn-danger me-3" type="submit" name="tombol_submit" value="tolak">
                              Tolak
                            </button>
                            <button class="btn btn-info me-3" type="reset">
                              Reset
                            </button>
                          </div>
                        </div>
                      </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
</x-layout>