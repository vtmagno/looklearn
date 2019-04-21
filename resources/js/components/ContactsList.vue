<template>

    <div class="contacts-list">
        <ul>
            <li v-for="contact in contacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'selected': contact == selected }">
                <div class="avatar">
                    <span class="dot"></span>
                </div>
                <div class="contact">
                    <p class="name">{{ contact.name }}</p>
                    <p class="username">{{ contact.username }}</p>
                    <p class="email">{{ contact.email }}</p>
                </div>

            </li>
        </ul>
    </div>
</template>

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
            selectContact(contact){
                this.selected = contact;
                this.$emit('selected', contact);
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

        &.selected{
            background-color: #efefef;
        }

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