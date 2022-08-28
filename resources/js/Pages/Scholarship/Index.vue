<template>

    <Head title="Home" />

      <div class="card">
         <div class="card-body" style="height: 110px;">
            <div class="row font-size-12 mt-1">
                <div class="col-sm-3">
                    <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-credit-card me-1 text-primary"></i>SPAS ID
                        no.</h6>
                    <p class="fw-bold text-dark mb-0">{{scholar.data.spas_id}}</p>
                </div>
                <div class="col-sm-3">
                    <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-mail-send me-1 text-primary"></i>Learner's
                        Reference No.</h6>
                    <p class="fw-bold text-dark mb-0">{{scholar.data.lrn}}</p>
                </div>
                <div class="col-sm-3">
                    <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-category me-1 text-primary"></i>Category
                    </h6>
                    <p class="fw-bold text-dark mb-0">{{scholar.data.program.name}}</p>
                </div>
                <div class="col-sm-3">
                    <h6 class="text-muted font-size-11 mb-0"><i class="bx bx-calendar me-1 text-primary"></i>Awarded
                        Year</h6>
                    <p class="fw-bold text-dark mb-0">{{scholar.data.awarded_year}}</p>
                </div>
            </div>
        </div>
        <!-- <div class="card-body" style="height: 45px;">
            <div style="margin-top: -11px; margin-left: -20px;">
               <button type="button" class="btn btn-sm w-sm me-1 btn-outline-light">Create</button>
               <button type="button" class="btn btn-sm w-sm me-1 btn-outline-light">Create</button>
               <button type="button" class="btn btn-sm w-sm me-1 btn-outline-light">Create</button>
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium mb-2">Orders</p>
                            <h4 class="mb-0">1,235</h4>
                        </div>
                        <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                class="avatar-title"><i class="bx bx-copy-alt font-size-24"></i></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium mb-2">Revenue</p>
                            <h4 class="mb-0">$35, 723</h4>
                        </div>
                        <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                class="avatar-title"><i class="bx bx-archive-in font-size-24"></i></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <p class="text-muted fw-medium mb-2">Average Price</p>
                            <h4 class="mb-0">$16.2</h4>
                        </div>
                        <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary"><span
                                class="avatar-title"><i class="bx bx-purchase-tag-alt font-size-24"></i></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Header from "@/Shared/Header.vue";
    export default {
        components: {
            Header
        },
        props: ['scholar']
    }

</script>
