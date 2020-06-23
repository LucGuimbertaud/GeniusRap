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
                    <h1>{{ track[0].title }}</h1>
                    <p>Date de sortie: {{ track[0].release_date }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h3>{{ track[0].name }}</h3>
                </div>
                <div class="col-6">
                    <h3>Paroles</h3>
                    <p>
                        {{ track[0].lyrics }}
                    </p>
                </div>
            </div>
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
    }
};
</script>
