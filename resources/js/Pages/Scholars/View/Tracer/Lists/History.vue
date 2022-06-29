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
                    <th style="width: 30%;">Company</th>
                    <th class="text-center" style="width: 24%;">Position / Period</th>
                    <th class="text-center" style="width: 23%;">Is Job Related To UAT?</th>
                    <th class="text-center" style="width: 23%;">Date Added</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <tr v-for="info in lists" v-bind:key="info.id">
                    <td>
                        <h5 class="font-size-13 mb-0 text-dark">{{info.information.company}}</h5>
                        <p class="font-size-12 text-muted mb-0">{{info.information.address}}</p>
                    </td>
                    <td class="text-center">
                        <h5 class="font-size-13 mb-0 text-dark">{{info.information.position}}</h5>
                        <p class="font-size-12 text-muted mb-0">{{ formDate(info.information.start_at) }} - {{formDate(info.information.end_at) }}</p>
                    </td>
                    <td class="text-center">
                        <i :class="(info.information.is_related) ? 'bx bxs-check-circle text-success' : 'bx bxs-x-circle text-danger'"></i>
                    </td>
                    <td class="text-center font-size-11">
                       {{info.created_at}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <History :user="id" ref="create"/>
</template>
<script>
import History from '../Forms/History.vue';
import WindowPortal from "@/Shared/Window/WindowPortal";
import HelloWorld from "@/Shared/Window/HelloWorld";
import Pagination from "@/Shared/Pagination.vue";
export default {
    components : { WindowPortal, HelloWorld, History, Pagination },
    props: ['id'],
    inject:['count3'],
    data(){
        return {
            currentUrl: window.location.origin,
            lists : [],
            meta: {},
            links: {},
            open: false,
            attachment: '',
            keyword: '',
            editable: false
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
                    type: 'History'
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

        formDate(data){
            return new Date(data).toDateString().split(' ').slice(1).join(' ');
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