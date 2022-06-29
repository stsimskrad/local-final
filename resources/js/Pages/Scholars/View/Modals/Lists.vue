<template>
    <b-modal v-model="showModal" hide-footer title="Benefit Lists" centered>
        <div class="table-responsive mt-1">
            <table class="table table-nowrap align-middle table-hover mb-0">
                <thead class="thead-light align-middle">
                    <tr class="font-size-11">
                        <th style="width: 70%">Name</th>
                        <th style="width: 30%" class="text-end">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="font-size-12" v-for="list in lists" v-bind:key="list.id">
                        <td>{{ list.benefit }}</td>
                        <td class="text-end">
                            ₱ {{ formatMoney(list.amount) }}
                            <span class="text-muted font-size-11" v-if="list.dividen != 1 && list.benefit == 'Stipend'">({{ list.benefit_amount }} x {{ list.dividen }})</span>
                        </td>
                    </tr>
                </tbody>
                <tfoot class="thead-light">
                    <tr class="font-size-12">
                        <td colspan="2" class="text-end fw-bold text-primary">₱ {{ formatMoney(total) }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </b-modal>
</template>
<script>
export default {
    data(){
        return {
            showModal : false,
            lists: [],
            total: ''
        }
    },

    methods : {
        set(lists,total){
            this.showModal = true;
            this.lists = lists;
            this.total = total;
        },
        formatMoney(value) {
            let val = (value / 1).toFixed(2).replace(',', '.')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>>