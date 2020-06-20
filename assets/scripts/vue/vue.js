import Vue from "vue";
import IliffVideo from "./components/iliff-video.vue"

Vue.config.productionTip = false;

export default {
    initialize() {
        if (document.getElementById('vue-root')) {
            new Vue({
                el: "#vue-root",
                components: {IliffVideo}
            });
        }
    }
}
