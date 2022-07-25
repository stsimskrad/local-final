<template>
    <div id="app">
        <section id="features" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mt-n4 mb-n5">
                        <div class="text-center mb-5">
                            <h4>Regional Qualifiers</h4>
                            <div class="mt-n2 small-title">Region IX</div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center pt-4">
                    <div class="col-md-4 col-sm-8">
                        <div id="chart">
                            <apexchart type="pie" :options="chartOptions" :series="series"></apexchart>
                        </div>
                    </div>
                    <div class="col-md-8 ml-auto mt-n5">
                        <div class="mt-0 mt-md-auto">

                            <div class="row mt-4 mb-4">
                                <div class="col-lg-4 col-6">
                                    <div class="mt-4">
                                        <h1>1627</h1>
                                        <p class="text-success fw-bold font-size-20 mt-n2">Applicants</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <div class="mt-4">
                                        <h1>131</h1>
                                        <p class="text-primary fw-bold font-size-20 mt-n2">Qualified</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mt-2 mb-4">
                                <p class="text-muted fw-bold ms-1 mb-2 font-size-16"> <span class="text-primary">26.72%
                                        (35)</span> of
                                    region IX qualifiers are from <span class="text-danger">Zamboanga City</span></p>
                                <div class="card">
                                    <div class="card-body mt-n2 mb-n2 ms-n2 me-n2">
                                        <div class="progress" style="height: 20px;">
                                            <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="46.6"
                                                class="progress-bar progress-bar-striped progress-bar-animated"
                                                style="width: 26.72%;">
                                                <div class="progress-label">26.72%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <p class="text-muted mt-4">Out of <span class="fw-bold text-primary">1627 applicants</span> from Region IX,  <span class="fw-bold text-primary">131 applicants</span> are qualified.
                                <br />Out of <span class="fw-bold text-danger">459 applicants</span> from Zamboanga City, 35 applicants are qualified. <br> <span class="fw-bold text-danger">26.72%</span> of region IX qualifiers are from Zamboanga City
                            </p>
                            
                           

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
                series: [1627, 131],
                chartOptions: {
                    labels: ["Applicants", "Qualified"],
                    colors: ["#34c38f", "#556ee6"],
                    legend: {
                        show: true,
                        position: 'bottom',
                        horizontalAlign: 'center',
                        verticalAlign: 'middle',
                        floating: false,
                        fontSize: '14px',
                        offsetX: 0
                    },
                    chart: {
                        type: 'pie',
                    },
                    responsive: [{
                        breakpoint: 480,
                        options: {
                            chart: {
                                width: 200
                            },
                            legend: {
                                position: 'bottom'
                            }
                        }
                    }]
                },
            }
        }
    }

</script>
