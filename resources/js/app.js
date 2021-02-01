require('./bootstrap');
import Vue from "vue";

Vue.component('event-item', require('./components/EventComponent.vue').default);


if(document.getElementById('content_wrapper')) {
    const content_wrapper = new Vue({
        el: '#content_wrapper'
    });
}