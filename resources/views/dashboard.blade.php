@extends('layouts.base')
@section('title', 'Dashboard')
@section('content')

<main class="content px-3 py-2">
  <div class="container-fluid">
      <div class="mb-3">
          <h4 class="fw-bold">Selamat Datang di SIPegawai Dashboard</h4>
      </div>
      <div class="row">
        <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill border-0 shadow-sm illustration">
                <div class="card-body text-center">
                  <h5 class="card-title">Total Semua Pegawai</h5>
                  <h2 class="display-4">{{ $totalPegawai }}</h2>
                </div>
            </div>
        </div>
          <div class="col-12 col-md-4 d-flex">
              <div class="card flex-fill border-0">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Pegawai Aktif</h5>
                    <h2 class="display-4">{{ $totalPegawaiAktif }}</h2>
                </div>
              </div>
          </div>
          <div class="col-12 col-md-4 d-flex">
            <div class="card flex-fill border-0 shadow-sm illustration">
                <div class="card-body text-center">
                  <h5 class="card-title">Total Pegawai Cuti</h5>
                  <h2 class="display-4">{{ $totalPegawaiCuti }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 text-center">
            <div class="card">
                <div class="card-header border-0">
                    <h5 class="card-title">Jumlah Pegawai di Setiap Divisi</h5>
                </div>
                <div class="card-body">
                    <canvas id="bagianPegawai"></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 text-center">
            <div class="card">
                <div class="card-header border-0">
                    <h5 class="card-title">Jumlah Pegawai di Setiap Status</h5>
                </div>
                <div class="card-body">
                    <canvas id="statusPegawai"></canvas>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection

@push('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function getRandomColor() {
    const letters = '0123456789ABCDEF';
    let color = '#';
    for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
    }

    function generateColors(count) {
        const backgroundColors = [];
        const borderColors = [];
        for (let i = 0; i < count; i++) {
            const bgColor = getRandomColor();
            backgroundColors.push(bgColor + 'B3'); // 70% opacity
            borderColors.push(bgColor);
        }
        return { backgroundColors, borderColors };
    }
    // Grafik Donat untuk Jumlah Pegawai Setiap Bagian
    const ctxBagian = document.getElementById('bagianPegawai').getContext('2d');
    const bagianColors = generateColors(@json($bagians->count()));

    const bagianData = {
        labels: @json($bagians->values()), // Nama bagian
        datasets: [{
            label: 'Jumlah Pegawai Setiap Bagian',
            data: @json($pegawaiPerBagian->values()), // Jumlah pegawai untuk setiap bagian
            backgroundColor: bagianColors.backgroundColors,
            borderColor: bagianColors.borderColors,
            borderWidth: 1
        }]
    };

    const bagianChart = new Chart(ctxBagian, {
    type: 'doughnut',
    data: bagianData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw.toLocaleString();
                        }
                    }
                }
            }
        }
    });

    // Grafik Pie untuk Jumlah Pegawai Setiap Status
    const ctxStatus = document.getElementById('statusPegawai').getContext('2d');
    const statusColors = generateColors(@json($statuses->count()));

    const statusData = {
        labels: @json($statuses->values()), // Nama status
        datasets: [{
            label: 'Jumlah Pegawai Setiap Status',
            data: @json($pegawaiPerStatus->values()), // Jumlah pegawai untuk setiap status
            backgroundColor: statusColors.backgroundColors,
            borderColor: statusColors.borderColors,
            borderWidth: 1
        }]
    };

    const statusChart = new Chart(ctxStatus, {
    type: 'pie',
    data: statusData,
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'top',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        return tooltipItem.label + ': ' + tooltipItem.raw.toLocaleString();
                    }
                }
            }
        }
    }
});
</script>
@endpush