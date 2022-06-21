<template>
    <div class="single-chat">
        <div
            class="chat-back-option px-1 pb-2"
            @click="$emit('close-single-chat')"
        >
            <span><i class="fas fa-chevron-left"></i></span>
            <span>Back to all chats</span>
        </div>
        <div class="chat-group chat-user-name p-2">
            <span class="font-weight-bold"
                >{{ writer.first_name }} {{ writer.last_name }}</span
            >
        </div>
        <!-- messages -->
        <div class="chat-messages">
            <!-- <div
                class="chat-message my-message writer-message m-1 mb-2 p-1 rounded d-flex justify-content-between"
            >
                <span>Hello</span>
                <span>12:56 pm</span>
            </div> -->
            <div
                class="chat-message m-1 mb-2 p-1 rounded d-flex justify-content-between"
                v-for="message in messages"
                :key="message.id"
                :class="
                    message.user_id === user.id
                        ? 'my-message'
                        : 'writer-message'
                "
            >
                <span>{{ message.message }}</span>
                <small class="mt-1">{{
                    new Date(message.created_at).toLocaleTimeString("en-US", {
                        hour: "2-digit",
                        minute: "2-digit"
                    })
                }}</small>
            </div>
        </div>
        <div class="chat-input">
            <form @submit.prevent="handleSubmit" class="d-flex">
                <input
                    type="text"
                    placeholder="Write your message"
                    v-model="message"
                />
                <button type="submit" class="chat-send-msg-panel__btn">
                    Send
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    props: ["user", "writer", "add_message_url", "messages"],
    data() {
        return {
            message: ""
        };
    },

    methods: {
        handleSubmit() {
            axios
                .post(this.add_message_url, {
                    receiverId: this.writer.id,
                    message: this.message
                })
                .then(response => {
                    this.message = "";
                    this.$emit("message-send");
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>

<style></style>
