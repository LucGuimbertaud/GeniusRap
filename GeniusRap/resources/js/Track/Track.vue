<template>
    <div>
        <div v-if="loading">
            Loading..
        </div>
        <div v-else>
            <h1>{{ track[0].title }}</h1>
            <h3>{{ track[0].name }}</h3>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            loading: false,
            track: null,
            artist: null
        };
    },

    created() {
        this.loading = true;

        const request_track = axios
            .get(`/api/track/${this.$route.params.id}`)
            .then(response => {
                this.track = response.data;
                this.loading = false;
            });
    },
};
</script>
