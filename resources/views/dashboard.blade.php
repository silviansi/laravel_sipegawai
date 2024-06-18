@extends('layouts.base-dashboard')
@section('title', 'Dashboard')
@section('content')

<main class="content px-3 py-2">
  <div class="container-fluid">
      <div class="mb-3">
          <h4>Selamat Datang di SIPegawai Dashboard</h4>
      </div>
      <div class="row">
          <div class="col-12 col-md-4 d-flex">
              <div class="card flex-fill border-0 illustration">
                  <div class="card-body p-0 d-flex flex-fill">
                      <div class="row g-0 w-100">
                          <div class="col-6">
                              <div class="p-3 m-1">
                                  <h4>Welcome Back, Admin</h4>
                                  <p class="mb-0">Admin Dashboard, CodzSword</p>
                              </div>
                          </div>
                          <div class="col-6 align-self-end text-end">
                              <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                  alt="">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 d-flex">
              <div class="card flex-fill border-0">
                  <div class="card-body py-4">
                      <div class="d-flex align-items-start">
                          <div class="flex-grow-1">
                              <h4 class="mb-2">
                                  $ 78.00
                              </h4>
                              <p class="mb-2">
                                  Total Earnings
                              </p>
                              <div class="mb-0">
                                  <span class="badge text-success me-2">
                                      +9.0%
                                  </span>
                                  <span class="text-muted">
                                      Since Last Month
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill border-0 illustration">
                <div class="card-body p-0 d-flex flex-fill">
                    <div class="row g-0 w-100">
                        <div class="col-6">
                            <div class="p-3 m-1">
                                <h4>Welcome Back, Admin</h4>
                                <p class="mb-0">Admin Dashboard, CodzSword</p>
                            </div>
                        </div>
                        <div class="col-6 align-self-end text-end">
                            <img src="image/customer-support.jpg" class="img-fluid illustration-img"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!-- Table Element -->
    </div>
</main>
@endsection