<template>
    <li class="dropdown">
        <a href="#!" class="dropdown-toggle icon-menu" data-toggle="dropdown"
            ><i class="icon-bell far fa fa-bell-o"></i>
            <span class="notification-dot" v-if="messages > 0"></span
        ></a>
        <ul class="dropdown-menu notifications">
            <li class="header">
                <strong>You have {{ messages }} new Messages</strong>
            </li>
            <li class="footer">
                <a href="#" v-on:click="goInbox()" class="more"
                    >See All Messages</a
                >
            </li>
        </ul>
    </li>
</template>

<script>
export default {
    props: ["get_messages_url", "inbox"],
    mounted() {
        window.setInterval(() => {
            this.fetchMessages();
        }, 3000);
    },
    data() {
        return {
            messages: 0
        };
    },
    created() {
        this.fetchMessages();
    },
    methods: {
        fetchMessages() {
            axios.get(this.get_messages_url).then(response => {
                this.messages = response.data.message;
            });
        },
        goInbox() {
            window.location.href = this.inbox;
        }
    }
};
</script>

<style></style>
