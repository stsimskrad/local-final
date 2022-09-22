<template>
<Header :title="title" :content="title" :items="items" />
<div class="col-12 mt-n3">
    <div class="card">
        <div class="card-body" :style="{ height: height + 'px' }">
            <div class="row justify-content-center" v-if="users.length == 0">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="p-2">
                        <div class="text-center">

                            <div class="avatar-md mx-auto">
                                <div class="avatar-title rounded-circle bg-light">
                                    <i class="bx bxs-file h1 mb-0 text-primary"></i>
                                </div>
                            </div>
                            <div class="p-2 mt-4">
                                <form @submit.prevent="preview" enctype="multipart/form-data">
                                    <h5>Import by batch</h5>
                                    <p class="text-muted">Please click download if you wish to create a data entry and attach then click preview to generate the entry</p>
                                    <input class="mt-2 mb-4" type="file" @change="uploadFieldChange">
                                    <!-- <span v-if="errors['files.'+0]" class="haveerror">(required)</span> -->
                            
                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-success w-lg me-1">Preview</button>
                                        <a href="/export" class="btn btn-success w-lg">Download </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive" v-else>
                <div class="mb-3 float-end">
                    <ul>
                        <li class="list-inline-item d-non d-sm-inline-block mr-4">     
                            <i class='bx bxs-circle text-success'></i> <span class="text-muted font-size-11">Success <span v-if="success != ''">({{success}})</span></span>
                        </li>
                        <li class="list-inline-item d-non d-sm-inline-block mr-4">     
                            <i class='bx bxs-circle text-danger'></i> <span class="text-muted font-size-11">Failed <span v-if="failed != ''">({{failed}})</span></span>
                        </li>
                        <li class="list-inline-item d-non d-sm-inline-block" style="margin-right: 100px;">     
                            <i class='bx bxs-circle text-warning'></i> <span class="text-muted font-size-11">Duplicate <span v-if="duplicate != ''">({{duplicate}})</span></span>
                        </li>
                        <li class="list-inline-item d-non d-sm-inline-block">
                            <button type="button" class="btn btn-light w-lg waves-effect waves-light ml-4">Validate</button>
                        </li>
                        <li class="list-inline-item d-non d-sm-inline-block">
                            <button type="button" @click="showModal = true" class="btn btn-success w-lg waves-effect waves-light">Import ({{users.length}})</button>
                        </li>
                    </ul>
                </div>
                <div  class="mb-3">
                    <form class="d-inline-block">
                        <div class="search-box">
                            <div class="position-relative">
                                <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword" @keyup="search()">
                            <i class='bx bx-search-alt search-icon'></i>
                            </div>
                        </div>
                    </form>
                </div>

                <SimpleBar :style="{ height: (height - 105) + 'px' }">
                    <table class="table table-centered align-middle table-nowrap mb-0">
                        <tbody>
                            <tr v-for="user in users" v-bind:key="user.spas_id" :id="user.spas_id">
                                <td class="fw-bold">
                                    {{user.lastname}}, {{user.firstname}} {{user.suffix}} {{user.middlename}}
                                </td>
                                <td class="text-center">
                                    <h5 class="font-size-11 mb-0 text-dark">{{user.category}}</h5>
                                    <p class="font-size-11 text-muted mb-0">{{user.awarded_year}}</p>
                                </td>
                                <td class="text-center">
                                    <h5 class="font-size-11 mb-0 text-dark">{{user.school}}</h5>
                                    <p class="font-size-10 text-muted mb-0">{{user.course}} - {{user.level}} year</p>
                                </td>
                                    <td class="text-center">
                                    {{user.barangay}}, {{user.municipality}}
                                </td>
                                <td class="text-end">
                                    <span :class="'badge bg-'+user.status.color">{{user.status.name}}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </SimpleBar>
            </div>
        </div>
    </div>
    <b-modal v-model="showModal" id="confirm" hide-footer title="Confirm" no-close-on-backdrop centered>
        <center><span class="text-muted mb-4">Are you sure you want to sync the <span class="font-weight-bold text-danger"> {{ users.length }}</span> qualifiers?</span></center>
        <center><button type="button" @click="sync" class="mt-4 mb-4 btn btn-warning w-md waves-effect waves-light">SYNC</button></center>
        <Loading :active="isLoading"  :can-cancel="true"  loader="dots" background-color="black" :is-full-page="fullPage"></Loading>
    </b-modal>
</div>
<Loading :active="isLoading" enforce-focus="true" z-index="9999" loader="dots" background-color="black" :is-full-page="fullPage"></Loading>
</template>

<script>
import Loading from 'vue3-loading-overlay';
import { SimpleBar } from 'simplebar-vue3';
import Multiselect from '@suadelabs/vue3-multiselect';
import Header from "@/Shared/Header.vue";
import Pagination from "@/Shared/Pagination.vue";
import _ from 'lodash';

export default {
    props: ['dropdowns','programs'],
    components : { Header, Pagination, Multiselect, SimpleBar, Loading },
    inject:['count', 'height'],
    data() {
        return {
            currentUrl: window.location.origin,
            title: "Import Scholars",
            items: [
                {text: "Scholar", href: "/",},
                {text: "Import",active: true,},
            ],
            users: [],
            entry: '',
            isLoading: false,
            fullPage: true,
            success: '',
            failed: '',
            duplicate: '',
            showModal: false
        };
    },

    methods : {
        uploadFieldChange(e) {
            e.preventDefault();
            var file = e.target.files || e.dataTransfer.files;
            this.entry = file;
        },

        preview(){
            this.isLoading = true;
            let data = new FormData();
            data.append('import_file', this.entry[0]);

            axios.post(this.currentUrl + '/excel/scholar/import', data)
            .then(response => {
                this.users = response.data;
                this.isLoading = false;
            })
            .catch(error => {
                if (error.response.status == 422) {
                    this.errors = error.response.data.errors;
                    this.isLoading = false;
                }
            });
        },

        sync(){
            this.isLoading = true;
            this.qualifiers = this.users;

            axios.post(this.currentUrl + '/excel/scholar/store', {
                users: this.qualifiers,
            })
            .then(response => {
                this.isLoading = false;
                this.showModal = false;
            })
            .catch(error => {
                if (error.response.status == 422) {
                    this.errors = error.response.data.errors;
                    this.isLoading = false;
                }
            });
        }
    }
}
</script>