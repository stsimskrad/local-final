<template>
    <div class="card-body border-bottom">
        <div class="page-title-left mt-n2 ms-n3 mb-n3">
            <ol class="breadcrumb m-0 font-size-15">
                <li class="breadcrumb-item fw-bold">Reimbursements</li>
            </ol>
        </div>
        <div class="float-end mt-n4" v-if="!show">
            <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                <Pagination v-if="meta" @fetch="fetch" :links="links" :pagination="meta"/>
            </ul>
        </div>
    </div>
    <div class="card-body" :style="{ height: (height-64) + 'px' }" v-if="!show">
        <div class="col-xl-12 d-inline-block mb-2">
            <div class="input-group mb-2" ref="www">
                <label class="input-group-text bg-light"> <i class='bx bx-search-alt'></i></label>
                <input type="text" class="form-control" style="width: 55%;" placeholder="Search..." v-model="keyword" @keyup="fetch()"/>
                <select  v-model="month" @change="fetch()" placeholder="Choose Term Type" class="form-select" :class="(term == null) ? 'text-muted' : ''" style="width: 100px;">
                    <option :value="null" selected>Select Month</option>
                    <option :value="m" v-for="(m,index) in months" v-bind:key="index">{{ m }}</option>
                </select>
                <input type="text" class="form-control" style="width: 100px;" placeholder="Enter Year" v-model="year"  @keyup="fetch()"/>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-centered table-nowrap">
                <thead class="thead-light">
                    <tr class="font-size-11">
                        <th></th>
                        <th>Scholar</th>
                        <th class="text-center">Privilege</th>
                        <th class="text-center">Amount</th>
                        <th class="text-center">Created At</th>
                        <th class="text-end"></th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <tr v-for="list in lists" v-bind:key="list.id">
                        <th></th>
                        <td>{{ list.scholar }}</td>
                        <td class="text-center">{{ list.benefit  }} Scholars</td>
                        <td class="text-center">₱{{ formatMoney(list.amount)}}</td>
                        <td class="text-center">{{list.attachment.created_at}}</td>
                        <td class="text-end"> 
                            <button @click="view(list)" type="button" class="bg-primary btn btn-sm btn-primary me-1">Reimburse</button>
                        </td>
                    </tr>
                    <tr v-if="lists.length == 0">
                        <td class="text-center text-muted" colspan="7">
                            No releases found.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
import Pagination from "@/Shared/Pagination.vue";
export default {
    components : { Pagination },
    props: ['height','count'],
    data(){
        return {
            currentUrl: window.location.origin,
            pagination: {},
            meta: {},
            links: {},
            lists: [],
            keyword: '',
        }
    },

    methods : {
        back(){
            this.$emit('status', true);
        },

        fetch(page_url){
            page_url = page_url || '/reimbursements';
            axios.get(page_url,{
                params : {
                    keyword : this.keyword,
                    count: this.count,  
                    search: true
                }
            })
            .then(response => {
                if(response){
                    this.lists = response.data.data;
                    this.meta = response.data.meta;
                    this.links = response.data.links;
                }
            })
            .catch(err => console.log(err));
        },

        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>