<template>
    <div>
        <div v-if="loading">
            Loading..
        </div>
        <div v-else>
            <h1> {{ track.title }} </h1>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            track: null
        };
    },

    created() {
        this.loading = true;

        const request = axios
            .get(`/api/track/${this.$route.params.id}`)
            .then(response => {
                this.track = response.data;
                this.loading = false;
            });
    }
};
</script>
