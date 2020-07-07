<template>
    <div>
        <div v-if="loading">
            Loading...
        </div>
        <div v-else class="container">
            <div class="row mt-5">
                <div class="col-4">
                    <h3>{{ artist[0].artist_name }}</h3>
                </div>
                <div class="col-3 d-flex justify-content-between">
                    <p>{{ artist[0].name }}</p>
                    <p>{{ artist[0].surname }}</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4">
                    <img
                        src="../../../storage/app/img/unknown.png"
                        class=" img-thumbnail img-fluid"
                        width="160px"
                        height="160px"
                    />
                </div>
                <div class="col-6">
                    <h3>Tracks</h3>
                    <div v-for="track in artist" :key="track.title" class="">
                        <router-link
                            :to="{
                                name: 'track',
                                params: { id: track.track_id }
                            }"
                            push
                        >
                            {{ track.title }}
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            artist: null,
            loading: false
        };
    },

    created() {
        this.loading = true;
        const request = axios
            .get(`/api/artist/${this.$route.params.id}`)
            .then(response => {
                this.artist = response.data;
                this.loading = false;
            });
    }
};
</script>
