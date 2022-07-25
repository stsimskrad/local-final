<template>
    <div id="app">
        <section id="features" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-n4">
                        <div class="text-center mb-5">
                            <h4>Zamboanga Del Sur Qualifiers</h4>
                            <div class="mt-n2 small-title">Region IX</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <table class="table table-centered table-bordered table-nowrap">
                            <thead class="thead-light">
                                <tr class="font-size-10">
                                    <th class="text-center" style="width: 40%;">Municipality</th>
                                    <th class="text-center" style="width: 20%;">Merit</th>
                                    <th class="text-center" style="width: 20%;">RA 7678</th>
                                    <th class="text-center fw-bold" style="width: 20%;">Total</th>
                                </tr>
                            </thead>
                            <tbody class="font-size-11">
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Josefina</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center" style="width: 20%;">1</td>
                                    <td class="text-center fw-bold" style="width: 20%;">1</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Kumalarang</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center" style="width: 20%;">1</td>
                                    <td class="text-center fw-bold" style="width: 20%;">1</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Lakewood</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center" style="width: 20%;">1</td>
                                    <td class="text-center fw-bold" style="width: 20%;">1</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Mahayag</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center" style="width: 20%;">1</td>
                                    <td class="text-center fw-bold" style="width: 20%;">1</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Molave</td>
                                    <td class="text-center" style="width: 20%;">3</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center fw-bold" style="width: 20%;">3</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Pagadian</td>
                                    <td class="text-center" style="width: 20%;">13</td>
                                    <td class="text-center" style="width: 20%;">3</td>
                                    <td class="text-center fw-bold" style="width: 20%;">16</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Sominot</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center" style="width: 20%;">1</td>
                                    <td class="text-center fw-bold" style="width: 20%;">1</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Labangan</td>
                                    <td class="text-center" style="width: 20%;">2</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center fw-bold" style="width: 20%;">2</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Midsalip</td>
                                    <td class="text-center" style="width: 20%;">1</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center fw-bold" style="width: 20%;">1</td>
                                </tr>
                                  <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Dumingag</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center" style="width: 20%;">1</td>
                                    <td class="text-center fw-bold" style="width: 20%;">1</td>
                                </tr>
                                <tr>
                                    <td class="text-center fw-bold" style="width: 40%;">Tambulig</td>
                                    <td class="text-center" style="width: 20%;">0</td>
                                    <td class="text-center" style="width: 20%;">2</td>
                                    <td class="text-center fw-bold" style="width: 20%;">2</td>
                                </tr>
                                <tr>
                                    <td colspan="3"></td>
                                    <td class="text-center text-primary fw-bold">30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <div class="row align-items-center pt-4">
                    <div class="col-md-12 mt-n4">
                        <p class="text-muted fw-bold ms-1 mb-2 font-size-16"> <span class="text-primary">23%
                                (30)</span> of
                            region IX qualifiers are from <span class="text-danger">Zamboanga Del Sur</span></p>
                        <div class="card">
                            <div class="card-body mt-n2 mb-n2 ms-n2 me-n2">
                                <div class="progress" style="height: 15px;">
                                    <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="46.6"
                                        class="progress-bar progress-bar-striped progress-bar-animated"
                                        style="width: 23%;">
                                        <div class="progress-label">23%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="chart">
                            <apexchart type="bar" height="350" :options="chartOptions" :series="series"></apexchart>
                        </div>
                    </div>
                     <div class="button-items">
                        <Link href="/orientation" class=" float-end btn btn-outline-primary">
                            Back
                        </Link>
                    </div>

                </div>
                    </div>
                </div>
                
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        layout: null,
        data() {
            return {
                series: [{
                    name: 'Merit',
                    data: [0,0,0,0, 3,13,0, 2,1,0,0]
                }, {
                    name: 'RA 7678',
                    data: [1,1,1,1,0,3,1,0,0,1,2]
                }, ],
                chartOptions: {
                    chart: {
                        type: 'bar',
                        height: 350
                    },
                    plotOptions: {
                        bar: {
                            horizontal: false,
                            columnWidth: '55%',
                            endingShape: 'rounded'
                        },
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        show: true,
                        width: 2,
                        colors: ['transparent']
                    },
                    xaxis: {
                        categories: [
                            "Josefina",
                            "Kumalarang",
                            "Lakewood",
                            "Mahayag",
                            "Molave",
                            "Pagadian",
                            "Sominot",
                            "Labangan",
                            "Midsalip",
                            "Dumingag",
                            "Tambulig"
                        ],
                    },
                    yaxis: {
                        title: {
                            text: 'Qualifiers'
                        }
                    },
                    fill: {
                        opacity: 1
                    },
                    tooltip: {
                        y: {
                            formatter: function (val) {
                                return val + " Qualifiers"
                            }
                        }
                    }
                },
            }
        }
    }

</script>
<style>
.apexcharts-text .apexcharts-xaxis-label {
    color: red;
}
</style>