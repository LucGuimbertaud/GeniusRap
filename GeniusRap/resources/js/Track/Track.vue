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

        // const request_track = axios.get(`/api/track/${this.$route.params.id}`);
        // const request_artist = axios.get(`/api/artist/${this.track.artist_id}`);

        // axios
        //     .all([request_track, request_artist])
        //     .then(
        //         axios.spread((...responses) => {
        //             this.track = responses[0].data;
        //             this.artist = responses[1].data;
        //             this.loading = false;
        //         })
        //     )
        const request_track = axios
            .get(`/api/track/${this.$route.params.id}`)
            .then(response => {
                this.track = response.data;
                this.loading = false;
            });


    },

    mounted() {
        const request_artist = axios
            .get(`/api/artist/${this.track.artist_id}`)
            .then(response => {
                this.artist = response.data;
            });
    }
};
</script>
