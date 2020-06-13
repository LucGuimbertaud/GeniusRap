<template>
    <div>
        <div v-if="loading">
            <p class=" text-center mt-5">Loading..</p>
        </div>
        <div v-else>
            <ul class="list-group list-group-flush w-75 m-auto">
                <h3 class="mt-5">Top Musiques COMPLETE</h3>
                    <track-item
                        v-for="track in tracks"
                        :key="track.id"
                        v-bind="track"
                    ></track-item>
            </ul>
        </div>
    </div>
</template>

<script>
import TrackItem from "./TrackItem";

export default {
    components: {
        TrackItem
    },

    data() {
        return {
            tracks: null,
            loading: false
        };
    },

    created() {
        this.loading = true;
        const request = axios.get("api/tracks").then(response => {
            this.tracks = response.data;
            this.loading = false;
        });
    }
};
</script>
