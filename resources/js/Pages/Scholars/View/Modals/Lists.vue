<template>
    <b-modal v-model="showModal" size="lg" hide-footer :title="(type == 'benefits') ? 'Benefit Lists' : 'Subject Lists'" centered>
        <div class="table-responsive mt-1" v-if="type == 'benefits'">
            <table class="table table-nowrap align-middle table-hover mb-0">
                <thead class="thead-light align-middle">
                    <tr class="font-size-11">
                        <th style="width: 37%">Name</th>
                        <th class="text-center" style="width: 33%">Month</th>
                        <th class="text-center" style="width: 15%">Status</th>
                        <th style="width: 15%" class="text-end">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="font-size-12" v-for="list in lists" v-bind:key="list.id">
                        <td>{{ list.benefit }}</td>
                        <td class="text-center">{{ list.month }}</td>
                        <td class="text-center">
                            <span v-if="list.status == 'Released'" class="badge bg-success">{{ list.status }}</span>
                            <span v-else class="badge bg-danger">{{ list.status }}</span>
                        </td>
                        <td class="text-end">₱ {{ formatMoney(list.amount) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive mt-1" v-else>
            <table class="table table-nowrap align-middle table-hover mb-0">
                <thead class="thead-light align-middle">
                    <tr class="font-size-11">
                        <th style="width: 15%">Code</th>
                        <th class="text-center" style="width: 50%">Subject</th>
                        <th style="width: 15%" class="text-center">Grade</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="font-size-12" v-for="list in lists" v-bind:key="list.id">
                        <td>{{ list.code }}</td>
                        <td class="text-center">{{ list.subject }}</td>
                        <td class="text-center"> {{ (list.grade == NULL) ? '-' : list.grade }}</td>
                        <td class="text-end">
                            <span v-if="list.grade != NULL" class="badge bg-success">Released</span>
                            <span v-else class="badge bg-danger">Unreleased</span>
                        </td>
                    </tr>
                </tbody>
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
            type: ''
        }
    },

    methods : {
        set(lists,type){
            this.showModal = true;
            this.type = type;
            this.lists = lists;
        },

        formatMoney(value) {
            let val = (value / 1).toFixed(2).replace(',', '.')
            return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        },
    }
}
</script>>