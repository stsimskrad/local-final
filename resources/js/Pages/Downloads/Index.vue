<template>
    <Header :title="title" :items="items" />
    <div class="col-12 mt-n4">
        <div class="row g-3">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body" style="padding-bottom: -15px; margin-bottom: -15px;">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <div class="text-muted">
                                    <h5 class="mb-0">{{info.agency.name}}</h5>
                                    <p class="mb-0">{{info.agency.region.name}}, {{info.agency.region.region}}</p>
                                    <p class="mb-0">{{info.agency.acronym}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top mb-n3">
                        <i @click="fetchLocations()" class='text-muted float-end bx bx-sync h3'
                            style="cursor: pointer;"></i>
                        <p class="text-muted fw-bold">{{info.agency.region.name}}, {{info.agency.region.region}}</p>
                    </div>
                    <div class="card-body border-top">
                        <div class="text-center text-muted">
                            <div class="row">
                                <div class="col-4" v-for="(value, name, index) in info.region" v-bind:key="index">
                                    <div class="mt-0 mb-n3">
                                        <p class="mb-0 text-truncate"><i class="bx bxs-map text-primary me-1"></i>{{name}}
                                        </p>
                                        <h5>{{ value }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top mb-n3">
                        <i @click="fetchLocations()" class='text-muted float-end bx bx-sync h3'
                            style="cursor: pointer;"></i>
                        <p class="text-muted fw-bold">Philippine Addresses</p>
                    </div>
                    <div class="card-body border-top mb-n3">
                        <div v-if="loading1 == false" class="mt-n3">
                            <div role="alert" aria-live="polite" aria-atomic="true"
                                class="mt-2 alert alert-dismissible alert-warning">
                                <i class="mdi mdi-alert-circle-outline me-2"></i>Municipality and Barangay district can be
                                updated later on.
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="row">
                                <div class="col-sm-3" v-for="(value, name, index) in info.addresses" v-bind:key="index">
                                    <div>
                                        <div class="font-size-24 text-primary mb-0"><i class="bx bxs-cloud-download"></i>
                                        </div>
                                        <p class="text-muted mb-0">{{name}}</p>
                                        <p class="mt-0">{{value.downloaded}} <span class="text-muted">of</span> <span
                                                :class="[(value.downloaded != value.count ? 'text-danger' : '')]">{{value.count}}</span>
                                        </p>
                                        <div class="mt-3"><button @click="download(name,index)"
                                                class="btn btn-primary btn-sm w-md"
                                                :disabled="(value.downloaded == value.count) ? true : false">Download</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="loading1 == true">
                                <i class='bx bx-loader-circle bx-spin bx-rotate-90 h1'></i>
                            </div>
                        </div>
                        <div v-if="loading1 == false" class="mt-4 mb-0">
                            <!-- <div role="alert" aria-live="polite" aria-atomic="true" class="alert alert-dismissible alert-warning">
                                <i class="mdi mdi-alert-circle-outline me-2"></i>Municipality and Barangay district can be updated later on.
                            </div> -->
                            <p class="text-muted font-size-11">Current data is as of June 30, 2021. Data is based from <a
                                    class="fw-bold" href="https://psa.gov.ph/classification/psgc/"
                                    target="_blank">Philippine Standard Geographic Code (PSGC).</a></p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="row g-3">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <i @click="fetchLists()" class='text-muted float-end bx bx-sync h3'
                                    style="cursor: pointer;"></i>
                                <p class="text-muted fw-bold">Schools</p>
                            </div>
                            <div class="card-body mt-n3 border-top border-bottom">
                                <div class="text-center" v-if="loading3 == true" style="height: 115px">
                                    <i class='bx bx-loader-circle bx-spin bx-rotate-90 h1 mt-4'></i>
                                </div>
                                <div v-else class="row" style="margin-top: -7px;">
                                    <button type="button" @click="downloadSchools" class="btn btn-primary btn-sm w-md me-1">Download</button>            
                                </div>
                            </div>
                            <div class="card-body">
                                <i @click="fetchLists()" class='text-muted float-end bx bx-sync h3'
                                    style="cursor: pointer;"></i>
                                <p class="text-muted fw-bold">Lists</p>
                            </div>
                            <div class="card-body mt-n3 border-top">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap table-hover mb-0 mt-n1">
                                        <tbody>
                                            <tr v-for="(value, name, index) in info.lists" v-bind:key="index">
                                                <td>
                                                    <a href="javascript: void(0);" class="text-dark fw-medium">
                                                        <i
                                                            class="bx bx-cloud-download  font-size-16 align-middle text-primary me-2"></i>{{ name }}
                                                    </a>
                                                </td>
                                                <td class="text-center">{{value.downloaded}} <span
                                                        class="text-muted">of</span> <span
                                                        :class="[(value.downloaded != value.count ? 'text-danger' : '')]">{{value.count}}</span>
                                                </td>
                                                <td class="text-center">0</td>
                                                <td class="text-end">
                                                    <button class="btn btn-success btn-sm w-md me-1">Request</button>
                                                    <button @click="downloadLists(name,index)"
                                                        class="btn btn-primary btn-sm"
                                                        :disabled="(value.downloaded == value.count) ? true : false"><i
                                                            class='bx bx-download'></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="text-center" v-if="loading2 == true">
                                    <i class='bx bx-loader-circle bx-spin bx-rotate-90 h1'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <Loading :active="isLoading"  :can-cancel="true"  :on-cancel="onCancel"  loader="dots" background-color="black" :is-full-page="fullPage"></Loading>
</template>

<script>
import Loading from 'vue3-loading-overlay';
import Header from "@/Shared/Header.vue";
import Pagination from "@/Shared/Pagination.vue";
import _ from 'lodash';

export default {
    props: ['info'],
    components : { Header, Pagination, Loading },
    inject:['count', 'height'],
    data() {
        return {
            currentUrl: window.location.origin,
            title: "Downloads",
            items: [
                {text: "Download", href: "/",},
                {text: "Lists",active: true,},
            ],
            loading1: false,
            loading2: false,
            loading3: false,
            isLoading: false,
            fullPage: true,
        };
    },

    methods : {
        fetchLocations(){
            this.info.addresses = [];
            this.loading1 = true;
            axios.get(this.currentUrl + '/sync/addresses/check/all')
            .then(response => {
                this.info.addresses = response.data;
                this.loading1 = false;
            })
            .catch(err => console.log(err));
        },

        fetchLists() {
            this.info.lists = [];
            this.loading2 = true;
            axios.get(this.currentUrl + '/sync/lists/check/all')
            .then(response => {
                this.info.lists = response.data;
                this.loading2 = false;
            })
            .catch(err => console.log(err));
        },

        downloadSchools(category, index) {
            this.loading3 = true;
            axios.get(this.currentUrl + '/sync/schools/download/local')
            .then(response => {
                this.loading3 = false;
            })
            .catch(err => console.log(err));
        },

    }
}
</script>