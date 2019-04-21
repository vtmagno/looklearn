<template>

    <div class="conversation">

        <h5>{{ contact ? contact.name : "Select a Contact"}}</h5>

        <MessageFeed :contact="contact" :messages="messages"/>
        <MessageComposer @send="sendMessage"/>

    </div>

</template>

<script>

    import MessageFeed from './MessageFeed';
    import MessageComposer from './MessageComposer';

    export default{

        props:{
            contact: {
                type: Object,
                default: null
            },
            messages:{
                type: Array,
                default:[]
            }
        },

        methods:{
            sendMessage(text){
               if(!this.contact)
               {
                   return;
               }
               
               axios.post('/conversation/send', {
                   contact_id: this.contact.id,
                   text: text
               }).then((response)=>{
                   this.$emit('new', response.data);
               })
            }
        },
        
        components: {MessageFeed, MessageComposer}

    }

</script>

<style lang="scss" scoped>

.conversation{
    flex: 5;
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    h5 {
        font-size: 20px;
        padding: 10px;
        margin: 0;
        border-bottom: 1px dashed lightgray;
    }
}

</style>