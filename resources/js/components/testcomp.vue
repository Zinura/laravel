<template>
    <div class="container">


        <h1>Test {{title}}</h1>
        <p>Lorem {{body}}</p>
        <input type="text" v-model="message" placeholder="write something">
        <h1>{{ message }}</h1>


        <input type="text" v-model="title">
        <input type="text" v-model="body">

        <h1>{{header}}</h1>

        <example-component  v-bind:title="title" :body="body" v-on:headershow="showHeader($event)"></example-component>



        <table>

            <tr is="table-content" v-if="exists" v-for="article in articles" v-bind:key="article.id" :article="article"></tr>

        </table>

<!--        <div v-for="article in articles" v-bind:key="article.id">-->
<!--            <h3>{{article.id + '-' +article.title}}</h3>-->
<!--            <p>{{article.body}}</p>-->
<!--        </div>-->



    </div>
</template>

<script>
    const axios = require('axios');
    axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    import ExampleComponent from "./ExampleComponent";
    import TableContent from "./TableContent";

    export default {
        name: "test-comp",

        data() {

            return{

                styleBorder : {
                    border : '1px solid black',
                },
                articles : null,
                article: {
                    id      :   '',
                    title   :   '',
                    body    :   '',
                },
                ex_title : '',
                ex_body : '',
                header : ''
            }
        },

        components : {
            ExampleComponent,
            TableContent
        },
        props: {
            exists : Number,
            message : String,
            body : String,
            title : String
        },

        created(){

          this.getArticles()
        },
        computed: {

            getSeven(){
                return 7;
            }

        },

        methods: {

            getArticles(){
                const THIS = this;
                // fetch(getArt)
                //     .then(response => response.json())
                //     .then(response => {
                //         this.articles = response.data;
                //     }).catch(function (error) {
                //     console.log(error);
                //     })

                axios.get(getArt).then(function (response) {
                    console.log(response.data);
                    THIS.articles = response.data;
                })
            },
            showHeader(x){
                this.header = x;
            }
        }
    }
</script>

