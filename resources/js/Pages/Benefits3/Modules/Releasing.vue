<template>
    <div class="card-body border-bottom">
        <div class="page-title-left mt-n2 ms-n3 mb-n3">
            <ol class="breadcrumb m-0 font-size-15">
                <li class="breadcrumb-item fw-bold">{{ info.month}} </li>
                <li class="breadcrumb-item active"><span class="fw-bold text-primary">Release no. {{ info.count + 1}}</span></li>
            </ol>
        </div>
        <div class="float-end mt-n2">
            <button @click="back" type="button" class="mt-n4 btn btn-sm btn-label btn-secondary"><i class="bx bxs-chevrons-left label-icon"></i> Back </button>
        </div>
    </div>
    <div class="card-body" :style="{ height: (height-123) + 'px' }">
        <div class="table-responsive"  data-simplebar style="height: 425px;">
            <table class="table table-centered table-bordered table-nowrap">
                <thead class="thead-light align-middle">
                    <tr class="font-size-11">
                        <th style="width: 8%" class="text-center">#</th>
                        <th style="width: 50%">Name</th>
                        <!-- <th style="width: 15%" class="font-size-10 text-center">Stipend</th>
                        <th style="width: 15%" class="font-size-10 text-center">Book Allowance</th>
                        <th style="width: 15%" class="font-size-10 text-center">Tuition</th>
                        <th style="width: 15%" class="font-size-10 text-center">Clothing</th> -->
                        <th style="width: 38%" class="text-center">Total</th>
                        <td style="width: 10%" class="text-center"></td>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <tr v-if="lists.length == 0">
                        <td colspan="6" class="text-center text-muted">No Pending Scholars</td>
                    </tr>
                    <tr v-else v-for="(user,index) in lists" v-bind:key="user.id">
                        <td class="text-center font-size-11">{{ index+1 }}</td>
                        <td style="cursor: pointer;">
                            <h5 class="font-size-11  mb-0">{{user.name}}</h5>
                        </td>
                        <!-- <td class="text-center font-size-11" v-for="(benefit,index) in user.benefits" v-bind:key="index">
                            {{ formatMoney(benefit.amount) }}
                        </td> -->
                        <td class="text-center text-success fw-bold font-size-11">
                            ₱ {{ formatMoney(user.total) }}
                        </td>
                        <td class="text-center">
                            <button type="button" @click="benefit(user)" class="bg-light btn btn-sm btn-light me-1">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-body">
        <div class="float-end">
            <button @click="release" :disabled="(lists.length == 0) ? true : false" type="button" class="btn w-md ml-1 btn-sm btn-primary mb-3 mt-n1">Create</button>
        </div>
    </div>
    <Release ref="release" @status="back"/>
    <Benefit @total="updateTotal" ref="benefit"/>
</template>
<script>
import Release from "../Modals/Release.vue";
import Benefit from "../Modals/Benefit.vue";
export default {
    components : { Benefit, Release },
    props: ['height'],
    data(){
        return {
            currentUrl: window.location.origin,
            pagination: {},
            meta: {},
            links: {},
            lists: [],
            keyword: '',
            info: {}
        }
    },

    methods : {
        fetch(data) {
            this.info = data;
            this.scholars = data.pending;
            if(this.scholars.length > 0){           
                axios.get('/benefits3/create',{
                    params : {
                        info : JSON.stringify(this.scholars),
                        type: 'benefits'
                    }
                })
                .then(response => {
                    this.lists = response.data.data;
                })
                .catch(err => console.log(err));
            }
        },

        release(){
            this.$refs.release.set(this.lists,this.info);
        },

        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },

        benefit(data){
            this.$refs.benefit.set(data);
        },

        back(){
            this.$emit('status', true);
        },
    }
}
</script>