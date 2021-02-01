<template>
    <div class="comming-event-item">
        <div class="date d-flex">
            <div class="mr-auto my-auto">
                <span class="day">{{ date }}</span><br>
                <span class="time">{{ time }}</span>
            </div>
        </div>
        <div class="comming-event-body">
            <div class="head">
                <span class="title">{{ name }}</span>
                <span class="star">
                    <i class="fa fa-star-o"></i>
                    Me interesa
                </span>
            </div>
            <span class="brief">
            {{ description }}
            </span>                            
        </div>
        <div class="tool-group">
            <a href="" class="add"><i class="fa fa-plus-square-o"></i></a>
        </div>
    </div>
</template>

<script>
    export default {
        props: [ "name", "description", "date", "time" ],
        data() {
            return {
                
            }
        },
        mounted() {
            console.log(this.name);
        }
    }
</script>