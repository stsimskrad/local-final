<template>
    <b-modal v-model="showModal" :title="lists.name" size="lg" ok-title="Save" hide-footer centered>
        <b-form class="customform mt-2">
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-centered table-nowrap">
                        <thead class="thead-light">
                            <tr class="font-size-11">
                                <th class="text-start">Name</th>
                                <th class="text-end">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="benefit in lists.benefits" v-bind:key="benefit.id">
                                <td class="text-start">{{ benefit.benefit.name }} <span v-if="benefit.benefit.name == 'Stipend'" class="text-muted font-size-10">({{ benefit.month }})</span></td>
                                <td class="text-end">₱{{ formatMoney(benefit.amount)}}</td>
                            </tr>
                        </tbody>
                    </table>
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
                showModal: false,
                lists: {}
            }
        },

        methods: {
            set(data) {
                this.lists = data;
                this.showModal = true;
            },

            formatMoney(value) {
                let val = (value / 1).toFixed(2).replace(',', '.')
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            },
        }
    }

</script>
