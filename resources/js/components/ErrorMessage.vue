<template>
    <div class="error-con">
        <div class="error-message">{{ message }}</div>
    </div>
</template>

<script>
export default {
    props: {
        message: {
            required: true,
        },
    },
};
</script>

<style scoped>
.error-con {
    position: absolute;
    display: flex;
    justify-content: center;
    /* margin-top: 5px; */
}

.error-message {
    font-size: 12px;
    color: #ef2d56;
    font-weight: 600;
}
</style>
