<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="row g-3" style="margin-top: -33px;">
        <div class="col-md-8">
            <div class="row g-3">
                <div class="col-lg-4" v-for="(total,index) in totals" v-bind:key="index">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">{{ total.name }}</p>
                                    <h5 class="mb-0">{{ total.counts }}</h5>
                                </div>
                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle font-size-20"
                                        :class="'text-'+total.color">
                                        <i class="bx" :class="total.icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-n2">
                <div class="card-body" style="height: 440px;">
                    <b-tabs pills nav-class="bg-light rounded" content-class="mt-3" small>
                        <b-tab active title="Home" style="color: black;">
                            <b-card-text>
                                <Home />
                            </b-card-text>
                        </b-tab>
                        <b-tab title="Endorsements" style="color: black;">
                            <b-card-text>
                                <Endorsement />
                            </b-card-text>
                        </b-tab>
                        <b-tab title="Reimbursements">
                            <b-card-text>
                                <Reimbursement />
                            </b-card-text>
                        </b-tab>
                        <b-tab title="Trace Requests">
                            <b-card-text>
                                <TraceRequest />
                            </b-card-text>
                        </b-tab>
                        <b-tab title="Requests">
                            <b-card-text>
                                <Request />
                            </b-card-text>
                        </b-tab>
                    </b-tabs>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex" v-if="staffs.length > 0">
                                <div class="me-3">
                                    <img :src="currentUrl+'/images/avatars/'+staffs[0].avatar" alt=""
                                        class="avatar-sm rounded-circle img-thumbnail">
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            <div class="text-muted">
                                                <h5 class="mb-0 mt-1">{{ staffs[0].firstname}}
                                                    {{ staffs[0].lastname}}</h5>
                                                <p class="mb-0">{{ staffs[0].role}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-n2">

                    <div class="card mb-3">
                        <div class="card-body mt-n1" style="height: 210px;">
                            <div class="card border shadow-none">
                                <div class="p-1">
                                    <button type="button" class="float-end btn btn-sm w-sm btn-light mt-1 me-1">Set
                                        Year</button>
                                    <div class="d-flex mt-1">
                                        <div class="avatar-xs align-self-center ml-2 mr-2">
                                            <div class="avatar-title rounded bg-transparent">
                                                <i class="text-primary bx bxs-calendar h4 mt-1"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden mr-auto align-self-center">
                                            <h5 class="text-primary font-size-12 fw-bold mt-1">Academic Year</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6>
                                <i class='bx bx-chevrons-right text-primary'></i>
                                {{ academic_year.group.academic_year }} - {{ academic_year.group.semester.name }}
                                <span class="font-size-10 text-success">(Active)</span>
                            </h6>
                            <hr>
                            <table class="table table-centered table-bordered table-sm table-nowrap mt-3 mb-0">
                                <thead class="thead-light">
                                    <tr class="font-size-10">
                                        <th style="width: 50%;" class="text-center">Enrolled</th>
                                        <th style="width: 50%;" class="text-center">Ongoing Scholars</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;" class="text-center">{{ academic_year.enrolled }}
                                        </td>
                                        <td style="width: 50%;" class="text-center">{{ academic_year.ongoing }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body" style="height: 218px;">
                            <div class="card border shadow-none">
                                <div class="p-1">
                                    <router-link :to="'/qualifier/lists'"><button type="button"
                                            class="float-end btn btn-sm w-sm btn-light mt-1 me-1">View</button>
                                    </router-link>
                                    <div class="d-flex mt-1">
                                        <div class="avatar-xs align-self-center ml-2 mr-2">
                                            <div class="avatar-title rounded bg-transparent">
                                                <i class="text-primary bx bxs-user-circle h4 mt-1"></i>
                                            </div>
                                        </div>
                                        <div class="overflow-hidden mr-auto align-self-center">
                                            <h5 class="text-primary fw-bold font-size-12 mt-1">Qualifiers</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-centered table-bordered table-sm table-nowrap mt-n mb-0">
                                <thead class="thead-light">
                                    <tr class="font-size-10">
                                        <th class="text-center">Endorsement Request</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">aw</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-centered table-bordered table-sm table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr class="font-size-10">
                                        <th style="width: 50%;" class="text-center"
                                            v-for="(value, name, index) in qualifiers" v-bind:key="index">{{ name }}
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="width: 50%;" class="text-center" v-for="(value, index) in qualifiers"
                                            v-bind:key="index">{{ value }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
import Header from "@/Shared/Header.vue";
import Home from './Sections/Home.vue';
import Endorsement from './Sections/Endorsement.vue'
import Reimbursement from './Sections/Reimbursement.vue';
import TraceRequest from './Sections/TraceRequest.vue';
import Request from './Sections/Request.vue';
    export default {
        components: { Header, Home, Reimbursement, Endorsement, Request, TraceRequest },
        data() {
            return {
                currentUrl: window.location.origin,
                title: "Dashboard",
                items: [{
                    text: "Home",
                    href: "/",
                }, {
                    text: "Dashboard",
                    active: true,
                }, ],
                totals: [],
                staffs: [],
                academic_year: {
                    group: {
                        semester: {}
                    }
                },
                schools: [],
                courses: [],
                qualifiers: [],
                endorsements: [],
                text: 's',
                content: 's'
            }
        },

        created() {
            this.fetch();
            this.fetchTotals();
        },

        methods: {
            fetch() {
                axios.get(this.currentUrl + '/gege', {
                        params: {
                            type: 'lists'
                        }
                    })
                    .then(response => {
                        this.staffs = response.data.staffs;
                        this.academic_year = response.data.academic_year;
                        this.qualifiers = response.data.qualifiers;
                        // this.schools = response.data.schools;
                        // this.courses = response.data.courses;
                    })
                    .catch(err => console.log(err));
            },

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

            ucwords(str) {
                let str1 = str.toLowerCase().trim();
                return (str1 + '').replace(/^([a-z])|\s+([a-z])/g, function ($1) {
                    return $1.toUpperCase();
                });
            }
        }
    }

</script>
<style>
    .nav-tabs>li>a,
    .nav-pills>li>a {
        color: black;
    }

</style>
