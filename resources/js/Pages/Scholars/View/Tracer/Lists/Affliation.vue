<template>
    <hr />
    <div class="row mb-3">
        <div class="col-xl-6 col-sm-6 d-inline-block">
            <button type="button" @click="addNew" class="btn btn-danger me-1" style="margin-top: -2px;"><i class='bx bx-plus-medical'></i></button>
            <form class="d-inline-block ">
                <div class="search-box">
                    <div class="position-relative">
                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Search..." v-model="keyword">
                        <i class='bx bx-search-alt search-icon'></i>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-6 col-sm-6">
            <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                <Pagination v-if="meta" @fetch="fetch" :links="links" :pagination="meta"/>
            </ul>
        </div>
    </div>
   <div class="table-responsive">
        <table class="table table-nowrap">
            <thead class="thead-light">
                <tr class="font-size-11">
                    <th style="width: 30%;">Organization</th>
                    <th class="text-center" style="width: 24%;">Address</th>
                    <th class="text-center" style="width: 23%;">Position</th>
                    <th class="text-center" style="width: 23%;">Duration</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <tr v-for="info in lists" v-bind:key="info.id">
                    <td>{{info.information.organization}}</td>
                    <td class="text-center">{{info.information.address}}</td>
                    <td class="text-center">{{info.information.position}}</td>
                    <td class="text-center">{{info.information.duration}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <Affliation :user="id" ref="create"/>
</template>
<script>
import Affliation from '../Forms/Affliation.vue';
import WindowPortal from "@/Shared/Window/WindowPortal";
import HelloWorld from "@/Shared/Window/HelloWorld";
import Pagination from "@/Shared/Pagination.vue";
export default {
    components : { WindowPortal, HelloWorld, Affliation, Pagination },
    props: ['id'],
    inject:['count'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists : [],
            meta: {},
            links: {},
            open: false,
            attachment: '',
            keyword: ''
        }
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
        }
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
            page_url = page_url || '/scholar/tracer';
            axios.get(page_url,{
                params: {  
                    keyword : this.keyword,
                    id : this.id,
                    count: this.count,
                    type: 'Affliation'
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;
            })
            .catch(err => console.log(err));
        },

        addNew(){
            this.$refs.create.set();
        },

        message(list){
            if(!this.editable){
                this.lists.unshift(list);
            }else{
                let index = this.lists.findIndex(u => u.id === list.id);
                this.lists[index] = list;
            }
        },
    }
}
</script>>