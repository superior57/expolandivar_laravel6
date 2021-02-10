require('./bootstrap');
import Vue from "vue";
import Flickity from 'vue-flickity';
import VueCarousel from 'vue-carousel';
 
Vue.use(VueCarousel);
// Vue.use(Flickity);

Vue.component('event-item', require('./components/EventComponent.vue').default);
Vue.component('history-card', require('./components/HistoryCardComponent.vue').default);
Vue.component('unite-item', require('./components/UniteComponent.vue').default);



/**
 * @brief generate vue contents by class name "vue-content"
 */
$('.vue-content').each(function() {
    new Vue({
        components: {
            Flickity
        },
        data() {
            return {
                flickityOptions: {
                    prevNextButtons: false,
                    pageDots: false,
                    watchCSS: true,
                    cellAlign: 'left'
                  }
            }
        },
        el: this
    });
});
// end vue content

// register page
if(document.getElementById('registration')) {
    const content_wrapper = new Vue({
        el: '#registration',
        data: {
            
        },
        mounted: function() {

        },
        methods: {
            seePassword: function(event, element_id) {
                let el = $(`#${element_id}`);
                let type = el.attr('type');
                let icon = $(event.target.tagName == "I" ? event.target : $(event.target).find('i'));

                if(type == "password") {
                    el.attr('type', "text");
                    icon.removeClass('fa-eye');
                    icon.addClass('fa-eye-slash');      
                } else {
                    el.attr('type', "password");
                    icon.removeClass('fa-eye-slash');
                    icon.addClass('fa-eye'); 
                }
            }
        }
    });
}
// end register page