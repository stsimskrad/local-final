<template>
    <b-modal v-model="showModal" title="Update Benefits" hide-footer centered>
        <b-form class="customform mb-2">
            <div class="row">
                <div class="col-md-12 p-3 mb-n4">
                    <blockquote class="p-3 border-light border rounded">
                        <div class="d-flex mb-n2">
                            <div class="mr-3"><i class="bx bxs-quote-alt-left text-primary font-size-14"></i></div>
                            <div>
                                <p class="mb-1 fw-bold text-primary">
                                    {{ user.scholar.firstname }} {{ user.scholar.lastname }}
                                    <span class="text-muted font-size-11 ml-2">({{ user.scholar.spas_id }})</span> 
                                </p>
                            </div>
                        </div>
                    </blockquote>

                    <div role="group" class="form-row form-group mb-1" v-for="benefit in user.benefits" v-bind:key="benefit.id">
                        <label for="text" class="col-lg-4 col-form-label">{{ benefit.name }}</label>
                        <div class="col">
                            <input type="text" v-model="benefit.amount" class="form-control" for="text">
                        </div>
                    </div>
                    <hr />
                    <span class="text-primary fw-bold">Total :</span> <p class="float-end text-primary fw-bold">₱ {{ formatMoney(totalItem) }}</p>
                </div>
            </div>
        </b-form>
    </b-modal>
</template>

<script>
    export default {
        data() {
            return {
                currentUrl: window.location.origin,
                user: {
                    scholar: {},
                    benefits: []
                },
                showModal: false
            }
        },

        computed: {
            totalItem: function(){
                let sum = 0;
                for(let i = 0; i < this.user.benefits.length; i++){
                    sum += (parseFloat(this.user.benefits[i].amount));
                }
                this.user.total = sum;
                this.$emit('total', sum);
                return sum;
            }
        },

        methods: {
            set(data) {
                this.user = data;
                this.showModal = true;
            },
            formatMoney(value) {
                let val = (value / 1).toFixed(2).replace(',', '.')
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            },
        }
    }

</script>
