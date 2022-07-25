<template>
    <div class="row">
        <div class="col-xl-6">
          <button type="button" @click="add" class="btn btn-danger waves-effect waves-light me-1"><i class='bx bx-plus-medical'></i></button>
        </div>
        <div class="col-xl-6">
            <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                <Pagination @fetch="fetch" :links="links" :pagination="meta"/>
            </ul>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-centered table-nowrap">
            <thead class="thead-light">
                <tr class="font-size-11"> 
                    <th style="width: 2%;"></th>
                    <th>Expense</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Created At</th>
                    <th class="text-center">Added By</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="list in lists" v-bind:key="list.id">
                    <td>
                        
                    </td>
                    <td>{{(list.expense_id.name.length < 70) ? list.expense_id.name : list.expense_id.code}}</td>
                    <td class="text-center">₱{{formatAmount(list.amount)}}</td>
                    <td class="text-center">{{list.created_at}}</td>
                    <td class="text-center">{{list.added_by}}</td>
                    <td class="text-end">
                        <a class="me-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt'></i></a>
                        <a class="me-3 text-info" @click="view(list)"><i class='bx bxs-show'></i></a>
                        <a class="text-danger"><i class='bx bx-trash'></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <Create :expenses="expenses" ref="create"/>
</template>


<script>
import Pagination from "@/Shared/Pagination.vue";
import Create from './Create.vue';
import Show from './View.vue';
export default {
    components : { Pagination, Create },
    props: ['expenses','counts'],
    data(){
        return {
            currentUrl: window.location.origin,
            errors: [],
            keyword: '',
            lists : [],
            links: {},
            meta: {}
        }
    },

    created(){
        this.fetch();
    },  

    methods: {
       fetch(page_url){
            page_url = page_url || '/accounting';
            axios.get(page_url,{
                params : {
                    keyword : this.keyword,
                    count: this.counts,
                    type: 'Disbursement',
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

        add(){
            this.$refs.create.set();
        },

        formatAmount(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>