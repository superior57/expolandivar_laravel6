<template>
    <div class="comming-event-item">
        <div class="date d-flex">
            <div class="mr-auto my-auto">
                <span class="w-100 day">{{ date }}</span><br>
                <span class="w-100 time">{{ time }}</span>
            </div>
        </div>
        <div class="comming-event-body">
            <div class="head">
                <span class="title">{{ name }}</span>
                <a v-if="!eventended" href="#" @click.prevent="doInterest">
                    <span v-if="is_interested" class="star text-secondary">
                        <i class="fa fa-star"></i>
                        Me interesa
                    </span>
                    <span v-else class="star">
                        <i class="fa fa-star-o"></i>
                        Me interesa
                    </span>
                </a>
            </div>
            <span class="brief">
            {{ description }}
            </span>                            
        </div>
        <div v-if="plusbutton" class="tool-group">
            <a href="" class="add"><i class="fa fa-plus-square-o"></i></a>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ "name", "description", "date", "time", "plusbutton", "interested", "eventended" ],
        data() {
            return {
                is_interested: false
            }
        },
        computed: {
        },
        mounted() {
            this.is_interested = this.interested;            
        },
        methods: {
            doInterest: function() {
                this.is_interested = !this.is_interested;      
            }
        }
    }
</script>