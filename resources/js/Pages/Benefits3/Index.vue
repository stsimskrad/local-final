<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="col-12 mt-n3">
        <div class="row gx-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card border shadow-none mb-0">
                            <a href="javascript: void(0);" class="text-body">
                                <div class="p-2">
                                    <div class="d-flex">
                                        <div class="avatar-xs align-self-center me-2">
                                            <div class="avatar-title rounded bg-transparent text-success font-size-20">
                                                <i class="bx bxs-calendar-week"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden me-auto">
                                            <h5 class="font-size-13 text-truncate mb-0">{{ latest.month }}</h5>
                                            <p class="text-muted text-truncate mb-0">
                                                {{ latest.pending.length }} Pending Scholar
                                                <span v-if="latest.pending.length > 1">s</span>
                                            </p>
                                        </div>
                                        <div class="ms-2 mt-1 mb-n2">
                                            <i @click="newRelease()" class='bx bxs-plus-circle h2'></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <!-- <div class="text-center">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary bg-soft font-size-24"><i
                                        class="mdi mdi-facebook text-primary"></i></span></div>
                            <p class="font-16 text-muted mb-2"></p>
                            <h5><a href="javascript: void(0);" class="text-dark"> Reimbursements - <span
                                        class="text-muted font-16">125 sales</span></a></h5>
                            <p class="text-muted"> Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut
                                libero venenatis faucibus tincidunt. </p><a href="javascript: void(0);"
                                class="text-primary font-16"> Learn more <i class="mdi mdi-chevron-right"></i></a>
                        </div> -->
                    </div>
                    <div class="card-footer bg-transparent border-top">
                        <div class="row g-1 mt-1 mb-1">
                            <div class="col-md-12 d-grid mt-0">
                                <button @click="newReimburse" class="btn btn-outline-light" type="button" block="">Reimbursements</button>
                            </div>
                            <!-- <div class="col-md-6 d-grid mt-0">
                                <button @click="reimburse" class="btn btn-primary" type="button"
                                    block="">Reimbursement</button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <Main :height="height" :count="count3" ref="main" />
                </div>
            </div>
        </div>
        <Reimbursement :privileges="privileges" ref="reimburse" />
    </div>
</template>
<script>
    import Reimbursement from './Modals/Reimbursement.vue';
    import Header from "@/Shared/Header.vue";
    import Main from "./Main.vue";
    export default {
        components: {
            Header,
            Main,
            Reimbursement
        },
        inject: ['height', 'count3'],
        props: ['dropdowns', 'privileges'],
        data() {
            return {
                currentUrl: window.location.origin,
                title: "Financial Benefits",
                items: [{
                        text: "Benefit",
                        href: "/",
                    },
                    {
                        text: "Lists",
                        active: true,
                    },
                ],
                latest: {
                    pending: []
                }
            }
        },

        created() {
            this.fetchLatest();
        },

        methods: {
            fetchLatest() {
                axios.get(this.currentUrl + '/benefits3/create', {
                        params: {
                            type: 'lists'
                        }
                    })
                    .then(response => {
                        this.latest = response.data;
                    })
                    .catch(err => console.log(err));
            },

            newRelease() {
                this.type = 'releasing';
                this.$refs.main.type(this.type, this.latest);
            },

            newReimburse() {
                this.type = 'reimburse';
                this.$refs.main.type(this.type,'');
            },

            reimburse() {
                this.$refs.reimburse.set();
            }
        }
    }

</script>
