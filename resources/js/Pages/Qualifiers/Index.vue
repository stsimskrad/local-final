<template>
    <Header :title="title" :content="title" :items="items" />

    <div class="col-12 mt-n3">
        <div class="card">
            <div class="card-body" :style="{ height: height + 'px' }">
                    
                <div class="row">
                    <div class="col-xl-6">
                        <Link href="qualifiers/sync"> 
                            <button type="button" class="btn btn-sm w-sm mb-n3 me-1 btn-outline-light">Sync</button>
                        </Link>
                        <Link href="qualifiers/import">
                            <button type="button" class="btn btn-sm w-sm mb-n3 me-1 btn-outline-light">Import</button>
                        </Link>
                        <button @click="mailing" type="button" class="btn btn-sm w-sm mb-n3 me-1 btn-outline-light">Mail</button>
                    </div>
                    <div class="col-xl-6">
                        <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                            <li class="list-inline-item d-non d-sm-inline-block" style="margin-right: 50px;" v-if="selected.length > 0">     
                                <i class='bx bx-check-square text-success h4' style="margin-left: -22px; position: absolute;"></i> <span class="text-muted font-size-11">{{selected.length}} Qualifiers selected</span>
                            </li>
                            <li class="list-inline-item d-non d-sm-inline-block" style="margin-right: 50px;">     
                                <i class='bx bxs-map text-danger h4' style="margin-left: -22px; position: absolute;"></i> <span class="text-muted font-size-11">Address Update</span>
                            </li>
                            <li class="list-inline-item d-non d-sm-inline-block" style="margin-right: 50px;">     
                                <i class='bx bxs-error-circle text-warning h4' style="margin-left: -22px; position: absolute;"></i> <span class="text-muted font-size-11">With Remarks</span>
                            </li>
                            <Pagination @fetch="fetch" :links="links" :pagination="meta"/>
                        </ul>
                    </div>
                    <div class="col-xl-12 d-inline-block mb-2">
                        <div class="input-group mb-2" ref="www">
                            <label class="input-group-text bg-light"> <i class='bx bx-search-alt'></i></label>
                            <input type="text" class="form-control" style="width: 55%;" placeholder="Search..." v-model="keyword" @keyup="fetch()"/>
                            <select v-model="type" @change="fetch()" class="form-select" style="width: 100px; font-weight: 500;">
                                <option value="Qualifiers" selected="">Qualifiers</option>
                                <option value="Endorsed">Endorsed</option>
                                <option value="Qualified">Qualified</option>
                            </select>
                            <select v-model="is_undergrad" @change="fetch()" class="form-select" :class="(program == null) ? 'text-muted' : ''" style="width: 100px; font-weight: 500;">
                                <option value="all" selected="">All</option>
                                <option value="1">Undergraduate</option>
                                <option value="0">JLSS</option>
                            </select>
                            <select  v-model="program" @change="fetch()" placeholder="Choose Program" class="form-select" :class="(program == null) ? 'text-muted' : ''" style="width: 100px;">
                                <option :value="null" selected>All Program</option>
                                <option :value="program" v-for="program in programs" v-bind:key="program.id">{{ program.name }}</option>
                            </select>
                            <input type="text" class="form-control" style="width: 100px;" placeholder="Enter Year" v-model="year"  @keyup="fetch()"/>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap">
                        <thead class="thead-light align-middle">
                                <tr class="font-size-11">
                                <th>
                                    <div class="form-check" style="font-size: 16px;">
                                        <input type="checkbox"  @input="checkAll()" :value="'all'" v-model="isCheckAll" class="form-check-input" id="__BVID__90">
                                    </div>
                                </th>
                                <th style="width: 1%;"></th>
                                <th>Name </th>
                                <th class="text-center">Program</th>
                                <th class="text-center">Contact</th>
                                <th v-if="type != 'Endorsed'"></th>
                                <th v-else>Status</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <tr v-for="user in lists" v-bind:key="user.id" :class="[(user.information.requirements.count > 0) ? 'table-warning' : (user.address.is_completed == 0) ? 'table-danger' : '']">
                                <td style="width: 1%;">

                                        <div class="form-check" style="font-size: 16px;">
                                        <input type="checkbox" :id="'customCheck_'+user.id" v-on:change='updateCheckall()' @input="checkAll()" :value="user.id" v-model="selected" class="form-check-input">
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-xs" v-if="user.avatar == 'n/a'">
                                        <span class="avatar-title rounded-circle">{{user.name.charAt(0)}}</span>
                                    </div>
                                    <div v-else>
                                        <img class="rounded-circle avatar-xs" :src="'/images/avatars/'+user.avatar" alt="">
                                    </div>
                                </td>
                                <td style="cursor: pointer;" @click="profile(user)">
                                    <h5 class="font-size-13 mb-0 text-dark">{{user.name}}</h5>
                                    <!-- <p class="font-size-11 text-muted mb-0">{{user.barangay}}, {{user.municipality}}, {{user.province}}</p> -->
                                    <p class="font-size-11 text-muted mb-0">SPAS ID : <span class="fw-bold">{{user.spas_id}}</span></p>
                                </td>
                                <td class="text-center">
                                    <h5 class="font-size-13 mb-0 text-dark">{{user.program.name}}</h5>
                                    <p class="font-size-11 text-muted mb-0">{{(user.is_undergrad) ? 'Undergraduate' : 'JLSS'}}</p>
                                </td>
                                <td class="text-center">
                                    <h5 class="font-size-11 mb-0 text-dark">{{user.profile.email}} / {{user.profile.mobile}}</h5>
                                    <p class="font-size-11 text-muted mb-0">{{user.address.name}}</p>
                                </td>
                                <td class="text-end" v-if="user.is_referral == 0 && user.is_qualified == null">
                                    <button type="button" @click="openModal('address',user,true)" class="bg-light btn btn-light" style="margin-end: -10px;" v-if="user.address.is_completed == 0"><i class='bx text-danger bxs-map'></i></button>
                                    <button type="button" @click="warning(user)" class="bg-light btn btn-light me-1" v-if="user.information.requirements.count > 0"><i class='bx text-warning bxs-info-circle'></i></button>
                                    <button type="button" @click="openModal('confirm',user,false)" class="bg-light btn btn-light me-1" v-if="user.information.requirements.count < 1 && user.address.is_completed == 1"><i class='bx text-info bx-plus-medical'></i></button>
                                    <button type="button" @click="openModal('endorse',user,false)" class="bg-light btn btn-light" v-if="user.address.is_completed == 1" style="margin-end: -10px;"><i class='bx bx-transfer-alt'></i></button>
                                    <!-- <button type="button" @click="scholar(user)" class="btn btn-sm btn-danger w-sm waves-effect waves-light">Add Scholar</button> -->
                                </td>
                                <td v-else>
                                    n/a
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <Confirm ref="confirm"/>
    <Endorse ref="endorse"/>
    <Location :regions="regions" ref="address"/>
    <Remarks ref="remarks"/>
</template>

<script>
import Confirm from "./Modals/Confirm.vue";
import Endorse from "./Modals/Endorse.vue";
import Location from "./Modals/Address.vue";
import Remarks from "./Modals/Remarks.vue";
import Header from "@/Shared/Header.vue";
import Pagination from "@/Shared/Pagination.vue";
import _ from 'lodash';

export default {
    props: ['dropdowns','programs','regions'],
    components : { Header, Pagination, Confirm, Endorse, Location, Remarks },
    inject:['count2', 'height'],
    data() {
        return {
            title: "Qualifiers",
            items: [
                {text: "Qualifier", href: "/",},
                {text: "Lists",active: true,},
            ],
            lists: [],
            meta: {},
            links: {},
            keyword: '',
            selected: [],
            showModal: false,
            editable: false,
            program: null,
            year: null,
            is_undergrad : 'all',
            type: 'Qualifiers',
            options: ['Qualifiers','Endoresed','Qualified']
        };
    },
    watch: {
        keyword(newVal){
            this.checkSearchStr(newVal)
        },
        datares: {
            deep: true,
            handler(val = null) {
                if(val != null && val !== ''){
                    this.message(val.data);
                }
            },
        },
    },
    computed: {
        datares() {
            return this.$page.props.flash.datares;
        },
    },
    created(){
        this.fetch();
    },
    methods : {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),

        fetch(page_url){
            page_url = page_url || '/qualifiers';
            axios.get(page_url,{
                params : {
                    keyword : this.keyword,
                    count: this.count2,
                    program : (this.program ==  null) ? null : this.program.id, 
                    year: this.year, 
                    type: this.type,
                    is_undergrad: this.is_undergrad,
                    search: true
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;
            })
            .catch(err => console.log(err));
        },
          
        openModal(type,data,status){
            this.$refs[type].set(data);
            this.editable = status;
        },

        message(list){
            let index = this.lists.findIndex(u => u.id === list.id);
            if(!this.editable){
                this.lists.splice(index,1);
            }else{
                this.lists[index] = list;
            }
        },
    }
}
</script>
