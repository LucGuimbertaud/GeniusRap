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
            track: null,
            artist: null,
        };
    },

    created() {
        this.loading = true;

        const request_track = axios
            .get(`/api/track/${this.$route.params.id}`)
            .then(response => {
                this.track = response.data;
            });

        const request_artist = axios
            .get(`/api/artist/${$track.artist_id}`)
            .then(response => {
                this.artist = response.data;
                this.loading = false;
            });
    }
};
</script>
