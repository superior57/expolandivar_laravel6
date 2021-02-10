<template>
    <div class="comming-event-item unite-item">
        <div class="comming-event-body unite-body">
            <span class="title mb-2">{{ title }}</span>
            <span class="brief mb-2">
            {{ description }}
            </span>
            <div class="d-flex">
            <span class="mr-30">{{ phone }}</span>
            <span>{{ email }}</span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ "title", "description", "phone", "email" ],
    }
</script>

<style lang="scss" scoped>

</style>