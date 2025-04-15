<template>
    <div class="vue">
        <router-view></router-view>
    </div>
</template>

<script>
import { mapGetters } from "vuex";

export default {
    computed: {
        ...mapGetters("auth", ["authenticated"]),
    },
};
</script>

