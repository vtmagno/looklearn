<template>

    <div class="contacts-list">



        <ul>

            <li v-for="contact in contacts" :key="contact.id">
            <div class="contact">
                <p class='name'>{{contact.name}}</p>
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

        }
        
    }

</script>