<div class="border bg-white shadow-md rounded-lg p-8">
    <!-- Header -->
    <div class="flex flex-col justify-between items-start ">


        <div class="flex w-full  pb-4 justify-between">
            <div class="flex items-center">
                <h2 class="text-l font-semibold text-gray-900">
                    Grafik Tingkat Kunjungan Pelanggan
                </h2>

            </div>

            <div class="relative">
                <select class="appearance-none bg-gray-50 border border-gray-200 rounded-lg px-4 py-2 pr-8 text-xs text-gray-600">
                    <option>12 months</option>
                </select>
                <div class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    </svg>
                </div>
            </div>
        </div>
        <hr class="w-full h-1 bg-gray pb-5">
        <div>
            <div class="flex items-start mt-2">
                <span class="text-3xl font-bold text-gray-900">295</span>
                <span class="ml-2 px-2 py-1 text-xs font-medium text-green-700 bg-green-100 rounded">
                    +2.7%
                </span>
            </div>
            <p class="text-sm text-gray-600 mt-1">Hewan Dirawat</p>
        </div>
    </div>

    <!-- Graph -->
    <div class="h-64 mt-4">
        <canvas id="visitorChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('visitorChart').getContext('2d');

    // Data untuk grafik
    const data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
            label: 'Kunjungan',
            data: [25, 25, 25, 32, 38, 40, 40, 40, 35, 28, 23, 23],
            fill: true,
            borderColor: '#FF4D75',
            borderWidth: 2,
            tension: 0.4,
            backgroundColor: (context) => {
                const chart = context.chart;
                const {ctx, chartArea} = chart;
                if (!chartArea) return null;

                const gradient = ctx.createLinearGradient(0, chartArea.top, 0, chartArea.bottom);
                gradient.addColorStop(0, 'rgba(255, 77, 117, 0.1)');
                gradient.addColorStop(1, 'rgba(255, 77, 117, 0)');
                return gradient;
            },
            pointRadius: 0,
            pointHoverRadius: 6,
            pointHoverBackgroundColor: '#FF4D75',
            pointHoverBorderColor: 'white',
            pointHoverBorderWidth: 2
        }]
    };

    // Konfigurasi grafik
    const config = {
        type: 'line',
        data: data,
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        font: {
                            size: 12,
                            family: "'Inter', sans-serif"
                        },
                        color: '#9CA3AF'
                    }
                },
                y: {
                beginAtZero: true,
                max: 50,  // Change this value to adjust the top of the graph
                ticks: {
                    stepSize: 10,  // You might want to adjust this too
                    font: {
                        size: 12,
                        family: "'Inter', sans-serif"
                    },
                    color: '#9CA3AF'
                },
                grid: {
                    color: '#F3F4F6'
                }
            }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: 'white',
                    titleColor: '#6B7280',
                    bodyColor: '#111827',
                    titleFont: {
                        size: 12,
                        family: "'Inter', sans-serif"
                    },
                    bodyFont: {
                        size: 14,
                        family: "'Inter', sans-serif",
                        weight: 'bold'
                    },
                    padding: 12,
                    borderColor: '#E5E7EB',
                    borderWidth: 1,
                    displayColors: false,
                    callbacks: {
                        title: function(context) {
                            return context[0].label + ' 23, 2024';
                        },
                        label: function(context) {
                            return context.parsed.y + '% +24%';
                        }
                    }
                }
            },
            interaction: {
                intersect: false,
                mode: 'index'
            }
        }
    };

    // Membuat grafik
    new Chart(ctx, config);
</script>
