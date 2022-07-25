<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="col-12 mt-n3">
        <div class="card">
            <div class="card-body" :style="{ height: height + 'px' }">
                <b-tabs pills nav-class="bg-light rounded" content-class="mt-3" small>
                    <b-tab active title="Home" style="color: black;">
                        <b-card-text>
                            <Report />
                        </b-card-text>
                    </b-tab>
                    <b-tab title="Allotments">
                        <b-card-text>
                            <Allotment :counts="count4"/>
                        </b-card-text>
                    </b-tab>
                    <b-tab title="Disbursements">
                        <b-card-text>
                            <Disbursement :expenses="expenses" :counts="count4"/>
                        </b-card-text>
                    </b-tab>
                </b-tabs>
            </div>
        </div>
    </div>
</template>

<script>
import Header from "@/Shared/Header.vue";
import Report from "./Report.vue";
import Allotment from "./Allotment/Index.vue";
import Disbursement from "./Disbursement/Index.vue";
export default {
    components: { Header, Allotment, Disbursement, Report },
    inject: ['height','count4'],
    props: ['dropdowns','expenses'],
    data() {
        return {
            currentUrl: window.location.origin,
            title: "Accounting",
            items: [{text: "Benefit",href: "/"},{text: "Lists",active: true}],
            allotments: [],
            expenses: [],
            list : { balances: [], allotments: [], disrbursements: []}
        };
    },
    computed: {
        sum_allotment : function() {
            let sum = 0;
            return this.allotments.reduce((acc, ele) => {
                if(ele.lists_sum == null){
                    sum = 0;
                }else{
                    sum = ele.lists_sum;
                }
                return acc + parseInt(sum);
            }, 0);
        },
        allotment_sum : function() {
            let sum = 0;
            return this.expenses.reduce((acc, ele) => {
                if(ele.allotment_sum == null){
                    sum = 0;
                }else{
                    sum = ele.allotment_sum;
                }
                return acc + parseInt(sum);
            }, 0);
        },
        balance_sum : function() {
            let sum = 0;
            return this.expenses.reduce((acc, ele) => {
                if(ele.balance_sum == null){
                    sum = 0;
                }else{
                    sum = ele.balance_sum;
                }
                return acc + parseInt(sum);
            }, 0);
        },
        disbursement_sum : function() {
            let sum = 0;
            return this.expenses.reduce((acc, ele) => {
                if(ele.disbursement_sum == null){
                    sum = 0;
                }else{
                    sum = ele.disbursement_sum;
                }
                return acc + parseInt(sum);
            }, 0);
        }
    },

    created(){
        this.fetch();
    },

    methods : {
        fetch(){
            axios.get(this.currentUrl + '/accounting/create')
            .then(response => {
                this.allotments = response.data.allotments;
                this.expenses = response.data.expenses;
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
