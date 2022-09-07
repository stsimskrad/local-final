<template>
    <div class="card-body border-bottom">
        <div class="page-title-left mt-n2 ms-n3 mb-n3">
            <ol class="breadcrumb m-0 font-size-15">
                <li class="breadcrumb-item fw-bold">Latest Enrollees</li>
                <!-- <li class="breadcrumb-item active"><span class="fw-bold text-primary">Release no. {{ info.count + 1}}</span></li> -->
            </ol>
        </div>
        <div class="float-end mt-n4 mb-n4">
            <ul class="list-inline user-chat-nav text-end mb-0 dropdown">
                <Pagination v-if="meta" @fetch="fetch" :links="links" :pagination="meta"/>
            </ul>
        </div>
    </div>
    <div class="card-body" :style="{ height: (height-64) + 'px' }">
        <div class="col-xl-12 d-inline-block mb-2">
            <div class="input-group mb-2" ref="www">
                <label class="input-group-text bg-light"> <i class='bx bx-search-alt'></i></label>
                <input type="text" class="form-control" style="width: 25%;" placeholder="Search..." v-model="keyword" @keyup="fetch()"/>
                <select  v-model="term" @change="fetch()" placeholder="Choose Semester" class="form-select" :class="(term == null) ? 'text-muted' : ''" style="width: 120px;">
                    <option :value="null" selected>Select Type</option>
                    <option :value="m" v-for="(m,index) in terms" v-bind:key="index">{{ m.name }}</option>
                </select>
                <select  v-model="semester" @change="fetch()" placeholder="Choose Semester" class="form-select" :class="(term == null) ? 'text-muted' : ''" style="width: 120px;">
                    <option :value="null" selected>Select Semester</option>
                    <option :value="m" v-for="(m,index) in semesters" v-bind:key="index">{{ m.name }}</option>
                </select>
                <select  v-model="level" @change="fetch()" placeholder="Choose Level" class="form-select" :class="(term == null) ? 'text-muted' : ''" style="width: 120px;">
                    <option :value="null" selected>Select Level</option>
                    <option :value="m" v-for="(m,index) in levels" v-bind:key="index">{{ m.others }}</option>
                </select>
                <input type="text" class="form-control" style="width: 120px;" placeholder="Enter Year" v-model="year"  @keyup="fetch()"/>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-centered table-nowrap">
                <thead class="thead-light">
                    <tr class="font-size-11">
                        <th>Academic Year</th>
                        <th class="text-center">Scholar</th>
                        <th class="text-center">School</th>
                        <th class="text-center">Enrolled At</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <tr v-for="list in lists" v-bind:key="list.id">
                        <td>
                            <h5 class="font-size-13 mb-0 text-dark">{{list.academic_year}}</h5>
                            <p class="font-size-11 text-muted mb-0">{{list.semester }}</p>
                        </td>
                        <td class="text-center">{{list.scholar}}</td>
                        <td class="text-center">{{list.school}}</td>
                        <td class="text-center">{{list.enrolled_at}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>    
import Pagination from "@/Shared/Pagination.vue";
export default {
    inject: ['height','count2'],
    props: ['dropdowns'],
    components: { Pagination },
    data(){
        return {
            currentUrl: window.location.origin,
            pagination: {},
            meta: {},
            links: {},
            lists: [],
            keyword: '',
            term: null,
            semester: null,
            level: null,
            year: ''
        }
    },

    computed:{
        terms : function() {
            return this.dropdowns.filter(x => x.classification === 'Term Type');
        },
        semesters : function() {
            return this.dropdowns.filter(x => x.type === 'term');
        },
        levels : function() {
            return this.dropdowns.filter(x => x.classification === 'Level');
        }
    },

    created(){
        this.fetch();
    },  

    methods: {
        fetch(page_url){
            page_url = page_url || '/enrollments';
            axios.get(page_url,{
                params: {  
                    counts: this.count2,
                    search: true,
                    type: 'enrolled'
                }
            })
            .then(response => {
                this.lists = response.data.data;
                this.meta = response.data.meta;
                this.links = response.data.links;
            })
            .catch(err => console.log(err));
        },

    }
}
</script>