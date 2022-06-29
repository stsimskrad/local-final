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
                    <th style="width: 2%;"></th>
                    <th>Name</th>
                    <th class="text-center">Level</th>
                    <th class="text-center">Failed</th>
                    <th class="text-center">No Grades</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Created at</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                <tr v-for="info in lists" v-bind:key="info.id" style="cursor: pointer;">
                    <td>
                            <i @click="win(info.attachment.enrollments.file)" class='bx bxs-file-pdf font-size-24 mt-1 me-n3' style="cursor: pointer;"></i>
                    </td>
                    <td>
                        <h5 class="font-size-13 mb-0 text-primary">{{ info.academic_year }}</h5>
                        <p class="font-size-11 text-muted mb-0">{{ info.semester }}</p>
                    </td>
                    <td class="text-center">{{ info.level }}</td>
                    <td class="text-center">{{ info.has_failing }}</td>
                    <td class="text-center">{{ info.has_empty }}</td>
                    <td class="text-center">
                        <span v-if="info.is_clear" class="badge bg-success">Completed</span>
                        <span v-else class="badge bg-danger">Not Completed</span>
                    </td>
                    <td class="text-center font-size-11">{{ info.created_at }}</td>
                </tr>
                <tr v-if="lists.length == 0">
                    <td class="text-center" colspan="7">
                        No records for scholars
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <WindowPortal v-model="open" ref="open">
        <HelloWorld ref="viewpdf"/>
    </WindowPortal>
</template>
<script>
import WindowPortal from "@/Shared/Window/WindowPortal";
import HelloWorld from "@/Shared/Window/HelloWorld";
import Layout from "@/Shared/Layout/Layout";
import profile from "@/Pages/Scholars/View/Index";
export default {
    components : {WindowPortal, HelloWorld},
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
                    type: 'enrollment'
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;
            })
            .catch(err => console.log(err));
        },

        win(attachment){
            this.open = true;
            this.attachment = attachment;
            this.$refs.open.set(attachment);
        }
    }
}
</script>>