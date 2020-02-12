<template>

    <tr>
        <td v-bind:style="styleBorder">{{article.id}}</td>
        <td v-bind:style="styleBorder">{{article.title}}</td>
        <td v-bind:style="styleBorder">{{article.body}}</td>
    </tr>

</template>

<script>
    export default {
        name: "TableContent",

        props: {
            article: {
                type: Object,
                require: true
            }
        },

        data() {
            return{
                styleBorder : {
                    border : '1px solid black',
                }
            }
        }
    }
</script>

<style scoped>

</style>
