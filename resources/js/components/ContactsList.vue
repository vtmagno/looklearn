<template>

    <div class="contacts-list">



        <ul>

            <li v-for="(contact, index) in contacts" :key="contact.id" @click="selectContact(index, contact)" :class="{'selected': index == selected}">
            
            <div class="avatar">

                <span class="dot"></span>

            </div>
            
            
            <div class="contact">
                <p class='name'>{{contact.name}}</p>
                <p class='name'><i>Username:{{contact.username}}</i></p>
            </div>   
        

            </li>
        </ul>


    </div>

</template>

<script>
    export default{
        props: {
            contacts: {
                type: Array,
                default: []

            }

        },

        data(){
            return {
                selected: 0
            };

        },

        methods: {
            selectedContact(index, contact){
                this.selected = index;
                this.$emit('selected', contact)
            }

        }
        
    }

</script>

<style lang="scss" scoped>

.contacts-list{
    flex: 5;

    ul {
        text-align:center;
        list-style-type: none;
        padding-left: 0;
        max-height:600px;
        overflow: scroll;
        border-left: 1px solid #efefef;
    }

    li{
        text-align:center;
        display: flex;
        padding: 2px;
        border-bottom: 1px solid #efefef;
        height: 60px;
        position: relative;
        cursor: pointer;

        .avatar {
            flex: 1;
            display: flex;
            align-items: center;

            img {
                width: 35px;
                border-radius: 50%;
                margin: 0 auto;
            }

        }

        .contact {
            flex: 3;
            font-size: 10px;
            overflow: hidden;
            display: flex; 
            flex-direction: column;
            justify-content: center;
            
        }

        .contact p {
                margin: 0 auto;
        }

                .dot {
        height: 50px;
        width: 50px;
        background-color: #bbb;
        border-radius: 50%;
        }



    }




}

</style>