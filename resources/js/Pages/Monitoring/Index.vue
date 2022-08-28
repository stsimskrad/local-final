<template>
    <Header :title="title" :content="title" :items="items" />
    <div class="col-12 mt-n3">
        <div class="card">
            <div class="card-body" :style="{ height: height + 'px' }">
            </div>
        </div>
    </div>
</template>
<script>
import Header from "@/Shared/Header.vue";
export default {
    components : { Header },
    inject:['count2', 'height'],
    data(){
        return {
            title: "Monitoring",
            items: [
                {text: "Scholar", href: "/",},
                {text: "Lists",active: true,},
            ],
        }
    }
}
</script>