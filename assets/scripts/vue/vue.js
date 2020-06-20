import Vue from "vue";
import IliffVideo from "./components/iliff-video.vue"

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
