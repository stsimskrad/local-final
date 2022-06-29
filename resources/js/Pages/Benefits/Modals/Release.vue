<template>
    <b-modal v-model="showModal" title="New Release" ok-title="Save" centered>
        <b-form class="customform mt-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="responsive">
                        <table class="table table-centered table-bordered table-nowrap">
                            <thead class="thead-light align-middle text-center">
                                <tr class="fw-bold font-size-11">
                                    <td>No. of Scholars</td>
                                    <td>Total</td>
                                </tr>
                            </thead>
                            <tbody class="align-middle text-center">
                                <tr>
                                    <td width="50%">{{scholars.length}} </td>
                                    <td width="50%">₱ {{ formatMoney(total)}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" v-model="dv" type="checkbox" id="gridCheck"/>
                        <label class="form-check-label" for="gridCheck">Do you want to add Disbursement Voucher?</label>
                    </div>
                    <input v-if="dv" type="text" class="form-control mt-3" placeholder="Disbursement Voucher" v-model="dv_no"/>
                </div>
            </div>
        </b-form>
        <template v-slot:footer>
            <b-button @click="showModal = false" variant="secondary" block>Cancel</b-button>
            <b-button @click="create('ok')" variant="primary"  block>Save</b-button>
        </template>
    </b-modal>
</template>

<script>
    export default {
        data() {
            return {
                currentUrl: window.location.origin,
                month : new Date().toLocaleString('en-us', { month: 'long' }),
                batch: '',
                month: '',
                scholars: '',
                total: '',
                dv: false,
                dv_no: '',
                showModal: false,
                form: {}
            }
        },

        methods: {
            set(month,scholars){
                this.month = month;
                this.scholars = scholars.lists;
                this.total = scholars.total;
                this.showModal = true;
            },

            create(){
                this.form = this.$inertia.form({
                    'month_id': this.month.id,
                    'lists': this.scholars,
                    'total': this.total,
                    'dv': this.dv,
                    'dv_no': this.dv_no,
                    'number': this.month.releases.length + 1
                })
                this.form.post('/benefits',{
                    preserveScroll: true,
                    onSuccess: (response) => {
                        this.$parent.$parent.$parent.fetchLatest();
                        this.$parent.$parent.$parent.set();
                        this.showModal = false;
                    }
                });
                
                // evt.preventDefault();
                // axios.post(this.currentUrl + '/request/benefit/store',{
                //     'month_id': this.month.id,
                //     'lists': this.scholars,
                //     'total': this.total,
                //     'dv': this.dv,
                //     'dv_no': this.dv_no,
                //     'number': this.month.releases.length + 1
                // })
                // .then(response => {
                //     this.$parent.$parent.$parent.fetchLatest();
                //     this.$parent.$parent.$parent.set();
                //     this.$bvModal.hide("newrelease");
                //     Vue.$toast.success('<strong>Successfully Created</strong>', {
                //         position: 'bottom-right'
                //     });
                // })
                // .catch(err => console.log(err));
            },

            formatMoney(value) {
                let val = (value/1).toFixed(2).replace(',', '.')
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            },
        }
    }

</script>
