<template>
    <Head title="Education" />

    <div class="card" :style="{ height: height2 + 'px' }" style="margin-bottom: -30px;">
        
    </div>
</template>
<script>
    import Header from "@/Shared/Header.vue";
    export default {
        components: { Header },
        inject:['height2'],
        props: ['scholar']
    }

</script>
