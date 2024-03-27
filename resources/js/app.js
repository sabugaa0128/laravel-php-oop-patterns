import Vue from "vue";
import PostComponent from "./components/PostComponent.vue";

require('./bootstrap');

const app = new Vue({
    el: '#app',

    components: {
        PostComponent: PostComponent
    }
})
