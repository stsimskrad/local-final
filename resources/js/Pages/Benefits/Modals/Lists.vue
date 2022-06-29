<template>
    <b-modal v-model="showModal" title="List of Benefits" hide-footer centered>
        <b-form class="customform mb-2">
            <div class="row p-2">
                <div class="col-md-12">
                    <span class="fw-bold text-success">{{ lists.scholar.profile.lastname }}, {{ lists.scholar.profile.firstname }} {{ lists.scholar.profile.middlename }}</span>
                    <div class="table-responsive mt-1">
                        <table class="table table-nowrap align-middle table-hover mb-0">
                            <thead class="thead-light align-middle">
                                <tr class="font-size-11">
                                    <th style="width: 70%">Name</th>
                                    <th style="width: 30%" class="text-end">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="font-size-12" v-for="list in lists.lists" v-bind:key="list.id">
                                    <td>{{ list.benefit.name }}</td>
                                    <td class="text-end">₱ {{ formatMoney(list.amount) }}</td>
                                </tr>
                            </tbody>
                            <tfoot class="thead-light">
                                <tr class="font-size-12">
                                    <td colspan="2" class="text-end fw-bold text-primary">₱ {{ formatMoney(lists.total) }}</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
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
                lists : { scholar: { profile: {}}},
                height: '',
                total: '',
                showModal: false
            }
        },

        methods: {
            set(data,height){
                this.lists = data;
                this.height = height;
                this.showModal = true;
            },

            formatMoney(value) {
                let val = (value / 1).toFixed(2).replace(',', '.')
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            },
        }
    }

</script>
