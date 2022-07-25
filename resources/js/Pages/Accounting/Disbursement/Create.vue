<template>
    <b-modal @ok="create($event)"  v-model="showModal" title="Create Disbursement" ok-title="Add" centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Expense: <span v-if="form.errors" v-text="form.errors.expense_id" class="haveerror"></span></label>
                        <multiselect 
                            v-model="list.expense" 
                            :options="expenses"
                            :show-labels="false"
                            label="name" track-by="id" 
                            :allow-empty="false"
                            placeholder="Select Expense">
                        </multiselect>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Amount: <span v-if="form.errors" v-text="form.errors.amount" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="list.amount">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Remarks: <span v-if="form.errors" v-text="form.errors.remarks" class="haveerror"></span></label>
                        <input type="text" class="form-control" v-model="list.remarks">
                    </div>
                </div>
                                            
            </div>
        </b-form>
        <template v-slot:footer>
            <b-button @click="showModal = false" variant="secondary" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary" block>Save</b-button>
        </template>
    </b-modal>
</template>
<script>
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { Multiselect },
    props: ['expenses'],
    data(){
        return {
            showModal: false,
            list: {
                id: '',
                expense: '',
                remarks: '',
                amount: ''
            },
            form: {},
            editable: false
        }
    },

    methods : {
        set(){
            this.showModal = true;
        },

        create(){
            this.form = this.$inertia.form({
                'expense_id': this.list.expense.id,
                'amount': this.list.amount,
                'remarks': this.list.remarks,
                'editable': this.editable,
                'type': 'disbursement'
            })

            this.form.post('/accounting',{
                preserveScroll: true,
                onSuccess: (response) => {
                    this.hide();
                }
            });
        },

        hide(){
           (this.form.hasOwnProperty('reset') ) ? this.form.reset().clearErrors() : this.list = {};
            this.showModal = false;
        },
    }
}
</script>