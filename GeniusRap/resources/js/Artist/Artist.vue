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
                    <p>Name: {{ artist[0].name }}</p>
                    <p>Surname: {{ artist[0].surname }}</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4"></div>
                <div class="col-6">
                    <h3>Tracks</h3>
                </div>
            </div>
            <div v-for="track in artist" :key="track.title" class="row">
                <div class="col-4"></div>
                <div class="col-6">
                    <router-link
                        :to="{ name: 'track', params: { id: track.track_id } }"
                        push
                    >
                        {{ track.title }}
                    </router-link>
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
