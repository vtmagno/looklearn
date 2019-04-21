<template>

    <div class="feed">
        <ul v-if="contact">
            <li v-for="message in messages" :class="`message${message.to == contact.id ? 'sent' : 'received'}`" :key="message.id">
            
                <div class="text">

                    {{message.text}}

                </div>
            
            
            </li>
        </ul>
    </div>

</template>

<script>

    export default{
        props: {
            contact: {
                type: Object,
            },
            messages :{
                type: Array,
                required: true
            }
        }

    }

</script>

<style lang="scss" scoped>

.feed{
    background: #efefef;
    height: 100%;
    max-height: 470px;
    overflow: scroll;
    
    ul {
        list-style-type: none;
        padding: 5px;
    }
}

</style>