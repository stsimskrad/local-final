<template>
    prospectus
</template>
<script>
import Layout from "@/Shared/Layout/Layout";
import profile from "@/Pages/Scholars/View/Index";
export default {
    layout: (h,page) => {
        return h(Layout, [
            h(profile,[page])
        ])
    },
    layout: [Layout, profile],
    props: {
      user: Object,
    },
}
</script>>