<template>
    <v-snackbar v-model="toast" timeout="3000" :color="color">
        {{  message }}
        <template v-slot:action="{ attrs }">
            <v-btn
                color="white"
                text
                v-bind="attrs"
                @click="toast = false"
                >
                <v-icon>mdi-close-box</v-icon>
            </v-btn>
        </template>
    </v-snackbar>
</template>

<script>
export default {
    name: "Toast",
    props: ['toast', 'message', 'toastColor'],
    computed: {
        color() {
            if (this.toastColor != null) {
                return this.toastColor
            }
            return 'green darken-3'
        }
    }
}
</script>

<style>

</style>