<template>
    <BaseHead title="Home" />
    <div>
        Hello world! this is the home page.
    </div>
</template>

<script>
import { reactive, toRefs } from "vue";

import TheAdminLayoutVue from "@/Layouts/TheAdminLayout";
import BaseHead from "@/Shared/BaseHead";

export default {
    layout: TheAdminLayoutVue,
    components: {
        BaseHead,
    },
    setup() {
        const state = reactive({
            count: 0,
        });

        return {
            ...toRefs(state),
        };
    },
};
</script>
