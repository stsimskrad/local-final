<template>
    <div class="row">
        <div class="col-xl-6">
          
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
                    <th>Check #</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Check Date</th>
                    <th class="text-center">Credited Date</th>
                    <th class="text-center">Added By</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="list in lists" v-bind:key="list.id">
                    <td>
                        
                    </td>
                    <td>{{list.check_no}}</td>
                    <td class="text-center">₱{{ formatAmount(list.total)}}</td>
                    <td class="text-center">{{list.checked_at}}</td>
                    <td class="text-center">{{list.credited_at}}</td>
                    <td class="text-center">{{list.added_by}}</td>
                    <td class="text-end">
                        <a class="me-3 text-warning" @click="edit(list)"><i class='bx bx-edit-alt'></i></a>
                        <a class="me-3" @click="showlist(list.c)">
                            <i class='bx bxs-show'></i>
                        </a>
                        <a class="text-danger"><i class='bx bx-trash'></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
import Pagination from "@/Shared/Pagination.vue";
export default {
    components : { Pagination },
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
                    type: 'Allotment',
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

        formatAmount(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>