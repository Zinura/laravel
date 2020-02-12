<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component11112</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>


<!--                    <input type="text" v-model="senddata" placeholder="Send Header">-->
                    <input type="text" v-model="senddata" v-on:change="SendHeader()" placeholder="Send Header">

<!--                    <input type="text" v-model="body">-->

                    <h4>{{title}}</h4>
                    <h4>{{body}}</h4>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return{
                senddata : ''
            }
        },

        props: {
            title : String,
            body : String
        },

        methods: {
            SendHeader(x){
                this.$emit('headershow', this.senddata);
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        created() {
        }
    }
</script>
