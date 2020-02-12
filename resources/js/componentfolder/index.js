import Vue from "vue/dist/vue";
import SecComp from "./seccomp.vue"


if (document.getElementById('indexsec')) {

    new Vue({
        el : "#indexsec",
        components: {
            SecComp
        }
    })
}
