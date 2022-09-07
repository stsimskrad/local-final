<template>
    <div class="card-body border-bottom">
        <div class="row mt-n2 mb-n2">
            <div class="col-sm-6">
                <div>
                    <p class="text-muted mb-0">Month & Year</p>
                    <h6 class="text-primary">{{ info.month }} <span class="text-muted font-size-10">(Release no.{{ info.number}})</span></h6>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end mt-4 mt-sm-0">
                    <p class="text-muted mb-0">Added By</p>
                    <h6> {{ info.added_by.firstname }} {{ info.added_by.lastname }}</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body border-bottom" :style="{ height: (height-131) + 'px' }">
        <div class="table-responsive mt-n2">
            <table class="table table-centered table-nowrap">
                <thead class="thead-light">
                    <tr class="font-size-11">
                        <th class="text-start" style="width: 50%">Scholar Name</th>
                        <th class="text-center" style="width: 40%">Total</th>
                        <th style="height: 10%"></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="table-responsive" data-simplebar style="height: 360px; margin-top: -15px;">
            <table class="table table-centered table-nowrap">
                <tbody>
                    <tr v-for="list in info.lists" v-bind:key="list.id">
                        <td class="text-start" style="width: 50%">{{ list.name }}</td>
                        <td class="text-center" style="width: 40%">₱{{ formatMoney(list.total)}}</td>
                        <td class="text-end" style="width: 10%">
                            <button @click="show(list)" type="button" class="bg-info btn btn-sm btn-info me-1">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <View ref="view" />
</template>
<script>
import View from "../Modals/View.vue";
export default {
    components : { View },
    props: ['height'],
    data(){
        return {
            currentUrl: window.location.origin,
            pagination: {},
            meta: {},
            links: {},
            lists: [],
            keyword: '',
            info: {
                added_by: {},
                lists: []
            }
        }
    },

    methods : {
        set(data){
            this.info = data;
        },

        back(){
            this.$emit('status', true);
        },
        
        show(data){
            this.$refs.view.set(data);
        },

        formatMoney(value) {
            let val = (value/1).toFixed(2).replace(',', '.')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>