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
                    <th style="width: 30%;">Title of Research</th>
                    <th class="text-center" style="width: 24%;">Source of fund</th>
                    <th class="text-center" style="width: 24%;">Involvement</th>
                    <th class="text-center" style="width: 23%;">Duration</th>
                    <th class="text-center" style="width: 23%;">Date Added</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <tr v-for="info in lists" v-bind:key="info.id">
                    <td>{{info.information.research}}</td>
                    <td class="text-center">{{info.information.fund_source}}</td>
                    <td class="text-center">{{info.information.nature_involvement}}</td>
                    <td class="text-center">{{info.information.duration}}</td>
                    <td class="text-center font-size-11">{{info.created_at}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <Research :user="id" ref="create"/>
</template>
<script>
import Research from '../Forms/Research.vue';
import WindowPortal from "@/Shared/Window/WindowPortal";
import HelloWorld from "@/Shared/Window/HelloWorld";
import Pagination from "@/Shared/Pagination.vue";
export default {
    components : { WindowPortal, HelloWorld, Research, Pagination },
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
                    type: 'Research'
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