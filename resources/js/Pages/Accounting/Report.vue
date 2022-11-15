<template>
    <div class="row customform mb-2">
        <div class="col-md-5">
            <label>Year From: {{ type }}
                <span v-if="form.errors" v-text="form.errors.year" class="haveerror"></span>
            </label>
            <date-picker
                v-model:value="year"
                type="year" format="YYYY"
                lang="en"
                placeholder="Select Year"
                :clearable="false"
                >
            </date-picker>
        </div>
        <div class="col-md-5">
            <div class="form-group">
                <label>Academic Year:</label>
                <multiselect v-model="quarter" id="ajax"
                    placeholder="Select Quarter" open-direction="bottom" :options="quarters"
                    :allow-empty="false"
                    :show-labels="false">
                </multiselect> 
            </div>
        </div>
        <div class="col-md-2">
            <button @click="fetch()" type="button" class="btn btn-primary waves-effect waves-light" style="margin-top: 20px;">
                <i class="bx bxs-report font-size-16 align-middle me-2"></i> Generate
            </button>
        </div>
    </div>  
    <blockquote class="p-3 border-light border rounded ">
        
        <div class="row g-0" v-if="allotments.length > 0">
            <div class="col-md-6">
                <table class="table table-centered table-nowrap">
                    <thead class="thead-light">
                        <tr class="font-size-11">
                            <th class="text-center">Check Date</th>
                            <th class="text-center">Check #</th>
                            <th class="text-center">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="list in allotments" v-bind:key="list.id">
                            <td class="text-center">{{list.checked_at}}</td>
                            <td class="text-center">{{list.check_no}}</td>
                            <td class="text-center">₱{{ formatAmount(list.lists_sum)}}</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-center fw-bold">₱{{ formatAmount(sum_allotment) }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-centered table-nowrap">
                    <thead class="thead-light">
                        <tr class="font-size-11">
                            <th class="text-center">Previous Balance</th>
                            <th class="text-center">Total</th>
                            <th class="text-center">Disbursement</th>
                            <th class="text-center">Current Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center"> {{ formatAmount(balance_sum) }}</td>
                            <td class="text-center"> {{ formatAmount(balance_sum + sum_allotment) }}</td>
                            <td class="text-center"> {{ formatAmount(disbursement_sum) }}</td>
                            <td class="text-center"> {{ formatAmount((balance_sum + sum_allotment) - disbursement_sum) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <table class="table table-centered table-nowrap">
                    <thead class="thead-light">
                        <tr class="font-size-11">
                            <th class="text-center" style="width:40%">Expense Class</th>
                            <th class="text-center" style="width:15%">Unexpended Balance</th>
                            <th class="text-center" style="width:15%">Current Release</th>
                            <th class="text-center" style="width:15%">Disbursement</th>
                            <th class="text-center" style="width:15%">Balance</th>
                        </tr>
                    </thead>
                </table>
            </div>
            <div class="col-md-12" style="height: 280px; overflow: auto;">
                <table class="table table-centered table-nowrap">
                    <tbody>
                        <tr  v-for="list in expenses" v-bind:key="list.id">
                            <td class="text-center" style="width:40%"> {{ (list.name.length > 50) ? list.code : list.name }}</td>
                            <td class="text-center" style="width:15%"> {{ (list.balances.length > 0) ? formatAmount(list.balances[0].amount) : '0.00'  }}</td>
                            <td class="text-center" style="width:15%"> {{ (list.allotments.length > 0) ? formatAmount(list.allotments[0].amount) : '0.00'  }}</td>
                            <td class="text-center" style="width:15%"> {{ (list.disbursements.length > 0) ? formatAmount(list.disbursements[0].amount) : '0.00'  }}</td>
                            <td class="text-center" style="width:15%">  </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div v-else>
            <div class="alert alert-success" role="alert">
                No record found.
            </div>
        </div>
    </blockquote>
</template>

<script>
    import DatePicker from 'vue-datepicker-next';
import 'vue-datepicker-next/index.css';
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { DatePicker, Multiselect },
    data() {
        return {
            currentUrl: window.location.origin,
            allotments: [],
            expenses: [],
            list : { balances: [], allotments: [], disrbursements: []},
            quarter: '',
            year: '',
            form: {},
            quarters: ['1st Quarter', '2nd Quarter', '3rd Quarter', '4th Quarter']
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
            axios.get(this.currentUrl + '/accounting/create',{ params : {
                year: (this.year != '') ? new Date(this.year).toLocaleDateString("af-ZA") : '',
                quarter: this.quarter
            }})
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
