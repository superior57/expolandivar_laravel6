require('./bootstrap');
import Vue from "vue";



if(document.getElementById('content_wrapper')) {
    const content_wrapper = new Vue({
        el: '#content_wrapper'
    });
}