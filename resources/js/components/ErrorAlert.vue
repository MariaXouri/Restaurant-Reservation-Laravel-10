<template>
    <div class="error-con">
        <b-alert
            variant="warning"
            :show="dismissCountDown"
            dismissible
            @dismissed="dismissCountDown = 0"
            @dismiss-count-down="countDownChanged"
        >
            {{ message }}
        </b-alert>
    </div>
</template>

<script>
export default {
    props: {
        message: {
            type: String,
            required: true,
        },
        dismissSecs: {
            type: Number,
            required: true,
        },
        dismissCountDown: {
            type: Number,
            required: true,
        },
    },

    methods: {
        countDownChanged(dismissCountDown) {
            this.dismissCountDown = dismissCountDown;
        },
    },
};
</script>

<style scoped>
.error-con {
    position: absolute;

    /* margin-top: 5px; */
}
</style>
