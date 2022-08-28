<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="col-12 mt-n3">
        <div class="row gx-3">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row g-3">
                    <div class="col-md-4" v-for="(stat,index) in totals" v-bind:key="index">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <p class="text-muted fw-medium mb-2">{{stat.name}}</p>
                                        <h4 class="mb-0">{{stat.counts}}</h4>
                                    </div>
                                    <div class="avatar-sm align-self-center mini-stat-icon rounded-circle bg-primary">
                                        <span class="avatar-title"><i :class="'bx '+stat.icon+' font-size-24'"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-n2">
                    <div class="card">
                        <div class="card-body">
                            
                            <div class="row g-3">

                                <div class="col-xl-12 mb-1">
                                    <button style="margin-top: 5px; cursor: default;" class="btn btn-sm btn-light pull-right" type="button">Print Reports</button>
                                    <hr class="float-end" style="width: 90%;">
                                </div>

                                <div class="col-xl-4">
                                    <div class="mb-1">
                                        <label class="card-radio-label mb-2">
                                            <input type="radio" name="currency" id="buycurrencyoption1" class="card-radio-input">

                                            <div class="card-radio" @click="print('graduated')">
                                                <div>
                                                    <i class='bx bxs-award font-size-24 text-warning align-middle me-2'></i>
                                                    <span>Graduates <span class="font-size-10 text-muted">(w/ honor)</span></span>
                                                    <i class='bx bxs-printer float-end font-size-24 text-light align-middle me-2'></i>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="mb-1">
                                        <label class="card-radio-label mb-2" @click="print('graduates')">
                                            <input type="radio" name="currency" id="buycurrencyoption2" class="card-radio-input">

                                            <div class="card-radio">
                                                <div>
                                                    <i class='bx bxs-graduation font-size-24 text-warning align-middle me-2'></i>
                                                    <span>List of Graduates</span>
                                                    <i class='bx bxs-printer float-end font-size-24 text-light align-middle me-2'></i>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-xl-4">
                                    <div class="mb-1">
                                        <label class="card-radio-label mb-2" @click="print('scholars')">
                                            <input type="radio" name="currency" id="buycurrencyoption3" class="card-radio-input">

                                            <div class="card-radio">
                                                <div>
                                                    <i class='bx bxs-group font-size-24 text-warning align-middle me-2'></i>
                                                    <span>List of Scholars</span>
                                                        <i class='bx bxs-printer float-end font-size-24 text-light align-middle me-2'></i>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-xl-12 mb-1 mt-2">
                                    <button style="margin-top: 5px; cursor: default;" class="btn btn-sm btn-light pull-right" type="button">Print Reports</button>
                                    <hr class="float-end" style="width: 90%;">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Print :dropdowns="dropdowns" :programs="programs" ref="print"/>
</template>
<script>
    import Print from './Modals/Print.vue';
    import Header from "@/Shared/Header.vue";
    export default {
        components: { Header, Print },
        props: ['dropdowns','programs'],
        inject: ['height'],
        data() {
            return {
                currentUrl: window.location.origin,
                title: "Reports",
                items: [{
                    text: "Scholar",
                    href: "/",
                }, {
                    text: "Reports",
                    active: true,
                }, ],
                totals: []
            };
        },

        created(){
            this.fetchTotals();
        },

        methods: {
            fetchTotals() {
                axios.get(this.currentUrl + '/reports', {
                    params: {
                        type: 'totals'
                    }
                })
                .then(response => {
                    this.totals = response.data;
                })
                .catch(err => console.log(err));
            },

            print(type){
                this.$refs.print.set(type);
            }

        }
    }

</script>
