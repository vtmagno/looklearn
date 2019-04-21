<template>

    <div class="contacts-list">
        <ul>
            <li v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'selected': contact == selected }">
                <div class="avatar">
                    <span class="dot"></span>
                </div>
                <div class="contact">
                    <p class="name"><b>{{ contact.name }}</b></p>
                    <p class="username">{{ contact.username }}</p>
                    <p class="email">{{ contact.email }}</p>
                </div>
                <span class="unread" v-if="contact.unread">{{ contact.unread }}</span>
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
                selected: this.contacts.length ? this.contacts[0] : null
            };

        },

        methods: {
            selectContact(contact){
                this.selected = contact;
                this.$emit('selected', contact);
            }
        },
        
       computed: {
            sortedContacts() {
                return _.sortBy(this.contacts, [(contact) => {
                    if (contact == this.selected) {
                        return Infinity;
                    }
                    return contact.unread;
                }]).reverse();
            }
        }
    }
</script>

<style lang="scss" scoped>

.contacts-list{
    flex: 4;
        max-height: 600px;
        overflow: scroll;
        border-left: 1px solid #a6a6a6;

    ul {
        text-align:center;
        list-style-type: none;
        padding-left: 0;
    

    li{
        display: flex;
        
        padding: 2px;
        border-bottom: 1px solid #efefef;
        height: 60px;
        position: relative;
        cursor: pointer;

        &.selected{
            background-color: #efefef;
        }

        span.unread {
            background: palevioletred;
            color: #fff;
            position: absolute;
            right: 11px;
            top: 20px;
            display: flex;
            font-weight: 700;
            min-width: 20px;
            justify-content: center;
            align-items: center;
            line-height: 20px;
            font-size: 12px;
            padding: 0 4px;
            border-radius: 3px;
        }

        .avatar {
            flex: 0;
            display: flex;

            img {
                width: 35px;
                border-radius: 50%;
                margin: 0 auto;
            }

        }

        .contact {
            flex: 15;
            font-size: 10px;
            overflow: hidden;
            display: flex; 
            flex-direction: column;

            p {
                margin: 0 auto;
            }

            &.name {
                        font-weight: bold;
                    }
            
        }

        .dot {
        height: 50px;
        width: 50px;
        background-color: #bbb;
        border-radius: 50%;
        }


    }
    }

}

</style>