<template>
    <b-tabs pills nav-class="bg-light rounded" content-class="mt-3" small>
        <b-tab active title="History" style="color: black;">
            <b-card-text>
                <History :id="user.data.code" />
            </b-card-text>
        </b-tab>
        <b-tab title="Affliation" style="color: black;">
            <b-card-text>
                <Affliation :id="user.data.code" />
            </b-card-text>
        </b-tab>
        <b-tab title="Awards">
            <b-card-text>
                <Award :id="user.data.code" />
            </b-card-text>
        </b-tab>
        <b-tab title="R&D">
            <b-card-text>
                <Research :id="user.data.code" />
            </b-card-text>
        </b-tab>
    </b-tabs>
</template>
<script>
import Research from '../Tracer/Lists/Research.vue';
import History from '../Tracer/Lists/History.vue';
import Affliation from '../Tracer/Lists/Affliation.vue';
import Award from '../Tracer/Lists/Award.vue';
import Layout from "@/Shared/Layout/Layout";
import profile from "@/Pages/Scholars/View/Index";
export default {
    layout: (h,page) => {
        return h(Layout, [
            h(profile,[page])
        ])
    },
    layout: [Layout, profile],
    props: { user: Object },
    components : { History , Affliation, Award, Research }
}
</script>
<style>
.nav .nav-item .nav-link {
    width: 200px;
}
</style>