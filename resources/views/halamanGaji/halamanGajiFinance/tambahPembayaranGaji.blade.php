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
                      <form
                        class="dropzone"
                        id="singleFileUpload"
                        action="/dashboardFinance/uploadBuktiPembayaran"
                        method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="gaji_id" value="{{ $gaji->id }}">
                          <div class="row">
                            <div class="col">
                              <div class="mb-3">
                                <label>Upload Bukti Pembayaran Gaji</label>
                                  <div class="dz-message needsclick">
                                    <i class="icon-cloud-up"></i>
                                    <h6 class="f-w-600">
                                      Drop files here or click to upload.
                                    </h6>
                                    <span class="note needsclick"
                                      >(Available For <strong>Image</strong> File Only )</span
                                    >
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
          </div>
          <!-- Container-fluid Ends-->
  


</x-layout>