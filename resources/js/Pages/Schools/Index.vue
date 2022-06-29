<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="col-12 mt-n3">
        <div class="card">
            <div class="card-body" :style="{ height: height + 'px' }">
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
                    <table class="table table-centered table-nowrap align-middle">
                        <thead class="thead-light">
                            <tr class="font-size-11">
                                <th style="width: 2%;"></th>
                                <th>Name</th>
                                <th class="text-center">Class</th>
                                <th class="text-center">Term</th>
                                <th class="text-center">Grading</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="list in lists" v-bind:key="list.id">
                                <td>
                                    <div class="avatar-xs" v-if="list.avatar == 'avatar.jpg'">
                                        <span class="avatar-title rounded-circle">{{list.name.charAt(0)}}</span>
                                    </div>
                                    <div v-else>
                                        <img class="rounded-circle avatar-xs" :src="currentUrl+'/images/avatars/'+list.avatar" alt="">
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-13 mb-0 text-dark">{{list.name}} - {{list.campus}}</h5>
                                    <p class="font-size-12 text-muted mb-0">{{list.address}}, {{list.municipality.name}}</p>
                                </td>
                                <td class="text-center">{{list.class.name}}</td>
                                <td class="text-center">{{list.term.name}}</td>
                                <td class="text-center">{{list.grading.name}}</td>
                                <td class="text-center">
                                <Link :href="`/schools/${list.code}`" class="mr-3">
                                    <i class='bx bx-sitemap'></i>
                                </Link>
                        </td>
                            </tr>
                            <tr v-if="lists.length == 0">
                                <td class="text-center" colspan="5">
                                    No users found.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
            </div>
        </div>
    </div>
</template>

<script>
import Header from "@/Shared/Header.vue";
import Pagination from "@/Shared/Pagination.vue";
import _ from 'lodash';

export default {
    components : { Header, Pagination },
    inject:['count3', 'height'],
    data() {
        return {
            currentUrl: window.location.origin,
            title: "Schools",
            items: [
                {text: "School", href: "/",},
                {text: "Lists",active: true,},
            ],
            lists: [],
            meta: {},
            links: {},
            keyword: '',
        };
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
            page_url = page_url || '/schools';
            axios.get(page_url,{
                params : {
                    keyword : this.keyword,
                    count: this.count3,
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

        update(list){
            this.$refs.update.set(list);
            this.editable = true;
        },

        create(){
            this.$refs.create.show();
            this.editable = false;
        },

        edit(list){
            this.$refs.create.edit(list);
            this.editable = true;
        },

        verify(list){
            this.$refs.verify.set(list);
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
</script>