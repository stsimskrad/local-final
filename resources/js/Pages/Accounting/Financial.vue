<template>
    <div class="row">
        <div class="col-md-6">
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
        <div class="col-md-6">
            <div class="form-group">
                <label>Academic Year:</label>
                <multiselect v-model="quarter" id="ajax"
                    placeholder="Select Quarter" open-direction="bottom" :options="quarters"
                    :allow-empty="false"
                    :show-labels="false">
                </multiselect> 
            </div>
        </div>
    </div>
</template>
<script>
import DatePicker from 'vue-datepicker-next';
import 'vue-datepicker-next/index.css';
import Multiselect from '@suadelabs/vue3-multiselect';
export default {
    components : { DatePicker, Multiselect },
    data(){
        return {
            quarter: '',
            year: '',
            form: {},
            quarters: ['1st Quarter', '2nd Quarter', '3rd Quarter', '4th Quarter']
        }
    },
}
</script>