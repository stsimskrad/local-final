<template>
    <div class="row mb-3">
        <div class="col-xl-6 col-sm-6 d-inline-block">
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
        <table class="table table-centered table-nowrap">
            <thead class="thead-light">
                <tr class="font-size-11">
                    <th>Academic Year</th>
                    <th class="text-center">Semester</th>
                    <th class="text-center">Created At</th>
                    <th class="text-center">Benefit Status</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <tr v-for="info in lists" v-bind:key="info.id" style="cursor: pointer;">
                    <td class="fw-bold">{{ info.academic_year }}</td>
                    <td class="text-center font-size-12">{{ info.semester }}</td>
                    <td class="text-center font-size-12">{{ info.created_at }}</td>
                    <td class="text-center">
                        <span v-if="info.benefit_completed" class="badge bg-success">Completed</span>
                        <span v-else class="badge bg-danger">Incomplete</span>
                    </td>
                    <td class="text-end text-success fw-bold font-size-11">
                        <button @click="view(info.benefits)" type="button" class="btn btn-primary btn-sm btn-rounded">
                            List of Benefits
                        </button>
                    </td> 
                </tr>
                <tr v-if="lists.length == 0">
                    <td class="text-center" colspan="7">
                        No records for scholars
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <Lists ref="lists"/>
    <WindowPortal v-model="open" ref="open">
        <HelloWorld ref="viewpdf"/>
    </WindowPortal>
</template>
<script>
import WindowPortal from "@/Shared/Window/WindowPortal";
import HelloWorld from "@/Shared/Window/HelloWorld";
import Layout from "@/Shared/Layout/Layout";
import profile from "@/Pages/Scholars/View/Index";
import Lists from "../Modals/Lists.vue";
import Pagination from "@/Shared/Pagination.vue";
export default {
    components : {Pagination, WindowPortal, HelloWorld, Lists},
    layout: (h,page) => {
        return h(Layout, [
            h(profile,[page])
        ])
    },
    layout: [Layout, profile],
    props: {
      user: Object,
    },

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
        }
    },

    created(){
        this.fetch();
    },

    methods : {
        checkSearchStr: _.debounce(function(string) {
            this.fetch();
        }, 300),

        fetch(page_url){
            page_url = page_url || '/scholar/show';
            axios.get(page_url,{
                params: {  
                    keyword : this.keyword,
                    id : this.user.data.code,
                    type: 'benefit'
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;
            })
            .catch(err => console.log(err));
        },

        view(lists){
            this.$refs.lists.set(lists,'benefits');
        }
    }
}
</script>>