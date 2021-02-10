<template>
    <div :class="'history-card '+classname">
        <div class="left-color-mark" :style="'background-color: '+barcolor">
        </div>
        <div :class="'history-card-body '+getClassName">
            <span class="title">
            {{ title }}
            </span>

            <span v-if="description" class="brief">
            {{ description }}
            </span>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ "title", "description", "barcolor", "classname", "size" ],
        data() {
            return {

            }
        },
        computed: {
            getClassName: function() {
                switch(this.size) {
                    case 'sm' : return "py-3";
                    default : return "";
                }
            }
        },
        methods: {

        }
    }
</script>

<style lang="scss" scoped>

</style>