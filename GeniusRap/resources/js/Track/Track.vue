<template>
    <div class=" container w-90 mt-5">
        <div v-if="loading">
            Loading..
        </div>
        <div v-else>
            <div class="row mb-4">
                <div class=" col-4">
                    <img
                        src="../../../storage/app/img/unknown.png"
                        class=" img-thumbnail img-fluid"
                        width="160px"
                        height="160px"
                    />
                </div>
                <div class=" col-6">
                    <h1>{{ tracks[0].title }}</h1>
                    <p>Date de sortie: {{ tracks[0].release_date }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <ArtistRouter
                        v-for="track in tracks"
                        :key="track.id"
                        v-bind="track"
                    >
                    </ArtistRouter>
                </div>
                <div class="col-6">
                    <h3>Paroles</h3>
                    <p>
                        {{ tracks[0].lyrics }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import ArtistRouter from "./Routers/ArtistRouter"
export default {
    components: {
        ArtistRouter
    },

    data() {
        return {
            loading: false,
            tracks: null,
            artist: null
        };
    },

    created() {
        this.loading = true;

        const request_track = axios
            .get(`/api/track/${this.$route.params.id}`)
            .then(response => {
                this.tracks = response.data;
                this.loading = false;
            });
    }
};
</script>
